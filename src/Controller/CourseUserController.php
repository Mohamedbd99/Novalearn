<?php

namespace App\Controller;

use App\Entity\Course;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseUserController extends AbstractController
{
    #[Route('/courseUser', name: 'app_course_user')]
    public function index(Request $request, CourseRepository $courseRepository): Response
    {
        $sort = $request->query->get('sort', 'downloads_desc'); // Récupération du tri
    
        // Appliquer le tri en fonction de la requête
        $orderBy = match ($sort) {
            'downloads_asc' => ['nombreDeTelechargements' => 'ASC'],
            'downloads_desc' => ['nombreDeTelechargements' => 'DESC'],
            default => ['nombreDeTelechargements' => 'DESC'],
        };
    
        // Récupérer les cours triés
        $courses = $courseRepository->findBy([], $orderBy);
    
        return $this->render('course_user/index.html.twig', [
            'courses' => $courses,
            'sort' => $sort, // Assure que "sort" est bien envoyé à Twig
        ]);
    }
    #[Route('/courses', name: 'course_list')]
    public function list(Request $request, CourseRepository $courseRepository): Response
    {
        $sort = $request->query->get('sort', 'default'); // Récupérer le tri depuis l'URL
    
        if ($sort === 'desc') {
            $courses = $courseRepository->findByMostDownloaded();
        } else {
            $courses = $courseRepository->findAll(); // Par défaut, tous les cours
        }
    
        return $this->render('course_user/index.html.twig', [
            'courses' => $courses,
            'sort' => $sort, // 🔥 Ajout de la variable sort
        ]);
    }

    
}
