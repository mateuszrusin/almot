<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lokale
 *
 * @ORM\Table(name="lokale")
 * @ORM\Entity
 */
class Lokale
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_zewnetrzne_lokalu_do_zaliczek", type="string", length=30, nullable=false)
     */
    private $idZewnetrzneLokaluDoZaliczek;

    /**
     * @var string
     *
     * @ORM\Column(name="numer_klatki", type="string", length=5, nullable=false)
     */
    private $numerKlatki;

    /**
     * @var string
     *
     * @ORM\Column(name="numer_mieszkania", type="string", length=5, nullable=false)
     */
    private $numerMieszkania;

    /**
     * @var float
     *
     * @ORM\Column(name="powierzchnia", type="float", precision=10, scale=0, nullable=false)
     */
    private $powierzchnia;

    /**
     * @var float
     *
     * @ORM\Column(name="wspolczynnik_wyrownawczy", type="float", precision=10, scale=0, nullable=false)
     */
    private $wspolczynnikWyrownawczy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
