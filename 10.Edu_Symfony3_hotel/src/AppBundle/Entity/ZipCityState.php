<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * ZipCityState
 */
class ZipCityState
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get zip.
     *
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }



    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }



    /**
     * Get state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
