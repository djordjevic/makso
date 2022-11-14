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

/* include/brand.html.twig */
class __TwigTemplate_f43c08be043fa9de34a37e331a7b0fe86eb1c1e7d500a1899d94648c3c2f415f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/brand.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/brand.html.twig"));

        // line 1
        echo "<section class=\"section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"brand-slider\">
                    <div>
                        <div class=\"brand-image\">
                            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dobavljaci/TRIGANO/trigano.png"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\"
                                 alt=\"brand logo\">
                        </div>
                    </div>
";
        // line 48
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 48,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"brand-slider\">
                    <div>
                        <div class=\"brand-image\">
                            <img src=\"{{ asset('assets/images/dobavljaci/TRIGANO/trigano.png') }}\" class=\"img-fluid blur-up lazyload\"
                                 alt=\"brand logo\">
                        </div>
                    </div>
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/2.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/3.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/4.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/5.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/6.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div>#}
{#                        <div class=\"brand-image\">#}
{#                            <img src=\"assets/images/brand/4.png\" class=\"img-fluid blur-up lazyload\"#}
{#                                 alt=\"brand logo\">#}
{#                        </div>#}
{#                    </div>#}
                </div>
            </div>
        </div>
    </div>
</section>", "include/brand.html.twig", "/home/prikolic/public_html/prikolica/templates/include/brand.html.twig");
    }
}
