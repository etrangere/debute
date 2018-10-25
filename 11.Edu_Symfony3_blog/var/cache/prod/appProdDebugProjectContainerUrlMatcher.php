<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin/genus')) {
            // admin_genus_list
            if ($pathinfo === '/admin/genus') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\GenusAdminController::indexAction',  '_route' => 'admin_genus_list',);
            }

            // admin_genus_new
            if ($pathinfo === '/admin/genus/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\GenusAdminController::newAction',  '_route' => 'admin_genus_new',);
            }

            // admin_genus_edit
            if (preg_match('#^/admin/genus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genus_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\GenusAdminController::editAction',));
            }

            // admin_genus_delete
            if (preg_match('#^/admin/genus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genus_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\GenusAdminController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/genus')) {
            // app_genus_new
            if ($pathinfo === '/genus/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\GenusController::newAction',  '_route' => 'app_genus_new',);
            }

            // genus_all
            if ($pathinfo === '/genus') {
                return array (  '_controller' => 'AppBundle\\Controller\\GenusController::listAction',  '_route' => 'genus_all',);
            }

            // genus_show
            if (preg_match('#^/genus/(?P<genusName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genus_show')), array (  '_controller' => 'AppBundle\\Controller\\GenusController::showAction',));
            }

            // genus_show_notes
            if (preg_match('#^/genus/(?P<name>[^/]++)/notes$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genus_show_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genus_show_notes')), array (  '_controller' => 'AppBundle\\Controller\\GenusController::getNotesAction',));
            }
            not_genus_show_notes:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::homepageAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
