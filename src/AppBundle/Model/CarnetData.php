<?php

namespace AppBundle\Model;


use AppBundle\Entity\Alumno;

class CarnetData
{
    function __construct(Alumno $alumno, $arraySanciones = null)
    {
        $this->alumno = $alumno;
        $this->arraySanciones = $arraySanciones;
    }

    /**
     * @return Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * @return null
     */
    public function getArraySanciones()
    {
        return $this->arraySanciones;
    }
}