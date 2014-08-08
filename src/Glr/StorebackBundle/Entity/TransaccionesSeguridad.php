<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransaccionesSeguridad
 *
 * @ORM\Table(name="Transacciones_Seguridad", indexes={@ORM\Index(name="seg_fecha_hora", columns={"seg_fecha_hora"}), @ORM\Index(name="seg_num_tarjeta", columns={"seg_num_tarjeta"})})
 * @ORM\Entity
 */
class TransaccionesSeguridad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtrn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtrn;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_num_tarjeta", type="string", length=16, nullable=true)
     */
    private $segNumTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_nom_tarjetahabiente", type="string", length=100, nullable=true)
     */
    private $segNomTarjetahabiente;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_origen_tarjeta", type="string", length=20, nullable=true)
     */
    private $segOrigenTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_banco_emisor", type="string", length=50, nullable=true)
     */
    private $segBancoEmisor;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_eci", type="string", length=2, nullable=true)
     */
    private $segEci;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_descript_eci", type="string", length=100, nullable=true)
     */
    private $segDescriptEci;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_cod_rescvv2", type="string", length=10, nullable=true)
     */
    private $segCodRescvv2;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_id_unico", type="string", length=30, nullable=true)
     */
    private $segIdUnico;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_ip_origen", type="string", length=100, nullable=true)
     */
    private $segIpOrigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_fecha_hora", type="integer", nullable=true)
     */
    private $segFechaHora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seg_procesado", type="boolean", nullable=true)
     */
    private $segProcesado;


}
