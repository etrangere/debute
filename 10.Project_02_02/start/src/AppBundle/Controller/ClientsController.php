<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    private $client_data=[
                                  [  'id' => 0,
                                     'title' => 'mr',
                                     'name'=> 'Roy',
                                     'last_name'=>'Adams',
                                     'Adress'=>'2871 Marquette',
                                     'Zip_code'=>'1032',
                                     'City'=>'New York',
                                     'State'=> 'NY',
                                     'Email'=> 'test@mail.ru'
                                  ],

                                  [  'id' => 1,
                                     'title' => 'mr',
                                     'name'=> 'Roy',
                                     'last_name'=>'Adams',
                                     'Adress'=>'2871 Marquette',
                                     'Zip_code'=>'1032',
                                     'City'=>'New York',
                                     'State'=> 'NY',
                                     'Email'=> 'test@mail.ru'
                                  ],

                                   [ 'id' => 2,
                                     'title' => 'mr',
                                     'name'=> 'Roy',
                                     'last_name'=>'Adams',
                                     'Adress'=>'2871 Marquette',
                                     'Zip_code'=>'1032',
                                     'City'=>'New York',
                                     'State'=> 'NY',
                                     'Email'=> 'test@mail.ru'
                                  ]
];

    private $title =[ 'mr','ms','mrs','dc','mx'];

    /**
     * @Route("/guests",name="index_clients")
     */

    public function showIndex()
    {
      $data = [];
      $data['clients']= $this->client_data;

        return $this->render("clients/index.html.twig",$data);

    }

    /**
     * @Route("/guests/modify/{id_client}",name="modify_client")
     */
    public function showDetails(Request $request ,$id_client)
    {
        $data = [];
        $data['clients']= $this->client_data;
        $data['mode']= 'modify';
        $data['form']=[];

        $client_data=$this->client_data[$id_client];
        $data['form']=$client_data;
        return $this->render("clients/form.html.twig",$data);


    }

    /**
     * @Route("/guests/new",name="new_client")
     */
    public function showNew(Request $request)
    {
        $data = [];
        $data['mode']= 'new_client';
       // $data['clients']= $this->client_data;
        return $this->render("clients/form.html.twig");
        
    }

}