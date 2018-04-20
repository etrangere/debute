<?php
/**
 * Created by PhpStorm.
 * User: urartu
 * Date: 31/03/2018
 * Time: 01:21
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
class GenusController extends Controller
{







    /**
     * @Route("/genus/{genusName}")
     * @return object
     */



    public function showAction($genusName)

    {
        $funFact = 'Octopuses can change the color of their body in just *three-tenths* of a second!';

        $funFact = $this->get('markdown.parser')->transform($funFact);


        return $this->render('views/v_main.php.twig', array ('name'=>$genusName ,'funFact'=>$funFact));

    }

    /**
     * @Route("/genus/{genusName}",  name="genus_show_notes")
     * @Method("GET")
     */

    public function getNodesAction($genusName)

    {


        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],

        ];


       $data =['notes'=>$notes ];


       return new JsonResponse($data);

    }







}