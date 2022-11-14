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

/* admin/admin_include/header.html.twig */
class __TwigTemplate_03c96fee93dbf3338c6b8c348bac0f6abf214e3c8ef8b879f9f0b95fed3fbf4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/header.html.twig"));

        // line 1
        echo "<div class=\"page-header\">
    <div class=\"header-wrapper row m-0\">
        <div class=\"header-logo-wrapper col-auto p-0\">
            <div class=\"logo-wrapper\">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                    <img class=\"img-fluid main-logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    <img class=\"img-fluid white-logo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/logo/logo-white.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            <div class=\"toggle-sidebar\">
                <i class=\"status_toggle middle sidebar-toggle\" data-feather=\"align-center\"></i>
            </div>
        </div>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"bg-success col-3 text-center\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"bg-primary col-3 text-center\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <form class=\"form-inline search-full col\" action=\"javascript:void(0)\" method=\"get\">
";
        // line 38
        echo "        </form>
        <div class=\"nav-right col-4 pull-right right-header p-0\">
            <ul class=\"nav-menus\">
";
        // line 86
        echo "
                <li>
                    <div class=\"mode\">
                        <span class=\"lnr lnr-moon\"></span>
                    </div>
                </li>

";
        // line 141
        echo "
                <li class=\"maximize\">
                    <a class=\"text-dark\" href=\"javascript:void(0)!\" onclick=\"javascript:toggleFullScreen()\">
                        <span class=\"lnr lnr-frame-expand\"></span>
                    </a>
                </li>
                <li class=\"profile-nav onhover-dropdown pe-0 me-0\">
                    <div class=\"media profile-media\">
                        <div class=\"user-name-hide media-body\">
                            <span>";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "getFirstName", [], "method", false, false, false, 150), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "getLastName", [], "method", false, false, false, 150), "html", null, true);
        echo "</span>
                            <p class=\"mb-0 font-roboto\">Admin<i class=\"middle fa fa-angle-down\"></i></p>
                        </div>
                    </div>
                    <ul class=\"profile-dropdown onhover-show-div\">
