<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubigeo
 *
 * @ORM\Table(name="Ubigeo", indexes={@ORM\Index(name="fk_Ubigeo_1_idx", columns={"idDistrito"}), @ORM\Index(name="fk_Ubigeo_2_idx", columns={"idProvincia"}), @ORM\Index(name="fk_Ubigeo_3_idx", columns={"idDepartamento"})})
 * @ORM\Entity
 */
class Ubigeo
{
    /**
     * @var string
     *
     * @ORM\Column(name="idUbigeo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idubigeo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Distrito
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Distrito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDistrito", referencedColumnName="idDistrito")
     * })
     */
    private $iddistrito;

    /**
     * @var \Provincia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProvincia", referencedColumnName="idProvincia")
     * })
     */
    private $idprovincia;

    /**
     * @var \Departamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartamento", referencedColumnName="idDepartamento")
     * })
     */
    private $iddepartamento;


}
