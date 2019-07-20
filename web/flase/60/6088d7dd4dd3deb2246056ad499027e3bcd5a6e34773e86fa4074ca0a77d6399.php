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

/* default/about.html.twig */
class __TwigTemplate_cfba8dbe47ca5a248624ea861784ab988401f7422412856d1b77de7620d653d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Header -->

    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
           ";
        // line 10
        $this->loadTemplate("default/information-generale.html.twig", "default/about.html.twig", 10)->display($context);
        // line 11
        echo "
            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">HTML5 & CSS Developer</div>
                    <div class=\"main_title\">Jeremy Smith</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                    <div class=\"about_content\">
                        <div class=\"about_title\">Description</div>
                        <div class=\"about_text\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit.</p>
                        </div>

                        <!-- Loaders -->

                        <div class=\"loaders clearfix\">

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.75\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">intuition</div>
                                    <div class=\"loader_subtitle\">Etiam nec odio vestibulum est.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.83\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">creativity</div>
                                    <div class=\"loader_subtitle\">Odio vestibulum est mattis.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.25\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">pure luck</div>
                                    <div class=\"loader_subtitle\">Vestibulum est mattis effic.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.95\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">awesomeness</div>
                                    <div class=\"loader_subtitle\">Vestibulum est mattis effic.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div align='center'>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Header -->

    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
           {% include \"default/information-generale.html.twig\"  %}

            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">HTML5 & CSS Developer</div>
                    <div class=\"main_title\">Jeremy Smith</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                    <div class=\"about_content\">
                        <div class=\"about_title\">Description</div>
                        <div class=\"about_text\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit.</p>
                        </div>

                        <!-- Loaders -->

                        <div class=\"loaders clearfix\">

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.75\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">intuition</div>
                                    <div class=\"loader_subtitle\">Etiam nec odio vestibulum est.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.83\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">creativity</div>
                                    <div class=\"loader_subtitle\">Odio vestibulum est mattis.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.25\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">pure luck</div>
                                    <div class=\"loader_subtitle\">Vestibulum est mattis effic.</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class=\"loader_container\">
                                <div class=\"loader\" data-perc=\"0.95\"></div>
                                <div class=\"loader_content text-center\">
                                    <div class=\"loader_title\">awesomeness</div>
                                    <div class=\"loader_subtitle\">Vestibulum est mattis effic.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div align='center'>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
{% endblock %}
", "default/about.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/default/about.html.twig");
    }
}
