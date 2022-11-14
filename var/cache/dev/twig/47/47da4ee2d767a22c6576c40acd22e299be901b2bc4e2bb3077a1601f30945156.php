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

/* page/o_nama.html.twig */
class __TwigTemplate_8b2110f49075038b6c9ae097e4c5a4638df2411a858f194e3c348773aa1e7799 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/o_nama.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/o_nama.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/o_nama.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("O nama - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "page/o_nama.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/o_nama.html.twig", 19)->display($context);
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
                    <h3>O nama</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">O nama</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- team leader section Start -->
    <section class=\"overflow-hidden\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-xl-5 offset-xl-1\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plac/mala1.jpg"), "html", null, true);
        echo "\"
                                 class=\"img-fluid rounded-3 about-image\" alt=\"\">
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plac/mala2.jpg"), "html", null, true);
        echo "\"
                                 class=\"img-fluid rounded-3 about-image\" alt=\"\">
                        </div>
                        <div class=\"col-12 ratio_40\">
                            <div>
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plac/glavna.jpg"), "html", null, true);
        echo "\"
                                     class=\"img-fluid rounded-3 team-image bg-img\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-5\">
                    <div class=\"about-details\">
                        <div>
                            <h2>KO SMO MI</h2>
                            <h3>largest Online fashion destination</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, culpa! Asperiores labore
                                amet nemo ullam odit atque adipisci, hic, aliquid animi fugiat praesentium quidem.
                                Perspiciatis, expedita!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, culpa!
                                Asperiores labore
                                amet nemo ullam odit atque adipisci, hic, aliquid animi fugiat praesentium quidem.
                                Perspiciatis, expedita!</p>
                            <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
        echo "\" type=\"button\"
                                    class=\"btn btn-solid-default\">Prodavnica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team leader section End -->

    <!-- service section start -->
    <section class=\"service-section about-page service-style-2 section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4 g-sm-3\">
                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#customer\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Servis</h3>
                            <span class=\"font-light\">Obezbeđeni rezervni delovi</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#shop\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Dostava</h3>
                            <span class=\"font-light\">Besplatna dostava na kućnu adresu</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#secure-payment\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Plaćanje</h3>
                            <span class=\"font-light\">Plaćanje čekovima građana do 6 rata</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#return\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Free Returns</h3>
                            <span class=\"font-light\">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- Subscribe Section Start -->
    ";
        // line 165
        $this->loadTemplate("include/subscribe.html.twig", "page/o_nama.html.twig", 165)->display($context);
        // line 166
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 169
        $this->loadTemplate("include/footer.html.twig", "page/o_nama.html.twig", 169)->display($context);
        // line 170
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 174
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 178
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 182
        echo "    ";
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        // line 185
        echo "    ";
        // line 186
        echo "    ";
        // line 187
        echo "    ";
        // line 188
        echo "    ";
        // line 189
        echo "    ";
        // line 190
        echo "    ";
        // line 191
        echo "    ";
        // line 192
        echo "    ";
        // line 193
        echo "    ";
        // line 194
        echo "    ";
        // line 195
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 198
        $this->loadTemplate("include/top.html.twig", "page/o_nama.html.twig", 198)->display($context);
        // line 199
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 205
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/o_nama.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 205,  370 => 204,  357 => 199,  355 => 198,  350 => 195,  348 => 194,  346 => 193,  344 => 192,  342 => 191,  340 => 190,  338 => 189,  336 => 188,  334 => 187,  332 => 186,  330 => 185,  328 => 184,  326 => 183,  324 => 182,  319 => 178,  314 => 174,  309 => 170,  307 => 169,  302 => 166,  300 => 165,  222 => 90,  200 => 71,  192 => 66,  185 => 62,  162 => 42,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'O nama - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>O nama</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">O nama</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- team leader section Start -->
    <section class=\"overflow-hidden\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-xl-5 offset-xl-1\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <img src=\"{{ asset('assets/images/plac/mala1.jpg') }}\"
                                 class=\"img-fluid rounded-3 about-image\" alt=\"\">
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"{{ asset('assets/images/plac/mala2.jpg') }}\"
                                 class=\"img-fluid rounded-3 about-image\" alt=\"\">
                        </div>
                        <div class=\"col-12 ratio_40\">
                            <div>
                                <img src=\"{{ asset('assets/images/plac/glavna.jpg') }}\"
                                     class=\"img-fluid rounded-3 team-image bg-img\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-5\">
                    <div class=\"about-details\">
                        <div>
                            <h2>KO SMO MI</h2>
                            <h3>largest Online fashion destination</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, culpa! Asperiores labore
                                amet nemo ullam odit atque adipisci, hic, aliquid animi fugiat praesentium quidem.
                                Perspiciatis, expedita!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, culpa!
                                Asperiores labore
                                amet nemo ullam odit atque adipisci, hic, aliquid animi fugiat praesentium quidem.
                                Perspiciatis, expedita!</p>
                            <a href=\"{{ path('prodavnica_prikolica') }}\" type=\"button\"
                                    class=\"btn btn-solid-default\">Prodavnica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team leader section End -->

    <!-- service section start -->
    <section class=\"service-section about-page service-style-2 section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4 g-sm-3\">
                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#customer\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Servis</h3>
                            <span class=\"font-light\">Obezbeđeni rezervni delovi</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#shop\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Dostava</h3>
                            <span class=\"font-light\">Besplatna dostava na kućnu adresu</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#secure-payment\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Plaćanje</h3>
                            <span class=\"font-light\">Plaćanje čekovima građana do 6 rata</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-sm-6\">
                    <div class=\"service-wrap\">
                        <div class=\"service-icon\">
                            <svg>
                                <use xlink:href=\"assets/svg/icons.svg#return\"></use>
                            </svg>
                        </div>
                        <div class=\"service-content\">
                            <h3 class=\"mb-2\">Free Returns</h3>
                            <span class=\"font-light\">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

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

{% endblock footerjavascript %}", "page/o_nama.html.twig", "/home/prikolic/public_html/prikolica/templates/page/o_nama.html.twig");
    }
}
