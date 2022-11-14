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

/* admin_category/kategorija.html.twig */
class __TwigTemplate_5903ed4319ec5bacfa9fa43512002925fa4778314960290507b71371e1c4859f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metatags' => [$this, 'block_metatags'],
            'content' => [$this, 'block_content'],
            'footerjavascript' => [$this, 'block_footerjavascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_category/kategorija.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_category/kategorija.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_category/kategorija.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Kategorije - Prodaja autoprikolica, traktora."), "html", null, true);
        echo " | prikolica.shop
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        // line 6
        echo "    ";
        $this->displayParentBlock("metatags", $context, $blocks);
        echo "
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "uri", [], "any", false, false, false, 12), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <!-- page-wrapper Start-->
    <div class=\"page-wrapper compact-wrapper dark-sidebar\" id=\"pageWrapper\">
        <!-- Page Header Start-->
        ";
        // line 19
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_category/kategorija.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_category/kategorija.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Pregled kategorije</h5>
                </div>

                <!-- New Product Add Start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Kategorija</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Nadkategorija</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 60
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 60, $this->source); })()), "parentCategoryId", [], "any", false, false, false, 60))) {
            // line 61
            echo "                                                                Nema nadkategoriju
                                                            ";
        } else {
            // line 63
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 63, $this->source); })()), "parentCategoryId", [], "any", false, false, false, 63), "getName", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                                            ";
        }
        // line 65
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 70
        echo twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Kategorija je aktivna</label>
                                                        <div class=\"col-md-9\">
                                                            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 76, $this->source); })()), "active", [], "any", false, false, false, 76) == 1)) {
            // line 77
            echo "                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            ";
        } else {
            // line 79
            echo "                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            ";
        }
        // line 81
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Meta info</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">

                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 105, $this->source); })()), "metaTitle", [], "any", false, false, false, 105), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 111
        echo twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 111, $this->source); })()), "metaDescription", [], "any", false, false, false, 111);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["kategorija"]) || array_key_exists("kategorija", $context) ? $context["kategorija"] : (function () { throw new RuntimeError('Variable "kategorija" does not exist.', 117, $this->source); })()), "metaKeywords", [], "any", false, false, false, 117), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                             </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                ";
        // line 133
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_category/kategorija.html.twig", 133)->display($context);
        // line 134
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
    <!-- Modal Start -->
    ";
        // line 142
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_category/kategorija.html.twig", 142)->display($context);
        // line 143
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 147
        echo "    ";
        // line 148
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/ckeditor/adapters/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('textarea.ckeditor').ckeditor();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_category/kategorija.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 149,  321 => 148,  319 => 147,  309 => 146,  298 => 143,  296 => 142,  286 => 134,  284 => 133,  265 => 117,  256 => 111,  247 => 105,  221 => 81,  217 => 79,  213 => 77,  211 => 76,  202 => 70,  195 => 65,  189 => 63,  185 => 61,  183 => 60,  173 => 53,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Kategorije - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
{% endblock title %}
{% block metatags %}
    {{ parent() }}
    {#    <meta name=\"description\" content=\"{{ metaData.pageMetaDescription }}\"/>#}
    {#    <meta name=\"keywords\" content=\"{{ metaData.pageMetaKeywords }}\"/>#}
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"{{ app.request.uri }}\" />
{% endblock metatags %}

{% block content %}
    <!-- page-wrapper Start-->
    <div class=\"page-wrapper compact-wrapper dark-sidebar\" id=\"pageWrapper\">
        <!-- Page Header Start-->
        {% include 'admin/admin_include/header.html.twig' %}
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            {% include 'admin/admin_include/navigation.html.twig' %}
            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Pregled kategorije</h5>
                </div>

                <!-- New Product Add Start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Kategorija</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ kategorija.name }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Nadkategorija</label>
                                                        <div class=\"col-sm-10\">
                                                            {% if kategorija.parentCategoryId is empty %}
                                                                Nema nadkategoriju
                                                            {% else %}
                                                                {{ kategorija.parentCategoryId.getName }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ kategorija.description | raw }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Kategorija je aktivna</label>
                                                        <div class=\"col-md-9\">
                                                            {% if kategorija.active == 1 %}
                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            {% else %}
                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Meta info</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">

                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ kategorija.metaTitle }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis kategorije</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ kategorija.metaDescription | raw }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ kategorija.metaKeywords }}
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                             </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                {% include 'admin/admin_include/footer.html.twig' %}
                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
    <!-- Modal Start -->
    {% include 'admin/admin_include/logout.html.twig' %}
    <!-- Modal End -->
{% endblock content %}

{% block footerjavascript %}
    {# Javascript Block #}
    <script src=\"{{ asset('assets/javascript/ckeditor/adapters/jquery.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/javascript/ckeditor/ckeditor.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('textarea.ckeditor').ckeditor();
        });
    </script>
{% endblock footerjavascript %}
", "admin_category/kategorija.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_category/kategorija.html.twig");
    }
}
