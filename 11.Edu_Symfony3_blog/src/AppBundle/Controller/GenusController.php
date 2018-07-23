<?php

namespace AppBundle\Controller;

//use AppBundle\AppBundle;
use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Genus;
use AppBundle\Entity\GenusNote;

class GenusController extends Controller
{

    /**
     * @Route("/genus/new")
     */

    public function newAction()

    {
        $genus = new Genus();
        $genus->setName('Octopus' . rand(1,100));
        $genus->setSubFamily('Octopodas');
        $genus->setSpeciesCount(rand(100,99999));
        $genus->setFunFact('Adidas');

        $genusNote = new GenusNote();

        $genusNote->setUserName('AquaWeaver');
        $genusNote->setUserAvatarFilename('ryan.jpeg');
        $genusNote->setNote('Icounted 9 legs');
        $genusNote->setCreatedAt(new \DateTime('-1 month'));
        $genusNote->setGenus($genus);



        $em = $this->getDoctrine()->getManager();
        $em->persist($genus);
        $em->persist($genusNote);
        $em->flush();

        return new Response('<html><body>Genus created</body></html>');

    }


    /**
     * @Route("/genus")
     */

    public function listAction()

    {
        $em = $this->getDoctrine()->getManager();
        $genuses = $em->getRepository('AppBundle:Genus')->findAll();


        return $this->render("genus/list.html.twig" ,[ 'genuses' =>  $genuses]);
       // dump($genuses);
      //  die;

    }



    /**
     * @Route("/genus/{genusName}" , name="genus_show")
     */
    public function showAction($genusName)
    {


        $em= $this->getDoctrine()->getManager();

        $genus = $em->getRepository('AppBundle:Genus')
            ->findOneBy(['name' => $genusName]);


        if (!$genus)

        {
            throw $this->createNotFoundException('genus not found');

        }
       /*

        $cache = $this->get('doctrine_cache.providers.my_markdown_cache');
        $key = md5($funFact);

        if ($cache->contains($key)) {
            $funFact = $cache->fetch($key);
        } else {
            sleep(1); // fake how slow this could be
            $funFact = $this->get('markdown.parser')
                ->transform($funFact);
            $cache->save($key, $funFact);
        }
       */
        $this->get('logger')
            ->info('Showing genus: '.$genusName);

        return $this->render('genus/show.html.twig', [
            'genus' => $genus

         ]);
    }

    /**
     * @Route("/genus/{name}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction(Genus $genus)
    {

      $notes = [];

       /*
        foreach ($genus->getNote() as $note)
        {


            $notes[]= [

                'id'=> $note->getId(),
                'username'=> $note->getUsername(),
                'avatarUri'=> '/images/'.$note->getUserAvatarFilename(),
                'note'=> $note->getNote(),
                'date'=> $note->setCreatedAt()->format('M d,Y')
            ];

        }

       */

       //$em = $this->getDoctrine()->getManager();
       //$notes = $em->getRepository('AppBundle:GenusNote');
        $notes = [ 3 ,4,5,7,3];

        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}
