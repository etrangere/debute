<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Reservation
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateIn;

    /**
     * @var \DateTime
     */
    private $dateOut;





    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     *
     * @return Reservation
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;

        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set dateOut
     *
     * @param \DateTime $dateOut
     *
     * @return Reservation
     */
    public function setDateOut($dateOut)
    {
        $this->dateOut = $dateOut;

        return $this;
    }

    /**
     * Get dateOut
     *
     * @return \DateTime
     */
    public function getDateOut()
    {
        return $this->dateOut;
    }
    /**
     * @var \AppBundle\Entity\Client
     *
     */
    private $client;

    /**
     * @var \AppBundle\Entity\Room
     *
     */
    private $room;

    /**
     * @var \AppBundle\Entity\Room
     *
     */
    private $room_type;

    /**
     * @return Room
     */
    public function getRoomType()
    {
        return $this->room_type;
    }

    /**
     * @param Room $room_type
     */
    public function setRoomType($room_type)
    {
        $this->room_type = $room_type;
    }


    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Reservation
     */
    public function setRoom(\AppBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \AppBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }
}
