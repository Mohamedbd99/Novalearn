<?php

namespace App\Controller\Quiz;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizWelcomeController extends AbstractController
{
    #[Route('/AllQuiz', name: 'allQuiz')]
    public function allQuiz(): Response
    {
        $userId = 2; // Initialize userId as 2.
        return $this->render('Quiz/welcome.quiz.html.twig', [
            'userId' => $userId,
        ]);
    }
}
