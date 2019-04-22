<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\ImportFormType;
use AppBundle\Form\PerfilAlumnoFormType;
use AppBundle\Form\AlumnoType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\NoticiasRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\ImportHelper;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AlumnoController extends Controller
{

    /**
     * @Route("/alumno", name="alumno")
     */
    public function alumnoAction()
    {

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())
            || in_array("ROLE_TUTOR", $this->getUser()->getRoles())
            || in_array("ROLE_PROFESOR", $this->getUser()->getRoles())
            || in_array("ROLE_CONVIVENCIA", $this->getUser()->getRoles())
        )
            return $this->redirectToRoute("index");

        if (!$alumnoHelper->alumnoExists($this->getUser()))
            return $this->redirectToRoute('registrarAlumno');

        $userData = $alumnoHelper->getUserData(
            $alumnoHelper->getAlumnoLogueado($this->getUser()), true);
        $em = $this->getDoctrine()->getManager();
        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository("AppBundle:Noticias");
        $noticias = $repositoryNoticias->getNoticiasCurso($userData->getAlumno()->getIdCurso(),$userData->getAlumno()->getPuntos());

        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumnoData' => $userData,
                'noticia' => $noticias,
            )
        );
    }

    /**
     * @Route("/alumno/{id}", name="verAlumno", requirements={"id": "\d+"})
     */
    public function showAlumnoAction(Alumno $alumno)
    {
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles())
            && !in_array("ROLE_CONVIVENCIA", $this->getUser()->getRoles())
            && !in_array("ROLE_TUTOR", $this->getUser()->getRoles())
            && !in_array("ROLE_PROFESOR", $this->getUser()->getRoles())
        )
            return $this->redirectToRoute("index");

        if (in_array("ROLE_TUTOR", $this->getUser()->getRoles()) &&
            !$alumnoHelper->isTutorAlumno($alumno, $alumnoHelper->getTutorByUsuario($this->getUser()))
        )
            return $this->redirectToRoute("index");
        $userData = $alumnoHelper->getUserData($alumno, true);

        $em = $this->getDoctrine()->getManager();

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository("AppBundle:Noticias");
        $noticias = $repositoryNoticias->getNoticiasCurso($userData->getAlumno()->getIdCurso(),$userData->getAlumno()->getPuntos());

        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumnoData' => $userData,
                'noticia' => $noticias,
                'userAdmin' => $this->getUser(),
            )
        );
    }

    /**
     * @Route("/tutoria", name="show_alumnosgrupo")
     */
    public function showAlumnosGrupoAction( Request $request ){

        if (
            !in_array("ROLE_ADMIN",         $this->getUser()->getRoles())  &&
            !in_array("ROLE_CONVIVENCIA",   $this->getUser()->getRoles())  &&
            !in_array("ROLE_PROFESOR",      $this->getUser()->getRoles())  &&
            !in_array("ROLE_TUTOR_DOCENTE", $this->getUser()->getRoles())
        )
            return $this->redirectToRoute("index");

        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository("AppBundle:Alumno");
        if ($request->query->has('like')) {
            $alumnos = $repositoryAlumnos->getAlumnosLike($request->get('like'));
        } else {
            $alumnos = $repositoryAlumnos->findAll();
        }

        return $this->render('convivencia/alumno/listaAlumnos.html.twig', array(
            'alumnos' => $alumnos,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/registrarAlumno", name="registrarAlumno")
     * @Method({"GET", "POST"})
     */
    public function registrarAlumnoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if ($alumnoHelper->alumnoExists($this->getUser()))
            $alumno = $alumnoHelper->getAlumnoLogueado($this->getUser());
        else
            $alumno = new Alumno();
        $form = $this->createForm(PerfilAlumnoFormType::class, $alumno);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$alumnoHelper->alumnoExists($this->getUser())) {
                $alumno->setIdUsuario($this->getUser());
                $alumno->setPuntos(12);
            } else
                $alumno->setPuntos($alumnoHelper->getPuntosAlumnoLogin($this->getUser()));
            $em->persist($alumno);
            $em->flush();
            return $this->redirectToRoute('alumno');
        }

//        return $this->render('convivencia/alumno/registroAlumno.html.twig', array(
        return $this->render('convivencia/index.html.twig', array(
            'alumno' => $this->getUser(),
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/carnets", name="show_carnets")
     * @Method({"GET", "POST"})
     */
    public function showCarnets(Request $request)
    {
        $emConvivencia = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $emConvivencia->getRepository('AppBundle:Alumno');
        if ($request->get('like') != null AND $request->get('like') != '')
            $alumnos = $repositoryAlumnos->getAlumnosLike($request->get('like'));
        else
            $alumnos = $repositoryAlumnos->getAlumnoOrderByPuntos();

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if ($request->get('puntosFiltro') != null)
            $arrayCarnetData = $alumnoHelper->filtrarPorPuntos($request->get('puntosFiltro'), $alumnos);
        else
            $arrayCarnetData = $alumnoHelper->getArrayCarnetsData($alumnos);

        return $this->render('convivencia/alumno/carnets.html.twig', array(
//            'arrayCarnetData' => $arrayCarnetDataPaginator,
            'arrayCarnetData' => $arrayCarnetData,
            'puntosSelect' => AlumnoHelper::SELECT_PUNTOS,
        ));
    }

    /**
     * @Route("/partes/{id}", name="show_partesAlumno")
     */
    public function mostrarTodosPartes(Alumno $alumno)
    {

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if (!$this->comprobarIsThisAlumno($alumno)) return $this->redirectToRoute('index');

        $partes = $alumnoHelper->getPartesByAlumno($alumno, true, true);

        return $this->render('convivencia/alumno/informe.html.twig', array(
            'partes' => $partes,
        ));
    }

    /**
     * @Route("/sanciones/{id}", name="show_partesSanciones")
     */
    public function mostrarTodasSanciones(Alumno $alumno)
    {

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if (!$this->comprobarIsThisAlumno($alumno)) return $this->redirectToRoute('index');

        $sanciones = $alumnoHelper->getSancionesByAlumno($alumno, true, true);

        return $this->render('convivencia/alumno/informe.html.twig', array(
            'sanciones' => $sanciones,
        ));
    }

    /**
     * Función que comprueba que el el usuario sea el alumno pasado por parámetro
     * @param Alumno $alumno
     * @return bool
     */
    public function comprobarIsThisAlumno(Alumno $alumno)
    {
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        $thisAlumno = $alumnoHelper->getAlumnoLogueado($this->getUser());
        $isThisAlumno = false;
        if ($thisAlumno != null && $thisAlumno->getId() == $alumno->getId())
            $isThisAlumno = true;
        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles()) && $isThisAlumno == false)
            return false;
        return true;
    }

    /**
     * @Route("/alumnoImage", name="change_image")
     */
    public function changeProfileImage(Request $request)
    {
        if (!$request->isMethod('POST') || !in_array("ROLE_USER", $this->getUser()->getRoles()))
            return $this->redirectToRoute("index");

        try {
            /** @var UploadedFile $file */
            $file = $request->files->get('file');
            if (!is_array(getimagesize($file))) {
                $this->addFlash('alumnoError', 'No es una imagen');
                return $this->redirectToRoute("index");
            }

            /** @var EntityManager $em */
            $em = $this->get('doctrine.orm.entity_manager');
            /** @var AlumnoHelper $alumnoHelper */
            $alumnoHelper = $this->get('app.alumnoHelper');
            /** @var Alumno $alumno */
            $alumno = $alumnoHelper->getAlumnoLogueado($this->getUser());
            $fecha = new \DateTime();
            $filename = $fecha->getTimestamp();
            $filename .= $file->getClientOriginalName();
            $dir = __DIR__ . '/../../../web/img/alumnos';
            $file->move($dir, $filename);
            $alumno->setFoto($filename);
            $em->persist($alumno);
            $em->flush();
            $this->addFlash('alumno', 'La imagen ha sido subida con éxito');
        } catch (\Exception $e) {
            $this->addFlash('alumnoError', 'La imagen no se ha podido subir');
        }
        return $this->redirectToRoute("index");
    }

    /**
     * @Route("/carnet/exportCarnet", name="admin_export_carnets")
     */
    public function exportSanciones(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->get('doctrine.orm.entity_manager');
        $alumnosSeleccionados = $request->get('alumnos');
        $cursosSeleccionados = $request->get('cursos');
        $puntos = $request->get('puntosFiltro');
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
        /** @var CursosRepository $repositoryCursos */
        $repositoryCursos = $em->getRepository('AppBundle:Cursos');
        if ($alumnosSeleccionados == "Todos") {
            $alumnos = $repositoryAlumnos->findAll();
        } else {
            $alumnos = $repositoryAlumnos->findById($alumnosSeleccionados);
        }

        if ($cursosSeleccionados == "Todos") {
            $cursos = $repositoryCursos->findAll();
        } else {
            $cursos = $repositoryCursos->findById($cursosSeleccionados);
        }

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        $alumnosPuntos = $alumnoHelper->filtrarPorPuntos($puntos, $alumnos, false);
        $alumnosCursos = $alumnoHelper->getAlumnosByCursos($cursos);
        $data = [];
        foreach ($alumnosPuntos as $alumnosPunto)
            foreach ($alumnosCursos as $alumnosCurso)
                if ($alumnosPunto->getId() == $alumnosCurso->getId())
                    $data[] = $alumnosCurso;

        $arrData = [];
        $arrData[] = ['Id', 'Alumno', 'Puntos', 'Grupo'];
        /** @var Alumno $carnet */
        foreach ($data as $carnet) {
            $carnetCsv = [];
            $carnetCsv[] = $carnet->getId();
            $carnetCsv[] = $carnet->getNombreCompleto();
            $carnetCsv[] = $carnet->getPuntos();
            $carnetCsv[] = $carnet->getIdCurso()->getGrupo();
            $arrData[$carnet->getId()] = $carnetCsv;
        }
        $response = new CsvResponse($arrData, 200);
        $response->setFilename("Carnets.csv");
        return $response;
    }


    /**
     * @Route("/carnet/exportFormCarnets", name="export_form_carnets")
     */
    public function exportCarnets()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
        /** @var CursosRepository $repositoryCursos */
        $repositoryCursos = $em->getRepository('AppBundle:Cursos');
        $alumnos = $repositoryAlumnos->findAll();
        $cursos = $repositoryCursos->findAll();

        return $this->render('convivencia/exportCarnets.html.twig', array(
            'alumnos' => $alumnos,
            'cursos' => $cursos,
            'puntosSelect' => AlumnoHelper::SELECT_PUNTOS,
        ));
    }


    /**
     * @Route("/alumnos", name="show_alumnos")
     */
    public function indexAlumnos( Request $request ){

      if (
        !in_array("ROLE_ADMIN",         $this->getUser()->getRoles())  &&
        !in_array("ROLE_CONVIVENCIA",   $this->getUser()->getRoles())  &&
        !in_array("ROLE_PROFESOR",      $this->getUser()->getRoles())  &&
        !in_array("ROLE_TUTOR_DOCENTE", $this->getUser()->getRoles())
      )
        return $this->redirectToRoute("index");

        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository("AppBundle:Alumno");
        if ($request->query->has('like')) {
          $alumnos = $repositoryAlumnos->getAlumnosLike($request->get('like'));
        } else {
          //$alumnos = $repositoryAlumnos->findAll();
            $alumnos = $repositoryAlumnos->getAlumnosByCursoYTutorD();
        }

        return $this->render('convivencia/alumno/listaAlumnos.html.twig', array(
            'alumnos' => $alumnos,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/alumnos/{id}", name="editarAlumno", requirements={"id": "\d+"})
     */
    public function editAlumno(Request $request){

      if (
        !in_array("ROLE_ADMIN",         $this->getUser()->getRoles())  &&
        !in_array("ROLE_CONVIVENCIA",   $this->getUser()->getRoles())  &&
        !in_array("ROLE_PROFESOR",      $this->getUser()->getRoles())  &&
        !in_array("ROLE_TUTOR_DOCENTE", $this->getUser()->getRoles())
      )
        return $this->redirectToRoute("index");

      $em = $this->getDoctrine()->getManager();
      /** @var AlumnoRepository $repositoryAlumnos */
      $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
      $alumno = $repositoryAlumnos->getAlumno( $request->get('id') );
      $form = $this->createForm(AlumnoType::class,$alumno);

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

        try {
          $em->persist($alumno);
          $em->flush();

          $this->addFlash("alumno", "Se ha modificado correctamente");
        } catch (\Exception $e) {
          $this->addFlash("alumnoError", $e);
        }
          return $this->redirectToRoute("show_alumnos");
      }

      return $this->render('convivencia/alumno/modificarAlumno.html.twig', array(
        'form' => $form->createView()
      ));
    }


}
