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
    public function show_article($id)
    {
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->find($id);
        $data['articles'] = $article;



        return $this->render('article/index.html.twig',$data);


    }


    /**
     * @Route("/",name="home_page")
     */

    public function show_article_list()
    {
        $data = [];
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->findALL();

        $data['articles'] = $article;
        //  var_dump($data);

        return $this->render("home/index.html.twig",$data );

    }


    /**
     * @Route("/editor",name="editor_page")
     */

    public function show_articles()
    {


        $data = [];
        $article = $this->getDoctrine()

            ->getRepository('AppBundle:Article')
            ->findALL();

        $data['articles'] = $article;


        return $this->render("editor/index.html.twig",$data );

    }

    /**
     * @Route("/new",name="new_article")
     */
    public function new_article(Request $request)
    {
        $data = [];

        $data['mode']= 'new_article';
        $data['form']=[];
       // $data['form']['title']='';




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

            $article = new article();
            $article->setTitle($form_data['title']);
            $article->setContent($form_data['content']);
            $article->setEmail($form_data['email']);

            $em->persist($article);

            $em->flush();

            return $this->redirectToRoute('editor_page');
        }


        return $this->render("new/index.html.twig");

    }


    /**
     * @Route("/edit/{id}",name="edit_article")
     */
    public function edit_article(Request $request ,$id)
    {
        $data = [];
        $article_repo = $this->getDoctrine()
            ->getRepository('AppBundle:Article');
        $data['mode']= 'modify';
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
            $article = $article_repo->find($id);

            $article->setTitle($form_data['title']);
            $article->setContent($form_data['content']);
            $article->setEmail($form_data['email']);

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('editor_page');

        }
        else
        {
            $article=$article_repo->find($id);

            $data['form']=$article;


            $article_data ['id']= $article->getID();
            $article_data ['title']= $article->getTitle();
            $article_data ['content']= $article->getContent();
            $article_data ['email']= $article->getEmail();

            $data['form'] = $article_data;
        }
        var_dump($id);
        return $this->render("edit/index.html.twig",$data);


    }

    /**
     * @Route("/delete/{id}",name="delete_article")
     */
    public function delete_article( $request ,$id)

    {



        $form = $this->createFormBuilder()

            ->add('title')
            ->add('content')
            ->add('email')
            ->getForm();

        $form->handleRequest($request);




        if ($form->isSubmitted())
        {


            $em = $this->getDoctrine()->getManager();


            $article = $em->getReference('AppBundle:Article', $id);

            $em->remove($article);
            $em->flush();

            return $this->redirectToRoute('editor_page');

        }

    }

}
