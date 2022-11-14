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

/* shop/izdavanje.html.twig */
class __TwigTemplate_4cd9944e141501272edd3aafa9d5ca6a492410587b4e5259a7c84cb68f8a25a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/izdavanje.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/izdavanje.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/izdavanje.html.twig", 1);
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
        $this->loadTemplate("include/header.html.twig", "shop/izdavanje.html.twig", 15)->display($context);
        // line 16
        echo "    <!-- mobile fix menu -->
    ";
        // line 17
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/izdavanje.html.twig", 17)->display($context);
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
                    <h3>Izdavanje auto prikolica</h3>
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
        <section class=\"section-b-space\">
            <div class=\"container\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"mb-3\">Upit za proveru dostupnosti</h3>
                        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "
                            <div class=\"row g-4\">
                                <div class=\"col-md-4\">
                                    <label for=\"fname\" class=\"form-label\">Ime i prezime</label>
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "ime", [], "any", false, false, false, 62), 'widget');
        echo "
                                </div>
                                <div class=\"col-md-4\">
                                    <label for=\"lname\" class=\"form-label\">Email</label>
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'widget');
        echo "
                                </div>
                                <div class=\"col-md-4\">
                                    <label for=\"mobilni\" class=\"form-label\">Broj telefona</label>
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "mobilni", [], "any", false, false, false, 70), 'widget');
        echo "
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"lname\" class=\"form-label\">Datum početka iznajmljivanja</label>
                                    <div class=\"input-group\">
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "startDate", [], "any", false, false, false, 75), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"lname\" class=\"form-label\">Datum završetka iznajmljivanja</label>
                                    <div class=\"input-group\">
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "endDate", [], "any", false, false, false, 81), 'widget');
        echo "
                                    </div>
                                </div>
                                <button class=\"btn btn-solid-default mt-4\" type=\"submit\">Pošaljite upit</button>
                            </div>
                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Shop Section end -->

    <!-- footer start -->
    ";
        // line 96
        $this->loadTemplate("include/footer.html.twig", "shop/izdavanje.html.twig", 96)->display($context);
        // line 97
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 101
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 105
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 109
        echo "    ";
        // line 110
        echo "    ";
        // line 111
        echo "    ";
        // line 112
        echo "    ";
        // line 113
        echo "    ";
        // line 114
        echo "    ";
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        // line 117
        echo "    ";
        // line 118
        echo "    ";
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        // line 121
        echo "    ";
        // line 122
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 125
        $this->loadTemplate("include/top.html.twig", "shop/izdavanje.html.twig", 125)->display($context);
        // line 126
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/izdavanje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 131,  288 => 126,  286 => 125,  281 => 122,  279 => 121,  277 => 120,  275 => 119,  273 => 118,  271 => 117,  269 => 116,  267 => 115,  265 => 114,  263 => 113,  261 => 112,  259 => 111,  257 => 110,  255 => 109,  250 => 105,  245 => 101,  240 => 97,  238 => 96,  225 => 86,  217 => 81,  208 => 75,  200 => 70,  193 => 66,  186 => 62,  179 => 58,  157 => 39,  134 => 18,  132 => 17,  129 => 16,  127 => 15,  124 => 14,  114 => 13,  102 => 10,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
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
                    <h3>Izdavanje auto prikolica</h3>
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
        <section class=\"section-b-space\">
            <div class=\"container\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"mb-3\">Upit za proveru dostupnosti</h3>
                        {{ form_start(form, {'attr': {'class' : 'needs-validation'}})}}
                            <div class=\"row g-4\">
                                <div class=\"col-md-4\">
                                    <label for=\"fname\" class=\"form-label\">Ime i prezime</label>
                                    {{ form_widget(form.ime) }}
                                </div>
                                <div class=\"col-md-4\">
                                    <label for=\"lname\" class=\"form-label\">Email</label>
                                    {{ form_widget(form.email) }}
                                </div>
                                <div class=\"col-md-4\">
                                    <label for=\"mobilni\" class=\"form-label\">Broj telefona</label>
                                    {{ form_widget(form.mobilni) }}
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"lname\" class=\"form-label\">Datum početka iznajmljivanja</label>
                                    <div class=\"input-group\">
                                        {{ form_widget(form.startDate) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"lname\" class=\"form-label\">Datum završetka iznajmljivanja</label>
                                    <div class=\"input-group\">
                                        {{ form_widget(form.endDate) }}
                                    </div>
                                </div>
                                <button class=\"btn btn-solid-default mt-4\" type=\"submit\">Pošaljite upit</button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </section>
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
{% endblock footerjavascript %}
", "shop/izdavanje.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/izdavanje.html.twig");
    }
}
