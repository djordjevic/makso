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

/* admin_order/order.html.twig */
class __TwigTemplate_612231e03cf9aac39e45048c4055c2cb4b06085911529945675ad5607bd927d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_order/order.html.twig", 1);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_order/order.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_order/order.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header title-header-block package-card\">
                    <div>
                        <h5>Porudžbina #";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-order-section\">
                        <ul>
                            <li>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "dateAdded", [], "any", false, false, false, 34), "d.m.Y"), "html", null, true);
        echo "</li>
                            <li>Ukupna cena ";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "totalPrice", [], "any", false, false, false, 35)), 2, ".", ","), "html", null, true);
        echo "</li>
                            <li>Ukupna cena sa PDV-om ";
        // line 36
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 36)), 2, ".", ","), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>

                <!-- tracking table start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"bg-inner cart-section order-details-table\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-xl-8\">
                                                <div class=\"table-responsive table-details\">
                                                    <table class=\"table cart-table table-borderless\">
                                                        <thead>
                                                        <tr>
                                                            <th colspan=\"2\">Proizvodi</th>
                                                            <th class=\"text-end\" colspan=\"2\">
                                                                <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_change_status", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" method=\"post\">
                                                                        <select class=\"js-example-basic-single w-30\" name=\"status\">
                                                                                ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 58, $this->source); })()), "orderStatus", [], "any", false, false, false, 58) == 1)) {
            // line 59
            echo "                                                                                    <option value=\"1\" selected>Kreirana</option>
                                                                                    <option value=\"2\">Poslata</option>
                                                                                    <option value=\"3\">Otkazana</option>
                                                                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 62
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "orderStatus", [], "any", false, false, false, 62) == 2)) {
            // line 63
            echo "                                                                                    <option value=\"1\">Kreirana</option>
                                                                                    <option value=\"2\" selected>Poslata</option>
                                                                                    <option value=\"3\">Otkazana</option>
                                                                                ";
        } else {
            // line 67
            echo "                                                                                    <option value=\"1\">Kreirana</option>
                                                                                    <option value=\"2\">Poslata</option>
                                                                                    <option value=\"3\" selected>Otkazana</option>
                                                                                ";
        }
        // line 71
        echo "                                                                        </select>
                                                                    <button type=\"submit\" class=\"btn btn-primary\">Izmeni</button>
                                                                </form>
                                                            </th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderProducts"]) || array_key_exists("orderProducts", $context) ? $context["orderProducts"] : (function () { throw new RuntimeError('Variable "orderProducts" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 80
            echo "                                                        <tr class=\"table-order\">
                                                            <td>
                                                                <a href=\"javascript:void(0)\">
                                                                    ";
            // line 83
            if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod", [], "any", false, false, false, 83), "slikaMain", [], "any", false, false, false, 83))) {
                // line 84
                echo "                                                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                                    ";
            } else {
                // line 86
                echo "                                                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod", [], "any", false, false, false, 86), "getSlikaMain", [], "method", false, false, false, 86)), "html", null, true);
                echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                                    ";
            }
            // line 88
            echo "                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>Proizvod</p>
                                                                <h5>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 92), "html", null, true);
            echo "</h5>
                                                            </td>
                                                            <td>
                                                                <p>Količina</p>
                                                                <h5>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 96), "html", null, true);
            echo "</h5>
                                                            </td>
                                                            <td>
                                                                <p>Cena</p>
                                                                <h5>";
            // line 100
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100)), 2, ".", ","), "html", null, true);
            echo "</h5>
                                                            </td>
                                                        </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                                        </tbody>

                                                        <tfoot>
                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h5>Ukupna cena :</h5>
                                                            </td>
                                                            <td>
                                                                <h4>";
        // line 112
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 112, $this->source); })()), "totalPrice", [], "any", false, false, false, 112)), 2, ".", ","), "html", null, true);
        echo "</h4>
                                                            </td>
                                                        </tr>


                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h5>PDV :</h5>
                                                            </td>
                                                            <td>
                                                                <h4>";
        // line 122
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 122) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 122, $this->source); })()), "totalPrice", [], "any", false, false, false, 122))), 2, ".", ","), "html", null, true);
        echo "</h4>
                                                            </td>
                                                        </tr>

                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h4 class=\"theme-color fw-bold\">UKUPNO sa PDV :</h4>
                                                            </td>
                                                            <td>
                                                                <h4 class=\"theme-color fw-bold\">";
        // line 131
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 131, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 131)), 2, ".", ","), "html", null, true);
        echo "</h4>
                                                            </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class=\"col-xl-4\">
                                                <div class=\"order-success\">
                                                    <div class=\"row g-4\">
                                                        <h4>Pregled porudžbine</h4>
                                                        <ul class=\"order-details\">
                                                            <li>ID: ";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
        echo "</li>
                                                            <li>Datum: ";
        // line 145
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 145, $this->source); })()), "dateAdded", [], "any", false, false, false, 145), "d.m.Y"), "html", null, true);
        echo "</li>
                                                            <li>Ukupna cena: ";
        // line 146
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 146, $this->source); })()), "totalPrice", [], "any", false, false, false, 146)), 2, ".", ","), "html", null, true);
        echo "</li>
                                                            <li>Ukupna cena sa PDV-om: ";
        // line 147
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 147, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 147)), 2, ".", ","), "html", null, true);
        echo "</li>
                                                        </ul>

                                                        <h4>Adresa za dostavu</h4>
                                                        <ul class=\"order-details\">
                                                            <li>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()), "imePrimaoca", [], "any", false, false, false, 152), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()), "prezimePrimaoca", [], "any", false, false, false, 152), "html", null, true);
        echo "</li>
                                                            <li>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 153, $this->source); })()), "adresaPrimaoca", [], "any", false, false, false, 153), "html", null, true);
        echo "</li>
                                                            <li>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 154, $this->source); })()), "gradPrimaoca", [], "any", false, false, false, 154), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 154, $this->source); })()), "pttPrimaoca", [], "any", false, false, false, 154), "html", null, true);
        echo "</li>
                                                            <li>Tel: ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "telefonPrimaoca", [], "any", false, false, false, 155), "html", null, true);
        echo "</li>
                                                        </ul>

                                                        <div class=\"col-12\">
                                                            <div class=\"payment-mode\">
                                                                <h4>Način plaćanja</h4>
                                                                <p>
                                                                    ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 162, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 162) == 1)) {
            // line 163
            echo "                                                                        Pouzeće
                                                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 164
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 164) == 2)) {
            // line 165
            echo "                                                                        Čekovi
                                                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 166
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 166, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 166) == 3)) {
            // line 167
            echo "                                                                        Kartica
                                                                    ";
        } else {
            // line 169
            echo "                                                                        Uplata na račun
                                                                    ";
        }
        // line 171
        echo "                                                                </p>
                                                            </div>
                                                        </div>


                                                            <div class=\"delivery-sec\">
                                                                <h3>Rok dostave: <span>2 radna dana</span></h3>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tracking table end -->
                <!-- footer start-->
                ";
        // line 193
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_order/order.html.twig", 193)->display($context);
        // line 194
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 203
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_order/order.html.twig", 203)->display($context);
        // line 204
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 208
        echo "    ";
        // line 209
        echo "    ";
        // line 210
        echo "    ";
        // line 211
        echo "    ";
        // line 212
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 212,  460 => 211,  458 => 210,  456 => 209,  454 => 208,  444 => 207,  433 => 204,  431 => 203,  420 => 194,  418 => 193,  394 => 171,  390 => 169,  386 => 167,  384 => 166,  381 => 165,  379 => 164,  376 => 163,  374 => 162,  364 => 155,  358 => 154,  354 => 153,  348 => 152,  340 => 147,  336 => 146,  332 => 145,  328 => 144,  312 => 131,  300 => 122,  287 => 112,  277 => 104,  267 => 100,  260 => 96,  253 => 92,  247 => 88,  241 => 86,  235 => 84,  233 => 83,  228 => 80,  224 => 79,  214 => 71,  208 => 67,  202 => 63,  200 => 62,  195 => 59,  193 => 58,  188 => 56,  165 => 36,  161 => 35,  157 => 34,  150 => 30,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
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
                <div class=\"title-header title-header-block package-card\">
                    <div>
                        <h5>Porudžbina #{{ order.id }}</h5>
                    </div>
                    <div class=\"card-order-section\">
                        <ul>
                            <li>{{ order.dateAdded | date(\"d.m.Y\") }}</li>
                            <li>Ukupna cena {{ (order.totalPrice | round) | number_format(2, '.', ',') }}</li>
                            <li>Ukupna cena sa PDV-om {{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</li>
                        </ul>
                    </div>
                </div>

                <!-- tracking table start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"bg-inner cart-section order-details-table\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-xl-8\">
                                                <div class=\"table-responsive table-details\">
                                                    <table class=\"table cart-table table-borderless\">
                                                        <thead>
                                                        <tr>
                                                            <th colspan=\"2\">Proizvodi</th>
                                                            <th class=\"text-end\" colspan=\"2\">
                                                                <form action=\"{{ path('app_admin_change_status', {id: order.id}) }}\" method=\"post\">
                                                                        <select class=\"js-example-basic-single w-30\" name=\"status\">
                                                                                {% if order.orderStatus == 1 %}
                                                                                    <option value=\"1\" selected>Kreirana</option>
                                                                                    <option value=\"2\">Poslata</option>
                                                                                    <option value=\"3\">Otkazana</option>
                                                                                {% elseif  order.orderStatus == 2%}
                                                                                    <option value=\"1\">Kreirana</option>
                                                                                    <option value=\"2\" selected>Poslata</option>
                                                                                    <option value=\"3\">Otkazana</option>
                                                                                {% else %}
                                                                                    <option value=\"1\">Kreirana</option>
                                                                                    <option value=\"2\">Poslata</option>
                                                                                    <option value=\"3\" selected>Otkazana</option>
                                                                                {% endif %}
                                                                        </select>
                                                                    <button type=\"submit\" class=\"btn btn-primary\">Izmeni</button>
                                                                </form>
                                                            </th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        {% for product in orderProducts %}
                                                        <tr class=\"table-order\">
                                                            <td>
                                                                <a href=\"javascript:void(0)\">
                                                                    {% if product.proizvod.slikaMain is null %}
                                                                        <img src=\"{{ asset('assets/images/products/no-image.jpg') }}\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                                    {% else %}
                                                                        <img src=\"{{ asset(product.proizvod.getSlikaMain()) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                                    {% endif %}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <p>Proizvod</p>
                                                                <h5>{{ product.productName }}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Količina</p>
                                                                <h5>{{ product.quantity }}</h5>
                                                            </td>
                                                            <td>
                                                                <p>Cena</p>
                                                                <h5>{{ (product.price | round) | number_format(2, '.', ',') }}</h5>
                                                            </td>
                                                        </tr>
                                                        {% endfor %}
                                                        </tbody>

                                                        <tfoot>
                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h5>Ukupna cena :</h5>
                                                            </td>
                                                            <td>
                                                                <h4>{{ (order.totalPrice | round) | number_format(2, '.', ',') }}</h4>
                                                            </td>
                                                        </tr>


                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h5>PDV :</h5>
                                                            </td>
                                                            <td>
                                                                <h4>{{ ((order.totalPricePdv - order.totalPrice) | round) | number_format(2, '.', ',') }}</h4>
                                                            </td>
                                                        </tr>

                                                        <tr class=\"table-order\">
                                                            <td colspan=\"3\">
                                                                <h4 class=\"theme-color fw-bold\">UKUPNO sa PDV :</h4>
                                                            </td>
                                                            <td>
                                                                <h4 class=\"theme-color fw-bold\">{{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</h4>
                                                            </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class=\"col-xl-4\">
                                                <div class=\"order-success\">
                                                    <div class=\"row g-4\">
                                                        <h4>Pregled porudžbine</h4>
                                                        <ul class=\"order-details\">
                                                            <li>ID: {{ order.id  }}</li>
                                                            <li>Datum: {{ order.dateAdded | date(\"d.m.Y\") }}</li>
                                                            <li>Ukupna cena: {{ (order.totalPrice | round) | number_format(2, '.', ',') }}</li>
                                                            <li>Ukupna cena sa PDV-om: {{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</li>
                                                        </ul>

                                                        <h4>Adresa za dostavu</h4>
                                                        <ul class=\"order-details\">
                                                            <li>{{ order.imePrimaoca }} {{ order.prezimePrimaoca }}</li>
                                                            <li>{{ order.adresaPrimaoca }}</li>
                                                            <li>{{ order.gradPrimaoca }}, {{ order.pttPrimaoca }}</li>
                                                            <li>Tel: {{ order.telefonPrimaoca }}</li>
                                                        </ul>

                                                        <div class=\"col-12\">
                                                            <div class=\"payment-mode\">
                                                                <h4>Način plaćanja</h4>
                                                                <p>
                                                                    {% if order.nacinPlacanja == 1 %}
                                                                        Pouzeće
                                                                    {% elseif order.nacinPlacanja == 2 %}
                                                                        Čekovi
                                                                    {% elseif order.nacinPlacanja == 3 %}
                                                                        Kartica
                                                                    {% else  %}
                                                                        Uplata na račun
                                                                    {% endif %}
                                                                </p>
                                                            </div>
                                                        </div>


                                                            <div class=\"delivery-sec\">
                                                                <h3>Rok dostave: <span>2 radna dana</span></h3>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tracking table end -->
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
    {#<script>#}
    {#    \$(document).ready(function () {#}
    {#        \$('#example').DataTable();#}
    {#    });#}
    {#</script>#}
{% endblock footerjavascript %}
", "admin_order/order.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_order/order.html.twig");
    }
}
