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
        $parents = $userRepository->findBy(['role' => 'ROLE_PARENT']);
        $eleves = $userRepository->findBy(['role' => 'ROLE_ELEVE']);
        $enseignants = $userRepository->findBy(['role' => 'enseignant']);
        $medecins = $userRepository->findBy(['role' => 'ROLE_MEDECIN']);
        
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
    $user = $this->getUser();

    if (!$user) {
        return $this->redirectToRoute('app_home');
    }

    $form = $this->createForm(UserType::class, $user);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        $entityManager->flush();

        return $this->redirectToRoute('app_profile');
    }

    return $this->render('User/ModifierProf.html.twig', [
        'form' => $form->createView(),
        'user' => $user, 
    ]);
}

#[Route('/admin/dashboard', name: 'app_admin_dashboard')]
public function dashboard(UserRepository $userRepository): Response
{
    $counts = [
        'eleves' => count($userRepository->findBy(['role' => 'ROLE_ELEVE'])),
        'enseignants' => count($userRepository->findBy(['role' => 'enseignant'])),
        'parents' => count($userRepository->findBy(['role' => 'ROLE_PARENT'])),
        'medecins' => count($userRepository->findBy(['role' => 'ROLE_MEDECIN'])),
    ];

    return $this->render('admin/dashboard.html.twig', [
        'counts' => $counts,
    ]);
}



}


