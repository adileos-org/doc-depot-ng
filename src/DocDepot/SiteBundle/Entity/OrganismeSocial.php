<?php
// src/AppBundle/Entity/Beneficiaire.php

namespace DocDepot\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dd_organisme_social",indexes={@ORM\Index(name="search_idx", columns={"name"})})
 */
class OrganismeSocial
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    /**
     * @ORM\Column(type="string", length=32, nullable=false, unique=false)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=32, nullable=false, unique=false)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=11, nullable=false, unique=false)
     */
    protected $phone_number;

    /**
     * @ORM\Column(type="string", length=50, nullable=true, unique=false)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true, unique=false)
     */
    protected $country;

    /**
     * Gets the name.
     *
     * @return string
     */
   
    public function getName(){
        return $this->name;
    }

    /**
     * Sets the name.
     *
     * @param String $name
     *
     * @return OrganismeSocial
     */
    public function setName($name){
        $this->name = $name;
        return $this;
    }

    /**
     * Gets the address.
     *
     * @return string
     */
   
    public function getAddress(){
        return $this->address;
    }

    /**
     * Sets the address.
     *
     * @param String $address
     *
     * @return OrganismeSocial
     */
    public function setAddress($address){
        $this->address = $address;
        return $this;
    }
    /**
     * Gets the phone_number.
     *
     * @return string
     */
   
    public function getPhoneNumber(){
        return $this->phone_number;
    }

    /**
     * Sets the phone_number.
     *
     * @param String $phone_number
     *
     * @return OrganismeSocial
     */
    public function setPhoneNumber($phone_number){
        $this->phone_number = $phone_number;
        return $this;
    }
    /**
     * Gets the email.
     *
     * @return string
     */
   
    public function getEmail(){
        return $this->email;
    }

    /**
     * Sets the name.
     *
     * @param String $email
     *
     * @return OrganismeSocial
     */
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    /**
     * Gets the country.
     *
     * @return string
     */
   
    public function getCountry(){
        return $this->country;
    }

    /**
     * Sets the country.
     *
     * @param String $country
     *
     * @return OrganismeSocial
     */
    public function setCountry($country){
        $this->country = $country;
        return $this;
    }
}