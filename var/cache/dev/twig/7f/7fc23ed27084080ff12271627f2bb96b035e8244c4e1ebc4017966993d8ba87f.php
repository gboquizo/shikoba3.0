<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8ead35bb174770a56278996117613c6c02b8a4453a7b4059c3784822ba5a3055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7995de8ae3e82b1ad9ce35f8c4507a549b18783b92779aac180485c042c1bdf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7995de8ae3e82b1ad9ce35f8c4507a549b18783b92779aac180485c042c1bdf5->enter($__internal_7995de8ae3e82b1ad9ce35f8c4507a549b18783b92779aac180485c042c1bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e2e3df1a0d37c1923da330b355d3b005f6804f930c9022138fa4ffe133926861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e3df1a0d37c1923da330b355d3b005f6804f930c9022138fa4ffe133926861->enter($__internal_e2e3df1a0d37c1923da330b355d3b005f6804f930c9022138fa4ffe133926861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7995de8ae3e82b1ad9ce35f8c4507a549b18783b92779aac180485c042c1bdf5->leave($__internal_7995de8ae3e82b1ad9ce35f8c4507a549b18783b92779aac180485c042c1bdf5_prof);

        
        $__internal_e2e3df1a0d37c1923da330b355d3b005f6804f930c9022138fa4ffe133926861->leave($__internal_e2e3df1a0d37c1923da330b355d3b005f6804f930c9022138fa4ffe133926861_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1733db4b69246d5977966330976de66716f5f577a14a42b6eb82e4504b755cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1733db4b69246d5977966330976de66716f5f577a14a42b6eb82e4504b755cd6->enter($__internal_1733db4b69246d5977966330976de66716f5f577a14a42b6eb82e4504b755cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26281c618ebe4b7a5919ea5e18da1b6f5403d08b055c1f094ad78887e9eb08c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26281c618ebe4b7a5919ea5e18da1b6f5403d08b055c1f094ad78887e9eb08c8->enter($__internal_26281c618ebe4b7a5919ea5e18da1b6f5403d08b055c1f094ad78887e9eb08c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_26281c618ebe4b7a5919ea5e18da1b6f5403d08b055c1f094ad78887e9eb08c8->leave($__internal_26281c618ebe4b7a5919ea5e18da1b6f5403d08b055c1f094ad78887e9eb08c8_prof);

        
        $__internal_1733db4b69246d5977966330976de66716f5f577a14a42b6eb82e4504b755cd6->leave($__internal_1733db4b69246d5977966330976de66716f5f577a14a42b6eb82e4504b755cd6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee54703171cb0e33fea8c3b7f062bff802457a39a30db81333d50364cdea5341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee54703171cb0e33fea8c3b7f062bff802457a39a30db81333d50364cdea5341->enter($__internal_ee54703171cb0e33fea8c3b7f062bff802457a39a30db81333d50364cdea5341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_115ec5025841a5cea520fae95aa109dc86d460f21c28e6c6ef4af6adcf81819a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ec5025841a5cea520fae95aa109dc86d460f21c28e6c6ef4af6adcf81819a->enter($__internal_115ec5025841a5cea520fae95aa109dc86d460f21c28e6c6ef4af6adcf81819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_115ec5025841a5cea520fae95aa109dc86d460f21c28e6c6ef4af6adcf81819a->leave($__internal_115ec5025841a5cea520fae95aa109dc86d460f21c28e6c6ef4af6adcf81819a_prof);

        
        $__internal_ee54703171cb0e33fea8c3b7f062bff802457a39a30db81333d50364cdea5341->leave($__internal_ee54703171cb0e33fea8c3b7f062bff802457a39a30db81333d50364cdea5341_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_27187889f68df1734c8654a70382fef1c01fac7ab33f1def15a8f5cf4597119a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27187889f68df1734c8654a70382fef1c01fac7ab33f1def15a8f5cf4597119a->enter($__internal_27187889f68df1734c8654a70382fef1c01fac7ab33f1def15a8f5cf4597119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0980684d1f47131ec5839c357f5c17d73bfb99207c032a1d47c5d0e62b2fa40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0980684d1f47131ec5839c357f5c17d73bfb99207c032a1d47c5d0e62b2fa40c->enter($__internal_0980684d1f47131ec5839c357f5c17d73bfb99207c032a1d47c5d0e62b2fa40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0980684d1f47131ec5839c357f5c17d73bfb99207c032a1d47c5d0e62b2fa40c->leave($__internal_0980684d1f47131ec5839c357f5c17d73bfb99207c032a1d47c5d0e62b2fa40c_prof);

        
        $__internal_27187889f68df1734c8654a70382fef1c01fac7ab33f1def15a8f5cf4597119a->leave($__internal_27187889f68df1734c8654a70382fef1c01fac7ab33f1def15a8f5cf4597119a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
