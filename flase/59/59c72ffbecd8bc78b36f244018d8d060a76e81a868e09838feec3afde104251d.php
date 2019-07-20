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

/* :default:education.html.twig */
class __TwigTemplate_e0741d8ed053ebf10d050e18c8c080e660bcef1eae6c9422e8ce201c4871b211 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":default:education.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":default:education.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":default:education.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"vCard template project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/education.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/education_responsive.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <!-- Header -->



    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            ";
        // line 25
        $this->loadTemplate("default/information-generale.html.twig", ":default:education.html.twig", 25)->display($context);
        // line 26
        echo "
            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I am good at</div>
                    <div class=\"main_title\">My Education</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Education -->

                    <div class=\"education\">

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2010</div></div>
                            <div><div class=\"edu_image\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/edu_1.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">University of Colorado</div>
                                    <div class=\"edu_subtitle\">Developer Diploma PhD</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2008</div></div>
                            <div><div class=\"edu_image\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/edu_2.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">Graphic School</div>
                                    <div class=\"edu_subtitle\">Graphic Design Course</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2007</div></div>
                            <div><div class=\"edu_image\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/edu_3.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">Colorado High School</div>
                                    <div class=\"edu_subtitle\">Bachelor Degree - Developer</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 73,  163 => 58,  145 => 43,  126 => 26,  124 => 25,  114 => 17,  104 => 16,  92 => 13,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}

<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"vCard template project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.css')}}\">
<link href=\"{{ asset('lebenslauf/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/education.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/education_responsive.css')}}\">
{% endblock %}

{% block body %}
    <!-- Header -->



    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            {% include \"default/information-generale.html.twig\"  %}

            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I am good at</div>
                    <div class=\"main_title\">My Education</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Education -->

                    <div class=\"education\">

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2010</div></div>
                            <div><div class=\"edu_image\"><img src=\"{{ asset('lebenslauf/images/edu_1.png')}}\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">University of Colorado</div>
                                    <div class=\"edu_subtitle\">Developer Diploma PhD</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2008</div></div>
                            <div><div class=\"edu_image\"><img src=\"{{ asset('lebenslauf/images/edu_2.png')}}\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">Graphic School</div>
                                    <div class=\"edu_subtitle\">Graphic Design Course</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Education Item -->
                        <div class=\"edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start\">
                            <div><div class=\"edu_year\">2007</div></div>
                            <div><div class=\"edu_image\"><img src=\"{{ asset('lebenslauf/images/edu_3.png')}}\" alt=\"\"></div></div>
                            <div class=\"edu_content\">
                                <div class=\"edu_title_container\">
                                    <div class=\"edu_title\">Colorado High School</div>
                                    <div class=\"edu_subtitle\">Bachelor Degree - Developer</div>
                                </div>
                                <div class=\"edu_text\">
                                    <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>

{% endblock %}
", ":default:education.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/default/education.html.twig");
    }
}
