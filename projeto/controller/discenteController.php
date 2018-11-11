<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of discenteController
 *
 * @author Montana
 */

require_once 'DAO/daoDiscente.php';
class discenteController {
    //put your code here
    private $daodisce = NULL;
    
    function __construct( ) {
        $this->daodisce = new daoDiscente();
    }
    
    public function inserir($nome,$telefone,$email,$endereco,$curso) {
        try{
            $res = $this->daodisce->insert($nome, $telefone, $email, $endereco,$curso);
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        
    }

    
}
