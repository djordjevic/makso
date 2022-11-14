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

/* admin_review/list.html.twig */
class __TwigTemplate_c439f0df538c27de9d269be3b7b833c6f173550ee6c28fa9b7745624718dcf58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_review/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_review/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_review/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Komentari - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_review/list.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_review/list.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Lista komentara</h5>
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
                                            <th>Ime</th>
                                            <th>Email</th>
                                            <th>Korisnik</th>
                                            <th>Proizvod</th>
                                            <th>Kreirana</th>
                                            <th>Aktivan</th>
                                            <th>Pregledajte</th>
                                            <th>Dozvola</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 53, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 54
            echo "                                            <tr>
                                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                                <td>
                                                    ";
            // line 59
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 59))) {
                // line 60
                echo "                                                        Neregistrovan
                                                    ";
            } else {
                // line 62
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 62), "getFirmaIliFizickoLice", [], "any", false, false, false, 62) == 1)) {
                    // line 63
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 63), "getNazivFirme", [], "method", false, false, false, 63), "html", null, true);
                    echo "
                                                        ";
                } else {
                    // line 65
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 65), "getFirstName", [], "method", false, false, false, 65), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 65), "getLastName", [], "method", false, false, false, 65), "html", null, true);
                    echo "
                                                        ";
                }
                // line 67
                echo "                                                    ";
            }
            // line 68
            echo "                                                </td>
                                                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "product", [], "any", false, false, false, 69), "getTitle", [], "method", false, false, false, 69), "html", null, true);
            echo "</td>
                                                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 70), "d.m.Y"), "html", null, true);
            echo "</td>
                                                <td class=\"text-center\">
                                                    ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "active", [], "any", false, false, false, 72) == 1)) {
                // line 73
                echo "                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                    ";
            } else {
                // line 75
                echo "                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                    ";
            }
            // line 77
            echo "                                                </td>
                                                <td class=\"text-center\"><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_view_review", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\" href=\"javascript:void(0)\">
                                                        ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "active", [], "any", false, false, false, 80) == 1)) {
                // line 81
                echo "                                                            Zabranite
                                                        ";
            } else {
                // line 83
                echo "                                                            Dozvolite
                                                        ";
            }
            // line 85
            echo "                                                    </a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">
                                                                ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "active", [], "any", false, false, false, 93) == 1)) {
                // line 94
                echo "                                                                    Zabranite komentar
                                                                ";
            } else {
                // line 96
                echo "                                                                    Dozvolite komentar
                                                                ";
            }
            // line 98
            echo "                                                            </h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_status_review", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 103)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
        // line 120
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_review/list.html.twig", 120)->display($context);
        // line 121
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
    <!-- Modal Start -->
    ";
        // line 129
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_review/list.html.twig", 129)->display($context);
        // line 130
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 134
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
        return "admin_review/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 134,  363 => 133,  352 => 130,  350 => 129,  340 => 121,  338 => 120,  326 => 110,  305 => 103,  298 => 98,  294 => 96,  290 => 94,  288 => 93,  279 => 87,  275 => 85,  271 => 83,  267 => 81,  265 => 80,  261 => 79,  257 => 78,  254 => 77,  250 => 75,  246 => 73,  244 => 72,  239 => 70,  235 => 69,  232 => 68,  229 => 67,  221 => 65,  215 => 63,  212 => 62,  208 => 60,  206 => 59,  201 => 57,  197 => 56,  193 => 55,  190 => 54,  173 => 53,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Komentari - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h5>Lista komentara</h5>
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
                                            <th>Ime</th>
                                            <th>Email</th>
                                            <th>Korisnik</th>
                                            <th>Proizvod</th>
                                            <th>Kreirana</th>
                                            <th>Aktivan</th>
                                            <th>Pregledajte</th>
                                            <th>Dozvola</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for comment in comments %}
                                            <tr>
                                                <td>{{ loop.index }} </td>
                                                <td>{{ comment.name }}</td>
                                                <td>{{ comment.email }}</td>
                                                <td>
                                                    {% if comment.member is empty %}
                                                        Neregistrovan
                                                    {% else %}
                                                        {% if comment.member.getFirmaIliFizickoLice == 1 %}
                                                            {{ comment.member.getNazivFirme() }}
                                                        {% else %}
                                                            {{ comment.member.getFirstName() }} {{ comment.member.getLastName() }}
                                                        {% endif %}
                                                    {% endif %}
                                                </td>
                                                <td>{{ comment.product.getTitle() }}</td>
                                                <td>{{ comment.created | date(\"d.m.Y\") }}</td>
                                                <td class=\"text-center\">
                                                    {% if comment.active == 1 %}
                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                    {% else %}
                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                    {% endif %}
                                                </td>
                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_view_review', {id: comment.id}) }}\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{ comment.id }}\" href=\"javascript:void(0)\">
                                                        {% if comment.active == 1 %}
                                                            Zabranite
                                                        {% else %}
                                                            Dozvolite
                                                        {% endif %}
                                                    </a></td>
                                            </tr>
                                            <div class=\"modal fade\" id=\"staticBackdrop{{ comment.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog  modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">
                                                                {% if comment.active == 1 %}
                                                                    Zabranite komentar
                                                                {% else %}
                                                                    Dozvolite komentar
                                                                {% endif %}
                                                            </h5>
                                                            <p>Da li ste sigurni?</p>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                            <div class=\"button-box\">
                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                                                                <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_admin_status_review', {id: comment.id}) }}\" role=\"button\">Da</a>
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
", "admin_review/list.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_review/list.html.twig");
    }
}
