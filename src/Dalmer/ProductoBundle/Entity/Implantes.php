<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Implantes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\ImplantesRepository")
 */
class Implantes extends Productos
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
     * @var string $forma
     *
     * @ORM\Column(name="forma", type="string", length=255)
     */
    private $forma;



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
     * Set forma
     *
     * @param string $forma
     */
    public function setForma($forma)
    {
        $this->forma = $forma;
    }

    /**
     * Get forma
     *
     * @return string 
     */
    public function getForma()
    {
        return $this->forma;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}