<?php

namespace App\Twig;

use App\Service\BadWordsFilter;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class BadWordsFilterExtension extends AbstractExtension
{
    private $badWordsFilter;

    public function __construct(BadWordsFilter $badWordsFilter)
    {
        $this->badWordsFilter = $badWordsFilter;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('badwords_filter', [$this, 'filterBadWords']),
        ];
    }

    public function filterBadWords(string $text): string
    {
        return $this->badWordsFilter->filter($text);
    }
}
