<?php

namespace DocDepot\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;


class RelAsController extends FOSRestController
{
    public function getBeneficiairesAction($idAs)
    {} // "get_user_beneficiaires"   [GET] /users/{idAs}/beneficiaires

    public function getBeneficiaireAction($idAs, $idBenef)
    {} // "get_user_beneficiaire"    [GET] /users/{idAs}/beneficiaires/{idBenef}

    public function deleteBeneficiaireAction($idAs, $idBenef)
    {} // "delete_user_beneficiaire" [DELETE] /users/{idAs}/beneficiaires/{id}

    public function newBeneficiaireAction($idAs)
    {} // "new_user_beneficiaires"   [GET] /users/{idAs}/beneficiaires/new

    public function editBeneficiaireAction($idAs, $idBenef)
    {} // "edit_user_beneficiaire"   [GET] /users/{idAs}/beneficiaires/{id}/edit

    public function removeBeneficiaireAction($idAs, $idBenef)
    {} // "remove_user_beneficiaire" [GET] /users/{idAs}/beneficiaires/{id}/remove

}
?>