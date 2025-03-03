<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\FormMedType;
use App\Form\FormParType;
use App\Form\FormEnsType;
use Doctrine\ORM\EntityManagerInterface;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/AddUser', name: 'app_AddUser')]
    public function addUser(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_AddUser');  
        }

        return $this->render('Admin/AddUser.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/AddParent', name: 'app_AddParent')]
    public function addParent(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(FormParType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_AddParent');  
            
        }

        return $this->render('Admin/AddParent.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/AddMedecin', name: 'app_AddMedecin')]
    public function addMedecin(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(FormMedType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_AddMedecin');  
        }

        return $this->render('Admin/AddMedecin.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/AddEnseignant', name: 'app_AddEnseignant')]
    public function addEnseignant(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(FormEnsType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_AddEnseignant');  
        }

        return $this->render('Admin/AddEnseignant.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/DashboardPar', name: 'app_DashPar')]
    public function dashboardParent(): Response
    {
        $user = $this->getUser(); // Assurez-vous que l'utilisateur est connecté
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        return $this->render('Parent/DashboardPar.html.twig', [
            'user' => $user
        ]);
    }
    

}

