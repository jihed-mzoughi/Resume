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

/* front-end/information-generale.html.twig */
class __TwigTemplate_eb514f5aaa130c612dff41929e0503851f8af517f66b26e51d15e8aafaf8b5cf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-end/information-generale.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-end/information-generale.html.twig"));

        // line 1
        echo "<div class=\"general_info d-flex flex-xl-column flex-md-row flex-column\">
    <div>
        <div class=\"general_info_image\">
            <div class=\"background_image\" style=\"background-image:url(images/smith.jpg)\"></div>
            <div class=\"header_button_2\">
                <a href=\"#\">Available for freelance work</a>
                <div class=\"d-flex flex-column align-items-center justify-content-center\"><img src=\"";
        // line 7
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
        // line 16
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
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                    <div class=\"general_info_text\">Date of Birth: <span>August 25, 1991</span></div>
                </li>
                <li class=\"d-flex flex-row align-items-center justify-content-start\">
                    <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                    <div class=\"general_info_text\"><a href=\"mailto:contact@linque.com?subject=Job_Inquiry\">contactme@templatename.com</a></div>
                </li>
                <li class=\"d-flex flex-row align-items-center justify-content-start\">
                    <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                    <div class=\"general_info_text\">+76 6524 567862 763</div>
                </li>
                <li class=\"d-flex flex-row align-items-center justify-content-start\">
                    <div class=\"general_info_icon d-flex flex-column align-items-start justify-content-center\"><img src=\"";
        // line 36
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
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front-end/information-generale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  88 => 32,  81 => 28,  74 => 24,  63 => 16,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"general_info d-flex flex-xl-column flex-md-row flex-column\">
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
</div>", "front-end/information-generale.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/front-end/information-generale.html.twig");
    }
}
