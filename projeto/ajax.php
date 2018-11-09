<?php

require_once '/controller/departamentoController.php';
require_once '/controller/cursoController.php';
require_once '/controller/turmaController.php';
require_once '/controller/docenteController.php';
require_once '/controller/discenteController.php';
require_once '/controller/horarioController.php';

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
        case 'Inserir-matricula':
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $curso = $_POST['curso'];
            $discente = new discenteController();
            
            $idDiscente = $discente->inserir($nome, $telefone, $email, $endereco,$curso);
        }break;
        
        case 'Turma':
        {
            $id_curso = $_POST['idcurso'];
            $res = new turmaController();
            $turmas = $res->selecionarTurmaPorCurso($id_curso);
            
            
            foreach($turmas as $turma) {
                $result[] = array("id"=>$turma->getId(),"nome"=>$turma->getNome());
                /// Passo o valor da BD pra um array
                
            }
            echo json_encode($result);//do Array converto pra Json
        }break;
        case 'Semestre':
        {
            $id_turma = $_POST['idturma'];
            $res = new horarioController();
            $horarios = $res->selecionarHorarioPorTurma($id_turma);
            
            
            foreach($horarios as $horario) {
                $result[] = array("id"=>$horario->getId(),"id_turma"=>$horario->getId_turma(),"id_disciplina"=>$horario->getId_disciplina(),"id_horas"=>$horario->getId_horas(),"semestre"=>$horario->getSemestre());
                /// Passo o valor da BD pra um array
                
            }
            echo json_encode($result);//do Array converto pra Json
        }break;
    }
}