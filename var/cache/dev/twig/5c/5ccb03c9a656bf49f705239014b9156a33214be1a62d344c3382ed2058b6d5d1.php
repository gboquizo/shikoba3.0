<?php

/* convivencia/partes/partesForm.html.twig */
class __TwigTemplate_1ec3ca94a2bcb53e12560089f102596179e974b2e19076ea795fce829dc639bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/partes/partesForm.html.twig", 1);
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
        $__internal_eeb8aaf12fbdec53d3928e2e927350b5745dc34b465e72431c4ffa084fb93407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb8aaf12fbdec53d3928e2e927350b5745dc34b465e72431c4ffa084fb93407->enter($__internal_eeb8aaf12fbdec53d3928e2e927350b5745dc34b465e72431c4ffa084fb93407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $__internal_29f570b2e025fa9dfe3cf53256bd1644f8cd6ebd1419b3f93cc30acd4b5734d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f570b2e025fa9dfe3cf53256bd1644f8cd6ebd1419b3f93cc30acd4b5734d0->enter($__internal_29f570b2e025fa9dfe3cf53256bd1644f8cd6ebd1419b3f93cc30acd4b5734d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb8aaf12fbdec53d3928e2e927350b5745dc34b465e72431c4ffa084fb93407->leave($__internal_eeb8aaf12fbdec53d3928e2e927350b5745dc34b465e72431c4ffa084fb93407_prof);

        
        $__internal_29f570b2e025fa9dfe3cf53256bd1644f8cd6ebd1419b3f93cc30acd4b5734d0->leave($__internal_29f570b2e025fa9dfe3cf53256bd1644f8cd6ebd1419b3f93cc30acd4b5734d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd486cc31e70d50737e0386a7924c50c60697b7c5d99b4ccb9b305057c11766b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd486cc31e70d50737e0386a7924c50c60697b7c5d99b4ccb9b305057c11766b->enter($__internal_dd486cc31e70d50737e0386a7924c50c60697b7c5d99b4ccb9b305057c11766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72afbb3c1a5a5fd500bdea297adb0bbc91022913d2ceb607bbe8240a4cf29177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72afbb3c1a5a5fd500bdea297adb0bbc91022913d2ceb607bbe8240a4cf29177->enter($__internal_72afbb3c1a5a5fd500bdea297adb0bbc91022913d2ceb607bbe8240a4cf29177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/partes/partesForm.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Formulario Partes</h3>

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"col s12 center center-align\">
                <div class=\"divider1\" id=\"botonbus\">
                    <button class=\"busquedaMas z-depth-1 btn btn-floating blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"Búsqueda Avanzada\" title=\"Búsqueda avanzada\"><i
                                class=\"material-icons right\">search</i></button>
                </div>
            </div>
            <div class=\"col s6 right-align\">
                ";
        // line 19
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 20
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "html", null, true);
            echo "\" name=\"idParte\">
                ";
            // line 21
            if (($context["recupera"] ?? $this->getContext($context, "recupera"))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "recuperaPunto" => "true")), "html", null, true);
                echo "\"
                       class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                       data-title=\"Recuperar Punto\">-1 Punto <i class=\"material-icons left\">thumb_down</i></a>
                ";
            } else {
                // line 26
                echo "                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                           type=\"button\" name=\"recuperaPunto\"
                           value=\"-1 Punto\"
                            disabled>Recuperado</button>
                ";
            }
            // line 31
            echo "            </div>
            <div class=\"col s6 left-align\">
                ";
            // line 33
            if ((($context["accion"] ?? $this->getContext($context, "accion")) != "Inhabilitada")) {
                // line 34
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "estadoParte" => "continuar")), "html", null, true);
                echo "\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
                echo "<i
                                class=\"right material-icons\">send</i></a>
                ";
            } else {
                // line 39
                echo "                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\"
                            disabled>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "<i
                                class=\"material-icons right\">send</i></button>
                ";
            }
            // line 45
            echo "                ";
        }
        // line 46
        echo "            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 50
            echo "                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\"/>
                            <label for=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "</label>
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    <div class=\"col s12 center\">
                        <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" name=\"busqueda\" title=\"Buscar\">Buscar <i
                                    class=\"material-icons right\">search</i></button>
                    </div>
                </div>
            </div>
        </form>
        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1 mtop", "id" => "parteForm")));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idAlumno", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idProfesor", array()), 'row');
        echo "
        </div>

        ";
        // line 73
        echo "        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        ";
        // line 78
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 79
            echo "            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        ";
        }
        // line 84
        echo "        ";
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 85
            echo "            <div class=\"col s12 m12\" style=\"text-align:center\">
                <input type=\"checkbox\" id=\"envioSMS\" name=\"envioSMS\"/>
                <label for=\"envioSMS\">Enviar SMS</label>
            </div>
        ";
        }
        // line 90
        echo "        <div class=\"col s12\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idConducta", array()), 'row');
        echo "
           ";
        // line 99
        echo "        </div>
        <div class=\"col s12 m6 input-field\">

            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Descripcion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Tareas", array()), 'row');
        echo "
        </div>

        <div class=\"col s6 m3\">

            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComunicacion", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3\">

            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaConfirmacion", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraSalidaAula\">Hora de Salida Aula</label>
            <input type=\"text\" id=\"HoraSalidaAula\" name=\"HoraSalidaAula\" class=\"timepicker\"
                   required>
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraLlegadaJefatura\">Hora Llegada Jefatura</label>
            <input type=\"text\" id=\"HoraLlegadaJefatura\" name=\"HoraLlegadaJefatura\" class=\"timepicker\"
                   required>
        </div>
        <div class=\"\" id=\"formu\">
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
        <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
            ";
        // line 130
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 131
            echo "                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    ";
            // line 132
            if (((($context["sanciones"] ?? $this->getContext($context, "sanciones")) != null) && (twig_length_filter($this->env, ($context["sanciones"] ?? $this->getContext($context, "sanciones"))) > 0))) {
                // line 133
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? $this->getContext($context, "sanciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 134
                    echo "                                <a class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\"
                                   href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "sancion", array()), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "                    ";
            } else {
                // line 138
                echo "                        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 139
                    echo "                            <a class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\"
                               href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idParte" => $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "id", array()), "idAlumno" => $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "idAlumno", array()), "id", array()))), "html", null, true);
                    echo "\">Crear
                                Sanción</a></p>
                        ";
                }
                // line 143
                echo "                    ";
            }
            // line 144
            echo "                </div>

            ";
        }
        // line 147
        echo "            <div class=\"col s12 center\">
            <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\" data-title=\"Cancelar\"
               class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar<i
                        class=\"material-icons left\">undo</i></a>
            <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\"
                    name=\"registrarse\"
                    value=\"Enviar\">Enviar <i class=\"material-icons right\">send</i></button>
            </div>
            ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_72afbb3c1a5a5fd500bdea297adb0bbc91022913d2ceb607bbe8240a4cf29177->leave($__internal_72afbb3c1a5a5fd500bdea297adb0bbc91022913d2ceb607bbe8240a4cf29177_prof);

        
        $__internal_dd486cc31e70d50737e0386a7924c50c60697b7c5d99b4ccb9b305057c11766b->leave($__internal_dd486cc31e70d50737e0386a7924c50c60697b7c5d99b4ccb9b305057c11766b_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 155,  321 => 148,  318 => 147,  313 => 144,  310 => 143,  304 => 140,  301 => 139,  298 => 138,  295 => 137,  285 => 135,  282 => 134,  277 => 133,  275 => 132,  272 => 131,  270 => 130,  264 => 127,  248 => 114,  241 => 110,  233 => 105,  227 => 102,  222 => 99,  218 => 91,  215 => 90,  208 => 85,  205 => 84,  198 => 79,  196 => 78,  190 => 75,  186 => 73,  180 => 69,  174 => 66,  169 => 64,  158 => 55,  147 => 52,  141 => 51,  138 => 50,  134 => 49,  129 => 46,  126 => 45,  120 => 42,  116 => 41,  112 => 39,  104 => 36,  98 => 34,  96 => 33,  92 => 31,  85 => 26,  77 => 22,  75 => 21,  70 => 20,  68 => 19,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"center azul-prof fuente\">Formulario Partes</h3>

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"col s12 center center-align\">
                <div class=\"divider1\" id=\"botonbus\">
                    <button class=\"busquedaMas z-depth-1 btn btn-floating blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"Búsqueda Avanzada\" title=\"Búsqueda avanzada\"><i
                                class=\"material-icons right\">search</i></button>
                </div>
            </div>
            <div class=\"col s6 right-align\">
                {% if app.request.get('idParte') is not null %}
                <input type=\"hidden\" value=\"{{ app.request.get('idParte') }}\" name=\"idParte\">
                {% if recupera %}
                    <a href=\"{{ path('nuevoParte', {'idParte': app.request.get('idParte'), 'recuperaPunto': 'true'}) }}\"
                       class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                       data-title=\"Recuperar Punto\">-1 Punto <i class=\"material-icons left\">thumb_down</i></a>
                {% else %}
                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                           type=\"button\" name=\"recuperaPunto\"
                           value=\"-1 Punto\"
                            disabled>Recuperado</button>
                {% endif %}
            </div>
            <div class=\"col s6 left-align\">
                {% if accion != 'Inhabilitada' %}
                    <a href=\"{{ path('nuevoParte', {'idParte': app.request.get('idParte'), 'estadoParte': 'continuar' }) }}\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"{{ accion }}\">{{ accion }}<i
                                class=\"right material-icons\">send</i></a>
                {% else %}
                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"{{ parte.getIdEstado().getEstado() }}\"
                            disabled>{{ parte.getIdEstado().getEstado() }}<i
                                class=\"material-icons right\">send</i></button>
                {% endif %}
                {% endif %}
            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    {% for curso in cursos %}
                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"{{ curso.curso }}\" name=\"cursos[]\" value=\"{{ curso.curso }}\"/>
                            <label for=\"{{ curso.curso }}\">{{ curso.curso }}</label>
                        </p>
                    {% endfor %}
                    <div class=\"col s12 center\">
                        <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" name=\"busqueda\" title=\"Buscar\">Buscar <i
                                    class=\"material-icons right\">search</i></button>
                    </div>
                </div>
            </div>
        </form>
        {{ form_start(form, {'attr': {'class':'col s12 l10 offset-l1 mtop', 'id':'parteForm'}}) }}
        <div class=\"col s12 m6\">
            {{ form_row(form.idAlumno) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.idProfesor) }}
        </div>

        {#{{ form_row(form.Fecha) }}#}
        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"{{ parte.fecha|date('d/m/Y') }}\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        {% if app.request.get('idParte') is null %}
            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        {% endif %}
        {% if app.request.get('idParte') is null %}
            <div class=\"col s12 m12\" style=\"text-align:center\">
                <input type=\"checkbox\" id=\"envioSMS\" name=\"envioSMS\"/>
                <label for=\"envioSMS\">Enviar SMS</label>
            </div>
        {% endif %}
        <div class=\"col s12\">
            {{ form_row(form.idConducta) }}
           {# {% for conducta in conductas %}
                <p class=\"col s12\">
                    <input type=\"checkbox\" id=\"{{ conducta.conducta }}\" name=\"idConducta\"
                           value=\"{{ conducta.conducta }}\"/>
                    <label for=\"{{ conducta.conducta }}\">{{ \"(\" ~ conducta.puntos ~ \") - \"~  conducta.conducta }}</label>
                </p>
            {% endfor %}#}
        </div>
        <div class=\"col s12 m6 input-field\">

            {{ form_row(form.Descripcion) }}
        </div>
        <div class=\"col s12 m6 input-field\">
            {{ form_row(form.Tareas) }}
        </div>

        <div class=\"col s6 m3\">

            {{ form_row(form.fechaComunicacion) }}
        </div>
        <div class=\"col s6 m3\">

            {{ form_row(form.fechaConfirmacion) }}
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraSalidaAula\">Hora de Salida Aula</label>
            <input type=\"text\" id=\"HoraSalidaAula\" name=\"HoraSalidaAula\" class=\"timepicker\"
                   required>
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraLlegadaJefatura\">Hora Llegada Jefatura</label>
            <input type=\"text\" id=\"HoraLlegadaJefatura\" name=\"HoraLlegadaJefatura\" class=\"timepicker\"
                   required>
        </div>
        <div class=\"\" id=\"formu\">
            {{ form_widget(form) }}
        </div>
        <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
            {% if app.request.get('idParte') is not null %}
                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    {% if sanciones != null and sanciones|length>0 %}
                        {% for sancion in sanciones %}
                                <a class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\"
                                   href=\"{{ path('nueva_sancion', {'idSancion': sancion.id}) }}\">{{ sancion.sancion }}</a>
                        {% endfor %}
                    {% else %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\"
                               href=\"{{ path('nueva_sancion', {'idParte': parte.id, 'idAlumno': parte.idAlumno.id}) }}\">Crear
                                Sanción</a></p>
                        {% endif %}
                    {% endif %}
                </div>

            {% endif %}
            <div class=\"col s12 center\">
            <a href=\"{{ path('gestion_partes') }}\" data-title=\"Cancelar\"
               class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar<i
                        class=\"material-icons left\">undo</i></a>
            <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\"
                    name=\"registrarse\"
                    value=\"Enviar\">Enviar <i class=\"material-icons right\">send</i></button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>

{% endblock %}
", "convivencia/partes/partesForm.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\convivencia\\partes\\partesForm.html.twig");
    }
}
