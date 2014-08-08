<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioCliente
 *
 * @ORM\Table(name="Socio_Cliente", indexes={@ORM\Index(name="fk_Socio-Cliente_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class SocioCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcliente;

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
     * @ORM\Column(name="idSocio_Cliente", type="string", length=15, nullable=false)
     */
    private $idsocioCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=45, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documento", type="string", length=3, nullable=true)
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=15, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=45, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="distrito", type="string", length=45, nullable=true)
     */
    private $distrito;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=45, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=45, nullable=true)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;


}
