<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Montana
 */
class Login {
    private $perfil;
    private $id;
    private $passe;
    
    function __construct($perfil, $id, $passe) {
        $this->perfil = $perfil;
        $this->id = $id;
        $this->passe = $passe;
    }
    
    function getPerfil() {
        return $this->perfil;
    }

    function getId() {
        return $this->id;
    }

    function getPasse() {
        return $this->passe;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPasse($passe) {
        $this->passe = $passe;
    }



}
