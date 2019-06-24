<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: NoticiasController.php
 * @Updated: 2019
 * @Description: Controlador de las noticias.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cursos;
use AppBundle\Entity\Noticias;
use AppBundle\Repository\CursosRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\NoticiasRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class NoticiasController.
 */
class NoticiasController extends Controller
{
    /**
     * Permite mostrar las noticias.
     * @Route("/noticias", name="noticias")
     * @Method({"GET", "POST"})
     * @return Response la vista a renderizar
     */
    public function showNoticias()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository('AppBundle:Noticias');

        $noticias = $repositoryNoticias->getNoticias();

        return $this->render('convivencia/noticias/noticias.html.twig', array(
            'noticias' => $noticias,
            'user' => $this->getUser(),
        ));
    }

    /**
     * Muestra el formulario de las noticias.
     * @Route("/noticiasForm", name="nuevaNoticia")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a realizar
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function showNoticiasForm(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');

        $cursos = $repositoryACursos->getCursosGroupByCursos2();

        if (!empty($request->query->get('fechaFinal')) && !empty($request->query->get('puntos'))
            && !empty($request->query->get('cursos'))) {
            $cursosIds = $request->query->get('cursos');

            foreach ($cursosIds as $key => $value) {
                $noticia = new Noticias();
                $curso = $repositoryACursos->findOneById($value);

                $noticia->setIdCurso($curso);

                $noticia->setNoticia_texto($request->query->get('editor1'));
                $noticia->setPuntos($request->query->get('puntos')[0]);

                $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
                $noticia->setFechaInicio($fechaNoticia);

                $fechaNoticia = \DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
                $noticia->setFechaFinal($fechaNoticia);

                $em->persist($noticia);
                $em->flush();
            }
            return $this->redirectToRoute('noticias');
        }
        return $this->render('convivencia/noticias/noticiasForm.html.twig', array(
            'cursos' => $cursos,
            'user' => $this->getUser(),
        ));
    }

    /**
     * Permite borrar una noticia.
     * @Route("/noticias/borrarNoticia/{id}", name="borrar_noticia")
     * @Method({"GET", "POST"})
     * @param Noticias $noticia la noticia a borrar
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function deleteNoticias(Noticias $noticia)
    {
        try {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticia);
            $em->flush();
            $this->addFlash('noticia', 'Noticia eliminada correctamente');
        } catch (Exception $e) {
            $this->addFlash('noticiaError', 'No se ha podido eliminar la noticia');
        }

        return $this->redirectToRoute('noticias');
    }

    /**
     * Permite editar una noticia.
     * @Route("/noticias/editNoticia/{id}", name="editNoticia")
     * @Method({"GET", "POST"})
     * @param Noticias $noticia la noticia a editar, Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function editNoticia(Noticias $noticia, Request $request)
    {
        $id = $noticia->getId();

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository('AppBundle:Noticias');

        /** @var Cursos $cursos */
        $cursos = $repositoryACursos->getCursosGroupByCursos2();

        $noticia = $repositoryNoticias->getNoticia($id);

        if (!empty($request->query->get('fechaFinal')) && !empty($request->query->get('puntos'))
            && !empty($request->query->get('cursos'))) {
            $fechaF = DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
            $fechaI = DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
            $puntos = $request->query->get('puntos');
            $curso = $request->query->get('cursos');
            $editor1 = $request->query->get('editor1');

            $repositoryNoticias->updateNoticias($id, $curso, $puntos, $fechaI, $fechaF, $editor1);

            return $this->redirectToRoute('noticias');
        }

        return $this->render('convivencia/noticias/noticiasForm.html.twig', array(
            'cursos' => $cursos,
            'noticia' => $noticia,
            'user' => $this->getUser(),
        ));
    }
}
