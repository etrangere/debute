<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditorController extends BaseController
{
    /**
     * @Route("/editor", name="editor_page")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('editor/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }







}
