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

/* include/products1.html.twig */
class __TwigTemplate_30325d6bb6d7ad5adeaadbd50406e48eb1501778e430afea5157619e1cee746c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/products1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/products1.html.twig"));

        // line 1
        echo "<section class=\"ratio_asos\">
    <div class=\"container-fluid p-0\">
        <div class=\"row m-0\">
            <div class=\"col-sm-12 p-0\">
                <div class=\"title text-center\">
                    <h5>Samo za tebe</h5>
                    <h2>Naši proizvodi</h2>
                </div>
                <div class=\"product-wrapper slide-6\">
                    ";
        // line 10
        if ((array_key_exists("randomProducts", $context) && (twig_length_filter($this->env, (isset($context["randomProducts"]) || array_key_exists("randomProducts", $context) ? $context["randomProducts"] : (function () { throw new RuntimeError('Variable "randomProducts" does not exist.', 10, $this->source); })())) > 0))) {
            // line 11
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["randomProducts"]) || array_key_exists("randomProducts", $context) ? $context["randomProducts"] : (function () { throw new RuntimeError('Variable "randomProducts" does not exist.', 11, $this->source); })()), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                                ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "FirmaIliFizickoLice", [], "any", false, false, false, 13), [0 => 1, 1 => 4])) {
                        // line 14
                        echo "                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 18
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 18))) {
                            // line 19
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 21
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 21)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 22
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 23), "html", null, true);
                        echo "\">
                                                </a>
                                                <div class=\"label-block\">
                                                    ";
                        // line 26
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 26) == 1)) {
                            // line 27
                            echo "                                                        <span class=\"label label-black\">Novo</span>
                                                    ";
                        }
                        // line 29
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 29) == 1)) {
                            // line 30
                            echo "                                                        <span class=\"label label-theme\">Popust</span>
                                                    ";
                        }
                        // line 32
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 32) == 1)) {
                            // line 33
                            echo "                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    ";
                        }
                        // line 35
                        echo "                                                </div>
                                                ";
                        // line 36
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 36) == 0)) {
                            // line 37
                            echo "                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"";
                            // line 40
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 41
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41), "html", null, true);
                            echo "\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 49
                        echo "                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    ";
                        // line 52
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 52) == 1)) {
                            // line 53
                            echo "                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 53) > 0)) {
                                // line 54
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 54) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 54) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                        <span class=\"font-light ml-1\">";
                                // line 55
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 55), 2, ".", ","), "html", null, true);
                                echo " din</span>
                                                    ";
                            } else {
                                // line 57
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 57), 2, ".", ","), "html", null, true);
                                echo " eur
                                                        <span class=\"font-light ml-1\">";
                                // line 58
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 58), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                    ";
                            }
                            // line 60
                            echo "                                                ";
                        } else {
                            // line 61
                            echo "                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 61) > 0)) {
                                // line 62
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 62) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 62) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                    ";
                            } else {
                                // line 64
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 64), 2, ".", ","), "html", null, true);
                                echo " eur
                                                    ";
                            }
                            // line 66
                            echo "                                                    ";
                        }
                        // line 67
                        echo "                                                </h3>
                                                <a href=\"";
                        // line 68
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                        echo "\" class=\"font-default\">
                                                    <h5>";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 69), "html", null, true);
                        echo "</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 75
                        echo "                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"";
                        // line 78
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 79
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 79))) {
                            // line 80
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 82
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 82)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 83
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 84
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 84), "html", null, true);
                        echo "\">
                                                </a>
                                                <div class=\"label-block\">
                                                    ";
                        // line 87
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 87) == 1)) {
                            // line 88
                            echo "                                                        <span class=\"label label-black\">Novo</span>
                                                    ";
                        }
                        // line 90
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 90) == 1)) {
                            // line 91
                            echo "                                                        <span class=\"label label-theme\">Popust</span>
                                                    ";
                        }
                        // line 93
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 93) == 1)) {
                            // line 94
                            echo "                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    ";
                        }
                        // line 96
                        echo "                                                </div>
                                                ";
                        // line 97
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 97) == 0)) {
                            // line 98
                            echo "                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"";
                            // line 101
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 102
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 102), "html", null, true);
                            echo "\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 110
                        echo "                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    ";
                        // line 113
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 113) == 1)) {
                            // line 114
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 114) > 0)) {
                                // line 115
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 115) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 115) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            <span class=\"font-light ml-1\">";
                                // line 116
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 116), 2, ".", ","), "html", null, true);
                                echo " din</span>
                                                        ";
                            } else {
                                // line 118
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 118), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            <span class=\"font-light ml-1\">";
                                // line 119
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 119), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                        ";
                            }
                            // line 121
                            echo "                                                    ";
                        } else {
                            // line 122
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 122) > 0)) {
                                // line 123
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 123) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 123) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                        ";
                            } else {
                                // line 125
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 125), 2, ".", ","), "html", null, true);
                                echo " eur
                                                        ";
                            }
                            // line 127
                            echo "                                                    ";
                        }
                        // line 128
                        echo "                                                </h3>
                                                <a href=\"";
                        // line 129
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                        echo "\" class=\"font-default\">
                                                    <h5>";
                        // line 130
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 130), "html", null, true);
                        echo "</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 136
                    echo "                            ";
                } else {
                    // line 137
                    echo "                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 141
                    if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 141))) {
                        // line 142
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                        echo "
                                                            ";
                    } else {
                        // line 144
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 144)), "html", null, true);
                        echo "
                                                            ";
                    }
                    // line 145
                    echo "\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 146), "html", null, true);
                    echo "\">
                                            </a>
                                            <div class=\"label-block\">
                                                ";
                    // line 149
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 149) == 1)) {
                        // line 150
                        echo "                                                    <span class=\"label label-black\">Novo</span>
                                                ";
                    }
                    // line 152
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 152) == 1)) {
                        // line 153
                        echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                    }
                    // line 155
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 155) == 1)) {
                        // line 156
                        echo "                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                ";
                    }
                    // line 158
                    echo "                                            </div>
                                            ";
                    // line 159
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 159) == 0)) {
                        // line 160
                        echo "                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"";
                        // line 163
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 164
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 164), "html", null, true);
                        echo "\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            ";
                    }
                    // line 172
                    echo "                                        </div>
                                        <div class=\"product-details text-center\">
                                            <h3 class=\"theme-color\">
                                                ";
                    // line 175
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 175) == 1)) {
                        // line 176
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 176) > 0)) {
                            // line 177
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 177) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 177) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                        <span class=\"font-light ml-1\">";
                            // line 178
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 178), 2, ".", ","), "html", null, true);
                            echo " din</span>
                                                    ";
                        } else {
                            // line 180
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 180), 2, ".", ","), "html", null, true);
                            echo " eur
                                                        <span class=\"font-light ml-1\">";
                            // line 181
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 181), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                    ";
                        }
                        // line 183
                        echo "                                                ";
                    } else {
                        // line 184
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 184) > 0)) {
                            // line 185
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 185) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 185) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                    ";
                        } else {
                            // line 187
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 187), 2, ".", ","), "html", null, true);
                            echo " eur
                                                    ";
                        }
                        // line 189
                        echo "                                                ";
                    }
                    // line 190
                    echo "                                            </h3>
                                            <a href=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                    echo "\" class=\"font-default\">
                                                <h5>";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 192), "html", null, true);
                    echo "</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 198
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                    ";
        }
        // line 200
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/products1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 200,  508 => 199,  502 => 198,  493 => 192,  489 => 191,  486 => 190,  483 => 189,  477 => 187,  471 => 185,  468 => 184,  465 => 183,  460 => 181,  455 => 180,  450 => 178,  445 => 177,  442 => 176,  440 => 175,  435 => 172,  424 => 164,  420 => 163,  415 => 160,  413 => 159,  410 => 158,  406 => 156,  403 => 155,  399 => 153,  396 => 152,  392 => 150,  390 => 149,  384 => 146,  381 => 145,  375 => 144,  369 => 142,  367 => 141,  363 => 140,  358 => 137,  355 => 136,  346 => 130,  342 => 129,  339 => 128,  336 => 127,  330 => 125,  324 => 123,  321 => 122,  318 => 121,  313 => 119,  308 => 118,  303 => 116,  298 => 115,  295 => 114,  293 => 113,  288 => 110,  277 => 102,  273 => 101,  268 => 98,  266 => 97,  263 => 96,  259 => 94,  256 => 93,  252 => 91,  249 => 90,  245 => 88,  243 => 87,  237 => 84,  234 => 83,  228 => 82,  222 => 80,  220 => 79,  216 => 78,  211 => 75,  202 => 69,  198 => 68,  195 => 67,  192 => 66,  186 => 64,  180 => 62,  177 => 61,  174 => 60,  169 => 58,  164 => 57,  159 => 55,  154 => 54,  151 => 53,  149 => 52,  144 => 49,  133 => 41,  129 => 40,  124 => 37,  122 => 36,  119 => 35,  115 => 33,  112 => 32,  108 => 30,  105 => 29,  101 => 27,  99 => 26,  93 => 23,  90 => 22,  84 => 21,  78 => 19,  76 => 18,  72 => 17,  67 => 14,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ratio_asos\">
    <div class=\"container-fluid p-0\">
        <div class=\"row m-0\">
            <div class=\"col-sm-12 p-0\">
                <div class=\"title text-center\">
                    <h5>Samo za tebe</h5>
                    <h2>Naši proizvodi</h2>
                </div>
                <div class=\"product-wrapper slide-6\">
                    {% if (randomProducts is defined) and (randomProducts | length > 0) %}
                        {% for product in randomProducts |slice(0, 6) %}
                            {% if app.user %}
                                {% if app.user.FirmaIliFizickoLice in [1, 4]  %}
                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                                <div class=\"label-block\">
                                                    {% if product.flNewProduct == 1 %}
                                                        <span class=\"label label-black\">Novo</span>
                                                    {% endif %}
                                                    {% if product.flDiscountVp == 1 %}
                                                        <span class=\"label label-theme\">Popust</span>
                                                    {% endif %}
                                                    {% if product.flOutOfStock == 1 %}
                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    {% endif %}
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    {% if product.flDiscountVp == 1 %}
                                                    {% if product.discountVpPriceDin > 0 %}
                                                        {{ ((product.discountVpPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        <span class=\"font-light ml-1\">{{ product.priceVpDin  | number_format(2, '.', ',') }} din</span>
                                                    {% else %}
                                                        {{ product.discountVpPriceEur | number_format(2, '.', ',') }} eur
                                                        <span class=\"font-light ml-1\">{{ product.priceVpEur | number_format(2, '.', ',') }} eur</span>
                                                    {% endif %}
                                                {% else %}
                                                    {% if product.priceVpDin > 0 %}
                                                        {{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                    {% else %}
                                                        {{ product.priceVpEur | number_format(2, '.', ',') }} eur
                                                    {% endif %}
                                                    {% endif %}
                                                </h3>
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                    <h5>{{ product.title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                                <div class=\"label-block\">
                                                    {% if product.flNewProduct == 1 %}
                                                        <span class=\"label label-black\">Novo</span>
                                                    {% endif %}
                                                    {% if product.flDiscount == 1 %}
                                                        <span class=\"label label-theme\">Popust</span>
                                                    {% endif %}
                                                    {% if product.flOutOfStock == 1 %}
                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    {% endif %}
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    {% if product.flDiscount == 1 %}
                                                        {% if product.discountPriceDin > 0 %}
                                                            {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                            <span class=\"font-light ml-1\">{{ product.priceDin  | number_format(2, '.', ',') }} din</span>
                                                        {% else %}
                                                            {{ product.discountPriceEur | number_format(2, '.', ',') }} eur
                                                            <span class=\"font-light ml-1\">{{ product.priceEur | number_format(2, '.', ',') }} eur</span>
                                                        {% endif %}
                                                    {% else %}
                                                        {% if product.priceDin > 0 %}
                                                            {{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        {% else %}
                                                            {{ product.priceEur | number_format(2, '.', ',') }} eur
                                                        {% endif %}
                                                    {% endif %}
                                                </h3>
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                    <h5>{{ product.title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                            </a>
                                            <div class=\"label-block\">
                                                {% if product.flNewProduct == 1 %}
                                                    <span class=\"label label-black\">Novo</span>
                                                {% endif %}
                                                {% if product.flDiscount == 1 %}
                                                    <span class=\"label label-theme\">Popust</span>
                                                {% endif %}
                                                {% if product.flOutOfStock == 1 %}
                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                {% endif %}
                                            </div>
                                            {% if product.flOutOfStock == 0 %}
                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"product-details text-center\">
                                            <h3 class=\"theme-color\">
                                                {% if product.flDiscount == 1 %}
                                                    {% if product.discountPriceDin > 0 %}
                                                        {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        <span class=\"font-light ml-1\">{{ product.priceDin  | number_format(2, '.', ',') }} din</span>
                                                    {% else %}
                                                        {{ product.discountPriceEur | number_format(2, '.', ',') }} eur
                                                        <span class=\"font-light ml-1\">{{ product.priceEur | number_format(2, '.', ',') }} eur</span>
                                                    {% endif %}
                                                {% else %}
                                                    {% if product.priceDin > 0 %}
                                                        {{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                    {% else %}
                                                        {{ product.priceEur | number_format(2, '.', ',') }} eur
                                                    {% endif %}
                                                {% endif %}
                                            </h3>
                                            <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                <h5>{{ product.title }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "include/products1.html.twig", "/home/prikolic/public_html/prikolica/templates/include/products1.html.twig");
    }
}
