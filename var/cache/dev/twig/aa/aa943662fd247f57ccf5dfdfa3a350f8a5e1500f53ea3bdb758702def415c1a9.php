<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_40383adf2cc485dda1ab319756dc49ab5ba7e6911a9e45ad5d18c5506c77a41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/partes/partes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3338cee6b0fe7f83ddc9078f047b8ce33f447c05ca582821ab2a7cd97ebdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3338cee6b0fe7f83ddc9078f047b8ce33f447c05ca582821ab2a7cd97ebdb9->enter($__internal_eb3338cee6b0fe7f83ddc9078f047b8ce33f447c05ca582821ab2a7cd97ebdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $__internal_ff8826f09dc1e6b7450558d13ecec69f5e24993a5c2b1fa77db5f0e81e02f278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8826f09dc1e6b7450558d13ecec69f5e24993a5c2b1fa77db5f0e81e02f278->enter($__internal_ff8826f09dc1e6b7450558d13ecec69f5e24993a5c2b1fa77db5f0e81e02f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3338cee6b0fe7f83ddc9078f047b8ce33f447c05ca582821ab2a7cd97ebdb9->leave($__internal_eb3338cee6b0fe7f83ddc9078f047b8ce33f447c05ca582821ab2a7cd97ebdb9_prof);

        
        $__internal_ff8826f09dc1e6b7450558d13ecec69f5e24993a5c2b1fa77db5f0e81e02f278->leave($__internal_ff8826f09dc1e6b7450558d13ecec69f5e24993a5c2b1fa77db5f0e81e02f278_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc33e2bcaf29df4cbe109b13703e1cd17d6a6bf20ebdb08d03c73b54b6e1e847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc33e2bcaf29df4cbe109b13703e1cd17d6a6bf20ebdb08d03c73b54b6e1e847->enter($__internal_bc33e2bcaf29df4cbe109b13703e1cd17d6a6bf20ebdb08d03c73b54b6e1e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6957105f875c5a9d8ca7e5f4eccdc9c0dc0b2050c606b3c14d5dacd8be3aa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6957105f875c5a9d8ca7e5f4eccdc9c0dc0b2050c606b3c14d5dacd8be3aa69->enter($__internal_b6957105f875c5a9d8ca7e5f4eccdc9c0dc0b2050c606b3c14d5dacd8be3aa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/partes/partes.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Gestión Partes</h3>

        <div class=\"col s12 l4 offset-l4 center\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "parte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "                <div class=\"card-panel green white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "                <div class=\"card-panel red white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 18
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
        <form action=\"\">
            <div class=\"row\" id=\"busq\">

                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            ";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "historico"), "method") == "on")) {
            // line 29
            echo "                                <input type=\"checkbox\" name=\"historico\" checked>
                            ";
        } else {
            // line 31
            echo "                                <input type=\"checkbox\" name=\"historico\">
                            ";
        }
        // line 33
        echo "                            <span style=\"float:left;margin-top: 4%;\"> Histórico</span>
                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                <button class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                        type=\"submit\"
                                        value=\"Buscar\" title=\"Buscar\"><i
                                            class=\"material-icons right\">search</i></button>
                                <a id=\"parte\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
        echo "\"
                                   class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                   title=\"Nuevo Parte\">Nuevo<i
                                            class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
                            </div>
                        </div>

                        ";
        // line 47
        echo "                            ";
        // line 48
        echo "                               ";
        // line 49
        echo "                               ";
        // line 50
        echo "                                        ";
        // line 51
        echo "                        ";
        // line 52
        echo "                        <div class=\"col s2 l1\">
                            ";
        // line 54
        echo "                               ";
        // line 55
        echo "                               ";
        // line 56
        echo "                                        ";
        // line 57
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"responsive-table highlight tableData z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\">
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>NumParte</th>
                        <th>Fecha</th>
                        <th>Alumnado</th>
                        <th>Curso</th>
                        <th>Profesorado</th>
                        <th>Tipo</th>
                        <th>Puntos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? $this->getContext($context, "partes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 79
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Grave")) {
                // line 80
                echo "                            ";
                $context["colorClass"] = "orange-text";
                // line 81
                echo "                        ";
            } elseif (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Leve")) {
                // line 82
                echo "                            ";
                $context["colorClass"] = "amber-text";
                // line 83
                echo "                        ";
            } else {
                // line 84
                echo "                            ";
                $context["colorClass"] = "red-text";
                // line 85
                echo "                        ";
            }
            // line 86
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()) == "Caducado")) {
                // line 87
                echo "                            ";
                $context["colorClass"] = "grey-text";
                // line 88
                echo "                        ";
            }
            // line 89
            echo "                        <tr>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            ";
            // line 95
            if (($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()) != null)) {
                // line 96
                echo "                                <td>
                                    <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes", array("like" => $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "</a>
                                </td>
                            ";
            } else {
                // line 100
                echo "                                <td>Ninguno</td>
                            ";
            }
            // line 102
            echo "                            <td>
                                ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "
                            </td>
                            <td class=\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? $this->getContext($context, "colorClass")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                            ";
            // line 108
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 109
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 110
                    echo "                                    <td><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
                    echo "?idParte=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                    echo "\">
                                    <i class=\"material-icons\">edit</i></a>
                                    <a class=\"confirm paddingRightLeft \"
                                       href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => $this->getAttribute($context["parte"], "id", array()))), "html", null, true);
                    echo "\"
                                       data-title=\"Eliminar Parte\"><i class=\"material-icons \">delete</i></a>
                                    <a href=\"";
                    // line 115
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("printParte");
                    echo "?idParte=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                    echo "\">
                                        <i class=\"material-icons\">print</i></a>
                                ";
                } else {
                    // line 118
                    echo "                                    <td></td>
                                ";
                }
                // line 120
                echo "                            ";
            }
            // line 121
            echo "                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 122
                echo "                            <td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">edit</i></a>
                                <a class=\"confirm paddingRightLeft \"
                                   href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => $this->getAttribute($context["parte"], "id", array()))), "html", null, true);
                echo "\"
                                   data-title=\"Eliminar Parte\"><i class=\"material-icons \">delete</i></a>
                                <a href=\"";
                // line 127
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("printParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">print</i></a>
                                    ";
            }
            // line 130
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 136
        echo "            ";
        // line 137
        echo "            ";
        // line 138
        echo "        </form>
    </div>
