<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Reservation;
use AppBundle\Entity\Client;
use AppBundle\Entity\Room;
use AppBundle\Repository\RoomRepository;

use Symfony\Component\Validator\Constraints\All;


class HomeController extends Controller
{




    private $titles = ['mr', 'ms', 'mrs', 'dc', 'mx'];

    /**
     * @Route("/", name="home")
     **/
    
    public function showIndex()
    {
        
        return $this->render("home/index.html.twig");

                                
    }


    /**
     * @Route("/about", name="about_us")
     **/

    public function showHistory()
    {

        return $this->render("home/about.html.twig");


    }

    /**
     * @Route("/map", name="location")
     **/

    public function showLocation()
    {

        return $this->render("home/location.html.twig");


    }

    /**
     * @Route("/contact", name="contact")
     **/

    public function showContact()
    {

        return $this->render("home/contact.html.twig");


    }


    /**
     * @Route("/rooms", name="available_room_list")
     */
    public function booking(Request $request)
    {


        $data = [];
       // $data['id_client'] = "";
        $data['rooms']=null;
        $data['form'] =[];
        $data['dates']['from']=[];
        $data['dates']['to']=[];


        $form = $this->createFormBuilder()
            ->add('from')
            ->add('to')
            ->add('room_type')
            ->add('adult')
            ->add('child')
            ->add('baby')
            ->getForm();
        $form->handleRequest($request);





        $client = $this->getDoctrine()->getRepository('AppBundle:Client')->findAll();

        $data['client']= $client;


        if ($form->isSubmitted())
        {
            $form_data = $form->getData();
            $data ['form'] = $form_data;
            //collect data from form
            $em = $this->getDoctrine()->getManager();

            //$cache = new FilesystemCache();

            $client = new client;
           // $client->setRoomType($form_data['room_type']);
            $client->setAdult($form_data['adult']);
            $client->setChild($form_data['child']);
            $client->setBaby($form_data['baby']);

           // $cache->set('stats.products_count', 4711);

            //$em->persist($client);
            //$em->flush();
            //keep in persist for future flush

            $data ['form'] = $form_data;
            //$data ['dateFrom'] ='';
            //$data ['dateTo'] ='';

            $data['dates']['from'] = $form_data['from'];
            $data['dates']['to'] = $form_data['to'];

            $em=$this->getDoctrine()->getManager();


            $rooms=$em->getRepository('AppBundle:Room')
                ->getAvailableRooms($form_data['from'],$form_data['to']);



            $data['rooms']=$rooms;


            return $this->render('home/available_room_list.html.twig',$data);
        }
        return $this->render('home/available_room_list.html.twig',$data);
    }


    /**
     * @Route("/pre_booking/new",name="pre_booking")
     */
    public function pre_booking_New(Request $request)
    {
        $data = [];
        $data['mode']='new_client';
        $data['titles'] = $this->titles;
        $data['form'] = [];
        $data['form']['title'] = '';


        $form = $this->createFormBuilder()
            ->add('name')
            ->add('last_name')
            ->add('title')
            ->add('address')
            ->add('zip_code')
            ->add('city')
            ->add('state')
            ->add('email')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $form_data = $form->getData();
            $data ['form'] = [];
            $data ['form'] = $form_data;

            $em = $this->getDoctrine()->getManager();

            $client = new client;
            $client->setTitle($form_data['title']);
            $client->setName($form_data['name']);
            $client->setLastName($form_data['last_name']);
            $client->setAddress($form_data['address']);
            $client->setZipCode($form_data['zip_code']);
            $client->setCity($form_data['city']);
            $client->setState($form_data['state']);
            $client->setEmail($form_data['email']);
            $data['titles'] = $this->titles;
            $em->persist($client);

            $em->flush();

            return $this->redirectToRoute('confirmation');
        }

        //return $this->redirectToRoute('confirmation');
        return $this->render("home/pre_booking.html.twig" ,$data);

    }

    /**
     * @Route("/confirmation", name="confirmation")
     **/

    public function confirmation()
    {

        return $this->render("home/confirmation.html.twig");


    }

}