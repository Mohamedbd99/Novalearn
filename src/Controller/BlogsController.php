<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogsController extends AbstractController
{#[Route('/blogsUser', name: 'app_blogs')]
    public function index(BlogRepository $blogRepository): Response
    {
        // Requête pour récupérer les blogs avec leurs auteurs
        $blogs = $blogRepository->createQueryBuilder('b')
            ->leftJoin('b.author', 'a') // Jointure avec l’auteur
            ->addSelect('a') // Sélectionne aussi l’auteur
            ->getQuery()
            ->getResult();
    
        return $this->render('blogsUser.html.twig', [
            'blogs' => $blogs,
        ]);
    }

    #[Route('/blogsEns', name: 'app_blogs_ens')]
    public function blog(BlogRepository $blogRepository): Response
    {
        // Requête pour récupérer les blogs avec leurs auteurs
        $blogs = $blogRepository->createQueryBuilder('b')
            ->leftJoin('b.author', 'a') // Jointure avec l’auteur
            ->addSelect('a') // Sélectionne aussi l’auteur
            ->getQuery()
            ->getResult();
    
        return $this->render('blogsEnseignant.html.twig', [
            'blogs' => $blogs,
        ]);
    }
    
}
