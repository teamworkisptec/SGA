<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 23:17
 */

/**
 * Modification of Horario
 *
 * @author Montana
 */

class Horario
{
    private $id;
    private $id_turma;
    private $id_disciplina;
    private $id_horas;
    private $semestre;
    
    function __construct($id, $id_turma, $id_disciplina, $id_horas, $semestre) {
        $this->id = $id;
        $this->id_turma = $id_turma;
        $this->id_disciplina = $id_disciplina;
        $this->id_horas = $id_horas;
        $this->semestre = $semestre;
    }
    
    function getId() {
        return $this->id;
    }

    function getId_turma() {
        return $this->id_turma;
    }

    function getId_disciplina() {
        return $this->id_disciplina;
    }

    function getId_horas() {
        return $this->id_horas;
    }

    function getSemestre() {
        return $this->semestre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_turma($id_turma) {
        $this->id_turma = $id_turma;
    }

    function setId_disciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }

    function setId_horas($id_horas) {
        $this->id_horas = $id_horas;
    }

    function setSemestre($semestre) {
        $this->semestre = $semestre;
    }



    
    
}