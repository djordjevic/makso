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

/* include/cookie.html.twig */
class __TwigTemplate_fb62548d23d80b2f846c852256da02d8f75011852510aff86ac3b53454c08c8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/cookie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/cookie.html.twig"));

        // line 1
        echo "<div class=\"cookie-bar-section cookiebar-left-section\">
    <img src=\"assets/images/cookie.png\" alt=\"\">
    <div class=\"content\">
        <h3>Cookies Consent</h3>
        <p class=\"font-light\">This website use cookies to ensure you get the best experience on our website.</p>
        <div class=\"cookie-buttons\">
            <button class=\"btn btn-solid-default\" id=\"button\">I understand</button>
            <a href=\"javascript:void(0)\" class=\"btn default-light1\">Learn more</a>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/cookie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cookie-bar-section cookiebar-left-section\">
    <img src=\"assets/images/cookie.png\" alt=\"\">
    <div class=\"content\">
        <h3>Cookies Consent</h3>
        <p class=\"font-light\">This website use cookies to ensure you get the best experience on our website.</p>
        <div class=\"cookie-buttons\">
            <button class=\"btn btn-solid-default\" id=\"button\">I understand</button>
            <a href=\"javascript:void(0)\" class=\"btn default-light1\">Learn more</a>
        </div>
    </div>
</div>", "include/cookie.html.twig", "/home/prikolic/public_html/prikolica/templates/include/cookie.html.twig");
    }
}
