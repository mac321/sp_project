<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActualizacionErpArticulo
 *
 * @ORM\Table(name="Actualizacion_ERP_Articulo")
 * @ORM\Entity
 */
class ActualizacionErpArticulo
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
     * @ORM\Column(name="idSocio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsocio;

    /**
     * @var string
     *
     * @ORM\Column(name="idsocio_art", type="string", length=15, nullable=false)
     */
    private $idsocioArt;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=6, scale=0, nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $precio;


}
