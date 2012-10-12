<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Registros
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\RegistrosRepository")
 */
class Registros
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
     * @var string $pais
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
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