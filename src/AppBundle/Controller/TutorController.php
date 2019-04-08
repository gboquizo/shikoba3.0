<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Alumno;
use AppBundle\Form\PerfilAlumnoFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\ImportHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class TutorController extends Controller
{

    /**
     * @Route("/tutor", name="tutor")
     */
    public function tutorAction()
    {
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        if (!in_array("ROLE_TUTOR", $this->getUser()->getRoles()))
            return $this->redirectToRoute("index");

//        if (!$alumnoHelper->alumnoExists($this->getUser()))
//            return $this->redirectToRoute('registrarAlumno');

        $tutor = $alumnoHelper->getTutorByUsuario($this->getUser());
        $alumnos = $alumnoHelper->getAlumnosByTutor($tutor);
        return $this->render("convivencia/tutor/alumnoTutor.html.twig", array(
            'alumnos' => $alumnos,
        ));
    }
}

