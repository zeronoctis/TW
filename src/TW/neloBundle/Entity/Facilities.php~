<?php

namespace TW\neloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facilities
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TW\neloBundle\Entity\FacilitiesRepository")
 */
class Facilities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="facility", type="string", length=255)
     */
    private $facility;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set facility
     *
     * @param string $facility
     * @return Facilities
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
    
        return $this;
    }

    /**
     * Get facility
     *
     * @return string 
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Rooms", mappedBy="facilities")
     */
    private $rooms;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rooms = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add rooms
     *
     * @param \TW\neloBundle\Entity\Rooms $rooms
     * @return Facilities
     */
    public function addRooms(\TW\neloBundle\Entity\Rooms $rooms)
    {
        $this->rooms[] = $rooms;
    
        return $this;
    }

    /**
     * Remove rooms
     *
     * @param \TW\neloBundle\Entity\Rooms $rooms
     */
    public function removeRooms(\TW\neloBundle\Entity\Rooms $rooms)
    {
        $this->rooms->removeElement($rooms);
    }

    /**
     * Get rooms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRooms()
    {
        return $this->rooms->toArray();
    }

    /**
     * Add rooms
     *
     * @param \TW\neloBundle\Entity\Rooms $rooms
     * @return Facilities
     */
    public function addRoom(\TW\neloBundle\Entity\Rooms $rooms)
    {
        $this->rooms[] = $rooms;
    
        return $this;
    }

    /**
     * Remove rooms
     *
     * @param \TW\neloBundle\Entity\Rooms $rooms
     */
    public function removeRoom(\TW\neloBundle\Entity\Rooms $rooms)
    {
        $this->rooms->removeElement($rooms);
    }
}