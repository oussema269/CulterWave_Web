<?php

namespace App\Entity;
use App\Repository\FormationRepository;
use DateTime;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
#[ORM\Table(name: '`formation`')]
class Formation 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
 * @Assert\NotBlank(message="Le titre est obligatoire.")
 * @Assert\Length(
 *      min = 5,
 *      minMessage="Le titre doit contenir au moins {{ limit }} caractères."
 * )
 */
#[ORM\Column(length: 255)]
private ?string $titre = null;

/**
 * @Assert\NotBlank(message="La description est obligatoire.")
 * @Assert\Length(
 *      min = 5,
 *      minMessage="La description doit contenir au moins {{ limit }} caractères."
 * )
 */
#[ORM\Column(length: 255)]
private ?string $description = null;

/**
 * @Assert\NotBlank(message="Le type est obligatoire.")
 * @Assert\Length(
 *      min = 5,
 *      minMessage="Le type doit contenir au moins {{ limit }} caractères."
 * )
 */
#[ORM\Column(length: 255)]
private ?string $type = null;


#[ORM\Column(length: 255)]
private ?string $pays = null;

#[ORM\Column(type: "datetime", nullable: false)]
private ?DateTime $debut = null;

#[ORM\Column(type: "datetime", nullable: false)]
private ?DateTime $fin = null;

#[ORM\Column(type: 'boolean', options: ['default' => false])]
private bool $confirmation = false;


#[ORM\ManyToOne(inversedBy:'Formation' )]
private ?User $user= null;


#[ORM\OneToMany(mappedBy: 'formations', targetEntity: Participationformation::class,  cascade:["persist", "remove"], orphanRemoval:true)]
    private Collection $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getParticipations(): Collection
{
    return $this->participations;
}
public function setParticipations(?Participationformation $participations): void
{
   $this->participations = $participations;

}

public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): void
    {
        $this->titre = $titre;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): void
    {
        $this->pays = $pays;
    }

    public function getDebut(): ?DateTime
    {
        return $this->debut;
    }

    public function setDebut(?DateTime $debut): void
    {
        $this->debut = $debut;
    }

    public function getFin(): ?DateTime
    {
        return $this->fin;
    }

    public function setFin(?DateTime $fin): void
    {
        $this->fin = $fin;
    }

    public function getConfirmation(): bool
    {
        return $this->confirmation;
    }
    
    public function setConfirmation(bool $confirmation): void
    {
        $this->confirmation = $confirmation;
    }
    

    
}
