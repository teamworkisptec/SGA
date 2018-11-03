<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of inscricaoController
 *
 * @author Montana
 * 
 */
require_once 'DAO/daoInscricao.php';
class InscricaoController {
    private $daoins = NULL;
    
    public function __construct() {
        $this->daoins = new daoInscricao();
    }
    
    public function todosInscritos() {
        try{
            $res = $this->daoins->selectAll();
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    } 
    
    public function inserir($nome, $email, $bi, $telefone, $id_curso) {
        $this->daoins->inserirInscricao($nome, $email, $bi, $telefone, $id_curso);
    }
}