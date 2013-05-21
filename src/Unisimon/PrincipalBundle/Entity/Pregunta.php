<?php

namespace Unisimon\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta")
 * @ORM\Entity
 */
class Pregunta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_ayuda", type="string", length=260, nullable=true)
     */
    private $textoAyuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var \Encuesta
     *
     * @ORM\ManyToOne(targetEntity="Encuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id")
     * })
     */
    private $idEncuesta;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set textoAyuda
     *
     * @param string $textoAyuda
     * @return Pregunta
     */
    public function setTextoAyuda($textoAyuda)
    {
        $this->textoAyuda = $textoAyuda;
    
        return $this;
    }

    /**
     * Get textoAyuda
     *
     * @return string 
     */
    public function getTextoAyuda()
    {
        return $this->textoAyuda;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Pregunta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idEncuesta
     *
     * @param \Unisimon\PrincipalBundle\Entity\Encuesta $idEncuesta
     * @return Pregunta
     */
    public function setIdEncuesta(\Unisimon\PrincipalBundle\Entity\Encuesta $idEncuesta = null)
    {
        $this->idEncuesta = $idEncuesta;
    
        return $this;
    }

    /**
     * Get idEncuesta
     *
     * @return \Unisimon\PrincipalBundle\Entity\Encuesta 
     */
    public function getIdEncuesta()
    {
        return $this->idEncuesta;
    }
}