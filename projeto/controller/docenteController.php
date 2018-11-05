<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of docenteController
 *
 * @author Montana
 */
require_once 'DAO/daoDocente.php';
class docenteController {
    //put your code here
    private $daodocente;
    
    function __construct( ) {
        $this->daodocente = new daoDocente();
    }
    
    public function inserirDocente($nome,$email,$endereco) {
        try{
            $this->daodocente->insert($nome, $email, $endereco);
        } catch (Exception $ex) {
            $ex->getMessage();
        }
        
    }

}
