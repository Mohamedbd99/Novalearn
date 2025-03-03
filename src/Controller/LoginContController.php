<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class LoginContController extends AbstractController
{
    #[Route(path: '/home', name: 'app_home')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
<<<<<<< HEAD
        // Récupérer les erreurs d'authentification et l'email saisi
        $error = $authenticationUtils->getLastAuthenticationError();
        $email = $authenticationUtils->getLastUsername();

        // Si l'utilisateur est déjà connecté, le rediriger
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home'); // Redirige après connexion réussie
        }

        return $this->render('home/base.html.twig', [
=======
        $error = $authenticationUtils->getLastAuthenticationError();
        $email = $authenticationUtils->getLastUsername();

        if ($this->getUser()) {
            return $this->redirectToRoute('app_home'); 
        }

        return $this->render('Home/base.html.twig', [
>>>>>>> Gharsallah_Ali_Hamma
            'email' => $email,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
<<<<<<< HEAD
        // Symfony gère automatiquement la déconnexion
=======
        
>>>>>>> Gharsallah_Ali_Hamma
    }
}

