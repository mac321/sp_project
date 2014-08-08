<?php

namespace Glr\StorebackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equivalencias
 *
 * @ORM\Table(name="Equivalencias", indexes={@ORM\Index(name="fk_Equivalencias_1_idx", columns={"idSocio"})})
 * @ORM\Entity
 */
class Equivalencias
{
    /**
     * @var string
     *
     * @ORM\Column(name="equiv_cod", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $equivCod;

    /**
     * @var string
     *
     * @ORM\Column(name="equiv_cod_ori", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $equivCodOri;

    /**
     * @var string
     *
     * @ORM\Column(name="equiv_cod_des", type="string", length=45, nullable=false)
     */
    private $equivCodDes;

    /**
     * @var \Socio
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Socio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSocio", referencedColumnName="idSocio")
     * })
     */
    private $idsocio;


}
