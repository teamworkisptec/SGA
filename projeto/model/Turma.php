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
    private $periodo;
    private $nome;
    private $id_curso;
            
    
    function __construct($id, $nome, $periodo, $id_curso) {
        $this->id = $id;
        $this->periodo = $periodo;
        $this->nome = $nome;
        $this->id_curso = $id_curso;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getId_curso() {
        return $this->id_curso;
    }

    function getAnocurso() {
        return $this->anocurso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function getId() {
        return $this->id;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }
    



}