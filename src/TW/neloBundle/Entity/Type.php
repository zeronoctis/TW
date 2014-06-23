<?php

namespace TW\neloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TW\neloBundle\Entity\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    *@ORM\OneToMany(targetEntity="Rooms", mappedBy="type")
    */
    protected $rooms;

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
     * Set name
     *
     * @param string $name
     * @return Type
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
     * @return Type
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

    /**
     * Get rooms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRooms()
    {
        return $this->rooms;
    }
}