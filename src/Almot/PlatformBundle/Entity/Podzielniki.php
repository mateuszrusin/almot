<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Podzielniki
 *
 * @ORM\Table(name="podzielniki")
 * @ORM\Entity
 */
class Podzielniki
{
    /**
     * @var string
     *
     * @ORM\Column(name="numer_podzielnika", type="string", length=30, nullable=false)
     */
    private $numerPodzielnika;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rzeczywisty_wirtualny", type="boolean", nullable=false)
     */
    private $rzeczywistyWirtualny;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
