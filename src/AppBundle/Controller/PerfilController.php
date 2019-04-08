<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Perfil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Perfil controller.
 *
 * @Route("perfil")
 */
class PerfilController extends Controller
{
    /**
     * Lists all perfil entities.
     *
     * @Route("/", name="perfil_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $perfils = $em->getRepository('AppBundle:Perfil')->findAll();

        return $this->render('perfil/index.html.twig', array(
            'perfils' => $perfils,
        ));
    }

    /**
     * Finds and displays a perfil entity.
     *
     * @Route("/{id}", name="perfil_show")
     * @Method("GET")
     */
    public function showAction(Perfil $perfil)
    {

        return $this->render('perfil/show.html.twig', array(
            'perfil' => $perfil,
        ));
    }
}
