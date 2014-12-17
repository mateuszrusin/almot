<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudynkiWezly
 *
 * @ORM\Table(name="budynki_wezly", indexes={@ORM\Index(name="id_budynek", columns={"id_budynek"}), @ORM\Index(name="id_wezel", columns={"id_wezel"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class BudynkiWezly
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
     * @var \Almot\PlatformBundle\Entity\Wezly
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\Wezly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_wezel", referencedColumnName="id")
     * })
     */
    private $idWezel;

    /**
     * @var \Almot\PlatformBundle\Entity\Budynki
     *
     * @ORM\ManyToOne(targetEntity="Almot\PlatformBundle\Entity\Budynki")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_budynek", referencedColumnName="id")
     * })
     */
    private $idBudynek;


}
