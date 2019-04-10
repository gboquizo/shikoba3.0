<?php

/* convivencia/changePassword.html.twig */
class __TwigTemplate_ba79194b67289dcf3ad6cb0ad5dc9fe4cd61776e99fb2f65211a4402c91e55b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/changePassword.html.twig", 1);
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
        $__internal_196d1c14389e15df3bcd57889289d10229870245b8522b430b761f55e458e777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196d1c14389e15df3bcd57889289d10229870245b8522b430b761f55e458e777->enter($__internal_196d1c14389e15df3bcd57889289d10229870245b8522b430b761f55e458e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/changePassword.html.twig"));

        $__internal_59c1712e137122378ae11426dbe7c0f3153c8eab808dc39054c8be7409c2820f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c1712e137122378ae11426dbe7c0f3153c8eab808dc39054c8be7409c2820f->enter($__internal_59c1712e137122378ae11426dbe7c0f3153c8eab808dc39054c8be7409c2820f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196d1c14389e15df3bcd57889289d10229870245b8522b430b761f55e458e777->leave($__internal_196d1c14389e15df3bcd57889289d10229870245b8522b430b761f55e458e777_prof);

        
        $__internal_59c1712e137122378ae11426dbe7c0f3153c8eab808dc39054c8be7409c2820f->leave($__internal_59c1712e137122378ae11426dbe7c0f3153c8eab808dc39054c8be7409c2820f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a3cc681ac32fa1da758a900e1d46df0b1f53a7385c26ba36b1746cb8d14b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a3cc681ac32fa1da758a900e1d46df0b1f53a7385c26ba36b1746cb8d14b81->enter($__internal_14a3cc681ac32fa1da758a900e1d46df0b1f53a7385c26ba36b1746cb8d14b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb0f9ada554dbac44b89ea558f23b264e48743c4c72d125bc674ef0fa8e963ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0f9ada554dbac44b89ea558f23b264e48743c4c72d125bc674ef0fa8e963ae->enter($__internal_eb0f9ada554dbac44b89ea558f23b264e48743c4c72d125bc674ef0fa8e963ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/changePassword.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"col s12 l4 offset-l4 center\">
        <h3 class=\"center azul-prof fuente\">Cambiar contraseña</h3>

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "password"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "            <div class=\"card-panel green white-text\" style=\"position: relative;\">
                <span class=\"spancaja\">";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "passwordError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "            <div class=\"card-panel red white-text\" style=\"position: relative;\">
                <span class=\"spancaja\">";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <div class=\"divider3\"></div>

                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button class=\"btn blue darken-3 waves-effect waves-light\"  type=\"submit\" name=\"cambiar\" value=\"Modificar\">Modificar<i
                            class=\"material-icons right\" >send</i></button>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_eb0f9ada554dbac44b89ea558f23b264e48743c4c72d125bc674ef0fa8e963ae->leave($__internal_eb0f9ada554dbac44b89ea558f23b264e48743c4c72d125bc674ef0fa8e963ae_prof);

        
        $__internal_14a3cc681ac32fa1da758a900e1d46df0b1f53a7385c26ba36b1746cb8d14b81->leave($__internal_14a3cc681ac32fa1da758a900e1d46df0b1f53a7385c26ba36b1746cb8d14b81_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  100 => 21,  96 => 20,  92 => 18,  83 => 15,  80 => 14,  76 => 13,  73 => 12,  64 => 9,  61 => 8,  57 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"col s12 l4 offset-l4 center\">
        <h3 class=\"center azul-prof fuente\">Cambiar contraseña</h3>

        {% for flash_message in app.session.flashBag.get('password') %}
            <div class=\"card-panel green white-text\" style=\"position: relative;\">
                <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
            </div>
        {% endfor %}

        {% for flash_message in app.session.flashBag.get('passwordError') %}
            <div class=\"card-panel red white-text\" style=\"position: relative;\">
                <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
            </div>
        {% endfor %}
        <div class=\"divider3\"></div>

                {{ form_start(form) }}
                {{ form_widget(form) }}
                <button class=\"btn blue darken-3 waves-effect waves-light\"  type=\"submit\" name=\"cambiar\" value=\"Modificar\">Modificar<i
                            class=\"material-icons right\" >send</i></button>
                {{ form_end(form) }}
    </div>
{% endblock %}
", "convivencia/changePassword.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\convivencia\\changePassword.html.twig");
    }
}
