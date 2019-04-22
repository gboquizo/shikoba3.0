<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Tutores;
use AppBundle\Entity\Profesores;
use Doctrine\ORM\EntityRepository;

/**
 * AlumnoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AlumnoRepository extends EntityRepository
{

    public function getAlumno($userId)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select("a")
            ->from("AppBundle:Alumno", "a")
            ->where("a.id = :id")
            ->setParameter("id", $userId)
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Función que devuelve los alumnos por curso
     * @param $curso
     * @return array
     */
    public function getAlumnosByCurso(Cursos $curso)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           WHERE a.idCurso = :curso'
        );

        $query->setParameter('curso', $curso->getId());
        return $query->getResult();
    }

    /**
     * Función que devuelve los alumnos ordenados por puntos
     * @return array
     */
    public function getAlumnoOrderByPuntos()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           ORDER BY a.puntos DESC'
        );

        return $query->getResult();
    }

    /**
     * Función que devuelve los alumnos ordenados por puntos, y que coincidan con el parámetro
     * @param $string
     * @return array
     */
    public function getAlumnosLike($string)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           JOIN a.idCurso as curso
           WHERE a.nombre LIKE :string OR a.apellido1 LIKE :string
           OR a.apellido2 LIKE :string OR a.puntos LIKE :string
           OR curso.grupo LIKE :string
           OR (SELECT count(s.sancion) FROM AppBundle\Entity\Sanciones s WHERE s.idAlumno = a.id AND s.sancion LIKE :string)>0
           ORDER BY a.puntos DESC'
        );
        $query->setParameter('string', '%' . $string . '%');

        return $query->getResult();
    }

    /**
     * Función que devuelve un array con los alumnos que tengas los puntos del parámetro
     * @param $puntos
     * @param $alumnos
     * @return array
     */
    public function findByPuntosAndAlumnos($puntos, $alumnos)
    {
        $arrAlumnos = [];
        $arrAlumnosFiltrados = [];
        /** @var Alumno $alumno */
        foreach ($alumnos as $alumno) {
            $query = $this->getEntityManager()->createQueryBuilder()
                ->select('a')
                ->from('AppBundle:Alumno', 'a')
                ->where('a.id = :idAlumno')
                ->andWhere('a.puntos = :puntos');
            $query->setParameter('puntos', $puntos);
            $query->setParameter('idAlumno', $alumno->getId());
            $arrAlumnos[] = $query->getQuery()->getResult();
        }
        foreach ($arrAlumnos as $alumnosFiltrados) {
            foreach ($alumnosFiltrados as $alumnoFiltrado)
                $arrAlumnosFiltrados[] = $alumnoFiltrado;
        }

        return $arrAlumnosFiltrados;
    }

    /**
     * Función que devuelve los alumnos de un tutor
     * @param Tutores $tutor
     * @return array
     */
    public function getAlumnosByTutor(Tutores $tutor){
        $query = $this->getEntityManager()->createQuery('SELECT a
                 FROM AppBundle\Entity\Alumno a
                 JOIN a.idTutor as tutor
                 WHERE tutor.id = :tutor');

        $query->setParameter('tutor', $tutor->getId());
        return $query->getResult();
    }


    /**
     * Función que devuelve los alumnos por curso y tutor docente
     * @param $curso
     * @param $tutorD
     * @return array
     */
    public function getAlumnosByCursoYTutorD(Cursos $curso, Profesores $tutorD)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno as a
           JOIN AppBundle\Entity\Profesores as p
           JOIN AppBundle\Entity\Cursos as c
            WHERE c.idProfesor = :tutorD
            and a.idCurso = :curso'
        );

        $query->setParameter('curso', $curso->getId());
        $query->setParameter('tutorD', $tutorD->getId());;
        return $query->getResult();
    }
}
