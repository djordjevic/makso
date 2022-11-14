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

/* page/galerija.html.twig */
class __TwigTemplate_ed0ad8e1b8e469dab15cfc3e75e11b447d0728a94d2d1f845d536090dc8f3a08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/galerija.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/galerija.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/galerija.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Galerija - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "page/galerija.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/galerija.html.twig", 19)->display($context);
        // line 20
        echo "
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
                    <h3>Galerija</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Galerija</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section Start -->
    <section id=\"portfolio\" class=\"portfolio section-b-space\">
        <div class=\"container\">

            <div class=\"row g-3 filter-gallery mt-3 content grid ratio_asos\">
                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija1.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - SKUTER 650</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija2.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2D250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija3.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - PLATFORMA 32650</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija4.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2S250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija5.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2C300</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija6.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 40393</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija7.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2C250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija8.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - P150</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija9.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija10.jpeg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija10.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija11.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija11.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija12.jpg"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/galerija/galerija12.jpg"), "html", null, true);
        echo "\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Subscribe Section Start -->
    ";
        // line 243
        $this->loadTemplate("include/subscribe.html.twig", "page/galerija.html.twig", 243)->display($context);
        // line 244
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 247
        $this->loadTemplate("include/footer.html.twig", "page/galerija.html.twig", 247)->display($context);
        // line 248
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 252
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 256
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 260
        echo "    ";
        // line 261
        echo "    ";
        // line 262
        echo "    ";
        // line 263
        echo "    ";
        // line 264
        echo "    ";
        // line 265
        echo "    ";
        // line 266
        echo "    ";
        // line 267
        echo "    ";
        // line 268
        echo "    ";
        // line 269
        echo "    ";
        // line 270
        echo "    ";
        // line 271
        echo "    ";
        // line 272
        echo "    ";
        // line 273
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 276
        $this->loadTemplate("include/top.html.twig", "page/galerija.html.twig", 276)->display($context);
        // line 277
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 283
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/galerija.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 283,  508 => 282,  495 => 277,  493 => 276,  488 => 273,  486 => 272,  484 => 271,  482 => 270,  480 => 269,  478 => 268,  476 => 267,  474 => 266,  472 => 265,  470 => 264,  468 => 263,  466 => 262,  464 => 261,  462 => 260,  457 => 256,  452 => 252,  447 => 248,  445 => 247,  440 => 244,  438 => 243,  418 => 226,  414 => 225,  397 => 211,  393 => 210,  376 => 196,  372 => 195,  355 => 181,  351 => 180,  334 => 166,  330 => 165,  313 => 151,  309 => 150,  292 => 136,  288 => 135,  271 => 121,  267 => 120,  250 => 106,  246 => 105,  229 => 91,  225 => 90,  208 => 76,  204 => 75,  187 => 61,  183 => 60,  161 => 41,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Galerija - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Galerija</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Galerija</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section Start -->
    <section id=\"portfolio\" class=\"portfolio section-b-space\">
        <div class=\"container\">

            <div class=\"row g-3 filter-gallery mt-3 content grid ratio_asos\">
                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija1.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija1.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - SKUTER 650</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija2.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija2.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2D250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija3.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija3.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - PLATFORMA 32650</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija4.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija4.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2S250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija5.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija5.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2C300</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija6.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija6.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 40393</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija7.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija7.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - 2C250</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 card\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija8.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija8.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>PRIKOLICA - P150</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija9.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija9.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija10.jpeg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija10.jpeg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija11.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija11.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"grid-item col-lg-3 col-md-4 col-sm-6 app\">
                    <div class=\"parent-container parent-container-size\">
                        <a href=\"{{ asset('assets/images/galerija/galerija12.jpg') }}\">
                            <img src=\"{{ asset('assets/images/galerija/galerija12.jpg') }}\" class=\"img-fluid bg-img images\" alt=\"\" />
                            <div class=\"overlay-color\">
                                <div class=\"overlay-icon\">
                                    <div>
                                        <h4>Plac Arilje</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

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

    <!-- theme Setting Start -->
    {#    <div class=\"theme-setting\">#}
    {#        <ul>#}
    {#            <li>#}
    {#                <button id=\"darkButton\" class=\"btn btn-sm dark-buttton\">Dark</button>#}
    {#            </li>#}
    {#            <li>#}
    {#                <button class=\"btn btn-sm rtl-button\">RTL</button>#}
    {#            </li>#}
    {#            <li class=\"color-picker\">#}
    {#                <input type=\"color\" class=\"form-control form-control-color\" id=\"ColorPicker1\" value=\"#0163d2\"#}
    {#                       title=\"Choose your color\">#}
    {#            </li>#}
    {#        </ul>#}
    {#    </div>#}
    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    {% include 'include/top.html.twig' %}
    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
{% endblock content %}

{% block footerjavascript %}

{% endblock footerjavascript %}", "page/galerija.html.twig", "/home/prikolic/public_html/prikolica/templates/page/galerija.html.twig");
    }
}
