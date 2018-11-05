<?php

require_once '/controller/departamentoController.php';
require_once '/controller/cursoController.php';
require_once '/controller/turmaController.php';
require_once '/controller/docenteController.php';

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Inserir-departamento':
        {
            $nome = $_POST['nomeDep'];
            $dep = new departamentoController();
            $dep->inserirDepartamento($nome);
        }break;
        case 'Inserir-curso':
        {
            $departamento = $_POST['departamento'];
            $curs = $_POST['curso'];
            $id = $_POST['id'];
            $curso = new CursoController();
            $curso->inserir($curs, $id, $departamento);
        }break;
        case 'Inserir-docente':
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $docente = new docenteController();
            $docente->inserirDocente($nome, $email, $endereco);
        }break;
    }
}