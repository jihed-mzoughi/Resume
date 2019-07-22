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

/* interet/show.html.twig */
class __TwigTemplate_29b48937f21ebd85e50c1bcaf87f71bcb95ea31bdc30bf3a177dad9fd945cfee extends \Twig\Template
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
        return "AdminBundle/views/BaseAdminDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interet/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interet/show.html.twig"));

        $this->parent = $this->loadTemplate("AdminBundle/views/BaseAdminDashboard.html.twig", "interet/show.html.twig", 1);
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
        echo "    <h1>Interet</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heading</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 14, $this->source); })()), "heading", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Desciption</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 18, $this->source); })()), "desciption", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>




            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "




    <div class=\"w3-show-inline-block\">
        <div class=\"w3-bar\">

            <a type=\"submit\"  class=\"btn btn-primary\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_edit", ["id" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["interet"]) || array_key_exists("interet", $context) ? $context["interet"] : (function () { throw new RuntimeError('Variable "interet" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Edit</a>
            <input type=\"submit\"  class=\"btn btn-danger\" value=\"Delete \">
        </div>
    </div>
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "interet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  122 => 39,  121 => 38,  110 => 30,  97 => 22,  90 => 18,  83 => 14,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'AdminBundle/views/BaseAdminDashboard.html.twig' %}

{% block body %}
    <h1>Interet</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ interet.id }}</td>
            </tr>
            <tr>
                <th>Heading</th>
                <td>{{ interet.heading }}</td>
            </tr>
            <tr>
                <th>Desciption</th>
                <td>{{ interet.desciption }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if interet.createdAt %}{{ interet.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>




            {{ form_start(delete_form) }}




    <div class=\"w3-show-inline-block\">
        <div class=\"w3-bar\">

            <a type=\"submit\"  class=\"btn btn-primary\" href=\"{{ path('admin_interet_edit',
                { 'id': interet.id }) }}\">Edit</a>
            <input type=\"submit\"  class=\"btn btn-danger\" value=\"Delete \">
        </div>
    </div>
    {{ form_end(delete_form) }}

{% endblock %}
", "interet/show.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/interet/show.html.twig");
    }
}
