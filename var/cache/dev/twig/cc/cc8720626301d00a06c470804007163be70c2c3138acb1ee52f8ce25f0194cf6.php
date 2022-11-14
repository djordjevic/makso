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

/* admin_user/gazdinstvo.html.twig */
class __TwigTemplate_572885ef55e25da0db6a67b24480008a774c307d7a1833139e8dbe8abbd8c621 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/gazdinstvo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/gazdinstvo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_user/gazdinstvo.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Gazdinstvo - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_user/gazdinstvo.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_user/gazdinstvo.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
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
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Broj gazdinstva</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 61, $this->source); })()), "gazdinstvo", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Email</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "html", null, true);
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Ovlašćeno lice</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                ";
        // line 73
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 73, $this->source); })()), "firstName", [], "any", false, false, false, 73))) {
            // line 74
            echo "                                                    Nisu uneti podaci
                                                ";
        } else {
            // line 76
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 76, $this->source); })()), "firstName", [], "any", false, false, false, 76), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 76, $this->source); })()), "lastName", [], "any", false, false, false, 76), "html", null, true);
            echo "
                                                ";
        }
        // line 78
        echo "                                                    </div>
                                                </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">JMBG</label>
                                                        <div class=\"col-md-9 col-lg-10\">
                                                            ";
        // line 83
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 83, $this->source); })()), "jmbg", [], "any", false, false, false, 83))) {
            // line 84
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 86
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 86, $this->source); })()), "jmbg", [], "any", false, false, false, 86), "html", null, true);
            echo "
                                                            ";
        }
        // line 88
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
        // line 100
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 100, $this->source); })()), "address", [], "any", false, false, false, 100))) {
            // line 101
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 103
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, false, 103), "html", null, true);
            echo "
                                                            ";
        }
        // line 105
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 110
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 110, $this->source); })()), "city", [], "any", false, false, false, 110))) {
            // line 111
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 113
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 113, $this->source); })()), "city", [], "any", false, false, false, 113), "html", null, true);
            echo "
                                                            ";
        }
        // line 115
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 121
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 121, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 121))) {
            // line 122
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 124
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 124, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 124), "html", null, true);
            echo "
                                                            ";
        }
        // line 126
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 131
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 131, $this->source); })()), "phone", [], "any", false, false, false, 131))) {
            // line 132
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 134
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 134, $this->source); })()), "phone", [], "any", false, false, false, 134), "html", null, true);
            echo "
                                                            ";
        }
        // line 136
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 142
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 142, $this->source); })()), "mobPhone", [], "any", false, false, false, 142))) {
            // line 143
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 145
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 145, $this->source); })()), "mobPhone", [], "any", false, false, false, 145), "html", null, true);
            echo "
                                                            ";
        }
        // line 147
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa za dostavu</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Osoba za kontakt</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 156
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 156, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 156))) {
            // line 157
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 159
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 159, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 159, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 159), "html", null, true);
            echo "
                                                            ";
        }
        // line 161
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 166
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 166, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 166))) {
            // line 167
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 169
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 169, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 169), "html", null, true);
            echo "
                                                            ";
        }
        // line 171
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 176
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 176, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 176))) {
            // line 177
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 179
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 179, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 179), "html", null, true);
            echo "
                                                            ";
        }
        // line 181
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 187
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 187, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 187))) {
            // line 188
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 190
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 190, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 190), "html", null, true);
            echo "
                                                            ";
        }
        // line 192
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 197
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 197, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 197))) {
            // line 198
            echo "                                                                Isporuka na adresu firme
                                                            ";
        } else {
            // line 200
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firma"]) || array_key_exists("firma", $context) ? $context["firma"] : (function () { throw new RuntimeError('Variable "firma" does not exist.', 200, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 200), "html", null, true);
            echo "
                                                            ";
        }
        // line 202
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
        // line 219
        echo "                                                            <th>Obrišite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 223, $this->source); })()));
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
            // line 224
            echo "                                                            <tr>
                                                                <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 225), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 227), "d.m.Y"), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "imePrimaoca", [], "any", false, false, false, 228), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "prezimePrimaoca", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
                                                                ";
            // line 229
            if ((twig_get_attribute($this->env, $this->source, $context["porudzbina"], "orderStatus", [], "any", false, false, false, 229) == 1)) {
                // line 230
                echo "                                                                    <td style=\"color:Orange;\">
                                                                        <span>Kreirana</span>
                                                                    </td>
                                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 233
$context["porudzbina"], "orderStatus", [], "any", false, false, false, 233) == 2)) {
                // line 234
                echo "                                                                    <td style=\"color:MediumSeaGreen;\">
                                                                        <span>Poslata</span>
                                                                    </td>
                                                                ";
            } else {
                // line 238
                echo "                                                                    <td style=\"color:Tomato;\">
                                                                        <span>Otkazana</span>
                                                                    </td>
                                                                ";
            }
            // line 242
            echo "                                                                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["porudzbina"], "totalPricePdv", [], "any", false, false, false, 242)), 2, ".", ","), "html", null, true);
            echo "</td>
                                                                <td class=\"text-center\"><a href=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 243)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                                ";
            // line 245
            echo "                                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 245), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                                            </tr>
                                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 247), "html", null, true);
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
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_order", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 257)]), "html", null, true);
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
        // line 264
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
        // line 277
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_user/gazdinstvo.html.twig", 277)->display($context);
        // line 278
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 287
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_user/gazdinstvo.html.twig", 287)->display($context);
        // line 288
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 292
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
        return "admin_user/gazdinstvo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 292,  616 => 291,  605 => 288,  603 => 287,  592 => 278,  590 => 277,  575 => 264,  554 => 257,  541 => 247,  535 => 245,  531 => 243,  526 => 242,  520 => 238,  514 => 234,  512 => 233,  507 => 230,  505 => 229,  499 => 228,  495 => 227,  491 => 226,  487 => 225,  484 => 224,  467 => 223,  461 => 219,  443 => 202,  437 => 200,  433 => 198,  431 => 197,  424 => 192,  418 => 190,  414 => 188,  412 => 187,  404 => 181,  398 => 179,  394 => 177,  392 => 176,  385 => 171,  379 => 169,  375 => 167,  373 => 166,  366 => 161,  358 => 159,  354 => 157,  352 => 156,  341 => 147,  335 => 145,  331 => 143,  329 => 142,  321 => 136,  315 => 134,  311 => 132,  309 => 131,  302 => 126,  296 => 124,  292 => 122,  290 => 121,  282 => 115,  276 => 113,  272 => 111,  270 => 110,  263 => 105,  257 => 103,  253 => 101,  251 => 100,  237 => 88,  231 => 86,  227 => 84,  225 => 83,  218 => 78,  210 => 76,  206 => 74,  204 => 73,  195 => 67,  186 => 61,  149 => 29,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Gazdinstvo - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h5>{{ firma.firstName }} {{ firma.lastName }}</h5>
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
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Broj gazdinstva</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ firma.gazdinstvo }}
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
", "admin_user/gazdinstvo.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_user/gazdinstvo.html.twig");
    }
}
