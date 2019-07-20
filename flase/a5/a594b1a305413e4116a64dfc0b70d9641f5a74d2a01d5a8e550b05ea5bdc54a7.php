<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ::base.html.twig */
class __TwigTemplate_3d7147b38e6094143ac98441c3a78b91e61cffb00d42c113efb24139892bd4e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Resume</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"vCard template project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 27
        echo "</head>
<body>

<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">
        <div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
            <div class=\"logo\">Smith<span>.</span>CV</div>
            <div class=\"main_nav d-flex flex-row align-items-end justify-content-start\">
                <ul class=\"d-flex flex-row align-items-center justify-content-start\">
                    <li class=\"active\"><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a></li>
                    <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills");
        echo "\">Skills</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience");
        echo "\">Experience</a></li>
                    <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("education");
        echo "\">Education</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interet");
        echo "\">Interets</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                </ul>
                <div class=\"header_button ml-auto\">
                    <a href=\"#\">Available for freelance work</a>
                    <div class=\"d-flex flex-column align-items-center justify-content-center\"><img src=\"images/download.png\" alt=\"\"></div>
                </div>
            </div>
            <!-- Menu -->
            <div class=\"menu\">
                <div class=\"menu_content d-flex flex-row align-items-start justify-content-end\">
                    <div class=\"hamburger ml-auto\">menu</div>
                    <div class=\"menu_nav text-right\">
                        <ul>
                            <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a></li>
                            <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills");
        echo "\">Skills</a></li>
                            <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience");
        echo "\">Experience</a></li>
                            <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("education");
        echo "\">Education</a></li>
                            <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interet");
        echo "\">Interets</a></li>
                            <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>



    ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "






    <div align='center'>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
</div>


";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/main_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/responsive.css"), "html", null, true);
        echo "\">





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 25
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/progressbar/progressbar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/js/custom.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 112
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 112,  348 => 111,  335 => 107,  331 => 106,  327 => 105,  323 => 104,  319 => 103,  315 => 102,  311 => 101,  307 => 100,  303 => 99,  299 => 98,  295 => 97,  291 => 96,  287 => 95,  284 => 94,  274 => 93,  260 => 74,  250 => 73,  239 => 25,  229 => 24,  212 => 16,  208 => 15,  204 => 14,  200 => 13,  196 => 12,  193 => 11,  183 => 10,  173 => 111,  170 => 110,  168 => 93,  152 => 79,  150 => 73,  136 => 62,  132 => 61,  128 => 60,  124 => 59,  120 => 58,  116 => 57,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  66 => 27,  64 => 24,  61 => 23,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Resume</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"vCard template project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block stylesheets %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.css')  }}\">
    <link href=\"{{ asset('lebenslauf/plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/main_styles.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/responsive.css')}}\">





    {% endblock %}

    {% block stylesheet %}

    {% endblock %}
</head>
<body>

<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">
        <div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
            <div class=\"logo\">Smith<span>.</span>CV</div>
            <div class=\"main_nav d-flex flex-row align-items-end justify-content-start\">
                <ul class=\"d-flex flex-row align-items-center justify-content-start\">
                    <li class=\"active\"><a href=\"{{ path('about') }}\">About</a></li>
                    <li><a href=\"{{ path('skills') }}\">Skills</a></li>
                    <li><a href=\"{{ path('experience') }}\">Experience</a></li>
                    <li><a href=\"{{ path('education') }}\">Education</a></li>
                    <li><a href=\"{{ path('interet') }}\">Interets</a></li>
                    <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                </ul>
                <div class=\"header_button ml-auto\">
                    <a href=\"#\">Available for freelance work</a>
                    <div class=\"d-flex flex-column align-items-center justify-content-center\"><img src=\"images/download.png\" alt=\"\"></div>
                </div>
            </div>
            <!-- Menu -->
            <div class=\"menu\">
                <div class=\"menu_content d-flex flex-row align-items-start justify-content-end\">
                    <div class=\"hamburger ml-auto\">menu</div>
                    <div class=\"menu_nav text-right\">
                        <ul>
                            <li><a href=\"{{ path('about') }}\">About</a></li>
                            <li><a href=\"{{ path('skills') }}\">Skills</a></li>
                            <li><a href=\"{{ path('experience') }}\">Experience</a></li>
                            <li><a href=\"{{ path('education') }}\">Education</a></li>
                            <li><a href=\"{{ path('interet') }}\">Interets</a></li>
                            <li><a href=\"{{ path('contact') }}\">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>



    {% block body%}




{% endblock %}







    <div align='center'>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
</div>


{% block javascripts %}

<script src=\"{{ asset('lebenslauf/js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/styles/bootstrap-4.1.2/popper.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/greensock/TweenMax.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/greensock/TimelineMax.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/scrollmagic/ScrollMagic.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/greensock/animation.gsap.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/greensock/ScrollToPlugin.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/progressbar/progressbar.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/easing/easing.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/plugins/parallax-js-master/parallax.min.js')}}\"></script>
<script src=\"{{ asset('lebenslauf/js/custom.js')}}\"></script>

{% endblock %}

{% block javascript %}

{% endblock %}", "::base.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/base.html.twig");
    }
}
