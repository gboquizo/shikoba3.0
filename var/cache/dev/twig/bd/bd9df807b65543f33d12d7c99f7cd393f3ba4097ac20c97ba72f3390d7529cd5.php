<?php

/* base2.html.twig */
class __TwigTemplate_6cfdf97bc6837272968317b71de890b99389b7eee9d91aeb0915f4a2c8d4216a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfed5c3d8a9f6f9cc6aeb88a76e92ddb2868a23b1bced9908da2ddc888938153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfed5c3d8a9f6f9cc6aeb88a76e92ddb2868a23b1bced9908da2ddc888938153->enter($__internal_cfed5c3d8a9f6f9cc6aeb88a76e92ddb2868a23b1bced9908da2ddc888938153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_23b3618a9d7494c259e12c3ece6e2b22d9debbe380504ad029872dc3d2145c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b3618a9d7494c259e12c3ece6e2b22d9debbe380504ad029872dc3d2145c99->enter($__internal_23b3618a9d7494c259e12c3ece6e2b22d9debbe380504ad029872dc3d2145c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/favicon.ico"), "html", null, true);
        echo "\"/>
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</head>
<body>
<main>
    <div class=\"loaderIntro\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
    </div>

     <div class=\"containerLoader\">
         ";
        // line 129
        echo "             <div class=\"row\" style=\"margin-bottom: -10px;display: none;\">
                 ";
        // line 131
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "            </div>
        </div>
</main>
<footer class=\"page-footer blue darken-3\">
    <div class=\"footer-copyright\">
        <div class=\"container center\">
            © 2017 - Shikoba - Sawabona
        </div>
    </div>
</footer>
</body>
</html>
";
        
        $__internal_cfed5c3d8a9f6f9cc6aeb88a76e92ddb2868a23b1bced9908da2ddc888938153->leave($__internal_cfed5c3d8a9f6f9cc6aeb88a76e92ddb2868a23b1bced9908da2ddc888938153_prof);

        
        $__internal_23b3618a9d7494c259e12c3ece6e2b22d9debbe380504ad029872dc3d2145c99->leave($__internal_23b3618a9d7494c259e12c3ece6e2b22d9debbe380504ad029872dc3d2145c99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_880bbe982126e92545a164196022ef275973ee1e255f5545132fdb0ba16b17e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880bbe982126e92545a164196022ef275973ee1e255f5545132fdb0ba16b17e8->enter($__internal_880bbe982126e92545a164196022ef275973ee1e255f5545132fdb0ba16b17e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c399cf514dfebd4fa86322c02d6be1604483d834f8d0941e7561f47a514be40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c399cf514dfebd4fa86322c02d6be1604483d834f8d0941e7561f47a514be40->enter($__internal_1c399cf514dfebd4fa86322c02d6be1604483d834f8d0941e7561f47a514be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SHIKOBA";
        
        $__internal_1c399cf514dfebd4fa86322c02d6be1604483d834f8d0941e7561f47a514be40->leave($__internal_1c399cf514dfebd4fa86322c02d6be1604483d834f8d0941e7561f47a514be40_prof);

        
        $__internal_880bbe982126e92545a164196022ef275973ee1e255f5545132fdb0ba16b17e8->leave($__internal_880bbe982126e92545a164196022ef275973ee1e255f5545132fdb0ba16b17e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63dd907c318d0a864b769e1965a990b986b3eb1b52215fc32774453ecff2addb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dd907c318d0a864b769e1965a990b986b3eb1b52215fc32774453ecff2addb->enter($__internal_63dd907c318d0a864b769e1965a990b986b3eb1b52215fc32774453ecff2addb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6f7ad839c783e6b647f49472b790640942ae518c561cb09283c4602f3911d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f7ad839c783e6b647f49472b790640942ae518c561cb09283c4602f3911d57->enter($__internal_e6f7ad839c783e6b647f49472b790640942ae518c561cb09283c4602f3911d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosenmaterial.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.structure.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/iCheck/blue.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster.bundle.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster-sideTip-light.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-confirm.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fileInput/component.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/daterangepicker.min.css\">

        <!--Import materialize.css-->

        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    ";
        
        $__internal_e6f7ad839c783e6b647f49472b790640942ae518c561cb09283c4602f3911d57->leave($__internal_e6f7ad839c783e6b647f49472b790640942ae518c561cb09283c4602f3911d57_prof);

        
        $__internal_63dd907c318d0a864b769e1965a990b986b3eb1b52215fc32774453ecff2addb->leave($__internal_63dd907c318d0a864b769e1965a990b986b3eb1b52215fc32774453ecff2addb_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4b3c1f6061c2b751541b63d6f8076af31fb5e2bb7301cee4ebf6ea271a7fc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b3c1f6061c2b751541b63d6f8076af31fb5e2bb7301cee4ebf6ea271a7fc66->enter($__internal_f4b3c1f6061c2b751541b63d6f8076af31fb5e2bb7301cee4ebf6ea271a7fc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da5d39d25d150cddabc4700368ea729ae9d222005f3ddc6266827d48c54abd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5d39d25d150cddabc4700368ea729ae9d222005f3ddc6266827d48c54abd59->enter($__internal_da5d39d25d150cddabc4700368ea729ae9d222005f3ddc6266827d48c54abd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>

        <!-- script antiguos -->
        <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tooltip/tooltipster.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-confirm.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" charset=\"utf8\"
                src=\"cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileInput/custom-file-input.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/jquery.daterangepicker.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepickerrang.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/convivencia.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.css\"/>

        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.js\"></script>



    ";
        
        $__internal_da5d39d25d150cddabc4700368ea729ae9d222005f3ddc6266827d48c54abd59->leave($__internal_da5d39d25d150cddabc4700368ea729ae9d222005f3ddc6266827d48c54abd59_prof);

        
        $__internal_f4b3c1f6061c2b751541b63d6f8076af31fb5e2bb7301cee4ebf6ea271a7fc66->leave($__internal_f4b3c1f6061c2b751541b63d6f8076af31fb5e2bb7301cee4ebf6ea271a7fc66_prof);

    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe7ee08dffcee5daef2f64309c39f8e7e992f163c3d530f98d3d3002e8c5e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe7ee08dffcee5daef2f64309c39f8e7e992f163c3d530f98d3d3002e8c5e30->enter($__internal_7fe7ee08dffcee5daef2f64309c39f8e7e992f163c3d530f98d3d3002e8c5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb06645b7d55b23232fcc4511a21a341b3698829166d17cfb9dfbec0af9bce6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb06645b7d55b23232fcc4511a21a341b3698829166d17cfb9dfbec0af9bce6f->enter($__internal_eb06645b7d55b23232fcc4511a21a341b3698829166d17cfb9dfbec0af9bce6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb06645b7d55b23232fcc4511a21a341b3698829166d17cfb9dfbec0af9bce6f->leave($__internal_eb06645b7d55b23232fcc4511a21a341b3698829166d17cfb9dfbec0af9bce6f_prof);

        
        $__internal_7fe7ee08dffcee5daef2f64309c39f8e7e992f163c3d530f98d3d3002e8c5e30->leave($__internal_7fe7ee08dffcee5daef2f64309c39f8e7e992f163c3d530f98d3d3002e8c5e30_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 131,  296 => 58,  292 => 57,  288 => 56,  282 => 53,  278 => 52,  272 => 49,  266 => 46,  262 => 45,  258 => 44,  254 => 43,  248 => 40,  244 => 39,  239 => 36,  230 => 35,  213 => 27,  209 => 26,  200 => 20,  195 => 18,  191 => 17,  187 => 16,  183 => 15,  179 => 14,  175 => 13,  171 => 12,  166 => 11,  161 => 7,  152 => 6,  134 => 5,  112 => 132,  109 => 131,  106 => 129,  48 => 72,  46 => 35,  41 => 34,  39 => 6,  35 => 5,  29 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}SHIKOBA{% endblock %}</title>
    {% block stylesheets %}
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        {# Chosen css #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/chosenmaterial.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.structure.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.theme.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/iCheck/blue.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster.bundle.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster-sideTip-light.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-confirm.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/fileInput/component.css') }}\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/daterangepicker.min.css\">

        <!--Import materialize.css-->

        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" media=\"screen,projection\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/favicon.ico') }}\"/>
    {% block javascripts %}
        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>

        <!-- script antiguos -->
        <script type=\"text/javascript\" src=\"{{ asset('js/chosen/chosen.jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/datepicker/jquery-ui.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/iCheck/icheck.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/tooltip/tooltipster.bundle.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
        <script src=\"{{ asset('js/jquery-confirm.min.js') }}\"></script>
        <script type=\"text/javascript\" charset=\"utf8\"
                src=\"cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/fileInput/custom-file-input.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/moment.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/jquery.daterangepicker.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/datepickerrang.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/convivencia.js') }}\"></script>
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.css\"/>

        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.js\"></script>



    {% endblock %}
</head>
<body>
<main>
    <div class=\"loaderIntro\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
    </div>

     <div class=\"containerLoader\">
         {#<div class=\"\">#}
             <div class=\"row\" style=\"margin-bottom: -10px;display: none;\">
                 {# <div class=\"row\" style=\"margin-bottom: -10px;\">#}
                {% block body %}{% endblock %}
            </div>
        </div>
</main>
<footer class=\"page-footer blue darken-3\">
    <div class=\"footer-copyright\">
        <div class=\"container center\">
            © 2017 - Shikoba - Sawabona
        </div>
    </div>
</footer>
</body>
</html>
", "base2.html.twig", "D:\\xampp32\\htdocs\\nuevashikoba\\app\\Resources\\views\\base2.html.twig");
    }
}
