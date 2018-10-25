<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::showIndex',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/guests')) {
            // index_clients
            if ('/guests' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showIndex',  '_route' => 'index_clients',);
            }

            // modify_client
            if (0 === strpos($pathinfo, '/guests/modify') && preg_match('#^/guests/modify/(?P<id_client>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_client')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showDetails',));
            }

            // new_client
            if ('/guests/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showNew',  '_route' => 'new_client',);
            }

        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id_client>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::delete_articles',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/reservations')) {
            // reservations
            if ('/reservations' === $pathinfo) {
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
