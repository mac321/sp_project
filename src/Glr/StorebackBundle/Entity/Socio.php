<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socio
 *
 * @ORM\Table(name="Socio", indexes={@ORM\Index(name="fk_Socio_1_idx", columns={"idUbigeo"})})
 * @ORM\Entity
 */
class Socio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSocio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsocio;

    /**
     * @var string
     *
     * @ORM\Column(name="RUC", type="string", length=11, nullable=false)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=80, nullable=false)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comercial", type="string", length=80, nullable=false)
     */
    private $nombreComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_ecommerce", type="string", length=80, nullable=false)
     */
    private $nombreEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_ecommerce", type="string", length=2000, nullable=false)
     */
    private $descripcionEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="referer_ecommerce", type="string", length=200, nullable=false)
     */
    private $refererEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="return_url_ecommerce", type="string", length=200, nullable=false)
     */
    private $returnUrlEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_ecommerce", type="string", length=200, nullable=false)
     */
    private $imagenEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="interfase_ecommerce", type="string", length=1, nullable=false)
     */
    private $interfaseEcommerce;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda_ecommerce", type="integer", nullable=false)
     */
    private $monedaEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="return_url_pago_ecommerce", type="string", length=200, nullable=true)
     */
    private $returnUrlPagoEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="return_url_vencimiento_ecommerce", type="string", length=200, nullable=true)
     */
    private $returnUrlVencimientoEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="return_url_consulta_ecommerce", type="string", length=200, nullable=true)
     */
    private $returnUrlConsultaEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="return_url_terminos", type="string", length=200, nullable=true)
     */
    private $returnUrlTerminos;

    /**
     * @var string
     *
     * @ORM\Column(name="tex_largo_pc", type="string", length=512, nullable=true)
     */
    private $texLargoPc;

    /**
     * @var string
     *
     * @ORM\Column(name="tex_corto_smart", type="string", length=512, nullable=true)
     */
    private $texCortoSmart;

    /**
     * @var string
     *
     * @ORM\Column(name="key_ecommerce", type="string", length=32, nullable=false)
     */
    private $keyEcommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo_transferencia", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $minimoTransferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="asume_costo_transferencia", type="integer", nullable=true)
     */
    private $asumeCostoTransferencia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cta_bancaria", type="string", length=30, nullable=true)
     */
    private $ctaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=40, nullable=true)
     */
    private $banco;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio_contrato", type="date", nullable=true)
     */
    private $fechaInicioContrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '1';

    /**
     * @var \Ubigeo
     *
     * @ORM\ManyToOne(targetEntity="Ubigeo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUbigeo", referencedColumnName="idUbigeo")
     * })
     */
    private $idubigeo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ModalidadPago", inversedBy="idsocio")
     * @ORM\JoinTable(name="socio_mp",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idSocio", referencedColumnName="idSocio")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idMP", referencedColumnName="idMP")
     *   }
     * )
     */
    private $idmp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmp = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
