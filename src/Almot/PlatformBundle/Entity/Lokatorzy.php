<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lokatorzy
 *
 * @ORM\Table(name="lokatorzy")
 * @ORM\Entity
 */
class Lokatorzy
{
    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=30, nullable=false)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwisko", type="string", length=30, nullable=false)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_firmy", type="string", length=50, nullable=false)
     */
    private $nazwaFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="nr_lokatora", type="integer", nullable=false)
     */
    private $nrLokatora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_wyprowadzki", type="date", nullable=false)
     */
    private $dataWyprowadzki;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=15, nullable=false)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="komorka", type="string", length=15, nullable=false)
     */
    private $komorka;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="uwagi", type="string", length=300, nullable=false)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="id_zewnetrzne_lokatora_do_zaliczek", type="string", length=30, nullable=false)
     */
    private $idZewnetrzneLokatoraDoZaliczek;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
