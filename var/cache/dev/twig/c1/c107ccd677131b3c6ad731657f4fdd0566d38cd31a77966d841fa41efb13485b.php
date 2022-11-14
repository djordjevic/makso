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

/* admin_user/firma.html.twig */
class __TwigTemplate_5294db7f9cbea34e30dd742c9382bf131a2a522a1389519a6bb88eb222b71a55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/firma.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/firma.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_user/firma.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Korisnici - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_user/firma.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_user/firma.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 29, $this->source); })()), "nazivFirme", [], "any", false, false, false, 29), "html", null, true);
        echo "</h5>
                </div>
                <!-- New User start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Informacije</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-cene-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-adrese\"
                                                            type=\"button\">Adrese</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-orders-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-orders\"
                                                            type=\"button\">Lista porudžbina</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">PIB</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 61, $this->source); })()), "pib", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv firme</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 68, $this->source); })()), "nazivFirme", [], "any", false, false, false, 68), "html", null, true);
        echo "
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Email</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Ovlašćeno lice</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                ";
        // line 81
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 81, $this->source); })()), "firstName", [], "any", false, false, false, 81))) {
            // line 82
            echo "                                                    Nisu uneti podaci
                                                ";
        } else {
            // line 84
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 84, $this->source); })()), "firstName", [], "any", false, false, false, 84), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 84, $this->source); })()), "lastName", [], "any", false, false, false, 84), "html", null, true);
            echo "
                                                ";
        }
        // line 86
        echo "                                                    </div>
                                                </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">JMBG</label>
                                                        <div class=\"col-md-9 col-lg-10\">
                                                            ";
        // line 91
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 91, $this->source); })()), "jmbg", [], "any", false, false, false, 91))) {
            // line 92
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 94
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 94, $this->source); })()), "jmbg", [], "any", false, false, false, 94), "html", null, true);
            echo "
                                                            ";
        }
        // line 96
        echo "                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-adrese\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Sedište firme</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 108
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 108, $this->source); })()), "address", [], "any", false, false, false, 108))) {
            // line 109
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 111
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 111, $this->source); })()), "address", [], "any", false, false, false, 111), "html", null, true);
            echo "
                                                            ";
        }
        // line 113
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 118
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 118, $this->source); })()), "city", [], "any", false, false, false, 118))) {
            // line 119
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 121
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 121, $this->source); })()), "city", [], "any", false, false, false, 121), "html", null, true);
            echo "
                                                            ";
        }
        // line 123
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 129
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 129, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 129))) {
            // line 130
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 132
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 132, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 132), "html", null, true);
            echo "
                                                            ";
        }
        // line 134
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 139
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139))) {
            // line 140
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 142
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 142, $this->source); })()), "phone", [], "any", false, false, false, 142), "html", null, true);
            echo "
                                                            ";
        }
        // line 144
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 150
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 150, $this->source); })()), "mobPhone", [], "any", false, false, false, 150))) {
            // line 151
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 153
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 153, $this->source); })()), "mobPhone", [], "any", false, false, false, 153), "html", null, true);
            echo "
                                                            ";
        }
        // line 155
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa za dostavu</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Osoba za kontakt</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 164
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 164, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 164))) {
            // line 165
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 167
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 167, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 167), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 167, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 167), "html", null, true);
            echo "
                                                            ";
        }
        // line 169
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 174
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 174, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 174))) {
            // line 175
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 177
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 177, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 177), "html", null, true);
            echo "
                                                            ";
        }
        // line 179
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 184
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 184, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 184))) {
            // line 185
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 187
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 187, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 187), "html", null, true);
            echo "
                                                            ";
        }
        // line 189
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 195
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 195, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 195))) {
            // line 196
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 198
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 198, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 198), "html", null, true);
            echo "
                                                            ";
        }
        // line 200
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 205
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 205, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 205))) {
            // line 206
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 208
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 208, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 208), "html", null, true);
            echo "
                                                            ";
        }
        // line 210
        echo "                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-orders\" role=\"tabpanel\">
                                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Id</th>
                                                            <th>Datum</th>
                                                            <th>Lice za kontakt</th>
                                                            <th>Status</th>
                                                            <th>Vrednost sa PDV</th>
                                                            <th>Pregledajte</th>
                                                            ";
        // line 227
        echo "                                                            <th>Obrišite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 231, $this->source); })()));
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
            // line 232
            echo "                                                            <tr>
                                                                <td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 233), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 234), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 235
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 235), "d.m.Y"), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "imePrimaoca", [], "any", false, false, false, 236), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "prezimePrimaoca", [], "any", false, false, false, 236), "html", null, true);
            echo "</td>
                                                                ";
            // line 237
            if ((twig_get_attribute($this->env, $this->source, $context["porudzbina"], "orderStatus", [], "any", false, false, false, 237) == 1)) {
                // line 238
                echo "                                                                    <td style=\"color:Orange;\">
                                                                        <span>Kreirana</span>
                                                                    </td>
                                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 241
$context["porudzbina"], "orderStatus", [], "any", false, false, false, 241) == 2)) {
                // line 242
                echo "                                                                    <td style=\"color:MediumSeaGreen;\">
                                                                        <span>Poslata</span>
                                                                    </td>
                                                                ";
            } else {
                // line 246
                echo "                                                                    <td style=\"color:Tomato;\">
                                                                        <span>Otkazana</span>
                                                                    </td>
                                                                ";
            }
            // line 250
            echo "                                                                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["porudzbina"], "totalPricePdv", [], "any", false, false, false, 250)), 2, ".", ","), "html", null, true);
            echo "</td>
                                                                <td class=\"text-center\"><a href=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 251)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                                ";
            // line 253
            echo "                                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 253), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                                            </tr>
                                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 255), "html", null, true);
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
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_order", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 265)]), "html", null, true);
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
        // line 272
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->
                <!-- footer start-->
                ";
        // line 285
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_user/firma.html.twig", 285)->display($context);
        // line 286
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 295
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_user/firma.html.twig", 295)->display($context);
        // line 296
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 299
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 300
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
        return "admin_user/firma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 300,  625 => 299,  614 => 296,  612 => 295,  601 => 286,  599 => 285,  584 => 272,  563 => 265,  550 => 255,  544 => 253,  540 => 251,  535 => 250,  529 => 246,  523 => 242,  521 => 241,  516 => 238,  514 => 237,  508 => 236,  504 => 235,  500 => 234,  496 => 233,  493 => 232,  476 => 231,  470 => 227,  452 => 210,  446 => 208,  442 => 206,  440 => 205,  433 => 200,  427 => 198,  423 => 196,  421 => 195,  413 => 189,  407 => 187,  403 => 185,  401 => 184,  394 => 179,  388 => 177,  384 => 175,  382 => 174,  375 => 169,  367 => 167,  363 => 165,  361 => 164,  350 => 155,  344 => 153,  340 => 151,  338 => 150,  330 => 144,  324 => 142,  320 => 140,  318 => 139,  311 => 134,  305 => 132,  301 => 130,  299 => 129,  291 => 123,  285 => 121,  281 => 119,  279 => 118,  272 => 113,  266 => 111,  262 => 109,  260 => 108,  246 => 96,  240 => 94,  236 => 92,  234 => 91,  227 => 86,  219 => 84,  215 => 82,  213 => 81,  204 => 75,  194 => 68,  184 => 61,  149 => 29,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Korisnici - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h5>{{ firma.nazivFirme }}</h5>
                </div>
                <!-- New User start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Informacije</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-cene-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-adrese\"
                                                            type=\"button\">Adrese</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-orders-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-orders\"
                                                            type=\"button\">Lista porudžbina</button>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">PIB</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ firma.pib }}
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv firme</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ firma.nazivFirme }}
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Email</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ firma.email }}
                                                    </div>
                                                </div>
                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Ovlašćeno lice</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                {% if firma.firstName is empty %}
                                                    Nisu uneti podaci
                                                {% else %}
                                                    {{ firma.firstName }} {{ firma.lastName }}
                                                {% endif %}
                                                    </div>
                                                </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">JMBG</label>
                                                        <div class=\"col-md-9 col-lg-10\">
                                                            {% if firma.jmbg is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.jmbg }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-adrese\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Sedište firme</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.address is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.address }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.city is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.city }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.postanskiBroj is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.postanskiBroj }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.phone is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.phone }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.mobPhone is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ firma.mobPhone }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa za dostavu</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Osoba za kontakt</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.firstNamePrimaoc is empty %}
                                                                Isporuka na adresu firme
                                                            {% else %}
                                                                {{ firma.firstNamePrimaoc }} {{ firma.lastNamePrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.addressPrimaoc is empty %}
                                                                Isporuka na adresu firme
                                                            {% else %}
                                                                {{ firma.addressPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.cityPrimaoc is empty %}
                                                                Isporuka na adresu firme
                                                            {% else %}
                                                                {{ firma.cityPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.postanskiBrPrimaoc is empty %}
                                                                Isporuka na adresu firme
                                                            {% else %}
                                                                {{ firma.postanskiBrPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if firma.mobPhonePrimaoc is empty %}
                                                                Isporuka na adresu firme
                                                            {% else %}
                                                                {{ firma.mobPhonePrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-orders\" role=\"tabpanel\">
                                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Id</th>
                                                            <th>Datum</th>
                                                            <th>Lice za kontakt</th>
                                                            <th>Status</th>
                                                            <th>Vrednost sa PDV</th>
                                                            <th>Pregledajte</th>
                                                            {#                                            <th>PDF</th>#}
                                                            <th>Obrišite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for porudzbina in orders %}
                                                            <tr>
                                                                <td>{{ loop.index }} </td>
                                                                <td>{{ porudzbina.id }}</td>
                                                                <td>{{ porudzbina.dateAdded | date(\"d.m.Y\") }}</td>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->
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
", "admin_user/firma.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_user/firma.html.twig");
    }
}
