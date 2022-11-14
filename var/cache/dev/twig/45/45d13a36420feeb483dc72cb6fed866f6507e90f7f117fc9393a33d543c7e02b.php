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

/* shop/index_kuke.html.twig */
class __TwigTemplate_d7a040b94b671d39606bb78bb990e49f4dde14fb26865a86492ad0ff45312af6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index_kuke.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index_kuke.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/index_kuke.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prodavnica - Prodaja autoprikolica, traktora."), "html", null, true);
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
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "uri", [], "any", false, false, false, 10), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <!-- header  -->
    ";
        // line 15
        $this->loadTemplate("include/header.html.twig", "shop/index_kuke.html.twig", 15)->display($context);
        // line 16
        echo "    <!-- mobile fix menu -->
    ";
        // line 17
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/index_kuke.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- Breadcrumb section start -->
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
                    <h3>Kuke</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\" aria-current=\"page\">Kupovina</li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Prodavnica</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"category-option\">
                        <div class=\"button-close mb-3\">
                            <button class=\"btn p-0\"><i data-feather=\"arrow-left\"></i> Zatvorite</button>
                        </div>
                        <form method=\"post\" action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_kuka");
        echo "\">
                            <div class=\"accordion category-name\" id=\"accordionExample\">
                                ";
        // line 62
        if ( !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 62, $this->source); })()))) {
            // line 63
            echo "                                    <div class=\"accordion-item category-rating\">
                                        <h2 class=\"accordion-header\" id=\"heading1\">
                                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapse1\">
                                                Potkategorije
                                            </button>
                                        </h2>
                                        <div id=\"collapse1\" class=\"accordion-collapse collapse show\"
                                             data-bs-parent=\"#accordionExample\">
                                            <div class=\"accordion-body category-scroll\">
                                                <ul class=\"category-list\">
                                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 75
                echo "                                                        <li>
                                                            <div class=\"form-check ps-0 custome-form-check\">
                                                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault1\" name=\"kategorija[]\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\"
                                                                    ";
                // line 78
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 78, $this->source); })()), "kat", [], "any", false, false, false, 78))) {
                    // line 79
                    echo "                                                                        checked
                                                                    ";
                }
                // line 81
                echo "                                                                >
                                                                <label class=\"form-check-label\" for=\"flexCheckDefault1\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 82), "html", null, true);
                echo "</label>
                                                            </div>
                                                        </li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 91
        echo "                                ";
        if ( !twig_test_empty((isset($context["atribute"]) || array_key_exists("atribute", $context) ? $context["atribute"] : (function () { throw new RuntimeError('Variable "atribute" does not exist.', 91, $this->source); })()))) {
            // line 92
            echo "                                    <div class=\"accordion-item category-rating\">
                                <h2 class=\"accordion-header\" id=\"heading2\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapse2\">
                                        Atributi
                                    </button>
                                </h2>
                                <div id=\"collapse2\" class=\"accordion-collapse collapse show\"
                                     data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body category-scroll\">
                                        <ul class=\"category-list\">
                                            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["atribute"]) || array_key_exists("atribute", $context) ? $context["atribute"] : (function () { throw new RuntimeError('Variable "atribute" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["atr"]) {
                // line 104
                echo "                                                <li>
                                                    <div class=\"form-check ps-0 custome-form-check\">
                                                        <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault1\" name=\"atribut[]\" value=\"";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atr"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\"
                                                            ";
                // line 107
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["atr"], "id", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 107, $this->source); })()), "atr", [], "any", false, false, false, 107))) {
                    // line 108
                    echo "                                                                checked
                                                            ";
                }
                // line 110
                echo "                                                        >
                                                        <label class=\"form-check-label\" for=\"flexCheckDefault1\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["atr"], "name", [], "any", false, false, false, 111), "html", null, true);
                echo "</label>
                                                    </div>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                                ";
        }
        // line 133
        echo "
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"heading4\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapse4\">
                                        Tagovi
                                    </button>
                                </h2>
                                <div id=\"collapse4\" class=\"accordion-collapse collapse show\"
                                     aria-labelledby=\"heading4\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        <ul class=\"category-list\">
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault15\" name=\"tag[nov]\" value=\"1\"
                                                            ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "tag", [], "any", false, true, false, 148), "nov", [], "any", true, true, false, 148) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 148, $this->source); })()), "tag", [], "any", false, false, false, 148), "nov", [], "any", false, false, false, 148) == 1))) {
            // line 149
            echo "                                                                checked
                                                            ";
        }
        // line 150
        echo "  >
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault15\">NOVO</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault16\" name=\"tag[popust]\" value=\"1\"
                                                            ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "tag", [], "any", false, true, false, 157), "popust", [], "any", true, true, false, 157) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 157, $this->source); })()), "tag", [], "any", false, false, false, 157), "popust", [], "any", false, false, false, 157) == 1))) {
            // line 158
            echo "                                                                checked
                                                            ";
        }
        // line 159
        echo ">
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault16\">POPUST</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault17\" name=\"tag[stanje]\" value=\"1\"
                                                            ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "tag", [], "any", false, true, false, 166), "stanje", [], "any", true, true, false, 166) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 166, $this->source); })()), "tag", [], "any", false, false, false, 166), "stanje", [], "any", false, false, false, 166) == 1))) {
            // line 167
            echo "                                                                checked
                                                            ";
        }
        // line 168
        echo ">
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault17\">DOSTUPNO</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row text-center mt-3\">
                                <button type=\"submit\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">Primenite</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class=\"col-lg-9 col-12 ratio_30\">
                    <div class=\"row g-4\">
                        <!-- filter button -->
                        <div class=\"filter-button\">
                            <button class=\"danger-button danger-center btn btn-sm filter-btn\"><i data-feather=\"align-left\"></i> Filteri</button>
                        </div>
                        <!-- filter button -->
