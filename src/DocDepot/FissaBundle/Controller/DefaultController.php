<?php

namespace DocDepot\FissaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FissaBundle:Default:index.html.twig');
    }
}
