<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;

use App\Repository\CourseRepository; // Add this to import the repository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
class CoursDetailsContorller extends AbstractController
{
    #[Route('/courseDet{id}', name: 'course_details')]
    public function index(int $id, CourseRepository $courseRepository): Response
    {
        // Fetch the course by its ID
        $course = $courseRepository->find($id);

        // If no course is found, throw an exception
        if (!$course) {
            throw $this->createNotFoundException('Course not found');
        }

        // Pass the course data to the template
        return $this->render('course_user/details_cours.html.twig', [
            'course' => $course,
        ]);
    }
    #[Route('/course/download/{id}', name: 'course_download')]
    public function downloadPdf(int $id, CourseRepository $courseRepository, EntityManagerInterface $entityManager): Response
    {
        // 🔹 Récupérer le cours depuis la base de données
        $course = $courseRepository->find($id);
    
        // Vérifier si le cours existe
        if (!$course) {
            throw $this->createNotFoundException('Cours non trouvé');
        }

        // 🔹 Incrémenter le nombre de téléchargements
        $course->incrementTelechargements();
        $entityManager->persist($course);
        $entityManager->flush(); // Sauvegarder immédiatement la mise à jour

        // 🔹 Configurer DomPDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        $dompdf = new Dompdf($pdfOptions);
    
        // 🔹 Générer le HTML avec les données du cours
        $html = $this->renderView('course_user/pdf.html.twig', [
            'course' => $course
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // 🔹 Télécharger le PDF avec un nom dynamique
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="cours_' . $course->getId() . '.pdf"',
            ]
        );
    }




}
