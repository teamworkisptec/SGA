<?php

include_once 'dbconfig.php';
include_once 'model/Departamento.php';
class daoDepartamento {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
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
