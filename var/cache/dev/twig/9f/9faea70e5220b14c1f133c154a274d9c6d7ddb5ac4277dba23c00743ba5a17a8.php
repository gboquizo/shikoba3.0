<?php

/* convivencia/index.html.twig */
class __TwigTemplate_37c8f43eea256ce7f77bead37ee2e1ce73eed0b29c5a341b017d3c2cf98555dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/index.html.twig", 1);
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
        $__internal_31a30647b59d759f2edef67bfce91a1d0bb0a8d9568f2aa8b4a68e9ef510889a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a30647b59d759f2edef67bfce91a1d0bb0a8d9568f2aa8b4a68e9ef510889a->enter($__internal_31a30647b59d759f2edef67bfce91a1d0bb0a8d9568f2aa8b4a68e9ef510889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_1dd7011739071be33e5658ca6e25e874828a41eee124dfef3793218131328fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd7011739071be33e5658ca6e25e874828a41eee124dfef3793218131328fa5->enter($__internal_1dd7011739071be33e5658ca6e25e874828a41eee124dfef3793218131328fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a30647b59d759f2edef67bfce91a1d0bb0a8d9568f2aa8b4a68e9ef510889a->leave($__internal_31a30647b59d759f2edef67bfce91a1d0bb0a8d9568f2aa8b4a68e9ef510889a_prof);

        
        $__internal_1dd7011739071be33e5658ca6e25e874828a41eee124dfef3793218131328fa5->leave($__internal_1dd7011739071be33e5658ca6e25e874828a41eee124dfef3793218131328fa5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12a21d1c0de788416e7efbc8842625f439b1ef98e346e167fda6321d96167f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12a21d1c0de788416e7efbc8842625f439b1ef98e346e167fda6321d96167f9->enter($__internal_e12a21d1c0de788416e7efbc8842625f439b1ef98e346e167fda6321d96167f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74fe9d64690c0d47469ac8201e95d4588eede42b4a1ea4daf7a67be22593c263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fe9d64690c0d47469ac8201e95d4588eede42b4a1ea4daf7a67be22593c263->enter($__internal_74fe9d64690c0d47469ac8201e95d4588eede42b4a1ea4daf7a67be22593c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/index.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 14
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 15
            echo "                        <div class=\"card-panel red white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span> <i
                                    class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "                        <div class=\"card-panel green white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "                        <div class=\"card-panel red white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i
                                    class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar Contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\">Recuperar contraseña</a>
                    </div>
                    ";
        // line 50
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar<i class=\"material-icons right\">send</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

";
        
        $__internal_74fe9d64690c0d47469ac8201e95d4588eede42b4a1ea4daf7a67be22593c263->leave($__internal_74fe9d64690c0d47469ac8201e95d4588eede42b4a1ea4daf7a67be22593c263_prof);

        
        $__internal_e12a21d1c0de788416e7efbc8842625f439b1ef98e346e167fda6321d96167f9->leave($__internal_e12a21d1c0de788416e7efbc8842625f439b1ef98e346e167fda6321d96167f9_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  134 => 47,  118 => 33,  108 => 29,  105 => 28,  101 => 27,  98 => 26,  89 => 23,  86 => 22,  82 => 21,  79 => 20,  72 => 15,  69 => 14,  63 => 10,  57 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"{{ asset('img/logo2.svg') }}\"/>
                    </div>

                    {# Muestra el error en caso de existir#}
                    {% if error %}
                        <div class=\"card-panel red white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span> <i
                                    class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endif %}

                    {% for flash_message in app.session.flashBag.get('login') %}
                        <div class=\"card-panel green white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    {% endfor %}

                    {% for flash_message in app.session.flashBag.get('loginError') %}
                        <div class=\"card-panel red white-text\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }}</span> <i
                                    class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endfor %}

                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar Contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"{{ path('recuperarPassword') }}\">Recuperar contraseña</a>
                    </div>
                    {# Ruta a la que redirige si hay éxito #}
                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar<i class=\"material-icons right\">send</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock %}
", "convivencia/index.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\convivencia\\index.html.twig");
    }
}
