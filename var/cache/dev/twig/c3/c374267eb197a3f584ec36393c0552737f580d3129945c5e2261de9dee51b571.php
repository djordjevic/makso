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

/* paginator/template.html.twig */
class __TwigTemplate_b504f988a3568f2a1f864c441c9456b6d1d6d5cdc8cd6452fc534e2e0289668f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/template.html.twig"));

        // line 1
        echo "<ul class=\"pagination\">
";
        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            echo "    ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 3, $this->source); })()) > 1)) {
                // line 4
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 5, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 5, $this->source); })()) => 1])), "html", null, true);
                echo "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            </a>
        </li>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if (array_key_exists("previous", $context)) {
                // line 14
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 15, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 15, $this->source); })())])), "html", null, true);
                echo "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            </a>
        </li>
    ";
            }
            // line 22
            echo "
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "        ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 26, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 29
                    echo "            <li class=\"page-item active\">
                <a class=\"page-link\" href=\"\">";
                    // line 30
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 33
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    ";
            // line 35
            if (array_key_exists("next", $context)) {
                // line 36
                echo "        <li class=\"page-item\">
            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 37, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 37, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 37, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 37, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"Next\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            </a>
        </li>
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 45, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "        <li class=\"page-item\">
            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 47, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 47, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 47, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 47, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"Next\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            </a>
        </li>
    ";
            }
        }
        // line 55
        echo "</ul>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paginator/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 55,  144 => 47,  141 => 46,  139 => 45,  136 => 44,  126 => 37,  123 => 36,  121 => 35,  118 => 34,  112 => 33,  106 => 30,  103 => 29,  95 => 26,  92 => 25,  89 => 24,  85 => 23,  82 => 22,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"pagination\">
{% if pageCount > 1 %}
    {% if startPage > 1 %}
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            </a>
        </li>
    {% endif %}

    {% if previous is defined %}
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            </a>
        </li>
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </li>
        {% else %}
            <li class=\"page-item active\">
                <a class=\"page-link\" href=\"\">{{ page }}</a>
            </li>
        {% endif %}
    {% endfor %}

    {% if next is defined %}
        <li class=\"page-item\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"page-link\" aria-label=\"Next\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            </a>
        </li>
    {% endif %}

    {% if pageCount > endPage %}
        <li class=\"page-item\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\" class=\"page-link\" aria-label=\"Next\">
                <span aria-hidden=\"true\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            </a>
        </li>
    {% endif %}
{% endif %}
</ul>






", "paginator/template.html.twig", "/home/prikolic/public_html/prikolica/templates/paginator/template.html.twig");
    }
}
