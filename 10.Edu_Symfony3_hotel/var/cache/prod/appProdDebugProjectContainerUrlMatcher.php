<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::showIndex',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/guests')) {
                // index_clients
                if ('/admin/guests' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showIndex',  '_route' => 'index_clients',);
                }

                // new_client
                if ('/admin/guests/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showNew',  '_route' => 'new_client',);
                }

            }

            // delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id_client>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::delete_articles',));
            }

            if (0 === strpos($pathinfo, '/admin/reservations')) {
                // reservations
                if ('/admin/reservations' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::showReservations',  '_route' => 'reservations',);
                }

                // booking
                if (preg_match('#^/admin/reservations/(?P<id_client>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'booking')), array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::booking',));
                }

            }

            // book_room
            if (0 === strpos($pathinfo, '/admin/book_room') && preg_match('#^/admin/book_room/(?P<id_client>[^/]++)/(?P<id_room>[^/]++)/(?P<date_in>[^/]++)/(?P<date_out>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'book_room')), array (  '_controller' => 'AppBundle\\Controller\\ReservationsController::book_room',));
            }

        }

        // about_us
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::showHistory',  '_route' => 'about_us',);
        }

        // modify_client
        if (0 === strpos($pathinfo, '/guests/modify') && preg_match('#^/guests/modify/(?P<id_client>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_client')), array (  '_controller' => 'AppBundle\\Controller\\ClientsController::showDetails',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\HomeController::showIndex',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // location
        if ('/map' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::showLocation',  '_route' => 'location',);
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::showContact',  '_route' => 'contact',);
        }

        // confirmation
        if ('/confirmation' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::confirmation',  '_route' => 'confirmation',);
        }

        // available_room_list
        if ('/rooms' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::booking',  '_route' => 'available_room_list',);
        }

        // pre_booking
        if ('/pre_booking/new' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::pre_booking_New',  '_route' => 'pre_booking',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
