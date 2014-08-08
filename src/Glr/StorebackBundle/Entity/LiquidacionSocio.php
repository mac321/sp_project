<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiquidacionSocio
 *
 * @ORM\Table(name="Liquidacion_Socio", indexes={@ORM\Index(name="fk_Liquidacion_Socio_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class LiquidacionSocio
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
     * @ORM\Column(name="fecha_cierre_socio", type="date", nullable=true)
     */
    private $fechaCierreSocio;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodo_cierre_socio", type="integer", nullable=true)
     */
    private $periodoCierreSocio;

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
     * @var \Socio
     *
     * @ORM\ManyToOne(targetEntity="Socio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSocio", referencedColumnName="idSocio")
     * })
     */
    private $idsocio;


}
