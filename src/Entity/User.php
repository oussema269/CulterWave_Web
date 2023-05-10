<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"users"})
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=20, nullable=true, options={"default"="NULL"})
     * @Groups({"users"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom", type="string", length=20, nullable=true, options={"default"="NULL"})
     * @Groups({"users"})
     */
    private $prenom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=30, nullable=true, options={"default"="NULL"})
     * @Groups({"users"})
     */
    private $email = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Groups({"users"})
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type", type="string", length=10, nullable=true, options={"default"="NULL"})
     * @Groups({"users"})
     */
    private $type = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="isActive", type="integer", nullable=false, options={"default"=1})
     * @Groups({"users"})
     */
    private $isActive;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function checklogin($Email, $password): ?bool
    {
        if ($this->getEmail() === $Email && $this->getPassword() === $password) {
            return true;
        }
        return false;
    }

    public function __toString(): string
    {
        return $this->getId();
    }
}
