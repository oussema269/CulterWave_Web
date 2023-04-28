<?php

namespace App\Entity;
use App\Entity\User;
use App\Entity\Sponsor;
use App\Entity\Rating;

use App\Repository\EvennementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;
use App\Form\EvennementType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
#[ORM\Entity(repositoryClass: EvennementRepository::class)]
#[ORM\Table(name: '`evennement`')]

 
class Evennement
{
    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $user = null; 

   // #[ORM\OneToMany(mappedBy: 'evennement', targetEntity: Sponsor::class, cascade:["persist", "remove"], orphanRemoval:true)]
    //private Collection $sponsor;
    #[ORM\ManyToOne(inversedBy: 'evennement')]
    private ?Sponsor $sponsor = null;
    

    #[ORM\OneToMany(mappedBy: 'evennement', targetEntity: Rating::class, cascade:["persist", "remove"], orphanRemoval:true)]
    private Collection $rating;

    public function __construct()
    {
        $this->rating = new ArrayCollection();
    }



    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    // db
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    // db
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    // db
    private ?string $lieu = null;

    #[ORM\Column(type: "float", nullable: false)]
    #[NotBlank(message: 'Le prix ne peut pas être negatif.')]
    #[Assert\GreaterThanOrEqual(
        value: 0,
        message: "Le prix ne peut pas être negatif."
    )]
    private ?float $prix = null;
    
    


    #[ORM\Column(type:"date", nullable:false)]
    // db
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type:"integer", nullable:false)]
    #[NotBlank(message: 'Le nombre ne peut pas être negatif.')]
    #[Assert\GreaterThanOrEqual(
        value: 0,
        message: "Le nombre ne peut pas être negatif."
    )]
    // db
    private ?int $nbParticipants = null;

    #[ORM\Column(type:"string", length:255, nullable:false)]
    // db
    private ?string $typeEvenement = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getNbParticipants(): ?int
    {
        return $this->nbParticipants;
    }

    public function setNbParticipants(int $nbParticipants): self
    {
        $this->nbParticipants = $nbParticipants;
        return $this;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->typeEvenement;
    }

    public function setTypeEvenement(string $typeEvenement): self
    {
        $this->typeEvenement = $typeEvenement;
        return $this;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }
    public function getSponsor(): ?Sponsor
    {
        return $this->sponsor;
    }
    public function setSponsor(?Sponsor $sponsor): self
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getRating(): ?Collection
    {
        return $this->rating;
    }
    public function setRating(?Rating $rating): void
    {
        $this->evennement = $evennement;
    }
  
}
