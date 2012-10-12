<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Patentes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\PatentesRepository")
 */
class Patentes
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
     * @var string $titulo
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string $pais
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set pais
     *
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }
		/**
	* Set productos
	* @param string $productos
	*
	*/
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