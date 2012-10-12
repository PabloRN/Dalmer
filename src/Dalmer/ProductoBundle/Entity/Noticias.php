<?php

namespace Dalmer\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dalmer\ProductoBundle\Entity\Noticias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dalmer\ProductoBundle\Entity\NoticiasRepository")
 */
class Noticias
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
     * @var text $resumen
     *
     * @ORM\Column(name="resumen", type="text")
     */
    private $resumen;

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
     * Set resumen
     *
     * @param text $resumen
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    }

    /**
     * Get resumen
     *
     * @return text 
     */
    public function getResumen()
    {
        return $this->resumen;
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