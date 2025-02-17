<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setStatut('En attente');
            $reclamationRepository->save($reclamation, true);

            $this->addFlash('success', 'Votre réclamation a été envoyée avec succès. Nous la traiterons dans les plus brefs délais.');
            return $this->redirectToRoute('app_reclamation_success', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/public/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/success', name: 'app_reclamation_success', methods: ['GET'])]
    public function success(): Response
    {
        return $this->render('reclamation/public/success.html.twig');
    }

    #[Route('/reclamation/mes-reclamations', name: 'app_reclamation_mes_reclamations')]
    public function mesReclamations(Request $request, EntityManagerInterface $entityManager): Response
    {
        $email = $request->getSession()->get('user_email');
        
        if (!$email) {
            // If no email in session, ask for it
            if ($request->isMethod('POST')) {
                $email = $request->request->get('email');
                if ($email) {
                    $request->getSession()->set('user_email', $email);
                } else {
                    $this->addFlash('error', 'Veuillez fournir votre email.');
                    return $this->render('reclamation/public/email_form.html.twig');
                }
            } else {
                return $this->render('reclamation/public/email_form.html.twig');
            }
        }

        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findBy(['email' => $email], ['createdAt' => 'DESC']);

        return $this->render('reclamation/public/mes_reclamations.html.twig', [
            'reclamations' => $reclamations,
            'email' => $email
        ]);
    }
}
