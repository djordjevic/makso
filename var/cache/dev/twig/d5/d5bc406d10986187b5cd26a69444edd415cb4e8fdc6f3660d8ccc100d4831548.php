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

/* admin/admin_include/navigation.html.twig */
class __TwigTemplate_9199bb454b0f6a516112bc8e71438f8961dae0471d44300ba11beb47d580d3bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/navigation.html.twig"));

        // line 1
        echo "<div class=\"sidebar-wrapper\">
    <div>
        <div class=\"logo-wrapper logo-wrapper-center\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" data-bs-original-title=\"\" title=\"\">
                <img class=\"img-fluid for-dark\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/logo/logo-white.png"), "html", null, true);
        echo "\" alt=\"logo\">
            </a>
            <div class=\"back-btn\">
                <i class=\"fa fa-angle-left\"></i>
            </div>
";
        // line 13
        echo "        </div>
        <div class=\"logo-icon-wrapper\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                <img class=\"img-fluid main-logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
            </a>
        </div>
        <nav class=\"sidebar-main\">
            <div class=\"left-arrow\" id=\"left-arrow\">
                <i data-feather=\"arrow-left\"></i>
            </div>

            <div id=\"sidebar-menu\">
                <ul class=\"sidebar-links\" id=\"simple-bar\">
                    <li class=\"back-btn\"></li>
                    <li class=\"sidebar-main-title sidebar-main-title-3\">
                        <div>
                            <h6 class=\"lan-1\">Opšte</h6>
                            <p class=\"lan-2\">Kontrolna tabla &amp; korisnici.</p>
                        </div>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                            <i data-feather=\"home\"></i>
                            <span>Kontrolna tabla</span>
                        </a>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"users\"></i>
                            <span>Korisnici</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_companies_list");
        echo "\">Sva pravna lica</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_company");
        echo "\">Dodajte pravno lice</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_list");
        echo "\">Sva fizička lica</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_user");
        echo "\">Dodajte fizičko lice</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_gazdinstva_list");
        echo "\">Sva gazdinstva</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_gazdinstvo");
        echo "\">Dodajte gazdinstvo</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-main-title sidebar-main-title-2\">
                        <div>
                            <h6 class=\"lan-1\">Aplikacija</h6>
                            <p class=\"lan-2\">Upravljajte svojom aplikacijom.</p>
                        </div>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"archive\"></i>
                            <span>Porudžbine</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_orders_list");
        echo "\">Lista porudžbina</a>
                            </li>
";
        // line 90
        echo "                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"users\"></i>
                            <span>Dobavljači</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_vendors_list");
        echo "\">Lista dobavljača</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_vendor");
        echo "\">Dodajte dobavljača</a>
                            </li>
                        </ul>
                    </li>

";
        // line 118
        echo "
";
        // line 122
        echo "
";
        // line 128
        echo "
                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"box\"></i>
                            <span>Proizvodi</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products_list");
        echo "\">Lista proizvoda</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_product");
        echo "\">Dodajte proizvod</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"list\"></i>
                            <span>Kategorije</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories_list");
        echo "\">Lista kategorija</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_category");
        echo "\">Dodajte kategoriju</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"tag\"></i>
                            <span>Atributi</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_attributes_list");
        echo "\">Lista atributa</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_attribute");
        echo "\">Dodajte atribut</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_list");
        echo "\">
                            <i data-feather=\"help-circle\"></i>
                            <span>Lista rezervacija</span>
                        </a>
                    </li>
                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_review_list");
        echo "\">
                            <i data-feather=\"star\"></i>
                            <span>Lista komentara</span>
                        </a>
                    </li>

";
        // line 195
        echo "
";
        // line 202
        echo "

";
        // line 221
        echo "
";
        // line 228
        echo "
";
        // line 235
        echo "
