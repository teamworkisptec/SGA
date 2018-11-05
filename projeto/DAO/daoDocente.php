<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoDocente
 *
 * @author Montana
 */

include_once ('dbconfig.php');
include_once('model/Docente.php');
class daoDocente {
    //put your code her
    
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
     public function insert($nome,$email,$endereco) {
        try{
            $stmt = $this->db->prepare("CALL sgu.inserirDocente(:nome,:email, :endereco)");
            $stmt->bindparam(":nome",$nome);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":endereco",$endereco);
            $stmt->execute();
            echo "!!! INSERÇÂO !!!";
            return true;
        } catch (Exception $ex) {
            echo "!!! ERRO BD TIPO: ".$ex->getMessage();
            return false;
        } 
    }
}
