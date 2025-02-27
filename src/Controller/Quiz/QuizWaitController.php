<?php

namespace App\Controller\Quiz;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizWaitController extends AbstractController
{
    #[Route('/quiz-wait/{userId}', name: 'quiz_wait')]
    public function waitPage(Request $request, int $userId): Response
    {
        // Retrieve 'matiere' from query parameters
        $matiere = $request->query->get('matiere');
        if (!$matiere) {
            // Optionally, you could set a default or throw an exception.
            $matiere = 'default';
        }

        return $this->render('Quiz/wait.html.twig', [
            'userId' => $userId,
            'matiere' => $matiere,  // Make sure to pass this variable!
        ]);
    }
}
