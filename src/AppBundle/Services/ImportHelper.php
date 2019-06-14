<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 27/04/17
 * Time: 19:30
 */

namespace AppBundle\Services;


use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Usuarios;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\UsuariosRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class ImportHelper
{

    const ARRAY_MAYUS =
        array('Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U', 'Ñ' => 'N');
    const ARRAY_MINUS =
        array('á' => 'a', 'é' => 'e', 'í' => 'e', 'ó' => 'o', 'ú' => 'u', 'ñ' => ',');

    function __construct(EntityManager $em, UserPasswordEncoder $securityEncoder)
    {
        $this->em = $em;
        $this->securityEncoder = $securityEncoder;
    }

    /**
     * Función que importa los alumnos a través de un fichero CSV
     * @param File $file
     */
    function importarAlumnos(File $file)
    {
        ini_set('max_execution_time', 500);
        /** @var CursosRepository $repositoryCurso */
        $repositoryCurso = $this->em->getRepository('AppBundle:Cursos');
        /** @var UsuariosRepository $repositoryUsuarios */
        $repositoryUsuarios = $this->em->getRepository('AppBundle:Usuarios');
        $contadorLineas = 0;
        if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {
            while (($row = fgetcsv($handle)) !== FALSE) {
                if (count($row) > 1) {
                    if ($contadorLineas <= 0) {
                        $contadorLineas++;
                    } else {
                        $alumno = new Alumno();

                        $alumno->setNombre($row[0]);
                        $alumno->setApellido1($row[1]);
                        $alumno->setApellido2($row[2]);

                        /** @var Cursos $curso */
                        $curso = $repositoryCurso->findOneByGrupo($row[3]);
                        if ($curso != null) $alumno->setIdCurso($curso);
                        $alumno->setTelefono($row[4]);
                        $alumno->setEmail($row[5]);

                        $alumno->setDireccion($row[7]);
                        $alumno->setCodigoPostal($row[8]);
                        $alumno->setTutorL1($row[9]);
                        $alumno->setTutorL2($row[10]);
                        $alumno->setTelefonoTL1($row[11]);
                        $alumno->setTelefonoTL2($row[12]);
                        $alumno->setMsgTL1(0);
                        $alumno->setMsgTL2(0);
                        $alumno->setPuntos(0);
                        $alumno->setFoto('');
                        $alumno->setNie($row[6]);
                        $alumno->setPuntosIniciales(0);
                        $user = new Usuarios();
                        $userNombre = mb_substr($alumno->getNombre(), 0, 2) . mb_substr($alumno->getApellido1(), 0, 2) . mb_substr($alumno->getApellido2(), 0, 2);
                        $userNombre = strtr($userNombre, self::ARRAY_MAYUS);
                        $userNombre = strtr($userNombre, self::ARRAY_MINUS);
                        $user->setUsuario(mb_strtolower($userNombre));
                        $contador = 1;
                        while ($repositoryUsuarios->findOneByUsuario($user->getUsuario()) != null) {
                            $user->setUsuario(mb_strtolower($userNombre . "" . $contador));
                            $contador++;
                        }
                        $password = $this->securityEncoder
                            ->encodePassword($user, 'usuario');
                        $user->setPassword($password);
                        $user->setRoles(['ROLE_USER']);
                        $this->setHashUser($user);
                        $this->em->persist($user);
                        $alumno->setIdUsuario($user);
                        $this->em->persist($alumno);
                        $this->em->flush();
                    }
                }
            }
        }
    }

    /**
     * Función que importa los profesores a través de un fichero CSV
     * @param File $file
     */
    function importarProfesor(File $file)
    {
        ini_set('max_execution_time', 300);
        /** @var UsuariosRepository $repositoryUsuarios */
        $repositoryUsuarios = $this->em->getRepository('AppBundle:Usuarios');
        $contadorLineas = 0;
        if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {
            while (($row = fgetcsv($handle)) !== FALSE) {
                if (count($row) > 1) {
                    if ($contadorLineas <= 0) {
                        $contadorLineas++;
                    } else {
                        $profesor = new Profesores();

                        $profesor->setNombre($row[0]);
                        $profesor->setApellido1($row[1]);
                        $profesor->setApellido2($row[2]);
                        $profesor->setTelefono($row[3]);
                        $profesor->setEmail($row[4]);
                        $user = new Usuarios();
                        $userNombre = mb_substr(
                            $profesor->getNombre(), 0, 2) .
                            mb_substr($profesor->getApellido1(), 0, 2) .
                            mb_substr($profesor->getApellido2(), 0, 2);
                        $userNombre = strtr($userNombre, self::ARRAY_MAYUS);
                        $userNombre = strtr($userNombre, self::ARRAY_MINUS);
                        $user->setUsuario(mb_strtolower($userNombre));
                        $contador = 1;
                        while ($repositoryUsuarios->findOneByUsuario($user->getUsuario()) != null) {
                            $user->setUsuario(mb_strtolower($userNombre . "" . $contador));
                            $contador++;
                        }
                        $password = $this->securityEncoder
                            ->encodePassword($user, 'profesor');
                        $user->setPassword($password);
                        $user->setRoles(['ROLE_PROFESOR']);
                        $this->setHashUser($user);
                        $this->em->persist($user);
                        $profesor->setIdUsuario($user);
                        $this->em->persist($profesor);
                        $this->em->flush();
                    }
                }
            }
        }
    }

    /**
     * Función que crea el hash del usuario
     * @param Usuarios $user
     */
    public function setHashUser(Usuarios $user){
        $hash = $this->securityEncoder
            ->encodePassword($user, $user->getUsername() . $user->getId());
        $user->setHash($hash);
    }

}
