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

/* Default/index.html.twig */
class __TwigTemplate_3a03a0ffcdb8d7cec4e1fb0964964862611ec35e026ab033d37d992943b12831 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/index.html.twig", 1);
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
        echo "

    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            <div class=\"general_info d-flex flex-xl-column flex-md-row flex-column\">
                <div>
                    <div class=\"general_info_image\">
                        <div class=\"background_image\" style=\"background-image:url(images/smith.jpg)\"></div>
                        <div class=\"header_button_2\">
                            <a href=\"#\">Available for freelance work</a>
                            <div class=\"d-flex flex-column align-items-center justify-content-center\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/download.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"general_info_content\">
                    <div class=\"general_info_content_inner mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                        <div class=\"general_info_title\">General Information</div>
                        <ul class=\"general_info_list\">
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_1.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"general_info_text\">Name: <span>Jeremy Smith</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"></div>
                                <div class=\"general_info_text\">Location: <span>London UK</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"general_info_text\">Date of Birth: <span>August 25, 1991</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"general_info_text\"><a href=\"mailto:contact@linque.com?subject=Job_Inquiry\">contactme@templatename.com</a></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"general_info_text\">+76 6524 567862 763</div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_5.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"general_info_text\"><a href=\"mailto:contact@linque.com\">www.mytemplatename.com</a></div>
                            </li>
                        </ul>

                        <!-- Social -->
                        <div class=\"social_container\">
                            <ul class=\"d-flex flex-row align-items-start justify-content-start\">
                                <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  119 => 41,  112 => 37,  105 => 33,  94 => 25,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    <div class=\"content_container\">
        <div class=\"main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start\">

            <!-- General Information -->
            <div class=\"general_info d-flex flex-xl-column flex-md-row flex-column\">
                <div>
                    <div class=\"general_info_image\">
                        <div class=\"background_image\" style=\"background-image:url(images/smith.jpg)\"></div>
                        <div class=\"header_button_2\">
                            <a href=\"#\">Available for freelance work</a>
                            <div class=\"d-flex flex-column align-items-center justify-content-center\"><img src=\"{{ asset('lebenslauf/images/download.png')}}\" alt=\"\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"general_info_content\">
                    <div class=\"general_info_content_inner mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">
                        <div class=\"general_info_title\">General Information</div>
                        <ul class=\"general_info_list\">
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"{{ asset('lebenslauf/images/icon_1.png')}}\" alt=\"\"></div>
                                <div class=\"general_info_text\">Name: <span>Jeremy Smith</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"></div>
                                <div class=\"general_info_text\">Location: <span>London UK</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"{{ asset('lebenslauf/images/icon_2.png')}}\" alt=\"\"></div>
                                <div class=\"general_info_text\">Date of Birth: <span>August 25, 1991</span></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"{{ asset('lebenslauf/images/icon_3.png')}}\" alt=\"\"></div>
                                <div class=\"general_info_text\"><a href=\"mailto:contact@linque.com?subject=Job_Inquiry\">contactme@templatename.com</a></div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"{{ asset('lebenslauf/images/icon_4.png')}}\" alt=\"\"></div>
                                <div class=\"general_info_text\">+76 6524 567862 763</div>
                            </li>
                            <li class=\"d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"{{ asset('lebenslauf/images/icon_5.png')}}\" alt=\"\"></div>
                                <div class=\"general_info_text\"><a href=\"mailto:contact@linque.com\">www.mytemplatename.com</a></div>
                            </li>
                        </ul>

                        <!-- Social -->
                        <div class=\"social_container\">
                            <ul class=\"d-flex flex-row align-items-start justify-content-start\">
                                <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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

{% endblock %}
", "Default/index.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/Default/index.html.twig");
    }
}
