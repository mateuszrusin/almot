<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LokaleParametryRozliczeniaLokali
 *
 * @ORM\Table(name="lokale_parametry_rozliczenia_lokali")
 * @ORM\Entity
 */
class LokaleParametryRozliczeniaLokali
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_parametru_rozliczenie_lokalu", type="integer", nullable=false)
     */
    private $idParametruRozliczenieLokalu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lokalu", type="integer", nullable=false)
     */
    private $idLokalu;

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
