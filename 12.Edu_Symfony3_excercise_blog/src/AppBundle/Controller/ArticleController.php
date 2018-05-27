<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;


class ArticleController extends BaseController
{
    /**
     * @Route("/article/{id}", name="article")
     */
    public function indexAction($id)
    {
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->find($id);
        $data['articles'] = $article;

var_dump($article);

        return $this->render('article/index.html.twig',$data);


    }


}
