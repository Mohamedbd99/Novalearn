<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Entity\Response; // Add the Response entity
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceDetController extends AbstractController
{
    // Route to display the exercise
    #[Route('/exercice{id}', name: 'app_exercice_show', requirements: ['id' => '\d+'])]
    public function show(int $id, EntityManagerInterface $entityManager): HttpResponse
    {
        $exercice = $entityManager->getRepository(Exercice::class)->find($id);

        if (!$exercice) {
            throw $this->createNotFoundException('Exercice non trouvé.');
        }

        return $this->render('exercice/ExerciceDet.html.twig', [
            'exercice' => $exercice,
        ]);
    }



    // Route to handle the response submission
    #[Route('/exercice{id}/response', name: 'app_response_create', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function createResponse(int $id, Request $request, EntityManagerInterface $entityManager): HttpResponse
    {
        // Récupérer l'exercice
        $exercice = $entityManager->getRepository(Exercice::class)->find($id);
        if (!$exercice) {
            throw $this->createNotFoundException('Exercice non trouvé.');
        }

        // Vérifier que l'utilisateur est connecté (l'élève)
        $eleve = $this->getUser(); // Cela suppose que l'élève est l'utilisateur connecté

        if (!$eleve) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour soumettre une réponse.');
        }

        // Récupérer le contenu de la réponse
        $responseContent = $request->request->get('response_content');

        if (!$responseContent) {
            // Vérifier que le contenu de la réponse est bien présent
            $this->addFlash('error', 'Le contenu de la réponse ne peut pas être vide.');
            return $this->redirectToRoute('app_exercice_show', ['id' => $id]);
        }

        // Créer une nouvelle réponse
        $response = new Response();
        $response->setExercice($exercice); // Associer l'exercice à la réponse
        $response->setContenu($responseContent); // Récupérer le contenu de la réponse

        // Persister la réponse dans la base de données
        $entityManager->persist($response);
        $entityManager->flush();

        // Ajouter un message flash de succès
        $this->addFlash('success', 'Réponse soumise avec succès !');

        
    }
}
