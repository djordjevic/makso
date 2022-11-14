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

/* admin/admin_include/logout.html.twig */
class __TwigTemplate_3d57e3b42b1be177bad68636905d1769fa26701841703d502be9821c87bd4a69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/logout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/logout.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
     aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog  modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Odjavite se</h5>
                <p>Da li ste sigurni?</p>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                <div class=\"button-box\">
                    <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                    <a class=\"btn  btn--yes btn-primary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" role=\"button\">Da</a>
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
        return "admin/admin_include/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
     aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog  modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Odjavite se</h5>
                <p>Da li ste sigurni?</p>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                <div class=\"button-box\">
                    <button type=\"button\" class=\"btn btn--no \" data-bs-dismiss=\"modal\">Ne</button>
                    <a class=\"btn  btn--yes btn-primary\" href=\"{{ path('app_logout') }}\" role=\"button\">Da</a>
                </div>
            </div>
        </div>
    </div>
</div>", "admin/admin_include/logout.html.twig", "/home/prikolic/public_html/prikolica/templates/admin/admin_include/logout.html.twig");
    }
}
