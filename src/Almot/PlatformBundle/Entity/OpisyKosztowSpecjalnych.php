<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpisyKosztowSpecjalnych
 *
 * @ORM\Table(name="opisy_kosztow_specjalnych")
 * @ORM\Entity
 */
class OpisyKosztowSpecjalnych
{
    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=250, nullable=false)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
