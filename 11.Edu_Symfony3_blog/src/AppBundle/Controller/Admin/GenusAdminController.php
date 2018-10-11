<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Genus;
use AppBundle\Form\GenusFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;





/**
 *
 *@Route("/admin")
 */

class GenusAdminController extends Controller
{




    /**
     * @Route("/genus", name="admin_genus_list")
     */
    public function indexAction()
    {

    //to close page and function rlated with proper auth.

    // 1-st version
    //
    /*
    if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
    {
        throw $this->createAccessDeniedException('Get out!');
    }
    */
    // 2-nd version
     //  $this->denyAccessUnlessGranted('ROLE_ADMIN');
    // 3-ed version
    //# @Security("is_granted('ROLE_ADMIN')
    // below controller route will block access to hole function

        $genuses = $this->getDoctrine()
            ->getRepository('AppBundle:Genus')
            ->findAll();

        return $this->render('admin/genus/list.html.twig', array(
            'genuses' => $genuses
        ));
    }

    /**
     * @Route("/genus/new", name="admin_genus_new")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(GenusFormType::Class);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {


            $genus = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($genus);
            $em->flush();

            $this->addFlash('success',

                sprintf('Genus created - you (%s) are amazing',$this->getUser()->getEmail()));

            return $this->redirectToRoute('admin_genus_list');

        }

        return $this->render('admin/genus/new.html.twig',[
            'genusForm' => $form->createView()
        ]);
    }


    /**
     * @Route("/genus/{id}/edit", name="admin_genus_edit")
     */
    public function editAction(Request $request ,Genus $genus)
    {
        $form = $this->createForm(GenusFormType::Class,$genus);

        $form->handleRequest($request );


        if ($form->isSubmitted() && $form->isValid())
        {


            $genus = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($genus);
            $em->flush();

            $this->addFlash('success',

                sprintf('Genus edited - you (%s) are amazing',$this->getUser()->getEmail()));

            return $this->redirectToRoute('admin_genus_list');

        }

        return $this->render('admin/genus/edit.html.twig',[
            'genusForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/genus/{id}", name="admin_genus_delete")
     */
    public function deleteAction(Request $request,Genus $genus)
    {


        if (!$genus) {

            throw $this->createNotFoundException('No genus found');

        }

        $em = $this->getDoctrine()->getEntityManager();
        $genus = $em->getRepository('AppBundle:Genus')->find($genus);
        $em->remove($genus);
        $em->flush();



       // return $this->redirect($this->generateUrl('admin_genus_list'));
        return $this->redirectToRoute('admin_genus_list');

    }


}