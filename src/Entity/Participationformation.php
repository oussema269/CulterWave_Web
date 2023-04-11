<?php

namespace App\Entity;

use App\Repository\ParticipationformationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationformationRepository::class)]
#[ORM\Table(name: '`participationformation`')]
class Participationformation
{   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idparticipationformation = null;

  


    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $confirmation = false;
    #[ORM\ManyToOne(inversedBy:'Participationformation' )]
    private ?Formation $formations= null;

    #[ORM\ManyToOne(inversedBy:'Participationformation' )]
    private ?User $user= null;
    
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
    public function getFormations(): ?Formation
    {
        return $this->formations;
    }

    public function setFormations(?Formation $formations): void
    {
        $this->formations = $formations;
    }
    public function getIdparticipationformation(): ?int
    {
        return $this->idparticipationformation;
    }
    public function setIdformation(string $idparticipationformation): void
    {
        $this->idparticipationformation = $idparticipationformation;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): void
    {
        $this->confirmation = $confirmation;
    }

    
    
}
