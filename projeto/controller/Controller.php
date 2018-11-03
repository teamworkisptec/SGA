<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Montana
 */
require_once 'LoginController.php';
require_once 'inscricaoController.php';
require_once 'CursoController.php';
class Controller {
    
    private $controllerlogin = NULL;
    private $controllerinscr = NULL;
    private $controllercursos = NULL;
    public function __construct() {
        $this->controllerlogin = new LoginController();
        $this->controllerinscr = new InscricaoController();
        $this->controllercursos = new CursoController();
    }    
    
    
    public function requisicao() {
        $filterCo = filter_input(INPUT_GET,'co');
        if (isset($filterCo)){
            try{
                
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }else{
            //pagina inicial
            $this->controllerlogin->loginView();
        }    
    }
    
    
    
    
    public function viewInscricao() {
        try{
            $cursos = $this->controllercursos->todosCursos();
            $this->controllerinscr->inscricaoSubmit();
            include_once 'view/inscricao.php';
        } catch (Exception $ex) {
            $ex->getMessage();
        }
        
    }
    
    
    /**
    public function listainscritos() {
        $inscritos = $this->controllerInscricao->todosInscritos();
        include 'view/Administrativo.php';
       


        //foreach ($inscritos as $inscrito ){
         ?><!--<tr>
            <td><?php //echo $inscrito->getNome() ?></td>
             </tr>--!>
          <?php
        //}
          
    }
    **/
}

