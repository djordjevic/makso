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

/* shop/success.html.twig */
class __TwigTemplate_4c3e5011e8feccc54fb884fbe78db329c32756d8bb28d57dc068b7770473641a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/success.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "shop/success.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Potvrda kupovine - Prodaja autoprikolica, traktora."), "html", null, true);
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
        echo "    <meta name=\"robots\" content=\"index, follow\">
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
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
        $this->loadTemplate("include/header.html.twig", "shop/success.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/success.html.twig", 19)->display($context);
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
                    <h3>Kupovina</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Potvrda kupovine</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section Start -->
    <section class=\"pt-0\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 p-0\">
                    <div class=\"success-icon\">
                        <div class=\"main-container\">
                            <div class=\"check-container\">
                                <script src=\"https://cdn.lordicon.com/xdjxvujz.js\"></script>
                                <lord-icon
                                        src=\"https://cdn.lordicon.com/lupuorrc.json\"
                                        trigger=\"loop\"
                                        delay=\"2000\"
                                        colors=\"primary:#008000,secondary:#7e7e7e\"
                                        style=\"width:250px;height:250px\">
                                </lord-icon>
                            </div>
                        </div>
                        <div class=\"success-contain\">
                            <h4>Uspešno ste kreirali porudžbinu</h4>
                            <h5 class=\"font-light\">Porudžbina je uspešno kreirana i uskoro ćete biti kontaktirani od strane naših administratora!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section End -->

    <!-- Oder Details Section Start -->
    <section class=\"section-b-space cart-section order-details-table\">
        <div class=\"container\">
            <div class=\"title title1 title-effect mb-1 title-left\">
                <h2 class=\"mb-3\">Detalji porudžbine</h2>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <div class=\"col-sm-12 table-responsive\">
                        <table class=\"table cart-table table-borderless\">
                            <tbody>
                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderProducts"]) || array_key_exists("orderProducts", $context) ? $context["orderProducts"] : (function () { throw new RuntimeError('Variable "orderProducts" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 92
            echo "                            <tr class=\"table-order\">
                                <td>
                                    <a href=\"javascript:void(0)\">
                                        <img src=\"";
            // line 95
            if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod", [], "any", false, false, false, 95), "getSlikaMain", [], "method", false, false, false, 95))) {
                // line 96
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                echo "
                                                            ";
            } else {
                // line 98
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod", [], "any", false, false, false, 98), "getSlikaMain", [], "method", false, false, false, 98)), "html", null, true);
                echo "
                                                            ";
            }
            // line 99
            echo "\"
                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                    </a>
                                </td>
                                <td>
                                    <p>Proizvod</p>
                                    <h5>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 105), "html", null, true);
            echo "</h5>
                                </td>
                                <td>
                                    <p>Količina</p>
                                    <h5>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 109), "html", null, true);
            echo "</h5>
                                </td>
                                <td>
                                    <p>Cena</p>
                                    <h5>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pricePdv", [], "any", false, false, false, 113), 2, ".", ","), "html", null, true);
            echo "</h5>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </tbody>
                            <tfoot>
                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h5 class=\"font-light\">Ukupna cena :</h5>
                                </td>
                                <td>
                                    <h4>";
        // line 124
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 124, $this->source); })()), "totalPrice", [], "any", false, false, false, 124)), 2, ".", ","), "html", null, true);
        echo "</h4>
                                </td>
                            </tr>

                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h5 class=\"font-light\">PDV :</h5>
                                </td>
                                <td>
                                    <h4>";
        // line 133
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 133) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })()), "totalPrice", [], "any", false, false, false, 133))), 2, ".", ","), "html", null, true);
        echo "</h4>
                                </td>
                            </tr>

                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h4 class=\"theme-color fw-bold\">UKUPNO SA PDV:</h4>
                                </td>
                                <td>
                                    <h4 class=\"theme-color fw-bold\">";
        // line 142
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 142, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 142)), 2, ".", ","), "html", null, true);
        echo "</h4>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"order-success\">
                        <div class=\"row g-4\">
                            <div class=\"col-sm-6\">
                                <h4>Pregled porudžbine</h4>
                                <ul class=\"order-details\">
                                    <li>ID: ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "html", null, true);
        echo "</li>
                                    <li>Datum: ";
        // line 156
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "dateAdded", [], "any", false, false, false, 156), "d.m.Y"), "html", null, true);
        echo "</li>
                                    <li>Ukupna cena: ";
        // line 157
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 157)), 2, ".", ","), "html", null, true);
        echo "</li>
                                </ul>
                            </div>

                            <div class=\"col-sm-6\">
                                <h4>Adresa za dostavu</h4>
                                <ul class=\"order-details\">
                                    <li>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "imePrimaoca", [], "any", false, false, false, 164), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "prezimePrimaoca", [], "any", false, false, false, 164), "html", null, true);
        echo "</li>
                                    <li>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 165, $this->source); })()), "adresaPrimaoca", [], "any", false, false, false, 165), "html", null, true);
        echo "</li>
                                    <li>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 166, $this->source); })()), "gradPrimaoca", [], "any", false, false, false, 166), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 166, $this->source); })()), "pttPrimaoca", [], "any", false, false, false, 166), "html", null, true);
        echo "</li>
                                    <li>Tel: ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 167, $this->source); })()), "telefonPrimaoca", [], "any", false, false, false, 167), "html", null, true);
        echo "</li>
                                </ul>
                            </div>

                            <div class=\"col-12\">
                                <div class=\"payment-mode\">
                                    <h4>Način plaćanja</h4>
                                    <p>
                                        ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 175, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 175) == 1)) {
            // line 176
            echo "                                            Pouzeće
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 177
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 177, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 177) == 2)) {
            // line 178
            echo "                                            Čekovi
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 179
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 179, $this->source); })()), "nacinPlacanja", [], "any", false, false, false, 179) == 3)) {
            // line 180
            echo "                                            Kartica
                                        ";
        } else {
            // line 182
            echo "                                            Uplata na račun
                                        ";
        }
        // line 184
        echo "                                    </p>
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"delivery-sec\">
                                    <h3>Rok dostave: <span>2 radna dana</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Details Section End -->

    <!-- footer start -->
    ";
        // line 202
        $this->loadTemplate("include/footer.html.twig", "shop/success.html.twig", 202)->display($context);
        // line 203
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 207
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 211
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 215
        echo "    ";
        // line 216
        echo "    ";
        // line 217
        echo "    ";
        // line 218
        echo "    ";
        // line 219
        echo "    ";
        // line 220
        echo "    ";
        // line 221
        echo "    ";
        // line 222
        echo "    ";
        // line 223
        echo "    ";
        // line 224
        echo "    ";
        // line 225
        echo "    ";
        // line 226
        echo "    ";
        // line 227
        echo "    ";
        // line 228
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 231
        $this->loadTemplate("include/top.html.twig", "shop/success.html.twig", 231)->display($context);
        // line 232
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 238
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 238,  466 => 237,  453 => 232,  451 => 231,  446 => 228,  444 => 227,  442 => 226,  440 => 225,  438 => 224,  436 => 223,  434 => 222,  432 => 221,  430 => 220,  428 => 219,  426 => 218,  424 => 217,  422 => 216,  420 => 215,  415 => 211,  410 => 207,  405 => 203,  403 => 202,  383 => 184,  379 => 182,  375 => 180,  373 => 179,  370 => 178,  368 => 177,  365 => 176,  363 => 175,  352 => 167,  346 => 166,  342 => 165,  336 => 164,  326 => 157,  322 => 156,  318 => 155,  302 => 142,  290 => 133,  278 => 124,  269 => 117,  259 => 113,  252 => 109,  245 => 105,  237 => 99,  231 => 98,  225 => 96,  223 => 95,  218 => 92,  214 => 91,  160 => 40,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Potvrda kupovine - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
{% endblock title %}
{% block metatags %}
    {{ parent() }}
    {#    <meta name=\"description\" content=\"{{ metaData.pageMetaDescription }}\"/>#}
    {#    <meta name=\"keywords\" content=\"{{ metaData.pageMetaKeywords }}\"/>#}
    <meta name=\"robots\" content=\"index, follow\">
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
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
                    <h3>Kupovina</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Potvrda kupovine</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section Start -->
    <section class=\"pt-0\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 p-0\">
                    <div class=\"success-icon\">
                        <div class=\"main-container\">
                            <div class=\"check-container\">
                                <script src=\"https://cdn.lordicon.com/xdjxvujz.js\"></script>
                                <lord-icon
                                        src=\"https://cdn.lordicon.com/lupuorrc.json\"
                                        trigger=\"loop\"
                                        delay=\"2000\"
                                        colors=\"primary:#008000,secondary:#7e7e7e\"
                                        style=\"width:250px;height:250px\">
                                </lord-icon>
                            </div>
                        </div>
                        <div class=\"success-contain\">
                            <h4>Uspešno ste kreirali porudžbinu</h4>
                            <h5 class=\"font-light\">Porudžbina je uspešno kreirana i uskoro ćete biti kontaktirani od strane naših administratora!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Success Section End -->

    <!-- Oder Details Section Start -->
    <section class=\"section-b-space cart-section order-details-table\">
        <div class=\"container\">
            <div class=\"title title1 title-effect mb-1 title-left\">
                <h2 class=\"mb-3\">Detalji porudžbine</h2>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <div class=\"col-sm-12 table-responsive\">
                        <table class=\"table cart-table table-borderless\">
                            <tbody>
                            {% for product in orderProducts %}
                            <tr class=\"table-order\">
                                <td>
                                    <a href=\"javascript:void(0)\">
                                        <img src=\"{% if product.proizvod.getSlikaMain() is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.proizvod.getSlikaMain()) }}
                                                            {% endif %}\"
                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                    </a>
                                </td>
                                <td>
                                    <p>Proizvod</p>
                                    <h5>{{ product.productName }}</h5>
                                </td>
                                <td>
                                    <p>Količina</p>
                                    <h5>{{ product.quantity }}</h5>
                                </td>
                                <td>
                                    <p>Cena</p>
                                    <h5>{{ product.pricePdv | number_format(2, '.', ',') }}</h5>
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h5 class=\"font-light\">Ukupna cena :</h5>
                                </td>
                                <td>
                                    <h4>{{ (order.totalPrice | round) | number_format(2, '.', ',') }}</h4>
                                </td>
                            </tr>

                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h5 class=\"font-light\">PDV :</h5>
                                </td>
                                <td>
                                    <h4>{{ ((order.totalPricePdv - order.totalPrice) | round) | number_format(2, '.', ',') }}</h4>
                                </td>
                            </tr>

                            <tr class=\"table-order\">
                                <td colspan=\"3\">
                                    <h4 class=\"theme-color fw-bold\">UKUPNO SA PDV:</h4>
                                </td>
                                <td>
                                    <h4 class=\"theme-color fw-bold\">{{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</h4>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"order-success\">
                        <div class=\"row g-4\">
                            <div class=\"col-sm-6\">
                                <h4>Pregled porudžbine</h4>
                                <ul class=\"order-details\">
                                    <li>ID: {{ order.id  }}</li>
                                    <li>Datum: {{ order.dateAdded | date(\"d.m.Y\") }}</li>
                                    <li>Ukupna cena: {{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</li>
                                </ul>
                            </div>

                            <div class=\"col-sm-6\">
                                <h4>Adresa za dostavu</h4>
                                <ul class=\"order-details\">
                                    <li>{{ order.imePrimaoca }} {{ order.prezimePrimaoca }}</li>
                                    <li>{{ order.adresaPrimaoca }}</li>
                                    <li>{{ order.gradPrimaoca }}, {{ order.pttPrimaoca }}</li>
                                    <li>Tel: {{ order.telefonPrimaoca }}</li>
                                </ul>
                            </div>

                            <div class=\"col-12\">
                                <div class=\"payment-mode\">
                                    <h4>Način plaćanja</h4>
                                    <p>
                                        {% if order.nacinPlacanja == 1 %}
                                            Pouzeće
                                        {% elseif order.nacinPlacanja == 2 %}
                                            Čekovi
                                        {% elseif order.nacinPlacanja == 3 %}
                                            Kartica
                                        {% else  %}
                                            Uplata na račun
                                        {% endif %}
                                    </p>
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"delivery-sec\">
                                    <h3>Rok dostave: <span>2 radna dana</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Details Section End -->

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

{% endblock footerjavascript %}
", "shop/success.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/success.html.twig");
    }
}
