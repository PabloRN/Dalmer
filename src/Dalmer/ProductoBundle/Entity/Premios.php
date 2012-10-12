<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Premios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\PremiosRepository")
 */
class Premios
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
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string $imagen
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;

/** @ORM\ManyToOne(targetEntity="Dalmer\ProductoBundle\Entity\Productos") */
 private $productos;
   
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
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
		public function setProductos(\Dalmer\ProductoBundle\Entity\Productos $productos){
	$this->producto = $productos;
	}
	/*
	* Get prodcutos
	*
	* return string
	*/
	public function getProductos(){
	
	return $this->productos;
	}
}