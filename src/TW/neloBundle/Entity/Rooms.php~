<?php

namespace TW\neloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Rooms
 *
 * @ORM\Table(name="rooms")
 * @ORM\Entity(repositoryClass="TW\neloBundle\Entity\RoomsRepository")
 */
class Rooms
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", unique=true)
     */
    private $number;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

        /**
     * @var boolean
     *
     * @ORM\Column(name="overbooked", type="boolean")
     */
    private $overbooked;

    /**
     * @var ldate
     *
     * @ORM\Column(name="leavingDate", type="date")
     */
    private $leavingDate;



    /**
     * @ORM\ManyToMany(targetEntity="Facilities", inversedBy="rooms")
     */
    private $facilities;

    /**
    *@ORM\ManyToOne(targetEntity="Type", inversedBy="rooms")
    *@ORM\JoinColumn(name="type_id", referencedColumnName="id")
    */
    protected $type;

      /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="rooms")
     */
    private $users;

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
     * Set price
     *
     * @param float $price
     * @return Rooms
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return Rooms
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->facilities = new ArrayCollection();
        $this->users = new ArrayCollection();

    }

    /**
     * Set type
     *
     * @param \TW\neloBundle\Entity\Type $type
     * @return Rooms
     */
    public function setType(\TW\neloBundle\Entity\Type $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \TW\neloBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Rooms
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Add facilities
     *
     * @param \TW\neloBundle\Entity\Facilities $facilities
     * @return Rooms
     */
    public function addFacilities(\TW\neloBundle\Entity\Facilities $facilities)
    {
        $this->facilities[] = $facilities;
    
        return $this;
    }

    /**
     * Remove facilities
     *
     * @param \TW\neloBundle\Entity\Facilities $facilities
     */
    public function removeFacilities(\TW\neloBundle\Entity\Facilities $facilities)
    {
        $this->facilities->removeElement($facilities);
    }

    /**
     * Get facilities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Add facilities
     *
     * @param \TW\neloBundle\Entity\Facilities $facilities
     * @return Rooms
     */
    public function addFacilitie(\TW\neloBundle\Entity\Facilities $facilities)
    {
        $this->facilities[] = $facilities;
    
        return $this;
    }

    /**
     * Remove facilities
     *
     * @param \TW\neloBundle\Entity\Facilities $facilities
     */
    public function removeFacilitie(\TW\neloBundle\Entity\Facilities $facilities)
    {
        $this->facilities->removeElement($facilities);
    }

    /**
     * Add users
     *
     * @param \TW\neloBundle\Entity\User $users
     * @return Rooms
     */
    public function addUser(\TW\neloBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \TW\neloBundle\Entity\User $users
     */
    public function removeUser(\TW\neloBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set overbooked
     *
     * @param boolean $overbooked
     * @return Rooms
     */
    public function setOverbooked($overbooked)
    {
        $this->overbooked = $overbooked;
    
        return $this;
    }

    /**
     * Get overbooked
     *
     * @return boolean 
     */
    public function getOverbooked()
    {
        return $this->overbooked;
    }

    /**
     * Set leavingDate
     *
     * @param \DateTime $leavingDate
     * @return Rooms
     */
    public function setLeavingDate($leavingDate)
    {
        $this->leavingDate = $leavingDate;
    
        return $this;
    }

    /**
     * Get leavingDate
     *
     * @return \DateTime 
     */
    public function getLeavingDate()
    {
        return $this->leavingDate;
    }
}