<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f405d617ab41d56d815395f06720c61402ba0903eeb0dd19f85b350b51b72ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e48b27699ba940198ca5d29eef1689e7c94cdbe6624eb65fc8d25b0cebcf8875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48b27699ba940198ca5d29eef1689e7c94cdbe6624eb65fc8d25b0cebcf8875->enter($__internal_e48b27699ba940198ca5d29eef1689e7c94cdbe6624eb65fc8d25b0cebcf8875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d57a3672af095e90ff4c891460a8472c9565e4643c4d1866ce72efc5cbc8d1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57a3672af095e90ff4c891460a8472c9565e4643c4d1866ce72efc5cbc8d1d8->enter($__internal_d57a3672af095e90ff4c891460a8472c9565e4643c4d1866ce72efc5cbc8d1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48b27699ba940198ca5d29eef1689e7c94cdbe6624eb65fc8d25b0cebcf8875->leave($__internal_e48b27699ba940198ca5d29eef1689e7c94cdbe6624eb65fc8d25b0cebcf8875_prof);

        
        $__internal_d57a3672af095e90ff4c891460a8472c9565e4643c4d1866ce72efc5cbc8d1d8->leave($__internal_d57a3672af095e90ff4c891460a8472c9565e4643c4d1866ce72efc5cbc8d1d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93f4690a7e2522821d63873081aff108f5d3d5e15ba9270e55096a7c5e3b1268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f4690a7e2522821d63873081aff108f5d3d5e15ba9270e55096a7c5e3b1268->enter($__internal_93f4690a7e2522821d63873081aff108f5d3d5e15ba9270e55096a7c5e3b1268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2db250cc6922f52f1d99a043d0c53166213b3bbde2748ed26d1e86d25b2d3ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db250cc6922f52f1d99a043d0c53166213b3bbde2748ed26d1e86d25b2d3ae0->enter($__internal_2db250cc6922f52f1d99a043d0c53166213b3bbde2748ed26d1e86d25b2d3ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2db250cc6922f52f1d99a043d0c53166213b3bbde2748ed26d1e86d25b2d3ae0->leave($__internal_2db250cc6922f52f1d99a043d0c53166213b3bbde2748ed26d1e86d25b2d3ae0_prof);

        
        $__internal_93f4690a7e2522821d63873081aff108f5d3d5e15ba9270e55096a7c5e3b1268->leave($__internal_93f4690a7e2522821d63873081aff108f5d3d5e15ba9270e55096a7c5e3b1268_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
