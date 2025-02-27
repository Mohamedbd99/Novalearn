<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TextGenerationService
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function generateText(string $prompt, int $maxLength = 100): string
    {
        $response = $this->client->request('POST', 'http://localhost:8001/generate', [
            'json' => [
                'prompt' => $prompt,
                'max_length' => $maxLength,
            ],
        ]);

        $data = $response->toArray();
        return $data['generated_text'] ?? '';
    }
}
