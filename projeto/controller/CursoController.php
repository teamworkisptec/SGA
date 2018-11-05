<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursoController
 *
 * @author Montana
 */
include_once 'DAO/daoCurso.php';
class CursoController {
    public $daocurso = NULL;
    
    function __construct() {
        $this->daocurso = new daoCurso();
    }
    
    public function inserir($id,$departamento,$curso) {
        try{
            $this->daocurso->insert($id, $departamento,$curso);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    }
    public function todosCursos() {
        try{
            $result= $this->daocurso->selectAll();
            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    }
    
}


