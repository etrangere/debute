<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditorController extends BaseController
{


    /**
     * @Route("/editor",name="editor_page")
     */

    public function showIndex()
    {


        $data = [];
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->findALL();

        $data['articles'] = $article;


        return $this->render("editor/index.html.twig",$data );

    }






}
