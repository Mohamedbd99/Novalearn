<?php
namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationFrontType;
use App\Service\ProfanityFilter;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationFrontController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation_front')]
    public function index(Request $request, EntityManagerInterface $em, ProfanityFilter $profanityFilter): Response
    {
        $reclamation = new Reclamation();
        $reclamation->setStatut('nouveau');
        $reclamation->setCreatedAt(new DateTimeImmutable());
        
        $form = $this->createForm(ReclamationFrontType::class, $reclamation);
        $form->handleRequest($request);        if ($form->isSubmitted() && $form->isValid()) {
            // Filter profanity from the message
            $filteredMessage = $profanityFilter->filter($reclamation->getMessage());
            $reclamation->setMessage($filteredMessage);
            
            // Filter profanity from the name
            $filteredName = $profanityFilter->filter($reclamation->getNom());
            $reclamation->setNom($filteredName);
            
            $em->persist($reclamation);
            $em->flush();
            
            // Store email in session for checking status later
            $request->getSession()->set('reclamation_email', $reclamation->getEmail());
            
            $this->addFlash('success', 'Votre réclamation a été soumise avec succès. Nous vous contacterons bientôt.');
            return $this->redirectToRoute('app_reclamation_front');
        }
        
        return $this->render('reclamation/front.html.twig', [
            'form' => $form->createView(),
        ]);
    }
      #[Route('/reclamation/mes-reclamations', name: 'app_reclamation_user_list')]
    public function userReclamations(Request $request, EntityManagerInterface $em): Response
    {
        // Check if user is logged in and get email
        $email = $this->getUser() ? $this->getUser()->getUserIdentifier() : null;
        
        if (!$email) {
            // Use session email if available
            $email = $request->getSession()->get('reclamation_email');
            
            if (!$email) {
                return $this->redirectToRoute('app_reclamation_front');
            }
        }
        
        // Get reclamations for this email
        $reclamations = $em->getRepository(Reclamation::class)->findBy(['email' => $email]);
        
        return $this->render('reclamation/user_list.html.twig', [
            'reclamations' => $reclamations,
            'email' => $email
        ]);
    }
}
