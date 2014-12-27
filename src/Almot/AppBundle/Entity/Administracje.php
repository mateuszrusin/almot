<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administracje
 *
 * @ORM\Table(name="administracje")
 * @ORM\Entity
 */
class Administracje
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=30, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=30, nullable=false)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="numer", type="string", length=10, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="kod_pocztowy", type="string", length=6, nullable=false)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="miasto", type="string", length=25, nullable=false)
     */
    private $miasto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=16, nullable=false)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="faks", type="string", length=16, nullable=false)
     */
    private $faks;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nip", type="string", length=12, nullable=false)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="inne", type="string", length=200, nullable=false)
     */
    private $inne;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
