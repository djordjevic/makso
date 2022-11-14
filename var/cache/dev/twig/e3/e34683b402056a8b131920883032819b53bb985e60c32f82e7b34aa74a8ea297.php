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

/* include/slider.html.twig */
class __TwigTemplate_5aa0128f90a92e7273f01029933591565513c5485bc2203fe970548415c31124 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/slider.html.twig"));

        // line 1
        echo "<section class=\"home-section\">
    <div class=\"container-fluid\">
        <div class=\"slick-1 classic-arrow\">
            <div>
                <div class=\"home-slider\">
";
        // line 7
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/naslovna/landing2.jpg"), "html", null, true);
        echo "\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"home-wrap row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-9 left-content\">
                            <div>
                                <div class=\"offer-wrap\">
";
        // line 14
        echo "                                </div>
                                <div class=\"home-content\">
                                    <h1 data-animation-in=\"fadeInUp\">Dobro došli</h1>
                                    <h1 class=\"mb-2 theme-color\" data-delay-in=\"0.3\" data-animation-in=\"fadeInUp\">prikolica.shop</h1>
                                    <h3 class=\"mb-4 d-sm-block d-none \" data-animation-in=\"fadeInUp\"
                                        data-delay-in=\"0.4\">
                                        Najveći izbor prikolica za Vas </h3>
                                    <h3 class=\"mb-3\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.5\"></h3>
                                    <p class=\"mb-0 d-sm-block d-none\" data-animation-in=\"fadeInUp\"
                                       data-delay-in=\"0.6\">
                                        Asortiman od preko 25 modela prikolica i dodatne opreme
                                    </p>
                                    <div class=\"discover-block d-sm-block d-none\" data-animation-in=\"fadeInUp\"
                                         data-delay-in=\"0.7\">
                                        <div class=\"d-flex\">
                                            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
        echo "\" class=\"play-icon theme-bg-color\">
                                                <i class=\"fas fa-play\"></i>
                                            </a>
                                            <div class=\"discover-content\">
                                                <h4 class=\"theme-color mb-1\">Otkrijte</h4>
                                                <h5>Naše proizvode</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 offset-lg-4 right-content d-lg-flex d-none\">
                            <div>
                                <h2 class=\"mb-2\" data-animation-in=\"fadeInUp\">Najpopularniji proizvodi</h2>
                                <p class=\"mb-0\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.4\"></p>
                                <div data-animation-in=\"fadeInUp\" data-delay-in=\"0.5\">
";
        // line 55
        echo "
";
        // line 57
        echo "                                </div>
                            </div>
                            <div class=\"home-social\">
                                <ul>
                                    <li>
                                        <a href=\"https://www.facebook.com/trigano.arilje.7\" class=\"font-default\">
                                            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/social-icon/1.png"), "html", null, true);
        echo "\"
                                                 class=\"img-fluid blur-up lazyload\" alt=\"\">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"https://www.instagram.com/triganoprikolicearilje1/\" class=\"font-default\">
                                            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/social-icon/2.png"), "html", null, true);
        echo "\"
                                                 class=\"img-fluid blur-up lazyload\" alt=\"\">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"group-btn\">
                        <a href = \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("o-nama");
        echo "\" type=\"button\"
                                class=\"btn btn-solid-default\">Više o nama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 80,  117 => 70,  107 => 63,  99 => 57,  96 => 55,  76 => 29,  59 => 14,  50 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"home-section\">
    <div class=\"container-fluid\">
        <div class=\"slick-1 classic-arrow\">
            <div>
                <div class=\"home-slider\">
{#                    <img src=\"{{ asset('assets/images/electronics/slider/1.jpg') }}\" class=\"bg-img blur-up lazyload\" alt=\"\">#}
                    <img src=\"{{ asset('assets/images/naslovna/landing2.jpg') }}\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"home-wrap row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-9 left-content\">
                            <div>
                                <div class=\"offer-wrap\">
{#                                    <h4 class=\"theme-color mb-2\">naziv akcije</h4>#}
{#                                    <h6>opis akcije</h6>#}
                                </div>
                                <div class=\"home-content\">
                                    <h1 data-animation-in=\"fadeInUp\">Dobro došli</h1>
                                    <h1 class=\"mb-2 theme-color\" data-delay-in=\"0.3\" data-animation-in=\"fadeInUp\">prikolica.shop</h1>
                                    <h3 class=\"mb-4 d-sm-block d-none \" data-animation-in=\"fadeInUp\"
                                        data-delay-in=\"0.4\">
                                        Najveći izbor prikolica za Vas </h3>
                                    <h3 class=\"mb-3\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.5\"></h3>
                                    <p class=\"mb-0 d-sm-block d-none\" data-animation-in=\"fadeInUp\"
                                       data-delay-in=\"0.6\">
                                        Asortiman od preko 25 modela prikolica i dodatne opreme
                                    </p>
                                    <div class=\"discover-block d-sm-block d-none\" data-animation-in=\"fadeInUp\"
                                         data-delay-in=\"0.7\">
                                        <div class=\"d-flex\">
                                            <a href=\"{{ path('prodavnica_prikolica') }}\" class=\"play-icon theme-bg-color\">
                                                <i class=\"fas fa-play\"></i>
                                            </a>
                                            <div class=\"discover-content\">
                                                <h4 class=\"theme-color mb-1\">Otkrijte</h4>
                                                <h5>Naše proizvode</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 offset-lg-4 right-content d-lg-flex d-none\">
                            <div>
                                <h2 class=\"mb-2\" data-animation-in=\"fadeInUp\">Najpopularniji proizvodi</h2>
                                <p class=\"mb-0\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.4\"></p>
                                <div data-animation-in=\"fadeInUp\" data-delay-in=\"0.5\">
{#                         ako nema slike dodati           <ul>#}
{#                                        {% for t in top %}#}
{#                                        <li>#}
{#                                            <a href=\"{{ path('proizvod', {'id': t.proizvod.getId()}) }}\">#}
{#                                                <img src=\"{{ asset(t.proizvod.getSlikaMain()) }}\" width=\"160\" height=\"110\"#}
{#                                                     class=\"img-thumbnail blur-up lazyload\" alt=\"\">#}
{#                                            </a>#}
{#                                        </li>#}
{#                                        {% endfor %}#}

{#                                    </ul>#}
                                </div>
                            </div>
                            <div class=\"home-social\">
                                <ul>
                                    <li>
                                        <a href=\"https://www.facebook.com/trigano.arilje.7\" class=\"font-default\">
                                            <img src=\"{{ asset('assets/images/social-icon/1.png') }}\"
                                                 class=\"img-fluid blur-up lazyload\" alt=\"\">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"https://www.instagram.com/triganoprikolicearilje1/\" class=\"font-default\">
                                            <img src=\"{{ asset('assets/images/social-icon/2.png') }}\"
                                                 class=\"img-fluid blur-up lazyload\" alt=\"\">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"group-btn\">
                        <a href = \"{{ path('o-nama') }}\" type=\"button\"
                                class=\"btn btn-solid-default\">Više o nama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "include/slider.html.twig", "/home/prikolic/public_html/prikolica/templates/include/slider.html.twig");
    }
}
