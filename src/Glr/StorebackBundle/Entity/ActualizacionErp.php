<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActualizacionErp
 *
 * @ORM\Table(name="Actualizacion_ERP", indexes={@ORM\Index(name="fk_Actualizacion-ERP_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class ActualizacionErp
{
    /**
     * @var string
     *
     * @ORM\Column(name="pedido_socio", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pedidoSocio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtrn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtrn;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSocio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsocio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_venta", type="datetime", nullable=false)
     */
    private $fechaVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_trn", type="integer", nullable=false)
     */
    private $fechaTrn;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=3, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_total", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $importeTotal;


}
