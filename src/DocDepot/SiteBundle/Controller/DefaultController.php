<?php

namespace DocDepot\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('DocDepotSiteBundle:Default:index.html.twig');
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
        return $this->render('DocDepotSiteBundle:Default:accueil_as.html.twig', array('error' => null, 'last_username'=> $lastUsername, 'organisme' => $organisme));
    }

}
