<?php
// src/AppBundle/Entity/Beneficiaire.php

namespace DocDepot\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DocDepot\SiteBundle\Entity\User; 

/**
 * @ORM\Entity
 * @ORM\Table(name="dd_beneficiaire",indexes={@ORM\Index(name="search_idx", columns={"surname"})})
 */
class Beneficiaire  extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=32, nullable=false, unique=true)
     */
    protected $surname;
 
    /**
     * @ORM\Column(type="string", length=32, nullable=true, unique=false)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=32, nullable=true, unique=false)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=11, nullable=true, unique=false)
     */
    protected $phone_number;

    

    /**
     * @ORM\Column(type="string", length=50, nullable=true, unique=false)
     */
    protected $country;


    protected $type = "benef";
    public function getType(){
        return $this ->type;
    }



    /**
     * Gets the surname.
     *
     * @return string
     */
   
    public function getSurname(){
        return $this->surname;
    }

    /**
     * Sets the surname.
     *
     * @param String $surname
     *
     * @return Beneficiaire
     */
    public function setSurname($surname){
        $this->surname = $surname;
        return $this;
    }

    /**
     * Gets the first name.
     *
     * @return string
     */
   
    public function getFirstName(){
        return $this->first_name;
    }

    /**
     * Sets the first name.
     *
     * @param String $first_name
     *
     * @return Beneficiaire
     */
    public function setFirstName($first_name){
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * Gets the last name.
     *
     * @return string
     */
   
    public function getLastName(){
        return $this->last_name;
    }

    /**
     * Sets the last name.
     *
     * @param String $last_name
     *
     * @return Beneficiaire
     */
    public function setLastName($last_name){
        $this->last_name = $last_name;
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
     * @return Beneficiaire
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
     * @return Beneficiaire
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
     * @return Beneficiaire
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
     * @return Beneficiaire
     */
    public function setCountry($country){
        $this->country = $country;
        return $this;
    }

}