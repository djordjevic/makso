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

/* page/kontakt.html.twig */
class __TwigTemplate_bd82d59d14918b8eef33e2bf242d353bdd936fcca70f1d5bd7a61b5cd5b23e2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/kontakt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/kontakt.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/kontakt.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kontakt - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "page/kontakt.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/kontakt.html.twig", 19)->display($context);
        // line 20
        echo "
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
                    <h3>Kontakt</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Kontakt</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Contact Section Start -->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-7\">
                    <div class=\"materialContainer\">
                        <div class=\"material-details\">
                            <div class=\"title title1 title-effect mb-1 title-left\">
                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "                                    <div class=\"alert alert-warning\" role=\"alert\">
                                        ";
            // line 65
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "                                    <div class=\"alert alert-success\" role=\"alert\">
                                        ";
            // line 70
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                <h2>Kontaktirajte nas</h2>
                                <p class=\"ms-0 w-100\">Sva polja su obavezna</p>
                            </div>
                        </div>
                        <form method=\"post\" action=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontakt_email");
        echo "\">
                        <div class=\"row g-4 mt-md-1 mt-2\">
                            <div class=\"col-md-6\">
                                <label for=\"first\" class=\"form-label\">Ime</label>
                                <input type=\"text\" name=\"ime\" class=\"form-control\" id=\"first\" placeholder=\"Unesite Vaše ime\"
                                       required>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"last\" class=\"form-label\">Prezime</label>
                                <input type=\"text\" name=\"prezime\" class=\"form-control\" id=\"last\" placeholder=\"Unesite Vaše prezime\"
                                       required>
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                       placeholder=\"Unesite Vašu email adresu\" required>
                            </div>

                            <div class=\"col-12\">
                                <label for=\"comment\" class=\"form-label\">Poruka</label>
                                <textarea class=\"form-control\" id=\"comment\" rows=\"5\" name=\"poruka\" required></textarea>
                            </div>

                            <div class=\"col-auto\">
                                <button class=\"btn btn-solid-default\" type=\"submit\">Pošaljite</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class=\"col-lg-5\">
                    <div class=\"contact-details\">
                        <div>
                            <h2>Budimo u kontaktu</h2>
                            <h5 class=\"font-light\">Slobodno nas možete kontaktirati na neki od ovih načina</h5>
                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"map-pin\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Lokacije :</h4>
                                    <p>Grdovići bb, 31230 Arilje, Srbija</p>
                                    <p>Đorđa Popovića bb, 32000 Čačak, Srbija</p>
                                </div>
                            </div>

                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"phone\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Telefoni :</h4>
                                    <p>031/3893-716</p>
                                    <p>060/3893-716</p>
                                    <p>060/066-89-86</p>
                                    <p>063/663-200</p>
                                </div>
                            </div>

                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"mail\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Email :</h4>
                                    <p>eurofiskal@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section start -->
    <section class=\"contact-section\">
        <div class=\"container-fluid\">
            <div class=\"row gy-4\">

                <div class=\"col-6 p-0\">
                    <div class=\"location-map\">
                        <iframe

                                src=\"https://maps.google.com/maps?q=eurofiskal&t=&z=13&ie=UTF8&iwloc=&output=embed\"
                                loading=\"lazy\"></iframe>
                    </div>
                </div>
                <div class=\"col-6 p-0\">
                    <div class=\"location-map\">
                        <iframe

                                src=\"https://goo.gl/maps/cmoYSjNmQ2So4o7HA\"
                                loading=\"lazy\"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <!-- Subscribe Section Start -->
    ";
        // line 182
        $this->loadTemplate("include/subscribe.html.twig", "page/kontakt.html.twig", 182)->display($context);
        // line 183
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 186
        $this->loadTemplate("include/footer.html.twig", "page/kontakt.html.twig", 186)->display($context);
        // line 187
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 191
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 195
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
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
        echo "    ";
        // line 206
        echo "    ";
        // line 207
        echo "    ";
        // line 208
        echo "    ";
        // line 209
        echo "    ";
        // line 210
        echo "    ";
        // line 211
        echo "    ";
        // line 212
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 215
        $this->loadTemplate("include/top.html.twig", "page/kontakt.html.twig", 215)->display($context);
        // line 216
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 222
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 222,  403 => 221,  390 => 216,  388 => 215,  383 => 212,  381 => 211,  379 => 210,  377 => 209,  375 => 208,  373 => 207,  371 => 206,  369 => 205,  367 => 204,  365 => 203,  363 => 202,  361 => 201,  359 => 200,  357 => 199,  352 => 195,  347 => 191,  342 => 187,  340 => 186,  335 => 183,  333 => 182,  225 => 77,  219 => 73,  210 => 70,  207 => 69,  202 => 68,  193 => 65,  190 => 64,  186 => 63,  162 => 42,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Kontakt - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Kontakt</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Kontakt</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Contact Section Start -->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-7\">
                    <div class=\"materialContainer\">
                        <div class=\"material-details\">
                            <div class=\"title title1 title-effect mb-1 title-left\">
                                {% for message in app.flashes('error') %}
                                    <div class=\"alert alert-warning\" role=\"alert\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                {% for message in app.flashes('success') %}
                                    <div class=\"alert alert-success\" role=\"alert\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                                <h2>Kontaktirajte nas</h2>
                                <p class=\"ms-0 w-100\">Sva polja su obavezna</p>
                            </div>
                        </div>
                        <form method=\"post\" action=\"{{ path('kontakt_email') }}\">
                        <div class=\"row g-4 mt-md-1 mt-2\">
                            <div class=\"col-md-6\">
                                <label for=\"first\" class=\"form-label\">Ime</label>
                                <input type=\"text\" name=\"ime\" class=\"form-control\" id=\"first\" placeholder=\"Unesite Vaše ime\"
                                       required>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"last\" class=\"form-label\">Prezime</label>
                                <input type=\"text\" name=\"prezime\" class=\"form-control\" id=\"last\" placeholder=\"Unesite Vaše prezime\"
                                       required>
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                       placeholder=\"Unesite Vašu email adresu\" required>
                            </div>

                            <div class=\"col-12\">
                                <label for=\"comment\" class=\"form-label\">Poruka</label>
                                <textarea class=\"form-control\" id=\"comment\" rows=\"5\" name=\"poruka\" required></textarea>
                            </div>

                            <div class=\"col-auto\">
                                <button class=\"btn btn-solid-default\" type=\"submit\">Pošaljite</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class=\"col-lg-5\">
                    <div class=\"contact-details\">
                        <div>
                            <h2>Budimo u kontaktu</h2>
                            <h5 class=\"font-light\">Slobodno nas možete kontaktirati na neki od ovih načina</h5>
                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"map-pin\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Lokacije :</h4>
                                    <p>Grdovići bb, 31230 Arilje, Srbija</p>
                                    <p>Đorđa Popovića bb, 32000 Čačak, Srbija</p>
                                </div>
                            </div>

                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"phone\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Telefoni :</h4>
                                    <p>031/3893-716</p>
                                    <p>060/3893-716</p>
                                    <p>060/066-89-86</p>
                                    <p>063/663-200</p>
                                </div>
                            </div>

                            <div class=\"contact-box\">
                                <div class=\"contact-icon\">
                                    <i data-feather=\"mail\"></i>
                                </div>
                                <div class=\"contact-title\">
                                    <h4>Email :</h4>
                                    <p>eurofiskal@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section start -->
    <section class=\"contact-section\">
        <div class=\"container-fluid\">
            <div class=\"row gy-4\">

                <div class=\"col-6 p-0\">
                    <div class=\"location-map\">
                        <iframe

                                src=\"https://maps.google.com/maps?q=eurofiskal&t=&z=13&ie=UTF8&iwloc=&output=embed\"
                                loading=\"lazy\"></iframe>
                    </div>
                </div>
                <div class=\"col-6 p-0\">
                    <div class=\"location-map\">
                        <iframe

                                src=\"https://goo.gl/maps/cmoYSjNmQ2So4o7HA\"
                                loading=\"lazy\"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <!-- Subscribe Section Start -->
    {% include 'include/subscribe.html.twig' %}
    <!-- Subscribe Section End -->

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

{% endblock footerjavascript %}", "page/kontakt.html.twig", "/home/prikolic/public_html/prikolica/templates/page/kontakt.html.twig");
    }
}