";
        // line 195
        echo "                        <div class=\"col-12\">
                            <h3>";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 196, $this->source); })()), "html", null, true);
        echo " rezultata</h3>
                            <div class=\"filter-options\">
                                <div class=\"grid-options d-sm-inline-block d-none\">
                                    <ul class=\"d-flex\">
                                        <li class=\"three-grid d-md-inline-block d-none\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/grid-3.svg"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                        <li class=\"grid-btn active d-lg-inline-block d-none\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/grid.svg"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                        <li class=\"list-btn\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/list.svg"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div class=\"row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section\">
                                                ";
        // line 227
        if ((array_key_exists("paginationProducts", $context) && (twig_length_filter($this->env, (isset($context["paginationProducts"]) || array_key_exists("paginationProducts", $context) ? $context["paginationProducts"] : (function () { throw new RuntimeError('Variable "paginationProducts" does not exist.', 227, $this->source); })())) > 0))) {
            // line 228
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginationProducts"]) || array_key_exists("paginationProducts", $context) ? $context["paginationProducts"] : (function () { throw new RuntimeError('Variable "paginationProducts" does not exist.', 228, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 229
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "                                                            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "FirmaIliFizickoLice", [], "any", false, false, false, 230), [0 => 1, 1 => 4])) {
                        // line 231
                        echo "                                                                <div>
                                                                    <div class=\"product-box\">
                                                                        <div class=\"img-wrapper\">
                                                                            <div class=\"front\">
                                                                                <a href=\"";
                        // line 235
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 235)]), "html", null, true);
                        echo "\">
                                                                                    <img src=\"";
                        // line 236
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 236))) {
                            // line 237
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                                                    ";
                        } else {
                            // line 239
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 239)), "html", null, true);
                            echo "
                                                                                    ";
                        }
                        // line 240
                        echo "\"
                                                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 241
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 241), "html", null, true);
                        echo "\">
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"label-block\">
                                                                                ";
                        // line 245
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 245) == 1)) {
                            // line 246
                            echo "                                                                                    <span class=\"label label-black\">Novo</span>
                                                                                ";
                        }
                        // line 248
                        echo "                                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 248) == 1)) {
                            // line 249
                            echo "                                                                                    <span class=\"label label-theme\">Popust</span>
                                                                                ";
                        }
                        // line 251
                        echo "                                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 251) == 1)) {
                            // line 252
                            echo "                                                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                                                ";
                        }
                        // line 254
                        echo "                                                                            </div>
                                                                            ";
                        // line 255
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 255) == 0)) {
                            // line 256
                            echo "                                                                                <div class=\"cart-wrap\">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <form method=\"post\" action=\"";
                            // line 259
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 260
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 260), "html", null, true);
                            echo "\">
                                                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                                            </form>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            ";
                        }
                        // line 268
                        echo "                                                                        </div>
                                                                        <div class=\"product-details\">
                                                                            <div class=\"rating-details\">
                                                                                <span class=\"font-light grid-content\">
                                                                                    ";
                        // line 272
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 272) == 1)) {
                            // line 273
                            echo "                                                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 273) > 0)) {
                                // line 274
                                echo "                                                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 274) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 274) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                            <del class=\"font-light ml-1\">";
                                // line 275
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 275) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 275) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                                        ";
                            } else {
                                // line 277
                                echo "                                                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 277), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                            <span class=\"font-light ml-1\">";
                                // line 278
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 278), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                                                        ";
                            }
                            // line 280
                            echo "                                                                                    ";
                        } else {
                            // line 281
                            echo "                                                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 281) > 0)) {
                                // line 282
                                echo "                                                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 282) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 282) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                        ";
                            } else {
                                // line 284
                                echo "                                                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 284), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                        ";
                            }
                            // line 286
                            echo "                                                                                    ";
                        }
                        // line 287
                        echo "                                                                                </span>
                                                                            </div>
                                                                            <div class=\"main-price\">
                                                                                <h5><a href=\"";
                        // line 290
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                        echo "\">
                                                                                        ";
                        // line 291
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 291), "html", null, true);
                        echo "
                                                                                    </a></h5>
                                                                                <div class=\"listing-content\">
                                                                                    <span class=\"font-light\">";
                        // line 294
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 294), "getName", [], "method", false, false, false, 294), "html", null, true);
                        echo "</span>
                                                                                    <p class=\"font-light\">";
                        // line 295
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 295);
                        echo "</p>
                                                                                    <h4 class=\"theme-color\">
                                                                                        ";
                        // line 297
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 297) == 1)) {
                            // line 298
                            echo "                                                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 298) > 0)) {
                                // line 299
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 299) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 299) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                                <del class=\"font-light ml-1\">";
                                // line 300
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 300) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 300) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                                            ";
                            } else {
                                // line 302
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 302), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                                <span class=\"font-light ml-1\">";
                                // line 303
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 303), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                                                            ";
                            }
                            // line 305
                            echo "                                                                                        ";
                        } else {
                            // line 306
                            echo "                                                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 306) > 0)) {
                                // line 307
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 307) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 307) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                            ";
                            } else {
                                // line 309
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 309), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                            ";
                            }
                            // line 311
                            echo "                                                                                        ";
                        }
                        // line 312
                        echo "                                                                                    </h4>
                                                                                </div>
                                                                                ";
                        // line 314
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 314) == 0)) {
                            // line 315
                            echo "                                                                                    <br>
                                                                                    <form method=\"post\" action=\"";
                            // line 316
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 317
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 317), "html", null, true);
                            echo "\">
                                                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                                                    </form>
                                                                                ";
                        }
                        // line 322
                        echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ";
                    } else {
                        // line 327
                        echo "                                                                <div>
                                                                    <div class=\"product-box\">
                                                                        <div class=\"img-wrapper\">
                                                                            <div class=\"front\">
                                                                                <a href=\"";
                        // line 331
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 331)]), "html", null, true);
                        echo "\">
                                                                                    <img src=\"";
                        // line 332
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 332))) {
                            // line 333
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                                                    ";
                        } else {
                            // line 335
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 335)), "html", null, true);
                            echo "
                                                                                    ";
                        }
                        // line 336
                        echo "\"
                                                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 337
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 337), "html", null, true);
                        echo "\">
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"label-block\">
                                                                                ";
                        // line 341
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 341) == 1)) {
                            // line 342
                            echo "                                                                                    <span class=\"label label-black\">Novo</span>
                                                                                ";
                        }
                        // line 344
                        echo "                                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 344) == 1)) {
                            // line 345
                            echo "                                                                                    <span class=\"label label-theme\">Popust</span>
                                                                                ";
                        }
                        // line 347
                        echo "                                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 347) == 1)) {
                            // line 348
                            echo "                                                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                                                ";
                        }
                        // line 350
                        echo "                                                                            </div>
                                                                            ";
                        // line 351
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 351) == 0)) {
                            // line 352
                            echo "                                                                                <div class=\"cart-wrap\">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <form method=\"post\" action=\"";
                            // line 355
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 356
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 356), "html", null, true);
                            echo "\">
                                                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                                            </form>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            ";
                        }
                        // line 364
                        echo "                                                                        </div>
                                                                        <div class=\"product-details\">
                                                                            <div class=\"rating-details\">
                                                                            <span class=\"font-light grid-content\">
                                                                                ";
                        // line 368
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 368) == 1)) {
                            // line 369
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 369) > 0)) {
                                // line 370
                                echo "                                                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 370) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 370) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                        <del class=\"font-light ml-1\">";
                                // line 371
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 371) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 371) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                                        ";
                            } else {
                                // line 373
                                echo "                                                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 373), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                        <span class=\"font-light ml-1\">";
                                // line 374
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 374), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                                                    ";
                            }
                            // line 376
                            echo "                                                                                ";
                        } else {
                            // line 377
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 377) > 0)) {
                                // line 378
                                echo "                                                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 378) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 378) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                    ";
                            } else {
                                // line 380
                                echo "                                                                                        ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 380), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                    ";
                            }
                            // line 382
                            echo "                                                                                ";
                        }
                        // line 383
                        echo "                                                                            </span>
                                                                            </div>
                                                                            <div class=\"main-price\">
                                                                                <h4><a href=\"";
                        // line 386
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 386)]), "html", null, true);
                        echo "\">
                                                                                        ";
                        // line 387
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 387), "html", null, true);
                        echo "
                                                                                    </a></h4>
                                                                                <div class=\"listing-content\">
                                                                                    <span class=\"font-light\">";
                        // line 390
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 390), "getName", [], "method", false, false, false, 390), "html", null, true);
                        echo "</span>
                                                                                    <p class=\"font-light\">";
                        // line 391
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 391);
                        echo "</p>
                                                                                    <h4 class=\"theme-color\">
                                                                                        ";
                        // line 393
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 393) == 1)) {
                            // line 394
                            echo "                                                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 394) > 0)) {
                                // line 395
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 395) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 395) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                                <del class=\"font-light ml-1\">";
                                // line 396
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 396) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 396) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din</del>
                                                                                            ";
                            } else {
                                // line 398
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 398), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                                <span class=\"font-light ml-1\">";
                                // line 399
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 399), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                                                            ";
                            }
                            // line 401
                            echo "                                                                                        ";
                        } else {
                            // line 402
                            echo "                                                                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 402) > 0)) {
                                // line 403
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 403) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 403) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                                                            ";
                            } else {
                                // line 405
                                echo "                                                                                                ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 405), 2, ".", ","), "html", null, true);
                                echo " eur
                                                                                            ";
                            }
                            // line 407
                            echo "                                                                                        ";
                        }
                        // line 408
                        echo "                                                                                    </h4>
                                                                                </div>
                                                                                ";
                        // line 410
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 410) == 0)) {
                            // line 411
                            echo "                                                                                    <br>
                                                                                    <form method=\"post\" action=\"";
                            // line 412
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                        <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 413
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 413), "html", null, true);
                            echo "\">
                                                                                        <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                        <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                                                    </form>
                                                                                ";
                        }
                        // line 418
                        echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ";
                    }
                    // line 423
                    echo "                                                        ";
                } else {
                    // line 424
                    echo "                                                            <div>
                                                                <div class=\"product-box\">
                                                                    <div class=\"img-wrapper\">
                                                                        <div class=\"front\">
                                                                            <a href=\"";
                    // line 428
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 428)]), "html", null, true);
                    echo "\">
                                                                                <img src=\"";
                    // line 429
                    if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 429))) {
                        // line 430
                        echo "                                                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                        echo "
                                                                                    ";
                    } else {
                        // line 432
                        echo "                                                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 432)), "html", null, true);
                        echo "
                                                                                    ";
                    }
                    // line 433
                    echo "\"
                                                                                     class=\"bg-img blur-up lazyload\" alt=\"";
                    // line 434
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 434), "html", null, true);
                    echo "\">
                                                                            </a>
                                                                        </div>
                                                                        <div class=\"label-block\">
                                                                            ";
                    // line 438
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 438) == 1)) {
                        // line 439
                        echo "                                                                                <span class=\"label label-black\">Novo</span>
                                                                            ";
                    }
                    // line 441
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 441) == 1)) {
                        // line 442
                        echo "                                                                                <span class=\"label label-theme\">Popust</span>
                                                                            ";
                    }
                    // line 444
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 444) == 1)) {
                        // line 445
                        echo "                                                                                <span class=\"label label-theme\">Nema na stanju</span>
                                                                            ";
                    }
                    // line 447
                    echo "                                                                        </div>
                                                                        ";
                    // line 448
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 448) == 0)) {
                        // line 449
                        echo "                                                                            <div class=\"cart-wrap\">
                                                                                <ul>
                                                                                    <li>
                                                                                        <form method=\"post\" action=\"";
                        // line 452
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                            <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 453
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 453), "html", null, true);
                        echo "\">
                                                                                            <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                            <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        ";
                    }
                    // line 461
                    echo "                                                                    </div>
                                                                    <div class=\"product-details\">
                                                                        <div class=\"rating-details\">
                                                                            <span class=\"font-light grid-content\">
                                                                                ";
                    // line 465
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 465) == 1)) {
                        // line 466
                        echo "                                                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 466) > 0)) {
                            // line 467
                            echo "                                                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 467) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 467) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                                                    <del class=\"font-light ml-1\">";
                            // line 468
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 468) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 468) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din</del>
                                                                                        ";
                        } else {
                            // line 470
                            echo "                                                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 470), 2, ".", ","), "html", null, true);
                            echo " eur
                                                                                    <span class=\"font-light ml-1\">";
                            // line 471
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 471), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                                                ";
                        }
                        // line 473
                        echo "                                                                                    ";
                    } else {
                        // line 474
                        echo "                                                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 474) > 0)) {
                            // line 475
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 475) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 475) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                                                    ";
                        } else {
                            // line 477
                            echo "                                                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 477), 2, ".", ","), "html", null, true);
                            echo " eur
                                                                                    ";
                        }
                        // line 479
                        echo "                                                                                ";
                    }
                    // line 480
                    echo "                                                                            </span>
                                                                        </div>
                                                                        <div class=\"main-price\">
                                                                            <h4><a href=\"";
                    // line 483
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 483)]), "html", null, true);
                    echo "\">
                                                                                    ";
                    // line 484
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 484), "html", null, true);
                    echo "
                                                                                </a></h4>
                                                                            <div class=\"listing-content\">
                                                                                <span class=\"font-light\">";
                    // line 487
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "kategorija", [], "any", false, false, false, 487), "getName", [], "method", false, false, false, 487), "html", null, true);
                    echo "</span>
                                                                                <p class=\"font-light\">";
                    // line 488
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "caracteristic", [], "any", false, false, false, 488);
                    echo "</p>
                                                                                <h4 class=\"theme-color\">
                                                                                    ";
                    // line 490
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 490) == 1)) {
                        // line 491
                        echo "                                                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 491) > 0)) {
                            // line 492
                            echo "                                                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 492) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 492) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                                                            <del class=\"font-light ml-1\">";
                            // line 493
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 493) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 493) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din</del>
                                                                                        ";
                        } else {
                            // line 495
                            echo "                                                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 495), 2, ".", ","), "html", null, true);
                            echo " eur
                                                                                            <span class=\"font-light ml-1\">";
                            // line 496
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 496), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                                                        ";
                        }
                        // line 498
                        echo "                                                                                    ";
                    } else {
                        // line 499
                        echo "                                                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 499) > 0)) {
                            // line 500
                            echo "                                                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 500) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 500) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                                                        ";
                        } else {
                            // line 502
                            echo "                                                                                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 502), 2, ".", ","), "html", null, true);
                            echo " eur
                                                                                        ";
                        }
                        // line 504
                        echo "                                                                                    ";
                    }
                    // line 505
                    echo "                                                                                </h4>
                                                                            </div>
                                                                            ";
                    // line 507
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 507) == 0)) {
                        // line 508
                        echo "                                                                                <br>
                                                                                <form method=\"post\" action=\"";
                        // line 509
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 510
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 510), "html", null, true);
                        echo "\">
                                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                                    <button type=\"submit\" class=\"btn listing-content\">Dodajte u korpu</button>
                                                                                </form>
                                                                            ";
                    }
                    // line 515
                    echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 520
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "                                                ";
        }
        // line 522
        echo "
                        <!-- Prodcut setion -->
                    </div>
