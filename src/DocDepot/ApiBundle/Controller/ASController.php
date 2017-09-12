<?php

namespace DocDepot\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use DocDepot\SiteBundle\Entity\ActeurSocialRepository;

class ASController extends FOSRestController
{

    private $repository;

    public function getRepository(){
        if($this->repository == null){
            $this->repository = $this-> getDoctrine()-> getManager()->getRepository("DocDepotSiteBundle:ActeurSocial");
        }
        return $this->repository ;
    }


    private function getDefaultView($data)
    {
        return $this->view($data, 200)
            ->setTemplate("MyBundle:Users:getUsers.html.twig")
            ->setTemplateVar('users')
        ;
    }
    

    public function listActeursocialsAction()
    {
        $as = $this->getRepository()->findAll();
        $view = $this->getDefaultView($as);   
        return $this->handleView($view);
    } // "list_acteursocials"    [GET] /acteursocials/list

    public function getActeursocialsAction($idAs)
    {
        $as = $this->getRepository()->findOneById($idAs);
        $view = $this->getDefaultView($as);   
        return $this->handleView($view);
    } // "get_acteursocials"    [GET] /acteursocials/{idAs}

    public function deleteActeursocialAction($idAs)
    {
        $as = $this->getRepository()->remove($this->getRepository()->findOneById($idAs));

    } // "delete_acteursocials" [DELETE] /acteursocials/{idAs}

    public function newActeursocialAction($idAs)
    {} // "new_acteursocials"   [GET] /acteursocials/{idAs}/new

    public function editActeursocialAction($idAs)
    {} // "edit_acteursocials"   [GET] /acteursocials/{idAs}/edit

    public function removeActeursocialAction($idAs)
    {
        $this-> getDoctrine()-> getManager()->beginTransaction();
        $entity = $this->getRepository()->findOneById($idAs);
        $as = $this-> getDoctrine()-> getManager()->remove($entity);
        $this-> getDoctrine()-> getManager()->commit();
        $view = $this->getDefaultView(1);   
        return $this->handleView($view);
    } // "remove_user_beneficiaire" [GET] /acteursocials/{idAs}/remove


}
?>