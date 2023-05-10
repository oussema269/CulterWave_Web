<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participationformation
 *
 * @ORM\Table(name="participationformation", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idFormation", columns={"idFormation"})})
 * @ORM\Entity
 */
class Participationformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idParticipationFormation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparticipationformation;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation", type="string", length=5, nullable=true)
     */
    private $confirmation;

    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"})
     * 
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="Id")
     * })
     */
    private $iduser;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormation", referencedColumnName="id")
     * })
     */
    private $idformation;




    public function getIdparticipationformation(): ?int
    {
        return $this->idparticipationformation;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getFormation(): ?Formation
    {
        return $this->idformation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->idformation = $formation;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
