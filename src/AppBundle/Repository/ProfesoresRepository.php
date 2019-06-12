<?php

namespace AppBundle\Repository;

/**
 * ProfesoresRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProfesoresRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Función que permite actualizar un profesor y el curso asignado
     * @param $id
     * @param $grupo
     * @return array
     */
    public function verProfesoresSinCurso()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p.id,p.nombre, p.apellido1, p.apellido2
                    FROM AppBundle\Entity\profesores p
                    where not exists(select c.id from AppBundle\Entity\Cursos c 
                    WHERE c.idTutor = p.id)');
        return $query->getResult();
    }
}
