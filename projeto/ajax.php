<?php

require_once '/controller/departamentoController.php';
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Inserir-departamento':
        {
            $nome = $_POST['nome'];
            $dep = new departamentoController();
            $dep->inserirDepartamento($nome);
        }break;
        
        case 'select':
            select();
            break;
    }
}