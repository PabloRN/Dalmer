<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Aceites
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\AceitesRepository")
 */
class Aceites extends Productos 
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $administracion
     *
     * @ORM\Column(name="administracion", type="string", length=255)
     */
    private $administracion;

    /**
     * @var text $composicion
     *
     * @ORM\Column(name="composicion", type="text")
     */
    private $composicion;

    /**
     * @var string $accion
     *
     * @ORM\Column(name="accion", type="string", length=255)
     */
    private $accion;

    /**
     * @var string $indicaciones
     *
     * @ORM\Column(name="indicaciones", type="string", length=255)
     */
    private $indicaciones;

    /**
     * @var text $contraindicaciones
     *
     * @ORM\Column(name="contraindicaciones", type="text")
     */
    private $contraindicaciones;

    /**
     * @var text $precauciones
     *
     * @ORM\Column(name="precauciones", type="text")
     */
    private $precauciones;

    /**
     * @var text $advertencias
     *
     * @ORM\Column(name="advertencias", type="text")
     */
    private $advertencias;

    /**
     * @var text $interacciones
     *
     * @ORM\Column(name="interacciones", type="text")
     */
    private $interacciones;

    /**
     * @var text $reacciones
     *
     * @ORM\Column(name="reacciones", type="text")
     */
    private $reacciones;

    /**
     * @var text $posologia
     *
     * @ORM\Column(name="posologia", type="text")
     */
    private $posologia;

    /**
     * @var text $uso
     *
     * @ORM\Column(name="uso", type="text")
     */
    private $uso;


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
     * Set administracion
     *
     * @param string $administracion
     */
    public function setAdministracion($administracion)
    {
        $this->administracion = $administracion;
    }

    /**
     * Get administracion
     *
     * @return string 
     */
    public function getAdministracion()
    {
        return $this->administracion;
    }

    /**
     * Set composicion
     *
     * @param text $composicion
     */
    public function setComposicion($composicion)
    {
        $this->composicion = $composicion;
    }

    /**
     * Get composicion
     *
     * @return text 
     */
    public function getComposicion()
    {
        return $this->composicion;
    }

    /**
     * Set accion
     *
     * @param string $accion
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set indicaciones
     *
     * @param string $indicaciones
     */
    public function setIndicaciones($indicaciones)
    {
        $this->indicaciones = $indicaciones;
    }

    /**
     * Get indicaciones
     *
     * @return string 
     */
    public function getIndicaciones()
    {
        return $this->indicaciones;
    }

    /**
     * Set contraindicaciones
     *
     * @param text $contraindicaciones
     */
    public function setContraindicaciones($contraindicaciones)
    {
        $this->contraindicaciones = $contraindicaciones;
    }

    /**
     * Get contraindicaciones
     *
     * @return text 
     */
    public function getContraindicaciones()
    {
        return $this->contraindicaciones;
    }

    /**
     * Set precauciones
     *
     * @param text $precauciones
     */
    public function setPrecauciones($precauciones)
    {
        $this->precauciones = $precauciones;
    }

    /**
     * Get precauciones
     *
     * @return text 
     */
    public function getPrecauciones()
    {
        return $this->precauciones;
    }

    /**
     * Set advertencias
     *
     * @param text $advertencias
     */
    public function setAdvertencias($advertencias)
    {
        $this->advertencias = $advertencias;
    }

    /**
     * Get advertencias
     *
     * @return text 
     */
    public function getAdvertencias()
    {
        return $this->advertencias;
    }

    /**
     * Set interacciones
     *
     * @param text $interacciones
     */
    public function setInteracciones($interacciones)
    {
        $this->interacciones = $interacciones;
    }

    /**
     * Get interacciones
     *
     * @return text 
     */
    public function getInteracciones()
    {
        return $this->interacciones;
    }

    /**
     * Set reacciones
     *
     * @param text $reacciones
     */
    public function setReacciones($reacciones)
    {
        $this->reacciones = $reacciones;
    }

    /**
     * Get reacciones
     *
     * @return text 
     */
    public function getReacciones()
    {
        return $this->reacciones;
    }

    /**
     * Set posologia
     *
     * @param text $posologia
     */
    public function setPosologia($posologia)
    {
        $this->posologia = $posologia;
    }

    /**
     * Get posologia
     *
     * @return text 
     */
    public function getPosologia()
    {
        return $this->posologia;
    }

    /**
     * Set uso
     *
     * @param text $uso
     */
    public function setUso($uso)
    {
        $this->uso = $uso;
    }

    /**
     * Get uso
     *
     * @return text 
     */
    public function getUso()
    {
        return $this->uso;
    }
}