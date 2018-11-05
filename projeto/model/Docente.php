<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:06
 */

include_once "Pessoa.php";

class Docente extends Pessoa {

    private $status;
    private $id;
    /**
     * @return mixed
     */
    
    function __construct($nome, $email, $endereco) {
        parent::__construct($nome, $email, $endereco);
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}