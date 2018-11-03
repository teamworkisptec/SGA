<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 21:59
 */

include_once "Pessoa.php";

class Aluno extends Pessoa
{
    private $anoCurso;
    private $id;

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

    /**
     * @return mixed
     */
    public function getAnoCurso()
    {
        return $this->anoCurso;
    }

    /**
     * @param mixed $anoCurso
     */
    public function setAnoCurso($anoCurso)
    {
        $this->anoCurso = $anoCurso;
    }


}