";
        
        $__internal_b6957105f875c5a9d8ca7e5f4eccdc9c0dc0b2050c606b3c14d5dacd8be3aa69->leave($__internal_b6957105f875c5a9d8ca7e5f4eccdc9c0dc0b2050c606b3c14d5dacd8be3aa69_prof);

        
        $__internal_bc33e2bcaf29df4cbe109b13703e1cd17d6a6bf20ebdb08d03c73b54b6e1e847->leave($__internal_bc33e2bcaf29df4cbe109b13703e1cd17d6a6bf20ebdb08d03c73b54b6e1e847_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 138,  338 => 137,  336 => 136,  331 => 132,  324 => 130,  316 => 127,  311 => 125,  302 => 122,  299 => 121,  296 => 120,  292 => 118,  284 => 115,  279 => 113,  270 => 110,  267 => 109,  265 => 108,  261 => 107,  257 => 106,  251 => 105,  246 => 103,  243 => 102,  239 => 100,  231 => 97,  228 => 96,  226 => 95,  219 => 93,  214 => 91,  210 => 90,  207 => 89,  204 => 88,  201 => 87,  198 => 86,  195 => 85,  192 => 84,  189 => 83,  186 => 82,  183 => 81,  180 => 80,  177 => 79,  173 => 78,  150 => 57,  148 => 56,  146 => 55,  144 => 54,  141 => 52,  139 => 51,  137 => 50,  135 => 49,  133 => 48,  131 => 47,  121 => 39,  113 => 33,  109 => 31,  105 => 29,  103 => 28,  94 => 21,  85 => 18,  82 => 17,  78 => 16,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Gestión Partes</h3>

        <div class=\"col s12 l4 offset-l4 center\">
            {% for flash_message in app.session.flashBag.get('parte') %}
                <div class=\"card-panel green white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('parteError') %}
                <div class=\"card-panel red white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <form action=\"\">
            <div class=\"row\" id=\"busq\">

                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            {% if app.request.get('historico') == 'on' %}
                                <input type=\"checkbox\" name=\"historico\" checked>
                            {% else %}
                                <input type=\"checkbox\" name=\"historico\">
                            {% endif %}
                            <span style=\"float:left;margin-top: 4%;\"> Histórico</span>
                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                <button class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                        type=\"submit\"
                                        value=\"Buscar\" title=\"Buscar\"><i
                                            class=\"material-icons right\">search</i></button>
                                <a id=\"parte\" href=\"{{ path('nuevoParte') }}\"
                                   class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                   title=\"Nuevo Parte\">Nuevo<i
                                            class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
                            </div>
                        </div>

                        {#<div class=\"col s2 l1\" id=\"aqui2\">#}
                            {#<a href=\"{{ path('nuevoParte') }}\"#}
                               {#class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\"#}
                               {#title=\"Nuevo Parte\"><i#}
                                        {#class=\"material-icons\" style=\"margin-top: -2%;\">add</i></a>#}
                        {#</div>#}
                        <div class=\"col s2 l1\">
                            {#<a href=\"{{ path('export_form_partes') }}\"#}
                               {#class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\"#}
                               {#title=\"Exportar\"><i#}
                                        {#class=\"material-icons\">get_app</i></a>#}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"responsive-table highlight tableData z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\">
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>NumParte</th>
                        <th>Fecha</th>
                        <th>Alumnado</th>
                        <th>Curso</th>
                        <th>Profesorado</th>
                        <th>Tipo</th>
                        <th>Puntos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for parte in partes %}
                        {% if parte.idTipo.tipo == 'Grave' %}
                            {% set colorClass = 'orange-text' %}
                        {% elseif parte.idTipo.tipo  == 'Leve' %}
                            {% set colorClass = 'amber-text' %}
                        {% else %}
                            {% set colorClass = 'red-text' %}
                        {% endif %}
                        {% if parte.idEstado.estado == 'Caducado' %}
                            {% set colorClass = 'grey-text' %}
                        {% endif %}
                        <tr>
                            <td>{{ parte.id }}</td>
                            <td>{{ parte.fecha|date(\"d/m/Y\") }}</td>
                            <td>
                                <a href=\"{{ path('verAlumno', {'id': parte.idAlumno.id}) }}\">{{ parte.idAlumno.getNombreCompleto() }}</a>
                            </td>
                            {% if parte.idAlumno.idCurso != null %}
                                <td>
                                    <a href=\"{{ path('gestion_partes', {'like': parte.idAlumno.idCurso.grupo}) }}\">{{ parte.idAlumno.idCurso.grupo }}</a>
                                </td>
                            {% else %}
                                <td>Ninguno</td>
                            {% endif %}
                            <td>
                                {{ parte.idProfesor.getNombreCompleto() }}
                            </td>
                            <td class=\"{{ colorClass }}\">{{ parte.idTipo.tipo }}</td>
                            <td>{{ parte.puntos }}</td>
                            <td>{{ parte.idEstado.estado }}</td>
                            {% if (is_granted('ROLE_ADMIN') == false) and (is_granted('ROLE_PROFESOR')) %}
                                {% if(parte.idProfesor.idUsuario.id == app.user.id) %}
                                    <td><a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">
                                    <i class=\"material-icons\">edit</i></a>
                                    <a class=\"confirm paddingRightLeft \"
                                       href=\"{{ path('borrar_parte', {'id': parte.id}) }}\"
                                       data-title=\"Eliminar Parte\"><i class=\"material-icons \">delete</i></a>
                                    <a href=\"{{ path('printParte') }}?idParte={{ parte.id }}\">
                                        <i class=\"material-icons\">print</i></a>
                                {% else %}
                                    <td></td>
                                {% endif %}
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <td><a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">
                                    <i class=\"material-icons\">edit</i></a>
                                <a class=\"confirm paddingRightLeft \"
                                   href=\"{{ path('borrar_parte', {'id': parte.id}) }}\"
                                   data-title=\"Eliminar Parte\"><i class=\"material-icons \">delete</i></a>
                                <a href=\"{{ path('printParte') }}?idParte={{ parte.id }}\">
                                    <i class=\"material-icons\">print</i></a>
                                    {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {#<div class=\"paginator w3-col m12\">#}
            {#{{ knp_pagination_render(partes) }}#}
            {#</div>#}
        </form>
    </div>
{% endblock %}
", "convivencia/partes/partes.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\convivencia\\partes\\partes.html.twig");
    }
}
