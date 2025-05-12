<?php
// src/Controller/Quiz/QuizGeneratorController.php
namespace App\Controller\Quiz;

use App\Entity\Quiz;
use App\Entity\Question;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;

class QuizGeneratorController extends AbstractController
{
    #[Route('/generate-quizzes/{matiere}', name: 'quiz_generate_matiere_ajax', methods: ['GET'])]
    public function generateQuizzes(
        HttpClientInterface    $httpClient,
        EntityManagerInterface $em,
        Request                $request,
        string                 $matiere,
        LoggerInterface        $logger
    ): JsonResponse {
        // 1) get & validate userId
        $userIdParam = $request->query->get('userId');
        if (null === $userIdParam) {
            $logger->warning('No userId provided in request');
            return $this->json(['status' => 'error', 'message' => 'User id not provided'], 400);
        }
        $userId = (int) $userIdParam;
        $logger->info('Starting quiz generation', ['matiere' => $matiere, 'userId' => $userId]);

        // 2) load user
        $user = $em->getRepository(User::class)->find($userId);
        if (!$user) {
            $logger->error('User not found', ['userId' => $userId]);
            return $this->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // begin transaction
        $conn = $em->getConnection();
        $conn->beginTransaction();

        try {
            // 3) fetch from your quiz-gen API
            $endpoint = 'http://localhost:8001/generate/' . urlencode($matiere);
            $logger->debug('Calling quiz-gen API', ['endpoint' => $endpoint]);
            $response = $httpClient->request('GET', $endpoint);
            $rawJson  = $response->getContent(false);
            $status   = $response->getStatusCode();
            $logger->debug('Quiz-gen API response', [
                'status' => $status,
                'body'   => $rawJson,
            ]);

            $data = $response->toArray(false);
            $wrapper     = $data['generated_json']  ?? $data['generatedJson']  ?? [];
            $quizzesData = $wrapper['quizzes']      ?? [];

            if (empty($quizzesData)) {
                $logger->warning('No quizzes returned from API', ['payload' => $wrapper]);
                $conn->rollBack();
                return $this->json(['status' => 'error', 'message' => 'No quizzes generated'], 400);
            }

            $logger->info('Number of quizzes received', ['count' => count($quizzesData)]);
            $persisted = [];

            // 4) create & persist
            foreach ($quizzesData as $idx => $qz) {
                $quiz = new Quiz();
                $quiz->setQuizId('quiz_' . uniqid());
                $quiz->setDifficulty($qz['difficulty'] ?? '');
                $quiz->setMatiere($matiere);
                $quiz->setUser($user);
                $em->persist($quiz);
                $logger->debug('Prepared Quiz entity', [
                    'quizId'    => $quiz->getQuizId(),
                    'difficulty'=> $quiz->getDifficulty(),
                ]);

                $quizDto = [
                    'quizId'    => $quiz->getQuizId(),
                    'difficulty'=> $quiz->getDifficulty(),
                    'matiere'   => $matiere,
                    'questions' => []
                ];

                foreach (($qz['questions'] ?? []) as $i => $qd) {
                    $logger->debug('Raw question payload', ['index' => $i, 'payload' => $qd]);

                    if (!isset($qd['question'], $qd['correction'])) {
                        $logger->warning('Skipping malformed question', ['index' => $i, 'payload' => $qd]);
                        continue;
                    }

                    // -- extract A/B/C options --
                    if (isset($qd['options']) && is_array($qd['options'])) {
                        $opts = $qd['options'];
                        $a = $opts['A'] ?? $opts['a'] ?? '';
                        $b = $opts['B'] ?? $opts['b'] ?? '';
                        $c = $opts['C'] ?? $opts['c'] ?? '';
                    } else {
                        $a = $qd['A'] ?? $qd['a'] ?? '';
                        $b = $qd['B'] ?? $qd['b'] ?? '';
                        $c = $qd['C'] ?? $qd['c'] ?? '';
                    }
                    $logger->debug('Extracted question options', ['a' => $a, 'b' => $b, 'c' => $c]);

                    // -- map correction key to actual text --
                    $rawCorr = (string)$qd['correction'];
                    if (in_array(strtoupper($rawCorr), ['A','B','C'])) {
                        $map = ['A' => $a, 'B' => $b, 'C' => $c];
                        $correctText = $map[strtoupper($rawCorr)] ?? $rawCorr;
                    } else {
                        // maybe the API already sent the full text
                        $correctText = $rawCorr;
                    }
                    $logger->debug('Mapped correction', ['raw' => $rawCorr, 'mapped' => $correctText]);

                    $question = new Question();
                    $question->setQuestionId( ($qd['question_id'] ?? "q{$i}") . '_' . uniqid() );
                    $question->setQuestion($qd['question']);
                    $question->setCorrection($correctText);
                    $question->setA((string)$a);
                    $question->setB((string)$b);
                    $question->setC((string)$c);

                    // TTS call
                    $ttsText = sprintf(
                        '%s Option A: %s Option B: %s Option C: %s',
                        $qd['question'],
                        $a,
                        $b,
                        $c
                    );
                    $logger->debug('Calling TTS API', ['text' => $ttsText]);
                    $ttsResp = $httpClient->request('POST', 'http://localhost:8002/tts', [
                        'json' => ['text' => $ttsText, 'lang' => 'en']
                    ]);
                    $ttsData  = $ttsResp->toArray(false);
                    $rawPath  = $ttsData['file_path'] ?? '';
                    $justFile = pathinfo($rawPath, PATHINFO_BASENAME);
                    $question->setAudio($justFile);
                    $logger->debug('TTS API response', ['file_path' => $rawPath, 'audio' => $justFile]);

                    // link & persist
                    $question->setQuiz($quiz);
                    $quiz->addQuestion($question);
                    $em->persist($question);

                    $quizDto['questions'][] = [
                        'questionId' => $question->getQuestionId(),
                        'question'   => $question->getQuestion(),
                        'correction' => $question->getCorrection(),
                        'a'          => $question->getA(),
                        'b'          => $question->getB(),
                        'c'          => $question->getC(),
                        'audio'      => $question->getAudio(),
                    ];
                }

                $persisted[] = $quizDto;
            }

            // 5) flush & commit
            $em->flush();
            $conn->commit();
            $logger->info('Successfully persisted quizzes', ['totalQuizzes' => count($persisted)]);

            return $this->json([
                'status'  => 'success',
                'quizzes' => $persisted,
            ], 200);

        } catch (TransportExceptionInterface $e) {
            $conn->rollBack();
            $logger->error('Transport error calling downstream service', ['exception' => $e]);
            return $this->json(['status' => 'error', 'message' => 'Downstream service unreachable'], 502);
        } catch (ClientExceptionInterface | ServerExceptionInterface $e) {
            $conn->rollBack();
            $logger->error('Downstream service returned HTTP error', ['exception' => $e]);
            return $this->json(['status' => 'error', 'message' => 'Downstream service error'], 502);
        } catch (\Throwable $e) {
            $conn->rollBack();
            $logger->error('Unexpected error generating quizzes', ['exception' => $e]);
            return $this->json([
                'status'  => 'error',
                'message' => 'Internal error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
