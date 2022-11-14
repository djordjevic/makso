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

/* admin_attributes/list.html.twig */
class __TwigTemplate_6cce1469e82dc125d76a1c1fc5869c5daf2c49fc57eec97af93fa6bb2321eee6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_attributes/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_attributes/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_attributes/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Atributi - Prodaja autoprikolica, traktora."), "html", null, true);
        echo " | prikolica-centar.rs
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_attributes/list.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_attributes/list.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Lista atributa</h5>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <!-- Table Start -->
                                <div class=\"card-body\">
                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Naziv</th>
                                            <th>Kreiran</th>
                                            <th>Aktivan</th>
                                            <th>Pregledajte</th>
                                            <th>Izmenite</th>
                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["atributi"]) || array_key_exists("atributi", $context) ? $context["atributi"] : (function () { throw new RuntimeError('Variable "atributi" does not exist.', 51, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["atribut"]) {
            // line 52
            echo "                                            <tr>
                                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atribut"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atribut"], "dateAdded", [], "any", false, false, false, 55), "d.m.Y"), "html", null, true);
            echo "</td>
                                                <td class=\"text-center\">
                                                    ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["atribut"], "active", [], "any", false, false, false, 57) == 1)) {
                // line 58
                echo "                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                    ";
            } else {
                // line 60
                echo "                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                    ";
            }
            // line 62
            echo "                                                </td>
                                                <td class=\"text-center\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_view_attribute", ["id" => twig_get_attribute($this->env, $this->source, $context["atribut"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                <td class=\"text-center\"><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_attribute", ["id" => twig_get_attribute($this->env, $this->source, $context["atribut"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"><i data-feather=\"edit\"></i></a></td>
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atribut"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atribut"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite atribut</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_category", ["id" => twig_get_attribute($this->env, $this->source, $context["atribut"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" role=\"button\">Da</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atribut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                <!-- footer start-->
                ";
        // line 94
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_attributes/list.html.twig", 94)->display($context);
        // line 95
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
    <!-- Modal Start -->
    ";
        // line 103
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_attributes/list.html.twig", 103)->display($context);
        // line 104
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 108
        echo "    <script>
        \$(document).ready(function () {
            \$('#example').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/sr-SP.json',
                },
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_attributes/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 108,  301 => 107,  290 => 104,  288 => 103,  278 => 95,  276 => 94,  264 => 84,  243 => 77,  230 => 67,  225 => 65,  221 => 64,  217 => 63,  214 => 62,  210 => 60,  206 => 58,  204 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  171 => 51,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Atributi - Prodaja autoprikolica, traktora.'|trans }} | prikolica-centar.rs
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
                    <h5>Lista atributa</h5>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <!-- Table Start -->
                                <div class=\"card-body\">
                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Naziv</th>
                                            <th>Kreiran</th>
                                            <th>Aktivan</th>
                                            <th>Pregledajte</th>
                                            <th>Izmenite</th>
                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for atribut in atributi %}
                                            <tr>
                                                <td>{{ loop.index }} </td>
                                                <td>{{ atribut.name }}</td>
                                                <td>{{ atribut.dateAdded | date(\"d.m.Y\") }}</td>
                                                <td class=\"text-center\">
                                                    {% if atribut.active == 1 %}
                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                    {% else %}
                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                    {% endif %}
                                                </td>
                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_view_attribute', {id: atribut.id}) }}\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_new_attribute', {id: atribut.id}) }}\"><i data-feather=\"edit\"></i></a></td>
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{ atribut.id }}\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop{{ atribut.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite atribut</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_admin_delete_category', {id: atribut.id}) }}\" role=\"button\">Da</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
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
    <script>
        \$(document).ready(function () {
            \$('#example').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/sr-SP.json',
                },
            });
        });
    </script>
{% endblock footerjavascript %}
", "admin_attributes/list.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_attributes/list.html.twig");
    }
}
