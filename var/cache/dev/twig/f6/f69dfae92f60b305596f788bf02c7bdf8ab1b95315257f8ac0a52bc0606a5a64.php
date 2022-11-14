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

/* profil/index.html.twig */
class __TwigTemplate_9faf57ab8671c47559c2ba35389abef520d7de938ba4eae02f6241ba1e718ff4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "profil/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "profil/index.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "profil/index.html.twig", 19)->display($context);
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
                    <h3>Profil</h3>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "getFullName", [], "method", false, false, false, 87), "html", null, true);
        echo "</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        <h6 class=\"font-light\">Dobrodošli, <span>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "firstName", [], "any", false, false, false, 90), "html", null, true);
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
                                                        <h5 class=\"font-light\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "getFullName", [], "method", false, false, false, 128), "html", null, true);
        echo "</h5>
                                                        <h5 class=\"font-light\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "email", [], "any", false, false, false, 129), "html", null, true);
        echo "</h5>
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
        // line 142
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "address", [], "any", false, false, false, 142))) {
            // line 143
            echo "                                                            <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                Nisu uneti podaci*
                                                            </h6>
                                                            ";
        } else {
            // line 147
            echo "                                                            <h6 class=\"font-light\" >
                                                                ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 148, $this->source); })()), "address", [], "any", false, false, false, 148), "html", null, true);
            echo "
                                                            </h6>
                                                            ";
        }
        // line 151
        echo "                                                            ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "city", [], "any", false, false, false, 151)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 151)))) {
            // line 152
            echo "                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            ";
        } else {
            // line 156
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 157), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "city", [], "any", false, false, false, 157), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 160
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "mobPhone", [], "any", false, false, false, 160))) {
            // line 161
            echo "                                                                <h6 class=\"font-light\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                                                    Nisu uneti podaci*
                                                                </h6>
                                                            ";
        } else {
            // line 165
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "mobPhone", [], "any", false, false, false, 166), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 169
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "phone", [], "any", false, false, false, 169))) {
            // line 170
            echo "                                                                <h6 class=\"font-light\">
                                                                    Nisu uneti podaci
                                                                </h6>
                                                            ";
        } else {
            // line 174
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "phone", [], "any", false, false, false, 175), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 178
        echo "                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h5 class=\"font-light\">Adresa za dostavu</h5>
                                                            ";
        // line 181
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 181)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 181)))) {
            // line 182
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 186
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 187), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 187), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 190
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 190))) {
            // line 191
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 195
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 196), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 199
        echo "                                                            ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 199, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 199)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 199, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 199)))) {
            // line 200
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 204
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 205), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 205), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 208
        echo "                                                            ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 208))) {
            // line 209
            echo "                                                                <h6 class=\"font-light\" >
                                                                    Koristi primarnu adresu
                                                                </h6>
                                                            ";
        } else {
            // line 213
            echo "                                                                <h6 class=\"font-light\" >
                                                                    ";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 214, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 214), "html", null, true);
            echo "
                                                                </h6>
                                                            ";
        }
        // line 217
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
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["porudzbine"]) || array_key_exists("porudzbine", $context) ? $context["porudzbine"] : (function () { throw new RuntimeError('Variable "porudzbine" does not exist.', 239, $this->source); })()));
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
            // line 240
            echo "                                        <tr>
                                            <td>
                                                <p class=\"mt-0\">";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 242), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"mt-0\">#";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 245), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"fs-6 m-0\">";
            // line 248
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 248), "d.m.Y"), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 251)]), "html", null, true);
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
        // line 255
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
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edit");
        echo "\">izmenite</a>
                            </div>
                            <ul class=\"dash-profile\">
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Ime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 274, $this->source); })()), "firstName", [], "any", false, false, false, 274), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Prezime</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 283, $this->source); })()), "lastName", [], "any", false, false, false, 283), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Email</h6>
                                    </div>
                                    <div class=\"right\">
                                        <h6>";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 292, $this->source); })()), "email", [], "any", false, false, false, 292), "html", null, true);
        echo "</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 301
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 301, $this->source); })()), "mobPhone", [], "any", false, false, false, 301))) {
            // line 302
            echo "                                        <h6 data-toggle=\"tooltip\" data-placement=\"top\" title=\"Molimo Vas da upotpunite podatke da bi buduće porudžbine bile validne.\">
                                            Nisu uneti podaci*
                                        </h6>
                                        ";
        } else {
            // line 306
            echo "                                        <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 306, $this->source); })()), "mobPhone", [], "any", false, false, false, 306), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 308
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 316
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 316, $this->source); })()), "phone", [], "any", false, false, false, 316))) {
            // line 317
            echo "                                        <h6>
                                            Nisu uneti podaci
                                        </h6>
                                        ";
        } else {
            // line 321
            echo "                                        <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 321, $this->source); })()), "phone", [], "any", false, false, false, 321), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 323
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
        // line 337
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 337, $this->source); })()), "address", [], "any", false, false, false, 337))) {
            // line 338
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 342
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 342, $this->source); })()), "address", [], "any", false, false, false, 342), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 344
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 352
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 352, $this->source); })()), "city", [], "any", false, false, false, 352))) {
            // line 353
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 357
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 357, $this->source); })()), "city", [], "any", false, false, false, 357), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 359
        echo "                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 367
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 367, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 367))) {
            // line 368
            echo "                                            <h6>
                                                Nisu uneti podaci*
                                            </h6>
                                        ";
        } else {
            // line 372
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 372, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 372), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 374
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
        // line 387
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 387, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 387)) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 387, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 387)))) {
            // line 388
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 392
            echo "                                            <h6>
                                                ";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 393, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 393), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 393, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 393), "html", null, true);
            echo "
                                            </h6>
                                        ";
        }
        // line 396
        echo "                                    </div>
                                </li>
                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Adresa</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 403
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 403, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 403))) {
            // line 404
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 408
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 408, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 408), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 410
        echo "                                    </div>
                                </li>

                                <li>
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Grad</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 418
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 418, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 418))) {
            // line 419
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 423
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 423, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 423), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 425
        echo "                                    </div>
                                </li>

                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Poštanski broj</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 433
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 433, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 433))) {
            // line 434
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 438
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 438, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 438), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 440
        echo "                                    </div>
                                </li>
                                <li class=\"mb-0\">
                                    <div class=\"left\">
                                        <h6 class=\"font-light\">Mobilni telefon</h6>
                                    </div>
                                    <div class=\"right\">
                                        ";
        // line 447
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 447, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 447))) {
            // line 448
            echo "                                            <h6>
                                                Koristi primarnu adresu
                                            </h6>
                                        ";
        } else {
            // line 452
            echo "                                            <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 452, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 452), "html", null, true);
            echo "</h6>
                                        ";
        }
        // line 454
        echo "                                    </div>
                                </li>
                            </ul>
                            <div class=\"box-head mt-lg-5 mt-3\">
                                <h3>Lozinka</h3>
                                <a href=\"";
        // line 459
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edit_password");
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
        // line 482
        $this->loadTemplate("include/subscribe.html.twig", "profil/index.html.twig", 482)->display($context);
        // line 483
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
        // line 518
        $this->loadTemplate("include/footer.html.twig", "profil/index.html.twig", 518)->display($context);
        // line 519
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 523
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 527
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 531
        echo "    ";
        // line 532
        echo "    ";
        // line 533
        echo "    ";
        // line 534
        echo "    ";
        // line 535
        echo "    ";
        // line 536
        echo "    ";
        // line 537
        echo "    ";
        // line 538
        echo "    ";
        // line 539
        echo "    ";
        // line 540
        echo "    ";
        // line 541
        echo "    ";
        // line 542
        echo "    ";
        // line 543
        echo "    ";
        // line 544
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 547
        $this->loadTemplate("include/top.html.twig", "profil/index.html.twig", 547)->display($context);
        // line 548
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 553
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 554
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 554,  972 => 553,  959 => 548,  957 => 547,  952 => 544,  950 => 543,  948 => 542,  946 => 541,  944 => 540,  942 => 539,  940 => 538,  938 => 537,  936 => 536,  934 => 535,  932 => 534,  930 => 533,  928 => 532,  926 => 531,  921 => 527,  916 => 523,  911 => 519,  909 => 518,  872 => 483,  870 => 482,  844 => 459,  837 => 454,  831 => 452,  825 => 448,  823 => 447,  814 => 440,  808 => 438,  802 => 434,  800 => 433,  790 => 425,  784 => 423,  778 => 419,  776 => 418,  766 => 410,  760 => 408,  754 => 404,  752 => 403,  743 => 396,  735 => 393,  732 => 392,  726 => 388,  724 => 387,  709 => 374,  703 => 372,  697 => 368,  695 => 367,  685 => 359,  679 => 357,  673 => 353,  671 => 352,  661 => 344,  655 => 342,  649 => 338,  647 => 337,  631 => 323,  625 => 321,  619 => 317,  617 => 316,  607 => 308,  601 => 306,  595 => 302,  593 => 301,  581 => 292,  569 => 283,  557 => 274,  546 => 266,  533 => 255,  515 => 251,  509 => 248,  503 => 245,  497 => 242,  493 => 240,  476 => 239,  452 => 217,  446 => 214,  443 => 213,  437 => 209,  434 => 208,  426 => 205,  423 => 204,  417 => 200,  414 => 199,  408 => 196,  405 => 195,  399 => 191,  396 => 190,  388 => 187,  385 => 186,  379 => 182,  377 => 181,  372 => 178,  366 => 175,  363 => 174,  357 => 170,  354 => 169,  348 => 166,  345 => 165,  339 => 161,  336 => 160,  328 => 157,  325 => 156,  319 => 152,  316 => 151,  310 => 148,  307 => 147,  301 => 143,  299 => 142,  283 => 129,  279 => 128,  257 => 109,  250 => 105,  243 => 101,  229 => 90,  223 => 87,  216 => 82,  207 => 79,  204 => 78,  200 => 77,  160 => 40,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Profil - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Profil</h3>
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
                                        <h2>{{ user.getFullName() }}</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        <h6 class=\"font-light\">Dobrodošli, <span>{{ user.firstName }}</span></h6>
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
                                                        <h5 class=\"font-light\">{{ user.getFullName() }}</h5>
                                                        <h5 class=\"font-light\">{{ user.email }}</h5>
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
                                                <a href=\"{{ path('app_profil_order_view', {id: porudzbina.id}) }}\"><i class=\"far fa-eye\"></i></a>
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
                                <a href=\"{{ path('app_profil_edit') }}\">izmenite</a>
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
                                            Nisu uneti podaci
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
                                <a href=\"{{ path('app_profil_edit_password') }}\">izmenite</a>
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

{% endblock footerjavascript %}", "profil/index.html.twig", "/home/prikolic/public_html/prikolica/templates/profil/index.html.twig");
    }
}
