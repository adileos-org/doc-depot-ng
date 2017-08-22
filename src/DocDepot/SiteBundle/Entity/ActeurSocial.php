<?php
// src/AppBundle/Entity/Beneficiaire.php

namespace DocDepot\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DocDepot\SiteBundle\Entity\OrganismeSocial; 
use DocDepot\SiteBundle\Entity\User; 
/**
 * @ORM\Entity
 * @ORM\Table(name="dd_acteur_social",indexes={@ORM\Index(name="search_idx", columns={"first_name", "last_name"})})
 */
class ActeurSocial extends User
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
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=32, nullable=false, unique=false)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=11, nullable=false, unique=false)
     */
    protected $phone_number;

    /**
     * @ORM\Column(type="string", length=50, nullable=true, unique=false)
     */
    protected $country;

    /**
    * @ORM\OneToOne(targetEntity="OrganismeSocial")
    * @ORM\JoinColumn(name="organisme_id", referencedColumnName="id")
    */
    protected $organismeSocial;


    /**
    * @ORM\Column(type="string", length=255, nullable=true, unique=false)
    */
    protected $address;

    protected $type = "as";


    public function getType(){
        return $this ->type;
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
     * @return ActeurSocial
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
     * @return ActeurSocial
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
     * @return ActeurSocial
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
     * @return ActeurSocial
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
     * @return ActeurSocial
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
     * @return ActeurSocial
     */
    public function setCountry($country){
        $this->country = $country;
        return $this;
    }

    /**
     * Gets the organismeSocial.
     *
     * @return OrganismeSocial
     */
   
    public function getOrganismeSocial(){
        return $this->organismeSocial;
    }

    /**
     * Sets the organismeSocial.
     *
     * @param String $organismeSocial
     *
     * @return ActeurSocial
     */
    public function setOrganismeSocial($organismeSocial){
        $this->organismeSocial = $organismeSocial;
        return $this;
    }







}