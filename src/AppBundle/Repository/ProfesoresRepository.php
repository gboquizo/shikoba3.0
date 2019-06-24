<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ProfesoresRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de los profesores.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProfesoresRepository.
 */
class ProfesoresRepository extends EntityRepository
{
    /**
     * Función que permite actualizar un profesor y el curso asignado.
     * @return array
     */
    public function verProfesoresSinCurso()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT p.id,p.nombre, p.apellido1, p.apellido2
                    FROM AppBundle\Entity\profesores p
                    where not exists(select c.id from AppBundle\Entity\Cursos c 
                    WHERE c.idTutor = p.id) ORDER BY p.apellido1 ASC'
        );
        return $query->getResult();
    }
}
