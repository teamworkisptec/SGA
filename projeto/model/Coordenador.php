<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 22/10/2018
 * Time: 11:01
 */
include_once "Docente.php";
class Coordenador extends Docente
{
    private $id_coordenador;

    /**
     * Coordenador constructor.
     * @param $id_coordenador
     */
    public function __construct($id_coordenador)
    {
        $this->id_coordenador = $id_coordenador;
    }

    /**
     * @return mixed
     */
    public function getIdCoordenador()
    {
        return $this->id_coordenador;
    }

    /**
     * @param mixed $id_coordenador
     */
    public function setIdCoordenador($id_coordenador)
    {
        $this->id_coordenador = $id_coordenador;
    }




}