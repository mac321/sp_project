<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AprobacionPago
 *
 * @ORM\Table(name="Aprobacion_Pago", indexes={@ORM\Index(name="fk_Aprobacion_Pago_1_idx", columns={"idtrn"})})
 * @ORM\Entity
 */
class AprobacionPago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="apr_fechayhora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aprFechayhora;

    /**
     * @var string
     *
     * @ORM\Column(name="apr_login", type="string", length=45, nullable=false)
     */
    private $aprLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="apr_ip", type="string", length=15, nullable=false)
     */
    private $aprIp;

    /**
     * @var \Transacciones
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Transacciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtrn", referencedColumnName="idtrn")
     * })
     */
    private $idtrn;


}
