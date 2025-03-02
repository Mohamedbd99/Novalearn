<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
<<<<<<< HEAD
=======
use App\Service\BadWordsFilter;
>>>>>>> 50bad6b7 (projet)
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Category;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
<<<<<<< HEAD
=======
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
>>>>>>> 50bad6b7 (projet)
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
<<<<<<< HEAD
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas un email valide.")]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le message est obligatoire")]
=======
    #[Assert\Email(
        message: "L'email '{{ value }}' n'est pas un email valide.",
        mode: "html5"
    )]
    private ?string $email = null;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "Le message est obligatoire")]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: "Le message doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le message ne peut pas dépasser {{ limit }} caractères"
    )]
>>>>>>> 50bad6b7 (projet)
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = 'En attente';

<<<<<<< HEAD
=======
    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: ['Basse', 'Moyenne', 'Haute', 'Urgente'], message: 'Choisissez une priorité valide')]
    private ?string $priorite = 'Moyenne';

>>>>>>> 50bad6b7 (projet)
    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La catégorie est obligatoire")]
    private ?Category $category = null;

<<<<<<< HEAD
=======
    private ?string $filteredMessage = null;

>>>>>>> 50bad6b7 (projet)
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

<<<<<<< HEAD
    public function setNom(string $nom): static
=======
    public function setNom(?string $nom): self
>>>>>>> 50bad6b7 (projet)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

<<<<<<< HEAD
    public function setEmail(string $email): static
=======
    public function setEmail(?string $email): self
>>>>>>> 50bad6b7 (projet)
    {
        $this->email = $email;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

<<<<<<< HEAD
    public function setMessage(string $message): static
=======
    public function setMessage(?string $message): self
>>>>>>> 50bad6b7 (projet)
    {
        $this->message = $message;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

<<<<<<< HEAD
    public function setStatut(string $statut): static
=======
    public function setStatut(?string $statut): self
>>>>>>> 50bad6b7 (projet)
    {
        $this->statut = $statut;
        return $this;
    }

<<<<<<< HEAD
=======
    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): self
    {
        $this->priorite = $priorite;
        return $this;
    }

    public function getPrioriteClass(): string
    {
        return match($this->priorite) {
            'Basse' => 'bg-success',
            'Moyenne' => 'bg-info',
            'Haute' => 'bg-warning',
            'Urgente' => 'bg-danger',
            default => 'bg-secondary'
        };
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;
        return $this;
    }

>>>>>>> 50bad6b7 (projet)
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

<<<<<<< HEAD
    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;
        return $this;
=======
    public function getFilteredMessage(?BadWordsFilter $filter = null): ?string
    {
        if ($filter && $this->message) {
            return $filter->filter($this->message);
        }
        return $this->message;
>>>>>>> 50bad6b7 (projet)
    }
}
