<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class GenerationController extends AbstractController
{
    #[Route('/generate-content', name: 'generate_content', methods: ['GET', 'POST'])]
    public function generateContent(Request $request): Response
    {
        $generatedContent = null;

        if ($request->isMethod('POST')) {
            // Récupérer la description entrée par l'utilisateur
            $description = $request->request->get('description');

            if (!$description) {
                $this->addFlash('error', 'Veuillez entrer une description.');
                return $this->redirectToRoute('generate_content');
            }

            // Appeler l'API FastAPI
            $client = HttpClient::create();
            $url = 'http://127.0.0.1:8001/generate';

            try {
                $response = $client->request('POST', $url, [
                    'json' => ['description' => $description],
                ]);

                $data = $response->toArray();
                $generatedContent = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Aucune réponse reçue';

            } catch (TransportExceptionInterface $e) {
                $this->addFlash('error', 'Erreur de connexion avec l’API.');
            }
        }

        return $this->render('generation/generate.html.twig', [
            'generatedContent' => $generatedContent,
        ]);
    }
}