<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoCurso
 *
 * @author Montana
 */
include_once ('dbconfig.php');
include_once('model/Curso.php');
class daoCurso {
    //put your code here
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function insert($id, $curso, $departamento) {
        try {
            $stmt = $this->db->prepare("INSERT into sgu.tb_curso( id, id_departamento, nome)values( :idf, :departamentof, :cursof)");
            $stmt->bindparam(":idf",$id);
            $stmt->bindparam(":departamentof",$departamento);
            $stmt->bindparam(":cursof",$curso);
            $stmt->execute();
            ?>
            <script>
             alert("Sucesso Inserido!");
            </script>
            <?php
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function selectAll () {
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.vw_curso");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $cursos = Array();
            foreach ($result as $curso){
                $cursos[] = new Curso($curso['ID'], $curso['NOME'], $curso['DEPARTAMENTO']);
            }
            return $cursos;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}