<?php
// src/AppBundle/Entity/Beneficiaire.php

namespace DocDepot\SiteBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use DocDepot\SiteBundle\Entity\OrganismeSocial; 
use DocDepot\SiteBundle\Entity\User; 
/**
 * @ORM\Entity
 * @ORM\Table(name="dd_relation_confiance")
 */
class RelationConfiance
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
    * @ORM\ManyToOne(targetEntity="ActeurSocial")
    * @ORM\JoinColumn(name="acteur_social_id", referencedColumnName="id")
    */
    protected $acteurSocial;

    /**
    * @ORM\ManyToOne(targetEntity="Beneficiaire")
    * @ORM\JoinColumn(name="beneficiaire_id", referencedColumnName="id")
    */
    protected $beneficiaire;


    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetimetz")
     */
    protected $creationDate;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    protected $revocationDate;


    /**
     * Gets the acteurSocial.
     *
     * @return ActeurSocial
     */
   
    public function getActeurSocial(){
        return $this->acteurSocial;
    }

    /**
     * Sets the acteurSocial.
     *
     * @param String $acteurSocial
     *
     * @return RelationConfiance
     */
    public function setActeurSocial($acteurSocial){
        $this->acteurSocial = $acteurSocial;
        return $this;
    }




    /**
     * Gets the beneficiaire.
     *
     * @return Beneficiaire
     */
   
    public function getBeneficiaire(){
        return $this->beneficiaire;
    }

    /**
     * Sets the beneficiaire
     *
     * @param Beneficiaire $beneficiaire
     *
     * @return RelationConfiance
     */
    public function setBeneficiaire($beneficiaire){
        $this->beneficiaire = $beneficiaire;
        return $this;
    }


    /**
     * Gets the creationDate.
     *
     * @return DateTime
     */
   
    public function getCreationDate(){
        return $this->creationDate;
    }

    /**
     * Sets the creationDate
     *
     * @param DateTime $creationDate
     *
     * @return RelationConfiance
     */
    public function setCreationDate($creationDate){
        $this->creationDate = $creationDate;
        return $this;
    }


    /**
     * Gets the revocationDate.
     *
     * @return DateTime
     */
   
    public function getRevocationDate(){
        return $this->revocationDate;
    }

    /**
     * Sets the revocationDate
     *
     * @param DateTime $revocationDate
     *
     * @return RelationConfiance
     */
    public function setRevocationDate($revocationDate){
        $this->revocationDate = $revocationDate;
        return $this;
    }




}
