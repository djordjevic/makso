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

/* admin_user/korisnik.html.twig */
class __TwigTemplate_291266e93eed6948d92165602aa2512753bb4dcf53b4595916c578d7a103b238 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/korisnik.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/korisnik.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_user/korisnik.html.twig", 1);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_user/korisnik.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_user/korisnik.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
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
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Ime</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "firstName", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Prezime</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "lastName", [], "any", false, false, false, 68), "html", null, true);
        echo "
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Email</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                                    </div>
                                                </div>
                                            </div>

                                                <div class=\"tab-pane fade\" id=\"pills-adrese\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 87
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "address", [], "any", false, false, false, 87))) {
            // line 88
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 90
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "address", [], "any", false, false, false, 90), "html", null, true);
            echo "
                                                            ";
        }
        // line 92
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 97
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "city", [], "any", false, false, false, 97))) {
            // line 98
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 100
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "city", [], "any", false, false, false, 100), "html", null, true);
            echo "
                                                            ";
        }
        // line 102
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 108
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 108))) {
            // line 109
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 111
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 111), "html", null, true);
            echo "
                                                            ";
        }
        // line 113
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 118
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118))) {
            // line 119
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 121
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), "html", null, true);
            echo "
                                                            ";
        }
        // line 123
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 129
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "mobPhone", [], "any", false, false, false, 129))) {
            // line 130
            echo "                                                                Nisu uneti podaci
                                                            ";
        } else {
            // line 132
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "mobPhone", [], "any", false, false, false, 132), "html", null, true);
            echo "
                                                            ";
        }
        // line 134
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa za dostavu</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Osoba za kontakt</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 143
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 143))) {
            // line 144
            echo "                                                                Isporuka na primarnu adresu
                                                            ";
        } else {
            // line 146
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 146), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 146), "html", null, true);
            echo "
                                                            ";
        }
        // line 148
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 153
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 153))) {
            // line 154
            echo "                                                                Isporuka na primarnu adresu
                                                            ";
        } else {
            // line 156
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 156), "html", null, true);
            echo "
                                                            ";
        }
        // line 158
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 163
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 163))) {
            // line 164
            echo "                                                                Isporuka na primarnu adresu
                                                            ";
        } else {
            // line 166
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 166), "html", null, true);
            echo "
                                                            ";
        }
        // line 168
        echo "                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 174
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 174))) {
            // line 175
            echo "                                                                Isporuka na primarnu adresu
                                                            ";
        } else {
            // line 177
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 177), "html", null, true);
            echo "
                                                            ";
        }
        // line 179
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 184
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 184, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 184))) {
            // line 185
            echo "                                                                Isporuka na primarnu adresu
                                                            ";
        } else {
            // line 187
            echo "                                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 187), "html", null, true);
            echo "
                                                            ";
        }
        // line 189
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
        // line 206
        echo "                                                            <th>Obrišite</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 210, $this->source); })()));
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
            // line 211
            echo "                                                            <tr>
                                                                <td>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 212), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 213), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "dateAdded", [], "any", false, false, false, 214), "d.m.Y"), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "imePrimaoca", [], "any", false, false, false, 215), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "prezimePrimaoca", [], "any", false, false, false, 215), "html", null, true);
            echo "</td>
                                                                ";
            // line 216
            if ((twig_get_attribute($this->env, $this->source, $context["porudzbina"], "orderStatus", [], "any", false, false, false, 216) == 1)) {
                // line 217
                echo "                                                                    <td style=\"color:Orange;\">
                                                                        <span>Kreirana</span>
                                                                    </td>
                                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 220
$context["porudzbina"], "orderStatus", [], "any", false, false, false, 220) == 2)) {
                // line 221
                echo "                                                                    <td style=\"color:MediumSeaGreen;\">
                                                                        <span>Poslata</span>
                                                                    </td>
                                                                ";
            } else {
                // line 225
                echo "                                                                    <td style=\"color:Tomato;\">
                                                                        <span>Otkazana</span>
                                                                    </td>
                                                                ";
            }
            // line 229
            echo "                                                                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["porudzbina"], "totalPricePdv", [], "any", false, false, false, 229)), 2, ".", ","), "html", null, true);
            echo "</td>
                                                                <td class=\"text-center\"><a href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_view", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 230)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
                                                                ";
            // line 232
            echo "                                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 232), "html", null, true);
            echo "\" href=\"javascript:void(0)\"><i data-feather=\"trash-2\"></i></a></td>
                                                            </tr>
                                                            <div class=\"modal fade\" id=\"staticBackdrop";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 234), "html", null, true);
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
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_order", ["id" => twig_get_attribute($this->env, $this->source, $context["porudzbina"], "id", [], "any", false, false, false, 244)]), "html", null, true);
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
        // line 251
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
        // line 264
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_user/korisnik.html.twig", 264)->display($context);
        // line 265
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 274
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_user/korisnik.html.twig", 274)->display($context);
        // line 275
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 278
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 279
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
        return "admin_user/korisnik.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 279,  586 => 278,  575 => 275,  573 => 274,  562 => 265,  560 => 264,  545 => 251,  524 => 244,  511 => 234,  505 => 232,  501 => 230,  496 => 229,  490 => 225,  484 => 221,  482 => 220,  477 => 217,  475 => 216,  469 => 215,  465 => 214,  461 => 213,  457 => 212,  454 => 211,  437 => 210,  431 => 206,  413 => 189,  407 => 187,  403 => 185,  401 => 184,  394 => 179,  388 => 177,  384 => 175,  382 => 174,  374 => 168,  368 => 166,  364 => 164,  362 => 163,  355 => 158,  349 => 156,  345 => 154,  343 => 153,  336 => 148,  328 => 146,  324 => 144,  322 => 143,  311 => 134,  305 => 132,  301 => 130,  299 => 129,  291 => 123,  285 => 121,  281 => 119,  279 => 118,  272 => 113,  266 => 111,  262 => 109,  260 => 108,  252 => 102,  246 => 100,  242 => 98,  240 => 97,  233 => 92,  227 => 90,  223 => 88,  221 => 87,  206 => 75,  196 => 68,  186 => 61,  149 => 29,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
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
                    <h5>{{ user.firstName }} {{ user.lastName }}</h5>
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
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Ime</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ user.firstName }}
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Prezime</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ user.lastName }}
                                                    </div>
                                                </div>

                                                <div class=\"mb-4 row align-items-center\">
                                                    <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Email</label>
                                                    <div class=\"col-md-9 col-lg-10\">
                                                        {{ user.email }}
                                                    </div>
                                                </div>
                                            </div>

                                                <div class=\"tab-pane fade\" id=\"pills-adrese\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.address is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ user.address }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.city is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ user.city }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.postanskiBroj is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ user.postanskiBroj }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.phone is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ user.phone }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.mobPhone is empty %}
                                                                Nisu uneti podaci
                                                            {% else %}
                                                                {{ user.mobPhone }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Adresa za dostavu</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Osoba za kontakt</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.firstNamePrimaoc is empty %}
                                                                Isporuka na primarnu adresu
                                                            {% else %}
                                                                {{ user.firstNamePrimaoc }} {{ user.lastNamePrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Adresa</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.addressPrimaoc is empty %}
                                                                Isporuka na primarnu adresu
                                                            {% else %}
                                                                {{ user.addressPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Grad</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.cityPrimaoc is empty %}
                                                                Isporuka na primarnu adresu
                                                            {% else %}
                                                                {{ user.cityPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">PTT broj</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.postanskiBrPrimaoc is empty %}
                                                                Isporuka na primarnu adresu
                                                            {% else %}
                                                                {{ user.postanskiBrPrimaoc }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Mobilni telefon</label>
                                                        <div class=\"col-md-6\">
                                                            {% if user.mobPhonePrimaoc is empty %}
                                                                Isporuka na primarnu adresu
                                                            {% else %}
                                                                {{ user.mobPhonePrimaoc }}
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
", "admin_user/korisnik.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_user/korisnik.html.twig");
    }
}
