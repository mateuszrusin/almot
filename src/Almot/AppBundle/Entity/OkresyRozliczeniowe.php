<?php

namespace Almot\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OkresyRozliczeniowe
 *
 * @ORM\Table(name="okresy_rozliczeniowe", indexes={@ORM\Index(name="id_wezla", columns={"id_wezla"})})
 * @ORM\Entity
 */
class OkresyRozliczeniowe
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_okresu_rozliczeniowego", type="string", length=50, nullable=false)
     */
    private $nazwaOkresuRozliczeniowego;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_poczatku_rozliczenia", type="date", nullable=false)
     */
    private $dataPoczatkuRozliczenia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_zakonczenia_rozliczenia", type="date", nullable=false)
     */
    private $dataZakonczeniaRozliczenia;

    /**
     * @var float
     *
     * @ORM\Column(name="calkowite_koszty_ogrzewania", type="float", precision=10, scale=0, nullable=false)
     */
    private $calkowiteKosztyOgrzewania;

    /**
     * @var float
     *
     * @ORM\Column(name="stale_koszty_ogrzewania", type="float", precision=10, scale=0, nullable=false)
     */
    private $staleKosztyOgrzewania;

    /**
     * @var float
     *
     * @ORM\Column(name="zmienne_koszty_ogrzewania_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $zmienneKosztyOgrzewania1;

    /**
     * @var float
     *
     * @ORM\Column(name="zmienne_koszty_ogrzewania_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $zmienneKosztyOgrzewania2;

    /**
     * @var float
     *
     * @ORM\Column(name="srednia_temperatura_otoczenia", type="float", precision=10, scale=0, nullable=false)
     */
    private $sredniaTemperaturaOtoczenia;

    /**
     * @var float
     *
     * @ORM\Column(name="jednostkowy_koszt_staly", type="float", precision=10, scale=0, nullable=false)
     */
    private $jednostkowyKosztStaly;

    /**
     * @var float
     *
     * @ORM\Column(name="jednostkowy_koszt_zmienny_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $jednostkowyKosztZmienny1;

    /**
     * @var float
     *
     * @ORM\Column(name="jednostkowy_koszt_zmienny_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $jednostkowyKosztZmienny2;

    /**
     * @var float
     *
     * @ORM\Column(name="koszt_rozliczenia_podzielnika", type="float", precision=10, scale=0, nullable=false)
     */
    private $kosztRozliczeniaPodzielnika;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flaga_rozliczenie_zakonczone", type="boolean", nullable=false)
     */
    private $flagaRozliczenieZakonczone;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Almot\AppBundle\Entity\Wezly
     *
     * @ORM\ManyToOne(targetEntity="Almot\AppBundle\Entity\Wezly")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_wezla", referencedColumnName="id")
     * })
     */
    private $idWezla;


}
