<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // productos_estaticas_naturales
        if (0 === strpos($pathinfo, '/productos/naturales') && preg_match('#^/productos/naturales/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::productoAction',)), array('_route' => 'productos_estaticas_naturales'));
        }

        // productos_estaticas_implantes
        if (0 === strpos($pathinfo, '/productos/implantes') && preg_match('#^/productos/implantes/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::productoAction',)), array('_route' => 'productos_estaticas_implantes'));
        }

        // productos_estaticas_aceites
        if (0 === strpos($pathinfo, '/productos/aceites') && preg_match('#^/productos/aceites/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::productoAction',)), array('_route' => 'productos_estaticas_aceites'));
        }

        // productos_estaticas_equipos
        if (0 === strpos($pathinfo, '/productos/equipos') && preg_match('#^/productos/equipos/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::productoAction',)), array('_route' => 'productos_estaticas_equipos'));
        }

        // productos_estaticas_cosmeticos
        if (0 === strpos($pathinfo, '/productos/cosmeticos') && preg_match('#^/productos/cosmeticos/(?P<producto>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dalmer\\ProductoBundle\\Controller\\DefaultController::productoAction',)), array('_route' => 'productos_estaticas_cosmeticos'));
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
