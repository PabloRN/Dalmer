<?php

namespace Dalmer\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function estaticaAction($pagina)
    {
        return $this->render('EstaticasBundle:Default:'.$pagina.'.html.twig');
    }
}