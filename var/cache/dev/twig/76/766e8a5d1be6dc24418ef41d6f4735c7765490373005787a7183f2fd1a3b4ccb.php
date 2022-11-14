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

/* include/mobile_menu.html.twig */
class __TwigTemplate_9155704dcdae570f15807f9d0feca4fa5524b5b3ed9595292251cef1b40c1a26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/mobile_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/mobile_menu.html.twig"));

        // line 1
        echo "<div class=\"mobile-menu d-sm-none\">
    <ul>
        <li>
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\" class=\"active\">
                <i data-feather=\"home\"></i>
                <span>Početna</span>
            </a>
        </li>
";
        // line 15
        echo "        <li>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa");
        echo "\">
                <i data-feather=\"shopping-bag\"></i>
                <span>Korpa</span>
            </a>
        </li>
";
        // line 27
        echo "        <li><a href=\"
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "FirmaIliFizickoLice", [], "any", false, false, false, 29) == 1)) {
                // line 30
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma");
                echo "
                ";
            } else {
                // line 32
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
                echo "
                ";
            }
            // line 34
            echo "            ";
        } else {
            // line 35
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "
            ";
        }
        // line 37
        echo "            \">
                <i data-feather=\"user\"></i>
                <span>Profil</span>
            </a>
        </li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/mobile_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  90 => 35,  87 => 34,  81 => 32,  75 => 30,  72 => 29,  70 => 28,  67 => 27,  59 => 16,  56 => 15,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mobile-menu d-sm-none\">
    <ul>
        <li>
            <a href=\"{{ path('pocetna') }}\" class=\"active\">
                <i data-feather=\"home\"></i>
                <span>Početna</span>
            </a>
        </li>
{#        <li>#}
{#            <a href=\"javascript:void(0)\" class=\"toggle-category\">#}
{#                <i data-feather=\"align-justify\"></i>#}
{#                <span>Category</span>#}
{#            </a>#}
{#        </li>#}
        <li>
            <a href=\"{{ path('korpa') }}\">
                <i data-feather=\"shopping-bag\"></i>
                <span>Korpa</span>
            </a>
        </li>
{#        <li>#}
{#            <a href=\"wishlist.html\">#}
{#                <i data-feather=\"heart\"></i>#}
{#                <span>Wishlist</span>#}
{#            </a>#}
{#        </li>#}
        <li><a href=\"
            {% if app.user %}
                {% if app.user.FirmaIliFizickoLice == 1  %}
                    {{ path('app_firma') }}
                {% else %}
                    {{ path('app_profil') }}
                {% endif %}
            {% else %}
                {{ path('app_login') }}
            {% endif %}
            \">
                <i data-feather=\"user\"></i>
                <span>Profil</span>
            </a>
        </li>
    </ul>
</div>", "include/mobile_menu.html.twig", "/home/prikolic/public_html/prikolica/templates/include/mobile_menu.html.twig");
    }
}
