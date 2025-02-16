<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('Home/base.html.twig');
    }

    #[Route('/HomeUser', name: 'app_HomeUser')]
    public function home(): Response
    {
        return $this->render('user/homeUser.html.twig');
    }

    #[Route('/TeamDetails', name: 'app_TeamDetails')]
    public function teamdet(): Response
    {
        return $this->render('home/TeamDetails.html.twig');
    }

    #[Route('/Team', name: 'app_Team')]
    public function team(): Response
    {
        return $this->render('home/Team.html.twig');
    }

    #[Route('/Courses', name: 'app_Courses')]
    public function couses(): Response
    {
        return $this->render('home/Courses.html.twig');
    }

    #[Route('/HomeMedecin', name: 'app_HomeMedecin')]
    public function homeMed(): Response
    {
        return $this->render('homeMedecin.html.twig');
    }
}

