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

/* admin_user/gazdinstvo_list.html.twig */
class __TwigTemplate_5a34fee734328fe2816a2693d2543cb37705cd5eb04c08a5aad08ed6b4438807 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/gazdinstvo_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/gazdinstvo_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_user/gazdinstvo_list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Gazdinstvo - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_user/gazdinstvo_list.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_user/gazdinstvo_list.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header title-header-1\">
                    <h5>Lista gazdinstava</h5>
                    <form class=\"d-inline-flex\">
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_company");
        echo "\" class=\"align-items-center btn btn-theme\">
                            <i data-feather=\"plus-square\"></i>Dodajte
                        </a>
                    </form>
                </div>
                <!-- All User Table Start -->
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
                                            <th>Id</th>
                                            <th>Ime i prezime</th>
                                            <th>Broj gazdinstva</th>
                                            <th>Email</th>
                                            <th>Kreiran</th>
                                            <th>Pregledajte</th>
                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["firme"]) || array_key_exists("firme", $context) ? $context["firme"] : (function () { throw new RuntimeError('Variable "firme" does not exist.', 57, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["firma"]) {
            // line 58
            echo "                                            <tr>
                                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
                                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                                <td><strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "getFullName", [], "method", false, false, false, 61), "html", null, true);
            echo "</strong></td>
                                                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "gazdinstvo", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
";
            // line 65
            echo "                                                <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "created", [], "any", false, false, false, 65), "d.m.Y"), "html", null, true);
            echo "</td>
                                                <td class=\"text-center\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_view_gazdinstvo", ["id" => twig_get_attribute($this->env, $this->source, $context["firma"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
";
            // line 68
            echo "                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["firma"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite gazdinstvo</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_gazdinstvo", ["id" => twig_get_attribute($this->env, $this->source, $context["firma"], "id", [], "any", false, false, false, 80)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['firma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->
                <!-- footer start-->
                ";
        // line 97
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_user/gazdinstvo_list.html.twig", 97)->display($context);
        // line 98
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 107
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_user/gazdinstvo_list.html.twig", 107)->display($context);
        // line 108
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 112
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
        return "admin_user/gazdinstvo_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 112,  307 => 111,  296 => 108,  294 => 107,  283 => 98,  281 => 97,  269 => 87,  248 => 80,  235 => 70,  229 => 68,  225 => 66,  220 => 65,  216 => 63,  212 => 62,  208 => 61,  204 => 60,  200 => 59,  197 => 58,  180 => 57,  151 => 31,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Gazdinstvo - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                <div class=\"title-header title-header-1\">
                    <h5>Lista gazdinstava</h5>
                    <form class=\"d-inline-flex\">
                        <a href=\"{{ path('app_admin_new_company') }}\" class=\"align-items-center btn btn-theme\">
                            <i data-feather=\"plus-square\"></i>Dodajte
                        </a>
                    </form>
                </div>
                <!-- All User Table Start -->
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
                                            <th>Id</th>
                                            <th>Ime i prezime</th>
                                            <th>Broj gazdinstva</th>
                                            <th>Email</th>
                                            <th>Kreiran</th>
                                            <th>Pregledajte</th>
                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for firma in firme %}
                                            <tr>
                                                <td>{{ loop.index }} </td>
                                                <td>{{ firma.id }}</td>
                                                <td><strong>{{ firma.getFullName() }}</strong></td>
                                                <td>{{ firma.gazdinstvo }}</td>
                                                <td>{{ firma.email }}</td>
{#                                                <td>{{ firma.city }}</td>#}
                                                <td>{{ firma.created | date(\"d.m.Y\") }}</td>
                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_view_gazdinstvo', {id: firma.id}) }}\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
{#                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_new_company', {id: firma.id}) }}\"><i data-feather=\"edit\"></i></a></td>#}
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{ firma.id }}\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop{{ firma.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite gazdinstvo</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_admin_delete_gazdinstvo', {id: firma.id}) }}\" role=\"button\">Da</a>
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
                <!-- All User Table Ends-->
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
", "admin_user/gazdinstvo_list.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_user/gazdinstvo_list.html.twig");
    }
}
