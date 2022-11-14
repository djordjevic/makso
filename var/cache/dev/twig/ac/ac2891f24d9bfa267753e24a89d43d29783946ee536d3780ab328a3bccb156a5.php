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

/* firma/index.html.twig */
class __TwigTemplate_7a6740643b42648460b398e0f67722c1b39c8fbe2bdc283ecb451a61b0280125 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "firma/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "firma/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "firma/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Firma - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "firma/index.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "firma/index.html.twig", 19)->display($context);
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
                    <h3>Firma</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Info</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <ul class=\"nav nav-tabs custome-nav-tabs flex-column category-option\" id=\"myTab\">
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light active\" id=\"tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#dash\" type=\"button\"><i
                                        class=\"fas fa-angle-right\"></i>Profil</button>
                        </li>
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light\" id=\"1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#order\"
                                    type=\"button\"><i class=\"fas fa-angle-right\"></i>Lista porudžbina</button>
                        </li>
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light\" id=\"5-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#profile\" type=\"button\"><i
                                        class=\"fas fa-angle-right\"></i>Podaci</button>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"filter-button dash-filter dashboard\">
                        <button class=\"btn btn-solid-default btn-sm fw-bold filter-btn\">Prikaži meni</button>
                    </div>
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"dash\">
                            <div class=\"dashboard-right\">
                                <div class=\"dashboard\">
                                    <div class=\"page-title title title1 title-effect\">
                                        <h2>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "nazivFirme", [], "any", false, false, false, 87), "html", null, true);
        echo "</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        <h6 class=\"font-light\">Dobrodošli, <span>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "nazivFirme", [], "any", false, false, false, 90), "html", null, true);
        echo "</span></h6>
                                        <p class=\"font-light\">Na Vašoj profilnoj stranici možete da vidite poružbine koje ste u predhodnom periodu kreirali.
                                            Takođe, možete upravljati Vašim profilnim informacijama i adresama. </p>
                                        <p class=\"font-light\"><strong>Važno je</strong> da ukoliko se prvi put prijavljujete na profil, popunite sve neophodne informacije na Vašem profilu.</p>
                                    </div>

                                    <div class=\"order-box-contain my-4\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-4 col-sm-6\">
                                                <div class=\"order-box\">
                                                    <div class=\"order-box-image\">
                                                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/svg/box.png"), "html", null, true);
        echo "\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </div>
                                                    <div class=\"order-box-contain\">
                                                        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/svg/box1.png"), "html", null, true);
        echo "\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                        <div>
                                                            <h5 class=\"font-light\">Ukupno porudžbina</h5>
                                                            <h3>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"box-account box-info\">
                                        <div class=\"box-head\">
                                            <h3>Opšte informacije</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <div class=\"box\">
                                                    <div class=\"box-title\">
                                                        <h4>Kontakt</h4>
                                                    </div>
                                                    <div class=\"box-content\">
                                                        <h6 class=\"font-light\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "nazivFirme", [], "any", false, false, false, 128), "html", null, true);
        echo "</h6>
                                                        <h6 class=\"font-light\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "pib", [], "any", false, false, false, 129), "html", null, true);
        echo "</h6>
                                                            ";
        // line 130
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "firstName", [], "any", false, false, false, 130)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "lastName", [], "any", false, false, false, 130)))) {
            // line 131
            echo "                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            ";
        } else {
            // line 135
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "getFullName", [], "method", false, false, false, 136), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 139
        echo "                                                        <h6 class=\"font-light\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "email", [], "any", false, false, false, 139), "html", null, true);
        echo "</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"box address-box\">
                                                <div class=\"box-title\">
                                                    <h4>Adrese</h4></div>
                                                <div class=\"box-content\">
                                                    <div class=\"row g-4\">
                                                        <div class=\"col-sm-6\">
                                                            <h5 class=\"font-light\">Primarna adresa</h5>
                                                             ";
        // line 152
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "address", [], "any", false, false, false, 152))) {
            // line 153
            echo "                                                            <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                Nisu uneti podaci*
                                                            </h6>
                                                            ";
        } else {
            // line 157
            echo "                                                            <h6 class=\"font-light\" >
                                                                ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "address", [], "any", false, false, false, 158), "html", null, true);
            echo "
                                                            </h6>
                                                            ";
        }
        // line 161
        echo "                                                            ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "city", [], "any", false, false, false, 161)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 161)))) {
            // line 162
            echo "                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            ";
        } else {
            // line 166
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 167), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "city", [], "any", false, false, false, 167), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 170
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "mobPhone", [], "any", false, false, false, 170))) {
            // line 171
            echo "                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            ";
        } else {
            // line 175
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "mobPhone", [], "any", false, false, false, 176), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 179
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "phone", [], "any", false, false, false, 179))) {
            // line 180
            echo "                                                                <h6 class=\"font-light\">
                                                                    Nisu uneti podaci
                                                                </h6>
                                                            ";
        } else {
            // line 184
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "phone", [], "any", false, false, false, 185), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 188
        echo "                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h5 class=\"font-light\">Adresa za dostavu</h5>
                                                            ";
        // line 191
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 191)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 191)))) {
            // line 192
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 196
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 197), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 197), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 200
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 200))) {
            // line 201
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 205
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 206, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 206), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 209
        echo "                                                            ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 209, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 209)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 209, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 209)))) {
            // line 210
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 214
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 215), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 215), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 218
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 218, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 218))) {
            // line 219
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 223
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 224), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 227
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade table-dashboard dashboard wish-list-section\" id=\"order\">
                            <div class=\"table-responsive\">
                                <table class=\"table cart-table\">
                                    <thead>
                                    <tr class=\"table-head\">
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Broj porudžbine</th>
                                        <th scope=\"col\">Datum i vreme</th>
                                        <th scope=\"col\">Pregledajte</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["porudzbine"]) || array_key_exists("porudzbine", $context) ? $context["porudzbine"] : (function () { throw new RuntimeError('Variable "porudzbine" does not exist.', 249, $this->source); })()));
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
            // line 250
            echo "                                        <tr>
                                            <td>
                                                <p class=\"mt-0\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 252), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"mt-0\">#";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 255), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"fs-6 m-0\">";
            // line 258
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 258), "d.m.Y"), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 261)]), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                                            </td>
                                        </tr>
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
        // line 265
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=\"tab-pane fade dashboard-profile dashboard\" id=\"profile\">
                            <div class=\"welcome-msg\">
                                <p class=\"font-light\">Polja obeležena zvezdicom (*) <strong>moraju</strong> se popuniti, jer u suprotnom svaka buduća porudžbina <strong>neće biti validna</strong>.</p>
                            </div>
                            <div class=\"box-head\">
                                <h3>Profil</h3>
                                <a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma_edit");
        echo "\">izmenite</a>
                            </div>
                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Ime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 284, $this->source); })()), "firstName", [], "any", false, false, false, 284), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Prezime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 293, $this->source); })()), "lastName", [], "any", false, false, false, 293), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Email</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 302, $this->source); })()), "email", [], "any", false, false, false, 302), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 311
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 311, $this->source); })()), "mobPhone", [], "any", false, false, false, 311))) {
            // line 312
            echo "                                        <h6 data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                            Nisu uneti podaci*
                                        </h6>
                                        ";
        } else {
            // line 316
            echo "                                        <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 316, $this->source); })()), "mobPhone", [], "any", false, false, false, 316), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 318
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 326
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 326, $this->source); })()), "phone", [], "any", false, false, false, 326))) {
            // line 327
            echo "                                        <h6>
                                            Nisu uneti podaci*
                                        </h6>
                                        ";
        } else {
            // line 331
            echo "                                        <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 331, $this->source); })()), "phone", [], "any", false, false, false, 331), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 333
        echo "                                    </div>
                                </li>
                            </ul>

                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Primarna adresa</h3>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Adresa</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 347
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 347, $this->source); })()), "address", [], "any", false, false, false, 347))) {
            // line 348
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 352
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 352, $this->source); })()), "address", [], "any", false, false, false, 352), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 354
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 362
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 362, $this->source); })()), "city", [], "any", false, false, false, 362))) {
            // line 363
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 367
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 367, $this->source); })()), "city", [], "any", false, false, false, 367), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 369
        echo "                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 377
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 377, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 377))) {
            // line 378
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 382
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 382, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 382), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 384
        echo "                                    </div>
                                </li>
                            </ul>
                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Adresa za dostavu</h3>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Lice za kontakt</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 397
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 397, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 397)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 397, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 397)))) {
            // line 398
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 402
            echo "                                            <h6>
                                                ";
            // line 403
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 403, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 403), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 403, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 403), "html", null, true);
            echo "
                                            </h6>
                                        ";
        }
        // line 406
        echo "                                    </div>
                                </li>
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Adresa</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 413
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 413, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 413))) {
            // line 414
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 418
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 418, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 418), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 420
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 428
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 428, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 428))) {
            // line 429
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 433
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 433, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 433), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 435
        echo "                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 443
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 443, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 443))) {
            // line 444
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 448
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 448, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 448), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 450
        echo "                                    </div>
                                </li>
                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 457
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 457, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 457))) {
            // line 458
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 462
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 462, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 462), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 464
        echo "                                    </div>
                                </li>
                            </ul>
                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Lozinka</h3>
                                <a href=\"";
        // line 469
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma_edit_password");
        echo "\">izmenite</a>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Lozinka</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>●●●●●●●●●</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    ";
        // line 492
        $this->loadTemplate("include/subscribe.html.twig", "firma/index.html.twig", 492)->display($context);
        // line 493
        echo "    <!-- Subscribe Section End -->
    <!-- Reset Password Modal Start -->
    <div class=\"modal fade reset-email-modal\" id=\"resetEmail\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Comfirm Email</h3>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body pt-3\">
                    <form>
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label font-light\">Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"comfirmEmail\" class=\"form-label font-light\">Comfirm Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"comfirmEmail\">
                        </div>
                        <div>
                            <label for=\"exampleInputPassword1\" class=\"form-label font-light\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer pt-0\">
                    <button class=\"btn bg-secondary rounded-1 modal-close-button\" data-bs-dismiss=\"modal\">Close</button>
                    <button class=\"btn btn-solid-default rounded-1\" data-bs-dismiss=\"modal\">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password Modal End -->

    <!-- footer start -->
    ";
        // line 528
        $this->loadTemplate("include/footer.html.twig", "firma/index.html.twig", 528)->display($context);
        // line 529
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 533
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 537
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 541
        echo "    ";
        // line 542
        echo "    ";
        // line 543
        echo "    ";
        // line 544
        echo "    ";
        // line 545
        echo "    ";
        // line 546
        echo "    ";
        // line 547
        echo "    ";
        // line 548
        echo "    ";
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
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 557
        $this->loadTemplate("include/top.html.twig", "firma/index.html.twig", 557)->display($context);
        // line 558
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 563
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 564
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "firma/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1004 => 564,  994 => 563,  981 => 558,  979 => 557,  974 => 554,  972 => 553,  970 => 552,  968 => 551,  966 => 550,  964 => 549,  962 => 548,  960 => 547,  958 => 546,  956 => 545,  954 => 544,  952 => 543,  950 => 542,  948 => 541,  943 => 537,  938 => 533,  933 => 529,  931 => 528,  894 => 493,  892 => 492,  866 => 469,  859 => 464,  853 => 462,  847 => 458,  845 => 457,  836 => 450,  830 => 448,  824 => 444,  822 => 443,  812 => 435,  806 => 433,  800 => 429,  798 => 428,  788 => 420,  782 => 418,  776 => 414,  774 => 413,  765 => 406,  757 => 403,  754 => 402,  748 => 398,  746 => 397,  731 => 384,  725 => 382,  719 => 378,  717 => 377,  707 => 369,  701 => 367,  695 => 363,  693 => 362,  683 => 354,  677 => 352,  671 => 348,  669 => 347,  653 => 333,  647 => 331,  641 => 327,  639 => 326,  629 => 318,  623 => 316,  617 => 312,  615 => 311,  603 => 302,  591 => 293,  579 => 284,  568 => 276,  555 => 265,  537 => 261,  531 => 258,  525 => 255,  519 => 252,  515 => 250,  498 => 249,  474 => 227,  468 => 224,  465 => 223,  459 => 219,  456 => 218,  448 => 215,  445 => 214,  439 => 210,  436 => 209,  430 => 206,  427 => 205,  421 => 201,  418 => 200,  410 => 197,  407 => 196,  401 => 192,  399 => 191,  394 => 188,  388 => 185,  385 => 184,  379 => 180,  376 => 179,  370 => 176,  367 => 175,  361 => 171,  358 => 170,  350 => 167,  347 => 166,  341 => 162,  338 => 161,  332 => 158,  329 => 157,  323 => 153,  321 => 152,  304 => 139,  298 => 136,  295 => 135,  289 => 131,  287 => 130,  283 => 129,  279 => 128,  257 => 109,  250 => 105,  243 => 101,  229 => 90,  223 => 87,  216 => 82,  207 => 79,  204 => 78,  200 => 77,  160 => 40,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Firma - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Firma</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Info</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <ul class=\"nav nav-tabs custome-nav-tabs flex-column category-option\" id=\"myTab\">
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light active\" id=\"tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#dash\" type=\"button\"><i
                                        class=\"fas fa-angle-right\"></i>Profil</button>
                        </li>
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light\" id=\"1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#order\"
                                    type=\"button\"><i class=\"fas fa-angle-right\"></i>Lista porudžbina</button>
                        </li>
                        <li class=\"nav-item mb-2\">
                            <button class=\"nav-link font-light\" id=\"5-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#profile\" type=\"button\"><i
                                        class=\"fas fa-angle-right\"></i>Podaci</button>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"filter-button dash-filter dashboard\">
                        <button class=\"btn btn-solid-default btn-sm fw-bold filter-btn\">Prikaži meni</button>
                    </div>
                    {% for message in app.flashes('notice') %}
                        <div class=\"alert alert-success\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"dash\">
                            <div class=\"dashboard-right\">
                                <div class=\"dashboard\">
                                    <div class=\"page-title title title1 title-effect\">
                                        <h2>{{ user.nazivFirme }}</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        <h6 class=\"font-light\">Dobrodošli, <span>{{ user.nazivFirme }}</span></h6>
                                        <p class=\"font-light\">Na Vašoj profilnoj stranici možete da vidite poružbine koje ste u predhodnom periodu kreirali.
                                            Takođe, možete upravljati Vašim profilnim informacijama i adresama. </p>
                                        <p class=\"font-light\"><strong>Važno je</strong> da ukoliko se prvi put prijavljujete na profil, popunite sve neophodne informacije na Vašem profilu.</p>
                                    </div>

                                    <div class=\"order-box-contain my-4\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-4 col-sm-6\">
                                                <div class=\"order-box\">
                                                    <div class=\"order-box-image\">
                                                        <img src=\"{{ asset('assets/images/svg/box.png') }}\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </div>
                                                    <div class=\"order-box-contain\">
                                                        <img src=\"{{ asset('assets/images/svg/box1.png') }}\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                        <div>
                                                            <h5 class=\"font-light\">Ukupno porudžbina</h5>
                                                            <h3>{{ count }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"box-account box-info\">
                                        <div class=\"box-head\">
                                            <h3>Opšte informacije</h3>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <div class=\"box\">
                                                    <div class=\"box-title\">
                                                        <h4>Kontakt</h4>
                                                    </div>
                                                    <div class=\"box-content\">
                                                        <h6 class=\"font-light\">{{ user.nazivFirme }}</h6>
                                                        <h6 class=\"font-light\">{{ user.pib }}</h6>
                                                            {% if (user.firstName is empty) or (user.lastName is empty) %}
                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.getFullName() }}
                                                                </h6>
                                                            {% endif %}
                                                        <h6 class=\"font-light\">{{ user.email }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"box address-box\">
                                                <div class=\"box-title\">
                                                    <h4>Adrese</h4></div>
                                                <div class=\"box-content\">
                                                    <div class=\"row g-4\">
                                                        <div class=\"col-sm-6\">
                                                            <h5 class=\"font-light\">Primarna adresa</h5>
                                                             {% if user.address is empty %}
                                                            <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                Nisu uneti podaci*
                                                            </h6>
                                                            {% else %}
                                                            <h6 class=\"font-light\" >
                                                                {{ user.address }}
                                                            </h6>
                                                            {% endif %}
                                                            {% if (user.city is empty) or (user.postanskiBroj is empty) %}
                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.postanskiBroj }} {{ user.city }}
                                                                </h6>
                                                            {% endif %}
                                                            {% if user.mobPhone is empty %}
                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.mobPhone }}
                                                                </h6>
                                                            {% endif %}
                                                            {% if user.phone is empty %}
                                                                <h6 class=\"font-light\">
                                                                    Nisu uneti podaci
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.phone }}
                                                                </h6>
                                                            {% endif %}
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h5 class=\"font-light\">Adresa za dostavu</h5>
                                                            {% if (user.firstNamePrimaoc is empty) or (user.lastNamePrimaoc is empty) %}
                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.firstNamePrimaoc }} {{ user.lastNamePrimaoc }}
                                                                </h6>
                                                            {% endif %}
                                                            {% if user.addressPrimaoc is empty %}
                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.addressPrimaoc }}
                                                                </h6>
                                                            {% endif %}
                                                            {% if (user.cityPrimaoc is empty) or (user.postanskiBrPrimaoc is empty) %}
                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.postanskiBrPrimaoc }} {{ user.cityPrimaoc }}
                                                                </h6>
                                                            {% endif %}
                                                            {% if user.mobPhonePrimaoc is empty %}
                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            {% else %}
                                                                <h6 class=\"font-light\" >
                                                                    {{ user.mobPhonePrimaoc }}
                                                                </h6>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade table-dashboard dashboard wish-list-section\" id=\"order\">
                            <div class=\"table-responsive\">
                                <table class=\"table cart-table\">
                                    <thead>
                                    <tr class=\"table-head\">
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Broj porudžbine</th>
                                        <th scope=\"col\">Datum i vreme</th>
                                        <th scope=\"col\">Pregledajte</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for porudzbina in porudzbine %}
                                        <tr>
                                            <td>
                                                <p class=\"mt-0\">{{ loop.index }}</p>
                                            </td>
                                            <td>
                                                <p class=\"mt-0\">#{{ porudzbina.id }}</p>
                                            </td>
                                            <td>
                                                <p class=\"fs-6 m-0\">{{ porudzbina.dateAdded | date(\"d.m.Y\") }}</p>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('app_firma_order_view', {id: porudzbina.id}) }}\"><i class=\"far fa-eye\"></i></a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=\"tab-pane fade dashboard-profile dashboard\" id=\"profile\">
                            <div class=\"welcome-msg\">
                                <p class=\"font-light\">Polja obeležena zvezdicom (*) <strong>moraju</strong> se popuniti, jer u suprotnom svaka buduća porudžbina <strong>neće biti validna</strong>.</p>
                            </div>
                            <div class=\"box-head\">
                                <h3>Profil</h3>
                                <a href=\"{{ path('app_firma_edit') }}\">izmenite</a>
                            </div>
                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Ime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>{{ user.firstName }}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Prezime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>{{ user.lastName }}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Email</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>{{ user.email }}</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.mobPhone is empty %}
                                        <h6 data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                            Nisu uneti podaci*
                                        </h6>
                                        {% else %}
                                        <h6>{{ user.mobPhone }}</h6>
                                        {% endif %}
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.phone is empty %}
                                        <h6>
                                            Nisu uneti podaci*
                                        </h6>
                                        {% else %}
                                        <h6>{{ user.phone }}</h6>
                                        {% endif %}
                                    </div>
                                </li>
                            </ul>

                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Primarna adresa</h3>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Adresa</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.address is empty %}
                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.address }}</h6>
                                        {% endif %}
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.city is empty %}
                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.city }}</h6>
                                        {% endif %}
                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.postanskiBroj is empty %}
                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.postanskiBroj }}</h6>
                                        {% endif %}
                                    </div>
                                </li>
                            </ul>
                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Adresa za dostavu</h3>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Lice za kontakt</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if (user.firstNamePrimaoc is empty) or (user.lastNamePrimaoc is empty) %}
                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        {% else %}
                                            <h6>
                                                {{ user.firstNamePrimaoc }} {{ user.lastNamePrimaoc }}
                                            </h6>
                                        {% endif %}
                                    </div>
                                </li>
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Adresa</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.addressPrimaoc is empty %}
                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.addressPrimaoc }}</h6>
                                        {% endif %}
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.cityPrimaoc is empty %}
                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.cityPrimaoc }}</h6>
                                        {% endif %}
                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.postanskiBrPrimaoc is empty %}
                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.postanskiBrPrimaoc }}</h6>
                                        {% endif %}
                                    </div>
                                </li>
                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        {% if user.mobPhonePrimaoc is empty %}
                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        {% else %}
                                            <h6>{{ user.mobPhonePrimaoc }}</h6>
                                        {% endif %}
                                    </div>
                                </li>
                            </ul>
                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Lozinka</h3>
                                <a href=\"{{ path('app_firma_edit_password') }}\">izmenite</a>
                            </div>

                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Lozinka</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>●●●●●●●●●</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    {% include 'include/subscribe.html.twig' %}
    <!-- Subscribe Section End -->
    <!-- Reset Password Modal Start -->
    <div class=\"modal fade reset-email-modal\" id=\"resetEmail\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Comfirm Email</h3>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body pt-3\">
                    <form>
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label font-light\">Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\">
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"comfirmEmail\" class=\"form-label font-light\">Comfirm Email address</label>
                            <input type=\"email\" class=\"form-control\" id=\"comfirmEmail\">
                        </div>
                        <div>
                            <label for=\"exampleInputPassword1\" class=\"form-label font-light\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer pt-0\">
                    <button class=\"btn bg-secondary rounded-1 modal-close-button\" data-bs-dismiss=\"modal\">Close</button>
                    <button class=\"btn btn-solid-default rounded-1\" data-bs-dismiss=\"modal\">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password Modal End -->

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

{% endblock footerjavascript %}", "firma/index.html.twig", "/home/prikolic/public_html/prikolica/templates/firma/index.html.twig");
    }
}
