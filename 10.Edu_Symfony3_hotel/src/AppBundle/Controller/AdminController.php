<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/", name="home")
     **/
    
    public function showIndex()
    {
        
        return $this->render("admin/index.html.twig");

                                
    }

    /**
     * @Route("/about", name="about_us")
     **/

    public function showHistory()
    {

        //return $this->render("admin/index.html.twig");


    }

    /**
     * @Route("/map", name="location")
     **/

    public function showLocation()
    {

       // return $this->render("admin/index.html.twig");


    }


}