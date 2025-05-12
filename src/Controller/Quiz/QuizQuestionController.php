<?php

namespace App\Controller\Quiz;

use App\Repository\QuizRepository;
use App\Repository\QuizSubmissionRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizQuestionController extends AbstractController
{
    #[Route('/quizQuestion/{quizId}', name: 'questions_quiz')]
    public function index(
        string $quizId, 
        QuizRepository $quizRepository,
        QuizSubmissionRepository $quizSubmissionRepository
    ): Response {
        // Fetch the quiz entity using the provided quizId
        $quiz = $quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException("Quiz with ID $quizId not found.");
        }

        // Check if a submission already exists for this quiz.
        // (Optionally, if submissions are per user, you could filter by user as well.)
        $submission = $quizSubmissionRepository->findOneBy(['quiz' => $quiz]);

        if ($submission) {
            // If a submission exists, render the ScoreQuiz template.
            return $this->render('Quiz/ScoreQuiz.html.twig', [
                'quiz'       => $quiz,
                'submission' => $submission,
            ]);
        }

        // Otherwise, render the quiz questions template.
        return $this->render('Quiz/quizQestions.html.twig', [
            'quiz' => $quiz,
        ]);
    }
}
