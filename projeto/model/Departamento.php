<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:35
 */

class Departamento
{
    private $nome;
    private $id_departamento;

    /**
     * Departamento constructor.
     * @param $nome
     * @param $id_departamento
     */
    public function __construct($nome, $id_departamento)
    {
        $this->nome = $nome;
        $this->id_departamento = $id_departamento;
    }

    /**
     * @return mixed
     */
    public function getIdDepartamento()
    {
        return $this->id_departamento;
    }

    /**
     * @param mixed $id_departamento
     */
    public function setIdDepartamento($id_departamento)
    {
        $this->id_departamento = $id_departamento;
    }

    /**
     * @return mixed
     */
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


}