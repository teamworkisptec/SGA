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
    
    public function selectByCurso($id_curso){
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.tb_turma WHERE id_curso=:id_curso");
            $stmt->bindparam(":id_curso",$id_curso);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $turmas = Array();
            foreach ($result as $turma) {
                $turmas[] = new Turma($turma['id'], $turma['nome'], $turma['id_curso'], $turma['periodo'], $turma['ano']);
            }
            return $turmas;
        } catch (Exception $ex) {
            echo "ERRO NA BD TIPO: ".$ex->getMessage();
        }
    }
}
