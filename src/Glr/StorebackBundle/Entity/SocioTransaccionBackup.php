<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioTransaccionBackup
 *
 * @ORM\Table(name="Socio_Transaccion_Backup", indexes={@ORM\Index(name="Socio-Transaccion_0_idx", columns={"idtrn", "idSocio", "pedido_socio"}), @ORM\Index(name="Socio-Transaccion_1_idx", columns={"idSocio"}), @ORM\Index(name="Socio-Transaccion_2_idx", columns={"idSocio", "pedido_socio"}), @ORM\Index(name="Socio-Transaccion_3_idx", columns={"idtrn"})})
 * @ORM\Entity
 */
class SocioTransaccionBackup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=10, nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="datetime", type="integer", nullable=true)
     */
    private $datetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSocio", type="integer", nullable=false)
     */
    private $idsocio;

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_socio", type="string", length=15, nullable=false)
     */
    private $pedidoSocio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtrn", type="integer", nullable=false)
     */
    private $idtrn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_venta", type="datetime", nullable=false)
     */
    private $fechaVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_venta", type="string", length=3, nullable=false)
     */
    private $monedaVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_venta", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $importeVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_total", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $importeTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vcto", type="datetime", nullable=true)
     */
    private $fechaVcto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=true)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_trn", type="integer", nullable=false)
     */
    private $fechaTrn;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_estado", type="integer", nullable=false)
     */
    private $trnEstado = '0';


}
