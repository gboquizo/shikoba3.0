<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Noticias
 * @ORM\Table(name="noticias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoticiasRepository")
 */
class Noticias
{
    /**
     * @var \DateTime
     * @ORM\Column(name="fecha", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha;

    public function __construct()
    {
        $this->fecha = new \DateTime();
        //$this->fechaInicio(new \DateTime());
    }
    /**
     * @var \DateTime
     * @ORM\Column(name="fechaInicio", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     * @ORM\Column(name="fechaFinal", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaFinal;
    /**
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer", options={"default"="0"})
     */
    private $puntos;
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $id;

    /**
     * @ORM\Column(name="noticia_texto", type="text")
     * @var string
     */
    private $noticia_texto;


    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Cursos")
     * @ORM\JoinColumn(name="idCurso", referencedColumnName="id")
     */
    private $idCurso;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set noticia_texto
     *
     * @param string $noticia_texto
     *
     * @return Noticias
     */
    public function setNoticia_texto($noticia_texto)
    {
        $this->noticia_texto = $noticia_texto;

        return $this;
    }

    /**
     * Get noticia_texto
     *
     * @return string
     */
    public function getNoticia_texto()
    {
        return $this->noticia_texto;
    }
    /**
     * Set noticiaTexto
     *
     * @param string $noticia_texto
     *
     * @return Noticias
     */
    public function setNoticiaTexto($noticia_texto)
    {
        $this->noticia_texto = $noticia_texto;

        return $this;
    }

    /**
     * Get noticiaTexto
     *
     * @return string
     */
    public function getNoticiaTexto()
    {
        return $this->noticia_texto;
    }
    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return Alumno
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return int
     */
    public function getPuntos()
    {
        return $this->puntos;
    }
    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Noticias
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     *
     * @return Noticias
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    /**
     * Set fechaFinal
     *
     * @param string $fechaFinal
     *
     * @return Noticias
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return string
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set idCurso
     *
     * @param integer $idCurso
     *
     * @return Noticias
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso
     *
     * @return int
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
}

