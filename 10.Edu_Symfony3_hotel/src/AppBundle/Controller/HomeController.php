<?php

namespace AppBundle\Controller;
//namespace WhiteOctober;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Client;
use AppBundle\Entity\ZipCityState;
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
use ReflectionClass;
use TCPDF;
use WhiteOctober\TCPDFBundle;
use WhiteOctober;
use WhiteOctober\TCPDFBundle\WhiteOctoberTCPDFBundle;
use WhiteOctober\TCPDFBundle\DependencyInjection\WhiteOctoberTCPDFExtension;
use Swift_Attachment;

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
            ->add('contact_form_email')
            ->add('contact_form_subject')
            ->add('contact_form_message')
            ->getForm();
        $form->handleRequest($request);



        if ($form->isSubmitted()) {

            $form_data = $form->getData();
            $data['form'] = [];
            $data ['form'] = $form_data;
            $contact_form_email = $form_data['contact_form_email'];
            $contact_form_subject = $form_data['contact_form_subject'];
            $contact_form_message = $form_data['contact_form_message'];

            $secure_key = "6LcFNIUUAAAAAFYY4RjIMo9a9OAR3QokdNJQOWcG";
            $response_key = $request->get('g-recaptcha-response');
            $contact_ip = $request->getClientIp();
            $url="https://www.google.com/recaptcha/api/siteverify?secret=$secure_key&response=$response_key&remoteip=$contact_ip";
            $response = \file_get_contents($url);
            $response = json_decode($response);


           // var_dump($response);

            if ($response->success){

                $transport = new \Swift_SmtpTransport('smtp.free.fr',587,'tcp');

                $mailer = new Swift_Mailer($transport);

                $message = \Swift_Message::newInstance()
                    ->setSubject($contact_form_subject)
                    ->setFrom('g.khachatrian2016@free.fr')
                    ->setReplyTo($contact_form_email)
                    ->setTo('g.khachatrian@free.fr')
                    ->setContentType('text/html')
                    ->setBody($contact_form_message);

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
            //var_dump($data);
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

        //for booking form Zip,City and State fields datalist

        $data['z_c_ss'] = [];
        $z_c_ss = $this->getDoctrine()
            ->getRepository('AppBundle:ZipCityState')
            ->getzipcitystate();
        //  ->findBy(array(),array('id'=> 'ASC','zip' =>'ASC','city' =>'ASC','state' =>'DESC'),37080);
        $data['z_c_ss'] = $z_c_ss;
        //

      

        $form = $this->createFormBuilder()
            ->add('name')
            ->add('last_name')
            ->add('title')
            ->add('address')
            ->add('zip_code')
            ->add('city')
            ->add('state')
            ->add('client_email')
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
            $client->setClient_email($form_data['client_email']);
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

            $cache = new FilesystemCache();
            $cache->set('client_email', $form_data['client_email']);

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

    public function confirmation(Request $request)
    {


      //get from cache all info for client and actual reservation
        $cache = new FilesystemCache();
        $client_email = $cache->get('client_email');

        $client = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->findOneBy(array('client_email' => $client_email));

        $reservation_id = $this->getDoctrine()
            ->getRepository('AppBundle:Reservation')
            ->findOneBy(array('client' => $client));

         $data['reservation']= $reservation_id;
         $data['client']= $client;





            $client_id = $client->getId('id');
            $name = $client->getName('name');
            $last_name = $client->getLastName('last_name');
            $adult = $client->getAdult('adult');
            $child = $client->getChild('child');
            $baby = $client->getBaby('baby');
            $address = $client->getAddress('address');
            $zip_code = $client->getZipCode('zip_code');
            $date_in = $reservation_id->getDateIn('from')->format('d-m-Y H:i:s');
            $date_out = $reservation_id->getDateOut('to')->format('d-m-Y H:i:s');


        //var_dump( $id);

            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Hotel de France');
            $pdf->SetTitle('Referance N '.$client_id .'.pdf');
            $pdf->SetSubject('Reservation');
            $pdf->SetSubject('Your client');
// set default header data
            $pdf->AddPage();
        $html = '<h1>Hotel de France</h1> 
            <table cellspacing="0" cellpadding="1" border="0">
            <tr>
            <th scope="row">Client Referance</th>
            <td><h4>'  .$client_id .'</h4></td>
            </tr> 
            <tr>
            <th scope="row">Name</th>
            <td><h4>'.$name .'</h4></td>
            </tr>
             <tr>
            <th scope="row">Last name</th>
            <td><h4>'.$last_name .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Adult</th>
            <td><h4>'.$adult .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Child</th>
            <td><h4>'.$child .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Baby</th>
            <td><h4>'.$baby .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Address</th>
            <td><h4>'. $address .'</h4></td>
            </tr>
            <tr>
            <th scope="row">ZipCode</th>
            <td><h4>'. $zip_code .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Check-In -</th>
            <td><h4>' . $date_in .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Check-Out -</th>
            <td><h4>' . $date_out .'</h4></td>
            </tr>
            <tr>
            <th scope="row">Email -</th>
            <td><h4>'.$client_email .'</h4></td>
            </tr>
            </table>
            ';

            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('/var/www/10.Edu_Symfony3_hotel/reservations/'.$client_id .'.pdf', 'F');




        $transport = new \Swift_SmtpTransport('smtp.free.fr',587,'tcp');

        $mailer = new Swift_Mailer($transport);

        $contact_subject = 'Confirmation email';
        $contact_message = 'Hotel de France confirmed that we have
                            successfully received your reservation,
                            here attached you can download your booking
                            information in pdf ';

        $message = \Swift_Message::newInstance()
            ->setSubject($contact_subject)
            ->setFrom('g.khachatrian2016@free.fr')
           // ->setReplyTo($contact_email)
            ->setTo($client_email)
            ->setContentType('text/html')
            ->setBody($contact_message)
            ->attach(Swift_Attachment::fromPath('/var/www/10.Edu_Symfony3_hotel/reservations/'.$client_id .'.pdf'));
      
        $result= $mailer->send($message);
        $data['result'] = $result;
        $data['msg'] = 'Envoi effectué avec succés';





        //$cache->delete('email');
        return $this->render("home/confirmation.html.twig",$data);

    }

}