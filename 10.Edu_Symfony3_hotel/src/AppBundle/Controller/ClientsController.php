<?php

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Client;
use AppBundle\Repository\ClientRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\HttpFoundation\Response;

class ClientsController extends Controller
{


    private $titles = ['mr', 'ms', 'mrs', 'dc', 'mx'];

    /**
     * @Route("/admin/guests",name="index_clients")
     */

    public function showIndex()
    {
        $data = [];
        $clients = $this->getDoctrine()
            ->getRepository('AppBundle:Client')
            ->findALL();


        $data['clients'] = $clients;
        $data['titles'] = $this->titles;




        return $this->render("clients/index.html.twig", $data);

    }

    /**
     * @Route("/guests/modify/{id_client}",name="modify_client")
     */
    public function showDetails(Request $request, $id_client)
    {
        $data = [];
        $client_repo = $this->getDoctrine()
            ->getRepository('AppBundle:Client');

        $data['mode'] = 'modify';
        $data['form'] = [];
        $data['titles'] = $this->titles;
        $data['form']['title'] = '';


        $form = $this->createFormBuilder()
            ->add('name')
            ->add('last_name')
            ->add('title')
            ->add('address')
            ->add('zip_code')
            ->add('city')
            ->add('state')
            ->add('tel')
           // ->add('email')
           // ->add('room_type')
            ->add('adult')
            ->add('child')
            ->add('baby')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $form_data = $form->getData();
            $data ['form'] = [];
            $data ['form'] = $form_data;

            $client = $client_repo->find($id_client);

            $client->setTitle($form_data['title']);
            $client->setName($form_data['name']);
            $client->setLastName($form_data['last_name']);
            $client->setAddress($form_data['address']);
            $client->setZipCode($form_data['zip_code']);
            $client->setCity($form_data['city']);
            $client->setState($form_data['state']);
            $client->setTel($form_data['tel']);
          //  $client->setEmail($form_data['email']);
          //  $client->setRoomType($form_data['room_type']);
            $client->setAdult($form_data['adult']);
            $client->setChild($form_data['child']);
            $client->setBaby($form_data['baby']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('index_clients');

        } else {
            $client = $client_repo->find($id_client);

            $data['form'] = $client;

            $client = $client_repo->find($id_client);
            $client_data ['id'] = $client->getID();
            $client_data ['title'] = $client->getTitle();
            $client_data ['name'] = $client->getName();
            $client_data ['last_name'] = $client->getLastName();
            $client_data ['address'] = $client->getAddress();
            $client_data ['zip_code'] = $client->getZipCode();
            $client_data ['city'] = $client->getCity();
            $client_data ['state'] = $client->getState();
            $client_data ['tel'] = $client->getTel();
            $client_data ['client_email'] = $client->getClient_email();
            $client_data ['room_type'] = $client->getRoomType();
            $client_data ['adult'] = $client->getAdult();
            $client_data ['child'] = $client->getChild();
            $client_data ['baby'] = $client->getBaby();

            $client_data ['titles'] = $this->titles;
            $data['form'] = $client_data;
        }

        return $this->render("clients/form.html.twig", $data);


    }

    /**
     * @Route("/admin/delete/{id_client}",name="delete")
     */
    public function delete_articles($id_client)

    {
            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository('AppBundle:Client')->find($id_client);


            $em->remove($client);

            $em->flush();



        return $this->redirectToRoute('index_clients');
    }


}