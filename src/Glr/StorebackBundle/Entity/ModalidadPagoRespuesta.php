<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModalidadPagoRespuesta
 *
 * @ORM\Table(name="Modalidad_Pago_Respuesta", indexes={@ORM\Index(name="fk_Modalidad-Pago-Respuesta_1_idx", columns={"idMP"})})
 * @ORM\Entity
 */
class ModalidadPagoRespuesta
{
    /**
     * @var string
     *
     * @ORM\Column(name="idrpta", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrpta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rpta_pp", type="string", length=10, nullable=false)
     */
    private $rptaPp;

    /**
     * @var \ModalidadPago
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ModalidadPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMP", referencedColumnName="idMP")
     * })
     */
    private $idmp;


}
