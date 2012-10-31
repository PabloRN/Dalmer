<?php

namespace Dalmer\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
   public function productoAction($producto)
	{
	    return $this->render('ProductoBundle:Default:'.$producto.'.html.twig', array('producto' => $producto));
	}
}
