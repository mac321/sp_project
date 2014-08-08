<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="Usuario", indexes={@ORM\Index(name="fk_Usuario_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=45, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=45, nullable=false)
     */
    private $clave;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_key", type="string", length=32, nullable=true)
     */
    private $authKey;

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
