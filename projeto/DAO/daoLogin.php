<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoLogin
 *
 * @author Montana
 */
include_once 'dbconfig.php';
include_once 'model/Login.php';
//include_once 'C:/wamp/www/teamworkisptec/sgu/projeto/projeto/model/Login.php';
class daoLogin {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function selectByIdPasse($id, $passe) {
        try{
            $stmt = $this->db->prepare("SELECT * from sgu.tb_login where id=:idp and passe=:passep");
            $stmt->bindparam(":idp",$id);
            $stmt->bindparam(":passep",$passe);
            $stmt->execute();
            $result = $stmt->fetch();
            
            
            $login = new Login($result['perfil'], $result['id'], $result['passe']);
            return $login;
        } catch (Exception $ex) {
            echo "DAO: ".$ex->getMessage();
        }
    }
}
