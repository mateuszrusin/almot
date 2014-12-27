<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rozliczenia
 *
 * @ORM\Table(name="rozliczenia")
 * @ORM\Entity
 */
class Rozliczenia
{
    /**
     * @var float
     *
     * @ORM\Column(name="prognozowana_kwota_zaliczki", type="float", precision=10, scale=0, nullable=false)
     */
    private $prognozowanaKwotaZaliczki;

    /**
     * @var float
     *
     * @ORM\Column(name="zaliczka", type="float", precision=10, scale=0, nullable=false)
     */
    private $zaliczka;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_staly_lokalu", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztStalyLokalu;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_zmienny_jednen", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztZmiennyJednen;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_zmienny_dwa", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztZmiennyDwa;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_rozliczenia_podzielnika", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztRozliczeniaPodzielnika;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_specjalny", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztSpecjalny;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_opisu_kosztu_specjalnego", type="integer", nullable=false)
     */
    private $idOpisuKosztuSpecjalnego;

    /**
     * @var float
     *
     * @ORM\Column(name="nadplata_niedoplata", type="float", precision=10, scale=0, nullable=false)
     */
    private $nadplataNiedoplata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
