<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiquidacionEntidad
 *
 * @ORM\Table(name="Liquidacion_Entidad", indexes={@ORM\Index(name="fk_Liquidacion_Entidad_1_idx", columns={"idMP"})})
 * @ORM\Entity
 */
class LiquidacionEntidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLiq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre_entidad", type="date", nullable=true)
     */
    private $fechaCierreEntidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodo_cierre_entidad", type="integer", nullable=true)
     */
    private $periodoCierreEntidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_lote_entidad", type="integer", nullable=true)
     */
    private $numeroLoteEntidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_autorizacion_entidad", type="date", nullable=true)
     */
    private $fechaAutorizacionEntidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_deposito_entidad", type="date", nullable=true)
     */
    private $fechaDepositoEntidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_transacciones", type="smallint", nullable=false)
     */
    private $cantidadTransacciones = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="monto_transacciones", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $montoTransacciones = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="liq_fechayhora", type="integer", nullable=true)
     */
    private $liqFechayhora;

    /**
     * @var integer
     *
     * @ORM\Column(name="liq_usuario", type="bigint", nullable=true)
     */
    private $liqUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="liq_estado", type="integer", nullable=true)
     */
    private $liqEstado = '1';

    /**
     * @var \ModalidadPago
     *
     * @ORM\ManyToOne(targetEntity="ModalidadPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMP", referencedColumnName="idMP")
     * })
     */
    private $idmp;


}
