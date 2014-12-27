<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grzejniki
 *
 * @ORM\Table(name="grzejniki")
 * @ORM\Entity
 */
class Grzejniki
{
    /**
     * @var float
     *
     * @ORM\Column(name="wspolczynnik_oceny", type="float", precision=10, scale=0, nullable=true)
     */
    private $wspolczynnikOceny;

    /**
     * @var integer
     *
     * @ORM\Column(name="moc", type="integer", nullable=true)
     */
    private $moc;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=30, nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="wymiar", type="string", length=30, nullable=true)
     */
    private $wymiar;

    /**
     * @var integer
     *
     * @ORM\Column(name="ilosc_zeber", type="integer", nullable=false)
     */
    private $iloscZeber;

    /**
     * @var string
     *
     * @ORM\Column(name="opis_dodatkowy", type="string", length=250, nullable=true)
     */
    private $opisDodatkowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
