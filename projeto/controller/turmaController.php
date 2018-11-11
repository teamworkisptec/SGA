<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turmaController
 *
 * @author Montana
 */
require_once 'DAO/daoTurma.php';
class turmaController {
    private $daoturma;
    
    function __construct( ) {
        $this->daoturma = new daoTurma();
    }
    
    public function inserir($id,$nome,$id_curso,$periodo) {
        try{
            $this->daoturma->insert($id, $nome, $id_curso, $periodo);
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        } 
    }
    
    public function selecionarTurmaPorCurso($id_curso) {
        try{
            $res = $this->daoturma->selectByCurso($id_curso);
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
        
    }

}
