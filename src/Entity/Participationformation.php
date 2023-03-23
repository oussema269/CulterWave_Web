<?php

namespace MyBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participationformation
 *
 * @ORM\Table(name="participationformation", indexes={@ORM\Index(name="idFormation", columns={"idFormation"}), @ORM\Index(name="idUser", columns={"idUser"})})
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
     * @ORM\Column(name="confirmation", type="string", length=5, nullable=false)
     */
    private $confirmation;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormation", referencedColumnName="idformation")
     * })
     */
    private $idformation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="Id")
     * })
     */
    private $iduser;


}
