<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::showIndex',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/guests')) {
            // index_clients
            if ($pathinfo === '/guests') {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showIndex',  '_route' => 'index_clients',);
            }

            // modify_client
            if (0 === strpos($pathinfo, '/guests/modify') && preg_match('#^/guests/modify/(?P<id_client>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_client')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showDetails',));
            }

            // new_client
            if ($pathinfo === '/guests/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showNew',  '_route' => 'new_client',);
            }

        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id_client>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::delete_articles',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/reservations')) {
            // reservations
            if ($pathinfo === '/reservations') {
                return array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::showReservations',  '_route' => 'reservations',);
            }

            // booking
            if (preg_match('#^/reservations/(?P<id_client>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'booking')), array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::booking',));
            }

        }

        // book_room
        if (0 === strpos($pathinfo, '/book_room') && preg_match('#^/book_room/(?P<id_client>[^/]++)/(?P<id_room>[^/]++)/(?P<date_in>[^/]++)/(?P<date_out>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_room')), array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::book_room',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
