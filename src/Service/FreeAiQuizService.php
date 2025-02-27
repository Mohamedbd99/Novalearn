<?php
// src/Service/FreeAiQuizService.php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class FreeAiQuizService
{
    private HttpClientInterface $client;
    private ?string $hfApiKey;

    public function __construct(HttpClientInterface $client, ?string $hfApiKey = null)
    {
        $this->client = $client;
        $this->hfApiKey = $hfApiKey;
    }

    /**
     * Generate a quiz question for a given topic using a free model.
     *
     * @param string $topic
     * @return string
     */
    public function generateQuizQuestion(string $topic): string
    {
        $prompt = sprintf(
            "Generate a simple multiple-choice quiz question for kids about %s.
             Include four answer options labeled A, B, C, and D, and indicate which option is correct.",
            $topic
        );

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->hfApiKey,
        ];
        if ($this->hfApiKey) {
            $headers['Authorization'] = 'Bearer ' . $this->hfApiKey;
        }

        $response = $this->client->request('POST', 'https://api-inference.huggingface.co/models/deepseek-ai/DeepSeek-R1-Distill-Qwen-32B', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->hfApiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => [
                'inputs' => $prompt,
                'parameters' => [
                    'max_new_tokens' => 150,
                    'temperature'    => 0.7,
                ],
            ],
        ]);
        
        $data = $response->toArray();

        // The model output is in $data['generated_text'] for some models.
        return trim($data['generated_text'] ?? '');
    }

    /**
     * Check a user answer by using the model to decide if it's correct.
     *
     * @param string $question The quiz question text including the correct answer indication
     * @param string $userAnswer The answer provided by the user
     * @return bool
     */
    public function checkAnswer(string $question, string $userAnswer): bool
    {
        $prompt = sprintf(
            "The following is a quiz question and its correct answer information:\n\n%s\n\nIs the user answer \"%s\" correct? Answer only 'yes' or 'no'.",
            $question,
            $userAnswer
        );

        $headers = [
            'Content-Type' => 'application/json'
        ];
        if ($this->hfApiKey) {
            $headers['Authorization'] = 'Bearer ' . $this->hfApiKey;
        }

        $response = $this->client->request('POST', 'https://api-inference.huggingface.co/models/distilgpt2', [
            'headers' => $headers,
            'json' => [
                'inputs' => $prompt,
                'parameters' => [
                    'max_new_tokens' => 10,
                    'temperature' => 0,
                ],
            ],
        ]);

        $data = $response->toArray();
        $result = strtolower(trim($data['generated_text'] ?? ''));
        return $result === 'yes';
    }
}
