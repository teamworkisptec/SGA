<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 22/10/2018
 * Time: 11:04
 */

class Turma
{
    private $id;
    private $nome;
    private $id_curso;
    private $periodo;
    private $ano;
            
    function __construct($id, $nome, $id_curso, $periodo, $ano) {
        $this->id = $id;
        $this->nome = $nome;
        $this->id_curso = $id_curso;
        $this->periodo = $periodo;
        $this->ano = $ano;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getId_curso() {
        return $this->id_curso;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function getAno() {
        return $this->ano;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setId_curso($id_curso) {
        $this->id_curso = $id_curso;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }




}