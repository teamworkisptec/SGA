<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministrativoController
 *
 * @author Montana
 */

require_once 'DAO/daoAdministrativo.php';
class AdministrativoController {
    //put your code here
    private $daoadmin = NULL;
    
    function __construct( ) {
        $this->daoadmin = new daoAdministrativo();
    }

    public function buscarAdmin($id, $passe) {
        try {
            $res =$this->daoadmin->selectByIdPasse($id, $passe);
            return $res; 
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
