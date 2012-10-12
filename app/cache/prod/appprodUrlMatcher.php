<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // ProveedorBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProveedorBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ProveedorBundle_homepage'));
        }

        // EventoBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\EventoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EventoBundle_homepage'));
        }

        // DistribuidorBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\DistribuidorBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'DistribuidorBundle_homepage'));
        }

        // NoticiaBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\NoticiaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'NoticiaBundle_homepage'));
        }

        // PublicacionBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\PublicacionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'PublicacionBundle_homepage'));
        }

        // ProductoBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ProductoBundle_homepage'));
        }

        // paginas_estaticas
        if (preg_match('#^/(?P<pagina>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\EstaticasBundle\\Controller\\DefaultController::estaticaAction',)), array('_route' => 'paginas_estaticas'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
