<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModalidadPago
 *
 * @ORM\Table(name="Modalidad_Pago")
 * @ORM\Entity
 */
class ModalidadPago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmp;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=80, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="producto", type="integer", nullable=false)
     */
    private $producto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="modo_respuesta", type="string", length=1, nullable=true)
     */
    private $modoRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="comision", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $comision;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=200, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_larga", type="string", length=512, nullable=true)
     */
    private $descripcionLarga;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false)
     */
    private $estado = '1';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Socio", mappedBy="idmp")
     */
    private $idsocio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idsocio = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
