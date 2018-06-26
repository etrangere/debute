<?php
/**
 * Created by PhpStorm.
 * User: urartu
 * Date: 26/06/2018
 * Time: 20:36
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="genus")
 */
class Genus


{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string")
     */


    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}