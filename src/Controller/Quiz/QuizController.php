<?php

namespace App\Controller\Quiz;

use App\Repository\QuizRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    #[Route('/quiz/{matiere}/{userId}', name: 'quiz')]
    public function index(QuizRepository $quizRepository, LoggerInterface $logger, string $matiere, int $userId): Response
    {
        // Retrieve quizzes assigned to the user with the given userId and where the matiere field matches the route parameter.
        $quizzes = $quizRepository->createQueryBuilder('q')
            ->join('q.user', 'u')
            ->where('u.id = :userId')
            ->andWhere('q.matiere = :matiere')
            ->setParameter('userId', $userId)
            ->setParameter('matiere', $matiere)
            ->getQuery()
            ->getResult();

        // Log the quizzes to the terminal.
        $logger->info('Fetched Quizzes: ' . json_encode($quizzes));

        // If no quizzes are found, redirect to the generation route while preserving the matiere parameter.
        if (empty($quizzes)) {
            return $this->redirectToRoute('quiz_wait', [
                'userId' => $userId,
                'matiere' => $matiere,
            ]);
        }
        
        // Otherwise, render the quiz view and pass both quizzes and the matiere parameter.
        return $this->render('Quiz/quiz.html.twig', [
            'quizzes' => $quizzes,
            'matiere' => $matiere,
        ]);
    }
}
