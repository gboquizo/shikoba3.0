<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b2e0c9e176e7dc66427f3237962649a89e79f7a4e65f61a99b4edd62b332e850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1578e5a480946bc3bc84d1348e0af8b30e608179de04badc2f66a58381a69481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1578e5a480946bc3bc84d1348e0af8b30e608179de04badc2f66a58381a69481->enter($__internal_1578e5a480946bc3bc84d1348e0af8b30e608179de04badc2f66a58381a69481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c02c2a69217cfba2343c508ea37c147ef3aff1bb8e8286968bf16eaa4f703bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02c2a69217cfba2343c508ea37c147ef3aff1bb8e8286968bf16eaa4f703bd6->enter($__internal_c02c2a69217cfba2343c508ea37c147ef3aff1bb8e8286968bf16eaa4f703bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1578e5a480946bc3bc84d1348e0af8b30e608179de04badc2f66a58381a69481->leave($__internal_1578e5a480946bc3bc84d1348e0af8b30e608179de04badc2f66a58381a69481_prof);

        
        $__internal_c02c2a69217cfba2343c508ea37c147ef3aff1bb8e8286968bf16eaa4f703bd6->leave($__internal_c02c2a69217cfba2343c508ea37c147ef3aff1bb8e8286968bf16eaa4f703bd6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5662773f669b16e4cdaca6d6d27df17ba229d5e44fbbf2a396108e69aa95830c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5662773f669b16e4cdaca6d6d27df17ba229d5e44fbbf2a396108e69aa95830c->enter($__internal_5662773f669b16e4cdaca6d6d27df17ba229d5e44fbbf2a396108e69aa95830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45a5ec20124306113ebd5376ce802be0f046dcf915cfaf9629f93c0792b23c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a5ec20124306113ebd5376ce802be0f046dcf915cfaf9629f93c0792b23c66->enter($__internal_45a5ec20124306113ebd5376ce802be0f046dcf915cfaf9629f93c0792b23c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_45a5ec20124306113ebd5376ce802be0f046dcf915cfaf9629f93c0792b23c66->leave($__internal_45a5ec20124306113ebd5376ce802be0f046dcf915cfaf9629f93c0792b23c66_prof);

        
        $__internal_5662773f669b16e4cdaca6d6d27df17ba229d5e44fbbf2a396108e69aa95830c->leave($__internal_5662773f669b16e4cdaca6d6d27df17ba229d5e44fbbf2a396108e69aa95830c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2abf72a9d0616a5809c2988b22fc3517e23f43ce250322f97b09daa0a03b6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2abf72a9d0616a5809c2988b22fc3517e23f43ce250322f97b09daa0a03b6b1->enter($__internal_b2abf72a9d0616a5809c2988b22fc3517e23f43ce250322f97b09daa0a03b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe9bf74a400a45301f93af51b92e10389eb1e398243d71b06b9bfe11f349c487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9bf74a400a45301f93af51b92e10389eb1e398243d71b06b9bfe11f349c487->enter($__internal_fe9bf74a400a45301f93af51b92e10389eb1e398243d71b06b9bfe11f349c487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fe9bf74a400a45301f93af51b92e10389eb1e398243d71b06b9bfe11f349c487->leave($__internal_fe9bf74a400a45301f93af51b92e10389eb1e398243d71b06b9bfe11f349c487_prof);

        
        $__internal_b2abf72a9d0616a5809c2988b22fc3517e23f43ce250322f97b09daa0a03b6b1->leave($__internal_b2abf72a9d0616a5809c2988b22fc3517e23f43ce250322f97b09daa0a03b6b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a4f3e86859dfdf036cfdaf172ed08c57f2612b5248507108f96b9b6564f737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a4f3e86859dfdf036cfdaf172ed08c57f2612b5248507108f96b9b6564f737->enter($__internal_60a4f3e86859dfdf036cfdaf172ed08c57f2612b5248507108f96b9b6564f737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cccbd9a2480df6a062dfd85944b825f45235e42623256cf598d32c7a35ef862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cccbd9a2480df6a062dfd85944b825f45235e42623256cf598d32c7a35ef862->enter($__internal_9cccbd9a2480df6a062dfd85944b825f45235e42623256cf598d32c7a35ef862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9cccbd9a2480df6a062dfd85944b825f45235e42623256cf598d32c7a35ef862->leave($__internal_9cccbd9a2480df6a062dfd85944b825f45235e42623256cf598d32c7a35ef862_prof);

        
        $__internal_60a4f3e86859dfdf036cfdaf172ed08c57f2612b5248507108f96b9b6564f737->leave($__internal_60a4f3e86859dfdf036cfdaf172ed08c57f2612b5248507108f96b9b6564f737_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
