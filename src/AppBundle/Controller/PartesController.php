<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Conductas;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Sanciones;
use AppBundle\Entity\TipoParte;
use AppBundle\Form\ParteExportFormType;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\ProfesoresRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Repository\ConductasRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\PartesHelper;
use AppBundle\Services\SmsHelper;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PartesController extends Controller
{

    const ESTADO_INICIADO = 'Iniciado';

    /**
     * @Route("/partes", name="gestion_partes")
     * @Method({"GET", "POST"})
     */
    public function showGestionPartes(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesLike($request->get('like'), true);
            else
                $query = $repositoryPartes->getPartesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesOrdenados(true);
            else
                $query = $repositoryPartes->getPartesOrdenados();
        }

        $partes = $query;
        return $this->render('convivencia/partes/partes.html.twig', array(
            'partes' => $partes,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/nuevoParte", name="nuevoParte")
     * @Method({"GET", "POST"})
     */
    public function crearParteAction(Request $request)
    {
        $recupera = false;
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        /** @var PartesHelper $parteHelper */
        $parteHelper = $this->get('app.partesHelper');
        /** @var SmsHelper $smsHelper */
        $smsHelper = $this->get('app.smsHelper');
        $repositoryAccionPartes = $em->getRepository('AppBundle:AccionEstadoParte');
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var ConductasRepository $repositoryAConductas */
        $repositoryAConductas = $em->getRepository('AppBundle:Conductas');
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();
        /** @var Conductas $conductas */
        $conductas = $repositoryAConductas->getConductas();
        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $parte = $parteHelper->getParteFromRequest($request);
        if ($request->query->has('idParte')) {
            if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                    in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
                $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
            )
                return $this->redirectToRoute('index');
            $recupera = $parteHelper->parteRecupera($parte);
        }
        if ($parteHelper->recuperarPuntos($request) ||
            $parteHelper->changeEstado($request, $parte)
        )
            return $this->redirectToRoute("nuevoParte", array(
                'idParte' => $parte->getId()));

        if (in_array('ROLE_PROFESOR', $this->getUser()->getRoles()))
            $compound = [$alumnos, $parteHelper->getProfesorByUser($this->getUser())];
        else
            $compound = [$alumnos, $parteHelper->getAllProfesores()];

        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $compound,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fechaParte = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $parte->setFecha($fechaParte);
            $em->persist($parte);
            $em->flush();

            //Comprobacion del checkbox de envio del sms
            if ( $request->get('envioSMS') != null ) {
              $telefonos = array();

              //Compruebo si esta activo el envio de sms a cada tutor y agrego su telefono
              if ( $parte->getIdAlumno()->getMsgTL1() ) {
                $telefonos[] = $parte->getIdAlumno()->getTelefonoTL1();
              }
              if ( $parte->getIdAlumno()->getMsgTL2() ) {
                $telefonos[] = $parte->getIdAlumno()->getTelefonoTL2();
              }

              $smsHelper->sendSms( $telefonos, $parte->getIdAlumno()->getNombreCompleto() . '. ' . $parte->getDescripcion() );
            }

            $parteHelper->createSancionFromRequest($request, $parte);
            return $this->redirectToRoute("gestion_partes");
        }

        $accion = $repositoryAccionPartes->findOneByEstado($parte->getIdEstado());
        $sanciones = $repositorySanciones->getSancionesByPartes($parte);

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
            'accion' => $accion,
            'parte' => $parte,
            'sanciones' => $sanciones,
            'conductas' => $conductas
        ));
    }
    /**
     * @Route("/imprimirParte", name="printParte")
     * @Method({"GET", "POST"})
     */
    public function printParteAction(Request $request)
    {
        /** @var PartesHelper $parteHelper */
        $parteHelper = $this->get('app.partesHelper');
        $parte = $parteHelper->getParteFromRequest($request);

        $html= $this->renderView('convivencia/partes/imprimirParte.html.twig', array(
            'partes' => $parte,
        ));
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size','LETTER');
        $snappy->setOption('encoding', 'UTF-8');
        $titulo = $parte->getIdAlumno()->getApellido1().$parte->getIdAlumno()->getApellido2().$parte->getIdAlumno()->getNombre();
        $filename = 'Parte'.$titulo;
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf;',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     * @Route("/borrarParte/{id}", name="borrar_parte")
     * @Method({"GET"})
     */
    public function removeParte(Partes $parte)
    {
        if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
            $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
        )
            return $this->redirectToRoute('index');

        $em = $this->getDoctrine()->getEntityManager();
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parte);
            $sanciones = $repositorySanciones->getSancionesByPartes($parte);
            foreach ($sanciones as $sancion)
                $em->remove($sancion);
            $em->flush();
            $this->addFlash("parte", "Se ha eliminado correctamente");
        } catch (Exception $e) {
            $this->addFlash("parteError", "No se ha podido eliminar la sanción");
        }
        return $this->redirectToRoute("gestion_partes");
    }

    /**
     * @Route("/exportPartes", name="admin_export_partes")
     */
    public function exportPartes(Request $request)
    {
        try {
            /** @var EntityManager $em */
            $em = $this->get('doctrine.orm.entity_manager');
            $alumnosSeleccionados = $request->get('alumnos');
            $cursoSeleccionado = $request->get('curso');
            $profesoresSeleccionados = $request->get('profesores');
            $fechaSeleccionada = $request->get('fecha');
            /** @var AlumnoRepository $repositoryAlumnos */
            $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
            $repositoryCursos = $em->getRepository('AppBundle:Cursos');
            /** @var ProfesoresRepository $repositoryProfesores */
            $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
            if($alumnosSeleccionados == "Todos"){
                $alumnos = $repositoryAlumnos->findAll();
            }
            else{
                $alumnos = $repositoryAlumnos->findById($alumnosSeleccionados);
            }
            if($cursoSeleccionado == "Todos"){
            	$curso = $repositoryCursos->findAll();
            }
            else{
            	$curso = $repositoryCursos->findById($cursoSeleccionado);
            }
            if($profesoresSeleccionados == "Todos"){
                $profesores = $repositoryProfesores->findAll();
            }
            else{
                $profesores = $repositoryProfesores->findById($profesoresSeleccionados);
            }
            /** @var PartesRepository $repositoryPartes */
            $repositoryPartes = $em->getRepository('AppBundle:Partes');
            $data = $repositoryPartes->getPartesExportar($fechaSeleccionada, $alumnos, $profesores, $curso);
            $arrData = [];
            $arrData[] = ['Id', 'Fecha', 'Descripción', 'Tareas', 'Hora Salida Aula', 'Hora Llegada Jefatura', 'Formato', 'Observación', 'Puntos', 'Estado', 'Tipo', 'Alumno', 'Profesor', 'Recupera Punto', 'Fecha Confirmacion', 'Fecha Comunicación'];
            foreach ($data as $parte) {
                $parteArray = (array)$parte;
                $parteCsv = [];
                foreach ($parteArray as $parteValue)
                    if ($parteValue instanceof Profesores || $parteValue instanceof Alumno)
                        $parteCsv[] = $parteValue->getNombreCompleto();
                    elseif ($parteValue instanceof TipoParte)
                        $parteCsv[] = $parteValue->getTipo();
                    elseif ($parteValue instanceof EstadosParte)
                        $parteCsv[] = $parteValue->getEstado();
                    elseif ($parteValue instanceof \DateTime) {
                        $year = $parteValue->format('Y');
                        if ($parteValue == null)
                            $fecha = "Sin fecha";
                        elseif ($year == '1970')
                            $fecha = $parteValue->format('H:i:s');
                        else
                            $fecha = $parteValue->format('Y-m-d H:i:s');
                        $parteCsv[] = $fecha;
                    } elseif (!$parteValue instanceof PersistentCollection)
                        $parteCsv[] = $parteValue;
                $arrData[$parte->getId()] = $parteCsv;
            }
            $response = new CsvResponse($arrData, 200);
            $response->setFilename("Partes.xls");
            return $response;
        } catch (\Exception $e) {
            $this->addFlash('exportarError', 'No se ha podido exportar');
            return $this->redirectToRoute('export_form_partes');
        }
    }

    /**
     * @Route("/exportFormPartes", name="export_form_partes")
     */
    public function exportForm()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
        $repositoryCursos = $em->GetRepository('AppBundle:Cursos');
        /** @var ProfesoresRepository $repositoryProfesores */
        $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
        $alumnos = $repositoryAlumnos->findAll();
        $cursos = $repositoryCursos->findAll();
        $profesores = $repositoryProfesores->findAll();

        return $this->render('convivencia/exportPartes.html.twig', array(
            'alumnos' => $alumnos,
            'profesores' => $profesores,
            'cursos' => $cursos
        ));
    }

    /**
     * @Route("/informePartesAlumno", name="partes_alumno_informe")
     */
    public function partesAlumnoInforme(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');
        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $fomateadaI = date("d/m/Y", strtotime($fechaI));
        $fomateadaF = date("d/m/Y", strtotime($fechaF));
        $data = $repositoryPartes->getInformePartesAlumnos("$fomateadaI", "$fomateadaF");

        return $this->render('convivencia/informes/partesAlumnoInforme.html.twig', array(
            'data' => $data
        ));
    }

    /**
     * @Route("/informePartesProfesor", name="partes_profesor_informe")
     */
    public function partesProfesorInforme(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $fomateadaI = date("d/m/Y", strtotime($fechaI));
        $fomateadaF = date("d/m/Y", strtotime($fechaF));
        $data = $repositoryPartes->getInformePartesProfesorado("$fomateadaI", "$fomateadaF");

        return $this->render('convivencia/informes/partesProfesorInforme.html.twig', array(
            'data' => $data
        ));
    }

    /**
     * @Route("/informePartesGrupo", name="partes_grupos_informe")
     */
    public function partesGruposInforme(Request $request)
    {
     $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $fomateadaI = date("d/m/Y", strtotime($fechaI));
        $fomateadaF = date("d/m/Y", strtotime($fechaF));
        $data = $repositoryPartes->getInformePartesGrupo("$fomateadaI", "$fomateadaF");

        return $this->render('convivencia/informes/partesGruposInforme.html.twig', array(
            'data' => $data
        ));
    }
}