";
        // line 256
        echo "                </ul>
            </div>
            <div class=\"right-arrow\" id=\"right-arrow\">
                <i data-feather=\"arrow-right\"></i>
            </div>
        </nav>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_include/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 256,  296 => 235,  293 => 228,  290 => 221,  286 => 202,  283 => 195,  274 => 183,  265 => 177,  257 => 172,  250 => 168,  235 => 156,  228 => 152,  213 => 140,  206 => 136,  196 => 128,  193 => 122,  190 => 118,  182 => 104,  175 => 100,  163 => 90,  158 => 82,  136 => 63,  130 => 60,  124 => 57,  118 => 54,  112 => 51,  106 => 48,  90 => 35,  68 => 16,  64 => 15,  60 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-wrapper\">
    <div>
        <div class=\"logo-wrapper logo-wrapper-center\">
            <a href=\"{{ path('app_admin') }}\" data-bs-original-title=\"\" title=\"\">
                <img class=\"img-fluid for-dark\" src=\"{{ asset('admin_assets/images/logo/logo-white.png') }}\" alt=\"logo\">
            </a>
            <div class=\"back-btn\">
                <i class=\"fa fa-angle-left\"></i>
            </div>
{#            <div class=\"toggle-sidebar\">#}
{#                <i class=\"status_toggle middle sidebar-toggle\" data-feather=\"grid\"></i>#}
{#            </div>#}
        </div>
        <div class=\"logo-icon-wrapper\">
            <a href=\"{{ path('app_admin') }}\">
                <img class=\"img-fluid main-logo\" src=\"{{ asset('admin_assets/images/logo/logo.png') }}\" alt=\"logo\">
            </a>
        </div>
        <nav class=\"sidebar-main\">
            <div class=\"left-arrow\" id=\"left-arrow\">
                <i data-feather=\"arrow-left\"></i>
            </div>

            <div id=\"sidebar-menu\">
                <ul class=\"sidebar-links\" id=\"simple-bar\">
                    <li class=\"back-btn\"></li>
                    <li class=\"sidebar-main-title sidebar-main-title-3\">
                        <div>
                            <h6 class=\"lan-1\">Opšte</h6>
                            <p class=\"lan-2\">Kontrolna tabla &amp; korisnici.</p>
                        </div>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"{{ path('app_admin') }}\">
                            <i data-feather=\"home\"></i>
                            <span>Kontrolna tabla</span>
                        </a>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"users\"></i>
                            <span>Korisnici</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_companies_list') }}\">Sva pravna lica</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_new_company') }}\">Dodajte pravno lice</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_users_list') }}\">Sva fizička lica</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_new_user') }}\">Dodajte fizičko lice</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_gazdinstva_list') }}\">Sva gazdinstva</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_new_gazdinstvo') }}\">Dodajte gazdinstvo</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-main-title sidebar-main-title-2\">
                        <div>
                            <h6 class=\"lan-1\">Aplikacija</h6>
                            <p class=\"lan-2\">Upravljajte svojom aplikacijom.</p>
                        </div>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"archive\"></i>
                            <span>Porudžbine</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_orders_list') }}\">Lista porudžbina</a>
                            </li>
{#                            <li>#}
{#                                <a href=\"order-detail.html\">Order Detail</a>#}
{#                            </li>#}
{#                            <li>#}
{#                                <a href=\"order-tracking.html\">Order Tracking</a>#}
{#                            </li>#}
                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"users\"></i>
                            <span>Dobavljači</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_vendors_list') }}\">Lista dobavljača</a>
                            </li>

                            <li>
                                <a href=\"{{ path('app_admin_new_vendor') }}\">Dodajte dobavljača</a>
                            </li>
                        </ul>
                    </li>

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">#}
{#                            <i data-feather=\"users\"></i>#}
{#                            <span>Localization</span>#}
{#                        </a>#}
{#                        <ul class=\"sidebar-submenu\">#}
{#                            <li>#}
{#                                <a href=\"translation.html\">Translation</a>#}
{#                            </li>#}

{#                            <li>#}
{#                                <a href=\"currency-rates.html\">Currency Rates</a>#}
{#                            </li>#}

{#                            <li>#}
{#                                <a href=\"taxes.html\">Taxes</a>#}
{#                            </li>#}
{#                        </ul>#}
{#                    </li>#}

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"box\"></i>
                            <span>Proizvodi</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_products_list') }}\">Lista proizvoda</a>
                            </li>

                            <li>
                                <a href=\"{{ path('app_admin_new_product') }}\">Dodajte proizvod</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"list\"></i>
                            <span>Kategorije</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_categories_list') }}\">Lista kategorija</a>
                            </li>

                            <li>
                                <a href=\"{{ path('app_admin_new_category') }}\">Dodajte kategoriju</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-list\">
                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">
                            <i data-feather=\"tag\"></i>
                            <span>Atributi</span>
                        </a>
                        <ul class=\"sidebar-submenu\">
                            <li>
                                <a href=\"{{ path('app_admin_attributes_list') }}\">Lista atributa</a>
                            </li>

                            <li>
                                <a href=\"{{ path('app_admin_new_attribute') }}\">Dodajte atribut</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"{{ path('app_admin_reservation_list') }}\">
                            <i data-feather=\"help-circle\"></i>
                            <span>Lista rezervacija</span>
                        </a>
                    </li>
                    <li class=\"sidebar-list\">
                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"{{ path('app_admin_review_list') }}\">
                            <i data-feather=\"star\"></i>
                            <span>Lista komentara</span>
                        </a>
                    </li>

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"invoice.html\">#}
{#                            <i data-feather=\"archive\"></i>#}
{#                            <span>Računi</span>#}
{#                        </a>#}
{#                    </li>#}

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"support-ticket.html\">#}
{#                            <i data-feather=\"phone\"></i>#}
{#                            <span>Support Ticket</span>#}
{#                        </a>#}
{#                    </li>#}


{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"reports.html\">#}
{#                            <i data-feather=\"file-text\"></i>#}
{#                            <span>Izveštaji</span>#}
{#                        </a>#}
{#                    </li>#}
{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">#}
{#                            <i data-feather=\"settings\"></i>#}
{#                            <span>Podešavanja</span>#}
{#                        </a>#}
{#                        <ul class=\"sidebar-submenu\">#}
{#                            <li>#}
{#                                <a href=\"profile-setting.html\">Profile Setting</a>#}
{#                            </li>#}
{#                        </ul>#}
{#                    </li>#}

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"list-page.html\">#}
{#                            <i data-feather=\"list\"></i>#}
{#                            <span>List Page</span>#}
{#                        </a>#}
{#                    </li>#}

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"login.html\">#}
{#                            <i data-feather=\"log-in\"></i>#}
{#                            <span>Log In</span>#}
{#                        </a>#}
{#                    </li>#}

{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"sidebar-link sidebar-title link-nav\" href=\"forgot-password.html\">#}
{#                            <i data-feather=\"key\"></i>#}
{#                            <span>Forgot Password</span>#}
{#                        </a>#}
{#                    </li>#}
{#                    <li class=\"sidebar-list\">#}
{#                        <a class=\"linear-icon-link sidebar-link sidebar-title\" href=\"javascript:void(0)\">#}
{#                            <i data-feather=\"tag\"></i>#}
{#                            <span>Akcije</span>#}
{#                        </a>#}
{#                        <ul class=\"sidebar-submenu\">#}
{#                            <li>#}
{#                                <a href=\"{{ path('app_admin_actions_list') }}\">Lista akcija</a>#}
{#                            </li>#}
{#                            <li>#}
{#                                <a href=\"{{ path('app_admin_new_action') }}\">Dodajte akciju</a>#}
{#                            </li>#}
{#                        </ul>#}
{#                    </li>#}
                </ul>
            </div>
            <div class=\"right-arrow\" id=\"right-arrow\">
                <i data-feather=\"arrow-right\"></i>
            </div>
        </nav>
    </div>
</div>", "admin/admin_include/navigation.html.twig", "/home/prikolic/public_html/prikolica/templates/admin/admin_include/navigation.html.twig");
    }
}
