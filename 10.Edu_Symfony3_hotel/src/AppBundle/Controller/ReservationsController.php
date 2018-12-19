<?php

namespace AppBundle\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Client;
use AppBundle\Repository\RoomRepository;
use AppBundle\Entity\Room;




class ReservationsController extends Controller
{
    /**
     * @Route("/admin/reservations",name="reservations")
     */
    public function showReservations()
    {
        $data = [];

        $reservations = $this->getDoctrine()
            ->getRepository('AppBundle:Reservation')
            ->findAll();
        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->findAll();

        $data['reservations'] = $reservations;
        $data['client'] = $client;

        return $this->render("reservations/index.html.twig",$data);
        
    }



    /**
     * @Route("/admin/book_room/{id_client}/{id_room}/{date_in}/{date_out}" , name="book_room")
     */

    public function book_room($id_client,$id_room,$date_in,$date_out)
    {

                  $reservation = new Reservation();
                  $date_start = new \DateTime($date_in);
                  $date_end = new \DateTime($date_out);
                  $reservation->setDateIn($date_start);
                  $reservation->setDateOut($date_end);

                  $em = $this->getDoctrine()->getManager();

                  $client = $this->getDoctrine()->getRepository('AppBundle:Client')->find($id_client);
                  $room = $this->getDoctrine()->getRepository('AppBundle:Room')->find($id_room);


                  $reservation->setClient($client);
                  $reservation->setRoom($room);
                  $em->persist($reservation);
                  $em->flush();


        return $this->redirectToRoute('valid_payment');


        }





}