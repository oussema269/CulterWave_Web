<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Length(
        max: 20,
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Assert\Length(
        max: 20,
        maxMessage: 'Le prénom ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 30, nullable: true)]
    #[Assert\Length(
        max: 50,
        maxMessage: 'L\'Email ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Email(
        message: 'L\'Email {{ value }} n\'est pas valide.'
    )]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'Le mot de passe ne peut pas être vide.'
    )]
    #[Assert\Length(
        min: 8,
        minMessage: 'Le mot de passe doit contenir au moins {{ limit }} caractères.'
    )]
    private ?string $password = null;

    #[ORM\Column(length: 10, nullable: true)]

    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $isActive = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(?int $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function checklogin($Email, $password): ?bool
    {


        if ($this->getEmail() === $Email && $this->getPassword() === $password) {
            return true;
        }
        return null;
    }
}
