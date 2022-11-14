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

/* admin_order/list.html.twig */
class __TwigTemplate_ad5e94defa0c2f61d94ba1920141cc9a439beaa192dceaa3f7b321b4d2e777fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_order/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Porudžbine - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_order/list.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_order/list.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Lista porudžbina</h5>
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
                                            <th>Id</th>
                                            <th>Datum</th>
                                            <th>Kreator</th>
                                            <th>Lice za kontakt</th>
                                            <th>Status</th>
                                            <th>Vrednost sa PDV</th>
                                            <th>Pregledajte</th>
";
        // line 50
        echo "                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["porudzbine"]) || array_key_exists("porudzbine", $context) ? $context["porudzbine"] : (function () { throw new RuntimeError('Variable "porudzbine" does not exist.', 54, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["porudzbina"]) {
            // line 55
            echo "                                            <tr>
                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 58), "d.m.Y"), "html", null, true);
            echo "</td>
                                                <td>
                                                    ";
            // line 60
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["porudzbina"], "member", [], "any", false, false, false, 60))) {
                // line 61
                echo "                                                        Neregistrovan
                                                    ";
            } else {
                // line 63
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "member", [], "any", false, false, false, 63), "getFirmaIliFizickoLice", [], "any", false, false, false, 63) == 1)) {
                    // line 64
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "member", [], "any", false, false, false, 64), "getNazivFirme", [], "method", false, false, false, 64), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 66
                    echo "                                                            Fizičko lice
                                                            ";
                }
                // line 68
                echo "                                                    ";
            }
            // line 69
            echo "                                                </td>
                                                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "imePrimaoca", [], "any", false, false, false, 70), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "prezimePrimaoca", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                                ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["porudzbina"], "orderStatus", [], "any", false, false, false, 71) == 1)) {
                // line 72
                echo "                                                    <td style=\"color:Orange;\">
                                                        <span>Kreirana</span>
                                                    </td>
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 75
$context["porudzbina"], "orderStatus", [], "any", false, false, false, 75) == 2)) {
                // line 76
                echo "                                                    <td style=\"color:MediumSeaGreen;\">
                                                        <span>Poslata</span>
                                                    </td>
                                                ";
            } else {
                // line 80
                echo "                                                    <td style=\"color:Tomato;\">
                                                        <span>Otkazana</span>
                                                    </td>
                                                ";
            }
            // line 84
            echo "                                                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["porudzbina"], "totalPricePdv", [], "any", false, false, false, 84)), 2, ".", ","), "html", null, true);
            echo "</td>
                                                <td class=\"text-center\"><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
";
            // line 87
            echo "                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite porudžbinu</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_order", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 99)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['porudzbina'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        // line 116
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_order/list.html.twig", 116)->display($context);
        // line 117
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 126
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_order/list.html.twig", 126)->display($context);
        // line 127
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 131
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
        return "admin_order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 131,  347 => 130,  336 => 127,  334 => 126,  323 => 117,  321 => 116,  309 => 106,  288 => 99,  275 => 89,  269 => 87,  265 => 85,  260 => 84,  254 => 80,  248 => 76,  246 => 75,  241 => 72,  239 => 71,  233 => 70,  230 => 69,  227 => 68,  223 => 66,  217 => 64,  214 => 63,  210 => 61,  208 => 60,  203 => 58,  199 => 57,  195 => 56,  192 => 55,  175 => 54,  169 => 50,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Porudžbine - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h5>Lista porudžbina</h5>
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
                                            <th>Id</th>
                                            <th>Datum</th>
                                            <th>Kreator</th>
                                            <th>Lice za kontakt</th>
                                            <th>Status</th>
                                            <th>Vrednost sa PDV</th>
                                            <th>Pregledajte</th>
{#                                            <th>PDF</th>#}
                                            <th>Obrišite</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for porudzbina in porudzbine %}
                                            <tr>
                                                <td>{{ loop.index }} </td>
                                                <td>{{ porudzbina.id }}</td>
                                                <td>{{ porudzbina.dateAdded | date(\"d.m.Y\") }}</td>
                                                <td>
                                                    {% if porudzbina.member is empty %}
                                                        Neregistrovan
                                                    {% else %}
                                                        {% if porudzbina.member.getFirmaIliFizickoLice == 1 %}
                                                            {{ porudzbina.member.getNazivFirme() }}
                                                            {% else %}
                                                            Fizičko lice
                                                            {% endif %}
                                                    {% endif %}
                                                </td>
                                                <td>{{ porudzbina.imePrimaoca}} {{ porudzbina.prezimePrimaoca }}</td>
                                                {% if porudzbina.orderStatus == 1 %}
                                                    <td style=\"color:Orange;\">
                                                        <span>Kreirana</span>
                                                    </td>
                                                {% elseif  porudzbina.orderStatus == 2%}
                                                    <td style=\"color:MediumSeaGreen;\">
                                                        <span>Poslata</span>
                                                    </td>
                                                {% else %}
                                                    <td style=\"color:Tomato;\">
                                                        <span>Otkazana</span>
                                                    </td>
                                                {% endif %}
                                                <td>{{ (porudzbina.totalPricePdv | round) | number_format(2, '.', ',') }}</td>
                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_order_view', {id: porudzbina.id}) }}\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
{#                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_order_view_pdf', {id: porudzbina.id}) }}\"><i data-feather=\"file\"></i></a></td>#}
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{ porudzbina.id }}\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop{{ porudzbina.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Obrišite porudžbinu</h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_admin_delete_order', {id: porudzbina.id}) }}\" role=\"button\">Da</a>
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
", "admin_order/list.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_order/list.html.twig");
    }
}
