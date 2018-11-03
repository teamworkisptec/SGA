<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Montana
 */

require_once 'DAO/daoLogin.php';

class LoginController {
    private $daolo = NULL;
    
    function __construct() {
        $this->daolo = new daoLogin();
    }
    
    
    public function logar($id,$passe) {
        try{
            $res = $this->daolo->selectByIdPasse($id, $passe);
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }   
    }
    
    public function loginView() {
        include 'view/EnterLogin.php';
    }
}
