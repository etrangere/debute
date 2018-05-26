<?php
namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class BaseController extends Controller
{



   // private $title =[ 'mr','ms','mrs','dc','mx'];

    /**
     * @Route("/",name="home_page")
     */

    public function showIndex()
    {
        $data = [];
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->findALL();

        $data['articles'] = $article;
        var_dump($data);

        return $this->render("home/index.html.twig",$data);

    }


}