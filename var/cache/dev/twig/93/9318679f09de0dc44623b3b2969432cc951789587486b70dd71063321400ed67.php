<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cde785e31be305da38144f3a0100db6efec4d68102ae50b8881a2bf1df1519c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b83a9acb943c5d3a2d7d5c0d532815f8b8dcafa07fb586a36ea00dc026c7176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b83a9acb943c5d3a2d7d5c0d532815f8b8dcafa07fb586a36ea00dc026c7176->enter($__internal_8b83a9acb943c5d3a2d7d5c0d532815f8b8dcafa07fb586a36ea00dc026c7176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5bd6622fc0b9a928028c65b8164560f3cc7b21456597632cf304aead895e575d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd6622fc0b9a928028c65b8164560f3cc7b21456597632cf304aead895e575d->enter($__internal_5bd6622fc0b9a928028c65b8164560f3cc7b21456597632cf304aead895e575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b83a9acb943c5d3a2d7d5c0d532815f8b8dcafa07fb586a36ea00dc026c7176->leave($__internal_8b83a9acb943c5d3a2d7d5c0d532815f8b8dcafa07fb586a36ea00dc026c7176_prof);

        
        $__internal_5bd6622fc0b9a928028c65b8164560f3cc7b21456597632cf304aead895e575d->leave($__internal_5bd6622fc0b9a928028c65b8164560f3cc7b21456597632cf304aead895e575d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2270c59acf412c4cc837cece83ec2186bb01e15b3c3155c6d92b495659c39d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2270c59acf412c4cc837cece83ec2186bb01e15b3c3155c6d92b495659c39d9f->enter($__internal_2270c59acf412c4cc837cece83ec2186bb01e15b3c3155c6d92b495659c39d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5fdbe06bb8a81ac141882dbb686c301bbef73e2738ed5523d58b56f25d175458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdbe06bb8a81ac141882dbb686c301bbef73e2738ed5523d58b56f25d175458->enter($__internal_5fdbe06bb8a81ac141882dbb686c301bbef73e2738ed5523d58b56f25d175458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fdbe06bb8a81ac141882dbb686c301bbef73e2738ed5523d58b56f25d175458->leave($__internal_5fdbe06bb8a81ac141882dbb686c301bbef73e2738ed5523d58b56f25d175458_prof);

        
        $__internal_2270c59acf412c4cc837cece83ec2186bb01e15b3c3155c6d92b495659c39d9f->leave($__internal_2270c59acf412c4cc837cece83ec2186bb01e15b3c3155c6d92b495659c39d9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_325dcea63b19058803e5059993fa16ed6e140137cbbbb3535c4b709fa011005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325dcea63b19058803e5059993fa16ed6e140137cbbbb3535c4b709fa011005e->enter($__internal_325dcea63b19058803e5059993fa16ed6e140137cbbbb3535c4b709fa011005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e97d3243dcd8574f2859c99540ad5a89d7857e47365b9dccb0c70d65b26879ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97d3243dcd8574f2859c99540ad5a89d7857e47365b9dccb0c70d65b26879ff->enter($__internal_e97d3243dcd8574f2859c99540ad5a89d7857e47365b9dccb0c70d65b26879ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e97d3243dcd8574f2859c99540ad5a89d7857e47365b9dccb0c70d65b26879ff->leave($__internal_e97d3243dcd8574f2859c99540ad5a89d7857e47365b9dccb0c70d65b26879ff_prof);

        
        $__internal_325dcea63b19058803e5059993fa16ed6e140137cbbbb3535c4b709fa011005e->leave($__internal_325dcea63b19058803e5059993fa16ed6e140137cbbbb3535c4b709fa011005e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f331dd2ec9b1b36bbd16f27d3f8e312ff5b889bd5c81f8364c7429b4244bd938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f331dd2ec9b1b36bbd16f27d3f8e312ff5b889bd5c81f8364c7429b4244bd938->enter($__internal_f331dd2ec9b1b36bbd16f27d3f8e312ff5b889bd5c81f8364c7429b4244bd938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b52095fa985248723a3cc4fdfd15a1e0a66a2add3a800da71ec5d19fda2577f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b52095fa985248723a3cc4fdfd15a1e0a66a2add3a800da71ec5d19fda2577f->enter($__internal_1b52095fa985248723a3cc4fdfd15a1e0a66a2add3a800da71ec5d19fda2577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b52095fa985248723a3cc4fdfd15a1e0a66a2add3a800da71ec5d19fda2577f->leave($__internal_1b52095fa985248723a3cc4fdfd15a1e0a66a2add3a800da71ec5d19fda2577f_prof);

        
        $__internal_f331dd2ec9b1b36bbd16f27d3f8e312ff5b889bd5c81f8364c7429b4244bd938->leave($__internal_f331dd2ec9b1b36bbd16f27d3f8e312ff5b889bd5c81f8364c7429b4244bd938_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
