<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Client
 * @ORM\Entity
 * @ORM\Table(name="client")
 * @UniqueEntity(fields={"client_email"}, message="Dear client this email address is already in use!")
 */
class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @Assert\NotBlank(message="Name: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Last Name: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $last_name;

    /**
     * @Assert\NotBlank(message="Address: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $address;

    /**
     * @Assert\NotBlank(message="Zip Code: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $zip_code;

    /**
     * @Assert\NotBlank(message="City: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $city;

    /**
     * @Assert\NotBlank(message="State: cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var string
     */
    private $state;

    /**
     * @Assert\Regex(pattern="/\d+/")
     * @Assert\Type(type="digit",message="Tel: Only digits allowed here")
     * @Assert\NotBlank(message="Telephone number cannot be empty")
     * @ORM\Column(name="name",type="string")
     * @var int
     */
    private $tel;

    /**
     * @var int
     */
    private $client_price;

    /**
     * @return int
     */
    public function getClientPrice()
    {
        return $this->client_price;
    }

    /**
     * @param int $client_price
     */
    public function setClientPrice($client_price)
    {
        $this->client_price = $client_price;
    }



    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @Assert\NotBlank(message="Email address is required!" )
     * @ORM\Column(type="string",unique=true)
     * @var string
     */
    private $client_email;

    /**
     * @var integer
     */
    private $adult;

    /**
     * @var \AppBundle\Entity\Room
     *
     */
    private $id_room;

    /**
     * @return Room
     */
    public function getIdRoom()
    {
        return $this->id_room;
    }

    /**
     * @param Room $id_room
     */
    public function setIdRoom($id_room)
    {
        $this->id_room = $id_room;
    }

    /**
     * @Assert\NotBlank(message="Page multiple refresh detected,please go back and start again from Home" )
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
     * @return int
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * @param int $adult
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;
    }

    /**
     * @return int
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * @param int $child
     */
    public function setChild($child)
    {
        $this->child = $child;
    }

    /**
     * @return int
     */
    public function getBaby()
    {
        return $this->baby;
    }

    /**
     * @param int $baby
     */
    public function setBaby($baby)
    {
        $this->baby = $baby;
    }

    /**
     * @var integer
     */
    private $child;

    /**
     * @var integer
     */
    private $baby;


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
     * Set title
     *
     * @param string $title
     *
     * @return Client
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set last_name
     *
     * @param string $last_name
     *
     * @return Client
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip_code
     *
     * @param string $zip_code
     *
     * @return Client
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * Get zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Client
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Client
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set client_email
     *
     * @param string $client_email
     *
     * @return Client
     */
    public function setClient_email($client_email)
    {
        $this->client_email = $client_email;

        return $this;
    }

    /**
     * Get client_email
     *
     * @return string
     */
    public function getClient_email()
    {
        return $this->client_email;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Client
     */
    public function addReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\AppBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }
}
