<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Equipos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\EquiposRepository")
 */
class Equipos extends Productos
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
     * @var text $caracteristicas
     *
     * @ORM\Column(name="caracteristicas", type="text")
     */
    private $caracteristicas;

    /**
     * @var text $requisitos
     *
     * @ORM\Column(name="requisitos", type="text")
     */
    private $requisitos;


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
     * Set caracteristicas
     *
     * @param text $caracteristicas
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;
    }

    /**
     * Get caracteristicas
     *
     * @return text 
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set requisitos
     *
     * @param text $requisitos
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;
    }

    /**
     * Get requisitos
     *
     * @return text 
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }
}