<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:35
 */

class Curso
{
    private $nome;
    private $id;
    private $departamento;

    /**
     * Curso constructor.
     * @param $nome
     * @param $id
     */
    public function __construct($id, $nome, $departameno)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->departamento = $departameno;
    }

    /**
     * @return mixed
     */
    
    function getDepartamento() {
        return $this->departamento;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

        public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}