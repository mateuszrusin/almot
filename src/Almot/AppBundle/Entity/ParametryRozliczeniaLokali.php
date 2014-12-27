<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametryRozliczeniaLokali
 *
 * @ORM\Table(name="parametry_rozliczenia_lokali")
 * @ORM\Entity
 */
class ParametryRozliczeniaLokali
{
    /**
     * @var float
     *
     * @ORM\Column(name="wspolczynnik_wyrownawczy_lokalu", type="float", precision=10, scale=0, nullable=false)
     */
    private $wspolczynnikWyrownawczyLokalu;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura_srednia_pomieszczen", type="decimal", precision=2, scale=1, nullable=false)
     */
    private $temperaturaSredniaPomieszczen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ryczalt", type="boolean", nullable=false)
     */
    private $ryczalt;

    /**
     * @var string
     *
     * @ORM\Column(name="uwagi", type="string", length=200, nullable=false)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
