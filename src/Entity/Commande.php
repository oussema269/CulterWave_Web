<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
    /**
    * Commande
    *
    * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_client", columns={"id_client"})})
    * @ORM\Entity
    * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
    */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $date = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $etat = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="totale", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $totale = NULL;

    /**
     * @var \App\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="Id")
     * })
     */
    private $idClient;

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTotale(): ?float
    {
        return $this->totale;
    }

    public function setTotale(?float $totale): self
    {
        $this->totale = $totale;

        return $this;
    }

    public function getIdClient(): ?User
    {
        return $this->idClient;
    }

    public function setIdClient(?User $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
