<?php

namespace App\Controller;

use App\Repository\ExerciceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ExerciceENController extends AbstractController
{
    #[Route('/E_lexercices', name: 'app_exercice_e', methods: ['GET'])]
    public function index(ExerciceRepository $exerciceRepository): Response
    {
        return $this->render('exercice/liste_exerciceE.html.twig', [
            'exercices' => $exerciceRepository->findAll(),
        ]);
    }
}