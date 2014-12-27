<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZarzadcyAdministracje
 *
 * @ORM\Table(name="zarzadcy_administracje")
 * @ORM\Entity
 */
class ZarzadcyAdministracje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_zarzadca", type="integer", nullable=false)
     */
    private $idZarzadca;

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
