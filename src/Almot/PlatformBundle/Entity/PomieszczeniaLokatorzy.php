<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PomieszczeniaLokatorzy
 *
 * @ORM\Table(name="pomieszczenia_lokatorzy")
 * @ORM\Entity
 */
class PomieszczeniaLokatorzy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pomieszczenie", type="integer", nullable=false)
     */
    private $idPomieszczenie;

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
