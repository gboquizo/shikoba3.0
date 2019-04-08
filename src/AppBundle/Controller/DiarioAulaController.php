<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Form\DiarioAulaConvivenciaType;
use AppBundle\Services\CrearSancionHelper;
use AppBundle\Services\DiarioHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DiarioAulaController extends Controller
{
    /**
     * @Route("/diarioAula", name="show_diario")
     * @Method({"GET", "POST"})
     */
    public function showDiario(Request $request)
    {

        if ($request->get('likeFecha') == null) $fecha = new \DateTime();
        else $fecha = \DateTime::createFromFormat('d/m/Y', $request->get('likeFecha'));
        /** @var CrearSancionHelper $crearSancionHelper */
        $crearSancionHelper = $this->get('app.crearSancionHelper');
        if ($request->get('likeHora') == null) $horasElegidas = [$crearSancionHelper->getHoraFromDate($fecha)];
        else $horasElegidas = $request->get('likeHora');

        /** @var DiarioHelper $diarioHelper */
        $diarioHelper = $this->get('app.diarioHelper');
        $horas = CrearSancionHelper::HORAS_CLASE;
        $diarioData = $diarioHelper->getDiarioData($fecha, $horasElegidas, $horas);

        return $this->render(
            'convivencia/diarioAulaConvivencia/diarioAula.html.twig', array(
                'diarioData' => $diarioData,
            )
        );
    }

    /**
     * Función para editar el diarioAulaConvivencia
     * @Route("/modificarDiarioAula/{id}", name="edit_diario")
     * @Method({"GET","POST"})
     * @param DiarioAulaConvivencia $diario diarioAula
     * @param Request $request
     * @return mixed
     */
    public function editDiario(DiarioAulaConvivencia $diario, Request $request)
    {
        $emConvivencia = $this->getDoctrine()->getManager();
        /** @var DiarioHelper $diarioHelper */
        $diarioHelper = $this->get('app.diarioHelper');
        $form = $this->createForm(DiarioAulaConvivenciaType::class, $diario);
        $form->handleRequest($request);
        $recupera = $diarioHelper->diarioRecupera($diario);
        if ($diarioHelper->recuperarPuntos($request))
            return $this->redirectToRoute("edit_diario", array(
                'id' => $diario->getId()));
        if ($form->isSubmitted() && $form->isValid()) {
            $emConvivencia->persist($diario);
            $emConvivencia->flush();
            return $this->redirectToRoute('show_diario');
        }
        return $this->render(
            'convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig', array(
                'form' => $form->createView(),
                'diario' => $diario,
                'recupera' => $recupera
            )
        );
    }
}
