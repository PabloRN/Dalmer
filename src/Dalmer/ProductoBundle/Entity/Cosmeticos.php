<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Cosmeticos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\CosmeticosRepository")
 */
class Cosmeticos extends Productos
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
     * @var text $propiedades
     *
     * @ORM\Column(name="propiedades", type="text")
     */
    private $propiedades;

    /**
     * @var text $empleo
     *
     * @ORM\Column(name="empleo", type="text")
     */
    private $empleo;

    /**
     * @var text $ingredientes
     *
     * @ORM\Column(name="ingredientes", type="text")
     */
    private $ingredientes;

    /**
     * @var text $activos
     *
     * @ORM\Column(name="activos", type="text")
     */
    private $activos;

    /**
     * @var text $aplicacion
     *
     * @ORM\Column(name="aplicacion", type="text")
     */
    private $aplicacion;


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
     * Set propiedades
     *
     * @param text $propiedades
     */
    public function setPropiedades($propiedades)
    {
        $this->propiedades = $propiedades;
    }

    /**
     * Get propiedades
     *
     * @return text 
     */
    public function getPropiedades()
    {
        return $this->propiedades;
    }

    /**
     * Set empleo
     *
     * @param text $empleo
     */
    public function setEmpleo($empleo)
    {
        $this->empleo = $empleo;
    }

    /**
     * Get empleo
     *
     * @return text 
     */
    public function getEmpleo()
    {
        return $this->empleo;
    }

    /**
     * Set ingredientes
     *
     * @param text $ingredientes
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    /**
     * Get ingredientes
     *
     * @return text 
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set activos
     *
     * @param text $activos
     */
    public function setActivos($activos)
    {
        $this->activos = $activos;
    }

    /**
     * Get activos
     *
     * @return text 
     */
    public function getActivos()
    {
        return $this->activos;
    }

    /**
     * Set aplicacion
     *
     * @param text $aplicacion
     */
    public function setAplicacion($aplicacion)
    {
        $this->aplicacion = $aplicacion;
    }

    /**
     * Get aplicacion
     *
     * @return text 
     */
    public function getAplicacion()
    {
        return $this->aplicacion;
    }
}