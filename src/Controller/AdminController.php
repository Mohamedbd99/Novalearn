<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function admin(UserRepository $userRepository): Response
    {
        // Récupérer les utilisateurs triés par rôle
        $parents = $userRepository->findBy(['role' => 'parent']);
        $eleves = $userRepository->findBy(['role' => 'eleve']);
        $enseignants = $userRepository->findBy(['role' => 'enseignant']);
        $medecins = $userRepository->findBy(['role' => 'medecin']);
        
        return $this->render('Admin/admin.html.twig', [
            'parents' => $parents,
            'eleves' => $eleves,
            'enseignants' => $enseignants,
            'medecins' => $medecins,
        ]);
    }
    
    #[Route('/admin/user/{id}/edit', name: 'app_edit_user')]
    public function editUser($id, UserRepository $userRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // Création du formulaire
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user); 
            $entityManager->flush(); 

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('Admin/EditUser.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/user/{id}/delete', name: 'app_delete_user')]
public function deleteUser($id, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
{
    $user = $userRepository->find($id);
    
    if (!$user) {
        throw $this->createNotFoundException('Utilisateur non trouvé');
    }

    $entityManager->remove($user);
    $entityManager->flush();

    $this->addFlash('success', 'Utilisateur supprimé avec succès');

    return $this->redirectToRoute('app_admin');
}



#[Route('/user/edit', name: 'app_edit_users')]
public function editUsers(Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer l'utilisateur connecté
    $user = $this->getUser();

    // Si aucun utilisateur n'est connecté, rediriger vers la page de connexion
    if (!$user) {
        return $this->redirectToRoute('app_home');
    }

    // Créer le formulaire pour éditer l'utilisateur
    $form = $this->createForm(UserType::class, $user);

    // Gérer les soumissions du formulaire
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger vers la page de profil après modification
        return $this->redirectToRoute('app_profile');
    }

    // Afficher le formulaire dans la vue
    return $this->render('user/ModifierProf.html.twig', [
        'form' => $form->createView(),
        'user' => $user, // Passer l'utilisateur pour pré-remplir le formulaire
    ]);
}


}


