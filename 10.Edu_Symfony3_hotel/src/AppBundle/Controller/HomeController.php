<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
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

}