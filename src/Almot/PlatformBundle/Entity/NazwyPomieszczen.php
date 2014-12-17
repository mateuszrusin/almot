<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NazwyPomieszczen
 *
 * @ORM\Table(name="nazwy_pomieszczen")
 * @ORM\Entity
 */
class NazwyPomieszczen
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_skrocona", type="string", length=10, nullable=true)
     */
    private $nazwaSkrocona;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=30, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
