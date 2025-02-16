<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\CourseType;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours', methods: ['GET'])]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('cours.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }


    #[Route('/cours/{id}', name: 'app_detailscours', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Course $course): Response
    
{
    $course = $courseRepository->find((int) $id); // Forcer la conversion en entier

    if (!$course) {
        throw $this->createNotFoundException('Le cours demandé n\'existe pas.');
    }

    return $this->render('detailscours.html.twig', [
        'course' => $course,
    ]);
}

    

    
    #[Route('/cours/new', name: 'course_new', methods: ['GET', 'POST'])]
public function add(Request $request, EntityManagerInterface $entityManager): Response
{
    $course = new Course(); // Crée un nouvel objet Course
    $form = $this->createForm(CourseType::class, $course);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($course);
        $entityManager->flush();

        // Redirige directement vers la liste des cours après l'ajout
        return $this->redirectToRoute('app_cours');
    }

    return $this->render('addcours.html.twig', [
        'form' => $form->createView(),
    ]);
}

    




#[Route('/cours/{id}/edit', name: 'course_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Course $course, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(CourseType::class, $course);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_detailscours', ['id' => $course->getId()]);
    }

    return $this->render('modifier.html.twig', [
        'form' => $form->createView(),
        'course' => $course,
    ]);
}




#[Route('/cours/{id}/delete', name: 'course_delete', methods: ['POST'])]
public function delete(Request $request, Course $course, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $course->getId(), $request->request->get('_token'))) {
        $entityManager->remove($course);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_cours'); // Redirection après suppression
}











}
