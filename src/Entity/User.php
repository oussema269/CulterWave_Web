<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Formation;
use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
class User
{

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Formation::class,  cascade:["persist", "remove"], orphanRemoval:true)]
    private Collection $formations;


    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Formation::class,  cascade:["persist", "remove"], orphanRemoval:true)]
    private Collection $participations;
    
    public const DEFAULT_IS_ACTIVE = 1;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private int $isActive = self::DEFAULT_IS_ACTIVE;

  


    public function __construct()
    {
        $this->formations = new ArrayCollection();
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getIsActive(): int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getFormations(): Collection
{
    return $this->formations;
}
public function setFormations(?Formation $formations): void
{
   $this->formations = $formations;
}

public function getParticipations(): Collection
{
    return $this->participations;
}
public function setParticipations(?Formation $participations): void
{
   $this->participations = $participations;

}
}