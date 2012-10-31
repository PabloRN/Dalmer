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

        // ProductoBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ProductoBundle_homepage'));
        }

        // paginas_estaticas
        if (preg_match('#^/(?P<pagina>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\EstaticasBundle\\Controller\\DefaultController::estaticaAction',)), array('_route' => 'paginas_estaticas'));
        }

        // publicaciones_estaticas
        if (0 === strpos($pathinfo, '/publicaciones') && preg_match('#^/publicaciones/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\EstaticasBundle\\Controller\\DefaultController::publicacionAction',)), array('_route' => 'publicaciones_estaticas'));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_login
            if ($pathinfo === '/usuario/login') {
                return array (  '_controller' => 'Dalmer\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
            }

            // usuario_login_check
            if ($pathinfo === '/usuario/login_check') {
                return array('_route' => 'usuario_login_check');
            }

            // usuario_logout
            if ($pathinfo === '/usuario/logout') {
                return array('_route' => 'usuario_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
