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

/* include/subscribe.html.twig */
class __TwigTemplate_c9118e63b07f5986e769a7a0f24b9ac51c90716c8fa8e0c64647c022786dff82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/subscribe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/subscribe.html.twig"));

        // line 1
        echo "<section class=\"subscribe-section section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-6\">
                <div class=\"subscribe-details\">
                    <h2 class=\"mb-3\">Budite u toku!</h2>
                    <h6 class=\"font-light\">Prijavite se na naš servis za obaveštenja i budite u toku sa novim informacijama.</h6>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mt-md-0 mt-3\">
                <div class=\"subsribe-input\">
                    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscribe");
        echo "\" method=\"post\">
                    <div class=\"input-group\">
                        <input type=\"email\" name=\"email\" class=\"form-control subscribe-input\" placeholder=\"Vaša e-mail adresa\" required>
                        <button class=\"btn btn-solid-default\" type=\"submit\">Prijavite se</button>
                    </div>
                    </form>
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
        return "include/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"subscribe-section section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-6\">
                <div class=\"subscribe-details\">
                    <h2 class=\"mb-3\">Budite u toku!</h2>
                    <h6 class=\"font-light\">Prijavite se na naš servis za obaveštenja i budite u toku sa novim informacijama.</h6>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mt-md-0 mt-3\">
                <div class=\"subsribe-input\">
                    <form action=\"{{ path('app_subscribe') }}\" method=\"post\">
                    <div class=\"input-group\">
                        <input type=\"email\" name=\"email\" class=\"form-control subscribe-input\" placeholder=\"Vaša e-mail adresa\" required>
                        <button class=\"btn btn-solid-default\" type=\"submit\">Prijavite se</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>", "include/subscribe.html.twig", "/home/prikolic/public_html/prikolica/templates/include/subscribe.html.twig");
    }
}
