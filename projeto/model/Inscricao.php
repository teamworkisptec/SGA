<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:08
 */

class Inscricao
{
    private $nome;
    private $bi;
    private $email;
    private $telefone;
    private $nota;
    private $id;

    /**
     * Inscricao constructor.
     */
    public function __construct($id,$nome,$bi,$email,$telefone,$curso)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->bi = $bi;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->curso = $curso;
    }

    /**
     * @return mixed
     */
    function getBi() {
        return $this->bi;
    }

    function getCurso() {
        return $this->curso;
    }

    function setBi($bi) {
        $this->bi = $bi;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }
    
    
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }



}