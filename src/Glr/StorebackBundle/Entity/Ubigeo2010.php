<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubigeo2010
 *
 * @ORM\Table(name="Ubigeo2010")
 * @ORM\Entity
 */
class Ubigeo2010
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODDPTO", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coddpto;

    /**
     * @var string
     *
     * @ORM\Column(name="CODPROV", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="CODDIST", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coddist;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=true)
     */
    private $nombre;


}
