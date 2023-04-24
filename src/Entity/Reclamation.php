<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_rec_id1", columns={"id_reclamateur"}), @ORM\Index(name="fk_rec_id2", columns={"id_cible_reclamation"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_reclamation", type="string", length=20, nullable=false)
     */
    private $typeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

   /**
 * @var \DateTimeInterface
 *
 * @ORM\Column(name="datepro", type="datetime", nullable=false)
 */
private $datepro;



    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reclamateur", referencedColumnName="id")
     * })
     */
    private $idReclamateur;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cible_reclamation", referencedColumnName="id")
     * })
     */
    private $idCibleReclamation;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getTypeReclamation(): ?string
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(string $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;

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

   public function getDatepro(): ?string
 {
    return $this->datepro ? $this->datepro->format('Y-m-d') : null;
}
/*
public function getDatepro(): ?\DateTimeInterface
 {
    return $this->datepro ;
}*/


/*
public function setDatepro($datepro): self
{
    if (is_string($datepro)) {
        $this->datepro = new \DateTime($datepro);
    } elseif ($datepro instanceof \DateTimeInterface) {
        $this->datepro = $datepro;
    } else {
        throw new \InvalidArgumentException('Invalid date format');
    }

    return $this;
}*/
public function setDatepro($datepro): self
{
    if (is_string($datepro)) {
        $this->datepro = new \DateTime($datepro);
    } elseif ($datepro instanceof \DateTimeInterface) {
        $this->datepro = $datepro;
    } else {
        throw new \InvalidArgumentException('Invalid date format');
    }

    return $this;
}




    





    public function getIdReclamateur(): ?User
    {
        return $this->idReclamateur;
    }

    public function setIdReclamateur(?User $idReclamateur): self
    {
        $this->idReclamateur = $idReclamateur;

        return $this;
    }

    public function getIdCibleReclamation(): ?User
    {
        return $this->idCibleReclamation;
    }

    public function setIdCibleReclamation(?User $idCibleReclamation): self
    {
        $this->idCibleReclamation = $idCibleReclamation;

        return $this;
    }
    public function __toString() {
        return $this->getIdReclamation(); // or some other string representation of the object
    }

}
