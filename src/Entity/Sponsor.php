<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: '`sponsor`')]
class Sponsor
{
    //#[ORM\ManyToOne(inversedBy: 'sponsor')]
    //private ?Evennement $evennement = null;
    #[ORM\OneToMany(mappedBy: 'sponsor', targetEntity: Evennement::class, cascade:["persist", "remove"], orphanRemoval:true)]
    private Collection $evennement;

    public function __construct()
    {
        $this->evennement = new ArrayCollection();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $image = null;

   

    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
    public function getEvennement(): ?Collection
    {
        return $this->evennement;
    }
    public function setEvennement(?Evennement $evennement): void
    {
        $this->evennement = $evennement;
    }

  
}
