<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RozliczeniaLokatorzy
 *
 * @ORM\Table(name="rozliczenia_lokatorzy")
 * @ORM\Entity
 */
class RozliczeniaLokatorzy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rozliczenie", type="integer", nullable=false)
     */
    private $idRozliczenie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lokator", type="integer", nullable=false)
     */
    private $idLokator;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_okres_rozliczeniowy", type="integer", nullable=true)
     */
    private $idOkresRozliczeniowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
