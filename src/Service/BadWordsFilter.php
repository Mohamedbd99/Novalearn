<?php

namespace App\Service;

class BadWordsFilter
{
    private array $badWords = [
        // Basic words
        'merde',
        'putain',
        'connard',
        'connasse',
        'salope',
        'pute',
        'encule',
        'enculé',
        'bite',
        'couille',
        'fuck',
        'shit',
        'bitch',
        'ass',
        
        // Common variations
        'merdes?',
        'putains?',
        'connards?',
        'connasses?',
        'salopes?',
        'putes?',
        'encules?',
        'enculés?',
        'bites?',
        'couilles?',
        
        // Word combinations
        'putain\s+de\s+merde',
        'putain\s+de',
        'de\s+merde',
        
        // Variations with accents
        'enculee?s?',
        'enculée?s?',
        
        // Common misspellings
        'bittes?',
        'couyes?',
        'konar',
        'konard',
        'konasse',
        'salop',
        'saloop',
        'putan',
        'putangs?',
    ];

    private array $replacements = [
        'putain de merde' => '*****_de_*****',
        'putain de' => '*****_de',
        'de merde' => 'de_*****',
    ];

    public function filter(string $text): string
    {
        if (empty($text)) {
            return $text;
        }

        // Convert to lowercase for case-insensitive matching
        $textLower = mb_strtolower($text, 'UTF-8');

        // First replace word combinations
        foreach ($this->replacements as $pattern => $replacement) {
            $textLower = str_replace($pattern, $replacement, $textLower);
        }

        // Then handle individual words with regex
        $pattern = '/\b(' . implode('|', array_map('preg_quote', $this->badWords)) . ')\b/ui';
        $textLower = preg_replace_callback($pattern, function($matches) {
            return str_repeat('*', mb_strlen($matches[0]));
        }, $textLower);

        // Replace underscores back with spaces
        return str_replace('_', ' ', $textLower);
    }

    public function hasBadWords(string $text): bool
    {
        if (empty($text)) {
            return false;
        }

        $textLower = mb_strtolower($text, 'UTF-8');
        
        // Check for word combinations first
        foreach (array_keys($this->replacements) as $pattern) {
            if (str_contains($textLower, $pattern)) {
                return true;
            }
        }

        // Then check individual words
        $pattern = '/\b(' . implode('|', array_map('preg_quote', $this->badWords)) . ')\b/ui';
        return preg_match($pattern, $textLower) === 1;
    }
}
