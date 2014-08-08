<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transacciones
 *
 * @ORM\Table(name="Transacciones", indexes={@ORM\Index(name="fk_Transacciones_1_idx", columns={"idSocio"}), @ORM\Index(name="fk_Transacciones_2_idx", columns={"idSocio", "pedido_socio", "idtrn"}), @ORM\Index(name="fk_Transacciones_3_idx", columns={"idSocio", "pedido_socio"}), @ORM\Index(name="fk_Transacciones_4_idx", columns={"idMP"}), @ORM\Index(name="fk_Transacciones_5_idx", columns={"idMP_real"}), @ORM\Index(name="fk_Transacciones_6_idx", columns={"trn_liq_ent"}), @ORM\Index(name="fk_Transacciones_7_idx", columns={"trn_liq_soc"}), @ORM\Index(name="fk_Transacciones_8_idx", columns={"trn_externo"})})
 * @ORM\Entity
 */
class Transacciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtrn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtrn;

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
     * @ORM\Column(name="idSocio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsocio;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_trn", type="integer", nullable=false)
     */
    private $fechaTrn;

    /**
     * @var string
     *
     * @ORM\Column(name="rpta_pp", type="string", length=10, nullable=true)
     */
    private $rptaPp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMP", type="integer", nullable=false)
     */
    private $idmp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMP_real", type="integer", nullable=true)
     */
    private $idmpReal;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_rpta", type="string", length=1, nullable=true)
     */
    private $trnRpta;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_accion", type="string", length=3, nullable=true)
     */
    private $trnAccion;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_respuesta", type="string", length=100, nullable=true)
     */
    private $trnRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_autoriza", type="string", length=6, nullable=true)
     */
    private $trnAutoriza;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_imp_autoriza", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $trnImpAutoriza;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_mon_autoriza", type="string", length=3, nullable=true)
     */
    private $trnMonAutoriza;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_fechayhora", type="integer", nullable=true)
     */
    private $trnFechayhora;

    /**
     * @var string
     *
     * @ORM\Column(name="trn_referencia", type="string", length=15, nullable=true)
     */
    private $trnReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_externo", type="integer", nullable=true)
     */
    private $trnExterno;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_estado", type="integer", nullable=false)
     */
    private $trnEstado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_liq_ent", type="integer", nullable=true)
     */
    private $trnLiqEnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_liq_soc", type="integer", nullable=true)
     */
    private $trnLiqSoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_ecommerce", type="integer", nullable=false)
     */
    private $updateEcommerce = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="update_ERP", type="integer", nullable=false)
     */
    private $updateErp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="envio_mp", type="integer", nullable=false)
     */
    private $envioMp = '0';


}
