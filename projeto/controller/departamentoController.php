<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of departamentoController
 *
 * @author Montana
 */

require_once 'DAO/daoDepartamento.php';
class departamentoController {
    private $daodep = NULL;
    
    function __construct() {
        $this->daodep = new daoDepartamento();
    }
    
    public function inserirDepartamento( $nome ) {
        
        $this->daodep->insertDepartamento($nome);
        
    }

    
}
