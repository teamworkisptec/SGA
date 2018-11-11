<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoDiscente
 *
 * @author Montana
 */
require_once 'dbconfig.php';
require_once 'model/Discente.php';
class daoDiscente {
    //put your code here
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function insert($nome,$telefone,$email,$endereco,$curso) {
        try{
            $stmt = $this->db->prepare("SELECT `sgu`.`f_inserirDiscente`(:nome,:telefone,:email,:endereco,:curso)");
            $stmt->bindparam(":nome",$nome);
            $stmt->bindparam(":telefone",$telefone);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":endereco",$endereco);
            $stmt->bindparam(":curso",$curso);
            $stmt->execute();
            $result = $stmt->fetch();
            
            echo'INSERIDO DISCENTE';
            return $result;
        } catch (Exception $ex) {
            echo 'NÂO INSERIDO DISCENTE!!!ERRO TIPO:'.$ex->getMessage();
        }
        
    }
    
}
