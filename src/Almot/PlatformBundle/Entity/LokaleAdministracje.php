<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LokaleAdministracje
 *
 * @ORM\Table(name="lokale_administracje", indexes={@ORM\Index(name="id_administracja", columns={"id_administracja"}), @ORM\Index(name="id_budynek", columns={"id_lokal"}), @ORM\Index(name="id_okres_rozliczeniowy", columns={"id_okres_rozliczeniowy"})})
 * @ORM\Entity
 */
class LokaleAdministracje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lokal", type="integer", nullable=false)
     */
    private $idLokal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_administracja", type="integer", nullable=false)
     */
    private $idAdministracja;

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
