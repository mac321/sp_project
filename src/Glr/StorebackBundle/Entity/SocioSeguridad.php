<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioSeguridad
 *
 * @ORM\Table(name="Socio_Seguridad")
 * @ORM\Entity
 */
class SocioSeguridad
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
     * @var boolean
     *
     * @ORM\Column(name="seg_activo", type="boolean", nullable=true)
     */
    private $segActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_lapso", type="integer", nullable=true)
     */
    private $segLapso;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_exceso_cantidad", type="integer", nullable=true)
     */
    private $segExcesoCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_exceso_porcentaje", type="integer", nullable=true)
     */
    private $segExcesoPorcentaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_exceso_monto_uni", type="integer", nullable=true)
     */
    private $segExcesoMontoUni;

    /**
     * @var integer
     *
     * @ORM\Column(name="seg_exceso_monto_tot", type="integer", nullable=true)
     */
    private $segExcesoMontoTot;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_hora_ini", type="string", length=5, nullable=true)
     */
    private $segHoraIni;

    /**
     * @var string
     *
     * @ORM\Column(name="seg_hora_fin", type="string", length=5, nullable=true)
     */
    private $segHoraFin;


}
