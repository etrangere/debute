<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;

class NewController extends BaseController
{
    /**
     * @Route("/new",name="new_article")
     */
    public function showNew(Request $request)
    {
        $data = [];
        $data['mode']= 'new_article';
        $data['form']=[];

        $form = $this->createFormBuilder()

            ->add('title')
            ->add('content')
            ->add('email')
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $form_data = $form->getData();
            $data ['form']= [];
            $data ['form']= $form_data;

            $em = $this->getDoctrine()->getManager();

            $article = new article;
            $article->setTitle($form_data['title']);
            $article->setContent($form_data['content']);
            $article->setEmail($form_data['email']);

            $em->persist($article);

            $em->flush();

            return $this->redirectToRoute('home_page');
        }


        return $this->render("new/index.html.twig");

    }

}
