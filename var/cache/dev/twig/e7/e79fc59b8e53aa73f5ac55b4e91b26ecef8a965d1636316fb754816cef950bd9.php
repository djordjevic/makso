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

/* include/header.html.twig */
class __TwigTemplate_a4383615f16e36226d3fb62595989adb85b63ce4b9532b7310a7a878c3d6a852 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/header.html.twig"));

        // line 1
        echo "<header id=\"home\">
    <div class=\"top-header\">
        <div class=\"container-fluid-lg\">
            <div class=\"row\">
                <div class=\"col-auto\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"phone\"></i> <span class=\"fw-bold\"> 031/3893-716</span></p>
                </div>
                <div class=\"col-auto d-sm-block d-none\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"map-pin\"></i> <span class=\"fw-bold\"> Grdovići bb, 31230 Arilje</span></p>
                </div>
                <div class=\"col-auto d-sm-block d-none\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"map-pin\"></i> <span class=\"fw-bold\"> Đorđa Popovića bb, 32000 Čačak</span></p>
                </div>
                <div class=\"col-auto\">
                    <ul class=\"border-list\">
                        <li>
                            <div class=\"dropdown top-header-dropdown\">
                                ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "getFirmaIliFizickoLice", [], "any", false, false, false, 19) == 1)) {
                // line 20
                echo "                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "getNazivFirme", [], "method", false, false, false, 22), "html", null, true);
                echo "</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 27
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma");
                echo "\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 30
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "getFirmaIliFizickoLice", [], "any", false, false, false, 33) == 4)) {
                // line 34
                echo "                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "getFirstName", [], "method", false, false, false, 36), "html", null, true);
                echo "</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gazdinstvo");
                echo "\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    ";
            } else {
                // line 48
                echo "                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "getFirstName", [], "method", false, false, false, 50), "html", null, true);
                echo "</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
                echo "\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    ";
            }
            // line 62
            echo "                                ";
        } else {
            // line 63
            echo "                                    <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                       id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                        <span>Korisnik</span>
                                        <i class=\"fas fa-chevron-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                        <li class=\"w-100\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Prijavite se</a>
                                        </li>
                                        <li class=\"w-100\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("izbor_registracije");
            echo "\">Registrujte se</a>
                                        </li>
                                    </ul>
                                ";
        }
        // line 77
        echo "                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main-header navbar-searchbar\">
        <div class=\"container-fluid-lg\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"main-menu\">
                        <div class=\"menu-left\">
                            <div class=\"brand-logo\">
                                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_test_2.png"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\" alt=\"logo\">
                                </a>
                            </div>
                        </div>
                        <nav>
                            <div class=\"main-navbar\">
                                <div id=\"mainnav\">
                                    <div class=\"toggle-nav me-3\"><i class=\"fa fa-bars sidebar-bar\"></i></div>
                                    <ul class=\"nav-menu\">
                                        <li class=\"back-btn d-xl-none\">
                                            <div class=\"close-btn\">
                                                Menu
                                                <span class=\"mobile-back\"><i class=\"fa fa-angle-left\"></i>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\" class=\"nav-link menu-title\">Početna</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
        echo "\" class=\"nav-link menu-title\">Prikolice</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_traktor");
        echo "\" class=\"nav-link menu-title\">Traktori</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_kuka");
        echo "\" class=\"nav-link menu-title\">Kuke</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_izdavanje");
        echo "\" class=\"nav-link menu-title theme-color\">Izdavanje</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerija");
        echo "\" class=\"nav-link menu-title\">Galerija</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("o-nama");
        echo "\" class=\"nav-link menu-title\">O nama</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontakt");
        echo "\" class=\"nav-link menu-title\">Kontakt</a>
                                        </li>

";
        // line 142
        echo "                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class=\"menu-right\">
                            <ul>
                                <li>
                                    <div class=\"search-box theme-bg-color\">
                                        <i data-feather=\"search\"></i>
                                    </div>
                                </li>
";
        // line 174
        echo "                                <li class=\"onhover-dropdown cart-dropdown\">
                                    <a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa");
        echo "\" class=\"btn btn-solid-default btn-spacing\">
                                        <i data-feather=\"shopping-cart\" class=\"pe-2\"></i>
                                        <span>Korpa</span>
                                    </a>
