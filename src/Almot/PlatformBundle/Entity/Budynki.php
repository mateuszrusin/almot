<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budynki
 *
 * @ORM\Table(name="budynki")
 * @ORM\Entity
 */
class Budynki
{
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
     * @ORM\Column(name="misato", type="string", length=20, nullable=false)
     */
    private $misato;

    /**
     * @var float
     *
     * @ORM\Column(name="powierzchnia_budynku", type="float", precision=10, scale=0, nullable=false)
     */
    private $powierzchniaBudynku;

    /**
     * @var string
     *
     * @ORM\Column(name="uwagi", type="string", length=500, nullable=false)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