";
        // line 179
        echo "                        <li>
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\"
                               href=\"javascript:void(0)\">
                                <i data-feather=\"log-out\"></i>
                                <span>Odjavite se</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_include/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 179,  128 => 150,  117 => 141,  108 => 86,  103 => 38,  100 => 24,  91 => 21,  88 => 20,  83 => 19,  74 => 16,  71 => 15,  67 => 14,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-header\">
    <div class=\"header-wrapper row m-0\">
        <div class=\"header-logo-wrapper col-auto p-0\">
            <div class=\"logo-wrapper\">
                <a href=\"{{ path('app_admin') }}\">
                    <img class=\"img-fluid main-logo\" src=\"{{ asset('admin_assets/images/logo/logo.png') }}\" alt=\"logo\">
                    <img class=\"img-fluid white-logo\" src=\"{{ asset('admin_assets/images/logo/logo-white.png') }}\" alt=\"logo\">
                </a>
            </div>
            <div class=\"toggle-sidebar\">
                <i class=\"status_toggle middle sidebar-toggle\" data-feather=\"align-center\"></i>
            </div>
        </div>
        {% for message in app.flashes('notice') %}
            <div class=\"bg-success col-3 text-center\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('warning') %}
            <div class=\"bg-primary col-3 text-center\">
                {{ message }}
            </div>
        {% endfor %}
        <form class=\"form-inline search-full col\" action=\"javascript:void(0)\" method=\"get\">
{#            <div class=\"form-group w-100\">#}
{#                <div class=\"Typeahead Typeahead--twitterUsers\">#}
{#                    <div class=\"u-posRelative\">#}
{#                        <input class=\"demo-input Typeahead-input form-control-plaintext w-100\" type=\"text\"#}
{#                               placeholder=\"Search Voxo ..\" name=\"q\" title=\"\" autofocus>#}
{#                        <i class=\"close-search\" data-feather=\"x\"></i>#}
{#                        <div class=\"spinner-border Typeahead-spinner\" role=\"status\">#}
{#                            <span class=\"sr-only\">Loading...</span>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"Typeahead-menu\"></div>#}
{#                </div>#}
{#            </div>#}
        </form>
        <div class=\"nav-right col-4 pull-right right-header p-0\">
            <ul class=\"nav-menus\">
{#                <li>#}
{#                            <span class=\"header-search\">#}
{#                                <span class=\"lnr lnr-magnifier\"></span>#}
{#                            </span>#}
{#                </li>#}
{#                <li class=\"onhover-dropdown\">#}
{#                    <div class=\"notification-box\">#}
{#                        <span class=\"lnr lnr-alarm\"></span>#}
{#                        <span class=\"badge rounded-pill badge-theme\">4</span>#}
{#                    </div>#}
{#                    <ul class=\"notification-dropdown onhover-show-div\">#}
{#                        <li>#}
{#                            <span class=\"lnr lnr-alarm\"></span>#}
{#                            <h6 class=\"f-18 mb-0\">Notitications</h6>#}
{#                        </li>#}
{#                        <li>#}
{#                            <p>#}
{#                                <i class=\"fa fa-circle-o me-3 font-primary\"></i>Delivery processing <span#}
{#                                        class=\"pull-right\">10#}
{#                                            min.</span>#}
{#                            </p>#}
{#                        </li>#}
{#                        <li>#}
{#                            <p>#}
{#                                <i class=\"fa fa-circle-o me-3 font-success\"></i>Order Complete<span#}
{#                                        class=\"pull-right\">1 hr</span>#}
{#                            </p>#}
{#                        </li>#}
{#                        <li>#}
{#                            <p>#}
{#                                <i class=\"fa fa-circle-o me-3 font-info\"></i>Tickets Generated<span#}
{#                                        class=\"pull-right\">3 hr</span>#}
{#                            </p>#}
{#                        </li>#}
{#                        <li>#}
{#                            <p>#}
{#                                <i class=\"fa fa-circle-o me-3 font-danger\"></i>Delivery Complete<span#}
{#                                        class=\"pull-right\">6 hr</span>#}
{#                            </p>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a class=\"btn btn-primary\" href=\"javascript:void(0)\">Check all notification</a>#}
{#                        </li>#}
{#                    </ul>#}
{#                </li>#}

                <li>
                    <div class=\"mode\">
                        <span class=\"lnr lnr-moon\"></span>
                    </div>
                </li>

{#                <li class=\"onhover-dropdown\">#}
{#                    <span class=\"lnr lnr-bubble\"></span>#}
{#                    <ul class=\"chat-dropdown onhover-show-div\">#}
{#                        <li>#}
{#                            <span class=\"lnr lnr-bubble\"></span>#}
{#                            <h6 class=\"f-18 mb-0\">Message Box</h6>#}
{#                        </li>#}
{#                        <li>#}
{#                            <div class=\"media\">#}
{#                                <img class=\"img-fluid rounded-circle me-3\" src=\"assets/images/user/1.jpg\"#}
{#                                     alt=\"user1\">#}
{#                                <div class=\"status-circle online\"></div>#}
{#                                <div class=\"media-body\">#}
{#                                    <span>Erica Hughes</span>#}
{#                                    <p>Lorem Ipsum is simply dummy...</p>#}
{#                                </div>#}
{#                                <p class=\"f-12 font-success\">58 mins ago</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li>#}
{#                            <div class=\"media\">#}
{#                                <img class=\"img-fluid rounded-circle me-3\" src=\"assets/images/user/2.png\"#}
{#                                     alt=\"user2\">#}
{#                                <div class=\"status-circle online\"></div>#}
{#                                <div class=\"media-body\">#}
{#                                    <span>Kori Thomas</span>#}
{#                                    <p>Lorem Ipsum is simply dummy...</p>#}
{#                                </div>#}
{#                                <p class=\"f-12 font-success\">1 hr ago</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li>#}
{#                            <div class=\"media\">#}
{#                                <img class=\"img-fluid rounded-circle me-3\" src=\"assets/images/user/3.png\"#}
{#                                     alt=\"user3\">#}
{#                                <div class=\"status-circle offline\"></div>#}
{#                                <div class=\"media-body\">#}
{#                                    <span>Ain Chavez</span>#}
{#                                    <p>Lorem Ipsum is simply dummy...</p>#}
{#                                </div>#}
{#                                <p class=\"f-12 font-danger\">32 mins ago</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"text-center\">#}
{#                            <a class=\"btn btn-primary\" href=\"javascript:void(0)\">View All</a>#}
{#                        </li>#}
{#                    </ul>#}
{#                </li>#}

                <li class=\"maximize\">
                    <a class=\"text-dark\" href=\"javascript:void(0)!\" onclick=\"javascript:toggleFullScreen()\">
                        <span class=\"lnr lnr-frame-expand\"></span>
                    </a>
                </li>
                <li class=\"profile-nav onhover-dropdown pe-0 me-0\">
                    <div class=\"media profile-media\">
                        <div class=\"user-name-hide media-body\">
                            <span>{{ app.user.getFirstName() }} {{ app.user.getLastName() }}</span>
                            <p class=\"mb-0 font-roboto\">Admin<i class=\"middle fa fa-angle-down\"></i></p>
                        </div>
                    </div>
                    <ul class=\"profile-dropdown onhover-show-div\">
{#                        <li>#}
{#                            <a href=\"all-users.html\">#}
{#                                <i data-feather=\"users\"></i>#}
{#                                <span>Users</span>#}
{#                            </a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"order-list.html\">#}
{#                                <i data-feather=\"archive\"></i>#}
{#                                <span>Orders</span>#}
{#                            </a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"support-ticket.html\">#}
{#                                <i data-feather=\"phone\"></i>#}
{#                                <span>Spports Tickets</span>#}
{#                            </a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"profile-setting.html\">#}
{#                                <i data-feather=\"settings\"></i>#}
{#                                <span>Settings</span>#}
{#                            </a>#}
{#                        </li>#}
                        <li>
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\"
                               href=\"javascript:void(0)\">
                                <i data-feather=\"log-out\"></i>
                                <span>Odjavite se</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>", "admin/admin_include/header.html.twig", "/home/prikolic/public_html/prikolica/templates/admin/admin_include/header.html.twig");
    }
}
