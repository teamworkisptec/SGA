<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isa Cris
 * Date: 21/10/2018
 * Time: 23:17
 */

class Horario
{
    private $id;
    private $horaInicio;
    private $horaFim;

    /**
     * Horario constructor.
     * @param $id
     * @param $horaInicio
     * @param $horaFim
     */
    public function __construct($id, $horaInicio, $horaFim)
    {
        $this->id = $id;
        $this->horaInicio = $horaInicio;
        $this->horaFim = $horaFim;
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

    /**
     * @return mixed
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * @param mixed $horaInicio
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    }

    /**
     * @return mixed
     */
    public function getHoraFim()
    {
        return $this->horaFim;
    }

    /**
     * @param mixed $horaFim
     */
    public function setHoraFim($horaFim)
    {
        $this->horaFim = $horaFim;
    }


}