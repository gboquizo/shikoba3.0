<?php

namespace AppBundle\Model;

class DiarioData{

    function __construct($diariosAula, $horas, $horasElegidas, \DateTime $fecha = null)
    {
        $this->diariosAula = $diariosAula;
        $this->horas = $horas;
        $this->horasElegidas = $horasElegidas;
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getDiariosAula()
    {
        return $this->diariosAula;
    }

    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        if($this->fecha == null) return new \Datetime();
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getHorasElegidas()
    {
        return $this->horasElegidas;
    }

    /**
     * @return mixed
     */
    public function getHoras()
    {
        return $this->horas;
    }

}