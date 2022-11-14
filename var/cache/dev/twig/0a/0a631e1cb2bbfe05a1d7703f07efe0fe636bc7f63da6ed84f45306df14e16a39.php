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

/* admin_action/dodaj.html.twig */
class __TwigTemplate_0d54e421d4f1820f3fd6dfaba45911eccf8f682a2444d920bd4c4cc930055300 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_action/dodaj.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_action/dodaj.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_action/dodaj.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        // line 7
        echo "    ";
        $this->displayParentBlock("metatags", $context, $blocks);
        echo "
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "uri", [], "any", false, false, false, 11), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <!-- page-wrapper Start-->
    <div class=\"page-wrapper compact-wrapper dark-sidebar\" id=\"pageWrapper\">
        <!-- Page Header Start-->
        ";
        // line 18
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_action/dodaj.html.twig", 18)->display($context);
        // line 19
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 23
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_action/dodaj.html.twig", 23)->display($context);
        // line 24
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Add New Product</h5>
                </div>

                <!-- New Product Add Start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Information</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Product
                                                            Name</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\"
                                                                   placeholder=\"Product Name\">
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Product
                                                            Type</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Static Menu</option>
                                                                <option>Simple</option>
                                                                <option>Classified</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Category</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Category Menu</option>
                                                                <option>Electronics</option>
                                                                <option>TV & Appliances</option>
                                                                <option>Home & Furniture</option>
                                                                <option>Another</option>
                                                                <option>Baby & Kids</option>
                                                                <option>Health, Beauty & Perfumes</option>
                                                                <option>Uncategorized</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Subcategory</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Subcategory Menu</option>
                                                                <option>Ethnic Wear</option>
                                                                <option>Ethnic Bottoms</option>
                                                                <option>Women Western Wear</option>
                                                                <option>Sandels</option>
                                                                <option>Shoes</option>
                                                                <option>Beauty & Grooming</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Brand</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\">
                                                                <option disabled>Brand Menu</option>
                                                                <option value=\"puma\">Puma</option>
                                                                <option value=\"hrx\">HRX</option>
                                                                <option value=\"roadster\">Roadster</option>
                                                                <option value=\"zara\">Zara</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Until</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\">
                                                                <option disabled>Until Menu</option>
                                                                <option>Kilogram</option>
                                                                <option>Pieces</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Description</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <div class=\"row\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Product
                                                                Description</label>
                                                            <div class=\"col-sm-10\">
                                                                <div id=\"editor\"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Images</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Images</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control form-choose\" type=\"file\"
                                                                   id=\"formFileMultiple\" multiple>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Thumbnail
                                                            Image</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control form-choose\" type=\"file\"
                                                                   id=\"formFileMultiple1\" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Videos</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Video
                                                            Provider</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>Vimeo</option>
                                                                <option>Youtube</option>
                                                                <option>Dailymotion</option>
                                                                <option>Vimeo</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Video
                                                            Link</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\"
                                                                   placeholder=\"Video Link\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Shipping</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Weight
                                                            (kg)</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"number\"
                                                                   placeholder=\"Weight\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Dimensions
                                                            (cm)</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>Length</option>
                                                                <option>Width</option>
                                                                <option>Height</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Inventory</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">SKU</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Stock
                                                            Status</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>In Stock</option>
                                                                <option>Out Of Stock</option>
                                                                <option>On Backorder</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Link Products</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Upsells</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"search\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"form-label-title col-sm-2 mb-0\">Cross-Sells</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"search\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                ";
        // line 314
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_action/dodaj.html.twig", 314)->display($context);
        // line 315
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 324
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_action/dodaj.html.twig", 324)->display($context);
        // line 325
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 328
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 329
        echo "    ";
        // line 330
        echo "    ";
        // line 331
        echo "    ";
        // line 332
        echo "    ";
        // line 333
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_action/dodaj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 333,  473 => 332,  471 => 331,  469 => 330,  467 => 329,  457 => 328,  446 => 325,  444 => 324,  433 => 315,  431 => 314,  139 => 24,  137 => 23,  131 => 19,  129 => 18,  124 => 15,  114 => 14,  102 => 11,  99 => 10,  97 => 9,  92 => 7,  82 => 6,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}

