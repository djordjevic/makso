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

/* include/newsletter.html.twig */
class __TwigTemplate_7f9cfaa86fdd42ff4547477a2d9fcc739bcb8f66d4e421353f42369d50ae6705 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/newsletter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/newsletter.html.twig"));

        // line 1
        echo "<div class=\"modal fade newletter-modal\" id=\"newsletter\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            <div class=\"modal-body\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/newletter-icon.png"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                <div class=\"modal-title\">
                    <h2 class=\"tt-title\">Sign up for our Newsletter!</h2>
                    <p class=\"font-light\">Never miss any new updates or products we reveal, stay up to date.</p>
                    <p class=\"font-light\">Oh, and it's free!</p>

                    <div class=\"input-group mb-3\">
                        <input placeholder=\"Email\" class=\"form-control\" type=\"text\">

                    </div>

                    <div class=\"cancel-button text-center\">
                        <button class=\"btn btn-solid-default w-100\" data-bs-dismiss=\"modal\"
                                type=\"button\">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade newletter-modal\" id=\"newsletter\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            <div class=\"modal-body\">
                <img src=\"{{ asset('assets/images/newletter-icon.png') }}\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                <div class=\"modal-title\">
                    <h2 class=\"tt-title\">Sign up for our Newsletter!</h2>
                    <p class=\"font-light\">Never miss any new updates or products we reveal, stay up to date.</p>
                    <p class=\"font-light\">Oh, and it's free!</p>

                    <div class=\"input-group mb-3\">
                        <input placeholder=\"Email\" class=\"form-control\" type=\"text\">

                    </div>

                    <div class=\"cancel-button text-center\">
                        <button class=\"btn btn-solid-default w-100\" data-bs-dismiss=\"modal\"
                                type=\"button\">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "include/newsletter.html.twig", "/home/prikolic/public_html/prikolica/templates/include/newsletter.html.twig");
    }
}
