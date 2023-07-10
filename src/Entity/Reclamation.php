<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
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
     * @var int
     *
     * @ORM\Column(name="id_reclamateur", type="integer", nullable=false)
     */
    private $idReclamateur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cible_reclamation", type="integer", nullable=false)
     */
    private $idCibleReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_reclamation", type="string", length=20, nullable=false)
     */
    private $typeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=50, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="datepro", type="string", length=30, nullable=false)
     */
    private $datepro;


}
