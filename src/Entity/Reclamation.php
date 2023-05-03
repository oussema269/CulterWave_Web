<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="FK_1", columns={"idReclamateur"}), @ORM\Index(name="FK_2", columns={"idCibleReclamation"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="typeReclamation", type="string", length=20, nullable=false)
     */
    private $typereclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=16777215, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepro", type="date", nullable=false)
     */
    private $datepro;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReclamateur", referencedColumnName="id_user")
     * })
     */
    private $idreclamateur;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCibleReclamation", referencedColumnName="id_user")
     * })
     */
    private $idciblereclamation;

    public function getIdreclamation(): ?int
    {
        return $this->idreclamation;
    }

    public function getTypereclamation(): ?string
    {
        return $this->typereclamation;
    }

    public function setTypereclamation(string $typereclamation): self
    {
        $this->typereclamation = $typereclamation;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatepro(): ?\DateTimeInterface
    {
        return $this->datepro;
    }

    public function setDatepro(\DateTimeInterface $datepro): self
    {
        $this->datepro = $datepro;

        return $this;
    }

    public function getIdreclamateur(): ?User
    {
        return $this->idreclamateur;
    }

    public function setIdreclamateur(?User $idreclamateur): self
    {
        $this->idreclamateur = $idreclamateur;

        return $this;
    }

    public function getIdciblereclamation(): ?User
    {
        return $this->idciblereclamation;
    }

    public function setIdciblereclamation(?User $idciblereclamation): self
    {
        $this->idciblereclamation = $idciblereclamation;

        return $this;
    }
    public function __toString()
    {
        return $this->getIdreclamation(); // or any other property that uniquely identifies the Reclamation instance
    }

}
