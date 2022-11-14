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

/* gazdinstvo/edit.html.twig */
class __TwigTemplate_14d60d669c5c4740e58f8cdf806f947ad4047e5ab219cef14315da498fa8c9d5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metatags' => [$this, 'block_metatags'],
            'content' => [$this, 'block_content'],
            'footerjavascript' => [$this, 'block_footerjavascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gazdinstvo/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gazdinstvo/edit.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "gazdinstvo/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gazdinstvo - Prodaja autoprikolica, traktora."), "html", null, true);
        echo " | prikolica.shop
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        // line 6
        echo "    ";
        $this->displayParentBlock("metatags", $context, $blocks);
        echo "
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "uri", [], "any", false, false, false, 12), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <!-- header  -->
    ";
        // line 17
        $this->loadTemplate("include/header.html.twig", "gazdinstvo/edit.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "gazdinstvo/edit.html.twig", 19)->display($context);
        // line 20
        echo "    <section class=\"breadcrumb-section section-b-space\">
        <ul class=\"circles\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Gazdinstvo</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Izmena podataka</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"dash\">
                            <div class=\"dashboard-right\">
                                <div class=\"dashboard\">
                                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "
                                    <div class=\"page-title title title1 title-effect\">
                                        <h2>Izmenite Vaše podatke</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        ";
        // line 65
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'errors')) {
            // line 66
            echo "                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'errors');
            echo "
                                            </div>
                                        ";
        }
        // line 70
        echo "                                    </div>

                                    <div class=\"order-box-contain my-4\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-12 col-sm-12\">
                                                <div class=\"order-box\">
                                                    <h5 class=\"mb-3\">Opšti podaci</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Broj gazdinstva</label>
                                                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "gazdinstvo", [], "any", false, false, false, 79), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Ime</label>
                                                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "firstName", [], "any", false, false, false, 83), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Prezime</label>
                                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "lastName", [], "any", false, false, false, 87), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Email</label>
                                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Mobilni telefon</label>
                                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "mobPhone", [], "any", false, false, false, 95), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Telefon</label>
                                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "phone", [], "any", false, false, false, 99), 'widget');
        echo "
                                                    </div>
                                                    <hr>
                                                    <h5 class=\"mb-3\">Primarna adresa</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Adresa</label>
                                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "address", [], "any", false, false, false, 105), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Grad</label>
                                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "city", [], "any", false, false, false, 109), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">PTT broj</label>
                                                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "postanskiBroj", [], "any", false, false, false, 113), 'widget');
        echo "
                                                    </div>
                                                    <hr>
                                                    <h5 class=\"mb-3\">Adresa za dostavu (popuniti ukoliko se razlikuje od primarne adrese)</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Ime osobe za kontakt</label>
                                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "firstNamePrimaoc", [], "any", false, false, false, 119), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Prezime osobe za kontakt</label>
                                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "lastNamePrimaoc", [], "any", false, false, false, 123), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Adresa</label>
                                                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "addressPrimaoc", [], "any", false, false, false, 127), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Grad</label>
                                                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "cityPrimaoc", [], "any", false, false, false, 131), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">PTT broj</label>
                                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "postanskiBrPrimaoc", [], "any", false, false, false, 135), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Mobilni telefon</label>
                                                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "mobPhonePrimaoc", [], "any", false, false, false, 139), 'widget');
        echo "
                                                    </div>

                                                    <div class=\"d-block\">
                                                        <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_firma");
        echo "\" type=\"button\" class=\"btn bg-secondary text-white rounded-1 modal-close-button\">Odustanite</a>
                                                        <button type=\"submit\" class=\"btn btn-solid-default rounded-1\">Sačuvajte</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    ";
        // line 163
        $this->loadTemplate("include/subscribe.html.twig", "gazdinstvo/edit.html.twig", 163)->display($context);
        // line 164
        echo "    <!-- Subscribe Section End -->
    <!-- footer start -->
    ";
        // line 166
        $this->loadTemplate("include/footer.html.twig", "gazdinstvo/edit.html.twig", 166)->display($context);
        // line 167
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 171
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 175
        echo "    <!-- Coockie Section End -->


    <!-- tap to top Section Start -->
    ";
        // line 179
        $this->loadTemplate("include/top.html.twig", "gazdinstvo/edit.html.twig", 179)->display($context);
        // line 180
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 186
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gazdinstvo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 186,  387 => 185,  374 => 180,  372 => 179,  366 => 175,  361 => 171,  356 => 167,  354 => 166,  350 => 164,  348 => 163,  332 => 150,  322 => 143,  315 => 139,  308 => 135,  301 => 131,  294 => 127,  287 => 123,  280 => 119,  271 => 113,  264 => 109,  257 => 105,  248 => 99,  241 => 95,  234 => 91,  227 => 87,  220 => 83,  213 => 79,  202 => 70,  196 => 67,  193 => 66,  191 => 65,  183 => 60,  160 => 40,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Gazdinstvo - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
{% endblock title %}
{% block metatags %}
    {{ parent() }}
    {#    <meta name=\"description\" content=\"{{ metaData.pageMetaDescription }}\"/>#}
    {#    <meta name=\"keywords\" content=\"{{ metaData.pageMetaKeywords }}\"/>#}
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"{{ app.request.uri }}\" />
{% endblock metatags %}

{% block content %}
    <!-- header  -->
    {% include 'include/header.html.twig' %}
    <!-- mobile fix menu -->
    {% include 'include/mobile_menu.html.twig' %}
    <section class=\"breadcrumb-section section-b-space\">
        <ul class=\"circles\">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h3>Gazdinstvo</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Izmena podataka</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section start -->
    <section class=\"section-b-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"dash\">
                            <div class=\"dashboard-right\">
                                <div class=\"dashboard\">
                                    {{ form_start(form, {'attr': {'class' : 'needs-validation'}})}}
                                    <div class=\"page-title title title1 title-effect\">
                                        <h2>Izmenite Vaše podatke</h2>
                                    </div>
                                    <div class=\"welcome-msg\">
                                        {% if form_errors(form.email) %}
                                            <div class=\"alert alert-danger\" role=\"alert\">
                                                {{ form_errors(form.email) }}
                                            </div>
                                        {% endif %}
                                    </div>

                                    <div class=\"order-box-contain my-4\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-12 col-sm-12\">
                                                <div class=\"order-box\">
                                                    <h5 class=\"mb-3\">Opšti podaci</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Broj gazdinstva</label>
                                                        {{ form_widget(form.gazdinstvo) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Ime</label>
                                                        {{ form_widget(form.firstName) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Prezime</label>
                                                        {{ form_widget(form.lastName) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Email</label>
                                                        {{ form_widget(form.email) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Mobilni telefon</label>
                                                        {{ form_widget(form.mobPhone) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Telefon</label>
                                                        {{ form_widget(form.phone) }}
                                                    </div>
                                                    <hr>
                                                    <h5 class=\"mb-3\">Primarna adresa</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Adresa</label>
                                                        {{ form_widget(form.address) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Grad</label>
                                                        {{ form_widget(form.city) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">PTT broj</label>
                                                        {{ form_widget(form.postanskiBroj) }}
                                                    </div>
                                                    <hr>
                                                    <h5 class=\"mb-3\">Adresa za dostavu (popuniti ukoliko se razlikuje od primarne adrese)</h5>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Ime osobe za kontakt</label>
                                                        {{ form_widget(form.firstNamePrimaoc) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Prezime osobe za kontakt</label>
                                                        {{ form_widget(form.lastNamePrimaoc) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"name\" class=\"form-label font-light\">Adresa</label>
                                                        {{ form_widget(form.addressPrimaoc) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"address\" class=\"form-label font-light\">Grad</label>
                                                        {{ form_widget(form.cityPrimaoc) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">PTT broj</label>
                                                        {{ form_widget(form.postanskiBrPrimaoc) }}
                                                    </div>
                                                    <div class=\"mb-3\">
                                                        <label for=\"number\" class=\"form-label font-light\">Mobilni telefon</label>
                                                        {{ form_widget(form.mobPhonePrimaoc) }}
                                                    </div>

                                                    <div class=\"d-block\">
                                                        <a href=\"{{ path('app_firma') }}\" type=\"button\" class=\"btn bg-secondary text-white rounded-1 modal-close-button\">Odustanite</a>
                                                        <button type=\"submit\" class=\"btn btn-solid-default rounded-1\">Sačuvajte</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{ form_end(form) }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    {% include 'include/subscribe.html.twig' %}
    <!-- Subscribe Section End -->
    <!-- footer start -->
    {% include 'include/footer.html.twig' %}
    <!-- footer end -->

    <!-- Newsletter modal start -->
    {#    {% include 'include/newsletter.html.twig' %}#}
    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    {#    {% include 'include/cookie.html.twig' %}#}
    <!-- Coockie Section End -->


    <!-- tap to top Section Start -->
    {% include 'include/top.html.twig' %}
    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
{% endblock content %}

{% block footerjavascript %}

{% endblock footerjavascript %}", "gazdinstvo/edit.html.twig", "/home/prikolic/public_html/prikolica/templates/gazdinstvo/edit.html.twig");
    }
}
