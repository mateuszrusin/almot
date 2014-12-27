<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PomieszczeniaLokale
 *
 * @ORM\Table(name="pomieszczenia_lokale")
 * @ORM\Entity
 */
class PomieszczeniaLokale
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
     * @ORM\Column(name="id_lokal", type="integer", nullable=false)
     */
    private $idLokal;

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
