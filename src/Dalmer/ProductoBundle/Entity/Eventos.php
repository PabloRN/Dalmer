<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Eventos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\EventosRepository")
 */
class Eventos
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
     * @var text $titulo
     *
     * @ORM\Column(name="titulo", type="text")
     */
    private $titulo;

    /**
     * @var string $imagen
     *
     * @ORM\Column(name="imagen", type="string")
     */
    private $imagen;

    /**
     * @var string $link
     *
     * @ORM\Column(name="link", type="string")
     */
    private $link;


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
     * @param text $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return text 
     */
    public function getTitulo()
    {
        return $this->titulo;
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

    /**
     * Set link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}