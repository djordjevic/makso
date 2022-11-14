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

/* shop/komentar_form.html.twig */
class __TwigTemplate_91aa7ad34466fd8e11260c7a2b6d03215f10f018bc8227273d21abbcf336c8bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/komentar_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/komentar_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["komentar_forma"]) || array_key_exists("komentar_forma", $context) ? $context["komentar_forma"] : (function () { throw new RuntimeError('Variable "komentar_forma" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "", "id" => "formaKomentar", "class" => "row g-4"]]);
        echo "
    <div class=\"col-12 col-md-6\">
        <label class=\"mb-1\" for=\"name\">Ime i prezime</label>
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["komentar_forma"]) || array_key_exists("komentar_forma", $context) ? $context["komentar_forma"] : (function () { throw new RuntimeError('Variable "komentar_forma" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

    <div class=\"col-12 col-md-6\">
        <label class=\"mb-1\" for=\"id\">Email</label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["komentar_forma"]) || array_key_exists("komentar_forma", $context) ? $context["komentar_forma"] : (function () { throw new RuntimeError('Variable "komentar_forma" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

    <div class=\"col-12\">
        <label class=\"mb-1\" for=\"comments\">Vaš komentar</label>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["komentar_forma"]) || array_key_exists("komentar_forma", $context) ? $context["komentar_forma"] : (function () { throw new RuntimeError('Variable "komentar_forma" does not exist.', 14, $this->source); })()), "comment", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>

    <div class=\"col-12\">
        <button type=\"submit\"
                class=\"btn default-light-theme default-theme default-theme-2\">Pošaljite</button>
    </div>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["komentar_forma"]) || array_key_exists("komentar_forma", $context) ? $context["komentar_forma"] : (function () { throw new RuntimeError('Variable "komentar_forma" does not exist.', 21, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shop/komentar_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  65 => 14,  57 => 9,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(komentar_forma, { 'attr': { 'novalidate' : '', 'id': 'formaKomentar', 'class' : 'row g-4'} }) }}
    <div class=\"col-12 col-md-6\">
        <label class=\"mb-1\" for=\"name\">Ime i prezime</label>
        {{ form_widget(komentar_forma.name, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"col-12 col-md-6\">
        <label class=\"mb-1\" for=\"id\">Email</label>
        {{ form_widget(komentar_forma.email, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"col-12\">
        <label class=\"mb-1\" for=\"comments\">Vaš komentar</label>
        {{ form_widget(komentar_forma.comment, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"col-12\">
        <button type=\"submit\"
                class=\"btn default-light-theme default-theme default-theme-2\">Pošaljite</button>
    </div>
{{ form_end(komentar_forma) }}", "shop/komentar_form.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/komentar_form.html.twig");
    }
}
