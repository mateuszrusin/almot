<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PodzielnikiPomieszczenia
 *
 * @ORM\Table(name="podzielniki_pomieszczenia", indexes={@ORM\Index(name="id_podzielnik", columns={"id_podzielnik"}), @ORM\Index(name="id_pomieszczenie", columns={"id_pomieszczenie"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class PodzielnikiPomieszczenia
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
     * @var \Almot\AppBundle\Entity\Pomieszczenia
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Pomieszczenia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pomieszczenie", referencedColumnName="id")
     * })
     */
    private $idPomieszczenie;

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
