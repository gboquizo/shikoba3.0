<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_674438df8463b2bb646339f1601f0be9382ef26ea4bf346a88bc40714e567056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd0a4ec8534f1f76201e0d5088ba9153128f7e144befc90cafd5aa4afefa100c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0a4ec8534f1f76201e0d5088ba9153128f7e144befc90cafd5aa4afefa100c->enter($__internal_bd0a4ec8534f1f76201e0d5088ba9153128f7e144befc90cafd5aa4afefa100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c186df34a98605c7f13889fad44e797034db1d194e669d9697ec9ca25cac475c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c186df34a98605c7f13889fad44e797034db1d194e669d9697ec9ca25cac475c->enter($__internal_c186df34a98605c7f13889fad44e797034db1d194e669d9697ec9ca25cac475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bd0a4ec8534f1f76201e0d5088ba9153128f7e144befc90cafd5aa4afefa100c->leave($__internal_bd0a4ec8534f1f76201e0d5088ba9153128f7e144befc90cafd5aa4afefa100c_prof);

        
        $__internal_c186df34a98605c7f13889fad44e797034db1d194e669d9697ec9ca25cac475c->leave($__internal_c186df34a98605c7f13889fad44e797034db1d194e669d9697ec9ca25cac475c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48c8a04ea44cb485447be572e46741b6cf9d179dd8a355a54a015bd501118355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c8a04ea44cb485447be572e46741b6cf9d179dd8a355a54a015bd501118355->enter($__internal_48c8a04ea44cb485447be572e46741b6cf9d179dd8a355a54a015bd501118355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcc6decdbffc29f622fed40c21dc3ff58dc207b0f7cca3895842b65b27c68e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc6decdbffc29f622fed40c21dc3ff58dc207b0f7cca3895842b65b27c68e39->enter($__internal_bcc6decdbffc29f622fed40c21dc3ff58dc207b0f7cca3895842b65b27c68e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bcc6decdbffc29f622fed40c21dc3ff58dc207b0f7cca3895842b65b27c68e39->leave($__internal_bcc6decdbffc29f622fed40c21dc3ff58dc207b0f7cca3895842b65b27c68e39_prof);

        
        $__internal_48c8a04ea44cb485447be572e46741b6cf9d179dd8a355a54a015bd501118355->leave($__internal_48c8a04ea44cb485447be572e46741b6cf9d179dd8a355a54a015bd501118355_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d11f812dec5d173096a67553ba9fe6216b41f97c7e979feff092cf48e98ff2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11f812dec5d173096a67553ba9fe6216b41f97c7e979feff092cf48e98ff2c8->enter($__internal_d11f812dec5d173096a67553ba9fe6216b41f97c7e979feff092cf48e98ff2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afa9500223db175d0b502c6ee6400f69ec7df0613e5969c32e23dc35a2ddec66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa9500223db175d0b502c6ee6400f69ec7df0613e5969c32e23dc35a2ddec66->enter($__internal_afa9500223db175d0b502c6ee6400f69ec7df0613e5969c32e23dc35a2ddec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_afa9500223db175d0b502c6ee6400f69ec7df0613e5969c32e23dc35a2ddec66->leave($__internal_afa9500223db175d0b502c6ee6400f69ec7df0613e5969c32e23dc35a2ddec66_prof);

        
        $__internal_d11f812dec5d173096a67553ba9fe6216b41f97c7e979feff092cf48e98ff2c8->leave($__internal_d11f812dec5d173096a67553ba9fe6216b41f97c7e979feff092cf48e98ff2c8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9295b9ac3ba4519ff8bcc9bad19c8ec671c2889c886ef0d1ca84ddd86bc6ad04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9295b9ac3ba4519ff8bcc9bad19c8ec671c2889c886ef0d1ca84ddd86bc6ad04->enter($__internal_9295b9ac3ba4519ff8bcc9bad19c8ec671c2889c886ef0d1ca84ddd86bc6ad04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2196286b0575b86563e83176fd073b659d72a92a3e25e78a95d0b7a37bb04892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2196286b0575b86563e83176fd073b659d72a92a3e25e78a95d0b7a37bb04892->enter($__internal_2196286b0575b86563e83176fd073b659d72a92a3e25e78a95d0b7a37bb04892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2196286b0575b86563e83176fd073b659d72a92a3e25e78a95d0b7a37bb04892->leave($__internal_2196286b0575b86563e83176fd073b659d72a92a3e25e78a95d0b7a37bb04892_prof);

        
        $__internal_9295b9ac3ba4519ff8bcc9bad19c8ec671c2889c886ef0d1ca84ddd86bc6ad04->leave($__internal_9295b9ac3ba4519ff8bcc9bad19c8ec671c2889c886ef0d1ca84ddd86bc6ad04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
