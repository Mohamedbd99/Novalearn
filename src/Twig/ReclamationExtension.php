<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ReclamationExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('priority_color', [$this, 'getPriorityColor']),
            new TwigFilter('status_color', [$this, 'getStatusColor']),
        ];
    }

    public function getPriorityColor(string $priority): string
    {
        return match ($priority) {
            'Urgente' => 'danger',
            'Haute' => 'warning',
            'Moyenne' => 'info',
            'Basse' => 'success',
            default => 'secondary',
        };
    }

    public function getStatusColor(string $status): string
    {
        return match ($status) {
            'En attente' => 'warning',
            'En cours' => 'info',
            'Traitée' => 'success',
            default => 'secondary',
        };
    }
}
