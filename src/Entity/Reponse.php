<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\ManyToOne]
    private ?exercice $exercice_id = null;

    #[ORM\ManyToOne]
    private ?User $eleve_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getExerciceId(): ?exercice
    {
        return $this->exercice_id;
    }

    public function setExerciceId(?exercice $exercice_id): static
    {
        $this->exercice_id = $exercice_id;

        return $this;
    }

    public function getEleveId(): ?User
    {
        return $this->eleve_id;
    }

    public function setEleveId(?User $eleve_id): static
    {
        $this->eleve_id = $eleve_id;

        return $this;
    }
}
