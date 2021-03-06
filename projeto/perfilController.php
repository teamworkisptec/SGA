<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilController
 *
 * @author Montana
 */

require_once ('controller/LoginController.php');
require_once ('controller/AdministrativoController.php');
require_once ('controller/InscricaoController.php');
require_once 'controller/departamentoController.php';
require_once 'controller/CursoController.php';

class perfilController {
    
    private $controllerLogin = NULL;
    private $controllerAdmin = NULL;
    private $controllerInscr = NULL;
    private $controllerDepa = NULL;
    private $controllerCurso = NULL;
    
    function __construct( ) {
        $this->controllerLogin = new LoginController();
        $this->controllerAdmin = new AdministrativoController();
        $this->controllerInscr = new InscricaoController();
        $this->controllerDepa = new departamentoController();
        $this->controllerCurso = new CursoController();
    }

    public function logar() {
        if (isset($_POST['login-submitted'])) {
            $filterId = filter_input(INPUT_POST, 'id');
            $filterPasse = filter_input(INPUT_POST,'password');
            
            $id = $filterId;
            $passe = $filterPasse;
            if($id!=NULL && $passe!=NULL ){
                $res = $this->controllerLogin->logar($id, $passe);
                if ($res->getPerfil()== 'docen' ){
                    include 'view/Docente.php';
                }
                else if ($res->getPerfil()== 'admin'){
                    $admin = $this->controllerAdmin->buscarAdmin($id, $passe);
                    $inscritos = $this->controllerInscr->todosInscritos();
                    $departamentos = $this->controllerDepa->todosDepartamentos();
                    $cursos = $this->controllerCurso->todosCursos();
                    include 'view/Administrativo.php';
                }
                else if ($res->getPerfil()== 'discen'){
                    //include '';
                }
                else{
                    echo '<script >alert("Email ou Passe Errada");</script>';
                    include 'index.php';
                }
            }   
        }
    }
    
}
//echo 'OLA';
$x = new perfilController();
$x->logar();