";
        // line 528
        echo "                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section end -->

    <!-- footer start -->
    ";
        // line 536
        $this->loadTemplate("include/footer.html.twig", "shop/index_kuke.html.twig", 536)->display($context);
        // line 537
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 541
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 545
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 549
        echo "    ";
        // line 550
        echo "    ";
        // line 551
        echo "    ";
        // line 552
        echo "    ";
        // line 553
        echo "    ";
        // line 554
        echo "    ";
        // line 555
        echo "    ";
        // line 556
        echo "    ";
        // line 557
        echo "    ";
        // line 558
        echo "    ";
        // line 559
        echo "    ";
        // line 560
        echo "    ";
        // line 561
        echo "    ";
        // line 562
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 565
        $this->loadTemplate("include/top.html.twig", "shop/index_kuke.html.twig", 565)->display($context);
        // line 566
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 571
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 572
        echo "<script>
    \$(function () {
        var \$range = \$(\".js-range-slider\"),
            \$inputFrom = \$(\".js-input-from\"),
            \$inputTo = \$(\".js-input-to\"),
            instance,
            min = 0,
            max = 500000,
            from = 0,
            to = 0;

        \$range.ionRangeSlider({
            type: \"double\",
            min: min,
            max: max,
            from: 0,
            to: 500000,
            prefix: \"RSD \",
            onStart: updateInputs,
            onChange: updateInputs,
            step: 100,
            prettify_enabled: true,
            prettify_separator: \".\",
            values_separator: \" - \",
            force_edges: true,
        });

        instance = \$range.data(\"ionRangeSlider\");

        function updateInputs(data) {
            from = \"RSD\" + data.from;
            to = \"RSD\" + data.to;

            \$inputFrom.prop(\"value\", from);
            \$inputTo.prop(\"value\", to);
        }

        \$inputFrom.on(\"input\", function () {
            var val = \$(this).prop(\"value\");

            // validate
            if (val < min) {
                val = min;
            } else if (val > to) {
                val = to;
            }

            instance.update({
                from: val,
            });
        });

        \$inputTo.on(\"input\", function () {
            var val = \$(this).prop(\"value\");

            // validate
            if (val < from) {
                val = from;
            } else if (val > max) {
                val = max;
            }

            instance.update({
                to: val,
            });
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/index_kuke.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1218 => 572,  1208 => 571,  1195 => 566,  1193 => 565,  1188 => 562,  1186 => 561,  1184 => 560,  1182 => 559,  1180 => 558,  1178 => 557,  1176 => 556,  1174 => 555,  1172 => 554,  1170 => 553,  1168 => 552,  1166 => 551,  1164 => 550,  1162 => 549,  1157 => 545,  1152 => 541,  1147 => 537,  1145 => 536,  1135 => 528,  1130 => 522,  1127 => 521,  1121 => 520,  1114 => 515,  1106 => 510,  1102 => 509,  1099 => 508,  1097 => 507,  1093 => 505,  1090 => 504,  1084 => 502,  1078 => 500,  1075 => 499,  1072 => 498,  1067 => 496,  1062 => 495,  1057 => 493,  1052 => 492,  1049 => 491,  1047 => 490,  1042 => 488,  1038 => 487,  1032 => 484,  1028 => 483,  1023 => 480,  1020 => 479,  1014 => 477,  1008 => 475,  1005 => 474,  1002 => 473,  997 => 471,  992 => 470,  987 => 468,  982 => 467,  979 => 466,  977 => 465,  971 => 461,  960 => 453,  956 => 452,  951 => 449,  949 => 448,  946 => 447,  942 => 445,  939 => 444,  935 => 442,  932 => 441,  928 => 439,  926 => 438,  919 => 434,  916 => 433,  910 => 432,  904 => 430,  902 => 429,  898 => 428,  892 => 424,  889 => 423,  882 => 418,  874 => 413,  870 => 412,  867 => 411,  865 => 410,  861 => 408,  858 => 407,  852 => 405,  846 => 403,  843 => 402,  840 => 401,  835 => 399,  830 => 398,  825 => 396,  820 => 395,  817 => 394,  815 => 393,  810 => 391,  806 => 390,  800 => 387,  796 => 386,  791 => 383,  788 => 382,  782 => 380,  776 => 378,  773 => 377,  770 => 376,  765 => 374,  760 => 373,  755 => 371,  750 => 370,  747 => 369,  745 => 368,  739 => 364,  728 => 356,  724 => 355,  719 => 352,  717 => 351,  714 => 350,  710 => 348,  707 => 347,  703 => 345,  700 => 344,  696 => 342,  694 => 341,  687 => 337,  684 => 336,  678 => 335,  672 => 333,  670 => 332,  666 => 331,  660 => 327,  653 => 322,  645 => 317,  641 => 316,  638 => 315,  636 => 314,  632 => 312,  629 => 311,  623 => 309,  617 => 307,  614 => 306,  611 => 305,  606 => 303,  601 => 302,  596 => 300,  591 => 299,  588 => 298,  586 => 297,  581 => 295,  577 => 294,  571 => 291,  567 => 290,  562 => 287,  559 => 286,  553 => 284,  547 => 282,  544 => 281,  541 => 280,  536 => 278,  531 => 277,  526 => 275,  521 => 274,  518 => 273,  516 => 272,  510 => 268,  499 => 260,  495 => 259,  490 => 256,  488 => 255,  485 => 254,  481 => 252,  478 => 251,  474 => 249,  471 => 248,  467 => 246,  465 => 245,  458 => 241,  455 => 240,  449 => 239,  443 => 237,  441 => 236,  437 => 235,  431 => 231,  428 => 230,  425 => 229,  420 => 228,  418 => 227,  402 => 214,  393 => 208,  384 => 202,  375 => 196,  372 => 195,  346 => 168,  342 => 167,  340 => 166,  331 => 159,  327 => 158,  325 => 157,  316 => 150,  312 => 149,  310 => 148,  293 => 133,  286 => 115,  276 => 111,  273 => 110,  269 => 108,  267 => 107,  263 => 106,  259 => 104,  255 => 103,  242 => 92,  239 => 91,  232 => 86,  222 => 82,  219 => 81,  215 => 79,  213 => 78,  209 => 77,  205 => 75,  201 => 74,  188 => 63,  186 => 62,  181 => 60,  157 => 39,  134 => 18,  132 => 17,  129 => 16,  127 => 15,  124 => 14,  114 => 13,  102 => 10,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Prodavnica - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
{% endblock title %}
{% block metatags %}
    {{ parent() }}
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
    <!-- Breadcrumb section start -->
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
                    <h3>Kuke</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item\" aria-current=\"page\">Kupovina</li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Prodavnica</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"category-option\">
                        <div class=\"button-close mb-3\">
                            <button class=\"btn p-0\"><i data-feather=\"arrow-left\"></i> Zatvorite</button>
                        </div>
                        <form method=\"post\" action=\"{{ path('prodavnica_kuka') }}\">
                            <div class=\"accordion category-name\" id=\"accordionExample\">
                                {% if category is not empty %}
                                    <div class=\"accordion-item category-rating\">
                                        <h2 class=\"accordion-header\" id=\"heading1\">
                                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#collapse1\">
                                                Potkategorije
                                            </button>
                                        </h2>
                                        <div id=\"collapse1\" class=\"accordion-collapse collapse show\"
                                             data-bs-parent=\"#accordionExample\">
                                            <div class=\"accordion-body category-scroll\">
                                                <ul class=\"category-list\">
                                                    {% for cat in category %}
                                                        <li>
                                                            <div class=\"form-check ps-0 custome-form-check\">
                                                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault1\" name=\"kategorija[]\" value=\"{{ cat.id }}\"
                                                                    {% if cat.id in filter.kat %}
                                                                        checked
                                                                    {% endif %}
                                                                >
                                                                <label class=\"form-check-label\" for=\"flexCheckDefault1\">{{ cat.name }}</label>
                                                            </div>
                                                        </li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                {% if atribute is not empty %}
                                    <div class=\"accordion-item category-rating\">
                                <h2 class=\"accordion-header\" id=\"heading2\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapse2\">
                                        Atributi
                                    </button>
                                </h2>
                                <div id=\"collapse2\" class=\"accordion-collapse collapse show\"
                                     data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body category-scroll\">
                                        <ul class=\"category-list\">
                                            {% for atr in atribute %}
                                                <li>
                                                    <div class=\"form-check ps-0 custome-form-check\">
                                                        <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault1\" name=\"atribut[]\" value=\"{{ atr.id }}\"
                                                            {% if atr.id in filter.atr %}
                                                                checked
                                                            {% endif %}
                                                        >
                                                        <label class=\"form-check-label\" for=\"flexCheckDefault1\">{{ atr.name }}</label>
                                                    </div>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                {% endif %}
{#                            <div class=\"accordion-item category-price\">#}
{#                                <h2 class=\"accordion-header\" id=\"heading3\">#}
{#                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse3\">Cena</button>#}
{#                                </h2>#}
{#                                <div id=\"collapse3\" class=\"accordion-collapse collapse show\"#}
{#                                     aria-labelledby=\"heading3\" data-bs-parent=\"#accordionExample\">#}
{#                                    <div class=\"accordion-body\">#}
{#                                        <div class=\"range-slider category-list\">#}
{#                                            <input type=\"text\" class=\"js-range-slider\" value=\"\" name=\"cena\">#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}

                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"heading4\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapse4\">
                                        Tagovi
                                    </button>
                                </h2>
                                <div id=\"collapse4\" class=\"accordion-collapse collapse show\"
                                     aria-labelledby=\"heading4\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        <ul class=\"category-list\">
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault15\" name=\"tag[nov]\" value=\"1\"
                                                            {% if (filter.tag.nov is defined) and  (filter.tag.nov == 1) %}
                                                                checked
                                                            {% endif %}  >
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault15\">NOVO</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault16\" name=\"tag[popust]\" value=\"1\"
                                                            {% if (filter.tag.popust is defined) and  (filter.tag.popust == 1) %}
                                                                checked
                                                            {% endif %}>
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault16\">POPUST</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"form-check ps-0 custome-form-check\">
                                                    <input class=\"checkbox_animated check-it\" type=\"checkbox\" id=\"flexCheckDefault17\" name=\"tag[stanje]\" value=\"1\"
                                                            {% if (filter.tag.stanje is defined) and  (filter.tag.stanje == 1) %}
                                                                checked
                                                            {% endif %}>
                                                    <label class=\"form-check-label\" for=\"flexCheckDefault17\">DOSTUPNO</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row text-center mt-3\">
                                <button type=\"submit\" class=\"btn btn-solid-default btn fw-bold mb-0 ms-0\">Primenite</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class=\"col-lg-9 col-12 ratio_30\">
                    <div class=\"row g-4\">
                        <!-- filter button -->
                        <div class=\"filter-button\">
                            <button class=\"danger-button danger-center btn btn-sm filter-btn\"><i data-feather=\"align-left\"></i> Filteri</button>
                        </div>
                        <!-- filter button -->
{#                        <div class=\"col-md-12\">#}
{#                            <h3 class=\"mb-3\">{{ count }} Results Found</h3>#}
{#                        </div>#}
                        <div class=\"col-12\">
                            <h3>{{ count }} rezultata</h3>
                            <div class=\"filter-options\">
                                <div class=\"grid-options d-sm-inline-block d-none\">
                                    <ul class=\"d-flex\">
                                        <li class=\"three-grid d-md-inline-block d-none\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"{{ asset('assets/svg/grid-3.svg') }}\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                        <li class=\"grid-btn active d-lg-inline-block d-none\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"{{ asset('assets/svg/grid.svg') }}\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                        <li class=\"list-btn\">
                                            <a href=\"javascript:void(0)\">
                                                <img src=\"{{ asset('assets/svg/list.svg') }}\" class=\"img-fluid blur-up lazyload\"
                                                     alt=\"\">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div class=\"row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section\">
                                                {% if (paginationProducts is defined) and (paginationProducts | length > 0) %}
                                                    {% for product in paginationProducts %}
                                                        {% if app.user %}
                                                            {% if app.user.FirmaIliFizickoLice in [1, 4]  %}
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

                        <!-- Prodcut setion -->
                    </div>
{#                    <nav class=\"page-section\">#}
{#                        {{ knp_pagination_render(paginationProducts) }}#}
{#                    </nav>#}
                </div>
            </div>
        </div>
    </section>

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
<script>
    \$(function () {
        var \$range = \$(\".js-range-slider\"),
            \$inputFrom = \$(\".js-input-from\"),
            \$inputTo = \$(\".js-input-to\"),
            instance,
            min = 0,
            max = 500000,
            from = 0,
            to = 0;

        \$range.ionRangeSlider({
            type: \"double\",
            min: min,
            max: max,
            from: 0,
            to: 500000,
            prefix: \"RSD \",
            onStart: updateInputs,
            onChange: updateInputs,
            step: 100,
            prettify_enabled: true,
            prettify_separator: \".\",
            values_separator: \" - \",
            force_edges: true,
        });

        instance = \$range.data(\"ionRangeSlider\");

        function updateInputs(data) {
            from = \"RSD\" + data.from;
            to = \"RSD\" + data.to;

            \$inputFrom.prop(\"value\", from);
            \$inputTo.prop(\"value\", to);
        }

        \$inputFrom.on(\"input\", function () {
            var val = \$(this).prop(\"value\");

            // validate
            if (val < min) {
                val = min;
            } else if (val > to) {
                val = to;
            }

            instance.update({
                from: val,
            });
        });

        \$inputTo.on(\"input\", function () {
            var val = \$(this).prop(\"value\");

            // validate
            if (val < from) {
                val = from;
            } else if (val > max) {
                val = max;
            }

            instance.update({
                to: val,
            });
        });
    });
</script>
{% endblock footerjavascript %}
", "shop/index_kuke.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/index_kuke.html.twig");
    }
}
