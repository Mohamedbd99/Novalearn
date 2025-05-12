<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
#[ORM\Table(name: "question")]
class Question
{
    #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $question_id = null;

    #[ORM\Column(length: 255)]
    private ?string $question = null;

    #[ORM\Column(length: 255)]
    private ?string $correction = null;

    #[ORM\Column(length: 255)]
    private ?string $a = null;

    #[ORM\Column(length: 255)]
    private ?string $b = null;

    #[ORM\Column(length: 255)]
    private ?string $c = null;

    // Nouvelle colonne pour le chemin de l'audio
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $audio = null;

    #[ORM\ManyToOne(targetEntity: Quiz::class, inversedBy: 'questions')]
    #[ORM\JoinColumn(name: 'quiz_id', referencedColumnName: 'quiz_id', nullable: false)]
    private ?Quiz $quiz = null;
    
    public function getQuestionId(): ?string
    {
        return $this->question_id;
    }

    public function setQuestionId(string $question_id): static
    {
        $this->question_id = $question_id;
        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;
        return $this;
    }

    public function getCorrection(): ?string
    {
        return $this->correction;
    }

    public function setCorrection(string $correction): static
    {
        $this->correction = $correction;
        return $this;
    }

    public function getA(): ?string
    {
        return $this->a;
    }

    public function setA(string $a): static
    {
        $this->a = $a;
        return $this;
    }

    public function getB(): ?string
    {
        return $this->b;
    }

    public function setB(string $b): static
    {
        $this->b = $b;
        return $this;
    }

    public function getC(): ?string
    {
        return $this->c;
    }

    public function setC(string $c): static
    {
        $this->c = $c;
        return $this;
    }

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): static
    {
        $this->audio = $audio;
        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
    {
        $this->quiz = $quiz;
        return $this;
    }
}
