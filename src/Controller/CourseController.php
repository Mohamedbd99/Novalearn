<?php

namespace App\Controller;
// src/Controller/CourseController.php
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Entity\User;
use App\Entity\Course;
use App\Form\Course1Type;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/course')]
final class CourseController extends AbstractController
{
    #[Route(name: 'app_course_index', methods: ['GET'])]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('course/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

    #[Route('new', name: 'app_course_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $course = new Course();
        $author = $entityManager->getRepository(User::class)->find(1); // Auteur par défaut
        if ($author) {
            $course->setAuthor($author);
        }
    
        $form = $this->createForm(Course1Type::class, $course);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();
    
            if ($file) {
                $uploadsDirectory = $this->getParameter('uploads_directory'); // Assure-toi d'avoir ce paramètre
                $newFilename = uniqid().'.'.$file->guessExtension();
    
                try {
                    $file->move($uploadsDirectory, $newFilename);
                    $course->setImage($newFilename); // Stocke le nom du fichier dans la base de données
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l’upload du fichier');
                }
            }
              /** @var UploadedFile $videoFile */
    $videoFile = $form->get('video')->getData();
    if ($videoFile) {
        $videoFilename = uniqid().'.'.$videoFile->guessExtension();
        $videoFile->move($this->getParameter('uploads_directory'), $videoFilename);
        $course->setVideo($videoFilename);
    }
    
            $entityManager->persist($course);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_course_index');
        }
    
        return $this->render('course/new.html.twig', [
            'course' => $course,
            'form' => $form->createView(),
        ]);
    }



    #[Route('show{id}', name: 'app_course_show', methods: ['GET'])]
    public function show(Course $course): Response
    {
        return $this->render('course/show.html.twig', [
            'course' => $course,
        ]);
    }

    #[Route('{id}edit', name: 'app_course_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Course $course, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Course1Type::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('course/edit.html.twig', [
            'course' => $course,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_course_delete', methods: ['POST'])]
    public function delete(Request $request, Course $course, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$course->getId(), $request->request->get('_token'))) {
            $entityManager->remove($course);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
    }
   
}
