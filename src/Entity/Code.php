<?php

namespace MyBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * Code
 *
 * @ORM\Table(name="code")
 * @ORM\Entity
 */
class Code
{
    /**
     * @var int
     *
     * @ORM\Column(name="codeEmail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeemail;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;


}
