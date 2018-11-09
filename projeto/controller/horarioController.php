<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of horarioController
 *
 * @author Montana
 */
require_once 'DAO/daoHorario.php';
class horarioController {
    private  $daohorario;
    
    function __construct( ) {
        $this->daohorario = new daoHorario();
    }
    
    
    public function selecionarHorarioPorTurma($id_turma) {
        try{
            $res = $this->daohorario->selectByTurma($id_turma);
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

}
