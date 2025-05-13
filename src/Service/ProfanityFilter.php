<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProfanityFilter
{
    private $httpClient;
    private $replacementChar = '*';

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function setReplacementChar(string $char)
    {
        $this->replacementChar = $char;
    }

    /**
     * Filter text for profanity
     *
     * @param string $text
     * @return string
     */
    public function filter(string $text): string
    {
        // Basic implementation
        // In a real application, you might want to use a profanity list or API
        $profanityList = ['badword1', 'badword2', 'badword3']; // Replace with actual profanity words
        
        foreach ($profanityList as $word) {
            $replacement = str_repeat($this->replacementChar, strlen($word));
            $text = preg_replace('/\b' . preg_quote($word, '/') . '\b/i', $replacement, $text);
        }
        
        return $text;
    }
}
