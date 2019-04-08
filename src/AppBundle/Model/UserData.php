<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 25/05/17
 * Time: 20:01
 */

namespace AppBundle\Model;


use AppBundle\Entity\Alumno;

class UserData
{

    function __construct(Alumno $alumno, $numPartes, $numSanciones, $numVisitasConvivencia, $numPartesMeses, $numSancionesMeses, $sanciones, $partes)
    {
        $this->alumno = $alumno;
        $this->numPartes = $numPartes;
        $this->numSanciones = $numSanciones;
        $this->numVisitasConvivencia = $numVisitasConvivencia;
        $this->numPartesMeses = $numPartesMeses;
        $this->numSancionesMeses = $numSancionesMeses;
        $this->sanciones = $sanciones;
        $this->partes = $partes;
    }

    /**
     * @return Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * @return mixed
     */
    public function getNumPartes()
    {
        return $this->numPartes;
    }

    /**
     * @return mixed
     */
    public function getNumSanciones()
    {
        return $this->numSanciones;
    }

    /**
     * @return mixed
     */
    public function getNumVisitasConvivencia()
    {
        return $this->numVisitasConvivencia;
    }

    /**
     * @return mixed
     */
    public function getNumPartesMeses()
    {
        return $this->numPartesMeses;
    }

    /**
     * @return mixed
     */
    public function getNumSancionesMeses()
    {
        return $this->numSancionesMeses;
    }

    public function getYear(){
        $fecha = new \DateTime();
        return $fecha->format('Y');
    }

    /**
     * @return mixed
     */
    public function getPartes()
    {
        return $this->partes;
    }

    /**
     * @return mixed
     */
    public function getSanciones()
    {
        return $this->sanciones;
    }

}