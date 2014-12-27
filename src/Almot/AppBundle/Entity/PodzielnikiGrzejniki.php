<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PodzielnikiGrzejniki
 *
 * @ORM\Table(name="podzielniki_grzejniki", indexes={@ORM\Index(name="id_podzielnik", columns={"id_podzielnik"}), @ORM\Index(name="id_grzejnik", columns={"id_grzejnik"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class PodzielnikiGrzejniki
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_demontazu", type="date", nullable=false)
     */
    private $dataDemontazu;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=200, nullable=false)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Almot\AppBundle\Entity\OkresyRozliczeniowe
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\OkresyRozliczeniowe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_okres_rozliczeniowy", referencedColumnName="id")
     * })
     */
    private $idOkresRozliczeniowy;

    /**
     * @var \Almot\AppBundle\Entity\Grzejniki
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Grzejniki")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grzejnik", referencedColumnName="id")
     * })
     */
    private $idGrzejnik;

    /**
     * @var \Almot\AppBundle\Entity\Podzielniki
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Podzielniki")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_podzielnik", referencedColumnName="id")
     * })
     */
    private $idPodzielnik;


}
