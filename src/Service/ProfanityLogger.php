<?php
namespace App\Service;

use Psr\Log\LoggerInterface;

class ProfanityLogger
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log profanity detection for monitoring purposes
     *
     * @param string $originalText The text with profanity
     * @param string $filteredText The filtered text
     * @param string $context Additional context like form field or username
     * @return void
     */
    public function logProfanity(string $originalText, string $filteredText, string $context = ''): void
    {
        if ($originalText !== $filteredText) {
            // Don't log the actual profanity, just the fact it was detected
            $this->logger->warning('Profanity detected and filtered', [
                'context' => $context,
                'textLength' => strlen($originalText),
                'containedProfanity' => true,
                'timestamp' => new \DateTime()
            ]);
        }
    }
}
