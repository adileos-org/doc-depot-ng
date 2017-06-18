<?php

namespace DocDepot\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/login", name="login")
    */ 
    public function loginAction(Request $request)
    {
        $authUtils = $this->get('security.authentication_utils');
        return $this->loginAction2($request, $authUtils);
        //return $this->render('DocDepotSiteBundle:Default:login.html.twig', array('error' => null, 'last_username'=> null));
    }

    protected function loginAction2(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('DocDepotSiteBundle:Default:login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/accueil_ben", name="accueil_ben")
    */ 
    public function accueilBenAction(Request $request)
    {
        return $this->render('DocDepotSiteBundle:Default:accueil_ben.html.twig', array('error' => null, 'last_username'=> null));
    }

    /**
     * @Route("/accueil_as", name="accueil_as")
    */ 
    public function accueilAsAction(Request $request)
    {
        return $this->render('DocDepotSiteBundle:Default:accueil_as.html.twig', array('error' => null, 'last_username'=> null));
    }

}
