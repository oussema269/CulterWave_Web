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
     * @var string|null
     *
     * @ORM\Column(name="confirmation", type="string", length=5, nullable=true)
     */
    private $confirmation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
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


}
