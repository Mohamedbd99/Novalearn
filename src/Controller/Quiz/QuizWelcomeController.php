<?php

namespace App\Controller\Quiz;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizWelcomeController extends AbstractController
{
    #[Route('/AllQuiz', name: 'allQuiz')]
    public function allQuiz(): Response
    {
        // Retrieve the currently authenticated user.
        /** @var User $user */
        $user = $this->getUser();

        // If no user is logged in, you can either redirect to login or throw an exception.
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to access this page.');
        }

        // Now Intelephense recognizes that $user is an instance of App\Entity\User
        $userId = $user->getId();

        return $this->render('Quiz/welcome.quiz.html.twig', [
            'userId' => $userId,
        ]);
    }
}
