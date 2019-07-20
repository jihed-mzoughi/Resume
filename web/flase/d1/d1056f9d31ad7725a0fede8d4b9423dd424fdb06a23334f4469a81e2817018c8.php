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

/* default/interet.html.twig */
class __TwigTemplate_47cef5854ecc6666a089ed73a701a53b003a0ca69df36edca48f9cae73d86c99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/interet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/interet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/interet.html.twig", 1);
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
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/testimonials.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/testimonials_responsive.css"), "html", null, true);
        echo "\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <!-- Header -->



    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            ";
        // line 23
        $this->loadTemplate("default/information-generale.html.twig", "default/interet.html.twig", 23)->display($context);
        // line 24
        echo "
            <!-- Main Content -->


            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I make </div>
                    <div class=\"main_title\"> in free time</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                    <!-- Testimonials -->

                    <div class=\"testimonials\">

                        <!-- Testimonials Slider -->
                        <div class=\"test_slider_container\">
                            <div class=\"owl-carousel owl-theme test_slider\">

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
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
        return "default/interet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  113 => 23,  103 => 15,  93 => 14,  78 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheet %}



    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/testimonials.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/testimonials_responsive.css')}}\">



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
                    <div class=\"main_subtitle\">What I make </div>
                    <div class=\"main_title\"> in free time</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                    <!-- Testimonials -->

                    <div class=\"testimonials\">

                        <!-- Testimonials Slider -->
                        <div class=\"test_slider_container\">
                            <div class=\"owl-carousel owl-theme test_slider\">

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">5* Functionality</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_1.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Fast & Friendly Guy</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_2.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class=\"owl-item test_item\">
                                    <div class=\"test_title\">Great to work with</div>
                                    <div class=\"test_text\">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class=\"test_image\"><a href=\"#\"><img src=\"images/test_3.jpg\" alt=\"\"></a></div>
                                    <div class=\"test_info\"><a href=\"#\">Diane Smith</a><span>Customer</span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>


    </div>

{% endblock %}

", "default/interet.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/default/interet.html.twig");
    }
}
