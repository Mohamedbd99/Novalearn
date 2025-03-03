<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use JsonSerializable;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz implements JsonSerializable
{
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['quiz:read'])]
    private ?string $quiz_id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['quiz:read'])]
    private ?string $difficulty = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['quiz:read'])]
    private ?string $matiere = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $questions;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'quizzes')]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    // ... getters and setters ...

    public function getQuizId(): ?string
    {
        return $this->quiz_id;
    }

    public function setQuizId(string $quiz_id): static
    {
        $this->quiz_id = $quiz_id;
        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): static
    {
        $this->difficulty = $difficulty;
        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): static
    {
        $this->matiere = $matiere;
        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setQuiz($this);
        }
        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            if ($question->getQuiz() === $this) {
                $question->setQuiz(null);
            }
        }
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    // Implement the JsonSerializable interface.
    public function jsonSerialize(): array
    {
        return [
            'quiz_id'    => $this->getQuizId(),
            'difficulty' => $this->getDifficulty(),
            'matiere'    => $this->getMatiere(),
            'user_id'    => $this->getUser() ? $this->getUser()->getId() : null,
        ];
    }
}
