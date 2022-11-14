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

/* shop/search.html.twig */
class __TwigTemplate_a1286b9bc60206291d1c5d7b7b3e92c0fb36ba99f94f46ee944c6b510238dc47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/search.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/search.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pretraga - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "shop/search.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/search.html.twig", 19)->display($context);
        // line 20
        echo "    <section class=\"breadcrumb-section section-b-space\">
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
                    <h3>Pretraga</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Pretraga</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Search bar section start -->
    <section class=\"search-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title title1 text-center\">
                        <h3>Rezultati pretrage za: \"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\"</h3>

                    </div>
                </div>
                <div class=\"col-lg-6 col-md-8 mx-auto\">
                    <div class=\"search-bar\">
                        <form id=\"search\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pretraga");
        echo "\" method=\"get\">
                        <div class=\"input-group search-bar w-100\">
                            <input type=\"search\" class=\"form-control\" placeholder=\"Unesite pojam za pretragu\" name=\"keywords\">
                            <button class=\"input-group-text\" id=\"basic-addon3\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search bar section end -->

    <!-- product section start -->
    <section class=\"ratio_asos section-b-space\">
        <div class=\"container\">
            <div class=\"row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section\">
                ";
        // line 82
        if ((array_key_exists("paginationProducts", $context) && (twig_length_filter($this->env, (isset($context["paginationProducts"]) || array_key_exists("paginationProducts", $context) ? $context["paginationProducts"] : (function () { throw new RuntimeError('Variable "paginationProducts" does not exist.', 82, $this->source); })())) > 0))) {
            // line 83
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginationProducts"]) || array_key_exists("paginationProducts", $context) ? $context["paginationProducts"] : (function () { throw new RuntimeError('Variable "paginationProducts" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "FirmaIliFizickoLice", [], "any", false, false, false, 85), [0 => 1, 1 => 4])) {
                        // line 86
                        echo "                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <div class=\"front\">
                                                <a href=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 91
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 91))) {
                            // line 92
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 94
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 94)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 95
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 96), "html", null, true);
                        echo "\">
                                                </a>
                                            </div>
                                            <div class=\"label-block\">
                                                ";
                        // line 100
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 100) == 1)) {
                            // line 101
                            echo "                                                    <span class=\"label label-black\">Novo</span>
                                                ";
                        }
                        // line 103
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 103) == 1)) {
                            // line 104
                            echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                        }
                        // line 106
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 106) == 1)) {
                            // line 107
                            echo "                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                ";
                        }
                        // line 109
                        echo "                                            </div>
                                            ";
                        // line 110
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 110) == 0)) {
                            // line 111
                            echo "                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"";
                            // line 114
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 115
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 115), "html", null, true);
                            echo "\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            ";
                        }
                        // line 123
                        echo "                                        </div>
                                        <div class=\"product-details\">
                                            <div class=\"rating-details\">
                                                        <span class=\"font-light grid-content\">
                                                            ";
                        // line 127
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 127) == 1)) {
                            // line 128
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 128) > 0)) {
                                // line 129
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 129) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 129) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                    <del class=\"font-light ml-1\">";
                                // line 130
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 130) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 130) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                ";
                            } else {
                                // line 132
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 132), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                    <span class=\"font-light ml-1\">";
                                // line 133
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 133), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                                ";
                            }
                            // line 135
                            echo "                                                            ";
                        } else {
                            // line 136
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 136) > 0)) {
                                // line 137
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 137) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 137) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                ";
                            } else {
                                // line 139
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 139), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                ";
                            }
                            // line 141
                            echo "                                                            ";
                        }
                        // line 142
                        echo "                                                        </span>
                                            </div>
                                            <div class=\"main-price\">
                                                <h5><a href=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                        echo "\">
                                                        ";
                        // line 146
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 146), "html", null, true);
                        echo "
                                                    </a></h5>
                                                <div class=\"listing-content\">
                                                    <span class=\"font-light\">";
                        // line 149
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 149), "getName", [], "method", false, false, false, 149), "html", null, true);
                        echo "</span>
                                                    <p class=\"font-light\">";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 150);
                        echo "</p>
                                                    <h4 class=\"theme-color\">
                                                        ";
                        // line 152
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 152) == 1)) {
                            // line 153
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 153) > 0)) {
                                // line 154
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 154) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 154) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                <del class=\"font-light ml-1\">";
                                // line 155
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 155) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 155) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                            ";
                            } else {
                                // line 157
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 157), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                <span class=\"font-light ml-1\">";
                                // line 158
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 158), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                            ";
                            }
                            // line 160
                            echo "                                                        ";
                        } else {
                            // line 161
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 161) > 0)) {
                                // line 162
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 162) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 162) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            ";
                            } else {
                                // line 164
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 164), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            ";
                            }
                            // line 166
                            echo "                                                        ";
                        }
                        // line 167
                        echo "                                                    </h4>
                                                </div>
                                                ";
                        // line 169
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 169) == 0)) {
                            // line 170
                            echo "                                                    <br>
                                                    <form method=\"post\" action=\"";
                            // line 171
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 172
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 172), "html", null, true);
                            echo "\">
                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                    </form>
                                                ";
                        }
                        // line 177
                        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                    } else {
                        // line 182
                        echo "                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <div class=\"front\">
                                                <a href=\"";
                        // line 186
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 186)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 187
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 187))) {
                            // line 188
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 190
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 190)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 191
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 192
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 192), "html", null, true);
                        echo "\">
                                                </a>
                                            </div>
                                            <div class=\"label-block\">
                                                ";
                        // line 196
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 196) == 1)) {
                            // line 197
                            echo "                                                    <span class=\"label label-black\">Novo</span>
                                                ";
                        }
                        // line 199
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 199) == 1)) {
                            // line 200
                            echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                        }
                        // line 202
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 202) == 1)) {
                            // line 203
                            echo "                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                ";
                        }
                        // line 205
                        echo "                                            </div>
                                            ";
                        // line 206
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 206) == 0)) {
                            // line 207
                            echo "                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"";
                            // line 210
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 211
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 211), "html", null, true);
                            echo "\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            ";
                        }
                        // line 219
                        echo "                                        </div>
                                        <div class=\"product-details\">
                                            <div class=\"rating-details\">
                                                    <span class=\"font-light grid-content\">
                                                        ";
                        // line 223
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 223) == 1)) {
                            // line 224
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 224) > 0)) {
                                // line 225
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 225) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 225) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                <del class=\"font-light ml-1\">";
                                // line 226
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 226) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 226) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                ";
                            } else {
                                // line 228
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 228), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                <span class=\"font-light ml-1\">";
                                // line 229
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 229), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                            ";
                            }
                            // line 231
                            echo "                                                        ";
                        } else {
                            // line 232
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 232) > 0)) {
                                // line 233
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 233) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 233) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            ";
                            } else {
                                // line 235
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 235), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            ";
                            }
                            // line 237
                            echo "                                                        ";
                        }
                        // line 238
                        echo "                                                    </span>
                                            </div>
                                            <div class=\"main-price\">
                                                <h4><a href=\"";
                        // line 241
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 241)]), "html", null, true);
                        echo "\">
                                                        ";
                        // line 242
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 242), "html", null, true);
                        echo "
                                                    </a></h4>
                                                <div class=\"listing-content\">
                                                    <span class=\"font-light\">";
                        // line 245
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 245), "getName", [], "method", false, false, false, 245), "html", null, true);
                        echo "</span>
                                                    <p class=\"font-light\">";
                        // line 246
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 246);
                        echo "</p>
                                                    <h4 class=\"theme-color\">
                                                        ";
                        // line 248
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 248) == 1)) {
                            // line 249
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 249) > 0)) {
                                // line 250
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 250) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 250) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                <del class=\"font-light ml-1\">";
                                // line 251
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 251) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 251) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                            ";
                            } else {
                                // line 253
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 253), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                <span class=\"font-light ml-1\">";
                                // line 254
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 254), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                            ";
                            }
                            // line 256
                            echo "                                                        ";
                        } else {
                            // line 257
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 257) > 0)) {
                                // line 258
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 258) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 258) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            ";
                            } else {
                                // line 260
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 260), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            ";
                            }
                            // line 262
                            echo "                                                        ";
                        }
                        // line 263
                        echo "                                                    </h4>
                                                </div>
                                                ";
                        // line 265
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 265) == 0)) {
                            // line 266
                            echo "                                                    <br>
                                                    <form method=\"post\" action=\"";
                            // line 267
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 268
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 268), "html", null, true);
                            echo "\">
                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                    </form>
                                                ";
                        }
                        // line 273
                        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 278
                    echo "                        ";
                } else {
                    // line 279
                    echo "                            <div>
                                <div class=\"product-box\">
                                    <div class=\"img-wrapper\">
                                        <div class=\"front\">
                                            <a href=\"";
                    // line 283
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 283)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 284
                    if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 284))) {
                        // line 285
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                        echo "
                                                            ";
                    } else {
                        // line 287
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 287)), "html", null, true);
                        echo "
                                                            ";
                    }
                    // line 288
                    echo "\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"";
                    // line 289
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 289), "html", null, true);
                    echo "\">
                                            </a>
                                        </div>
                                        <div class=\"label-block\">
                                            ";
                    // line 293
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 293) == 1)) {
                        // line 294
                        echo "                                                <span class=\"label label-black\">Novo</span>
                                            ";
                    }
                    // line 296
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 296) == 1)) {
                        // line 297
                        echo "                                                <span class=\"label label-theme\">Popust</span>
                                            ";
                    }
                    // line 299
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 299) == 1)) {
                        // line 300
                        echo "                                                <span class=\"label label-theme\">Nema na stanju</span>
                                            ";
                    }
                    // line 302
                    echo "                                        </div>
                                        ";
                    // line 303
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 303) == 0)) {
                        // line 304
                        echo "                                            <div class=\"cart-wrap\">
                                                <ul>
                                                    <li>
                                                        <form method=\"post\" action=\"";
                        // line 307
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                            <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 308
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 308), "html", null, true);
                        echo "\">
                                                            <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                            <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        ";
                    }
                    // line 316
                    echo "                                    </div>
                                    <div class=\"product-details\">
                                        <div class=\"rating-details\">
                                                    <span class=\"font-light grid-content\">
                                                        ";
                    // line 320
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 320) == 1)) {
                        // line 321
                        echo "                                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 321) > 0)) {
                            // line 322
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 322) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 322) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                                <del class=\"font-light ml-1\">";
                            // line 323
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 323) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 323) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din</del>
                                                                ";
                        } else {
                            // line 325
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 325), 2, ".", ","), "html", null, true);
                            echo " eur
                                                                <span class=\"font-light ml-1\">";
                            // line 326
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 326), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                            ";
                        }
                        // line 328
                        echo "                                                        ";
                    } else {
                        // line 329
                        echo "                                                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 329) > 0)) {
                            // line 330
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 330) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 330) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                            ";
                        } else {
                            // line 332
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 332), 2, ".", ","), "html", null, true);
                            echo " eur
                                                            ";
                        }
                        // line 334
                        echo "                                                        ";
                    }
                    // line 335
                    echo "                                                    </span>
                                        </div>
                                        <div class=\"main-price\">
                                            <h4><a href=\"";
                    // line 338
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 338)]), "html", null, true);
                    echo "\">
                                                    ";
                    // line 339
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 339), "html", null, true);
                    echo "
                                                </a></h4>
                                            <div class=\"listing-content\">
                                                <span class=\"font-light\">";
                    // line 342
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 342), "getName", [], "method", false, false, false, 342), "html", null, true);
                    echo "</span>
                                                <p class=\"font-light\">";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 343);
                    echo "</p>
                                                <h4 class=\"theme-color\">
                                                    ";
                    // line 345
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 345) == 1)) {
                        // line 346
                        echo "                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 346) > 0)) {
                            // line 347
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 347) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 347) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                            <del class=\"font-light ml-1\">";
                            // line 348
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 348) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 348) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din</del>
                                                        ";
                        } else {
                            // line 350
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 350), 2, ".", ","), "html", null, true);
                            echo " eur
                                                            <span class=\"font-light ml-1\">";
                            // line 351
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 351), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                        ";
                        }
                        // line 353
                        echo "                                                    ";
                    } else {
                        // line 354
                        echo "                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 354) > 0)) {
                            // line 355
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 355) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 355) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                        ";
                        } else {
                            // line 357
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 357), 2, ".", ","), "html", null, true);
                            echo " eur
                                                        ";
                        }
                        // line 359
                        echo "                                                    ";
                    }
                    // line 360
                    echo "                                                </h4>
                                            </div>
                                            ";
                    // line 362
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 362) == 0)) {
                        // line 363
                        echo "                                                <br>
                                                <form method=\"post\" action=\"";
                        // line 364
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 365
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 365), "html", null, true);
                        echo "\">
                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                    <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                </form>
                                            ";
                    }
                    // line 370
                    echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 375
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "                ";
        }
        // line 377
        echo "            </div>
            <nav class=\"page-section\">
                ";
        // line 379
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paginationProducts"]) || array_key_exists("paginationProducts", $context) ? $context["paginationProducts"] : (function () { throw new RuntimeError('Variable "paginationProducts" does not exist.', 379, $this->source); })()));
        echo "
            </nav>
        </div>
    </section>
    <!-- product section end -->

    <!-- footer start -->
    ";
        // line 386
        $this->loadTemplate("include/footer.html.twig", "shop/search.html.twig", 386)->display($context);
        // line 387
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 391
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 395
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 399
        echo "    ";
        // line 400
        echo "    ";
        // line 401
        echo "    ";
        // line 402
        echo "    ";
        // line 403
        echo "    ";
        // line 404
        echo "    ";
        // line 405
        echo "    ";
        // line 406
        echo "    ";
        // line 407
        echo "    ";
        // line 408
        echo "    ";
        // line 409
        echo "    ";
        // line 410
        echo "    ";
        // line 411
        echo "    ";
        // line 412
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 415
        $this->loadTemplate("include/top.html.twig", "shop/search.html.twig", 415)->display($context);
        // line 416
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 421
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 422
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 422,  1000 => 421,  987 => 416,  985 => 415,  980 => 412,  978 => 411,  976 => 410,  974 => 409,  972 => 408,  970 => 407,  968 => 406,  966 => 405,  964 => 404,  962 => 403,  960 => 402,  958 => 401,  956 => 400,  954 => 399,  949 => 395,  944 => 391,  939 => 387,  937 => 386,  927 => 379,  923 => 377,  920 => 376,  914 => 375,  907 => 370,  899 => 365,  895 => 364,  892 => 363,  890 => 362,  886 => 360,  883 => 359,  877 => 357,  871 => 355,  868 => 354,  865 => 353,  860 => 351,  855 => 350,  850 => 348,  845 => 347,  842 => 346,  840 => 345,  835 => 343,  831 => 342,  825 => 339,  821 => 338,  816 => 335,  813 => 334,  807 => 332,  801 => 330,  798 => 329,  795 => 328,  790 => 326,  785 => 325,  780 => 323,  775 => 322,  772 => 321,  770 => 320,  764 => 316,  753 => 308,  749 => 307,  744 => 304,  742 => 303,  739 => 302,  735 => 300,  732 => 299,  728 => 297,  725 => 296,  721 => 294,  719 => 293,  712 => 289,  709 => 288,  703 => 287,  697 => 285,  695 => 284,  691 => 283,  685 => 279,  682 => 278,  675 => 273,  667 => 268,  663 => 267,  660 => 266,  658 => 265,  654 => 263,  651 => 262,  645 => 260,  639 => 258,  636 => 257,  633 => 256,  628 => 254,  623 => 253,  618 => 251,  613 => 250,  610 => 249,  608 => 248,  603 => 246,  599 => 245,  593 => 242,  589 => 241,  584 => 238,  581 => 237,  575 => 235,  569 => 233,  566 => 232,  563 => 231,  558 => 229,  553 => 228,  548 => 226,  543 => 225,  540 => 224,  538 => 223,  532 => 219,  521 => 211,  517 => 210,  512 => 207,  510 => 206,  507 => 205,  503 => 203,  500 => 202,  496 => 200,  493 => 199,  489 => 197,  487 => 196,  480 => 192,  477 => 191,  471 => 190,  465 => 188,  463 => 187,  459 => 186,  453 => 182,  446 => 177,  438 => 172,  434 => 171,  431 => 170,  429 => 169,  425 => 167,  422 => 166,  416 => 164,  410 => 162,  407 => 161,  404 => 160,  399 => 158,  394 => 157,  389 => 155,  384 => 154,  381 => 153,  379 => 152,  374 => 150,  370 => 149,  364 => 146,  360 => 145,  355 => 142,  352 => 141,  346 => 139,  340 => 137,  337 => 136,  334 => 135,  329 => 133,  324 => 132,  319 => 130,  314 => 129,  311 => 128,  309 => 127,  303 => 123,  292 => 115,  288 => 114,  283 => 111,  281 => 110,  278 => 109,  274 => 107,  271 => 106,  267 => 104,  264 => 103,  260 => 101,  258 => 100,  251 => 96,  248 => 95,  242 => 94,  236 => 92,  234 => 91,  230 => 90,  224 => 86,  221 => 85,  218 => 84,  213 => 83,  211 => 82,  189 => 63,  180 => 57,  160 => 40,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Pretraga - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Pretraga</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Pretraga</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Search bar section start -->
    <section class=\"search-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title title1 text-center\">
                        <h3>Rezultati pretrage za: \"{{ keywords }}\"</h3>

                    </div>
                </div>
                <div class=\"col-lg-6 col-md-8 mx-auto\">
                    <div class=\"search-bar\">
                        <form id=\"search\" action=\"{{ path('pretraga') }}\" method=\"get\">
                        <div class=\"input-group search-bar w-100\">
                            <input type=\"search\" class=\"form-control\" placeholder=\"Unesite pojam za pretragu\" name=\"keywords\">
                            <button class=\"input-group-text\" id=\"basic-addon3\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search bar section end -->

    <!-- product section start -->
    <section class=\"ratio_asos section-b-space\">
        <div class=\"container\">
            <div class=\"row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section\">
                {% if (paginationProducts is defined) and (paginationProducts | length > 0) %}
                    {% for product in paginationProducts %}
                        {% if app.user %}
                            {% if app.user.FirmaIliFizickoLice in [1,4]  %}
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <div class=\"front\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                            </div>
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
                                        <div class=\"product-details\">
                                            <div class=\"rating-details\">
                                                        <span class=\"font-light grid-content\">
                                                            {% if product.flDiscountVp == 1 %}
                                                                {% if product.discountVpPriceDin > 0 %}
                                                                    {{ ((product.discountVpPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                                    <del class=\"font-light ml-1\">{{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                        </span>
                                            </div>
                                            <div class=\"main-price\">
                                                <h5><a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                        {{ product.title }}
                                                    </a></h5>
                                                <div class=\"listing-content\">
                                                    <span class=\"font-light\">{{ product.kategorija.getName() }}</span>
                                                    <p class=\"font-light\">{{ product.caracteristic | raw }}</p>
                                                    <h4 class=\"theme-color\">
                                                        {% if product.flDiscountVp == 1 %}
                                                            {% if product.discountVpPriceDin > 0 %}
                                                                {{ ((product.discountVpPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                                <del class=\"font-light ml-1\">{{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                    </h4>
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <br>
                                                    <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% else %}
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <div class=\"front\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                            </div>
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
                                        <div class=\"product-details\">
                                            <div class=\"rating-details\">
                                                    <span class=\"font-light grid-content\">
                                                        {% if product.flDiscount == 1 %}
                                                            {% if product.discountPriceDin > 0 %}
                                                                {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                                <del class=\"font-light ml-1\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                    </span>
                                            </div>
                                            <div class=\"main-price\">
                                                <h4><a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                        {{ product.title }}
                                                    </a></h4>
                                                <div class=\"listing-content\">
                                                    <span class=\"font-light\">{{ product.kategorija.getName() }}</span>
                                                    <p class=\"font-light\">{{ product.caracteristic | raw }}</p>
                                                    <h4 class=\"theme-color\">
                                                        {% if product.flDiscount == 1 %}
                                                            {% if product.discountPriceDin > 0 %}
                                                                {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                                <del class=\"font-light ml-1\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                    </h4>
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <br>
                                                    <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% else %}
                            <div>
                                <div class=\"product-box\">
                                    <div class=\"img-wrapper\">
                                        <div class=\"front\">
                                            <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                            </a>
                                        </div>
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
                                    <div class=\"product-details\">
                                        <div class=\"rating-details\">
                                                    <span class=\"font-light grid-content\">
                                                        {% if product.flDiscount == 1 %}
                                                            {% if product.discountPriceDin > 0 %}
                                                                {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                                <del class=\"font-light ml-1\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                    </span>
                                        </div>
                                        <div class=\"main-price\">
                                            <h4><a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    {{ product.title }}
                                                </a></h4>
                                            <div class=\"listing-content\">
                                                <span class=\"font-light\">{{ product.kategorija.getName() }}</span>
                                                <p class=\"font-light\">{{ product.caracteristic | raw }}</p>
                                                <h4 class=\"theme-color\">
                                                    {% if product.flDiscount == 1 %}
                                                        {% if product.discountPriceDin > 0 %}
                                                            {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                            <del class=\"font-light ml-1\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
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
                                                </h4>
                                            </div>
                                            {% if product.flOutOfStock == 0 %}
                                                <br>
                                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                    <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                </form>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
            <nav class=\"page-section\">
                {{ knp_pagination_render(paginationProducts) }}
            </nav>
        </div>
    </section>
    <!-- product section end -->

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
", "shop/search.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/search.html.twig");
    }
}
