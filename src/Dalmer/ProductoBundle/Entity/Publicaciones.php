<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Publicaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\PublicacionesRepository")
 */
class Publicaciones
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
     * @var string $pais
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var integer $anno
     *
     * @ORM\Column(name="anno", type="integer")
     */
    private $anno;

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
     * Set anno
     *
     * @param integer $anno
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
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