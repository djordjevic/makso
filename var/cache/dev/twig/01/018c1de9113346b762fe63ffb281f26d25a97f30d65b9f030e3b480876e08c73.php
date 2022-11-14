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

/* paginator/template_sort.html.twig */
class __TwigTemplate_92542cce40ff0c5ebb02c571e1dc2079519951a6f22278f5df6e47efc94dcc7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/template_sort.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/template_sort.html.twig"));

        // line 1
        echo "<div class=\"crvenosivastafna\">
    <div class=\"pagination\">
        <div class=\"pagination-products-count products_count\">
            <strong>[%od%]</strong> - <strong>[%do%]</strong> od <strong></strong>
        </div>
        <div class=\"pagination-middle\">
            ";
        // line 7
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 7, $this->source); })()) > 1)) {
            // line 8
            echo "                ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 8, $this->source); })()) > 1)) {
                // line 9
                echo "                    <span class=\"arrows\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 9, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => 1])), "html", null, true);
                echo "\" class=\"products_paging_links\"><<</a></span>
                ";
            }
            // line 11
            echo "
                ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "                    <span class=\"arrows arrows-img arrows-img--prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 13, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 13, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 13, $this->source); })())])), "html", null, true);
                echo "\" class=\"products_paging_links\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/paging_left.gif"), "html", null, true);
                echo "\" alt=\"prethodna strana\" width=\"5\" height=\"8\" border=\"0\"/></a></span>
                ";
            }
            // line 15
            echo "
                <span class=\"products_paging_page\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "                    ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 18, $this->source); })()))) {
                    // line 19
                    echo "
                        <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 20, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\" class=\"products_paging_links\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>

                                                ";
                } else {
                    // line 23
                    echo "
                        <span class='pagination-disabled'>";
                    // line 24
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>

                    ";
                }
                // line 27
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </span>

                ";
            // line 30
            if (array_key_exists("next", $context)) {
                // line 31
                echo "                    <span class=\"arrows arrows-img arrows-img--next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 31, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 31, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 31, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 31, $this->source); })())])), "html", null, true);
                echo "\" class=\"products_paging_links\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/paging_right.gif"), "html", null, true);
                echo "\" alt=\"naredna strana\" width=\"5\" height=\"8\" border=\"0\"/></a></span>
                ";
            }
            // line 33
            echo "
                ";
            // line 34
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 34, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                    <span class=\"arrows\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 35, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 35, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 35, $this->source); })())])), "html", null, true);
                echo "\" class=\"products_paging_links\">>></a></span>
                ";
            }
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </div>
        <div class=\"pagination-sort\">
            <label>
                <select class=\"sorter\">
                    <option value=\"\" disabled selected>Sortiraj po...</option>
                    <option value=\"[%sortCenaAscUrl%]\">Cena rastuće</option>
                    <option value=\"[%sortCenaDescUrl%]\">Cena opadajuće</option>
                    <option value=\"[%sortNazivAscUrl%]\">Naziv proizvoda A-Z</option>
                    <option value=\"[%sortNazivDescUrl%]\">Naziv proizvoda Z-A</option>
                </select>
            </label>
        </div>
    </div>
</div>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paginator/template_sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  137 => 37,  131 => 35,  129 => 34,  126 => 33,  118 => 31,  116 => 30,  112 => 28,  106 => 27,  100 => 24,  97 => 23,  89 => 20,  86 => 19,  83 => 18,  79 => 17,  75 => 15,  67 => 13,  65 => 12,  62 => 11,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"crvenosivastafna\">
    <div class=\"pagination\">
        <div class=\"pagination-products-count products_count\">
            <strong>[%od%]</strong> - <strong>[%do%]</strong> od <strong></strong>
        </div>
        <div class=\"pagination-middle\">
            {% if pageCount > 1 %}
                {% if startPage > 1 %}
                    <span class=\"arrows\"><a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\" class=\"products_paging_links\"><<</a></span>
                {% endif %}

                {% if previous is defined %}
                    <span class=\"arrows arrows-img arrows-img--prev\"><a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"products_paging_links\"><img src=\"{{ asset('assets/images/paging_left.gif') }}\" alt=\"prethodna strana\" width=\"5\" height=\"8\" border=\"0\"/></a></span>
                {% endif %}

                <span class=\"products_paging_page\">
                {% for page in pagesInRange %}
                    {% if page != current %}

                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"products_paging_links\">{{ page }}</a>

                                                {% else %}

                        <span class='pagination-disabled'>{{ page }}</span>

                    {% endif %}
                {% endfor %}
            </span>

                {% if next is defined %}
                    <span class=\"arrows arrows-img arrows-img--next\"><a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"products_paging_links\"><img src=\"{{ asset('assets/images/paging_right.gif') }}\" alt=\"naredna strana\" width=\"5\" height=\"8\" border=\"0\"/></a></span>
                {% endif %}

                {% if pageCount > endPage %}
                    <span class=\"arrows\"><a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\" class=\"products_paging_links\">>></a></span>
                {% endif %}
            {% endif %}
        </div>
        <div class=\"pagination-sort\">
            <label>
                <select class=\"sorter\">
                    <option value=\"\" disabled selected>Sortiraj po...</option>
                    <option value=\"[%sortCenaAscUrl%]\">Cena rastuće</option>
                    <option value=\"[%sortCenaDescUrl%]\">Cena opadajuće</option>
                    <option value=\"[%sortNazivAscUrl%]\">Naziv proizvoda A-Z</option>
                    <option value=\"[%sortNazivDescUrl%]\">Naziv proizvoda Z-A</option>
                </select>
            </label>
        </div>
    </div>
</div>






", "paginator/template_sort.html.twig", "/home/prikolic/public_html/prikolica/templates/paginator/template_sort.html.twig");
    }
}
