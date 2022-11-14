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

/* shop/korpa.html.twig */
class __TwigTemplate_ad08dabfff8d100bde51a8b1f9571523229fd29adec12c3cc0df461f9ceab1b5 extends \Twig\Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/korpa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/korpa.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/korpa.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Korpa - Prodaja autoprikolica, traktora."), "html", null, true);
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
        echo "    <!-- header  -->
    ";
        // line 17
        $this->loadTemplate("include/header.html.twig", "shop/korpa.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/korpa.html.twig", 19)->display($context);
        // line 20
        echo "    <!-- Shop Section start -->
    <section class=\"breadcrumb-section section-b-space\">
        <ul class=\"circles\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Kupovina</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Korpa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 52
        if ((array_key_exists("basket", $context) && (twig_length_filter($this->env, (isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 52, $this->source); })())) > 0))) {
            // line 53
            echo "    <form name=\"formBasket\" method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_preracunaj");
            echo "\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"count-down\">
                <br>
                <p>Kada izmenite količinu nekog od proizvoda u korpi, pritiskom na dugme <strong>Preračunajte</strong> prikazaće se novi izgled korpe.</p>
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 61
                echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        ";
                // line 62
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
                // line 67
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 71
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "            </div>
        </div>
    <div class=\"col-sm-12 table-responsive mt-4\">
        <table class=\"table cart-table\">
            <thead>
            <tr class=\"table-head\">
                <th scope=\"col\">Slika</th>
                <th scope=\"col\">Proizvod</th>
                <th scope=\"col\">Cena</th>
                <th scope=\"col\">Količina</th>
                <th scope=\"col\">Obrišite</th>
                <th scope=\"col\">Ukupno</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 94
                if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 94), "slikaMain", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 97
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 97), "slikaMain", [], "any", false, false, false, 97)), "html", null, true);
                    echo "
                                                            ";
                }
                // line 98
                echo "\" class=\" blur-up lazyload\" alt=\"\">
                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 102), "title", [], "any", false, false, false, 102), "html", null, true);
                echo "</a>
                </td>
                <td>
                    <h2>
                        ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "FirmaIliFizickoLice", [], "any", false, false, false, 107), [0 => 1, 1 => 4])) {
                        // line 108
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 108), "flDiscountVp", [], "any", false, false, false, 108) == 1)) {
                            // line 109
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 109), "discountVpPriceDin", [], "any", false, false, false, 109) > 0)) {
                                // line 110
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 110), "discountVpPriceDin", [], "any", false, false, false, 110) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 110), "taxPercentage", [], "any", false, false, false, 110) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 112
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 112), "discountVpPriceEur", [], "any", false, false, false, 112), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 114
                            echo "                                ";
                        } else {
                            // line 115
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 115), "priceVpDin", [], "any", false, false, false, 115) > 0)) {
                                // line 116
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 116), "priceVpDin", [], "any", false, false, false, 116) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 116), "taxPercentage", [], "any", false, false, false, 116) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 118
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 118), "priceVpEur", [], "any", false, false, false, 118), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 120
                            echo "                                ";
                        }
                        // line 121
                        echo "                            ";
                    } else {
                        // line 122
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 122), "flDiscount", [], "any", false, false, false, 122) == 1)) {
                            // line 123
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 123), "discountPriceDin", [], "any", false, false, false, 123) > 0)) {
                                // line 124
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 124), "discountPriceDin", [], "any", false, false, false, 124) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 124), "taxPercentage", [], "any", false, false, false, 124) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 126
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 126), "discountPriceEur", [], "any", false, false, false, 126), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 128
                            echo "                                ";
                        } else {
                            // line 129
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 129), "priceDin", [], "any", false, false, false, 129) > 0)) {
                                // line 130
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 130), "priceDin", [], "any", false, false, false, 130) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 130), "taxPercentage", [], "any", false, false, false, 130) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 132
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 132), "priceEur", [], "any", false, false, false, 132), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 134
                            echo "                                ";
                        }
                        // line 135
                        echo "                            ";
                    }
                    // line 136
                    echo "                        ";
                } else {
                    // line 137
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 137), "flDiscount", [], "any", false, false, false, 137) == 1)) {
                        // line 138
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 138), "discountPriceDin", [], "any", false, false, false, 138) > 0)) {
                            // line 139
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 139), "discountPriceDin", [], "any", false, false, false, 139) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 139), "taxPercentage", [], "any", false, false, false, 139) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 141
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 141), "discountPriceEur", [], "any", false, false, false, 141), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        }
                        // line 143
                        echo "                            ";
                    } else {
                        // line 144
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 144), "priceDin", [], "any", false, false, false, 144) > 0)) {
                            // line 145
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 145), "priceDin", [], "any", false, false, false, 145) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 145), "taxPercentage", [], "any", false, false, false, 145) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 147
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 147), "priceEur", [], "any", false, false, false, 147), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        }
                        // line 149
                        echo "                            ";
                    }
                    // line 150
                    echo "                        ";
                }
                // line 151
                echo "                    </h2>
                </td>
                <td style=\"width:120px\">
                        <div class=\"input-group \">
                            <input type=\"number\" name=\"pQty_";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pid", [], "any", false, false, false, 155), "html", null, true);
                echo "\" class=\"form-control input-number\" min=\"0\"
                                   value=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 156), "html", null, true);
                echo "\">
                        </div>
                </td>
                <td>
                    <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_ukloni", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "pid", [], "any", false, false, false, 160)]), "html", null, true);
                echo "\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </td>
                <td>
                    <h2 class=\"td-color\">
                        ";
                // line 166
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166)) {
                    // line 167
                    echo "                            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "FirmaIliFizickoLice", [], "any", false, false, false, 167), [0 => 1, 1 => 4])) {
                        // line 168
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 168), "flDiscountVp", [], "any", false, false, false, 168) == 1)) {
                            // line 169
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 169), "discountVpPriceDin", [], "any", false, false, false, 169) > 0)) {
                                // line 170
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinVpP", [], "any", false, false, false, 170) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 170), "taxPercentage", [], "any", false, false, false, 170) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 172
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurVpP", [], "any", false, false, false, 172), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 174
                            echo "                                ";
                        } else {
                            // line 175
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 175), "priceVpDin", [], "any", false, false, false, 175) > 0)) {
                                // line 176
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinVp", [], "any", false, false, false, 176) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 176), "taxPercentage", [], "any", false, false, false, 176) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 178
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurVp", [], "any", false, false, false, 178), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 180
                            echo "                                ";
                        }
                        // line 181
                        echo "                            ";
                    } else {
                        // line 182
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 182), "flDiscount", [], "any", false, false, false, 182) == 1)) {
                            // line 183
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 183), "discountPriceDin", [], "any", false, false, false, 183) > 0)) {
                                // line 184
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinP", [], "any", false, false, false, 184) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 184), "taxPercentage", [], "any", false, false, false, 184) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 186
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurP", [], "any", false, false, false, 186), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 188
                            echo "                                ";
                        } else {
                            // line 189
                            echo "                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 189), "priceDin", [], "any", false, false, false, 189) > 0)) {
                                // line 190
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 190) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 190), "taxPercentage", [], "any", false, false, false, 190) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            } else {
                                // line 192
                                echo "                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 192), 2, ".", ","), "html", null, true);
                                echo "
                                    ";
                            }
                            // line 194
                            echo "                                ";
                        }
                        // line 195
                        echo "                            ";
                    }
                    // line 196
                    echo "                        ";
                } else {
                    // line 197
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 197), "flDiscount", [], "any", false, false, false, 197) == 1)) {
                        // line 198
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 198), "discountPriceDin", [], "any", false, false, false, 198) > 0)) {
                            // line 199
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinP", [], "any", false, false, false, 199) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 199), "taxPercentage", [], "any", false, false, false, 199) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 201
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurP", [], "any", false, false, false, 201), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        }
                        // line 203
                        echo "                            ";
                    } else {
                        // line 204
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 204), "priceDin", [], "any", false, false, false, 204) > 0)) {
                            // line 205
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 205) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 205), "taxPercentage", [], "any", false, false, false, 205) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 207
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 207), 2, ".", ","), "html", null, true);
                            echo "
                                ";
                        }
                        // line 209
                        echo "                            ";
                    }
                    // line 210
                    echo "                        ";
                }
                // line 211
                echo "                    </h2>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "            </tbody>
        </table>

    </div>
    </div>
    </div>
    <section class=\"cart-section section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-md-5 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-7 col-5 order-1\">
                            <div class=\"left-side-button text-end d-flex d-block justify-content-end\">
                                <button type=\"submit\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">
                                    <i class=\"fas fa-calculator\"></i> Preračunajte</button>
                            </div>
                        </div>
                        <div class=\"col-sm-5 col-7\">
                            <div class=\"left-side-button float-start\">
                                <a href=\"";
            // line 234
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
            echo "\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">
                                    <i class=\"fas fa-arrow-left\"></i>Nastavite kupovinu</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class=\"cart-checkout-section\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 col-sm-6\">
                        </div>
                        <div class=\"col-lg-4 col-sm-6 \">
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"cart-box\">
                                <div class=\"cart-box-details\">
                                    <div class=\"total-details\">
                                        <div class=\"top-details\">
                                            <h3>Ukupno</h3>
                                            <h6>Cena
                                                <span>
                                                ";
            // line 255
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["ukupno"]) || array_key_exists("ukupno", $context) ? $context["ukupno"] : (function () { throw new RuntimeError('Variable "ukupno" does not exist.', 255, $this->source); })())), 2, ".", ","), "html", null, true);
            echo "
                                                </span>
                                            </h6>
                                            <h6>PDV <span>";
            // line 258
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(((isset($context["ukupnoPdv"]) || array_key_exists("ukupnoPdv", $context) ? $context["ukupnoPdv"] : (function () { throw new RuntimeError('Variable "ukupnoPdv" does not exist.', 258, $this->source); })()) - (isset($context["ukupno"]) || array_key_exists("ukupno", $context) ? $context["ukupno"] : (function () { throw new RuntimeError('Variable "ukupno" does not exist.', 258, $this->source); })()))), 2, ".", ","), "html", null, true);
            echo "</span></h6>
                                            <h6>Ukupno sa PDV <span>";
            // line 259
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["ukupnoPdv"]) || array_key_exists("ukupnoPdv", $context) ? $context["ukupnoPdv"] : (function () { throw new RuntimeError('Variable "ukupnoPdv" does not exist.', 259, $this->source); })())), 2, ".", ","), "html", null, true);
            echo "</span></h6>
                                        </div>
                                        <div class=\"bottom-details\">
                                            <a href=\"";
            // line 262
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kasa");
            echo "\">Završite kupovinu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        } else {
            // line 274
            echo "    <section class=\"cart-section section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 278));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 279
                echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            ";
                // line 280
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                    <div class=\"count-down\">
                        <h5>Vaša korpa je prazna, nastavite ka prodavnici</h5>
                        <a type=\"button\" href = \"";
            // line 285
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
            echo "\"
                                class=\"btn btn-solid-default btn-sm fw-bold\">Prodavnica</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 293
        echo "    <!-- Shop Section end -->

    <!-- footer start -->
    ";
        // line 296
        $this->loadTemplate("include/footer.html.twig", "shop/korpa.html.twig", 296)->display($context);
        // line 297
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 301
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 305
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 309
        echo "    ";
        // line 310
        echo "    ";
        // line 311
        echo "    ";
        // line 312
        echo "    ";
        // line 313
        echo "    ";
        // line 314
        echo "    ";
        // line 315
        echo "    ";
        // line 316
        echo "    ";
        // line 317
        echo "    ";
        // line 318
        echo "    ";
        // line 319
        echo "    ";
        // line 320
        echo "    ";
        // line 321
        echo "    ";
        // line 322
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 325
        $this->loadTemplate("include/top.html.twig", "shop/korpa.html.twig", 325)->display($context);
        // line 326
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 331
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 332
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/korpa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 332,  780 => 331,  767 => 326,  765 => 325,  760 => 322,  758 => 321,  756 => 320,  754 => 319,  752 => 318,  750 => 317,  748 => 316,  746 => 315,  744 => 314,  742 => 313,  740 => 312,  738 => 311,  736 => 310,  734 => 309,  729 => 305,  724 => 301,  719 => 297,  717 => 296,  712 => 293,  701 => 285,  697 => 283,  688 => 280,  685 => 279,  681 => 278,  675 => 274,  660 => 262,  654 => 259,  650 => 258,  644 => 255,  620 => 234,  599 => 215,  590 => 211,  587 => 210,  584 => 209,  578 => 207,  572 => 205,  569 => 204,  566 => 203,  560 => 201,  554 => 199,  551 => 198,  548 => 197,  545 => 196,  542 => 195,  539 => 194,  533 => 192,  527 => 190,  524 => 189,  521 => 188,  515 => 186,  509 => 184,  506 => 183,  503 => 182,  500 => 181,  497 => 180,  491 => 178,  485 => 176,  482 => 175,  479 => 174,  473 => 172,  467 => 170,  464 => 169,  461 => 168,  458 => 167,  456 => 166,  447 => 160,  440 => 156,  436 => 155,  430 => 151,  427 => 150,  424 => 149,  418 => 147,  412 => 145,  409 => 144,  406 => 143,  400 => 141,  394 => 139,  391 => 138,  388 => 137,  385 => 136,  382 => 135,  379 => 134,  373 => 132,  367 => 130,  364 => 129,  361 => 128,  355 => 126,  349 => 124,  346 => 123,  343 => 122,  340 => 121,  337 => 120,  331 => 118,  325 => 116,  322 => 115,  319 => 114,  313 => 112,  307 => 110,  304 => 109,  301 => 108,  298 => 107,  296 => 106,  287 => 102,  281 => 98,  275 => 97,  269 => 95,  267 => 94,  263 => 93,  259 => 91,  255 => 90,  238 => 75,  229 => 72,  226 => 71,  221 => 70,  212 => 67,  209 => 66,  204 => 65,  195 => 62,  192 => 61,  188 => 60,  177 => 53,  175 => 52,  161 => 41,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Korpa - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
    <!-- header  -->
    {% include 'include/header.html.twig' %}
    <!-- mobile fix menu -->
    {% include 'include/mobile_menu.html.twig' %}
    <!-- Shop Section start -->
    <section class=\"breadcrumb-section section-b-space\">
        <ul class=\"circles\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Kupovina</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Korpa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {%  if basket is defined and basket|length > 0 %}
    <form name=\"formBasket\" method=\"post\" action=\"{{ path('korpa_preracunaj') }}\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"count-down\">
                <br>
                <p>Kada izmenite količinu nekog od proizvoda u korpi, pritiskom na dugme <strong>Preračunajte</strong> prikazaće se novi izgled korpe.</p>
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-warning\" role=\"alert\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('notice') %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
        </div>
    <div class=\"col-sm-12 table-responsive mt-4\">
        <table class=\"table cart-table\">
            <thead>
            <tr class=\"table-head\">
                <th scope=\"col\">Slika</th>
                <th scope=\"col\">Proizvod</th>
                <th scope=\"col\">Cena</th>
                <th scope=\"col\">Količina</th>
                <th scope=\"col\">Obrišite</th>
                <th scope=\"col\">Ukupno</th>
            </tr>
            </thead>
            <tbody>
            {% for product in basket %}
            <tr>
                <td>
                    <a href=\"{{ path('proizvod', {'id': product.product.id}) }}\">
                        <img src=\"{% if product.product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.product.slikaMain) }}
                                                            {% endif %}\" class=\" blur-up lazyload\" alt=\"\">
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('proizvod', {'id': product.product.id}) }}\">{{ product.product.title }}</a>
                </td>
                <td>
                    <h2>
                        {% if app.user %}
                            {% if app.user.FirmaIliFizickoLice in [1, 4]  %}
                                {% if product.product.flDiscountVp == 1 %}
                                    {% if product.product.discountVpPriceDin > 0 %}
                                        {{ ((product.product.discountVpPriceDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.product.discountVpPriceEur | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% else %}
                                    {% if product.product.priceVpDin > 0 %}
                                        {{ ((product.product.priceVpDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.product.priceVpEur | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if product.product.flDiscount == 1 %}
                                    {% if product.product.discountPriceDin > 0 %}
                                        {{ ((product.product.discountPriceDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.product.discountPriceEur | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% else %}
                                    {% if product.product.priceDin > 0 %}
                                        {{ ((product.product.priceDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.product.priceEur | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% else %}
                            {% if product.product.flDiscount == 1 %}
                                {% if product.product.discountPriceDin > 0 %}
                                    {{ ((product.product.discountPriceDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                {% else %}
                                    {{ product.product.discountPriceEur | number_format(2, '.', ',') }}
                                {% endif %}
                            {% else %}
                                {% if product.product.priceDin > 0 %}
                                    {{ ((product.product.priceDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                {% else %}
                                    {{ product.product.priceEur | number_format(2, '.', ',') }}
                                {% endif %}
                            {% endif %}
                        {% endif %}
                    </h2>
                </td>
                <td style=\"width:120px\">
                        <div class=\"input-group \">
                            <input type=\"number\" name=\"pQty_{{ product.pid }}\" class=\"form-control input-number\" min=\"0\"
                                   value=\"{{ product.qty }}\">
                        </div>
                </td>
                <td>
                    <a href=\"{{ path('korpa_ukloni', {'id': product.pid}) }}\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </td>
                <td>
                    <h2 class=\"td-color\">
                        {% if app.user %}
                            {% if app.user.FirmaIliFizickoLice in [1, 4]  %}
                                {% if product.product.flDiscountVp == 1 %}
                                    {% if product.product.discountVpPriceDin > 0 %}
                                        {{ ((product.ukupnaCenaDinVpP * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.ukupnaCenaEurVpP | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% else %}
                                    {% if product.product.priceVpDin > 0 %}
                                        {{ ((product.ukupnaCenaDinVp * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.ukupnaCenaEurVp | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if product.product.flDiscount == 1 %}
                                    {% if product.product.discountPriceDin > 0 %}
                                        {{ ((product.ukupnaCenaDinP * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.ukupnaCenaEurP | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% else %}
                                    {% if product.product.priceDin > 0 %}
                                        {{ ((product.ukupnaCenaDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                    {% else %}
                                        {{ product.ukupnaCenaDin | number_format(2, '.', ',') }}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% else %}
                            {% if product.product.flDiscount == 1 %}
                                {% if product.product.discountPriceDin > 0 %}
                                    {{ ((product.ukupnaCenaDinP * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                {% else %}
                                    {{ product.ukupnaCenaEurP | number_format(2, '.', ',') }}
                                {% endif %}
                            {% else %}
                                {% if product.product.priceDin > 0 %}
                                    {{ ((product.ukupnaCenaDin * ((product.product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }}
                                {% else %}
                                    {{ product.ukupnaCenaDin | number_format(2, '.', ',') }}
                                {% endif %}
                            {% endif %}
                        {% endif %}
                    </h2>
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
    </div>
    </div>
    <section class=\"cart-section section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-md-5 mt-4\">
                    <div class=\"row\">
                        <div class=\"col-sm-7 col-5 order-1\">
                            <div class=\"left-side-button text-end d-flex d-block justify-content-end\">
                                <button type=\"submit\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">
                                    <i class=\"fas fa-calculator\"></i> Preračunajte</button>
                            </div>
                        </div>
                        <div class=\"col-sm-5 col-7\">
                            <div class=\"left-side-button float-start\">
                                <a href=\"{{ path('prodavnica_prikolica') }}\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">
                                    <i class=\"fas fa-arrow-left\"></i>Nastavite kupovinu</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class=\"cart-checkout-section\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 col-sm-6\">
                        </div>
                        <div class=\"col-lg-4 col-sm-6 \">
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"cart-box\">
                                <div class=\"cart-box-details\">
                                    <div class=\"total-details\">
                                        <div class=\"top-details\">
                                            <h3>Ukupno</h3>
                                            <h6>Cena
                                                <span>
                                                {{ (ukupno | round) | number_format(2, '.', ',') }}
                                                </span>
                                            </h6>
                                            <h6>PDV <span>{{ ((ukupnoPdv - ukupno) | round)  | number_format(2, '.', ',') }}</span></h6>
                                            <h6>Ukupno sa PDV <span>{{ (ukupnoPdv | round) | number_format(2, '.', ',') }}</span></h6>
                                        </div>
                                        <div class=\"bottom-details\">
                                            <a href=\"{{ path('kasa') }}\">Završite kupovinu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% else %}
    <section class=\"cart-section section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-warning\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <div class=\"count-down\">
                        <h5>Vaša korpa je prazna, nastavite ka prodavnici</h5>
                        <a type=\"button\" href = \"{{ path('prodavnica_prikolica') }}\"
                                class=\"btn btn-solid-default btn-sm fw-bold\">Prodavnica</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endif %}
    <!-- Shop Section end -->

    <!-- footer start -->
    {% include 'include/footer.html.twig' %}
    <!-- footer end -->

    <!-- Newsletter modal start -->
    {#    {% include 'include/newsletter.html.twig' %}#}
    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    {#    {% include 'include/cookie.html.twig' %}#}
    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    {#    <div class=\"theme-setting\">#}
    {#        <ul>#}
    {#            <li>#}
    {#                <button id=\"darkButton\" class=\"btn btn-sm dark-buttton\">Dark</button>#}
    {#            </li>#}
    {#            <li>#}
    {#                <button class=\"btn btn-sm rtl-button\">RTL</button>#}
    {#            </li>#}
    {#            <li class=\"color-picker\">#}
    {#                <input type=\"color\" class=\"form-control form-control-color\" id=\"ColorPicker1\" value=\"#0163d2\"#}
    {#                       title=\"Choose your color\">#}
    {#            </li>#}
    {#        </ul>#}
    {#    </div>#}
    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    {% include 'include/top.html.twig' %}
    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
{% endblock content %}

{% block footerjavascript %}

{% endblock footerjavascript %}
", "shop/korpa.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/korpa.html.twig");
    }
}
