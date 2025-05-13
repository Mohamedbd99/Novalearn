<?php
namespace App\Twig;

use App\Service\ProfanityFilter;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ProfanityFilterExtension extends AbstractExtension
{
    private ProfanityFilter $profanityFilter;

    public function __construct(ProfanityFilter $profanityFilter)
    {
        $this->profanityFilter = $profanityFilter;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('filter_profanity', [$this, 'filterProfanity']),
        ];
    }

    public function filterProfanity(string $text): string
    {
        return $this->profanityFilter->filter($text);
    }
}
