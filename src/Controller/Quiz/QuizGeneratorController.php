<?php

namespace App\Controller\Quiz;

use App\Entity\Quiz;
use App\Entity\Question;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class QuizGeneratorController extends AbstractController
{
    #[Route('/generate-quizzes/{matiere}', name: 'quiz_generate_matiere_ajax')]
    public function generateQuizzes(
        HttpClientInterface $httpClient, 
        EntityManagerInterface $entityManager, 
        Request $request,
        string $matiere
    ): JsonResponse {
        // Récupération de l'userId dans les query parameters
        $userId = $request->query->get('userId');
        if (!$userId) {
            return new JsonResponse(['status' => 'error', 'message' => 'User id not provided'], 400);
        }

        // Récupération de l'entité User depuis la base de données
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            return new JsonResponse(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // Construction de l'URL de l'API de génération de quiz
        $endpoint = 'http://localhost:8001/generate/' . $matiere;
        $response = $httpClient->request('GET', $endpoint);
        $data = $response->toArray();

        if (isset($data['generated_json']['quizzes'])) {
            foreach ($data['generated_json']['quizzes'] as $quizData) {
                $quiz = new Quiz();
                // Génération d'un identifiant unique pour le quiz
                $uniqueQuizId = 'quiz_' . uniqid();
                $quiz->setQuizId($uniqueQuizId);
                $quiz->setDifficulty($quizData['difficulty']);
                // Définition de la matière du quiz
                $quiz->setMatiere($matiere);
                // Association de l'user à ce quiz
                $quiz->setUser($user);

                foreach ($quizData['questions'] as $questionData) {
                    $question = new Question();
                    // Génération d'un identifiant unique pour la question
                    $uniqueQuestionId = $questionData['question_id'] . '_' . uniqid();
                    $question->setQuestionId($uniqueQuestionId);
                    $question->setQuestion($questionData['question']);
                    $question->setCorrection($questionData['correction']);
                    $question->setA($questionData['a']);
                    $question->setB($questionData['b']);
                    $question->setC($questionData['c']);

                    // Concaténation du texte de la question et des 3 réponses
                    $ttsText = $questionData['question'] 
                        . ' Option A: ' . $questionData['a'] 
                        . ' Option B: ' . $questionData['b'] 
                        . ' Option C: ' . $questionData['c'];

                    // Appel de l'API TTS
                    $ttsResponse = $httpClient->request('POST', 'http://localhost:8002/tts', [
                        'json' => [
                            'text' => $ttsText,
                            'lang' => 'en'
                        ]
                    ]);

                    // Récupération de la réponse TTS et stockage du chemin audio
                    $ttsData = $ttsResponse->toArray();
                    if (isset($ttsData['file_path'])) {
                        $question->setAudio($ttsData['file_path']);
                    } else {
                        // Vous pouvez gérer l'erreur ou définir une valeur par défaut
                        $question->setAudio(null);
                    }

                    $quiz->addQuestion($question);
                }

                $entityManager->persist($quiz);
            }
            $entityManager->flush();

            return new JsonResponse(['status' => 'success'], 200);
        }

        return new JsonResponse(['status' => 'error', 'message' => 'No quizzes generated'], 400);
    }
}
