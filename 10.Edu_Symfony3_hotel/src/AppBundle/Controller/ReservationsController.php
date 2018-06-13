<?php

namespace AppBundle\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Client;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Room;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class ReservationsController extends Controller
{
    /**
     * @Route("/reservations",name="reservations")
     */
    public function showReservations()
    {
        $data = [];

        $rooms = $this->getDoctrine()
            ->getRepository('AppBundle:Reservation')
            ->findALL();

        $data['rooms'] = $rooms;

        return $this->render("reservations/index.html.twig",$data);
        
    }

    /**
     * @Route("/booking/{id_client}",name="booking")
     */
    public function booking(Request $request , $id_client)
    {


        $data = [];
        $data['id_client'] = $id_client;
        $data['rooms']=null;
        $data['form'] = [];
        $data['dates']['from']=[];
        $data['dates']['to']=[];

        $form = $this->createFormBuilder()
            ->add('from')
            ->add('to')
            ->getForm();
        $form->handleRequest($request);

/*
       if ($form->isSubmitted())
        {
*/

        $form_data = $form->getData();

       // var_dump($form_data);
        $data ['form'] = [];
        $data ['form'] = $form_data;
        $data['dates']['from'] = $form_data ['dateFrom'];
        $data['dates']['to'] = $form_data ['dateTo'];
        $em=$this->getDoctrine()->getManager();

        var_dump($data);




            $rooms=$em->getRepository('AppBundle:Room')
                ->getAvailableRooms($form_data['dateFrom'],$form_data['dateTo']
                );



         $data['rooms']=$rooms;

         $client = $this->getDoctrine()->getRepository('AppBundle:Client')->find('id_client');

         $data['client']= $client;
/*
        }
*/

        return $this->render('reservations/book.html.twig',$data);
    }



    /**
     * @Route("/book_room/{id_client}/{id_room}/{date_in}/{date_out}" , name="book_room")
     */

    public function book_room($id_client,$id_room,$date_in,$date_out)
    {

                  $reservation = new Reservation();
                  $date_start = new \DateTime($date_in);
                  $date_end = new \DateTime($date_out);
                  $reservation->setDateIn($date_start);
                  $reservation->setDateOut($date_end);

                  $em = $this->getDoctrine()->getManager();

                  $client = $this->getDoctrine()->getRepository()->find($id_client);
                  $room = $this->getDoctrine()->getRepository()->find($id_room);

                  $reservation->setClient($client);
                  $reservation->setRoom($room);
                  $em->persist($reservation);
                  $em->flush();

                  return $this->redirectToRoute('index_clients');

    }


/*




public function getAvailableRooms($date_start,$date_final)

{



     $em=$this->getEntityManager();
     $qb=$em->createQueryBuilder();

     $nots=$em->createQuery("SELECT IDENTITY(b.room) FROM AppBundle:Reservation b. WHERE NOT (b.dateOut < '$date_start' OR >b.dateIN > '$date_final'");
     $dql_query= $nots->getDQL();
     $qb->resetDQLParts();


     $query= $qb->select('r')
         ->from('AppBundle:Room','r' )
         ->where($qb->expr()->notIn('r.id' . $dql_query));



     return $query;

}
 */
}