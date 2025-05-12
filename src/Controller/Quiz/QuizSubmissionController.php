<?php

namespace App\Controller\Quiz;

use App\Entity\Quiz;
use App\Entity\QuizSubmission;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuizSubmissionController extends AbstractController
{
    #[Route('/save-quiz-submission', name: 'save_quiz_submission', methods: ['POST'])]
    public function saveSubmission(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
    
            if (!$data) {
                return new JsonResponse(['status' => 'error', 'message' => 'Invalid JSON'], 400);
            }
    
            $responses = $data['responses'] ?? null;
            $score = $data['score'] ?? null;
            $quizId = $data['quizId'] ?? null;
    
            error_log("Responses: " . print_r($responses, true) . " Score: " . $score . " QuizID: " . $quizId);
    
            if ($responses === null || $score === null || $quizId === null) {
                return new JsonResponse(['status' => 'error', 'message' => 'Missing required data'], 400);
            }
    
            $quiz = $entityManager->getRepository(Quiz::class)->find($quizId);
            if (!$quiz) {
                return new JsonResponse(['status' => 'error', 'message' => 'Quiz not found'], 404);
            }
    
            $submission = new QuizSubmission();
            $submission->setQuiz($quiz);
            $submission->setResponses($responses);
            $submission->setScore($score);
    
            $entityManager->persist($submission);
            $entityManager->flush();
    
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Submission saved',
                'submissionId' => $submission->getId()
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
