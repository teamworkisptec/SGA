<?php

include_once ('dbconfig.php');
include_once('model/Inscricao.php');
class daoInscricao {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function inserirInscricao($nome, $email, $bi,$telefone, $id_curso) {
        try{
            $stmt = $this->db->prepare("CALL sgu.inserirInscricao(:nome,:email,:bi,:telefone,:Id_curso)");
            $stmt->bindparam(":nome",$nome);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":bi",$bi);
            $stmt->bindparam(":telefone",$telefone);
            $stmt->bindparam(":id_curso",$id_curso);
            $stmt->execute();
            ?>
            <script>
             alert("Sucesso !");
            </script>
            <?php
            return true;
        } catch (Exception $ex) {
            ?>
            <script>
                alert("Erro :".<?php $ex->getMessage()?>);
            </script>
            <?php
            echo $ex->getMessage();
            return false;
        }
    }
    
    public function selectAll(){
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.vw_inscricao");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $inscritos = Array();
            foreach ($result as $inscrito) {
                $inscritos[] = new Inscricao($inscrito['ID'], $inscrito['NOME'], $inscrito['BI'], $inscrito['EMAIL'], $inscrito['TELEFONE'], $inscrito['CURSO']);
            }
            return $inscritos;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
//$cc = new crudInscricao();
//$cc->selectAll();