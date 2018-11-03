<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:35
 */

class Disciplina
{

    private $id_disciplina;
    private $nome;
    private $descricao;

    /**
     * Disciplina constructor.
     * @param $id_disciplina
     * @param $nome
     * @param $descricao
     */
    public function __construct($id_disciplina, $nome, $descricao)
    {
        $this->id_disciplina = $id_disciplina;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_disciplina;
    }

    /**
     * @param mixed $id_disciplina
     */
    public function setId($id_disciplina)
    {
        $this->id_disciplina = $id_disciplina;
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

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


}