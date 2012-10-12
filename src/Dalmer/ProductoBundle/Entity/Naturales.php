<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Naturales
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\NaturalesRepository")
 */
class Naturales extends Productos
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
     * @var string $composicion
     *
     * @ORM\Column(name="composicion", type="string", length=255)
     */
    private $composicion;

    /**
     * @var text $acciones
     *
     * @ORM\Column(name="acciones", type="text")
     */
    private $acciones;

    /**
     * @var text $efectos
     *
     * @ORM\Column(name="efectos", type="text")
     */
    private $efectos;

    /**
     * @var text $consumo
     *
     * @ORM\Column(name="consumo", type="text")
     */
    private $consumo;

    /**
     * @var text $contraind
     *
     * @ORM\Column(name="contraind", type="text")
     */
    private $contraind;

    /**
     * @var text $precausiones
     *
     * @ORM\Column(name="precausiones", type="text")
     */
    private $precausiones;

    /**
     * @var text $almacenamiento
     *
     * @ORM\Column(name="almacenamiento", type="text")
     */
    private $almacenamiento;

    /**
     * @var string $vencimiento
     *
     * @ORM\Column(name="vencimiento", type="string", length=255)
     */
    private $vencimiento;


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
     * Set composicion
     *
     * @param string $composicion
     */
    public function setComposicion($composicion)
    {
        $this->composicion = $composicion;
    }

    /**
     * Get composicion
     *
     * @return string 
     */
    public function getComposicion()
    {
        return $this->composicion;
    }

    /**
     * Set acciones
     *
     * @param text $acciones
     */
    public function setAcciones($acciones)
    {
        $this->acciones = $acciones;
    }

    /**
     * Get acciones
     *
     * @return text 
     */
    public function getAcciones()
    {
        return $this->acciones;
    }

    /**
     * Set efectos
     *
     * @param text $efectos
     */
    public function setEfectos($efectos)
    {
        $this->efectos = $efectos;
    }

    /**
     * Get efectos
     *
     * @return text 
     */
    public function getEfectos()
    {
        return $this->efectos;
    }

    /**
     * Set consumo
     *
     * @param text $consumo
     */
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;
    }

    /**
     * Get consumo
     *
     * @return text 
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set contraind
     *
     * @param text $contraind
     */
    public function setContraind($contraind)
    {
        $this->contraind = $contraind;
    }

    /**
     * Get contraind
     *
     * @return text 
     */
    public function getContraind()
    {
        return $this->contraind;
    }

    /**
     * Set precausiones
     *
     * @param text $precausiones
     */
    public function setPrecausiones($precausiones)
    {
        $this->precausiones = $precausiones;
    }

    /**
     * Get precausiones
     *
     * @return text 
     */
    public function getPrecausiones()
    {
        return $this->precausiones;
    }

    /**
     * Set almacenamiento
     *
     * @param text $almacenamiento
     */
    public function setAlmacenamiento($almacenamiento)
    {
        $this->almacenamiento = $almacenamiento;
    }

    /**
     * Get almacenamiento
     *
     * @return text 
     */
    public function getAlmacenamiento()
    {
        return $this->almacenamiento;
    }

    /**
     * Set vencimiento
     *
     * @param string $vencimiento
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;
    }

    /**
     * Get vencimiento
     *
     * @return string 
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }
}