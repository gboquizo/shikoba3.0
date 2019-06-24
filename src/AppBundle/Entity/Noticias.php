<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Noticias.php
 * @Updated: 2019
 * @Description: Entidad para las noticias.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exception;
use DateTime;

//use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Noticias.
 * @ORM\Table(name="noticias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoticiasRepository")
 */
class Noticias
{
    /**
     * Fecha.
     * @var DateTime
     * @ORM\Column(name="fecha", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fecha;

    /**
     * Noticias constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->fecha = new DateTime();
        //$this->fechaInicio(new \DateTime());
    }

    /**
     * Fecha de inicio.
     * @var DateTime
     * @ORM\Column(name="fechaInicio", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaInicio;

    /**
     * Fecha final.
     * @var DateTime
     * @ORM\Column(name="fechaFinal", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaFinal;

    /**
     * Puntos.
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer", options={"default"="0"})
     */
    private $puntos;

    /**
     * Id principal de la clase.
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Texto de la noticia.
     * @ORM\Column(name="noticia_texto", type="text")
     * @var string
     */
    private $noticia_texto;

    /**
     * idCurso.
     * @var int
     * @ORM\ManyToOne(targetEntity="Cursos")
     * @ORM\JoinColumn(name="idCurso", referencedColumnName="id")
     */
    private $idCurso;

    /**
     * Permite obtener el id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

//    /**
//     * Establece la noticia_texto.
//     *
//     * @param string $noticia_texto
//     *
//     * @return Noticias
//     */
//    public function setNoticia_texto($noticia_texto)
//    {
//        $this->noticia_texto = $noticia_texto;
//
//        return $this;
//    }
//
//    /**
//     * Permite obtener la noticia_texto.
//     *
//     * @return string
//     */
//    public function getNoticia_texto()
//    {
//        return $this->noticia_texto;
//    }

    /**
     * Establece la noticiaTexto.
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
     * Permite obtener la noticiaTexto.
     *
     * @return string
     */
    public function getNoticiaTexto()
    {
        return $this->noticia_texto;
    }

    /**
     * Establece los puntos.
     *
     * @param int $puntos
     *
     * @return Noticias
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Permite obtener los puntos.
     *
     * @return int
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * Establece la fecha.
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
     * Permite obtener la fecha.
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Establece la fechaInicio.
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
     * Permite obtener la fechaInicio.
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    /**
     * Establece la fechaFinal.
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
     * Permite obtener la fechaFinal.
     *
     * @return string
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Establece el idCurso.
     *
     * @param int $idCurso
     *
     * @return Noticias
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Permite obtener el idCurso.
     *
     * @return int
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
}
