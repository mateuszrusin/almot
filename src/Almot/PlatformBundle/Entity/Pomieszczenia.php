<?php

namespace Almot\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pomieszczenia
 *
 * @ORM\Table(name="pomieszczenia")
 * @ORM\Entity
 */
class Pomieszczenia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_nazwa_pomieszczenia", type="integer", nullable=false)
     */
    private $idNazwaPomieszczenia;

    /**
     * @var integer
     *
     * @ORM\Column(name="liczba_porzadkowa", type="integer", nullable=false)
     */
    private $liczbaPorzadkowa;

    /**
     * @var string
     *
     * @ORM\Column(name="powierzchnia", type="decimal", precision=2, scale=2, nullable=false)
     */
    private $powierzchnia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
