<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/mes-reclamations')]
class UserReclamationController extends AbstractController
{
    #[Route('/', name: 'user_reclamation_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $email = $request->getSession()->get('user_email');
        
        if (!$email) {
            $this->addFlash('error', 'Veuillez d\'abord soumettre une réclamation pour obtenir un accès.');
            return $this->redirectToRoute('app_reclamation_new');
        }

        $query = $request->query->get('q');
        $qb = $entityManager->getRepository(Reclamation::class)->createQueryBuilder('r')
            ->where('r.email = :email')
            ->setParameter('email', $email)
            ->orderBy('r.createdAt', 'DESC');

        if ($query) {
            $qb->andWhere('r.message LIKE :query OR r.priorite LIKE :query OR r.statut LIKE :query')
               ->setParameter('query', '%'.$query.'%');
        }

        $reclamations = $qb->getQuery()->getResult();

        return $this->render('user/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/{id}/edit', name: 'user_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $email = $request->getSession()->get('user_email');

        if (!$email) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_reclamation_new');
        }

        // Vérifier si l'utilisateur est propriétaire de la réclamation
        if ($reclamation->getEmail() !== $email) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette réclamation.');
            return $this->redirectToRoute('user_reclamation_index');
        }

        // Vérifier si la réclamation est encore modifiable
        if ($reclamation->getStatut() !== 'En attente') {
            $this->addFlash('error', 'Cette réclamation ne peut plus être modifiée car elle est déjà en cours de traitement.');
            return $this->redirectToRoute('user_reclamation_index');
        }

        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'is_edit' => true,
            'is_user' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Votre réclamation a été mise à jour avec succès.');
            return $this->redirectToRoute('user_reclamation_index');
        }

        return $this->render('user/reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
}
