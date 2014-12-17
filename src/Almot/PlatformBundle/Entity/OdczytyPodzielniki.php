<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OdczytyPodzielniki
 *
 * @ORM\Table(name="odczyty_podzielniki", indexes={@ORM\Index(name="id_odczyt", columns={"id_odczyt"}), @ORM\Index(name="id_podzielnik", columns={"id_podzielnik"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class OdczytyPodzielniki
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Almot\PlatformBundle\Entity\OkresyRozliczeniowe
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\OkresyRozliczeniowe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_okres_rozliczeniowy", referencedColumnName="id")
     * })
     */
    private $idOkresRozliczeniowy;

    /**
     * @var \Almot\PlatformBundle\Entity\Podzielniki
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\Podzielniki")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_podzielnik", referencedColumnName="id")
     * })
     */
    private $idPodzielnik;

    /**
     * @var \Almot\PlatformBundle\Entity\Odczyty
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\Odczyty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_odczyt", referencedColumnName="id")
     * })
     */
    private $idOdczyt;


}
