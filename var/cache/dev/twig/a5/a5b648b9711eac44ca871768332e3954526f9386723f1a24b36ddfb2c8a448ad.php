<?php

/* convivencia/navegacion.html.twig */
class __TwigTemplate_4010dc8cdbd8b85bac9d8842f48403eed19a40faee7a54a42614d8120f93d304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8688c03ce3f1edc4b802a64cce7ad4972ba49f54c42930e6b25bb34168887f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8688c03ce3f1edc4b802a64cce7ad4972ba49f54c42930e6b25bb34168887f64->enter($__internal_8688c03ce3f1edc4b802a64cce7ad4972ba49f54c42930e6b25bb34168887f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/navegacion.html.twig"));

        $__internal_c6f8703c412b4d2ec440a8d5e950700fcb436476b129e747314d37cdca827856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f8703c412b4d2ec440a8d5e950700fcb436476b129e747314d37cdca827856->enter($__internal_c6f8703c412b4d2ec440a8d5e950700fcb436476b129e747314d37cdca827856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/navegacion.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_8688c03ce3f1edc4b802a64cce7ad4972ba49f54c42930e6b25bb34168887f64->leave($__internal_8688c03ce3f1edc4b802a64cce7ad4972ba49f54c42930e6b25bb34168887f64_prof);

        
        $__internal_c6f8703c412b4d2ec440a8d5e950700fcb436476b129e747314d37cdca827856->leave($__internal_c6f8703c412b4d2ec440a8d5e950700fcb436476b129e747314d37cdca827856_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_7fa49234dff588738d1f7249fe23a6247c4e00b729a29a275dbda5ec9529e138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa49234dff588738d1f7249fe23a6247c4e00b729a29a275dbda5ec9529e138->enter($__internal_7fa49234dff588738d1f7249fe23a6247c4e00b729a29a275dbda5ec9529e138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8f9e4f2171ef2824c75ec9745dc0c184f79ec7e3774997192ecc1843d23ea049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9e4f2171ef2824c75ec9745dc0c184f79ec7e3774997192ecc1843d23ea049->enter($__internal_8f9e4f2171ef2824c75ec9745dc0c184f79ec7e3774997192ecc1843d23ea049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header>
            <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
                <nav>
                    <div class=\"nav-wrapper blue darken-3 row\">

                        <div class=\"col s12 center hide-on-large-only\" id=\"nav_mob\">
                            <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"right\"><img src=\"/img/logo3.png\" alt=\"\"></a>
                            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse left\"><i
                                        class=\"material-icons\">menu</i></a>
                            <ul id=\"slide-out\" class=\"side-nav\">
                                <li>
                                    <div class=\"userView\">
                                        <div class=\"background center\">
                                        </div>
                                        <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"><img class=\" center centro\" src=\"/img/logo3.png\"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"divider\"></div>

                                    ";
            // line 23
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 24
                echo "                                <li><a class=\"waves-effect waves-blue\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\">Carnets</a>
                                </li>
                                <li><a class=\"waves-effect waves-blue\" href=\"";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\">Partes</a>
                                </li>
                                <li><a class=\"waves-effect waves-blue\"
                                       href=\"";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\">Medidas</a></li>
                                <li><a class=\"waves-effect waves-blue\" href=\"";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                echo "\">Diario</a></li>

                                ";
                // line 32
                if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR_DOCENTE"))) {
                    // line 33
                    echo "                                  <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
                    // line 34
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnos</a>
                                  </li>
                                ";
                }
                // line 37
                echo "
                                <div class=\"divider\"></div>
                                ";
                // line 39
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                    // line 40
                    echo "                                    <li><a class=\"waves-effect waves-blue\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
                    echo "\">Noticias</a>
                                    </li>
                                ";
                }
                // line 43
                echo "                                ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 44
                    echo "                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Administración<i
                                                            class=\"material-icons right\">arrow_drop_down</i></a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li><a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 52
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\">Alumnado</a>
                                                        </li>
                                                        <li><a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 55
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                                            >Profesorado</a>
                                                        </li>
                                                        ";
                    // line 62
                    echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                ";
                }
                // line 68
                echo "                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 69
                echo "                                    ";
                // line 70
                echo "                                    ";
                // line 71
                echo "                                    ";
                // line 72
                echo "                                    ";
                // line 73
                echo "                                ";
            }
            // line 74
            echo "                                <div class=\"divider\"></div>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\"
                                    >Cambiar
                                        Contraseña</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
                                </li>
                                <div class=\"divider\"></div>
                                <li style=\"color: rgba(0,0,0,0.87);font-weight: 500;\">Perfil: ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>

                            </ul>
                        </div>
                        <div class=\"col l8 left hide-on-med-and-down\">
                            <ul class=\"left\">

                                <li>
                                    <a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"ancla centro\">
                                        <img id=\"img_nav\" src=\"/img/logo3.png\" alt=\"\">
                                    </a>
                                </li>
                                ";
            // line 97
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 98
                echo "
                                    <li><a href=\"";
                // line 99
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\">Carnets</a></li>
                                    <li><a href=\"";
                // line 100
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\">Partes</a></li>
                                    <li><a href=\"";
                // line 101
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\">Medidas</a></li>
                                    <li><a href=\"";
                // line 102
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                echo "\">Diario</a></li>

                                    ";
                // line 104
                if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR_DOCENTE"))) {
                    // line 105
                    echo "                                      <li>
                                        <a class=\"waves-effect waves-blue\" href=\"";
                    // line 106
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnos</a>
                                      </li>
                                    ";
                }
                // line 109
                echo "
                                    ";
                // line 110
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                    // line 111
                    echo "                                        <li><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
                    echo "\">Noticias</a></li>

                                    ";
                }
                // line 114
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 115
                    echo "                                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Administración<i
                                                        class=\"material-icons right\">keyboard_arrow_right</i></a></li>
                                        <ul id=\"dropdown1\" class=\"dropdown-content\">
                                            <li><a href=\"";
                    // line 118
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\"
                                                   class=\"blue darken-2 white-text\">Alumnado</a>
                                            </li>
                                            <li><a href=\"";
                    // line 121
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                                   class=\"blue darken-2 white-text\">Profesorado</a>
                                            </li>
                                           ";
                    // line 127
                    echo "                                        </ul>

                                    ";
                }
                // line 130
                echo "
                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 132
                echo "                                    ";
                // line 137
                echo "                                    ";
                // line 138
                echo "                                    ";
                // line 139
                echo "                                ";
            }
            // line 140
            echo "                            </ul>
                        </div>

                        <div class=\"col l4 right hide-on-med-and-down\">
                            <ul class=\"right\">
                                <li>
                                    <a href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\"
                                    >Cambiar
                                        Contraseña</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
                                </li>
                                <li  style=\"padding: 0 5px;\">Perfil: ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

    ";
        }
        
        $__internal_8f9e4f2171ef2824c75ec9745dc0c184f79ec7e3774997192ecc1843d23ea049->leave($__internal_8f9e4f2171ef2824c75ec9745dc0c184f79ec7e3774997192ecc1843d23ea049_prof);

        
        $__internal_7fa49234dff588738d1f7249fe23a6247c4e00b729a29a275dbda5ec9529e138->leave($__internal_7fa49234dff588738d1f7249fe23a6247c4e00b729a29a275dbda5ec9529e138_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/navegacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  310 => 153,  305 => 151,  297 => 146,  289 => 140,  286 => 139,  284 => 138,  282 => 137,  280 => 132,  276 => 130,  271 => 127,  265 => 121,  259 => 118,  254 => 115,  251 => 114,  244 => 111,  242 => 110,  239 => 109,  233 => 106,  230 => 105,  228 => 104,  223 => 102,  219 => 101,  215 => 100,  211 => 99,  208 => 98,  206 => 97,  199 => 93,  188 => 85,  182 => 82,  174 => 77,  169 => 74,  166 => 73,  164 => 72,  162 => 71,  160 => 70,  158 => 69,  155 => 68,  147 => 62,  141 => 55,  135 => 52,  125 => 44,  122 => 43,  115 => 40,  113 => 39,  109 => 37,  103 => 34,  100 => 33,  98 => 32,  93 => 30,  89 => 29,  83 => 26,  77 => 24,  75 => 23,  66 => 17,  55 => 9,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
    {% if app.user.usuario is defined %}
        <header>
            <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
                <nav>
                    <div class=\"nav-wrapper blue darken-3 row\">

                        <div class=\"col s12 center hide-on-large-only\" id=\"nav_mob\">
                            <a href=\"{{ path('index') }}\" class=\"right\"><img src=\"/img/logo3.png\" alt=\"\"></a>
                            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse left\"><i
                                        class=\"material-icons\">menu</i></a>
                            <ul id=\"slide-out\" class=\"side-nav\">
                                <li>
                                    <div class=\"userView\">
                                        <div class=\"background center\">
                                        </div>
                                        <a href=\"{{ path('index') }}\"><img class=\" center centro\" src=\"/img/logo3.png\"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"divider\"></div>

                                    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA')) %}
                                <li><a class=\"waves-effect waves-blue\" href=\"{{ path('show_carnets') }}\">Carnets</a>
                                </li>
                                <li><a class=\"waves-effect waves-blue\" href=\"{{ path('gestion_partes') }}\">Partes</a>
                                </li>
                                <li><a class=\"waves-effect waves-blue\"
                                       href=\"{{ path('gestion_sanciones') }}\">Medidas</a></li>
                                <li><a class=\"waves-effect waves-blue\" href=\"{{ path('show_diario') }}\">Diario</a></li>

                                {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA') or is_granted('ROLE_TUTOR_DOCENTE') ) %}
                                  <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('show_alumnos') }}\">Alumnos</a>
                                  </li>
                                {% endif %}

                                <div class=\"divider\"></div>
                                {% if is_granted('ROLE_CONVIVENCIA') %}
                                    <li><a class=\"waves-effect waves-blue\" href=\"{{ path('noticias') }}\">Noticias</a>
                                    </li>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Administración<i
                                                            class=\"material-icons right\">arrow_drop_down</i></a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li><a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('admin_import') }}\">Alumnado</a>
                                                        </li>
                                                        <li><a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('admin_import_profesor') }}\"
                                                            >Profesorado</a>
                                                        </li>
                                                        {# <li><a class=\"waves-effect waves-blue\"
                                                                href=\"{{ path('admin_security') }}\"
                                                             >Copia
                                                                 de seguridad</a></li>#}
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                {% endif %}
                                {% elseif is_granted('ROLE_TUTOR') %}
                                    {#<li><a class=\"waves-effect waves-blue\" href=\"{{ path('index') }}\">Alumnado</a></li>#}
                                    {#{% elseif is_granted('ROLE_USER') %}#}
                                    {#<a class=\"waves-effect waves-blue\" href=\"{{ path('registrarAlumno') }}\"#}
                                    {#>Perfil</a>#}
                                {% endif %}
                                <div class=\"divider\"></div>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('change_password') }}\"
                                    >Cambiar
                                        Contraseña</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('logout') }}\">Logout</a>
                                </li>
                                <div class=\"divider\"></div>
                                <li style=\"color: rgba(0,0,0,0.87);font-weight: 500;\">Perfil: {{ app.user.usuario }}</li>

                            </ul>
                        </div>
                        <div class=\"col l8 left hide-on-med-and-down\">
                            <ul class=\"left\">

                                <li>
                                    <a href=\"{{ path('index') }}\" class=\"ancla centro\">
                                        <img id=\"img_nav\" src=\"/img/logo3.png\" alt=\"\">
                                    </a>
                                </li>
                                {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA')) %}

                                    <li><a href=\"{{ path('show_carnets') }}\">Carnets</a></li>
                                    <li><a href=\"{{ path('gestion_partes') }}\">Partes</a></li>
                                    <li><a href=\"{{ path('gestion_sanciones') }}\">Medidas</a></li>
                                    <li><a href=\"{{ path('show_diario') }}\">Diario</a></li>

                                    {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA') or is_granted('ROLE_TUTOR_DOCENTE') ) %}
                                      <li>
                                        <a class=\"waves-effect waves-blue\" href=\"{{ path('show_alumnos') }}\">Alumnos</a>
                                      </li>
                                    {% endif %}

                                    {% if is_granted('ROLE_CONVIVENCIA') %}
                                        <li><a href=\"{{ path('noticias') }}\">Noticias</a></li>

                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Administración<i
                                                        class=\"material-icons right\">keyboard_arrow_right</i></a></li>
                                        <ul id=\"dropdown1\" class=\"dropdown-content\">
                                            <li><a href=\"{{ path('admin_import') }}\"
                                                   class=\"blue darken-2 white-text\">Alumnado</a>
                                            </li>
                                            <li><a href=\"{{ path('admin_import_profesor') }}\"
                                                   class=\"blue darken-2 white-text\">Profesorado</a>
                                            </li>
                                           {# <li><a href=\"{{ path('admin_security') }}\"
                                                   class=\"blue darken-2 white-text\">Copia
                                                    de seguridad</a></li>#}
                                        </ul>

                                    {% endif %}

                                {% elseif is_granted('ROLE_TUTOR') %}
                                    {# <li><a href=\"{{ path('index') }}\" class=\"ancla centro\"><img id=\"img_nav\"
                                                                                                 src=\"/img/logo3.png\"
                                                                                                 alt=\"\"></a></li>

                                     {% elseif is_granted('ROLE_USER') %}#}
                                    {#<a href=\"{{ path('registrarAlumno') }}\"#}
                                    {#>Perfil</a>#}
                                {% endif %}
                            </ul>
                        </div>

                        <div class=\"col l4 right hide-on-med-and-down\">
                            <ul class=\"right\">
                                <li>
                                    <a href=\"{{ path('change_password') }}\"
                                    >Cambiar
                                        Contraseña</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('logout') }}\">Logout</a>
                                </li>
                                <li  style=\"padding: 0 5px;\">Perfil: {{ app.user.usuario }}</li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

    {% endif %}
{% endblock %}
", "convivencia/navegacion.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\convivencia\\navegacion.html.twig");
    }
}