";
        // line 242
        echo "                                </li>
                            </ul>
                        </div>

                            <div class=\"search-full\">
                                <form id=\"search\" action=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pretraga");
        echo "\" method=\"get\" class=\"w-100\">
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"keywords\" class=\"form-control search-type\" placeholder=\"Unesite pojam za pretragu\">
                                    <span class=\"input-group-text\"><a href=\"#\" onclick=\"myFunction()\"><i data-feather=\"search\" class=\"font-light\"></i></a></span>
                                    <span class=\"input-group-text close-search\"><i data-feather=\"x\" class=\"font-light\"></i></span>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 247,  279 => 242,  272 => 175,  269 => 174,  256 => 142,  250 => 130,  244 => 127,  238 => 124,  232 => 121,  226 => 118,  220 => 115,  214 => 112,  208 => 109,  188 => 92,  184 => 91,  168 => 77,  161 => 73,  155 => 70,  146 => 63,  143 => 62,  136 => 58,  130 => 55,  122 => 50,  118 => 48,  111 => 44,  105 => 41,  97 => 36,  93 => 34,  91 => 33,  85 => 30,  79 => 27,  71 => 22,  67 => 20,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"home\">
    <div class=\"top-header\">
        <div class=\"container-fluid-lg\">
            <div class=\"row\">
                <div class=\"col-auto\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"phone\"></i> <span class=\"fw-bold\"> 031/3893-716</span></p>
                </div>
                <div class=\"col-auto d-sm-block d-none\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"map-pin\"></i> <span class=\"fw-bold\"> Grdovići bb, 31230 Arilje</span></p>
                </div>
                <div class=\"col-auto d-sm-block d-none\">
                    <p class=\"font-dark-30 mb-0\"><i data-feather=\"map-pin\"></i> <span class=\"fw-bold\"> Đorđa Popovića bb, 32000 Čačak</span></p>
                </div>
                <div class=\"col-auto\">
                    <ul class=\"border-list\">
                        <li>
                            <div class=\"dropdown top-header-dropdown\">
                                {% if app.user %}
                                    {% if app.user.getFirmaIliFizickoLice == 1 %}
                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>{{ app.user.getNazivFirme() }}</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_firma') }}\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    {% elseif app.user.getFirmaIliFizickoLice == 4 %}
                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>{{ app.user.getFirstName() }}</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_gazdinstvo') }}\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    {% else %}
                                        <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                           id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                            <span>{{ app.user.getFirstName() }}</span>
                                            <i class=\"fas fa-chevron-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_profil') }}\">Vaš profil</a>
                                            </li>
                                            <li class=\"w-100\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Odjavite se</a>
                                            </li>
                                        </ul>
                                    {% endif %}
                                {% else %}
                                    <a class=\"dropdown-toggle\" href=\"javascript:void(0)\" role=\"button\"
                                       id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\">
                                        <span>Korisnik</span>
                                        <i class=\"fas fa-chevron-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink\">
                                        <li class=\"w-100\">
                                            <a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Prijavite se</a>
                                        </li>
                                        <li class=\"w-100\">
                                            <a class=\"dropdown-item\" href=\"{{ path('izbor_registracije') }}\">Registrujte se</a>
                                        </li>
                                    </ul>
                                {% endif %}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main-header navbar-searchbar\">
        <div class=\"container-fluid-lg\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"main-menu\">
                        <div class=\"menu-left\">
                            <div class=\"brand-logo\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <img src=\"{{ asset('assets/images/logo_test_2.png') }}\" class=\"img-fluid blur-up lazyload\" alt=\"logo\">
                                </a>
                            </div>
                        </div>
                        <nav>
                            <div class=\"main-navbar\">
                                <div id=\"mainnav\">
                                    <div class=\"toggle-nav me-3\"><i class=\"fa fa-bars sidebar-bar\"></i></div>
                                    <ul class=\"nav-menu\">
                                        <li class=\"back-btn d-xl-none\">
                                            <div class=\"close-btn\">
                                                Menu
                                                <span class=\"mobile-back\"><i class=\"fa fa-angle-left\"></i>
                                                    </span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('pocetna') }}\" class=\"nav-link menu-title\">Početna</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('prodavnica_prikolica') }}\" class=\"nav-link menu-title\">Prikolice</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('prodavnica_traktor') }}\" class=\"nav-link menu-title\">Traktori</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('prodavnica_kuka') }}\" class=\"nav-link menu-title\">Kuke</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('prodavnica_izdavanje') }}\" class=\"nav-link menu-title theme-color\">Izdavanje</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('galerija') }}\" class=\"nav-link menu-title\">Galerija</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('o-nama') }}\" class=\"nav-link menu-title\">O nama</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('kontakt') }}\" class=\"nav-link menu-title\">Kontakt</a>
                                        </li>

