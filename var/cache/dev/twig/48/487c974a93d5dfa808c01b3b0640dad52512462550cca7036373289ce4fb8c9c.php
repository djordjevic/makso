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

/* admin_action/list.html.twig */
class __TwigTemplate_edec3ad7a0599c675b78402c89ed472b18e16a0d0bfc4b947c0a6ed14decc238 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_action/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_action/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_action/list.html.twig", 1);
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
        $this->loadTemplate("admin/admin_include/header.html.twig", "admin_action/list.html.twig", 18)->display($context);
        // line 19
        echo "        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class=\"page-body-wrapper\">
            <!-- Page Sidebar Start-->
            ";
        // line 23
        $this->loadTemplate("admin/admin_include/navigation.html.twig", "admin_action/list.html.twig", 23)->display($context);
        // line 24
        echo "            <!-- Page Sidebar Ends-->
            <!-- index body start -->
            <div class=\"page-body\">
                <div class=\"title-header\">
                    <h5>Products List</h5>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"table-responsive table-desi table-product\">
                                            <table class=\"table table-1d all-package\">
                                                <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Current Qty</th>
                                                    <th>Price</th>
                                                    <th>Published</th>
                                                    <th>Option</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$86.35</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-trash\"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/1.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$121.43</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>3</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$86.35</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"pagination-box\">
                                    <nav class=\"ms-auto me-auto \" aria-label=\"...\">
                                        <ul class=\"pagination pagination-primary\">
                                            <li class=\"page-item disabled\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\"
                                                   tabindex=\"-1\">Previous</a>
                                            </li>

                                            <li class=\"page-item active\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">1</a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">2 <span
                                                            class=\"sr-only\">(current)</span>
                                                </a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">3</a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                <!-- footer start-->
                ";
        // line 586
        $this->loadTemplate("admin/admin_include/footer.html.twig", "admin_action/list.html.twig", 586)->display($context);
        // line 587
        echo "                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    ";
        // line 596
        $this->loadTemplate("admin/admin_include/logout.html.twig", "admin_action/list.html.twig", 596)->display($context);
        // line 597
        echo "    <!-- Modal End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 600
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 601
        echo "    ";
        // line 602
        echo "    ";
        // line 603
        echo "    ";
        // line 604
        echo "    ";
        // line 605
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_action/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 605,  745 => 604,  743 => 603,  741 => 602,  739 => 601,  729 => 600,  718 => 597,  716 => 596,  705 => 587,  703 => 586,  139 => 24,  137 => 23,  131 => 19,  129 => 18,  124 => 15,  114 => 14,  102 => 11,  99 => 10,  97 => 9,  92 => 7,  82 => 6,  71 => 4,  61 => 3,  38 => 1,);
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
                    <h5>Products List</h5>
                </div>

                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"table-responsive table-desi table-product\">
                                            <table class=\"table table-1d all-package\">
                                                <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Current Qty</th>
                                                    <th>Price</th>
                                                    <th>Published</th>
                                                    <th>Option</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$86.35</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-trash\"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/1.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$121.43</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/4.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>3</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-check\">
                                                        <span class=\"lnr lnr-checkmark-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>2</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/2.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$95.97</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src=\"assets/images/profile/3.jpg\" class=\"img-fluid\"
                                                             alt=\"\">
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Outwear & Coats</a>
                                                    </td>

                                                    <td>
                                                        <a href=\"javascript:void(0)\">Fashion</a>
                                                    </td>

                                                    <td>1</td>

                                                    <td class=\"td-price\">\$86.35</td>

                                                    <td class=\"td-cross\">
                                                        <span class=\"lnr lnr-cross-circle\"></span>
                                                    </td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"order-detail.html\">
                                                                    <span class=\"lnr lnr-eye\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <span class=\"lnr lnr-pencil\"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href=\"javascript:void(0)\">
                                                                    <i class=\"far fa-trash-alt theme-color\"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"pagination-box\">
                                    <nav class=\"ms-auto me-auto \" aria-label=\"...\">
                                        <ul class=\"pagination pagination-primary\">
                                            <li class=\"page-item disabled\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\"
                                                   tabindex=\"-1\">Previous</a>
                                            </li>

                                            <li class=\"page-item active\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">1</a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">2 <span
                                                            class=\"sr-only\">(current)</span>
                                                </a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">3</a>
                                            </li>

                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"javascript:void(0)\">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
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
", "admin_action/list.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_action/list.html.twig");
    }
}
