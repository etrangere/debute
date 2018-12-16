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

    //private $cache;


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
        $data['id_client'] = "";
        $data['rooms']=null;
        $data['form'] =[];
        $data['dates']['from']=[];
        $data['dates']['to']=[];

        $form = $this->createFormBuilder()
            ->add('from')
            ->add('to')
            ->add('room_type')
            ->add('id_room')
            ->add('adult')
            ->add('child')
            ->add('baby')
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $form_data = $form->getData();
            $data ['form'] = $form_data;

            $cache = new FilesystemCache();

            $cache->set('room_type', $form_data['room_type']);
           // $cache->set('id_room', $form_data['id_room']);
            $cache->set('adult', $form_data['adult']);
            $cache->set('child', $form_data['child']);
            $cache->set('baby', $form_data['baby']);
            $cache->set('from', $form_data['from']);
            $cache->set('to', $form_data['to']);


            $data['dates']['from'] = $form_data['from'];
            $data['dates']['to'] = $form_data['to'];
            var_dump($data);
            $em=$this->getDoctrine()->getManager();


            $rooms=$em->getRepository('AppBundle:Room')
                ->getAvailableRooms($form_data['from'],$form_data['to']);

            $data['rooms']=$rooms;

            return $this->render('home/available_room_list.html.twig',$data);
        }
        return $this->render('home/available_room_list.html.twig',$data);
    }


    /**
     * @Route("/front_booking/{id_room}",name="front_booking")
     */
    public function front_booking(Request $request ,$id_room)
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

            //getting info from cache

            $cache = new FilesystemCache();
            $data ['room_type'] = $cache->get('room_type');
            $data ['adult'] = $cache->get('adult');
            $data ['child'] = $cache->get('child');
            $data ['baby'] = $cache->get('baby');
            $data ['from'] = $cache->get('from');
            $data ['to'] = $cache->get('to');

            //adding new client to db

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
            $client->setIdRoom($id_room);
            $client->setRoomType($data['room_type']);
            $client->setAdult($data['adult']);
            $client->setChild($data['child']);
            $client->setBaby($data['baby']);
            $data['titles'] = $this->titles;
            $em->persist($client);
            $em->flush();

            $date_in = $data['from'];
            $date_out = $data['to'];

            //$id_client =$this->getDoctrine()->getRepository('AppBundle:Client')->find($id_room);
            $id_client = 55;
            var_dump($id_client);
            $cache->deleteMultiple(array('room_type','adult','child', 'baby',));

            return $this->redirect($this->generateUrl('book_room', array(
                'id_client'=> $id_client,
                'id_room' => $id_room,
                'date_in'=> $date_in ,
                'date_out' => $date_out )));

        }
        return $this->render("home/front_booking.html.twig" ,$data);
    }

    /**
     * @Route("/confirmation", name="confirmation")
     **/

    public function confirmation()
    {

        return $this->render("home/confirmation.html.twig");

    }

}