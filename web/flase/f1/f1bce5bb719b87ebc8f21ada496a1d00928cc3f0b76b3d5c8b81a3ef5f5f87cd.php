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

/* interet/index.html.twig */
class __TwigTemplate_6af3ef07e12949b689d8e47890cf1ddd882f3ce47a1b6f0f9ee7e08fe3a77861 extends \Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interet/index.html.twig"));

        $this->parent = $this->loadTemplate("AdminBundle/views/BaseAdminDashboard.html.twig", "interet/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "


<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\"
           href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <h1>Interets list</h1>


        <p data-placement=\"left\" data-toggle=\"tooltip\" title=\"Creat\"><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_new");
        echo "\"
                                                                       class=\"btn btn-outline-success\" data-title=\"Edit\"  ><span class=\"glyphicon glyphicon-plus\"></span> Create a new interet</a></p>







        <table id=\"example2\" class=\"table table-bordered table-hover\">
            <thead>

            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Desciption</th>
                <th>Date Creation</th>
                <th>Actions</th>
            </tr>

            </thead>

            <tbody>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interets"]) || array_key_exists("interets", $context) ? $context["interets"] : (function () { throw new RuntimeError('Variable "interets" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["interet"]) {
            // line 54
            echo "            <tr>
                <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["interet"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interet"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interet"], "heading", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interet"], "desciption", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["interet"], "createdAt", [], "any", false, false, false, 58)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interet"], "createdAt", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td><span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["interet"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\" data-title=\"Edit\"  >
                            <span class=\"glyphicon glyphicon-pencil\"></span></a></span>

                <span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["interet"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" data-title=\"Delete\"  >
                            <span class=\"glyphicon glyphicon-trash\"></span></a></span>
               <span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Show\"><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_interet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["interet"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\" data-title=\"Show\" >
                       <span class=\"glyphicon glyphicon-zoom-in\"></span></a></span></td>



            </tr>

            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            <tfoot>
            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Desciption</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
            </tfoot>
        </table>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 95
        echo "
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("adminbundle/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>


<!-- page script -->
<script>
    \$(function () {
        \$('#example1').DataTable()
        \$('#example2').DataTable({

        })
    })
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "interet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 97,  248 => 96,  245 => 95,  235 => 94,  211 => 74,  196 => 65,  191 => 63,  185 => 60,  178 => 58,  174 => 57,  170 => 56,  164 => 55,  161 => 54,  157 => 53,  131 => 30,  125 => 26,  115 => 25,  99 => 17,  95 => 16,  90 => 14,  85 => 12,  80 => 10,  75 => 8,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'AdminBundle/views/BaseAdminDashboard.html.twig' %}


 {% block stylesheet %}



<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/bower_components/bootstrap/dist/css/bootstrap.min.css')}}\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/bower_components/font-awesome/css/font-awesome.min.css')}}\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/bower_components/Ionicons/css/ionicons.min.css')}}\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/dist/css/AdminLTE.min.css')}}\">
<link rel=\"stylesheet\" href=\"{{ asset('adminbundle/dist/css/skins/_all-skins.min.css')}}\">
<link rel=\"stylesheet\"
           href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


 {% endblock %}


{% block body %}

    <h1>Interets list</h1>


        <p data-placement=\"left\" data-toggle=\"tooltip\" title=\"Creat\"><a href=\"{{ path('admin_interet_new') }}\"
                                                                       class=\"btn btn-outline-success\" data-title=\"Edit\"  ><span class=\"glyphicon glyphicon-plus\"></span> Create a new interet</a></p>







        <table id=\"example2\" class=\"table table-bordered table-hover\">
            <thead>

            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Desciption</th>
                <th>Date Creation</th>
                <th>Actions</th>
            </tr>

            </thead>

            <tbody>
            {% for interet in interets %}
            <tr>
                <td><a href=\"{{ path('admin_interet_show', { 'id': interet.id }) }}\">{{ interet.id }}</a></td>
                <td>{{ interet.heading }}</td>
                <td>{{ interet.desciption }}</td>
                <td>{% if interet.createdAt %}{{ interet.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>

                <td><span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><a href=\"{{ path('admin_interet_edit', { 'id': interet.id }) }}\" class=\"btn btn-primary btn-xs\" data-title=\"Edit\"  >
                            <span class=\"glyphicon glyphicon-pencil\"></span></a></span>

                <span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><a href=\"{{ path('admin_interet_edit', { 'id': interet.id }) }}\" class=\"btn btn-danger btn-xs\" data-title=\"Delete\"  >
                            <span class=\"glyphicon glyphicon-trash\"></span></a></span>
               <span data-placement=\"top\" data-toggle=\"tooltip\" title=\"Show\"><a href=\"{{ path('admin_interet_show', { 'id': interet.id }) }}\" class=\"btn btn-info btn-xs\" data-title=\"Show\" >
                       <span class=\"glyphicon glyphicon-zoom-in\"></span></a></span></td>



            </tr>

            </tbody>
            {% endfor %}
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Desciption</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
            </tfoot>
        </table>




{% endblock %}





{% block javascript %}

<script src=\"{{ asset('adminbundle/bower_components/datatables.net/js/jquery.dataTables.min.js')}}\"></script>
<script src=\"{{ asset('adminbundle/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}\"></script>


<!-- page script -->
<script>
    \$(function () {
        \$('#example1').DataTable()
        \$('#example2').DataTable({

        })
    })
</script>

{% endblock %}", "interet/index.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/interet/index.html.twig");
    }
}
