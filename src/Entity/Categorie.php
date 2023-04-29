<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $categorie = 'NULL';


    /**
 * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="categorie")
 */
private $produit;

        public function __construct()
        {
            $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
        }

    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

 /**
     * @return \Doctrine\Common\Collections\Collection|Produit[]
     */
    public function getProduit(): ?\Doctrine\Common\Collections\Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produit->contains($produit)) {
            $this->produit->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }
    public function __toString()
{
    return $this->categorie;
}



}
