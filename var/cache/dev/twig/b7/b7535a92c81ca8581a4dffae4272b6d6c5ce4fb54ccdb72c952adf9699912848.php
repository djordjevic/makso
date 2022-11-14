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

/* shop/kasa.html.twig */
class __TwigTemplate_f28c943fdab657bbf7705df1dbc0db897ac6b88476c37b24e7c5e00f9dff622f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/kasa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/kasa.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/kasa.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kasa - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "shop/kasa.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/kasa.html.twig", 19)->display($context);
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Kasa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <h3 class=\"mb-3\">Adresa za dostavu</h3>
                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <label for=\"fname\" class=\"form-label\">Ime</label>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "imePrimaoca", [], "any", false, false, false, 62), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\" class=\"form-label\">Prezime</label>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "prezimePrimaoca", [], "any", false, false, false, 66), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\" class=\"form-label\">Email</label>
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "emailPrimaoca", [], "any", false, false, false, 70), 'widget');
        echo "
                            </div>

                            <div class=\"col-md-6\">
                                <label for=\"email\" class=\"form-label\">Mobilni telefon</label>
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "telefonPrimaoca", [], "any", false, false, false, 75), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">Adresa</label>
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "adresaPrimaoca", [], "any", false, false, false, 79), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">Grad</label>
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "gradPrimaoca", [], "any", false, false, false, 83), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">PTT broj</label>
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "pttPrimaoca", [], "any", false, false, false, 87), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"email\" class=\"form-label\">Napomena</label>
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "napomenaAdmin", [], "any", false, false, false, 91), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"placanja\" class=\"form-label\">Način plaćanja</label>
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 95), 'widget');
        echo "
                            </div>
                        </div>

                        <hr class=\"my-lg-5 my-4\">

                        <button class=\"btn btn-solid-default mt-4\" type=\"submit\">Završite kupovinu</button>
                    ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"your-cart-box\">
                        <h3 class=\"mb-3 d-flex text-capitalize\">Vaša korpa
                        </h3>
                        <ul class=\"list-group mb-3\">
                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["basket"]) || array_key_exists("basket", $context) ? $context["basket"] : (function () { throw new RuntimeError('Variable "basket" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 111
            echo "                            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                                <div>
                                    <h6 class=\"my-0\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 113), "title", [], "any", false, false, false, 113), "html", null, true);
            echo "</h6>
                                </div>
                                <span>
                                    ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "FirmaIliFizickoLice", [], "any", false, false, false, 117), [0 => 1, 1 => 4])) {
                    // line 118
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 118), "flDiscountVp", [], "any", false, false, false, 118) == 1)) {
                        // line 119
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 119), "discountVpPriceDin", [], "any", false, false, false, 119) > 0)) {
                            // line 120
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinVpP", [], "any", false, false, false, 120) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 120), "taxPercentage", [], "any", false, false, false, 120) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 122
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurVpP", [], "any", false, false, false, 122), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 124
                        echo "                                            ";
                    } else {
                        // line 125
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 125), "priceVpDin", [], "any", false, false, false, 125) > 0)) {
                            // line 126
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinVp", [], "any", false, false, false, 126) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 126), "taxPercentage", [], "any", false, false, false, 126) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 128
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurVp", [], "any", false, false, false, 128), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 130
                        echo "                                            ";
                    }
                    // line 131
                    echo "                                        ";
                } else {
                    // line 132
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 132), "flDiscount", [], "any", false, false, false, 132) == 1)) {
                        // line 133
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 133), "discountPriceDin", [], "any", false, false, false, 133) > 0)) {
                            // line 134
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinP", [], "any", false, false, false, 134) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 134), "taxPercentage", [], "any", false, false, false, 134) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 136
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurP", [], "any", false, false, false, 136), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 138
                        echo "                                            ";
                    } else {
                        // line 139
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 139), "priceDin", [], "any", false, false, false, 139) > 0)) {
                            // line 140
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 140) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 140), "taxPercentage", [], "any", false, false, false, 140) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 142
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 142), 2, ".", ","), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 144
                        echo "                                            ";
                    }
                    // line 145
                    echo "                                        ";
                }
                // line 146
                echo "                                    ";
            } else {
                // line 147
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 147), "flDiscount", [], "any", false, false, false, 147) == 1)) {
                    // line 148
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 148), "discountPriceDin", [], "any", false, false, false, 148) > 0)) {
                        // line 149
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDinP", [], "any", false, false, false, 149) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 149), "taxPercentage", [], "any", false, false, false, 149) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 151
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaEurP", [], "any", false, false, false, 151), 2, ".", ","), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 153
                    echo "                                        ";
                } else {
                    // line 154
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 154), "priceDin", [], "any", false, false, false, 154) > 0)) {
                        // line 155
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 155) * ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 155), "taxPercentage", [], "any", false, false, false, 155) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 157
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ukupnaCenaDin", [], "any", false, false, false, 157), 2, ".", ","), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 159
                    echo "                                        ";
                }
                // line 160
                echo "                                    ";
            }
            // line 161
            echo "                                </span>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
                            <li class=\"list-group-item d-flex lh-condensed justify-content-between\">
                                <span class=\"fw-bold\">Ukupno sa PDV</span>
                                <strong>";
        // line 167
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["ukupnoPdv"]) || array_key_exists("ukupnoPdv", $context) ? $context["ukupnoPdv"] : (function () { throw new RuntimeError('Variable "ukupnoPdv" does not exist.', 167, $this->source); })())), 2, ".", ","), "html", null, true);
        echo "</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
    <!-- Shop Section end -->

    <!-- footer start -->
    ";
        // line 179
        $this->loadTemplate("include/footer.html.twig", "shop/kasa.html.twig", 179)->display($context);
        // line 180
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 184
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 188
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 192
        echo "    ";
        // line 193
        echo "    ";
        // line 194
        echo "    ";
        // line 195
        echo "    ";
        // line 196
        echo "    ";
        // line 197
        echo "    ";
        // line 198
        echo "    ";
        // line 199
        echo "    ";
        // line 200
        echo "    ";
        // line 201
        echo "    ";
        // line 202
        echo "    ";
        // line 203
        echo "    ";
        // line 204
        echo "    ";
        // line 205
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 208
        $this->loadTemplate("include/top.html.twig", "shop/kasa.html.twig", 208)->display($context);
        // line 209
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 215
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/kasa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 215,  505 => 214,  492 => 209,  490 => 208,  485 => 205,  483 => 204,  481 => 203,  479 => 202,  477 => 201,  475 => 200,  473 => 199,  471 => 198,  469 => 197,  467 => 196,  465 => 195,  463 => 194,  461 => 193,  459 => 192,  454 => 188,  449 => 184,  444 => 180,  442 => 179,  427 => 167,  422 => 164,  414 => 161,  411 => 160,  408 => 159,  402 => 157,  396 => 155,  393 => 154,  390 => 153,  384 => 151,  378 => 149,  375 => 148,  372 => 147,  369 => 146,  366 => 145,  363 => 144,  357 => 142,  351 => 140,  348 => 139,  345 => 138,  339 => 136,  333 => 134,  330 => 133,  327 => 132,  324 => 131,  321 => 130,  315 => 128,  309 => 126,  306 => 125,  303 => 124,  297 => 122,  291 => 120,  288 => 119,  285 => 118,  282 => 117,  280 => 116,  274 => 113,  270 => 111,  266 => 110,  255 => 102,  245 => 95,  238 => 91,  231 => 87,  224 => 83,  217 => 79,  210 => 75,  202 => 70,  195 => 66,  188 => 62,  181 => 58,  161 => 41,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Kasa - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Kasa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-8\">
                    <h3 class=\"mb-3\">Adresa za dostavu</h3>
                    {{ form_start(form, {'attr': {'class' : 'needs-validation'}})}}
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <label for=\"fname\" class=\"form-label\">Ime</label>
                                {{ form_widget(form.imePrimaoca) }}
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\" class=\"form-label\">Prezime</label>
                                {{ form_widget(form.prezimePrimaoca) }}
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lname\" class=\"form-label\">Email</label>
                                {{ form_widget(form.emailPrimaoca) }}
                            </div>

                            <div class=\"col-md-6\">
                                <label for=\"email\" class=\"form-label\">Mobilni telefon</label>
                                {{ form_widget(form.telefonPrimaoca) }}
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">Adresa</label>
                                {{ form_widget(form.adresaPrimaoca) }}
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">Grad</label>
                                {{ form_widget(form.gradPrimaoca) }}
                            </div>
                            <div class=\"col-md-4\">
                                <label for=\"email\" class=\"form-label\">PTT broj</label>
                                {{ form_widget(form.pttPrimaoca) }}
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"email\" class=\"form-label\">Napomena</label>
                                {{ form_widget(form.napomenaAdmin) }}
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"placanja\" class=\"form-label\">Način plaćanja</label>
                                {{ form_widget(form.nacinPlacanja) }}
                            </div>
                        </div>

                        <hr class=\"my-lg-5 my-4\">

                        <button class=\"btn btn-solid-default mt-4\" type=\"submit\">Završite kupovinu</button>
                    {{ form_end(form) }}
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"your-cart-box\">
                        <h3 class=\"mb-3 d-flex text-capitalize\">Vaša korpa
                        </h3>
                        <ul class=\"list-group mb-3\">
                            {% for product in basket %}
                            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                                <div>
                                    <h6 class=\"my-0\">{{ product.product.title }}</h6>
                                </div>
                                <span>
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
                                </span>
                            </li>
                            {% endfor %}

                            <li class=\"list-group-item d-flex lh-condensed justify-content-between\">
                                <span class=\"fw-bold\">Ukupno sa PDV</span>
                                <strong>{{ (ukupnoPdv | round) | number_format(2, '.', ',') }}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
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
", "shop/kasa.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/kasa.html.twig");
    }
}
