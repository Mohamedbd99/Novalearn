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
<<<<<<< HEAD
        return $this->render('Home/base.html.twig');
=======
        return $this->render('/Home/base.html.twig');
>>>>>>> Gharsallah_Ali_Hamma
    }

    #[Route('/HomeUser', name: 'app_HomeUser')]
    public function home(): Response
    {
<<<<<<< HEAD
        return $this->render('user/homeUser.html.twig');
=======
        return $this->render('User/homeUser.html.twig');
>>>>>>> Gharsallah_Ali_Hamma
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

<<<<<<< HEAD
    
=======
    #[Route('/HomeParent', name: 'app_Parent')]
    public function couses(): Response
    {
        return $this->render('Parent/HomeParent.html.twig');
    }
>>>>>>> Gharsallah_Ali_Hamma

    #[Route('/HomeMedecin', name: 'app_HomeMedecin')]
    public function homeMed(): Response
    {
        return $this->render('homeMedecin.html.twig');
    }
<<<<<<< HEAD
=======

    
>>>>>>> Gharsallah_Ali_Hamma
}