{% endblock title %}
{% block metatags %}
    {{ parent() }}
    {#    <meta name=\"description\" content=\"{{ metaData.pageMetaDescription }}\"/>#}
    {#    <meta name=\"keywords\" content=\"{{ metaData.pageMetaKeywords }}\"/>#}
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"{{ app.request.uri }}\" />
{% endblock metatags %}

{% block content %}
    <!-- page-wrapper Start-->
    <div class=\"page-wrapper compact-wrapper dark-sidebar\" id=\"pageWrapper\">
        <!-- Page Header Start-->
        {% include 'admin/admin_include/header.html.twig' %}
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            {% include 'admin/admin_include/navigation.html.twig' %}
            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Add New Product</h5>
                </div>

                <!-- New Product Add Start -->
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Information</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Product
                                                            Name</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\"
                                                                   placeholder=\"Product Name\">
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Product
                                                            Type</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Static Menu</option>
                                                                <option>Simple</option>
                                                                <option>Classified</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Category</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Category Menu</option>
                                                                <option>Electronics</option>
                                                                <option>TV & Appliances</option>
                                                                <option>Home & Furniture</option>
                                                                <option>Another</option>
                                                                <option>Baby & Kids</option>
                                                                <option>Health, Beauty & Perfumes</option>
                                                                <option>Uncategorized</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Subcategory</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option disabled>Subcategory Menu</option>
                                                                <option>Ethnic Wear</option>
                                                                <option>Ethnic Bottoms</option>
                                                                <option>Women Western Wear</option>
                                                                <option>Sandels</option>
                                                                <option>Shoes</option>
                                                                <option>Beauty & Grooming</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Brand</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\">
                                                                <option disabled>Brand Menu</option>
                                                                <option value=\"puma\">Puma</option>
                                                                <option value=\"hrx\">HRX</option>
                                                                <option value=\"roadster\">Roadster</option>
                                                                <option value=\"zara\">Zara</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Until</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\">
                                                                <option disabled>Until Menu</option>
                                                                <option>Kilogram</option>
                                                                <option>Pieces</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Description</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <div class=\"row\">
                                                            <label class=\"form-label-title col-sm-2 mb-0\">Product
                                                                Description</label>
                                                            <div class=\"col-sm-10\">
                                                                <div id=\"editor\"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Images</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Images</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control form-choose\" type=\"file\"
                                                                   id=\"formFileMultiple\" multiple>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Thumbnail
                                                            Image</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control form-choose\" type=\"file\"
                                                                   id=\"formFileMultiple1\" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Product Videos</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Video
                                                            Provider</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>Vimeo</option>
                                                                <option>Youtube</option>
                                                                <option>Dailymotion</option>
                                                                <option>Vimeo</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Video
                                                            Link</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\"
                                                                   placeholder=\"Video Link\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Shipping</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Weight
                                                            (kg)</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"number\"
                                                                   placeholder=\"Weight\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"col-sm-2 col-form-label form-label-title\">Dimensions
                                                            (cm)</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>Length</option>
                                                                <option>Width</option>
                                                                <option>Height</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Inventory</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">SKU</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"text\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label class=\"col-sm-2 col-form-label form-label-title\">Stock
                                                            Status</label>
                                                        <div class=\"col-sm-10\">
                                                            <select class=\"js-example-basic-single w-100\" name=\"state\">
                                                                <option>In Stock</option>
                                                                <option>Out Of Stock</option>
                                                                <option>On Backorder</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"card-header-2\">
                                                <h5>Link Products</h5>
                                            </div>

                                            <form class=\"theme-form theme-form-2 mega-form\">
                                                <div class=\"row\">
                                                    <div class=\"mb-4 row align-items-center\">
                                                        <label class=\"form-label-title col-sm-2 mb-0\">Upsells</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"search\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row align-items-center\">
                                                        <label
                                                                class=\"form-label-title col-sm-2 mb-0\">Cross-Sells</label>
                                                        <div class=\"col-sm-10\">
                                                            <input class=\"form-control\" type=\"search\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                <!-- footer start-->
                {% include 'admin/admin_include/footer.html.twig' %}
                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    {% include 'admin/admin_include/logout.html.twig' %}
    <!-- Modal End -->
{% endblock content %}

{% block footerjavascript %}
    {#<script>#}
    {#    \$(document).ready(function () {#}
    {#        \$('#example').DataTable();#}
    {#    });#}
    {#</script>#}
{% endblock footerjavascript %}
", "admin_action/dodaj.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_action/dodaj.html.twig");
    }
}
