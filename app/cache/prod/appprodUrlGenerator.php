<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'ProductoBundle_homepage' => true,
       'paginas_estaticas' => true,
       'publicaciones_estaticas' => true,
       'usuario_login' => true,
       'usuario_login_check' => true,
       'usuario_logout' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getProductoBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getpaginas_estaticasRouteInfo()
    {
        return array(array (  0 => 'pagina',), array (  '_controller' => 'Dalmer\\EstaticasBundle\\Controller\\DefaultController::estaticaAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'pagina',  ),));
    }

    private function getpublicaciones_estaticasRouteInfo()
    {
        return array(array (  0 => 'producto',), array (  '_controller' => 'Dalmer\\EstaticasBundle\\Controller\\DefaultController::publicacionAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'producto',  ),  1 =>   array (    0 => 'text',    1 => '/publicaciones',  ),));
    }

    private function getusuario_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dalmer\\UsuarioBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/login',  ),));
    }

    private function getusuario_login_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/login_check',  ),));
    }

    private function getusuario_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/logout',  ),));
    }
}
