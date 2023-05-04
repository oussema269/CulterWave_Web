<?php

namespace App\Entity;
use App\Entity\Evennement;
use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Form\RatingType;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
#[ORM\Table(name: '`rating`')]

class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rating')]
    private ?Evennement $evennement = null;
    




    #[ORM\Column(type:"integer", nullable:false)]
      private ?int $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getEvennement(): ?Evennement
{
    return $this->evennement;
}

public function setEvennement(?Evennement $evennement): self
{
    $this->evennement = $evennement;
    return $this;
}

}
