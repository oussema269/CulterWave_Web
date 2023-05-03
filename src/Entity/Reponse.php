<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="FK_3", columns={"idReclamation"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReponseRepository")
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var string
     *
     * @ORM\Column(name="repo", type="string", length=200, nullable=false)
     */
    private $repo;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReclamation", referencedColumnName="idReclamation")
     * })
     */
    private $idreclamation;

    public function getIdreponse(): ?int
    {
        return $this->idreponse;
    }

    public function getRepo(): ?string
    {
        return $this->repo;
    }

    public function setRepo(string $repo): self
    {
        $this->repo = $repo;

        return $this;
    }

    public function getIdreclamation(): ?Reclamation
    {
        return $this->idreclamation;
    }

    public function setIdreclamation(?Reclamation $idreclamation): self
    {
        $this->idreclamation = $idreclamation;

        return $this;
    }
    public function __toString()
    {
        return $this->getIdreponse(); // or any other property that uniquely identifies the Reclamation instance
    }
    

}
