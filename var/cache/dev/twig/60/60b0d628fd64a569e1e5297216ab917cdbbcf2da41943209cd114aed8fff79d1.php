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

/* include/kat.html.twig */
class __TwigTemplate_c9aed42e78b8eece4a7b7e943de4b858fb4983f82c245263863259d3983f24a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/kat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/kat.html.twig"));

        // line 1
        echo "<div class=\"category-menu\">
    <button type=\"button\" class=\"btn btn-solid-default toggle-category d-sm-block d-none\">
        Kategorije
        <i class=\"fas fa-chevron-down d-xl-inline-block d-none\"></i>
    </button>
    <div class=\"category-dropdown\">
        <div class=\"close-btn d-xl-none\">
            Category List
            <span class=\"back-category\"><i class=\"fa fa-angle-left\"></i>
            </span>
        </div>
        <ul>
";
        // line 27
        echo "        </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/kat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"category-menu\">
    <button type=\"button\" class=\"btn btn-solid-default toggle-category d-sm-block d-none\">
        Kategorije
        <i class=\"fas fa-chevron-down d-xl-inline-block d-none\"></i>
    </button>
    <div class=\"category-dropdown\">
        <div class=\"close-btn d-xl-none\">
            Category List
            <span class=\"back-category\"><i class=\"fa fa-angle-left\"></i>
            </span>
        </div>
        <ul>
{#            {% for cat in categories %}#}
{#                {% if cat.parentCategoryId is null %}#}
{#                    <li>#}
{#                        <a href=\"{{ path('prodavnica', {cat: cat.id}) }}\">{{ cat.name }}</a>#}
{#                    </li>#}
{#                    {% for ca in categories %}#}
{#                        {% if (ca.parentCategoryId is not null) and (ca.parentCategoryId.getId() == cat.id) %}#}
{#                            <li>#}
{#                                <a href=\"{{ path('prodavnica', {cat: ca.id}) }}\">--{{ ca.name }}</a>#}
{#                            </li>#}
{#                        {% endif %}#}
{#                    {% endfor %}#}
{#                {% endif %}#}
{#            {% endfor %}#}
        </ul>
    </div>
</div>", "include/kat.html.twig", "/home/prikolic/public_html/prikolica/templates/include/kat.html.twig");
    }
}
