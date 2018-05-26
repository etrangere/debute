<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class ArticleController extends BaseController
{
    /**
     * @Route("/article/{id}", name="article")
     */
    public function indexAction(Request $request,$id)
    {
        $data['articles'] = $id;
var_dump($data);
        return $this->render("article/index.html.twig",$data);

    }


}
