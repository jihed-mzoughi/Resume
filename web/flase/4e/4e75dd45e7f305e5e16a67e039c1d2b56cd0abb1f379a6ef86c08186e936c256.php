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

/* front-end/experience.html.twig */
class __TwigTemplate_c0eab182d9b057a894ad23d47bf10b1df5935aa3824e1f1fb1e8ade55e60d626 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-end/experience.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-end/experience.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-end/experience.html.twig", 1);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/experience.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/experience_responsive.css"), "html", null, true);
        echo "\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <!-- Header -->



    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            ";
        // line 21
        $this->loadTemplate("front-end/information-generale.html.twig", "front-end/experience.html.twig", 21)->display($context);
        // line 22
        echo "
            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I am good at</div>
                    <div class=\"main_title\">My Experience</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Experience -->

                    <div class=\"experience\">

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2016-Present</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Senior Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2014-2016</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Junior Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2012-2014</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2011-2012</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2010-2011</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
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
        return "front-end/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 22,  111 => 21,  101 => 13,  91 => 12,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/experience.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/experience_responsive.css')}}\">



{% endblock %}

{% block body %}
    <!-- Header -->



    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            {% include \"front-end/information-generale.html.twig\"  %}

            <!-- Main Content -->

            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I am good at</div>
                    <div class=\"main_title\">My Experience</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Experience -->

                    <div class=\"experience\">

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2016-Present</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Senior Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2014-2016</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Junior Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2012-2014</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2011-2012</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item -->
                        <div class=\"exp_item d-flex flex-md-row flex-column align-items-start justify-content-start\">
                            <div><div class=\"exp_time\">2010-2011</div></div>
                            <div class=\"exp_content\">
                                <div class=\"exp_title_container\">
                                    <div class=\"exp_title\">Entry Level Developer</div>
                                    <div class=\"exp_subtitle\">Company INC</div>
                                </div>
                                <div class=\"exp_text\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </div>


    </div>
{% endblock %}




", "front-end/experience.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/front-end/experience.html.twig");
    }
}
