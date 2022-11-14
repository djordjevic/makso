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

/* admin_product/proizvod.html.twig */
class __TwigTemplate_a0c47a3dd1a86e989109c3964c1b7b8704192cdf4c122c8262bdd14282080bf5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_product/proizvod.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_product/proizvod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_product/proizvod.html.twig", 1);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_product/proizvod.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 24
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_product/proizvod.html.twig", 24)->display($context);
        // line 25
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Pregled proizvoda</h5>
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
                                                    <button class=\"nav-link\" id=\"pills-desc-tab\"
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
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-comm\"
                                                            type=\"button\">Komentari</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv</label>
                                                        <div class=\"col-md-9 col-lg-10\">
                                                            ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 83, $this->source); })()), "title", [], "any", false, false, false, 83), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Šifra</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 90, $this->source); })()), "code", [], "any", false, false, false, 90), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Dobavljač</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 98, $this->source); })()), "seller", [], "any", false, false, false, 98), "getName", [], "method", false, false, false, 98), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Proizvođač</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 106, $this->source); })()), "proizvodjac", [], "any", false, false, false, 106), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcioni proizvodi</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oProizvodi"]) || array_key_exists("oProizvodi", $context) ? $context["oProizvodi"] : (function () { throw new RuntimeError('Variable "oProizvodi" does not exist.', 113, $this->source); })()));
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
            // line 114
            echo "                                                                ";
            echo twig_escape_filter($this->env, $context["opPro"], "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 114)) {
                echo ",";
            }
            // line 115
            echo "                                                            ";
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
        // line 116
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Kategorija</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 122, $this->source); })()), "kategorija", [], "any", false, false, false, 122), "getName", [], "method", false, false, false, 122), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-cene\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Regularna cena</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 135
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 135, $this->source); })()), "priceDin", [], "any", false, false, false, 135)), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 141
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 141, $this->source); })()), "priceDin", [], "any", false, false, false, 141) * ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 141, $this->source); })()), "taxPercentage", [], "any", false, false, false, 141) / 100) + 1))), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 148
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 148, $this->source); })()), "priceEur", [], "any", false, false, false, 148), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Poreska stopa</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 155, $this->source); })()), "taxPercentage", [], "any", false, false, false, 155), "html", null, true);
        echo "%
                                                        </div>
                                                    </div>
                                                    <div class=\"card-header-1\">
                                                        <h5>Cena ka pravnim licima</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 164
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 164, $this->source); })()), "priceVpDin", [], "any", false, false, false, 164)), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 170
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 170, $this->source); })()), "priceVpDin", [], "any", false, false, false, 170) * ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 170, $this->source); })()), "taxPercentage", [], "any", false, false, false, 170) / 100) + 1))), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 177
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 177, $this->source); })()), "priceVpEur", [], "any", false, false, false, 177), 2, ".", ","), "html", null, true);
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
        // line 188
        if ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 188, $this->source); })()), "flDiscount", [], "any", false, false, false, 188) == 1)) {
            // line 189
            echo "                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            ";
        } else {
            // line 191
            echo "                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            ";
        }
        // line 193
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 198
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 198, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 198)), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 204
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 204, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 204) * ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 204, $this->source); })()), "taxPercentage", [], "any", false, false, false, 204) / 100) + 1))), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 211
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 211, $this->source); })()), "discountPriceEur", [], "any", false, false, false, 211), 2, ".", ","), "html", null, true);
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
        // line 220
        if ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 220, $this->source); })()), "flDiscount", [], "any", false, false, false, 220) == 1)) {
            // line 221
            echo "                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            ";
        } else {
            // line 223
            echo "                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            ";
        }
        // line 225
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 230
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 230, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 230)), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 236
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 236, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 236) * ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 236, $this->source); })()), "taxPercentage", [], "any", false, false, false, 236) / 100) + 1))), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 243
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 243, $this->source); })()), "discountVpPriceEur", [], "any", false, false, false, 243), 2, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-desc\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 252
        echo twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 252, $this->source); })()), "caracteristic", [], "any", false, false, false, 252);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Karakteristike</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 259
        echo twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 259, $this->source); })()), "charasteristicsDescription", [], "any", false, false, false, 259);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Težina u kg</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 266
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 266, $this->source); })()), "weight", [], "any", false, false, false, 266), 3, ".", ","), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Info o dostavi</label>
                                                        <div class=\"col-md-10\">
                                                            ";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 273, $this->source); })()), "deliveryCharacteristics", [], "any", false, false, false, 273), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena dostave</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 279, $this->source); })()), "deliveryPrice", [], "any", false, false, false, 279), "html", null, true);
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Vreme dostave u danima</label>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 286, $this->source); })()), "deliveryTime", [], "any", false, false, false, 286), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-atr\" role=\"tabpanel\">
                                                    ";
        // line 291
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 291, $this->source); })()), "atr1", [], "any", false, false, false, 291))) {
            // line 292
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #1</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 295, $this->source); })()), "atr1", [], "any", false, false, false, 295), "getName", [], "method", false, false, false, 295), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 299
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 299, $this->source); })()), "atr2", [], "any", false, false, false, 299))) {
            // line 300
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #2</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 303, $this->source); })()), "atr2", [], "any", false, false, false, 303), "getName", [], "method", false, false, false, 303), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 307
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 307, $this->source); })()), "atr3", [], "any", false, false, false, 307))) {
            // line 308
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #3</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 311, $this->source); })()), "atr3", [], "any", false, false, false, 311), "getName", [], "method", false, false, false, 311), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 315
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 315, $this->source); })()), "atr4", [], "any", false, false, false, 315))) {
            // line 316
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #4</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 319, $this->source); })()), "atr4", [], "any", false, false, false, 319), "getName", [], "method", false, false, false, 319), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 323
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 323, $this->source); })()), "atr5", [], "any", false, false, false, 323))) {
            // line 324
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #5</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 327, $this->source); })()), "atr5", [], "any", false, false, false, 327), "getName", [], "method", false, false, false, 327), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 331
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 331, $this->source); })()), "atr6", [], "any", false, false, false, 331))) {
            // line 332
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #6</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 335, $this->source); })()), "atr6", [], "any", false, false, false, 335), "getName", [], "method", false, false, false, 335), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 339
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 339, $this->source); })()), "atr7", [], "any", false, false, false, 339))) {
            // line 340
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #7</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 343, $this->source); })()), "atr7", [], "any", false, false, false, 343), "getName", [], "method", false, false, false, 343), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 347
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 347, $this->source); })()), "atr8", [], "any", false, false, false, 347))) {
            // line 348
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #8</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 351, $this->source); })()), "atr8", [], "any", false, false, false, 351), "getName", [], "method", false, false, false, 351), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 355
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 355, $this->source); })()), "atr9", [], "any", false, false, false, 355))) {
            // line 356
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #9</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 359, $this->source); })()), "atr9", [], "any", false, false, false, 359), "getName", [], "method", false, false, false, 359), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 363
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 363, $this->source); })()), "atr10", [], "any", false, false, false, 363))) {
            // line 364
            echo "                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #10</label>
                                                        <div class=\"col-md-10\">
                                                            ";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 367, $this->source); })()), "atr10", [], "any", false, false, false, 367), "getName", [], "method", false, false, false, 367), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 371
        echo "                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-slike\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Glavna slika</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Glavna slika proizvoda</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 379
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 379, $this->source); })()), "slikaMain", [], "any", false, false, false, 379))) {
            // line 380
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 382
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 382, $this->source); })()), "slikaMain", [], "any", false, false, false, 382)), "html", null, true);
            echo "
                                                            ";
        }
        // line 383
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 384, $this->source); })()), "slikaMain", [], "any", false, false, false, 384), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Ostale slike</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #1</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 394
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 394, $this->source); })()), "slika1", [], "any", false, false, false, 394))) {
            // line 395
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 397
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 397, $this->source); })()), "slika1", [], "any", false, false, false, 397)), "html", null, true);
        }
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 398
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 398, $this->source); })()), "slika1", [], "any", false, false, false, 398), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #2</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 404
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 404, $this->source); })()), "slika2", [], "any", false, false, false, 404))) {
            // line 405
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 407
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 407, $this->source); })()), "slika2", [], "any", false, false, false, 407)), "html", null, true);
        }
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 408, $this->source); })()), "slika2", [], "any", false, false, false, 408), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #3</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 414
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 414, $this->source); })()), "slika3", [], "any", false, false, false, 414))) {
            // line 415
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 417
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 417, $this->source); })()), "slika3", [], "any", false, false, false, 417)), "html", null, true);
            echo "
                                                            ";
        }
        // line 418
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 419
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 419, $this->source); })()), "slika3", [], "any", false, false, false, 419), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #4</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 425
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 425, $this->source); })()), "slika4", [], "any", false, false, false, 425))) {
            // line 426
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 428
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 428, $this->source); })()), "slika4", [], "any", false, false, false, 428)), "html", null, true);
            echo "
                                                            ";
        }
        // line 429
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 430
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 430, $this->source); })()), "slika4", [], "any", false, false, false, 430), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #5</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 436
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 436, $this->source); })()), "slika5", [], "any", false, false, false, 436))) {
            // line 437
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 439
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 439, $this->source); })()), "slika5", [], "any", false, false, false, 439)), "html", null, true);
            echo "
                                                            ";
        }
        // line 440
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 441, $this->source); })()), "slika5", [], "any", false, false, false, 441), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #6</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 447
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 447, $this->source); })()), "slika6", [], "any", false, false, false, 447))) {
            // line 448
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 450
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 450, $this->source); })()), "slika6", [], "any", false, false, false, 450)), "html", null, true);
            echo "
                                                            ";
        }
        // line 451
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 452
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 452, $this->source); })()), "slika6", [], "any", false, false, false, 452), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #7</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 458
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 458, $this->source); })()), "slika7", [], "any", false, false, false, 458))) {
            // line 459
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 461
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 461, $this->source); })()), "slika7", [], "any", false, false, false, 461)), "html", null, true);
            echo "
                                                            ";
        }
        // line 462
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 463, $this->source); })()), "slika7", [], "any", false, false, false, 463), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #8</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 469
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 469, $this->source); })()), "slika8", [], "any", false, false, false, 469))) {
            // line 470
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 472
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 472, $this->source); })()), "slika8", [], "any", false, false, false, 472)), "html", null, true);
            echo "
                                                            ";
        }
        // line 473
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 474
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 474, $this->source); })()), "slika8", [], "any", false, false, false, 474), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #9</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 480
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 480, $this->source); })()), "slika9", [], "any", false, false, false, 480))) {
            // line 481
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 483
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 483, $this->source); })()), "slika9", [], "any", false, false, false, 483)), "html", null, true);
            echo "
                                                            ";
        }
        // line 484
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 485
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 485, $this->source); })()), "slikaMain", [], "any", false, false, false, 485), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #10</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 491
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 491, $this->source); })()), "slika10", [], "any", false, false, false, 491))) {
            // line 492
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 494
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 494, $this->source); })()), "slika10", [], "any", false, false, false, 494)), "html", null, true);
            echo "
                                                            ";
        }
        // line 495
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 496
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 496, $this->source); })()), "slika10", [], "any", false, false, false, 496), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #11</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 502
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 502, $this->source); })()), "slika11", [], "any", false, false, false, 502))) {
            // line 503
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 505
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 505, $this->source); })()), "slika11", [], "any", false, false, false, 505)), "html", null, true);
            echo "
                                                            ";
        }
        // line 506
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 507
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 507, $this->source); })()), "slika11", [], "any", false, false, false, 507), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #12</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 513
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 513, $this->source); })()), "slika12", [], "any", false, false, false, 513))) {
            // line 514
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 516
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 516, $this->source); })()), "slika12", [], "any", false, false, false, 516)), "html", null, true);
            echo "
                                                            ";
        }
        // line 517
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 518
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 518, $this->source); })()), "slika12", [], "any", false, false, false, 518), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #13</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 524
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 524, $this->source); })()), "slika13", [], "any", false, false, false, 524))) {
            // line 525
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 527
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 527, $this->source); })()), "slika13", [], "any", false, false, false, 527)), "html", null, true);
            echo "
                                                            ";
        }
        // line 528
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 529
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 529, $this->source); })()), "slika13", [], "any", false, false, false, 529), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #14</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"";
        // line 535
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 535, $this->source); })()), "slika14", [], "any", false, false, false, 535))) {
            // line 536
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 538
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 538, $this->source); })()), "slika14", [], "any", false, false, false, 538)), "html", null, true);
            echo "
                                                            ";
        }
        // line 539
        echo "\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 540, $this->source); })()), "slika14", [], "any", false, false, false, 540), "html", null, true);
        echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-meta\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 549
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 549, $this->source); })()), "metaTitle", [], "any", false, false, false, 549), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 555
        echo twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 555, $this->source); })()), "metaDescription", [], "any", false, false, false, 555);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            ";
        // line 561
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 561, $this->source); })()), "metaKeywords", [], "any", false, false, false, 561), "html", null, true);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-comm\" role=\"tabpanel\">

                                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Ime</th>
                                                            <th>Email</th>
                                                            <th>Komentar</th>
                                                            <th>Datum</th>
                                                            <th>Status</th>
                                                            <th>Pregledajte</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 580, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 581
            echo "                                                            <tr>
                                                                <td>";
            // line 582
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 582), "html", null, true);
            echo " </td>
                                                                <td>";
            // line 583
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 583), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 584), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 585
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 585)) > 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 585), 0, 50) . "...")) : (twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 585))), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 586
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 586), "d.m.Y"), "html", null, true);
            echo "</td>
                                                                <td class=\"text-center\">
                                                                    ";
            // line 588
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "active", [], "any", false, false, false, 588) == 1)) {
                // line 589
                echo "                                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                    ";
            } else {
                // line 591
                echo "                                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                    ";
            }
            // line 593
            echo "                                                                </td>
                                                                <td class=\"text-center\"><a href=\"";
            // line 594
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_view_review", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 594)]), "html", null, true);
            echo "\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
