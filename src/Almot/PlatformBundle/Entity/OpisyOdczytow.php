<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpisyOdczytow
 *
 * @ORM\Table(name="opisy_odczytow")
 * @ORM\Entity
 */
class OpisyOdczytow
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=255, nullable=false)
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
