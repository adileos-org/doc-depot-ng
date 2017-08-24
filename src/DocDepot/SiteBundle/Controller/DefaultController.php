<?php

namespace DocDepot\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use DocDepot\SiteBundle\Entity\RelationConfianceRepository;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        if($this->getUser()->getType() == "as"){
            return $this->redirectToRoute("accueil_as");           
        }
        if($this->getUser()->getType() == "benef"){
            return $this->redirectToRoute("accueil_ben");           
        }
       throw new \Exception("impossible de déterminer le type de personne");
        
    }


    /**
     * @Route("/accueil_ben", name="accueil_ben")
    */ 
    public function accueilBenAction(Request $request)
    {
        $lastUsername = $this->getUser()->getSurname();
        return $this->render('DocDepotSiteBundle:Default:accueil_ben.html.twig', array('error' => null, 'last_username'=> $lastUsername));
    }

    /**
     * @Route("/accueil_as", name="accueil_as")
    */ 
    public function accueilAsAction(Request $request)
    {
           $lastUsername = $this->getUser()->getFirstname();
           $organisme = $this->getUser()->getOrganismeSocial()->getName();
           
           $repository = $this-> getDoctrine()-> getManager()->getRepository("DocDepotSiteBundle:RelationConfiance");
           $entries = $repository->findByActeurSocial($this->getUser());
           $beneficiaires = array();
           foreach($entries as $entry){
                $beneficiaires[] = $entry->getBeneficiaire();
           }
        return $this->render('DocDepotSiteBundle:Default:accueil_as.html.twig', array('error' => null, 'last_username'=> $lastUsername, 'organisme' => $organisme, 'beneficiaires' => $beneficiaires, 'curUser' => $this->getUser()));
    }

}
