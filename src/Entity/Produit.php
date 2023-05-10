<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_categorie", columns={"id_cat"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"produits"})
     */
    private $id;

    /**
     * @ORM\Column(name="id_cat", type="integer")
     * @Groups({"produits"})
     */
    private int $idCat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"produits"})
     */
    private string $lib;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"produits"})
     */
    private int $stock;

    /**
     * @ORM\Column(type="float")
     * @Groups({"produits"})
     */
    private float $prix;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produit")
     * @ORM\JoinColumn(name="id_cat", referencedColumnName="id_cat")
     */
    private $categorie;

    public function __construct()
    {
        $this->id = 0;
        $this->idCat = 0;
        $this->lib = ''; // initialize $lib to an empty string
        $this->stock = 0;
        $this->prix = 0.0;
        $this->categorie = null;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    public function setIdCat(int $idCat): self
    {
        $this->idCat = $idCat;

        return $this;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

  
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'id_cat' => $this->idCat,
            'lib' => $this->lib,
            'stock' => $this->stock,
            'prix' => $this->prix,
        ];
    }
    



}
