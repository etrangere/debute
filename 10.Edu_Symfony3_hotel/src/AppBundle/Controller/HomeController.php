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
use AppBundle\Repository\ClientRepository;
use Symfony\Component\Validator\Constraints\All;
use Doctrine\ORM\Mapping as ORM;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use ReCaptcha\ReCaptcha; // Include the recaptcha lib




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

    public function showContact(Request $request)
    {

        $data['form'] = [];

        $form = $this->createFormBuilder()
            ->add('contact_email')
            ->add('contact_subject')
            ->add('contact_message')
            ->getForm();
        $form->handleRequest($request);



        if ($form->isSubmitted()) {

            $form_data = $form->getData();
            $data['form'] = [];
            $data ['form'] = $form_data;
            $contact_email = $form_data['contact_email'];
            $contact_subject = $form_data['contact_subject'];
            $contact_message = $form_data['contact_message'];

            $secure_key = "6LcFNIUUAAAAAFYY4RjIMo9a9OAR3QokdNJQOWcG";
            $response_key = $request->get('g-recaptcha-response');
            $contact_ip = $request->getClientIp();
            $url="https://www.google.com/recaptcha/api/siteverify?secret=$secure_key&response=$response_key&remoteip=$contact_ip";
            $response = \file_get_contents($url);
            $response = json_decode($response);


            var_dump($response);

            if ($response->success){



                $transport = new \Swift_SmtpTransport('smtp.free.fr',587,'tcp');

                $mailer = new Swift_Mailer($transport);

                $message = \Swift_Message::newInstance()
                    ->setSubject($contact_subject)
                    ->setFrom('g.khachatrian2016@free.fr')
                    ->setReplyTo($contact_email)
                    ->setTo('g.khachatrian@free.fr')
                    ->setContentType('text/html')
                    ->setBody($contact_message);

                // var_dump($mailer);

                $result= $mailer->send($message);
                $data['result'] = $result;
                $data['msg'] = 'Envoi effectué avec succés';

                return $this->render("home/contact.html.twig",$data);

            }
            else
            {
                $data['message'] = "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
                return $this->render("home/contact.html.twig",$data);
            }
        }

        return $this->render("home/contact.html.twig");

    }


    /**
     * @Route("/rooms", name="available_room_list")
     */
    public function available_room_list(Request $request)
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

            $cache = new FilesystemCache();
            $data ['room_type'] = $cache->get('room_type');
            $data ['adult'] = $cache->get('adult');
            $data ['child'] = $cache->get('child');
            $data ['baby'] = $cache->get('baby');
            $data ['from'] = $cache->get('from');
            $data ['to'] = $cache->get('to');


            return $this->render('home/available_room_list.html.twig',$data);
        }
        return $this->render('home/available_room_list.html.twig',$data);
    }


    /**
     * @Route("/booking/{id_room}",name="booking")
     */
    public function booking(Request $request ,$id_room)
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
            //get id client after flush from db
            //$em = $this->getDoctrine()->getManager();
            $id_client= $client->getID();
            $date_in = $data['from'];
            $date_out = $data['to'];

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