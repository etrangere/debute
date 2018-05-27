<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditController extends BaseController
{
    /**
     * @Route("/edit/{id}",name="edit_article")
     */
    public function editArticle(Request $request, $id)
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

            return $this->redirectToRoute('editor_page');
        }

        else {

            $article = $this->getDoctrine()

                ->getRepository('AppBundle:Article')
                ->find($id);


            $data['form'] = $article;

            var_dump($data);

          //  $article_data ['title'] = $form->getTitle();
           // $article_data ['content'] = $form->getContent();
           // $article_data ['email'] = $form->getEmail();


           // $data['form'] = $article_data;
        }

        return $this->render("edit/index.html.twig", $data);


    }

    /**
     * @Route("/delete/{id}",name="delete_article")
     */
    public function deleteArticle($id)

    {
        $em = $this->getDoctrine()->getEntityManager();

        $article = $em->getRepository('AppBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No articles found for id '.$id);
        }

        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('editor_page');
    }


}
