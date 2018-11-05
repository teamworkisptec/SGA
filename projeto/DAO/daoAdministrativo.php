<?php

include_once 'dbconfig.php';
include_once 'model/Administrativo.php';
class daoAdministrativo {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
      
    public function insertAdministrativo($nome,$email,$passe, $endereco) {
        try{
            $stmt = $this->db->prepare("CALL sgu.inserirAdministrativo(:nome,:email,:passe, :endereco)");
            $stmt->bindparam(":nome",$nome);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":passe",$passe);
            $stmt->bindparam(":endereco",$endereco);
            $stmt->execute();
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        } 
    }
    
    public function selectByIdPasse($id, $passe) {
        try{
            $stmt = $this->db->prepare("SELECT * from sgu.tb_administrativo where id=:idp and passe=:passep");
            $stmt->bindparam(":idp",$id);
            $stmt->bindparam(":passep",$passe);
            $stmt->execute();
            $result = $stmt->fetch();
            
            
            $admin = new Administrativo($result['nome'], $result['email'], $result['endereco'], $result['passe']);
            
            return $admin;
        } catch (Exception $ex) {
            echo "DAO: ".$ex->getMessage();
        }
    }
}
