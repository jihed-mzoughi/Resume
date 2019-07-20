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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_579d77ee9aa41ae381b73ff99285171a556984564b3fcb2b4b722bddc89abb9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login100-form validate-form\">
                ";
        // line 3
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 6
        echo "

                <span class=\"login100-form-title p-b-34\">
                                    Account Login
                                </span>

                ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                <span class=\"login100-form-title p-b-34\" style=\"color: red;\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo " </span>
                ";
        }
        // line 15
        echo "



                <div class=\"wrap-input100 rs1-wrap-input100 validate-input m-b-20\" data-validate=\"Type user name\">
                    <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\"  value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\"  class=\"input100\" autocomplete=\"username\"  placeholder=\"User name\"/>
                    <span class=\"focus-input100\"></span>
                </div>


                <div class=\"wrap-input100 rs2-wrap-input100 validate-input m-b-20\" data-validate=\"Type password\">
                    <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" class=\"input100\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" autocomplete=\"current-password\" />
                    <span class=\"focus-input100\"></span>
                </div>



                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" class=\"form-control\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>

                        </label>
                    </div>
                </div>

                <div class=\"container-login100-form-btn\">
                    <input type=\"submit\"  class=\"login100-form-btn\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>



            </form>





















";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  106 => 38,  92 => 27,  83 => 21,  79 => 20,  72 => 15,  66 => 13,  64 => 12,  56 => 6,  50 => 4,  48 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"login100-form validate-form\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}


                <span class=\"login100-form-title p-b-34\">
                                    Account Login
                                </span>

                {% if error %}
                <span class=\"login100-form-title p-b-34\" style=\"color: red;\"> {{ error.messageKey|trans(error.messageData, 'security') }} </span>
                {% endif %}




                <div class=\"wrap-input100 rs1-wrap-input100 validate-input m-b-20\" data-validate=\"Type user name\">
                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\"  value=\"{{ last_username }}\"  class=\"input100\" autocomplete=\"username\"  placeholder=\"User name\"/>
                    <span class=\"focus-input100\"></span>
                </div>


                <div class=\"wrap-input100 rs2-wrap-input100 validate-input m-b-20\" data-validate=\"Type password\">
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" class=\"input100\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" autocomplete=\"current-password\" />
                    <span class=\"focus-input100\"></span>
                </div>



                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" class=\"form-control\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                        </label>
                    </div>
                </div>

                <div class=\"container-login100-form-btn\">
                    <input type=\"submit\"  class=\"login100-form-btn\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </div>



            </form>





















", "@FOSUser/Security/login_content.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
