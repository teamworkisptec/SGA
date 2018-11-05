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
    
    public function todosDepartamentos() {
        try{
            $res = $this->daodep->selectAll();
            return $res;
        } catch (Exception $ex) {
            $ex->getMessage();
        }   
    }
    
    public function inserirDepartamento($nome  ) {
        if($nome!=NULL ){
               $this->daodep->insertDepartamento($nome);
        }
        else{
            ?>
            <script>alert("Campo Null!!!")</script>
            <?php
        }
    }
    
}
