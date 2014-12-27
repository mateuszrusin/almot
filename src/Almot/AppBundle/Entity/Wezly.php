<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wezly
 *
 * @ORM\Table(name="wezly")
 * @ORM\Entity
 */
class Wezly
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
     * @ORM\Column(name="kod_pocztowy", type="string", length=6, nullable=false)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="misato", type="string", length=30, nullable=false)
     */
    private $misato;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=12, nullable=false)
     */
    private $telefon;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
