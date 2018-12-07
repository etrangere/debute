<?php
/**
 * Created by PhpStorm.
 * User: bayazet
 * Date: 01/12/18
 * Time: 13:08
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     **/

    public function showIndex()
    {

        return $this->render("admin/index.html.twig");

    }
}