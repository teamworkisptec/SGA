<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 22:06
 */

include_once "Pessoa.php";
class Administrativo extends Pessoa
{
    private $id;
            
    function __construct($nome, $email, $endereco, $pass) {
        parent::__construct($nome, $email, $endereco, $pass);
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


}