<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoHorario
 *
 * @author Montana
 */

include_once ('dbconfig.php');
include_once('model/Horario.php');

class daoHorario {
    //put your code here
    private $daohorario;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function selectByTurma($id_turma){
        try{
            $stmt = $this->db->prepare("SELECT * FROM tb_horario INNER JOIN tb_turma ON tb_horario.id_turma=tb_turma.id where tb_turma.id = :id_turma");
            $stmt->bindparam(":id_turma",$id_turma);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $horarios = Array();
            foreach ($result as $horario) {
                $horarios[] = new Horario($horario['id'], $horario['id_turma'], $horario['id_disciplina'], $horario['id_horas'], $horario['semestre']);
            }
            return $horarios;
        } catch (Exception $ex) {
            echo "ERRO NA BD TIPO: ".$ex->getMessage();
        }
    }
}
