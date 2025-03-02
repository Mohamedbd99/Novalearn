<?php

namespace App\Controller;

use App\Service\ChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    #[Route('/chatbot/message', name: 'chatbot_message', methods: ['POST'])]
    public function message(Request $request, ChatbotService $chatbotService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';

        try {
            $response = $chatbotService->getResponse($userMessage);
            return $this->json(['response' => $response]);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Une erreur est survenue'], 500);
        }
    }
}