{#                                        <li class=\"mobile-poster d-flex d-xl-none\">#}
{#                                            <img src=\"{{ asset('assets/images/pwa.png') }}\" class=\"img-fluid\" alt=\"\">#}
{#                                            <div class=\"mobile-contain\">#}
{#                                                <h5>Sviđa Vam se app-like iskustvo?</h5>#}
{#                                                <p class=\"font-light\">Sa ovom opcijom možete koristiti sajt kao aplikaciju.</p>#}
{#                                                <a href=\"javascript:void(0)\" id=\"installApp\"#}
{#                                                   class=\"btn btn-solid-default btn-spacing w-100\">DODAJTE NA DESKTOP TELEFONA</a>#}
{#                                            </div>#}
{#                                        </li>#}
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class=\"menu-right\">
                            <ul>
                                <li>
                                    <div class=\"search-box theme-bg-color\">
                                        <i data-feather=\"search\"></i>
                                    </div>
                                </li>
{#                                <li class=\"onhover-dropdown wislist-dropdown\">#}
{#                                    <div class=\"cart-media\">#}
{#                                        <div class=\"cart-icon\">#}
{#                                            <i data-feather=\"heart\"></i>#}
{#                                            <span class=\"label label-theme rounded-pill\">0</span>#}
{#                                        </div>#}
{#                                        <div class=\"cart-content\">#}
{#                                            <h6>Empty</h6>#}
{#                                            <span>Wish List</span>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"onhover-div\">#}
{#                                        <a href=\"wishlist.html\">#}
{#                                            <div class=\"wislist-empty\">#}
{#                                                <i class=\"fab fa-gratipay\"></i>#}
{#                                                <h6 class=\"mb-1\">Your wislist empty !!</h6>#}
{#                                                <p class=\"font-light mb-0\">explore more and shortlist items.</p>#}
{#                                            </div>#}
{#                                        </a>#}
{#                                    </div>#}
{#                                </li>#}
                                <li class=\"onhover-dropdown cart-dropdown\">
                                    <a href=\"{{ path('korpa') }}\" class=\"btn btn-solid-default btn-spacing\">
                                        <i data-feather=\"shopping-cart\" class=\"pe-2\"></i>
                                        <span>Korpa</span>
                                    </a>
{#                                    <div class=\"onhover-div\">#}
{#                                        <div class=\"cart-menu\">#}
{#                                            <div class=\"cart-title\">#}
{#                                                <h6>#}
{#                                                    <i data-feather=\"shopping-bag\"></i>#}
{#                                                    <span class=\"label label-theme rounded-pill\">5</span>#}
{#                                                </h6>#}
{#                                                <span class=\"d-md-none d-block\">#}
{#                                                        <i class=\"fas fa-arrow-right back-cart\"></i>#}
{#                                                    </span>#}
{#                                            </div>#}
{#                                            <ul class=\"custom-scroll\">#}
{#                                                <li>#}
{#                                                    <div class=\"media\">#}
{#                                                        <img src=\"assets/images/fashion/product/front/1.jpg\"#}
{#                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">#}
{#                                                        <div class=\"media-body\">#}
{#                                                            <h6>Slim Fit Plastic Coat</h6>#}
{#                                                            <div class=\"qty-with-price\">#}
{#                                                                <span>\$78.00</span>#}
{#                                                                <span>#}
{#                                                                        <input type=\"number\" class=\"form-control\"#}
{#                                                                               value=\"1\">#}
{#                                                                    </span>#}
{#                                                            </div>#}
{#                                                        </div>#}
{#                                                        <button type=\"button\" class=\"btn-close d-block d-md-none\"#}
{#                                                                aria-label=\"Close\">#}
{#                                                            <i class=\"fas fa-times\"></i>#}
{#                                                        </button>#}
{#                                                    </div>#}
{#                                                </li>#}
{#                                                <li>#}
{#                                                    <div class=\"media\">#}
{#                                                        <img src=\"assets/images/fashion/product/front/7.jpg\"#}
{#                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">#}
{#                                                        <div class=\"media-body\">#}
{#                                                            <h6>Womens Stylish Jacket</h6>#}
{#                                                            <div class=\"qty-with-price\">#}
{#                                                                <span>\$24.00</span>#}
{#                                                                <span>#}
{#                                                                        <input type=\"number\" class=\"form-control\"#}
{#                                                                               value=\"1\">#}
{#                                                                    </span>#}
{#                                                            </div>#}
{#                                                        </div>#}
{#                                                        <button type=\"button\" class=\"btn-close d-block d-md-none\"#}
{#                                                                aria-label=\"Close\">#}
{#                                                            <i class=\"fas fa-times\"></i>#}
{#                                                        </button>#}
{#                                                    </div>#}
{#                                                </li>#}
{#                                            </ul>#}
{#                                        </div>#}
{#                                        <div class=\"cart-btn\">#}
{#                                            <h6 class=\"cart-total\"><span class=\"font-light\">Total:</span> \$#}
{#                                                542.00</h6>#}
{#                                            <button onclick=\"location.href = 'cart.html';\" type=\"button\"#}
{#                                                    class=\"btn btn-solid-default btn-block\">#}
{#                                                Proceed to payment#}
{#                                            </button>#}
{#                                        </div>#}
{#                                    </div>#}
                                </li>
                            </ul>
                        </div>

                            <div class=\"search-full\">
                                <form id=\"search\" action=\"{{ path('pretraga') }}\" method=\"get\" class=\"w-100\">
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"keywords\" class=\"form-control search-type\" placeholder=\"Unesite pojam za pretragu\">
                                    <span class=\"input-group-text\"><a href=\"#\" onclick=\"myFunction()\"><i data-feather=\"search\" class=\"font-light\"></i></a></span>
                                    <span class=\"input-group-text close-search\"><i data-feather=\"x\" class=\"font-light\"></i></span>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "include/header.html.twig", "/home/prikolic/public_html/prikolica/templates/include/header.html.twig");
    }
}
