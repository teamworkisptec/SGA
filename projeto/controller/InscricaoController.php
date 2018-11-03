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
        $result = $this->daoins->inserirInscricao($nome, $email, $bi, $telefone, $id_curso);
        
    }
    
    public function inscricaoSubmit() {
        if(isset($_POST['submit-inscricao'])){
            $filterNome = filter_input(INPUT_POST, 'NomeCompleto'); 
            $filterEmail = filter_input(INPUT_POST, 'Email'); 
            $filterBi = filter_input(INPUT_POST, 'Bi');
            $filterTelefone = filter_input(INPUT_POST, 'Telefone'); 
            $filterId_curso = filter_input(INPUT_POST, 'Cursos');
            
            $nome = $filterNome; 
            $email = $filterEmail; 
            $bi = $filterBi; 
            $telefone = $filterTelefone; 
            $id_curso = $filterId_curso;
            
            
            if($nome!=NULL && $email!=NULL && $bi!=NULL && $telefone!=NULL && $id_curso!=NULL){
               
                $this->inserir($nome, $email, $bi, $telefone, $id_curso);
            }
        }
    }
}