<?php

namespace Unisimon\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
 * @ORM\Entity
 */
class Respuesta
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
     * @ORM\Column(name="valor_respuesta", type="string", length=240, nullable=true)
     */
    private $valorRespuesta;

    /**
     * @var \Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pregunta", referencedColumnName="id")
     * })
     */
    private $idPregunta;



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
     * Set valorRespuesta
     *
     * @param string $valorRespuesta
     * @return Respuesta
     */
    public function setValorRespuesta($valorRespuesta)
    {
        $this->valorRespuesta = $valorRespuesta;
    
        return $this;
    }

    /**
     * Get valorRespuesta
     *
     * @return string 
     */
    public function getValorRespuesta()
    {
        return $this->valorRespuesta;
    }

    /**
     * Set idPregunta
     *
     * @param \Unisimon\PrincipalBundle\Entity\Pregunta $idPregunta
     * @return Respuesta
     */
    public function setIdPregunta(\Unisimon\PrincipalBundle\Entity\Pregunta $idPregunta = null)
    {
        $this->idPregunta = $idPregunta;
    
        return $this;
    }

    /**
     * Get idPregunta
     *
     * @return \Unisimon\PrincipalBundle\Entity\Pregunta 
     */
    public function getIdPregunta()
    {
        return $this->idPregunta;
    }
}