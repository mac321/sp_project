<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioArticulo
 *
 * @ORM\Table(name="Socio_Articulo", indexes={@ORM\Index(name="fk_Socio-Articulo_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class SocioArticulo
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
     * @ORM\Column(name="id_art", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArt;

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
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $precio = '0.00';


}
