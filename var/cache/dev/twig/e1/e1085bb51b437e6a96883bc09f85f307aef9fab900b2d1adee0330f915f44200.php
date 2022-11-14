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

/* admin_order/invoice_pdf.html.twig */
class __TwigTemplate_5947d4417264fc1004933abf8e76b474d8f62df00a2024c6fcd04cc3256f5c19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/invoice_pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_order/invoice_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"description\" content=\"multikart\">
    <meta name=\"keywords\" content=\"multikart\">
    <meta name=\"author\" content=\"multikart\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_pdf/images/icon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <title>Voxo | Invoice template </title>

    <!--Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap\"
          rel=\"stylesheet\">

    <!-- Icons -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset_pdf/css/vendors/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Bootstrap css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset_pdf/css/vendors/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Theme css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset_pdf/css/style.css"), "html", null, true);
        echo "\">

</head>

<body class=\"theme-color2 bg-light\">

<!-- invoice start -->
<section class=\"theme-invoice-3 section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 m-auto\">
                <div class=\"invoice-wrapper\">
                    <div class=\"invoice-header\">
                        <ul>
                            <li>
                                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset_pdf/images/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo\">
                            </li>
                            <li>
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                <h4>prikolica.shop</h4>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                <h4>support@multikart.com</h4>
                            </li>
                        </ul>
                    </div>
                    <div class=\"invoice-body\">
                        <div class=\"top-sec\">
                            <div class=\"address-detail\">
                                <h2>Porudžbina #";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "</h2>
                                <div class=\"mt-3 row\">
                                    <div class=\"col-lg-8 col-sm-6\">
                                        <h4 class=\"mb-2\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "adresaPrimaoca", [], "any", false, false, false, 60), "html", null, true);
        echo "</h4>
                                        <h4 class=\"mb-0\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "gradPrimaoca", [], "any", false, false, false, 61), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "pttPrimaoca", [], "any", false, false, false, 61), "html", null, true);
        echo "</h4>
                                    </div>
                                    <div class=\"col-lg-4 col-sm-6 mt-md-0 mt-2\">
                                        <ul class=\"date-detail\">
                                            <li><span>Datum prometa :</span>
                                                <h4> ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "dateAdded", [], "any", false, false, false, 66), "d.m.Y"), "html", null, true);
        echo "</h4>
                                            </li>
                                            <li><span>Porudžbina :</span>
                                                <h4> #";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "</h4>
                                            </li>
                                            <li><span>Email :</span>
                                                <h4> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()), "emailPrimaoca", [], "any", false, false, false, 72), "html", null, true);
        echo "</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive-md\">
                            <table class=\"table table-borderless mb-0\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Proizvod</th>
                                    <th scope=\"col\">Cena</th>
                                    <th scope=\"col\">Količina</th>
                                    <th scope=\"col\">Ukupno</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderProducts"]) || array_key_exists("orderProducts", $context) ? $context["orderProducts"] : (function () { throw new RuntimeError('Variable "orderProducts" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 92
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93), "html", null, true);
            echo "</th>
                                    <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                    <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95), 2, ".", ","), "html", null, true);
            echo "</td>
                                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 97)), 2, ".", ","), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"2\"></td>
                                    <td class=\"font-bold text-dark\" colspan=\"2\">UKUPNO sa PDV</td>
                                    <td class=\"font-bold text-theme\">";
        // line 105
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "totalPrice", [], "any", false, false, false, 105) * 1.1999999999999999555910790149937383830547332763671875), 2, ".", ","), "html", null, true);
        echo "</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- invoice end -->

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin_order/invoice_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 105,  223 => 100,  206 => 97,  202 => 96,  198 => 95,  194 => 94,  190 => 93,  187 => 92,  170 => 91,  148 => 72,  142 => 69,  136 => 66,  126 => 61,  122 => 60,  116 => 57,  98 => 42,  80 => 27,  74 => 24,  68 => 21,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"description\" content=\"multikart\">
    <meta name=\"keywords\" content=\"multikart\">
    <meta name=\"author\" content=\"multikart\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets_pdf/images/icon.png') }}\" type=\"image/x-icon\">
    <title>Voxo | Invoice template </title>

    <!--Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap\"
          rel=\"stylesheet\">

    <!-- Icons -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('asset_pdf/css/vendors/font-awesome.css') }}\">

    <!-- Bootstrap css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('asset_pdf/css/vendors/bootstrap.css') }}\">

    <!-- Theme css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('asset_pdf/css/style.css') }}\">

</head>

<body class=\"theme-color2 bg-light\">

<!-- invoice start -->
<section class=\"theme-invoice-3 section-b-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 m-auto\">
                <div class=\"invoice-wrapper\">
                    <div class=\"invoice-header\">
                        <ul>
                            <li>
                                <img src=\"{{ asset('asset_pdf/images/logo.png') }}\" class=\"img-fluid\" alt=\"logo\">
                            </li>
                            <li>
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                <h4>prikolica.shop</h4>
                            </li>
                            <li>
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                <h4>support@multikart.com</h4>
                            </li>
                        </ul>
                    </div>
                    <div class=\"invoice-body\">
                        <div class=\"top-sec\">
                            <div class=\"address-detail\">
                                <h2>Porudžbina #{{ order.id }}</h2>
                                <div class=\"mt-3 row\">
                                    <div class=\"col-lg-8 col-sm-6\">
                                        <h4 class=\"mb-2\">{{ order.adresaPrimaoca }}</h4>
                                        <h4 class=\"mb-0\">{{ order.gradPrimaoca }}, {{ order.pttPrimaoca }}</h4>
                                    </div>
                                    <div class=\"col-lg-4 col-sm-6 mt-md-0 mt-2\">
                                        <ul class=\"date-detail\">
                                            <li><span>Datum prometa :</span>
                                                <h4> {{ order.dateAdded | date(\"d.m.Y\") }}</h4>
                                            </li>
                                            <li><span>Porudžbina :</span>
                                                <h4> #{{ order.id }}</h4>
                                            </li>
                                            <li><span>Email :</span>
                                                <h4> {{ order.emailPrimaoca }}</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive-md\">
                            <table class=\"table table-borderless mb-0\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Proizvod</th>
                                    <th scope=\"col\">Cena</th>
                                    <th scope=\"col\">Količina</th>
                                    <th scope=\"col\">Ukupno</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for product in orderProducts %}
                                <tr>
                                    <th scope=\"row\">{{ loop.index }}</th>
                                    <td>{{ product.productName }}</td>
                                    <td>{{ product.price | number_format(2, '.', ',') }}</td>
                                    <td>{{ product.quantity }}</td>
                                    <td>{{ (product.price * product.quantity)  | number_format(2, '.', ',') }}</td>
                                </tr>
                                {% endfor %}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"2\"></td>
                                    <td class=\"font-bold text-dark\" colspan=\"2\">UKUPNO sa PDV</td>
                                    <td class=\"font-bold text-theme\">{{ (order.totalPrice*1.2) | number_format(2, '.', ',') }}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- invoice end -->

</body>

</html>", "admin_order/invoice_pdf.html.twig", "/home/prikolic/public_html/prikolica/templates/admin_order/invoice_pdf.html.twig");
    }
}
