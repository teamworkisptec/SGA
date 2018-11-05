<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoTurma
 *
 * @author Montana
 */

include_once ('dbconfig.php');
include_once('model/Turma.php');
class daoTurma {
    //put your code here
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    
    public function insert($id, $nome, $id_curso, $periodo) {
        try{
            $stmt = $this->db->prepare("CALL `sgu`.`inserirTurma`(:idf,:nomef,:id_cursof,:periodof)");
            $stmt->bindparam(":idf",$id);
            $stmt->bindparam(":nomef",$nome);
            $stmt->bindparam(":id_cursof",$id_curso);
            $stmt->bindparam(":periodof",$periodo);
            $stmt->execute();
            
             echo 'Inserida Turma !!!';
            return true;
        } catch (Exception $ex) {
            
            echo 'ERRO BD! Tipo: '.$ex->getMessage();
            return false;
        }
    }
}
