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

/* default/skills.html.twig */
class __TwigTemplate_8bed36a994d5cf7d4cbfe16a734db880925a6fa4b7c6ec3c07e9207492c7d832 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/skills.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/skills.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/skills.html.twig", 1);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/skills.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/skills_responsive.css"), "html", null, true);
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
        $this->loadTemplate("default/information-generale.html.twig", "default/skills.html.twig", 23)->display($context);
        // line 24
        echo "            <!-- Main Content -->


            <div class=\"main_content\">
                <div class=\"main_title_container d-flex flex-column align-items-start justify-content-end\">
                    <div class=\"main_subtitle\">What I am good at</div>
                    <div class=\"main_title\">My Skills</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Skills Content -->
                    <div class=\"skills\">
                        <div class=\"skills_text\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-xl-6\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.</p>
                                    </div>
                                    <div class=\"col-xl-6\">
                                        <p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bars -->
                        <div class=\"progress_bars\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_1_pbar\" class=\"skill_bars\" data-perc=\"0.70\" data-name=\"skill_1_pbar\" data-color-start=\"#79ccff\" data-color-end=\"#9b74ff\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                        <div id=\"skill_2_pbar\" class=\"skill_bars\" data-perc=\"0.60\" data-name=\"skill_2_pbar\" data-color-start=\"#ff4646\" data-color-end=\"#ff26d9\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_3_pbar\" class=\"skill_bars\" data-perc=\"0.75\" data-name=\"skill_3_pbar\" data-color-start=\"#0054ff\" data-color-end=\"#ff23d3\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_4_pbar\" class=\"skill_bars\" data-perc=\"1.0\" data-name=\"skill_4_pbar\" data-color-start=\"#79ff7c\" data-color-end=\"#ffbd4a\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_5_pbar\" class=\"skill_bars\" data-perc=\"0.90\" data-name=\"skill_5_pbar\" data-color-start=\"#79ff8f\" data-color-end=\"#7b74ff\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_6_pbar\" class=\"skill_bars\" data-perc=\"1.0\" data-name=\"skill_6_pbar\" data-color-start=\"#ff2d72\" data-color-end=\"#ffab79\"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Milestones -->

                        <div class=\"milestones clearfix\">

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_6.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"14\">0</div>
                                <div class=\"milestone_text\">Years of Experience</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_7.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"1000\" data-sign-before=\"+\">0</div>
                                <div class=\"milestone_text\">Happy Clients</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_8.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"14\" data-sign-after=\"k\">0</div>
                                <div class=\"milestone_text\">Followers on FB</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/images/icon_9.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"732\">0</div>
                                <div class=\"milestone_text\">Finished Projects</div>
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

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo "
            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/popper.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/styles/bootstrap-4.1.2/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/progressbar/progressbar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lebenslauf/js/skills.js"), "html", null, true);
        echo "\"></script>



        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 164,  316 => 163,  312 => 162,  308 => 161,  304 => 160,  300 => 159,  296 => 158,  292 => 157,  288 => 156,  284 => 155,  280 => 154,  276 => 153,  272 => 152,  269 => 151,  259 => 150,  234 => 133,  224 => 126,  214 => 119,  204 => 112,  114 => 24,  112 => 23,  102 => 15,  92 => 14,  77 => 7,  73 => 6,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheet %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/skills.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lebenslauf/styles/skills_responsive.css')}}\">



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
                    <div class=\"main_title\">My Skills</div>
                </div>
                <div class=\"main_content_scroll mCustomScrollbar\" data-mcs-theme=\"minimal-dark\">

                    <!-- Skills Content -->
                    <div class=\"skills\">
                        <div class=\"skills_text\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-xl-6\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.</p>
                                    </div>
                                    <div class=\"col-xl-6\">
                                        <p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bars -->
                        <div class=\"progress_bars\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_1_pbar\" class=\"skill_bars\" data-perc=\"0.70\" data-name=\"skill_1_pbar\" data-color-start=\"#79ccff\" data-color-end=\"#9b74ff\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                        <div id=\"skill_2_pbar\" class=\"skill_bars\" data-perc=\"0.60\" data-name=\"skill_2_pbar\" data-color-start=\"#ff4646\" data-color-end=\"#ff26d9\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_3_pbar\" class=\"skill_bars\" data-perc=\"0.75\" data-name=\"skill_3_pbar\" data-color-start=\"#0054ff\" data-color-end=\"#ff23d3\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_4_pbar\" class=\"skill_bars\" data-perc=\"1.0\" data-name=\"skill_4_pbar\" data-color-start=\"#79ff7c\" data-color-end=\"#ffbd4a\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_5_pbar\" class=\"skill_bars\" data-perc=\"0.90\" data-name=\"skill_5_pbar\" data-color-start=\"#79ff8f\" data-color-end=\"#7b74ff\"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class=\"col-xl-4 col-lg-6 pb_col\">
                                        <div class=\"pb_item\">
                                            <div class=\"p_bar_title\">Developement</div>
                                            <div id=\"skill_6_pbar\" class=\"skill_bars\" data-perc=\"1.0\" data-name=\"skill_6_pbar\" data-color-start=\"#ff2d72\" data-color-end=\"#ffab79\"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Milestones -->

                        <div class=\"milestones clearfix\">

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"{{ asset('lebenslauf/images/icon_6.png')}}\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"14\">0</div>
                                <div class=\"milestone_text\">Years of Experience</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"{{ asset('lebenslauf/images/icon_7.png')}}\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"1000\" data-sign-before=\"+\">0</div>
                                <div class=\"milestone_text\">Happy Clients</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"{{ asset('lebenslauf/images/icon_8.png')}}\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"14\" data-sign-after=\"k\">0</div>
                                <div class=\"milestone_text\">Followers on FB</div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"milestone text-center\">
                                <div class=\"milestone_icon\"><img src=\"{{ asset('lebenslauf/images/icon_9.png')}}\" alt=\"\"></div>
                                <div class=\"milestone_counter\" data-end-value=\"732\">0</div>
                                <div class=\"milestone_text\">Finished Projects</div>
                            </div>

                        </div>

                    </div>
                </div>
        </div>


    </div>

{% endblock %}


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
            <script src=\"{{ asset('lebenslauf/js/skills.js')}}\"></script>



        {% endblock %}
", "default/skills.html.twig", "/Users/jihed/Sites/Lebenslauf/app/Resources/views/default/skills.html.twig");
    }
}
