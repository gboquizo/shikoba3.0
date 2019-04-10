<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/alumno')) {
            // alumno
            if ('/alumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::alumnoAction',  '_route' => 'alumno',);
            }

            // verAlumno
            if (preg_match('#^/alumno/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showAlumnoAction',));
            }

            // change_image
            if ('/alumnoImage' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::changeProfileImage',  '_route' => 'change_image',);
            }

            if (0 === strpos($pathinfo, '/alumnos')) {
                // show_alumnos
                if ('/alumnos' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::indexAlumnos',  '_route' => 'show_alumnos',);
                }

                // editarAlumno
                if (preg_match('#^/alumnos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::editAlumno',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_security
            if ('/admin/copias' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::securityAction',  '_route' => 'admin_security',);
            }

            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::adminAction',  '_route' => 'admin',);
            }

            // admin_import
            if ('/admin/importAlumno' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importAlumnoAction',  '_route' => 'admin_import',);
            }

            // admin_import_profesor
            if ('/admin/importProfesor' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importProfesorAction',  '_route' => 'admin_import_profesor',);
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // registrarAlumno
            if ('/registrarAlumno' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_registrarAlumno;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::registrarAlumnoAction',  '_route' => 'registrarAlumno',);
            }
            not_registrarAlumno:

            // convivencia_registro
            if ('/registro' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_convivencia_registro;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registroAction',  '_route' => 'convivencia_registro',);
            }
            not_convivencia_registro:

            // recuperarPassword
            if ('/recuperarPassword' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::recuperarPassword',  '_route' => 'recuperarPassword',);
            }

            // reset_password
            if ('/resetPassword' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reset_password;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::resetPassword',  '_route' => 'reset_password',);
            }
            not_reset_password:

        }

        elseif (0 === strpos($pathinfo, '/carnet')) {
            // show_carnets
            if ('/carnets' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_show_carnets;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::showCarnets',  '_route' => 'show_carnets',);
            }
            not_show_carnets:

            // admin_export_carnets
            if ('/carnet/exportCarnet' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportSanciones',  '_route' => 'admin_export_carnets',);
            }

            // export_form_carnets
            if ('/carnet/exportFormCarnets' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::exportCarnets',  '_route' => 'export_form_carnets',);
            }

        }

        // change_password
        if ('/changePassword' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_change_password;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::changePassword',  '_route' => 'change_password',);
        }
        not_change_password:

        if (0 === strpos($pathinfo, '/partes')) {
            // show_partesAlumno
            if (preg_match('#^/partes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesAlumno')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodosPartes',));
            }

            // gestion_partes
            if ('/partes' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_gestion_partes;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PartesController::showGestionPartes',  '_route' => 'gestion_partes',);
            }
            not_gestion_partes:

        }

        elseif (0 === strpos($pathinfo, '/perfil')) {
            // perfil_index
            if ('/perfil' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_perfil_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\PerfilController::indexAction',  '_route' => 'perfil_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'perfil_index'));
                }

                return $ret;
            }
            not_perfil_index:

            // perfil_show
            if (preg_match('#^/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_perfil_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilController::showAction',));
            }
            not_perfil_show:

        }

        elseif (0 === strpos($pathinfo, '/sancion')) {
            if (0 === strpos($pathinfo, '/sanciones')) {
                // show_partesSanciones
                if (preg_match('#^/sanciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_partesSanciones')), array (  '_controller' => 'AppBundle\\Controller\\AlumnoController::mostrarTodasSanciones',));
                }

                // gestion_sanciones
                if ('/sanciones' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_gestion_sanciones;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SancionController::showGestionSanciones',  '_route' => 'gestion_sanciones',);
                }
                not_gestion_sanciones:

            }

            // admin_export_sanciones
            if ('/sancion/exportSanciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSanciones',  '_route' => 'admin_export_sanciones',);
            }

            // export_form_sanciones
            if ('/sancion/exportFormSanciones' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::exportSancionForm',  '_route' => 'export_form_sanciones',);
            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::indexAction',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'index'));
            }

            return $ret;
        }

        // login
        if ('/login' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::loginAction',  '_route' => 'login',);
        }
        not_login:

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::logoutAction',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/diario')) {
            // admin_diario_aula
            if ('/diario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::gestionDiarioAula',  '_route' => 'admin_diario_aula',);
            }

            // show_diario
            if ('/diarioAula' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_show_diario;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::showDiario',  '_route' => 'show_diario',);
            }
            not_show_diario:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // edit_diario
        if (0 === strpos($pathinfo, '/modificarDiarioAula') && preg_match('#^/modificarDiarioAula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_diario;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_diario')), array (  '_controller' => 'AppBundle\\Controller\\DiarioAulaController::editDiario',));
        }
        not_edit_diario:

        if (0 === strpos($pathinfo, '/n')) {
            if (0 === strpos($pathinfo, '/noticias')) {
                // noticias
                if ('/noticias' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_noticias;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NoticiasController::showNoticias',  '_route' => 'noticias',);
                }
                not_noticias:

                // nuevaNoticia
                if ('/noticiasForm' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_nuevaNoticia;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NoticiasController::showNoticiasForm',  '_route' => 'nuevaNoticia',);
                }
                not_nuevaNoticia:

                // borrar_noticia
                if (0 === strpos($pathinfo, '/noticias/borrarNoticia') && preg_match('#^/noticias/borrarNoticia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_borrar_noticia;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_noticia')), array (  '_controller' => 'AppBundle\\Controller\\NoticiasController::deleteNoticias',));
                }
                not_borrar_noticia:

            }

            // nuevoParte
            if ('/nuevoParte' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_nuevoParte;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PartesController::crearParteAction',  '_route' => 'nuevoParte',);
            }
            not_nuevoParte:

            // nueva_sancion
            if ('/nuevaSancion' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_nueva_sancion;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SancionController::crearSancionAction',  '_route' => 'nueva_sancion',);
            }
            not_nueva_sancion:

        }

        // printParte
        if ('/imprimirParte' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_printParte;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::printParteAction',  '_route' => 'printParte',);
        }
        not_printParte:

        // borrar_parte
        if (0 === strpos($pathinfo, '/borrarParte') && preg_match('#^/borrarParte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_borrar_parte;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_parte')), array (  '_controller' => 'AppBundle\\Controller\\PartesController::removeParte',));
        }
        not_borrar_parte:

        // borrar_sancion
        if (0 === strpos($pathinfo, '/borrarSancion') && preg_match('#^/borrarSancion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_borrar_sancion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_sancion')), array (  '_controller' => 'AppBundle\\Controller\\SancionController::removeSancion',));
        }
        not_borrar_sancion:

        // admin_export_partes
        if ('/exportPartes' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportPartes',  '_route' => 'admin_export_partes',);
        }

        // export_form_partes
        if ('/exportFormPartes' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PartesController::exportForm',  '_route' => 'export_form_partes',);
        }

        // tutor
        if ('/tutor' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TutorController::tutorAction',  '_route' => 'tutor',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