";
            // line 602
            echo "                                                            </tr>
";
            // line 625
            echo "                                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 626
        echo "                                                        </tbody>
                                                    </table>


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
        // line 650
        if ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 650, $this->source); })()), "flOutOfStock", [], "any", false, false, false, 650) == 1)) {
            // line 651
            echo "                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                ";
        } else {
            // line 653
            echo "                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                ";
        }
        // line 655
        echo "                                                            </div>
                                                        </div>

                                                        <div class=\"mb-4 row align-items-center\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je nov</label>
                                                            <div class=\"col-md-6\">
                                                                ";
        // line 661
        if ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 661, $this->source); })()), "flNewProduct", [], "any", false, false, false, 661) == 1)) {
            // line 662
            echo "                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                ";
        } else {
            // line 664
            echo "                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                ";
        }
        // line 666
        echo "                                                            </div>
                                                        </div>

                                                        <div class=\"row align-items-center\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je aktivan</label>
                                                            <div class=\"col-md-6\">
                                                                ";
        // line 672
        if ((twig_get_attribute($this->env, $this->source, (isset($context["proizvod"]) || array_key_exists("proizvod", $context) ? $context["proizvod"] : (function () { throw new RuntimeError('Variable "proizvod" does not exist.', 672, $this->source); })()), "active", [], "any", false, false, false, 672) == 1)) {
            // line 673
            echo "                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                ";
        } else {
            // line 675
            echo "                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                ";
        }
        // line 677
        echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                ";
        // line 691
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_product/proizvod.html.twig", 691)->display($context);
        // line 692
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 701
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_product/proizvod.html.twig", 701)->display($context);
        // line 702
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 705
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 706
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
        return "admin_product/proizvod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1322 => 706,  1312 => 705,  1301 => 702,  1299 => 701,  1288 => 692,  1286 => 691,  1270 => 677,  1266 => 675,  1262 => 673,  1260 => 672,  1252 => 666,  1248 => 664,  1244 => 662,  1242 => 661,  1234 => 655,  1230 => 653,  1226 => 651,  1224 => 650,  1198 => 626,  1184 => 625,  1181 => 602,  1177 => 594,  1174 => 593,  1170 => 591,  1166 => 589,  1164 => 588,  1159 => 586,  1155 => 585,  1151 => 584,  1147 => 583,  1143 => 582,  1140 => 581,  1123 => 580,  1101 => 561,  1092 => 555,  1083 => 549,  1071 => 540,  1068 => 539,  1062 => 538,  1056 => 536,  1054 => 535,  1045 => 529,  1042 => 528,  1036 => 527,  1030 => 525,  1028 => 524,  1019 => 518,  1016 => 517,  1010 => 516,  1004 => 514,  1002 => 513,  993 => 507,  990 => 506,  984 => 505,  978 => 503,  976 => 502,  967 => 496,  964 => 495,  958 => 494,  952 => 492,  950 => 491,  941 => 485,  938 => 484,  932 => 483,  926 => 481,  924 => 480,  915 => 474,  912 => 473,  906 => 472,  900 => 470,  898 => 469,  889 => 463,  886 => 462,  880 => 461,  874 => 459,  872 => 458,  863 => 452,  860 => 451,  854 => 450,  848 => 448,  846 => 447,  837 => 441,  834 => 440,  828 => 439,  822 => 437,  820 => 436,  811 => 430,  808 => 429,  802 => 428,  796 => 426,  794 => 425,  785 => 419,  782 => 418,  776 => 417,  770 => 415,  768 => 414,  759 => 408,  753 => 407,  747 => 405,  745 => 404,  736 => 398,  730 => 397,  724 => 395,  722 => 394,  709 => 384,  706 => 383,  700 => 382,  694 => 380,  692 => 379,  682 => 371,  675 => 367,  670 => 364,  667 => 363,  660 => 359,  655 => 356,  652 => 355,  645 => 351,  640 => 348,  637 => 347,  630 => 343,  625 => 340,  622 => 339,  615 => 335,  610 => 332,  607 => 331,  600 => 327,  595 => 324,  592 => 323,  585 => 319,  580 => 316,  577 => 315,  570 => 311,  565 => 308,  562 => 307,  555 => 303,  550 => 300,  547 => 299,  540 => 295,  535 => 292,  533 => 291,  525 => 286,  515 => 279,  506 => 273,  496 => 266,  486 => 259,  476 => 252,  464 => 243,  454 => 236,  445 => 230,  438 => 225,  434 => 223,  430 => 221,  428 => 220,  416 => 211,  406 => 204,  397 => 198,  390 => 193,  386 => 191,  382 => 189,  380 => 188,  366 => 177,  356 => 170,  347 => 164,  335 => 155,  325 => 148,  315 => 141,  306 => 135,  290 => 122,  282 => 116,  268 => 115,  262 => 114,  245 => 113,  235 => 106,  224 => 98,  213 => 90,  203 => 83,  143 => 25,  141 => 24,  135 => 20,  133 => 19,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
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
                    <h5>Pregled proizvoda</h5>
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
                                                    <button class=\"nav-link\" id=\"pills-desc-tab\"
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
                                                <li class=\"nav-item\" role=\"presentation\">
                                                    <button class=\"nav-link\" id=\"pills-meta-tab\"
                                                            data-bs-toggle=\"pill\" data-bs-target=\"#pills-comm\"
                                                            type=\"button\">Komentari</button>
                                                </li>
                                            </ul>

                                            <div class=\"tab-content\" id=\"pills-tabContent\">
                                                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-lg-2 col-md-3 mb-0\">Naziv</label>
                                                        <div class=\"col-md-9 col-lg-10\">
                                                            {{ proizvod.title }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Šifra</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.code }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Dobavljač</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.seller.getName() }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Proizvođač</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.proizvodjac }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Opcioni proizvodi</label>
                                                        <div class=\"col-md-6\">
                                                            {% for opPro in oProizvodi %}
                                                                {{ opPro }}{% if  not loop.last %},{% endif %}
                                                            {% endfor %}
                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-lg-2 col-md-3 col-form-label form-label-title\">Kategorija</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.kategorija.getName() }}
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class=\"tab-pane fade\" id=\"pills-cene\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Regularna cena</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ (proizvod.priceDin | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            {{ ((proizvod.priceDin * ((proizvod.taxPercentage/100) + 1)) | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.priceEur | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Poreska stopa</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.taxPercentage }}%
                                                        </div>
                                                    </div>
                                                    <div class=\"card-header-1\">
                                                        <h5>Cena ka pravnim licima</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ (proizvod.priceVpDin | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            {{ ((proizvod.priceVpDin * ((proizvod.taxPercentage/100) + 1)) | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.priceVpEur | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>


                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu</label>
                                                        <div class=\"col-md-6\">
                                                            {% if proizvod.flDiscount == 1 %}
                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            {% else %}
                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ (proizvod.discountPriceDin | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            {{ ((proizvod.discountPriceDin * ((proizvod.taxPercentage/100) + 1)) | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.discountPriceEur | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"card-header-1\">
                                                        <h5>Cena sa popustom ka pravnim licima</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je na popustu za pravna lica</label>
                                                        <div class=\"col-md-6\">
                                                            {% if proizvod.flDiscount == 1 %}
                                                                <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                            {% else %}
                                                                <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ (proizvod.discountVpPriceDin |round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u dinarima ka pravnim licima sa PDV-om</label>
                                                        <div class=\"col-md-6\">
                                                            {{ ((proizvod.discountVpPriceDin * ((proizvod.taxPercentage/100) + 1)) | round) | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena u eurima ka pravnim licima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.discountVpPriceEur | number_format(2, '.', ',') }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-desc\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.caracteristic | raw }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Karakteristike</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.charasteristicsDescription | raw}}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Težina u kg</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.weight | number_format(3, '.', ',') }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Info o dostavi</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.deliveryCharacteristics }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Cena dostave</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.deliveryPrice }}
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Vreme dostave u danima</label>
                                                        <div class=\"col-md-6\">
                                                            {{ proizvod.deliveryTime }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-atr\" role=\"tabpanel\">
                                                    {% if proizvod.atr1 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #1</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr1.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr2 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #2</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr2.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr3 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #3</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr3.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr4 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #4</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr4.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr5 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #5</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr5.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr6 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #6</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr6.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr7 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #7</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr7.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr8 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #8</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr8.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr9 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #9</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr9.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                    {% if proizvod.atr10 is not null  %}
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Atribut #10</label>
                                                        <div class=\"col-md-10\">
                                                            {{ proizvod.atr10.getName() }}
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-slike\" role=\"tabpanel\">
                                                    <div class=\"card-header-1\">
                                                        <h5>Glavna slika</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Glavna slika proizvoda</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slikaMain) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slikaMain }}\">
                                                        </div>
                                                    </div>

                                                    <div class=\"card-header-1\">
                                                        <h5>Ostale slike</h5>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #1</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika1 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika1) }}{% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika1 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #2</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika2 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika2) }}{% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika2 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #3</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika3 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika3) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika3 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #4</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika4 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika4) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika4 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #5</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika5 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika5) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika5 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #6</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika6 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika6) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika6 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #7</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika7 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika7) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika7 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #8</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika8 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika8) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika8 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #9</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika9 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika9) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slikaMain }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #10</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika10 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika10) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika10 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #11</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika11 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika11) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika11 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #12</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika12 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika12) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika12 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #13</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika13 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika13) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika13 }}\">
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Slika #14</label>
                                                        <div class=\"col-md-6\">
                                                            <img src=\"{% if proizvod.slika14 is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(proizvod.slika14) }}
                                                            {% endif %}\" class=\"img-thumbnail\" width=\"225\" height=\"200\"
                                                                 alt=\"{{ proizvod.slika14 }}\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-meta\" role=\"tabpanel\">

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Naziv proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ proizvod.metaTitle }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Opis proizvoda</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ proizvod.metaDescription | raw }}
                                                        </div>
                                                    </div>
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Ključne reči</label>
                                                        <div class=\"col-sm-10\">
                                                            {{ proizvod.metaKeywords }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pills-comm\" role=\"tabpanel\">

                                                    <table id=\"example\" class=\"table table-striped\" style=\"width:100%\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Ime</th>
                                                            <th>Email</th>
                                                            <th>Komentar</th>
                                                            <th>Datum</th>
                                                            <th>Status</th>
                                                            <th>Pregledajte</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for comment in comments %}
                                                            <tr>
                                                                <td>{{ loop.index }} </td>
                                                                <td>{{ comment.name }}</td>
                                                                <td>{{ comment.email }}</td>
                                                                <td>{{ comment.comment |length > 50 ? comment.comment|slice(0, 50) ~ '...' : comment.comment }}</td>
                                                                <td>{{ comment.created | date(\"d.m.Y\") }}</td>
                                                                <td class=\"text-center\">
                                                                    {% if comment.active == 1 %}
                                                                        <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                    {% else %}
                                                                        <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                    {% endif %}
                                                                </td>
                                                                <td class=\"text-center\"><a href=\"{{ path('app_admin_view_review', {id: comment.id}) }}\"><i data-feather=\"eye\" style=\"color:MediumSeaGreen;\"></i></a></td>
{#                                                                <td class=\"text-center\"><a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop{{ comment.id }}\" href=\"javascript:void(0)\">#}
{#                                                                        {% if comment.active == 1 %}#}
{#                                                                            Zabranite#}
{#                                                                        {% else %}#}
{#                                                                            Dozvolite#}
{#                                                                        {% endif %}#}
{#                                                                    </a></td>#}
                                                            </tr>
{#                                                            <div class=\"modal fade\" id=\"staticBackdrop{{ comment.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"#}
{#                                                                 aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">#}
{#                                                                <div class=\"modal-dialog  modal-dialog-centered\">#}
{#                                                                    <div class=\"modal-content\">#}
{#                                                                        <div class=\"modal-body\">#}
{#                                                                            <h5 class=\"modal-title\" id=\"staticBackdropLabel\">#}
{#                                                                                {% if comment.active == 1 %}#}
{#                                                                                    Zabranite komentar#}
{#                                                                                {% else %}#}
{#                                                                                    Dozvolite komentar#}
{#                                                                                {% endif %}#}
{#                                                                            </h5>#}
{#                                                                            <p>Da li ste sigurni?</p>#}
{#                                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>#}
{#                                                                            <div class=\"button-box\">#}
{#                                                                                <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>#}
{#                                                                                <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_admin_status_review', {id: comment.id}) }}\" role=\"button\">Da</a>#}
{#                                                                            </div>#}
{#                                                                        </div>#}
{#                                                                    </div>#}
{#                                                                </div>#}
{#                                                            </div>#}
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>


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
                                                                {% if proizvod.flOutOfStock == 1 %}
                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                {% else %}
                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                {% endif %}
                                                            </div>
                                                        </div>

                                                        <div class=\"mb-4 row align-items-center\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je nov</label>
                                                            <div class=\"col-md-6\">
                                                                {% if proizvod.flNewProduct == 1 %}
                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                {% else %}
                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
                                                                {% endif %}
                                                            </div>
                                                        </div>

                                                        <div class=\"row align-items-center\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Proizvod je aktivan</label>
                                                            <div class=\"col-md-6\">
                                                                {% if proizvod.active == 1 %}
                                                                    <i data-feather=\"check-circle\" style=\"color:MediumSeaGreen;\"></i>
                                                                {% else %}
                                                                    <i data-feather=\"minus-circle\" style=\"color:Tomato;\"></i>
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
", "admin_product/proizvod.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_product/proizvod.html.twig");
    }
}
