<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LokaleBudynki
 *
 * @ORM\Table(name="lokale_budynki", indexes={@ORM\Index(name="id_lokal", columns={"id_lokal"}), @ORM\Index(name="id_budynek", columns={"id_budynek"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class LokaleBudynki
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
     * @var \Almot\AppBundle\Entity\OkresyRozliczeniowe
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\OkresyRozliczeniowe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_okres_rozliczeniowy", referencedColumnName="id")
     * })
     */
    private $idOkresRozliczeniowy;

    /**
     * @var \Almot\AppBundle\Entity\Budynki
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Budynki")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_budynek", referencedColumnName="id")
     * })
     */
    private $idBudynek;

    /**
     * @var \Almot\AppBundle\Entity\Lokale
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Lokale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lokal", referencedColumnName="id")
     * })
     */
    private $idLokal;


}
