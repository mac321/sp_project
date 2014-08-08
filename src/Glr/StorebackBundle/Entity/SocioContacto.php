<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioContacto
 *
 * @ORM\Table(name="Socio_Contacto", indexes={@ORM\Index(name="fk_Socio-Contacto_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class SocioContacto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcontacto;

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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="puesto", type="string", length=45, nullable=true)
     */
    private $puesto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=45, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;


}
