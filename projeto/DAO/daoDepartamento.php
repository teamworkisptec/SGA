<?php

include_once 'dbconfig.php';
include_once 'model/Departamento.php';
class daoDepartamento {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function selectAll( ) {
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.vw_departamentos");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $departamentos = Array();
            foreach($result as $departamento){
               $departamentos[] = new Departamento($departamento['NOME'], $departamento['ID']);  
            }
            return $departamentos;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function selectByNome($nome ) {
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.tb_departamentos where nome=:nomef");
            $stmt->bindparam("nomef",$nome);
            $stmt->execute();
            $result = $stmt->fetch();
            
            $departamento = new Departamento($result['nome'], $result['id']);
            return $departamento;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function insertDepartamento($nome){
        try{
            $stmt = $this->db->prepare("CALL sgu.inserirDepartamento(:nome);");
            $stmt->bindparam(":nome",$nome);
            $stmt->execute();
            ?>
            <script>
                alert("Sucesso Inserção!");
            </script>
            <?php
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            
            ?>
            <script>
                alert("Error Inserção!");
            </script>
            <?php
            return false;
        }
    }
    
    
    
}

