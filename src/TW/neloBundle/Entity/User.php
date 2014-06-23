<?php

namespace TW\neloBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="TW\neloBundle\Entity\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, \Serializable
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
     * @ORM\Column(name="typevar", type="integer")
     */
    private $typevar;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

      public function __construct(){
        $this->isActive = true;
        $this->setTypevar(1);
        $this->setArrivalDate(new \DateTime());
        $this->setLeavingDate(new \DateTime());
        $this->roles = new ArrayCollection();
        $this->rooms = new \Doctrine\Common\Collections\ArrayCollection();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }



    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }


    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="users")
     *
     */
    private $roles;

     /**
     * @ORM\ManyToMany(targetEntity="Rooms", inversedBy="users")
     */
    private $rooms;


    /**
     * @var adate
     *
     * @ORM\Column(name="arrivalDate", type="date")
     */
    private $arrivalDate;

    /**
     * @var ldate
     *
     * @ORM\Column(name="leavingDate", type="date")
     */
    private $leavingDate;


    /**
     * Add roles
     *
     * @param \TW\neloBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\TW\neloBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \TW\neloBundle\Entity\Role $roles
     */
    public function removeRole(\TW\neloBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Add rooms
     *
     * @param \TW\neloBundle\Entity\Room $rooms
     * @return User
     */
    public function addRoom(\TW\neloBundle\Entity\Rooms $rooms)
    {
        $this->rooms[] = $rooms;
    
        return $this;
    }

    /**
     * Remove rooms
     *
     * @param \TW\neloBundle\Entity\Room $rooms
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

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return User
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    
        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set leavingDate
     *
     * @param \DateTime $leavingDate
     * @return User
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

    /**
     * Set typevar
     *
     * @param integer $typevar
     * @return User
     */
    public function setTypevar($typevar)
    {
        $this->typevar = $typevar;
    
        return $this;
    }

    /**
     * Get typevar
     *
     * @return integer 
     */
    public function getTypevar()
    {
        return $this->typevar;
    }
}