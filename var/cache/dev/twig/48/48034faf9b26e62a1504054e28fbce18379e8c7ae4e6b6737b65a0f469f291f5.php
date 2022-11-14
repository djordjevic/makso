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

/* admin_product/dodaj.html.twig */
class __TwigTemplate_2287e927d1094e1be2845d8f444c84a268b2ec7551b590bff1a47d7f46dc880e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_product/dodaj.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_product/dodaj.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_product/dodaj.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin | Proizvodi - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_product/dodaj.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_product/dodaj.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Dodajte novi proizvod</h5>
                </div>

                <!-- New Product Add Start -->
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
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-cene\"
                                                            type=\"button\">Cene</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-desc-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-desc\"
                                                            type=\"button\">Opis</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-atr\"
                                                            type=\"button\">Atributi</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-slike-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-slike\"
                                                            type=\"button\">Slike</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-meta\"
                                                            type=\"button\">Meta</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    ";
        // line 75
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "title", [], "any", false, false, false, 75), 'errors')) {
            // line 76
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "title", [], "any", false, false, false, 77), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 80
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "code", [], "any", false, false, false, 80), 'errors')) {
            // line 81
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "code", [], "any", false, false, false, 82), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 85
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "seller", [], "any", false, false, false, 85), 'errors')) {
            // line 86
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "seller", [], "any", false, false, false, 87), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 90
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "proizvodjac", [], "any", false, false, false, 90), 'errors')) {
            // line 91
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "proizvodjac", [], "any", false, false, false, 92), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 95
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "kategorija", [], "any", false, false, false, 95), 'errors')) {
            // line 96
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "kategorija", [], "any", false, false, false, 97), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 100
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "priceDin", [], "any", false, false, false, 100), 'errors')) {
            // line 101
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "priceDin", [], "any", false, false, false, 102), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 105
        echo "                                                    ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "priceVpDin", [], "any", false, false, false, 105), 'errors')) {
            // line 106
            echo "                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "priceVpDin", [], "any", false, false, false, 107), 'errors');
            echo "
                                                        </div>
                                                    ";
        }
        // line 110
        echo "                                                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "
                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv</label>
                                                                <div class=\"col-md-9 col-lg-10\">
                                                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "title", [], "any", false, false, false, 114), 'widget');
        echo "
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Šifra</label>
                                                                <div class=\"col-md-6\">
                                                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "code", [], "any", false, false, false, 121), 'widget');
        echo "
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label
                                                                        class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Dobavljač</label>
                                                                <div class=\"col-md-6\">
                                                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "seller", [], "any", false, false, false, 129), 'widget');
        echo "
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label
                                                                        class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Proizvođač</label>
                                                                <div class=\"col-md-6\">
                                                                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "proizvodjac", [], "any", false, false, false, 137), 'widget');
        echo "
                                                                </div>
                                                            </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcije za traktore</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "options", [], "any", false, false, false, 144), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcioni proizvodi</label>
                                                        <div class=\"col-md-6\">
                                                            <select class=\"form-control\" name=\"optional[]\" multiple>
                                                                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oproizvodi"]) || array_key_exists("oproizvodi", $context) ? $context["oproizvodi"] : (function () { throw new RuntimeError('Variable "oproizvodi" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 152
            echo "                                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "title", [], "any", false, false, false, 152), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                                            </select>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            ";
        // line 157
        if ( !twig_test_empty((isset($context["opProizvodi"]) || array_key_exists("opProizvodi", $context) ? $context["opProizvodi"] : (function () { throw new RuntimeError('Variable "opProizvodi" does not exist.', 157, $this->source); })()))) {
            // line 158
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opProizvodi"]) || array_key_exists("opProizvodi", $context) ? $context["opProizvodi"] : (function () { throw new RuntimeError('Variable "opProizvodi" does not exist.', 158, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["opPro"]) {
                // line 159
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $context["opPro"], "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 159)) {
                    echo ",";
                }
                // line 160
                echo "                                                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opPro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                                            ";
        }
        // line 162
        echo "                                                        </div>
                                                    </div>

                                                            <div class=\"row align-items-center\">
                                                                <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Kategorija</label>
                                                                <div class=\"col-md-6\">
                                                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "kategorija", [], "any", false, false, false, 168), 'widget');
        echo "
                                                                </div>
                                                            </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-cene\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Regularna cena</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Poreska stopa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "taxPercentage", [], "any", false, false, false, 181), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "priceDin", [], "any", false, false, false, 187), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "priceEur", [], "any", false, false, false, 194), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "priceVpDin", [], "any", false, false, false, 200), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "priceVpEur", [], "any", false, false, false, 207), 'widget');
        echo "
                                                        </div>
                                                    </div>



                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "flDiscount", [], "any", false, false, false, 219), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 225), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "discountPriceEur", [], "any", false, false, false, 232), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom ka pravnim licima</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu za pravna lica</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "flDiscountVp", [], "any", false, false, false, 241), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 247), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "discountVpPriceEur", [], "any", false, false, false, 254), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-atr\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #1</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "atr1", [], "any", false, false, false, 264), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #2</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "atr2", [], "any", false, false, false, 270), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #3</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "atr3", [], "any", false, false, false, 276), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #4</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "atr4", [], "any", false, false, false, 282), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #5</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "atr5", [], "any", false, false, false, 288), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #6</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "atr6", [], "any", false, false, false, 294), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #7</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "atr7", [], "any", false, false, false, 300), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #8</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "atr8", [], "any", false, false, false, 306), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #9</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "atr9", [], "any", false, false, false, 312), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #10</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "atr10", [], "any", false, false, false, 318), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-desc\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "caracteristic", [], "any", false, false, false, 329), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Karakteristike</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "charasteristicsDescription", [], "any", false, false, false, 336), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Težina u kg</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "weight", [], "any", false, false, false, 343), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Info o dostavi</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "deliveryCharacteristics", [], "any", false, false, false, 350), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena dostave</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "deliveryPrice", [], "any", false, false, false, 356), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Vreme dostave u danima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "deliveryTime", [], "any", false, false, false, 363), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-slike\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Glavna slika</h5>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Glavna slika proizvoda</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "slikaMain", [], "any", false, false, false, 376), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 378
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 378, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 378, $this->source); })()), "slikaMain", [], "any", false, false, false, 378)) > 0))) {
            // line 379
            echo "                                                            <div>
                                                                <img src=\"";
            // line 380
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 380, $this->source); })()), "slikaMain", [], "any", false, false, false, 380)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 383
        echo "                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Ostale slike</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #1</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "slika1", [], "any", false, false, false, 391), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 393
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 393, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 393, $this->source); })()), "slika1", [], "any", false, false, false, 393)) > 0))) {
            // line 394
            echo "                                                            <div>
                                                                <img src=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 395, $this->source); })()), "slika1", [], "any", false, false, false, 395)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 398
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #2</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "slika2", [], "any", false, false, false, 402), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 404
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 404, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 404, $this->source); })()), "slika2", [], "any", false, false, false, 404)) > 0))) {
            // line 405
            echo "                                                            <div>
                                                                <img src=\"";
            // line 406
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 406, $this->source); })()), "slika2", [], "any", false, false, false, 406)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 409
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #3</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "slika3", [], "any", false, false, false, 413), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 415
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 415, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 415, $this->source); })()), "slika3", [], "any", false, false, false, 415)) > 0))) {
            // line 416
            echo "                                                            <div>
                                                                <img src=\"";
            // line 417
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 417, $this->source); })()), "slika3", [], "any", false, false, false, 417)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 420
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #4</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "slika4", [], "any", false, false, false, 424), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 426
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 426, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 426, $this->source); })()), "slika4", [], "any", false, false, false, 426)) > 0))) {
            // line 427
            echo "                                                        <div>
                                                            <img src=\"";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 428, $this->source); })()), "slika4", [], "any", false, false, false, 428)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                        </div>
                                                        ";
        }
        // line 431
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #5</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "slika5", [], "any", false, false, false, 435), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 437
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 437, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 437, $this->source); })()), "slika5", [], "any", false, false, false, 437)) > 0))) {
            // line 438
            echo "                                                            <div>
                                                                <img src=\"";
            // line 439
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 439, $this->source); })()), "slika5", [], "any", false, false, false, 439)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 442
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #6</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "slika6", [], "any", false, false, false, 446), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 448
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 448, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 448, $this->source); })()), "slika6", [], "any", false, false, false, 448)) > 0))) {
            // line 449
            echo "                                                            <div>
                                                                <img src=\"";
            // line 450
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 450, $this->source); })()), "slika6", [], "any", false, false, false, 450)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 453
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #7</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "slika7", [], "any", false, false, false, 457), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 459
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 459, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 459, $this->source); })()), "slika7", [], "any", false, false, false, 459)) > 0))) {
            // line 460
            echo "                                                            <div>
                                                                <img src=\"";
            // line 461
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 461, $this->source); })()), "slika7", [], "any", false, false, false, 461)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 464
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #8</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "slika8", [], "any", false, false, false, 468), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 470
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 470, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 470, $this->source); })()), "slika8", [], "any", false, false, false, 470)) > 0))) {
            // line 471
            echo "                                                            <div>
                                                                <img src=\"";
            // line 472
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 472, $this->source); })()), "slika8", [], "any", false, false, false, 472)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 475
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #9</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "slika9", [], "any", false, false, false, 479), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 481
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 481, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 481, $this->source); })()), "slika9", [], "any", false, false, false, 481)) > 0))) {
            // line 482
            echo "                                                            <div>
                                                                <img src=\"";
            // line 483
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 483, $this->source); })()), "slika9", [], "any", false, false, false, 483)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 486
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #10</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 490
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 490, $this->source); })()), "slika10", [], "any", false, false, false, 490), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 492
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 492, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 492, $this->source); })()), "slika10", [], "any", false, false, false, 492)) > 0))) {
            // line 493
            echo "                                                            <div>
                                                                <img src=\"";
            // line 494
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 494, $this->source); })()), "slika10", [], "any", false, false, false, 494)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 497
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #11</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "slika11", [], "any", false, false, false, 501), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 503
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 503, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 503, $this->source); })()), "slika11", [], "any", false, false, false, 503)) > 0))) {
            // line 504
            echo "                                                            <div>
                                                                <img src=\"";
            // line 505
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 505, $this->source); })()), "slika11", [], "any", false, false, false, 505)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 508
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #12</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "slika12", [], "any", false, false, false, 512), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 514
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 514, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 514, $this->source); })()), "slika12", [], "any", false, false, false, 514)) > 0))) {
            // line 515
            echo "                                                            <div>
                                                                <img src=\"";
            // line 516
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 516, $this->source); })()), "slika12", [], "any", false, false, false, 516)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 519
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #13</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 523
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "slika13", [], "any", false, false, false, 523), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 525
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 525, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 525, $this->source); })()), "slika13", [], "any", false, false, false, 525)) > 0))) {
            // line 526
            echo "                                                            <div>
                                                                <img src=\"";
            // line 527
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 527, $this->source); })()), "slika13", [], "any", false, false, false, 527)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 530
        echo "                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #14</label>
                                                        <div class=\"col-md-3\">
                                                            ";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "slika14", [], "any", false, false, false, 534), 'widget');
        echo "
                                                        </div>
                                                        ";
        // line 536
        if ((((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 536, $this->source); })()) != "") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 536, $this->source); })()), "slika14", [], "any", false, false, false, 536)) > 0))) {
            // line 537
            echo "                                                            <div>
                                                                <img src=\"";
            // line 538
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 538, $this->source); })()), "slika14", [], "any", false, false, false, 538)), "html", null, true);
            echo "\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        ";
        }
        // line 541
        echo "                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-meta\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 549
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 549, $this->source); })()), "metaTitle", [], "any", false, false, false, 549), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 555
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 555, $this->source); })()), "metaDescription", [], "any", false, false, false, 555), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 561
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "metaKeywords", [], "any", false, false, false, 561), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Podešavanja</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod nema na stanju</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 584
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "flOutOfStock", [], "any", false, false, false, 584), 'widget');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je nov</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 591
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "flNewProduct", [], "any", false, false, false, 591), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je aktivan</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 597
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 597, $this->source); })()), "active", [], "any", false, false, false, 597), 'widget');
        echo "
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <br>
                                                    <div class=\"button login\">
                                                        <button type=\"submit\" class=\"align-items-center btn btn-theme\">
                                                            <span>Dodajte </span>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 612
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 612, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                ";
        // line 620
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_product/dodaj.html.twig", 620)->display($context);
        // line 621
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 630
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_product/dodaj.html.twig", 630)->display($context);
        // line 631
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 634
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 635
        echo "    ";
        // line 636
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/ckeditor/adapters/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('textarea.ckeditor').ckeditor();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_product/dodaj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 637,  1169 => 636,  1167 => 635,  1157 => 634,  1146 => 631,  1144 => 630,  1133 => 621,  1131 => 620,  1120 => 612,  1102 => 597,  1093 => 591,  1083 => 584,  1057 => 561,  1048 => 555,  1039 => 549,  1029 => 541,  1023 => 538,  1020 => 537,  1018 => 536,  1013 => 534,  1007 => 530,  1001 => 527,  998 => 526,  996 => 525,  991 => 523,  985 => 519,  979 => 516,  976 => 515,  974 => 514,  969 => 512,  963 => 508,  957 => 505,  954 => 504,  952 => 503,  947 => 501,  941 => 497,  935 => 494,  932 => 493,  930 => 492,  925 => 490,  919 => 486,  913 => 483,  910 => 482,  908 => 481,  903 => 479,  897 => 475,  891 => 472,  888 => 471,  886 => 470,  881 => 468,  875 => 464,  869 => 461,  866 => 460,  864 => 459,  859 => 457,  853 => 453,  847 => 450,  844 => 449,  842 => 448,  837 => 446,  831 => 442,  825 => 439,  822 => 438,  820 => 437,  815 => 435,  809 => 431,  803 => 428,  800 => 427,  798 => 426,  793 => 424,  787 => 420,  781 => 417,  778 => 416,  776 => 415,  771 => 413,  765 => 409,  759 => 406,  756 => 405,  754 => 404,  749 => 402,  743 => 398,  737 => 395,  734 => 394,  732 => 393,  727 => 391,  717 => 383,  711 => 380,  708 => 379,  706 => 378,  701 => 376,  685 => 363,  675 => 356,  666 => 350,  656 => 343,  646 => 336,  636 => 329,  622 => 318,  613 => 312,  604 => 306,  595 => 300,  586 => 294,  577 => 288,  568 => 282,  559 => 276,  550 => 270,  541 => 264,  528 => 254,  518 => 247,  509 => 241,  497 => 232,  487 => 225,  478 => 219,  463 => 207,  453 => 200,  444 => 194,  434 => 187,  425 => 181,  409 => 168,  401 => 162,  398 => 161,  384 => 160,  378 => 159,  360 => 158,  358 => 157,  353 => 154,  342 => 152,  338 => 151,  328 => 144,  318 => 137,  307 => 129,  296 => 121,  286 => 114,  278 => 110,  272 => 107,  269 => 106,  266 => 105,  260 => 102,  257 => 101,  254 => 100,  248 => 97,  245 => 96,  242 => 95,  236 => 92,  233 => 91,  230 => 90,  224 => 87,  221 => 86,  218 => 85,  212 => 82,  209 => 81,  206 => 80,  200 => 77,  197 => 76,  195 => 75,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ 'Admin | Proizvodi - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h5>Dodajte novi proizvod</h5>
                </div>

                <!-- New Product Add Start -->
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
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-cene\"
                                                            type=\"button\">Cene</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-desc-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-desc\"
                                                            type=\"button\">Opis</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-atr\"
                                                            type=\"button\">Atributi</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-slike-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-slike\"
                                                            type=\"button\">Slike</button>
                                                </li>
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-meta\"
                                                            type=\"button\">Meta</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    {% if form_errors(form.title)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.title) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.code)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.code) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.seller)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.seller) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.proizvodjac)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.proizvodjac) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.kategorija)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.kategorija) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.priceDin)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.priceDin) }}
                                                        </div>
                                                    {% endif %}
                                                    {% if form_errors(form.priceVpDin)%}
                                                        <div class=\"alert alert-danger\" role=\"alert\">
                                                            {{ form_errors(form.priceVpDin) }}
                                                        </div>
                                                    {% endif %}
                                                    {{ form_start(form, {'attr': {'class' : 'needs-validation'}})}}
                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv</label>
                                                                <div class=\"col-md-9 col-lg-10\">
                                                                    {{ form_widget(form.title) }}
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Šifra</label>
                                                                <div class=\"col-md-6\">
                                                                    {{ form_widget(form.code) }}
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label
                                                                        class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Dobavljač</label>
                                                                <div class=\"col-md-6\">
                                                                    {{ form_widget(form.seller) }}
                                                                </div>
                                                            </div>

                                                            <div class=\"mb-4 row align-items-center\">
                                                                <label
                                                                        class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Proizvođač</label>
                                                                <div class=\"col-md-6\">
                                                                    {{ form_widget(form.proizvodjac) }}
                                                                </div>
                                                            </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcije za traktore</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.options) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcioni proizvodi</label>
                                                        <div class=\"col-md-6\">
                                                            <select class=\"form-control\" name=\"optional[]\" multiple>
                                                                {% for pro in oproizvodi %}
                                                                    <option value=\"{{ pro.id }}\">{{ pro.title }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            {% if opProizvodi is not empty %}
                                                                {% for opPro in opProizvodi %}
                                                                    {{ opPro }}{% if  not loop.last %},{% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                        </div>
                                                    </div>

                                                            <div class=\"row align-items-center\">
                                                                <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Kategorija</label>
                                                                <div class=\"col-md-6\">
                                                                    {{ form_widget(form.kategorija) }}
                                                                </div>
                                                            </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-cene\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Regularna cena</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Poreska stopa</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.taxPercentage) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.priceDin) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.priceEur) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.priceVpDin) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.priceVpEur) }}
                                                        </div>
                                                    </div>



                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.flDiscount) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.discountPriceDin) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.discountPriceEur) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom ka pravnim licima</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu za pravna lica</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.flDiscountVp) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.discountVpPriceDin) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.discountVpPriceEur) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-atr\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #1</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr1) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #2</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr2) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #3</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr3) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #4</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr4) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #5</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr5) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #6</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr6) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #7</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr7) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #8</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr8) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #9</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr9) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #10</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.atr10) }}
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-desc\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.caracteristic) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Karakteristike</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.charasteristicsDescription) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Težina u kg</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.weight) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Info o dostavi</label>
                                                        <div class=\"col-md-10\">
                                                            {{ form_widget(form.deliveryCharacteristics) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena dostave</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.deliveryPrice) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Vreme dostave u danima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.deliveryTime) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-slike\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Glavna slika</h5>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Glavna slika proizvoda</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slikaMain) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slikaMain | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slikaMain) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Ostale slike</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #1</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika1) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika1 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika1) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #2</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika2) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika2 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika2) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #3</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika3) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika3 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika3) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #4</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika4) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika4 | length > 0) %}
                                                        <div>
                                                            <img src=\"{{ asset(prod.slika4) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                        </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #5</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika5) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika5 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika5) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #6</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika6) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika6 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika6) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #7</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika7) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika7 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika7) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #8</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika8) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika8 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika8) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #9</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika9) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika9 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika9) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #10</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika10) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika10 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika10) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #11</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika11) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika11 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika11) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #12</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika12) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika12 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika12) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #13</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika13) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika13 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika13) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #14</label>
                                                        <div class=\"col-md-3\">
                                                            {{ form_widget(form.slika14) }}
                                                        </div>
                                                        {% if (prod != '') and (prod.slika14 | length > 0) %}
                                                            <div>
                                                                <img src=\"{{ asset(prod.slika14) }}\" class=\"img-thumbnail\" width=\"150\" height=\"100\" alt=\"\">
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-meta\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ form_widget(form.metaTitle) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ form_widget(form.metaDescription) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ form_widget(form.metaKeywords) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link active\" id=\"pills-home-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\"
                                                            type=\"button\">Podešavanja</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod nema na stanju</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.flOutOfStock) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je nov</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.flNewProduct) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je aktivan</label>
                                                        <div class=\"col-md-6\">
                                                            {{ form_widget(form.active) }}
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <br>
                                                    <div class=\"button login\">
                                                        <button type=\"submit\" class=\"align-items-center btn btn-theme\">
                                                            <span>Dodajte </span>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
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
    {# Javascript Block #}
    <script src=\"{{ asset('assets/javascript/ckeditor/adapters/jquery.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/javascript/ckeditor/ckeditor.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('textarea.ckeditor').ckeditor();
        });
    </script>
{% endblock footerjavascript %}
", "admin_product/dodaj.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_product/dodaj.html.twig");
    }
}
