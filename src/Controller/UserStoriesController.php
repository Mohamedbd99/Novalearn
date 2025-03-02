<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user-stories')]
class UserStoriesController extends AbstractController
{
    #[Route('/', name: 'app_user_stories')]
    public function index(): Response
    {
        return $this->render('user_stories/index.html.twig');
    }
}
