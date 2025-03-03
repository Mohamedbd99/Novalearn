<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
=======
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé.')]
#[UniqueEntity(fields: ['num_tel'], message: 'Ce numéro de téléphone est déjà utilisé.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "bigint")]
>>>>>>> Gharsallah_Ali_Hamma
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $id_fils = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $age = null;

<<<<<<< HEAD
    #[ORM\Column(type: 'integer')]
=======
    #[ORM\Column(type: 'integer', unique: true)]
    #[Assert\NotBlank(message: 'Le numéro de téléphone ne peut pas être vide.')]
>>>>>>> Gharsallah_Ali_Hamma
    private ?int $num_tel = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $difficulte = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $niv_difficulte = null;

    #[ORM\Column(length: 255)]
=======
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $niv_difficulte = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'L\'email ne peut pas être vide.')]
    #[Assert\Email(message: 'Veuillez saisir un email valide.')]
>>>>>>> Gharsallah_Ali_Hamma
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $specialite = null;

    // Méthodes de l'interface UserInterface
=======
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $specialite = null;

    #[ORM\Column(type: "boolean")]
    private bool $isVerified = false;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $verificationToken = null;

    // Getters and Setters

>>>>>>> Gharsallah_Ali_Hamma
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

<<<<<<< HEAD
=======
    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

>>>>>>> Gharsallah_Ali_Hamma
    public function getIdFils(): ?int
    {
        return $this->id_fils;
    }

<<<<<<< HEAD
    public function setIdFils(?int $id_fils): self
=======
    public function setIdFils(?int $id_fils): static
>>>>>>> Gharsallah_Ali_Hamma
    {
        $this->id_fils = $id_fils;
        return $this;
    }

<<<<<<< HEAD
    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

=======
>>>>>>> Gharsallah_Ali_Hamma
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): static
    {
        $this->num_tel = $num_tel;
        return $this;
    }

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

<<<<<<< HEAD
    public function setDifficulte(string $difficulte): static
=======
    public function setDifficulte(?string $difficulte): static
>>>>>>> Gharsallah_Ali_Hamma
    {
        $this->difficulte = $difficulte;
        return $this;
    }

    public function getNivDifficulte(): ?string
    {
        return $this->niv_difficulte;
    }

<<<<<<< HEAD
    public function setNivDifficulte(string $niv_difficulte): static
=======
    public function setNivDifficulte(?string $niv_difficulte): static
>>>>>>> Gharsallah_Ali_Hamma
    {
        $this->niv_difficulte = $niv_difficulte;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;
        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

<<<<<<< HEAD
    public function setSpecialite(string $specialite): static
=======
    public function setSpecialite(?string $specialite): static
>>>>>>> Gharsallah_Ali_Hamma
    {
        $this->specialite = $specialite;
        return $this;
    }

<<<<<<< HEAD
    // Implémentation de UserInterface
=======
>>>>>>> Gharsallah_Ali_Hamma
    public function getRoles(): array
    {
        return [$this->role ?? 'ROLE_USER'];
    }

    public function getUserIdentifier(): string
    {
<<<<<<< HEAD
        return $this->email; // Identifiant utilisé pour l'authentification
=======
        return $this->email;
>>>>>>> Gharsallah_Ali_Hamma
    }

    public function eraseCredentials(): void
    {
<<<<<<< HEAD
        // Si vous stockez des données sensibles temporaires, effacez-les ici.
    }

=======
        // Pas besoin d'implémentation ici pour l'instant
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getVerificationToken(): ?string
    {
        return $this->verificationToken;
    }

    public function setVerificationToken(?string $verificationToken): self
    {
        $this->verificationToken = $verificationToken;
        return $this;
    }
>>>>>>> Gharsallah_Ali_Hamma
}
