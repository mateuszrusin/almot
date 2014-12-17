<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Odczyty
 *
 * @ORM\Table(name="odczyty", indexes={@ORM\Index(name="id_opis_odczytu", columns={"id_opis_odczytu"})})
 * @ORM\Entity
 */
class Odczyty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wskazania_licznika", type="integer", nullable=false)
     */
    private $wskazaniaLicznika;

    /**
     * @var integer
     *
     * @ORM\Column(name="wartosc_kontrolna", type="integer", nullable=false)
     */
    private $wartoscKontrolna;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura_srednia", type="decimal", precision=2, scale=2, nullable=false)
     */
    private $temperaturaSrednia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_odczytu", type="date", nullable=false)
     */
    private $dataOdczytu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="odczyt_szacowany", type="boolean", nullable=false)
     */
    private $odczytSzacowany;

    /**
     * @var integer
     *
     * @ORM\Column(name="jednostki_zredukowane", type="integer", nullable=false)
     */
    private $jednostkiZredukowane;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Almot\PlatformBundle\Entity\OpisyOdczytow
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\OpisyOdczytow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_opis_odczytu", referencedColumnName="id")
     * })
     */
    private $idOpisOdczytu;


}
