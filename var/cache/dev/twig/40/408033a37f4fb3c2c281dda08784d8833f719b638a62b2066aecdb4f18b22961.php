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

/* admin/admin_include/content.html.twig */
class __TwigTemplate_ab5394209d28ea6a9974df965afdd391db4431deddd99ace47d953be32039e58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_include/content.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- chart caard section start -->
        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-primary border-5 border-0 card o-hidden\">
                <div class=\"custome-1-bg b-r-4 card-body\">
                    <div class=\"media align-items-center static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Promet</span>
                            <h4 class=\"mb-0 counter\">";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["ukupnaVrednost"]) || array_key_exists("ukupnaVrednost", $context) ? $context["ukupnaVrednost"] : (function () { throw new RuntimeError('Variable "ukupnaVrednost" does not exist.', 10, $this->source); })())), 2, ".", ","), "html", null, true);
        echo "
                                <span class=\"badge badge-light-primary grow\">Isporučeni ";
        // line 11
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((isset($context["ukupnaVrednostIsporucenih"]) || array_key_exists("ukupnaVrednostIsporucenih", $context) ? $context["ukupnaVrednostIsporucenih"] : (function () { throw new RuntimeError('Variable "ukupnaVrednostIsporucenih" does not exist.', 11, $this->source); })())), 2, ".", ","), "html", null, true);
        echo "</span>
                            </h4>
                        </div>
                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"dollar-sign\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-danger border-5 border-0 card o-hidden\">
                <div class=\" custome-2-bg  b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Porudžbine</span>
                            <h4 class=\"mb-0 counter\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["ukupnoOrders"]) || array_key_exists("ukupnoOrders", $context) ? $context["ukupnoOrders"] : (function () { throw new RuntimeError('Variable "ukupnoOrders" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "
                                <span class=\"badge badge-light-danger grow\">
                                                    Isporučene ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["oIsporCount"]) || array_key_exists("oIsporCount", $context) ? $context["oIsporCount"] : (function () { throw new RuntimeError('Variable "oIsporCount" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</span>
                            </h4>
                        </div>
                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"shopping-bag\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-secondary border-5 border-0  card o-hidden\">
                <div class=\" custome-3-bg b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Komentari</span>
                            <h4 class=\"mb-0 counter\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["ukupnoComments"]) || array_key_exists("ukupnoComments", $context) ? $context["ukupnoComments"] : (function () { throw new RuntimeError('Variable "ukupnoComments" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "
                                <span class=\"badge badge-light-secondary grow \">
                                                    Odobreni ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["aComments"]) || array_key_exists("aComments", $context) ? $context["aComments"] : (function () { throw new RuntimeError('Variable "aComments" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</span>
                            </h4>
                        </div>

                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"message-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-success border-5 border-0 card o-hidden\">
                <div class=\" custome-4-bg b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Korisnici</span>
                            <h4 class=\"mb-0 counter\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["ukupnoUsers"]) || array_key_exists("ukupnoUsers", $context) ? $context["ukupnoUsers"] : (function () { throw new RuntimeError('Variable "ukupnoUsers" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "
                                <span class=\"badge badge-light-success grow\">
                                                    Firme ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["firmaCount"]) || array_key_exists("firmaCount", $context) ? $context["firmaCount"] : (function () { throw new RuntimeError('Variable "firmaCount" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "</span>
                                <span class=\"badge badge-light-success grow\">
                                                    Gazdinstva ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["gazdinstvaCount"]) || array_key_exists("gazdinstvaCount", $context) ? $context["gazdinstvaCount"] : (function () { throw new RuntimeError('Variable "gazdinstvaCount" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</span>
                            </h4>
                        </div>

                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"user-plus\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chart caard section End -->

        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Proizvodi</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["pro"]) || array_key_exists("pro", $context) ? $context["pro"] : (function () { throw new RuntimeError('Variable "pro" does not exist.', 98, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["proizvod"]) {
            // line 99
            echo "                                    <tr>
                                        <td class=\"td-color-1\">
                                            <div class=\"transactions-icon\">
                                                <i data-feather=\"shield\"></i>
                                            </div>
                                            <div class=\"transactions-name\">
                                                <h6>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proizvod"], "title", [], "any", false, false, false, 105), "html", null, true);
            echo "</h6>
                                                <p>
                                                    ";
            // line 107
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["proizvod"], "kategorija", [], "any", false, false, false, 107))) {
                // line 108
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proizvod"], "kategorija", [], "any", false, false, false, 108), "getName", [], "method", false, false, false, 108), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 110
                echo "                                                        /
                                                    ";
            }
            // line 112
            echo "                                                </p>
                                            </div>
                                        </td>

                                        <td class=\"lost\">
                                            ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, $context["proizvod"], "showProduct", [], "any", false, false, false, 117) == 1)) {
                // line 118
                echo "                                                <i data-feather=\"check\"></i>
                                            ";
            } else {
                // line 120
                echo "                                                <i data-feather=\"minus\"></i>
                                            ";
            }
            // line 122
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proizvod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products_list");
        echo "\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->
        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Kategorije</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["kat"]) || array_key_exists("kat", $context) ? $context["kat"] : (function () { throw new RuntimeError('Variable "kat" does not exist.', 152, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["kategorija"]) {
            // line 153
            echo "                                <tr>
                                    <td class=\"td-color-4\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"list\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kategorija"], "name", [], "any", false, false, false, 159), "html", null, true);
            echo "</h6>
                                            <p>
                                                ";
            // line 161
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["kategorija"], "parentCategoryId", [], "any", false, false, false, 161))) {
                // line 162
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kategorija"], "parentCategoryId", [], "any", false, false, false, 162), "getName", [], "method", false, false, false, 162), "html", null, true);
                echo "
                                                ";
            } else {
                // line 164
                echo "                                                -
                                                ";
            }
            // line 166
            echo "                                            </p>
                                        </div>
                                    </td>

                                    <td class=\"lost\">
                                        ";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["kategorija"], "showCategory", [], "any", false, false, false, 171) == 1)) {
                // line 172
                echo "                                            <i data-feather=\"check\"></i>
                                        ";
            } else {
                // line 174
                echo "                                            <i data-feather=\"minus\"></i>
                                        ";
            }
            // line 176
            echo "                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kategorija'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories_list");
        echo "\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Dobavljači</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["dob"]) || array_key_exists("dob", $context) ? $context["dob"] : (function () { throw new RuntimeError('Variable "dob" does not exist.', 205, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["dobavljac"]) {
            // line 206
            echo "                                    <tr>
                                        <td class=\"td-color-2\">
                                            <div class=\"transactions-icon\">
                                                <i data-feather=\"user\"></i>
                                            </div>
                                            <div class=\"transactions-name\">
                                                <h6>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dobavljac"], "name", [], "any", false, false, false, 212), "html", null, true);
            echo "</h6>
                                            </div>
                                        </td>

                                        <td class=\"lost\">
                                            ";
            // line 217
            if ((twig_get_attribute($this->env, $this->source, $context["dobavljac"], "active", [], "any", false, false, false, 217) == 1)) {
                // line 218
                echo "                                                <i data-feather=\"check\"></i>
                                            ";
            } else {
                // line 220
                echo "                                                <i data-feather=\"minus\"></i>
                                            ";
            }
            // line 222
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dobavljac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_vendors_list");
        echo "\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->
        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Porudžbine</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"shopping-bag\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Registrovani korisnici</h6>

                                        </div>
                                    </td>
                                    <td>";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["oRegCount"]) || array_key_exists("oRegCount", $context) ? $context["oRegCount"] : (function () { throw new RuntimeError('Variable "oRegCount" does not exist.', 262, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-2\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"shopping-bag\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Neregistrovani korisnici</h6>
                                        </div>
                                    </td>

                                    <td class=\"td-color-2\">";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["oNregCount"]) || array_key_exists("oNregCount", $context) ? $context["oNregCount"] : (function () { throw new RuntimeError('Variable "oNregCount" does not exist.', 274, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_orders_list");
        echo "\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Korisnici</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Firme</h6>

                                        </div>
                                    </td>
                                    <td>";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["firmaCount"]) || array_key_exists("firmaCount", $context) ? $context["firmaCount"] : (function () { throw new RuntimeError('Variable "firmaCount" does not exist.', 312, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-1\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Fizička lica</h6>

                                        </div>
                                    </td>
                                    <td class=\"td-color-1\">";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["korisnikCount"]) || array_key_exists("korisnikCount", $context) ? $context["korisnikCount"] : (function () { throw new RuntimeError('Variable "korisnikCount" does not exist.', 324, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-2\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Gazdinstva</h6>

                                        </div>
                                    </td>
                                    <td class=\"td-color-1\">";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["gazdinstvaCount"]) || array_key_exists("gazdinstvaCount", $context) ? $context["gazdinstvaCount"] : (function () { throw new RuntimeError('Variable "gazdinstvaCount" does not exist.', 336, $this->source); })()), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->

        <!-- New & Update start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Poslednji Komentari</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <ul class=\"StepProgress\">
                        ";
        // line 358
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["kom"]) || array_key_exists("kom", $context) ? $context["kom"] : (function () { throw new RuntimeError('Variable "kom" does not exist.', 358, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["komentar"]) {
            // line 359
            echo "                        <li class=\"StepProgress-item\">
                            <strong>";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["komentar"], "name", [], "any", false, false, false, 360), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["komentar"], "created", [], "any", false, false, false, 360), "H:i:s d.m.Y"), "html", null, true);
            echo "</strong>
                            <p>";
            // line 361
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["komentar"], "comment", [], "any", false, false, false, 361), 0, 40), "html", null, true);
            echo "</p>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komentar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Poslednji upiti za rezervaciju</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <ul class=\"StepProgress\">
                        ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["upiti"]) || array_key_exists("upiti", $context) ? $context["upiti"] : (function () { throw new RuntimeError('Variable "upiti" does not exist.', 379, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["upit"]) {
            // line 380
            echo "                            <li class=\"StepProgress-item\">
                                <strong>";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upit"], "ime", [], "any", false, false, false, 381), "html", null, true);
            echo "</strong>
                                <p>";
            // line 382
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upit"], "startDate", [], "any", false, false, false, 382), "d.m.Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upit"], "endDate", [], "any", false, false, false, 382), "d.m.Y"), "html", null, true);
            echo "</p>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        echo "                    </ul>
                    <div class=\"td-color-4 pt-4\">
                        <a href=\"";
        // line 387
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_list");
        echo "\" class=\"btn btn-primary\">Vidi sve</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- New & Update end-->

";
        // line 403
        echo "
";
        // line 446
        echo "
";
        // line 464
        echo "
";
        // line 473
        echo "
";
        // line 481
        echo "
";
        // line 491
        echo "
";
        // line 501
        echo "
";
        // line 511
        echo "
";
        // line 521
        echo "
";
        // line 531
        echo "
";
        // line 541
        echo "
";
        // line 550
        echo "
";
        // line 559
        echo "
";
        // line 570
        echo "
";
        // line 581
        echo "
";
        // line 592
        echo "
";
        // line 603
        echo "
";
        // line 613
        echo "    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_include/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 613,  658 => 603,  655 => 592,  652 => 581,  649 => 570,  646 => 559,  643 => 550,  640 => 541,  637 => 531,  634 => 521,  631 => 511,  628 => 501,  625 => 491,  622 => 481,  619 => 473,  616 => 464,  613 => 446,  610 => 403,  599 => 387,  595 => 385,  584 => 382,  580 => 381,  577 => 380,  573 => 379,  556 => 364,  547 => 361,  541 => 360,  538 => 359,  534 => 358,  509 => 336,  494 => 324,  479 => 312,  442 => 278,  435 => 274,  420 => 262,  382 => 227,  378 => 225,  370 => 222,  366 => 220,  362 => 218,  360 => 217,  352 => 212,  344 => 206,  340 => 205,  313 => 181,  309 => 179,  301 => 176,  297 => 174,  293 => 172,  291 => 171,  284 => 166,  280 => 164,  274 => 162,  272 => 161,  267 => 159,  259 => 153,  255 => 152,  227 => 127,  223 => 125,  215 => 122,  211 => 120,  207 => 118,  205 => 117,  198 => 112,  194 => 110,  188 => 108,  186 => 107,  181 => 105,  173 => 99,  169 => 98,  139 => 71,  134 => 69,  129 => 67,  108 => 49,  103 => 47,  83 => 30,  78 => 28,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- chart caard section start -->
        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-primary border-5 border-0 card o-hidden\">
                <div class=\"custome-1-bg b-r-4 card-body\">
                    <div class=\"media align-items-center static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Promet</span>
                            <h4 class=\"mb-0 counter\">{{ (ukupnaVrednost | round) | number_format(2, '.', ',') }}
                                <span class=\"badge badge-light-primary grow\">Isporučeni {{ (ukupnaVrednostIsporucenih | round) | number_format(2, '.', ',') }}</span>
                            </h4>
                        </div>
                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"dollar-sign\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-danger border-5 border-0 card o-hidden\">
                <div class=\" custome-2-bg  b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Porudžbine</span>
                            <h4 class=\"mb-0 counter\">{{ ukupnoOrders }}
                                <span class=\"badge badge-light-danger grow\">
                                                    Isporučene {{ oIsporCount }}</span>
                            </h4>
                        </div>
                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"shopping-bag\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-secondary border-5 border-0  card o-hidden\">
                <div class=\" custome-3-bg b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Komentari</span>
                            <h4 class=\"mb-0 counter\">{{ ukupnoComments }}
                                <span class=\"badge badge-light-secondary grow \">
                                                    Odobreni {{ aComments }}</span>
                            </h4>
                        </div>

                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"message-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-xxl-3 col-lg-6\">
            <div class=\"b-b-success border-5 border-0 card o-hidden\">
                <div class=\" custome-4-bg b-r-4 card-body\">
                    <div class=\"media static-top-widget\">
                        <div class=\"media-body p-0\">
                            <span class=\"m-0\">Korisnici</span>
                            <h4 class=\"mb-0 counter\">{{ ukupnoUsers }}
                                <span class=\"badge badge-light-success grow\">
                                                    Firme {{ firmaCount }}</span>
                                <span class=\"badge badge-light-success grow\">
                                                    Gazdinstva {{ gazdinstvaCount }}</span>
                            </h4>
                        </div>

                        <div class=\"align-self-center text-center\">
                            <i data-feather=\"user-plus\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chart caard section End -->

        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Proizvodi</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                {% for proizvod in pro |slice(0, 4) %}
                                    <tr>
                                        <td class=\"td-color-1\">
                                            <div class=\"transactions-icon\">
                                                <i data-feather=\"shield\"></i>
                                            </div>
                                            <div class=\"transactions-name\">
                                                <h6>{{ proizvod.title }}</h6>
                                                <p>
                                                    {% if proizvod.kategorija is not null %}
                                                        {{ proizvod.kategorija.getName() }}
                                                    {% else %}
                                                        /
                                                    {% endif %}
                                                </p>
                                            </div>
                                        </td>

                                        <td class=\"lost\">
                                            {% if proizvod.showProduct == 1 %}
                                                <i data-feather=\"check\"></i>
                                            {% else %}
                                                <i data-feather=\"minus\"></i>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"{{ path('app_admin_products_list') }}\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->
        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Kategorije</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                {% for kategorija in kat |slice(0, 4) %}
                                <tr>
                                    <td class=\"td-color-4\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"list\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>{{ kategorija.name }}</h6>
                                            <p>
                                                {% if kategorija.parentCategoryId is not null %}
                                                    {{ kategorija.parentCategoryId.getName() }}
                                                {% else %}
                                                -
                                                {% endif %}
                                            </p>
                                        </div>
                                    </td>

                                    <td class=\"lost\">
                                        {% if kategorija.showCategory == 1 %}
                                            <i data-feather=\"check\"></i>
                                        {% else %}
                                            <i data-feather=\"minus\"></i>
                                        {% endif %}
                                    </td>
                                </tr>
                                {% endfor %}
                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"{{ path('app_admin_categories_list') }}\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Dobavljači</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                {% for dobavljac in dob |slice(0, 4) %}
                                    <tr>
                                        <td class=\"td-color-2\">
                                            <div class=\"transactions-icon\">
                                                <i data-feather=\"user\"></i>
                                            </div>
                                            <div class=\"transactions-name\">
                                                <h6>{{ dobavljac.name }}</h6>
                                            </div>
                                        </td>

                                        <td class=\"lost\">
                                            {% if dobavljac.active == 1 %}
                                                <i data-feather=\"check\"></i>
                                            {% else %}
                                                <i data-feather=\"minus\"></i>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"{{ path('app_admin_vendors_list') }}\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->
        <!-- Transactions start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Porudžbine</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"shopping-bag\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Registrovani korisnici</h6>

                                        </div>
                                    </td>
                                    <td>{{ oRegCount }}</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-2\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"shopping-bag\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Neregistrovani korisnici</h6>
                                        </div>
                                    </td>

                                    <td class=\"td-color-2\">{{ oNregCount }}</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-4 pb-0\">
                                        <a href=\"{{ path('app_admin_orders_list') }}\" class=\"btn btn-primary\">Vidi sve</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Korisnici</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <div>
                        <div class=\"table-responsive table-desi\">
                            <table class=\"user-table transactions-table table border-0\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Firme</h6>

                                        </div>
                                    </td>
                                    <td>{{ firmaCount }}</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-1\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Fizička lica</h6>

                                        </div>
                                    </td>
                                    <td class=\"td-color-1\">{{ korisnikCount }}</td>
                                </tr>
                                <tr>
                                    <td class=\"td-color-2\">
                                        <div class=\"transactions-icon\">
                                            <i data-feather=\"user\"></i>
                                        </div>
                                        <div class=\"transactions-name\">
                                            <h6>Gazdinstva</h6>

                                        </div>
                                    </td>
                                    <td class=\"td-color-1\">{{ gazdinstvaCount }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions end-->

        <!-- New & Update start-->
        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Poslednji Komentari</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <ul class=\"StepProgress\">
                        {% for komentar in kom | slice(0, 4) %}
                        <li class=\"StepProgress-item\">
                            <strong>{{ komentar.name }} - {{ komentar.created | date(\"H:i:s d.m.Y\") }}</strong>
                            <p>{{ komentar.comment | slice(0, 40) }}</p>
                        </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-4 col-md-6\">
            <div class=\"card o-hidden card-hover\">
                <div class=\"card-header border-0\">
                    <div class=\"card-header-title\">
                        <h4>Poslednji upiti za rezervaciju</h4>
                    </div>
                </div>

                <div class=\"card-body pt-0\">
                    <ul class=\"StepProgress\">
                        {% for upit in upiti | slice(0, 4) %}
                            <li class=\"StepProgress-item\">
                                <strong>{{ upit.ime }}</strong>
                                <p>{{ upit.startDate | date(\"d.m.Y\") }} - {{ upit.endDate | date(\"d.m.Y\") }}</p>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"td-color-4 pt-4\">
                        <a href=\"{{ path('app_admin_reservation_list') }}\" class=\"btn btn-primary\">Vidi sve</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- New & Update end-->

{#        <!-- To Do List start-->#}
{#        <div class=\"col-xxl-4 col-md-6\">#}
{#            <div class=\"card o-hidden card-hover\">#}
{#                <div class=\"card-header border-0\">#}
{#                    <div class=\"card-header-title\">#}
{#                        <h4>To Do List</h4>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"card-body pt-0\">#}
{#                    <ul class=\"to-do-list\">#}
{#                        <li class=\"to-do-item\">#}
{#                            <div class=\"form-check user-checkbox\">#}
{#                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault\">#}
{#                            </div>#}
{#                            <div class=\"to-do-list-name\">#}
{#                                <strong>Pick up kids from school</strong>#}
{#                                <p>8 Hours</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"to-do-item\">#}
{#                            <div class=\"form-check user-checkbox\">#}
{#                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault1\">#}
{#                            </div>#}
{#                            <div class=\"to-do-list-name\">#}
{#                                <strong>Prepare or presentation.</strong>#}
{#                                <p>8 Hours</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"to-do-item\">#}
{#                            <div class=\"form-check user-checkbox\">#}
{#                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault2\">#}
{#                            </div>#}
{#                            <div class=\"to-do-list-name\">#}
{#                                <strong>Create invoice</strong>#}
{#                                <p>8 Hours</p>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"to-do-item\">#}
{#                            <div class=\"form-check user-checkbox\">#}
{#                                <input class=\"checkbox_animated check-it\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault3\">#}
{#                            </div>#}
{#                            <div class=\"to-do-list-name\">#}
{#                                <strong>Meeting with Alisa</strong>#}
{#                                <p>8 Hours</p>#}
{#                            </div>#}
{#                        </li>#}

{#                        <li class=\"to-do-item\">#}
{#                            <form class=\"row g-2\">#}
{#                                <div class=\"col-lg-8\">#}
{#                                    <input type=\"text\" class=\"form-control\" id=\"name\"#}
{#                                           placeholder=\"Enter Task Name\">#}
{#                                </div>#}
{#                                <div class=\"col-lg-4\">#}
{#                                    <button type=\"submit\" class=\"btn btn-primary w-100\">Add#}
{#                                        task</button>#}
{#                                </div>#}
{#                            </form>#}
{#                        </li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <!-- To Do List end-->#}

{#        <!-- Recent Activity start-->#}
{#        <div class=\"col-xxl-4 col-md-6\">#}
{#            <div class=\"card o-hidden card-hover\">#}
{#                <div class=\"card-header border-0\">#}
{#                    <div class=\"card-header-title\">#}
{#                        <h4>Recent Activity</h4>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"card-body pt-0\">#}
{#                    <ul class=\"recent-activity\">#}
{#                        <li class=\"recent-item\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <span class=\"lnr lnr-calendar-full\"></span>#}
{#                                <p>Calendar Updated</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-1\">Just Now</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"recent-item\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <i data-feather=\"alert-circle\"></i>#}
{#                                <p>Commrnted on a post</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-2\">5 Min</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"recent-item\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <i data-feather=\"truck\"></i>#}
{#                                <p>Order 392 shipped</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-3\">12 Min</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"recent-item\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <i data-feather=\"dollar-sign\"></i>#}
{#                                <p>Invoice 653 has been paid</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-4\">45 Min</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"recent-item\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <span class=\"lnr lnr-user\"></span>#}
{#                                <p>A new user has been added</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-1\">1 Hr</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"recent-item mb-0\">#}
{#                            <div class=\"recent-icon\">#}
{#                                <span class=\"lnr lnr-select\"></span>#}
{#                                <p>Finace report</p>#}
{#                            </div>#}

{#                            <div class=\"recent-timer\">#}
{#                                <h6 class=\"color-2\">Just Now</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <!-- Recent Activity end-->#}

{#        <!-- Browser States start-->#}
{#        <div class=\"col-xxl-4 col-md-6\">#}
{#            <div class=\"card o-hidden card-hover\">#}
{#                <div class=\"card-header border-0\">#}
{#                    <div class=\"card-header-title\">#}
{#                        <h4>Browser States</h4>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"card-body pt-0\">#}
{#                    <ul class=\"brower-states\">#}
{#                        <li class=\"brower-item\">#}
{#                            <div class=\"browser-image\">#}
{#                                <img src=\"assets/images/brower-image/chrome.png\" class=\"img-fluid\"#}
{#                                     alt=\"\">#}
{#                                <h5>Chrome</h5>#}
{#                            </div>#}

{#                            <div class=\"browser-progressbar\">#}
{#                                <h6>84%</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"brower-item\">#}
{#                            <div class=\"browser-image\">#}
{#                                <img src=\"assets/images/brower-image/firefox.png\" class=\"img-fluid\"#}
{#                                     alt=\"\">#}
{#                                <h5>Firefox</h5>#}
{#                            </div>#}

{#                            <div class=\"browser-progressbar\">#}
{#                                <h6>48%</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"brower-item\">#}
{#                            <div class=\"browser-image\">#}
{#                                <img src=\"assets/images/brower-image/internet-explorer.png\"#}
{#                                     class=\"img-fluid\" alt=\"\">#}
{#                                <h5>internet Explorer</h5>#}
{#                            </div>#}

{#                            <div class=\"browser-progressbar\">#}
{#                                <h6>35%</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"brower-item\">#}
{#                            <div class=\"browser-image\">#}
{#                                <img src=\"assets/images/brower-image/opera.png\" class=\"img-fluid\"#}
{#                                     alt=\"\">#}
{#                                <h5>Opera Mini</h5>#}
{#                            </div>#}

{#                            <div class=\"browser-progressbar\">#}
{#                                <h6>55%</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                        <li class=\"brower-item\">#}
{#                            <div class=\"browser-image\">#}
{#                                <img src=\"assets/images/brower-image/safari.png\" class=\"img-fluid\"#}
{#                                     alt=\"\">#}
{#                                <h5>Safari</h5>#}
{#                            </div>#}

{#                            <div class=\"browser-progressbar\">#}
{#                                <h6>20%</h6>#}
{#                            </div>#}
{#                        </li>#}
{#                    </ul>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <!-- Browser States end-->#}
    </div>
</div>", "admin/admin_include/content.html.twig", "/home/prikolic/public_html/prikolica/templates/admin/admin_include/content.html.twig");
    }
}
