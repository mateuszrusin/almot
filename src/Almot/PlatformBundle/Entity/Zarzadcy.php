<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zarzadcy
 *
 * @ORM\Table(name="zarzadcy")
 * @ORM\Entity
 */
class Zarzadcy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_administracja", type="integer", nullable=true)
     */
    private $idAdministracja;

    /**
     * @var string
     *
     * @ORM\Column(name="imie_nazwisko", type="string", length=30, nullable=true)
     */
    private $imieNazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=16, nullable=true)
     */
    private $telefon;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
