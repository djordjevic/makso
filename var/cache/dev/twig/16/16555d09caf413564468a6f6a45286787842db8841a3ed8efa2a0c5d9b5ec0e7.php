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

/* shop/proizvod.html.twig */
class __TwigTemplate_ea45d2144545a56de184967123b56c595779daffd213859139b3f1777ead51d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/proizvod.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/proizvod.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 7
        echo "    <meta name=\"theme-color\" content=\"#e22454\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
    <meta name=\"apple-mobile-web-app-title\" content=\"Voxo\" />
    <meta name=\"msapplication-TileImage\" content=\"assets/images/favicon/2.png\" />
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"
    ";
        // line 23
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "metaDescription", [], "any", false, false, false, 23))) {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "metaDescription", [], "any", false, false, false, 24)), "html", null, true);
            echo "
    ";
        } else {
            // line 26
            echo "        Distribucija i prodaja autoprikolica i traktora.
    ";
        }
        // line 27
        echo "\">
    <meta name=\"keywords\" content=\"
    ";
        // line 29
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "metaKeywords", [], "any", false, false, false, 29))) {
            // line 30
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "metaKeywords", [], "any", false, false, false, 30)), "html", null, true);
            echo "
    ";
        } else {
            // line 32
            echo "        autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje
    ";
        }
        // line 33
        echo "\">
    <meta name=\"author\" content=\"prikolica.shop\">
    <link rel=\"icon\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon/2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <!-- facebook -->
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:title\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39)), "html", null, true);
        echo " | prikolica.shop\" />
    <meta property=\"og:url\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "uri", [], "any", false, false, false, 40), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/images/logo.png"), "html", null, true);
        echo "\"/>
    <meta property=\"og:site_name\" content=\"prikolice.shop - najveći izbor autoprikolica u Srbiji\"/>
    <meta property=\"fb:admins\" content=\"1285367254\" />
    <meta property=\"og:description\" content=\"\" />
    <!-- ./facebook -->

    <title>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "title", [], "any", false, false, false, 47)), "html", null, true);
        echo " - Prodaja autoprikolica, traktora. | prikolica.shop</title>

    <!-- Google font -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- bootstrap css -->
    <link id=\"rtl-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- font-awesome css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- feather icon css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/feather-icon.css"), "html", null, true);
        echo "\">

    <!--Plugin CSS file with desired skin-->
    <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/ion.rangeSlider.min.css"), "html", null, true);
        echo "\">

    <!-- animation css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/animate.css"), "html", null, true);
        echo "\">

    <!-- slick css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/slick/slick-theme.css"), "html", null, true);
        echo "\">

    <!-- Theme css -->
    <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo2.css"), "html", null, true);
        echo "\">
    <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo1.css"), "html", null, true);
        echo "\">

</head>

<body class=\"theme-color1 light ltr\">

";
        // line 80
        $this->loadTemplate("include/header.html.twig", "shop/proizvod.html.twig", 80)->display($context);
        // line 81
        echo "<!-- mobile fix menu -->
";
        // line 82
        $this->loadTemplate("include/mobile_menu.html.twig", "shop/proizvod.html.twig", 82)->display($context);
        // line 83
        echo "<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0\" nonce=\"kV2PhO6v\"></script>
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
                <h3>Proizvod</h3>
                <nav>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                <i class=\"fas fa-home\"></i>
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 109, $this->source); })()), "title", [], "any", false, false, false, 109)), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=\"container\">
        <div class=\"row gx-4 gy-5\">
            <div class=\"col-12\">
                <div class=\"details-items\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"degree-section\">
                                <div class=\"details-image ratio_asos\">
                                    ";
        // line 125
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 125, $this->source); })()), "slikaMain", [], "any", false, false, false, 125))) {
            // line 126
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "\" id=\"zoom_01\"
                                                     data-zoom-image=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-0 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                        ";
        } else {
            // line 134
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 136, $this->source); })()), "slikaMain", [], "any", false, false, false, 136)), "html", null, true);
            echo "\" id=\"zoom_01\"
                                                     data-zoom-image=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 137, $this->source); })()), "slikaMain", [], "any", false, false, false, 137)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-0 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 142
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika1", [], "any", true, true, false, 142) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 142, $this->source); })()), "slika1", [], "any", false, false, false, 142)))) {
            // line 143
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 145, $this->source); })()), "slika1", [], "any", false, false, false, 145)), "html", null, true);
            echo "\" id=\"zoom_02\"
                                                     data-zoom-image=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 146, $this->source); })()), "slika1", [], "any", false, false, false, 146)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 151
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika2", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 151, $this->source); })()), "slika2", [], "any", false, false, false, 151)))) {
            // line 152
            echo "                                    <div>
                                        <div class=\"product-image-tag\">
                                            <img src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 154, $this->source); })()), "slika2", [], "any", false, false, false, 154)), "html", null, true);
            echo "\" id=\"zoom_03\"
                                                 data-zoom-image=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 155, $this->source); })()), "slika2", [], "any", false, false, false, 155)), "html", null, true);
            echo "\"
                                                 class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                        </div>
                                    </div>
                                    ";
        }
        // line 160
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika3", [], "any", true, true, false, 160) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 160, $this->source); })()), "slika3", [], "any", false, false, false, 160)))) {
            // line 161
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 163, $this->source); })()), "slika3", [], "any", false, false, false, 163)), "html", null, true);
            echo "\" id=\"zoom_04\"
                                                     data-zoom-image=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 164, $this->source); })()), "slika3", [], "any", false, false, false, 164)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 169
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika4", [], "any", true, true, false, 169) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 169, $this->source); })()), "slika4", [], "any", false, false, false, 169)))) {
            // line 170
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 172, $this->source); })()), "slika4", [], "any", false, false, false, 172)), "html", null, true);
            echo "\" id=\"zoom_05\"
                                                     data-zoom-image=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 173, $this->source); })()), "slika4", [], "any", false, false, false, 173)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 178
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika5", [], "any", true, true, false, 178) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 178, $this->source); })()), "slika5", [], "any", false, false, false, 178)))) {
            // line 179
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 181, $this->source); })()), "slika5", [], "any", false, false, false, 181)), "html", null, true);
            echo "\" id=\"zoom_06\"
                                                     data-zoom-image=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 182, $this->source); })()), "slika5", [], "any", false, false, false, 182)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 187
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika6", [], "any", true, true, false, 187) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 187, $this->source); })()), "slika6", [], "any", false, false, false, 187)))) {
            // line 188
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 190, $this->source); })()), "slika6", [], "any", false, false, false, 190)), "html", null, true);
            echo "\" id=\"zoom_07\"
                                                     data-zoom-image=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 191, $this->source); })()), "slika6", [], "any", false, false, false, 191)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 196
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika7", [], "any", true, true, false, 196) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), "slika7", [], "any", false, false, false, 196)))) {
            // line 197
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 199, $this->source); })()), "slika7", [], "any", false, false, false, 199)), "html", null, true);
            echo "\" id=\"zoom_08\"
                                                     data-zoom-image=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 200, $this->source); })()), "slika7", [], "any", false, false, false, 200)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 205
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika8", [], "any", true, true, false, 205) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 205, $this->source); })()), "slika8", [], "any", false, false, false, 205)))) {
            // line 206
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 208, $this->source); })()), "slika8", [], "any", false, false, false, 208)), "html", null, true);
            echo "\" id=\"zoom_09\"
                                                     data-zoom-image=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 209, $this->source); })()), "slika8", [], "any", false, false, false, 209)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 214
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika9", [], "any", true, true, false, 214) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 214, $this->source); })()), "slika9", [], "any", false, false, false, 214)))) {
            // line 215
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 217, $this->source); })()), "slika9", [], "any", false, false, false, 217)), "html", null, true);
            echo "\" id=\"zoom_10\"
                                                     data-zoom-image=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 218, $this->source); })()), "slika9", [], "any", false, false, false, 218)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 223
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika10", [], "any", true, true, false, 223) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 223, $this->source); })()), "slika10", [], "any", false, false, false, 223)))) {
            // line 224
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 226, $this->source); })()), "slika10", [], "any", false, false, false, 226)), "html", null, true);
            echo "\" id=\"zoom_11\"
                                                     data-zoom-image=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 227, $this->source); })()), "slika10", [], "any", false, false, false, 227)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 232
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika11", [], "any", true, true, false, 232) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 232, $this->source); })()), "slika11", [], "any", false, false, false, 232)))) {
            // line 233
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 235, $this->source); })()), "slika11", [], "any", false, false, false, 235)), "html", null, true);
            echo "\" id=\"zoom_12\"
                                                     data-zoom-image=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 236, $this->source); })()), "slika11", [], "any", false, false, false, 236)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 241
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika12", [], "any", true, true, false, 241) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 241, $this->source); })()), "slika12", [], "any", false, false, false, 241)))) {
            // line 242
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 244, $this->source); })()), "slika12", [], "any", false, false, false, 244)), "html", null, true);
            echo "\" id=\"zoom_13\"
                                                     data-zoom-image=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 245, $this->source); })()), "slika12", [], "any", false, false, false, 245)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 250
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika13", [], "any", true, true, false, 250) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 250, $this->source); })()), "slika13", [], "any", false, false, false, 250)))) {
            // line 251
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 253, $this->source); })()), "slika13", [], "any", false, false, false, 253)), "html", null, true);
            echo "\" id=\"zoom_14\"
                                                     data-zoom-image=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 254, $this->source); })()), "slika13", [], "any", false, false, false, 254)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 259
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika14", [], "any", true, true, false, 259) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 259, $this->source); })()), "slika14", [], "any", false, false, false, 259)))) {
            // line 260
            echo "                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 262, $this->source); })()), "slika14", [], "any", false, false, false, 262)), "html", null, true);
            echo "\" id=\"zoom_15\"
                                                     data-zoom-image=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 263, $this->source); })()), "slika14", [], "any", false, false, false, 263)), "html", null, true);
            echo "\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    ";
        }
        // line 268
        echo "                                </div>
                                <div class=\"details-image-option black-slide mt-4 rounded\">
                                    ";
        // line 270
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slikaMain", [], "any", true, true, false, 270) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 270, $this->source); })()), "slikaMain", [], "any", false, false, false, 270)))) {
            // line 271
            echo "                                    <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 271, $this->source); })()), "slikaMain", [], "any", false, false, false, 271)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 273
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika1", [], "any", true, true, false, 273) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 273, $this->source); })()), "slika1", [], "any", false, false, false, 273)))) {
            // line 274
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 274, $this->source); })()), "slika1", [], "any", false, false, false, 274)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 276
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika2", [], "any", true, true, false, 276) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 276, $this->source); })()), "slika2", [], "any", false, false, false, 276)))) {
            // line 277
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 277, $this->source); })()), "slika2", [], "any", false, false, false, 277)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 279
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika3", [], "any", true, true, false, 279) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 279, $this->source); })()), "slika3", [], "any", false, false, false, 279)))) {
            // line 280
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 280, $this->source); })()), "slika3", [], "any", false, false, false, 280)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 282
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika4", [], "any", true, true, false, 282) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 282, $this->source); })()), "slika4", [], "any", false, false, false, 282)))) {
            // line 283
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 283, $this->source); })()), "slika4", [], "any", false, false, false, 283)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 285
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika5", [], "any", true, true, false, 285) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 285, $this->source); })()), "slika5", [], "any", false, false, false, 285)))) {
            // line 286
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 286, $this->source); })()), "slika5", [], "any", false, false, false, 286)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 288
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika6", [], "any", true, true, false, 288) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 288, $this->source); })()), "slika6", [], "any", false, false, false, 288)))) {
            // line 289
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 289, $this->source); })()), "slika6", [], "any", false, false, false, 289)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 291
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika7", [], "any", true, true, false, 291) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 291, $this->source); })()), "slika7", [], "any", false, false, false, 291)))) {
            // line 292
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 292, $this->source); })()), "slika7", [], "any", false, false, false, 292)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 294
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika8", [], "any", true, true, false, 294) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 294, $this->source); })()), "slika8", [], "any", false, false, false, 294)))) {
            // line 295
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 295, $this->source); })()), "slika8", [], "any", false, false, false, 295)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 297
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika9", [], "any", true, true, false, 297) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 297, $this->source); })()), "slika9", [], "any", false, false, false, 297)))) {
            // line 298
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 298, $this->source); })()), "slika9", [], "any", false, false, false, 298)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 300
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika10", [], "any", true, true, false, 300) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 300, $this->source); })()), "slika10", [], "any", false, false, false, 300)))) {
            // line 301
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 301, $this->source); })()), "slika10", [], "any", false, false, false, 301)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 303
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika11", [], "any", true, true, false, 303) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 303, $this->source); })()), "slika11", [], "any", false, false, false, 303)))) {
            // line 304
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 304, $this->source); })()), "slika11", [], "any", false, false, false, 304)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 306
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika12", [], "any", true, true, false, 306) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 306, $this->source); })()), "slika12", [], "any", false, false, false, 306)))) {
            // line 307
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 307, $this->source); })()), "slika12", [], "any", false, false, false, 307)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 309
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika13", [], "any", true, true, false, 309) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 309, $this->source); })()), "slika13", [], "any", false, false, false, 309)))) {
            // line 310
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 310, $this->source); })()), "slika13", [], "any", false, false, false, 310)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 312
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika14", [], "any", true, true, false, 312) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 312, $this->source); })()), "slika14", [], "any", false, false, false, 312)))) {
            // line 313
            echo "                                        <div><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 313, $this->source); })()), "slika14", [], "any", false, false, false, 313)), "html", null, true);
            echo "\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    ";
        }
        // line 315
        echo "                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-6\">
                            <div class=\"cloth-details-size\">
                                <div class=\"details-image-concept\">
                                    <h3 class=\"text-muted\">";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 323, $this->source); })()), "kategorija", [], "any", false, false, false, 323), "getName", [], "method", false, false, false, 323), "html", null, true);
        echo "</h3>
                                    <h2>";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 324, $this->source); })()), "title", [], "any", false, false, false, 324), "html", null, true);
        echo "</h2>
                                </div>

                                <div class=\"label-section\">
                                        ";
        // line 328
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 328, $this->source); })()), "flNewProduct", [], "any", false, false, false, 328) == 1)) {
            // line 329
            echo "                                            <span class=\"label label-black\">Novo</span>
                                        ";
        }
        // line 331
        echo "                                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331)) {
            // line 332
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332), "FirmaIliFizickoLice", [], "any", false, false, false, 332) == 1)) {
                // line 333
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 333, $this->source); })()), "flDiscountVp", [], "any", false, false, false, 333) == 1)) {
                    // line 334
                    echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                }
                // line 336
                echo "                                            ";
            } else {
                // line 337
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 337, $this->source); })()), "flDiscount", [], "any", false, false, false, 337) == 1)) {
                    // line 338
                    echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                }
                // line 340
                echo "                                            ";
            }
            // line 341
            echo "                                        ";
        } else {
            // line 342
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 342, $this->source); })()), "flDiscount", [], "any", false, false, false, 342) == 1)) {
                // line 343
                echo "                                                <span class=\"label label-theme\">Popust</span>
                                            ";
            }
            // line 345
            echo "                                        ";
        }
        // line 346
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 346, $this->source); })()), "flOutOfStock", [], "any", false, false, false, 346) == 1)) {
            // line 347
            echo "                                            <span class=\"label label-theme\">Nema na stanju</span>
                                        ";
        } else {
            // line 349
            echo "                                            <span class=\"label label-theme\">Dostupno</span>
                                        ";
        }
        // line 351
        echo "                                </div>
                                ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "user", [], "any", false, false, false, 352)) {
            // line 353
            echo "                                    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", [], "any", false, false, false, 353), "FirmaIliFizickoLice", [], "any", false, false, false, 353), [0 => 1, 1 => 4])) {
                // line 354
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 354, $this->source); })()), "flDiscountVp", [], "any", false, false, false, 354) == 1)) {
                    // line 355
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 355, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 355) > 0)) {
                        // line 356
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 356, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 356) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 356, $this->source); })()), "taxPercentage", [], "any", false, false, false, 356) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din
                                                    <del>";
                        // line 357
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 357, $this->source); })()), "priceVpDin", [], "any", false, false, false, 357) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 357, $this->source); })()), "taxPercentage", [], "any", false, false, false, 357) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din</del>
                                                </h3>
                                                <h4 class=\"text-muted\">Cena na koju se obračunava subvencija za gazdinstva:</h4>
                                                <h3 class=\"price-detail\">";
                        // line 360
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 360, $this->source); })()), "discountVpPriceDin", [], "any", false, false, false, 360)), 2, ".", ","), "html", null, true);
                        echo " din</h3>
                                            ";
                    } else {
                        // line 362
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 362, $this->source); })()), "discountVpPriceEur", [], "any", false, false, false, 362), 2, ".", ","), "html", null, true);
                        echo " eur
                                                    <del>";
                        // line 363
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 363, $this->source); })()), "priceVpEur", [], "any", false, false, false, 363), 2, ".", ","), "html", null, true);
                        echo " eur</del>
                                                </h3>
                                            ";
                    }
                    // line 366
                    echo "                                        ";
                } else {
                    // line 367
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 367, $this->source); })()), "priceVpDin", [], "any", false, false, false, 367) > 0)) {
                        // line 368
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 368, $this->source); })()), "priceVpDin", [], "any", false, false, false, 368) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 368, $this->source); })()), "taxPercentage", [], "any", false, false, false, 368) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din</h3>
                                                <h4 class=\"text-muted\">Cena na koju se obračunava subvencija za gazdinstva:</h4>
                                                <h3 class=\"price-detail\">";
                        // line 370
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 370, $this->source); })()), "priceVpDin", [], "any", false, false, false, 370)), 2, ".", ","), "html", null, true);
                        echo " din</h3>
                                            ";
                    } else {
                        // line 372
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 372, $this->source); })()), "priceVpEur", [], "any", false, false, false, 372), 2, ".", ","), "html", null, true);
                        echo " eur</h3>
                                            ";
                    }
                    // line 374
                    echo "                                        ";
                }
                // line 375
                echo "                                    ";
            } else {
                // line 376
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 376, $this->source); })()), "flDiscount", [], "any", false, false, false, 376) == 1)) {
                    // line 377
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 377, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 377) > 0)) {
                        // line 378
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 378, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 378) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 378, $this->source); })()), "taxPercentage", [], "any", false, false, false, 378) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din
                                                    <del>";
                        // line 379
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 379, $this->source); })()), "priceDin", [], "any", false, false, false, 379) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 379, $this->source); })()), "taxPercentage", [], "any", false, false, false, 379) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din</del>
                                                </h3>
                                            ";
                    } else {
                        // line 382
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 382, $this->source); })()), "discountPriceEur", [], "any", false, false, false, 382), 2, ".", ","), "html", null, true);
                        echo " eur
                                                    <del>";
                        // line 383
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 383, $this->source); })()), "priceEur", [], "any", false, false, false, 383), 2, ".", ","), "html", null, true);
                        echo " eur</del>
                                                </h3>
                                            ";
                    }
                    // line 386
                    echo "                                        ";
                } else {
                    // line 387
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 387, $this->source); })()), "priceDin", [], "any", false, false, false, 387) > 0)) {
                        // line 388
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 388, $this->source); })()), "priceDin", [], "any", false, false, false, 388) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 388, $this->source); })()), "taxPercentage", [], "any", false, false, false, 388) / 100) + 1))), 2, ".", ","), "html", null, true);
                        echo " din</h3>
                                            ";
                    } else {
                        // line 390
                        echo "                                                <h3 class=\"price-detail\">";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 390, $this->source); })()), "priceEur", [], "any", false, false, false, 390), 2, ".", ","), "html", null, true);
                        echo " eur</h3>
                                            ";
                    }
                    // line 392
                    echo "                                        ";
                }
                // line 393
                echo "                                    ";
            }
            // line 394
            echo "                                ";
        } else {
            // line 395
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 395, $this->source); })()), "flDiscount", [], "any", false, false, false, 395) == 1)) {
                // line 396
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 396, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 396) > 0)) {
                    // line 397
                    echo "                                            <h3 class=\"price-detail\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 397, $this->source); })()), "discountPriceDin", [], "any", false, false, false, 397) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 397, $this->source); })()), "taxPercentage", [], "any", false, false, false, 397) / 100) + 1))), 2, ".", ","), "html", null, true);
                    echo " din
                                                <del>";
                    // line 398
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 398, $this->source); })()), "priceDin", [], "any", false, false, false, 398) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 398, $this->source); })()), "taxPercentage", [], "any", false, false, false, 398) / 100) + 1))), 2, ".", ","), "html", null, true);
                    echo " din</del>
                                            </h3>
                                        ";
                } else {
                    // line 401
                    echo "                                            <h3 class=\"price-detail\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 401, $this->source); })()), "discountPriceEur", [], "any", false, false, false, 401), 2, ".", ","), "html", null, true);
                    echo " eur
                                                <del>";
                    // line 402
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 402, $this->source); })()), "priceEur", [], "any", false, false, false, 402), 2, ".", ","), "html", null, true);
                    echo " eur</del>
                                            </h3>
                                        ";
                }
                // line 405
                echo "                                    ";
            } else {
                // line 406
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 406, $this->source); })()), "priceDin", [], "any", false, false, false, 406) > 0)) {
                    // line 407
                    echo "                                            <h3 class=\"price-detail\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 407, $this->source); })()), "priceDin", [], "any", false, false, false, 407) * ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 407, $this->source); })()), "taxPercentage", [], "any", false, false, false, 407) / 100) + 1))), 2, ".", ","), "html", null, true);
                    echo " din</h3>

                                        ";
                } else {
                    // line 410
                    echo "                                            <h3 class=\"price-detail\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 410, $this->source); })()), "priceEur", [], "any", false, false, false, 410), 2, ".", ","), "html", null, true);
                    echo " eur</h3>
                                        ";
                }
                // line 412
                echo "                                    ";
            }
            // line 413
            echo "                                ";
        }
        // line 414
        echo "                                <div id=\"selectSize\" class=\"addeffect-section product-description border-product\">
                                    <h6 class=\"product-title size-text\">Proizvođač</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 418, $this->source); })()), "proizvodjac", [], "any", false, false, false, 418), "html", null, true);
        echo "</h6>
                                    </div>
                                    <h6 class=\"product-title size-text\">Dobavljač</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 423, $this->source); })()), "seller", [], "any", false, false, false, 423), "getName", [], "method", false, false, false, 423), "html", null, true);
        echo "</h6>
                                    </div>
                                    <h6 class=\"product-title size-text\">Atributi</h6>

                                    <div class=\"size-box\">
                                        ";
        // line 428
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 428, $this->source); })()), "atr1", [], "any", false, false, false, 428))) {
            // line 429
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 429, $this->source); })()), "atr1", [], "any", false, false, false, 429), "getName", [], "method", false, false, false, 429), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 431
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 431, $this->source); })()), "atr2", [], "any", false, false, false, 431))) {
            // line 432
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 432, $this->source); })()), "atr2", [], "any", false, false, false, 432), "getName", [], "method", false, false, false, 432), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 434
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 434, $this->source); })()), "atr3", [], "any", false, false, false, 434))) {
            // line 435
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 435, $this->source); })()), "atr3", [], "any", false, false, false, 435), "getName", [], "method", false, false, false, 435), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 437
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 437, $this->source); })()), "atr4", [], "any", false, false, false, 437))) {
            // line 438
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 438, $this->source); })()), "atr4", [], "any", false, false, false, 438), "getName", [], "method", false, false, false, 438), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 440
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 440, $this->source); })()), "atr5", [], "any", false, false, false, 440))) {
            // line 441
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 441, $this->source); })()), "atr5", [], "any", false, false, false, 441), "getName", [], "method", false, false, false, 441), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 443
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "atr6", [], "any", false, false, false, 443))) {
            // line 444
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 444, $this->source); })()), "atr6", [], "any", false, false, false, 444), "getName", [], "method", false, false, false, 444), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 446
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 446, $this->source); })()), "atr7", [], "any", false, false, false, 446))) {
            // line 447
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 447, $this->source); })()), "atr7", [], "any", false, false, false, 447), "getName", [], "method", false, false, false, 447), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 449
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 449, $this->source); })()), "atr8", [], "any", false, false, false, 449))) {
            // line 450
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 450, $this->source); })()), "atr8", [], "any", false, false, false, 450), "getName", [], "method", false, false, false, 450), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 452
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 452, $this->source); })()), "atr9", [], "any", false, false, false, 452))) {
            // line 453
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 453, $this->source); })()), "atr9", [], "any", false, false, false, 453), "getName", [], "method", false, false, false, 453), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 455
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 455, $this->source); })()), "atr10", [], "any", false, false, false, 455))) {
            // line 456
            echo "                                            <span class=\"label label-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 456, $this->source); })()), "atr10", [], "any", false, false, false, 456), "getName", [], "method", false, false, false, 456), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 458
        echo "                                    </div>
                                    <h6 class=\"product-title size-text\">Šifra proizvoda</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 462, $this->source); })()), "code", [], "any", false, false, false, 462), "html", null, true);
        echo "</h6>
                                    </div>

";
        // line 466
        echo "
";
        // line 470
        echo "
                                    <h6 class=\"product-title product-title-2 d-block\">Količina</h6>
                                    ";
        // line 472
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 472, $this->source); })()), "flOutOfStock", [], "any", false, false, false, 472) == 0)) {
            // line 473
            echo "                                    <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
            echo "\">
                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
            // line 474
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 474, $this->source); })()), "id", [], "any", false, false, false, 474), "html", null, true);
            echo "\"/>
                                    <div class=\"qty-box\">
                                        <div class=\"input-group\">
                                                <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-left-minus\"
                                                            data-type=\"minus\" data-field=\"\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                </span>
                                            <input type=\"text\" name=\"quantity\" class=\"form-control input-number\"
                                                   value=\"1\">
                                            <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-right-plus\"
                                                            data-type=\"plus\" data-field=\"\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"product-buttons\">
                                    <button type=\"submit\" id=\"cartEffect\"
                                       class=\"btn btn-solid hover-solid\">
                                        <i class=\"fa fa-shopping-cart\"></i>
                                        <span>Dodajte u korpu</span>
                                    </button>
                                </div>
                                </form>
                                ";
        } else {
            // line 503
            echo "                                <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
            echo "\">
                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
            // line 504
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 504, $this->source); })()), "id", [], "any", false, false, false, 504), "html", null, true);
            echo "\"/>
                                    <div class=\"qty-box\">
                                        <div class=\"input-group\">
                                                <span class=\"input-group-prepend\">
                                                    <button type=\"button\" disabled class=\"btn quantity-left-minus\"
                                                            data-type=\"minus\" data-field=\"\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                </span>
                                            <input type=\"text\" name=\"quantity\" disabled class=\"form-control input-number\"
                                                   value=\"1\">
                                            <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-right-plus\"
                                                            data-type=\"plus\" disabled data-field=\"\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"product-buttons\">
                                <button type=\"submit\" id=\"cartEffect\" disabled
                                        class=\"btn btn-solid hover-solid\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    <span>Dodajte u korpu</span>
                                </button>
                            </div>
                            </form>
                                ";
        }
        // line 533
        echo "                                <ul class=\"product-count shipping-order\">
                                    <li>
                                        <img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gif/truck.png"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\"
                                             alt=\"image\">
                                        <span class=\"lang\">";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 537, $this->source); })()), "deliveryCharacteristics", [], "any", false, false, false, 537), "html", null, true);
        echo "&nbsp;</span> / <span class=\"lang\">&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 537, $this->source); })()), "deliveryTime", [], "any", false, false, false, 537), "html", null, true);
        echo " radna dana&nbsp;</span> /&nbsp;";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 537, $this->source); })()), "deliveryPrice", [], "any", false, false, false, 537) > 0)) {
            // line 538
            echo "                                        <span class=\"lang\">&nbsp;";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 538, $this->source); })()), "deliveryPrice", [], "any", false, false, false, 538), 2, ".", ","), "html", null, true);
            echo " din po km&nbsp;</span>
                                    ";
        } else {
            // line 540
            echo "                                        <span class=\"lang\">&nbsp;Besplatna dostava</span>
                                        ";
        }
        // line 542
        echo "                                    </li>
                                </ul>

                                <div class=\"border-product\">
                                    <div class=\"product-icon\">
                                        <ul class=\"product-social\">
                                            <li>
                                                <div class=\"fb-share-button\" data-href=\"https://montaznekucesrbopromet.rs/tip27.php\" data-layout=\"button_count\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Share</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class=\"col-12\">
                <div class=\"cloth-review\">
                    <nav>
                        <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                            <button class=\"nav-link active\" id=\"nav-speci-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#speci\" type=\"button\">Specifikacija</button>
                            <button class=\"nav-link\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#desc\" type=\"button\">Opis</button>
                            ";
        // line 568
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 568, $this->source); })()), "kategorija", [], "any", false, false, false, 568), "getId", [], "any", false, false, false, 568) == 5)) {
            // line 569
            echo "                            <button class=\"nav-link\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#opc\" type=\"button\">Opciona oprema</button>
                            ";
        }
        // line 571
        echo "                            <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#review\" type=\"button\">Komentari</button>
                        </div>
                    </nav>

                    <div class=\"tab-content\" id=\"nav-tabContent\">
                        ";
        // line 576
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 576, $this->source); })()), "kategorija", [], "any", false, false, false, 576), "getId", [], "method", false, false, false, 576) == 5)) {
            // line 577
            echo "                            <div class=\"tab-pane fade \" id=\"opc\">
                                <div class=\"shipping-chart\">
                                    <div class=\"part\">
                                        <h2 class=\"inner-title mb-2\">Opciona oprema</h2>
                                        ";
            // line 581
            echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 581, $this->source); })()), "options", [], "any", false, false, false, 581);
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 586
        echo "
                        <div class=\"tab-pane fade \" id=\"desc\">
                            <div class=\"shipping-chart\">
                                <div class=\"part\">
                                    <h2 class=\"inner-title mb-2\">Detaljan opis proizvoda</h2>
                                    ";
        // line 591
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 591, $this->source); })()), "caracteristic", [], "any", false, false, false, 591);
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade show active\" id=\"speci\">
                            <div class=\"pro mb-4\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-part\">
                                        ";
        // line 600
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 600, $this->source); })()), "charasteristicsDescription", [], "any", false, false, false, 600);
        echo "
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade\" id=\"review\">
                            <div class=\"row g-4\">

                                <div class=\"col-lg-12\">

                                    <div class=\"review-box\">
                                        ";
        // line 612
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ShopController::komentarForm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 612, $this->source); })()), "id", [], "any", false, false, false, 612)]));
        echo "
                                    </div>
                                </div>

                                <div class=\"col-12 mt-4\">
                                    <div class=\"customer-review-box\">

                                        ";
        // line 619
        if ((array_key_exists("comment", $context) && (twig_length_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 619, $this->source); })())) > 0))) {
            // line 620
            echo "                                            <h4>Komentari</h4>
                                            ";
            // line 621
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 621, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
                // line 622
                echo "                                            <div class=\"customer-section\">

                                                <div class=\"customer-details\">
                                                    <h5>";
                // line 625
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comm"], "name", [], "any", false, false, false, 625), "html", null, true);
                echo "</h5>

                                                    <p class=\"font-light\">";
                // line 627
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comm"], "comment", [], "any", false, false, false, 627), "html", null, true);
                echo "</p>

                                                    <p class=\"date-custo font-light\">- ";
                // line 629
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comm"], "created", [], "any", false, false, false, 629), "d.m.Y"), "html", null, true);
                echo "</p>
                                                </div>
                                            </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            echo "                                            ";
        } else {
            // line 634
            echo "                                                <h4>Ovaj proizvod nije komentarisan. Budite prvi koji će ostaviti mišljenje o proizvodu.</h4>
                                        ";
        }
        // line 636
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class=\"ratio_asos section-b-space overflow-hidden\">
    <div class=\"container-fluid p-0\">
        <div class=\"row m-0\">
            <div class=\"col-sm-12 p-0\">
                <div class=\"title text-center\">
                    <h2>Slični proizvodi koje korisnici gledaju</h2>
                </div>
                <div class=\"product-wrapper slide-6\">
                    ";
        // line 658
        if ((array_key_exists("randomProducts", $context) && (twig_length_filter($this->env, (isset($context["randomProducts"]) || array_key_exists("randomProducts", $context) ? $context["randomProducts"] : (function () { throw new RuntimeError('Variable "randomProducts" does not exist.', 658, $this->source); })())) > 0))) {
            // line 659
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["randomProducts"]) || array_key_exists("randomProducts", $context) ? $context["randomProducts"] : (function () { throw new RuntimeError('Variable "randomProducts" does not exist.', 659, $this->source); })()), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 660
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "user", [], "any", false, false, false, 660)) {
                    // line 661
                    echo "                                ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 661, $this->source); })()), "user", [], "any", false, false, false, 661), "FirmaIliFizickoLice", [], "any", false, false, false, 661), [0 => 1, 1 => 4])) {
                        // line 662
                        echo "                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"";
                        // line 665
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 665)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 666
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 666))) {
                            // line 667
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 669
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 669)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 670
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 671
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 671), "html", null, true);
                        echo "\">
                                                </a>
                                                <div class=\"label-block\">
                                                    ";
                        // line 674
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 674) == 1)) {
                            // line 675
                            echo "                                                        <span class=\"label label-black\">Novo</span>
                                                    ";
                        }
                        // line 677
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 677) == 1)) {
                            // line 678
                            echo "                                                        <span class=\"label label-theme\">Popust</span>
                                                    ";
                        }
                        // line 680
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 680) == 1)) {
                            // line 681
                            echo "                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    ";
                        }
                        // line 683
                        echo "                                                </div>
                                                ";
                        // line 684
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 684) == 0)) {
                            // line 685
                            echo "                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"";
                            // line 688
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 689
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 689), "html", null, true);
                            echo "\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 697
                        echo "                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    ";
                        // line 700
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscountVp", [], "any", false, false, false, 700) == 1)) {
                            // line 701
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 701) > 0)) {
                                // line 702
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceDin", [], "any", false, false, false, 702) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 702) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            <span class=\"font-light ml-1\">";
                                // line 703
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 703), 2, ".", ","), "html", null, true);
                                echo " din</span>
                                                        ";
                            } else {
                                // line 705
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountVpPriceEur", [], "any", false, false, false, 705), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            <span class=\"font-light ml-1\">";
                                // line 706
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 706), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                        ";
                            }
                            // line 708
                            echo "                                                    ";
                        } else {
                            // line 709
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 709) > 0)) {
                                // line 710
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceVpDin", [], "any", false, false, false, 710) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 710) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                        ";
                            } else {
                                // line 712
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceVpEur", [], "any", false, false, false, 712), 2, ".", ","), "html", null, true);
                                echo " eur
                                                        ";
                            }
                            // line 714
                            echo "                                                    ";
                        }
                        // line 715
                        echo "                                                </h3>
                                                <a href=\"";
                        // line 716
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 716)]), "html", null, true);
                        echo "\" class=\"font-default\">
                                                    <h5>";
                        // line 717
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 717), "html", null, true);
                        echo "</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 723
                        echo "                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"";
                        // line 726
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 726)]), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 727
                        if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 727))) {
                            // line 728
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 730
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 730)), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 731
                        echo "\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"";
                        // line 732
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 732), "html", null, true);
                        echo "\">
                                                </a>
                                                <div class=\"label-block\">
                                                    ";
                        // line 735
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 735) == 1)) {
                            // line 736
                            echo "                                                        <span class=\"label label-black\">Novo</span>
                                                    ";
                        }
                        // line 738
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 738) == 1)) {
                            // line 739
                            echo "                                                        <span class=\"label label-theme\">Popust</span>
                                                    ";
                        }
                        // line 741
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 741) == 1)) {
                            // line 742
                            echo "                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    ";
                        }
                        // line 744
                        echo "                                                </div>
                                                ";
                        // line 745
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 745) == 0)) {
                            // line 746
                            echo "                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"";
                            // line 749
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                            echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                            // line 750
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 750), "html", null, true);
                            echo "\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 758
                        echo "                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    ";
                        // line 761
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 761) == 1)) {
                            // line 762
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 762) > 0)) {
                                // line 763
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 763) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 763) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                            <span class=\"font-light ml-1\">";
                                // line 764
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 764), 2, ".", ","), "html", null, true);
                                echo " din</span>
                                                        ";
                            } else {
                                // line 766
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 766), 2, ".", ","), "html", null, true);
                                echo " eur
                                                            <span class=\"font-light ml-1\">";
                                // line 767
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 767), 2, ".", ","), "html", null, true);
                                echo " eur</span>
                                                        ";
                            }
                            // line 769
                            echo "                                                    ";
                        } else {
                            // line 770
                            echo "                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 770) > 0)) {
                                // line 771
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 771) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 771) / 100) + 1))), 2, ".", ","), "html", null, true);
                                echo " din
                                                        ";
                            } else {
                                // line 773
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 773), 2, ".", ","), "html", null, true);
                                echo " eur
                                                        ";
                            }
                            // line 775
                            echo "                                                    ";
                        }
                        // line 776
                        echo "                                                </h3>
                                                <a href=\"";
                        // line 777
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 777)]), "html", null, true);
                        echo "\" class=\"font-default\">
                                                    <h5>";
                        // line 778
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 778), "html", null, true);
                        echo "</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 784
                    echo "                            ";
                } else {
                    // line 785
                    echo "                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"";
                    // line 788
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 788)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 789
                    if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 789))) {
                        // line 790
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/no-image.jpg"), "html", null, true);
                        echo "
                                                            ";
                    } else {
                        // line 792
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "slikaMain", [], "any", false, false, false, 792)), "html", null, true);
                        echo "
                                                            ";
                    }
                    // line 793
                    echo "\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"";
                    // line 794
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "seo", [], "any", false, false, false, 794), "html", null, true);
                    echo "\">
                                            </a>
                                            <div class=\"label-block\">
                                                ";
                    // line 797
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flNewProduct", [], "any", false, false, false, 797) == 1)) {
                        // line 798
                        echo "                                                    <span class=\"label label-black\">Novo</span>
                                                ";
                    }
                    // line 800
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 800) == 1)) {
                        // line 801
                        echo "                                                    <span class=\"label label-theme\">Popust</span>
                                                ";
                    }
                    // line 803
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 803) == 1)) {
                        // line 804
                        echo "                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                ";
                    }
                    // line 806
                    echo "                                            </div>
                                            ";
                    // line 807
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flOutOfStock", [], "any", false, false, false, 807) == 0)) {
                        // line 808
                        echo "                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"";
                        // line 811
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("korpa_dodaj");
                        echo "\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"";
                        // line 812
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 812), "html", null, true);
                        echo "\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            ";
                    }
                    // line 820
                    echo "                                        </div>
                                        <div class=\"product-details text-center\">
                                            <h3 class=\"theme-color\">
                                                ";
                    // line 823
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "flDiscount", [], "any", false, false, false, 823) == 1)) {
                        // line 824
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 824) > 0)) {
                            // line 825
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceDin", [], "any", false, false, false, 825) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 825) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                        <span class=\"font-light ml-1\">";
                            // line 826
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 826), 2, ".", ","), "html", null, true);
                            echo " din</span>
                                                    ";
                        } else {
                            // line 828
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountPriceEur", [], "any", false, false, false, 828), 2, ".", ","), "html", null, true);
                            echo " eur
                                                        <span class=\"font-light ml-1\">";
                            // line 829
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 829), 2, ".", ","), "html", null, true);
                            echo " eur</span>
                                                    ";
                        }
                        // line 831
                        echo "                                                ";
                    } else {
                        // line 832
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 832) > 0)) {
                            // line 833
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, $context["product"], "priceDin", [], "any", false, false, false, 833) * ((twig_get_attribute($this->env, $this->source, $context["product"], "taxPercentage", [], "any", false, false, false, 833) / 100) + 1))), 2, ".", ","), "html", null, true);
                            echo " din
                                                    ";
                        } else {
                            // line 835
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceEur", [], "any", false, false, false, 835), 2, ".", ","), "html", null, true);
                            echo " eur
                                                    ";
                        }
                        // line 837
                        echo "                                                ";
                    }
                    // line 838
                    echo "                                            </h3>
                                            <a href=\"";
                    // line 839
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proizvod", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 839)]), "html", null, true);
                    echo "\" class=\"font-default\">
                                                <h5>";
                    // line 840
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 840), "html", null, true);
                    echo "</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 846
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 847
            echo "                    ";
        }
        // line 848
        echo "                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

<!-- Subscribe Section End -->

<!-- footer start -->
";
        // line 858
        $this->loadTemplate("include/footer.html.twig", "shop/proizvod.html.twig", 858)->display($context);
        // line 859
        echo "<!-- footer end -->

<!-- tap to top Section Start -->
";
        // line 862
        $this->loadTemplate("include/top.html.twig", "shop/proizvod.html.twig", 862)->display($context);
        // line 863
        echo "<!-- tap to top Section End -->

<div class=\"bg-overlay\"></div>

<!-- latest jquery-->
<script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>

<!-- Add To Home js -->
<script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pwa.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap js-->
<script src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- feather icon js-->
<script src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/feather/feather.min.js"), "html", null, true);
        echo "\"></script>

<!-- lazyload js-->
<script src=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        echo "\"></script>

<!-- Slick js-->
<script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/slick.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/slick-animation.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/custom_slick.js"), "html", null, true);
        echo "\"></script>

<!-- Notify js-->
<script src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>

<!-- timer js -->
<script src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/timer.js"), "html", null, true);
        echo "\"></script>

<!-- sticky cart bottom js-->
<script src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sticky-cart-bottom.js"), "html", null, true);
        echo "\"></script>

<!-- sticky cart bottom js-->
<script src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/check-box-select.js"), "html", null, true);
        echo "\"></script>

<!-- Zoom Js -->
<script src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.elevatezoom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/zoom-filter.js"), "html", null, true);
        echo "\"></script>

<!--Plugin JavaScript file-->
<script src=\"";
        // line 904
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>

<!-- Filter Hide and show Js -->
<script src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filter.js"), "html", null, true);
        echo "\"></script>

<!-- add to cart modal resize -->
<script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cart_modal_resize.js"), "html", null, true);
        echo "\"></script>

<!-- Notify js-->
<script src=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>

<!-- script js -->
<script src=\"";
        // line 916
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-setting.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function() {
        \$('table').addClass('table table-part');
    });
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shop/proizvod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1923 => 917,  1919 => 916,  1913 => 913,  1907 => 910,  1901 => 907,  1895 => 904,  1889 => 901,  1885 => 900,  1879 => 897,  1873 => 894,  1867 => 891,  1861 => 888,  1855 => 885,  1851 => 884,  1847 => 883,  1841 => 880,  1835 => 877,  1829 => 874,  1823 => 871,  1817 => 868,  1810 => 863,  1808 => 862,  1803 => 859,  1801 => 858,  1789 => 848,  1786 => 847,  1780 => 846,  1771 => 840,  1767 => 839,  1764 => 838,  1761 => 837,  1755 => 835,  1749 => 833,  1746 => 832,  1743 => 831,  1738 => 829,  1733 => 828,  1728 => 826,  1723 => 825,  1720 => 824,  1718 => 823,  1713 => 820,  1702 => 812,  1698 => 811,  1693 => 808,  1691 => 807,  1688 => 806,  1684 => 804,  1681 => 803,  1677 => 801,  1674 => 800,  1670 => 798,  1668 => 797,  1662 => 794,  1659 => 793,  1653 => 792,  1647 => 790,  1645 => 789,  1641 => 788,  1636 => 785,  1633 => 784,  1624 => 778,  1620 => 777,  1617 => 776,  1614 => 775,  1608 => 773,  1602 => 771,  1599 => 770,  1596 => 769,  1591 => 767,  1586 => 766,  1581 => 764,  1576 => 763,  1573 => 762,  1571 => 761,  1566 => 758,  1555 => 750,  1551 => 749,  1546 => 746,  1544 => 745,  1541 => 744,  1537 => 742,  1534 => 741,  1530 => 739,  1527 => 738,  1523 => 736,  1521 => 735,  1515 => 732,  1512 => 731,  1506 => 730,  1500 => 728,  1498 => 727,  1494 => 726,  1489 => 723,  1480 => 717,  1476 => 716,  1473 => 715,  1470 => 714,  1464 => 712,  1458 => 710,  1455 => 709,  1452 => 708,  1447 => 706,  1442 => 705,  1437 => 703,  1432 => 702,  1429 => 701,  1427 => 700,  1422 => 697,  1411 => 689,  1407 => 688,  1402 => 685,  1400 => 684,  1397 => 683,  1393 => 681,  1390 => 680,  1386 => 678,  1383 => 677,  1379 => 675,  1377 => 674,  1371 => 671,  1368 => 670,  1362 => 669,  1356 => 667,  1354 => 666,  1350 => 665,  1345 => 662,  1342 => 661,  1339 => 660,  1334 => 659,  1332 => 658,  1308 => 636,  1304 => 634,  1301 => 633,  1291 => 629,  1286 => 627,  1281 => 625,  1276 => 622,  1272 => 621,  1269 => 620,  1267 => 619,  1257 => 612,  1242 => 600,  1230 => 591,  1223 => 586,  1215 => 581,  1209 => 577,  1207 => 576,  1200 => 571,  1196 => 569,  1194 => 568,  1166 => 542,  1162 => 540,  1156 => 538,  1150 => 537,  1145 => 535,  1141 => 533,  1109 => 504,  1104 => 503,  1072 => 474,  1067 => 473,  1065 => 472,  1061 => 470,  1058 => 466,  1052 => 462,  1046 => 458,  1040 => 456,  1037 => 455,  1031 => 453,  1028 => 452,  1022 => 450,  1019 => 449,  1013 => 447,  1010 => 446,  1004 => 444,  1001 => 443,  995 => 441,  992 => 440,  986 => 438,  983 => 437,  977 => 435,  974 => 434,  968 => 432,  965 => 431,  959 => 429,  957 => 428,  949 => 423,  941 => 418,  935 => 414,  932 => 413,  929 => 412,  923 => 410,  916 => 407,  913 => 406,  910 => 405,  904 => 402,  899 => 401,  893 => 398,  888 => 397,  885 => 396,  882 => 395,  879 => 394,  876 => 393,  873 => 392,  867 => 390,  861 => 388,  858 => 387,  855 => 386,  849 => 383,  844 => 382,  838 => 379,  833 => 378,  830 => 377,  827 => 376,  824 => 375,  821 => 374,  815 => 372,  810 => 370,  804 => 368,  801 => 367,  798 => 366,  792 => 363,  787 => 362,  782 => 360,  776 => 357,  771 => 356,  768 => 355,  765 => 354,  762 => 353,  760 => 352,  757 => 351,  753 => 349,  749 => 347,  746 => 346,  743 => 345,  739 => 343,  736 => 342,  733 => 341,  730 => 340,  726 => 338,  723 => 337,  720 => 336,  716 => 334,  713 => 333,  710 => 332,  707 => 331,  703 => 329,  701 => 328,  694 => 324,  690 => 323,  680 => 315,  674 => 313,  671 => 312,  665 => 310,  662 => 309,  656 => 307,  653 => 306,  647 => 304,  644 => 303,  638 => 301,  635 => 300,  629 => 298,  626 => 297,  620 => 295,  617 => 294,  611 => 292,  608 => 291,  602 => 289,  599 => 288,  593 => 286,  590 => 285,  584 => 283,  581 => 282,  575 => 280,  572 => 279,  566 => 277,  563 => 276,  557 => 274,  554 => 273,  548 => 271,  546 => 270,  542 => 268,  534 => 263,  530 => 262,  526 => 260,  523 => 259,  515 => 254,  511 => 253,  507 => 251,  504 => 250,  496 => 245,  492 => 244,  488 => 242,  485 => 241,  477 => 236,  473 => 235,  469 => 233,  466 => 232,  458 => 227,  454 => 226,  450 => 224,  447 => 223,  439 => 218,  435 => 217,  431 => 215,  428 => 214,  420 => 209,  416 => 208,  412 => 206,  409 => 205,  401 => 200,  397 => 199,  393 => 197,  390 => 196,  382 => 191,  378 => 190,  374 => 188,  371 => 187,  363 => 182,  359 => 181,  355 => 179,  352 => 178,  344 => 173,  340 => 172,  336 => 170,  333 => 169,  325 => 164,  321 => 163,  317 => 161,  314 => 160,  306 => 155,  302 => 154,  298 => 152,  295 => 151,  287 => 146,  283 => 145,  279 => 143,  276 => 142,  268 => 137,  264 => 136,  260 => 134,  252 => 129,  248 => 128,  244 => 126,  242 => 125,  223 => 109,  216 => 105,  192 => 83,  190 => 82,  187 => 81,  185 => 80,  176 => 74,  172 => 73,  166 => 70,  162 => 69,  156 => 66,  150 => 63,  144 => 60,  138 => 57,  132 => 54,  122 => 47,  113 => 41,  109 => 40,  105 => 39,  98 => 35,  94 => 33,  90 => 32,  84 => 30,  82 => 29,  78 => 27,  74 => 26,  68 => 24,  66 => 23,  48 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
{#    <link rel=\"manifest\" href=\"./manifest.json\" />#}
{#    <link rel=\"icon\" href=\"assets/images/favicon/2.png\" type=\"image/x-icon\" />#}
{#    <link rel=\"apple-touch-icon\" href=\"assets/images/favicon/2.png\" />#}
    <meta name=\"theme-color\" content=\"#e22454\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
    <meta name=\"apple-mobile-web-app-title\" content=\"Voxo\" />
    <meta name=\"msapplication-TileImage\" content=\"assets/images/favicon/2.png\" />
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"
    {% if product.metaDescription is not null%}
        {{ product.metaDescription |trans }}
    {% else %}
        Distribucija i prodaja autoprikolica i traktora.
    {% endif %}\">
    <meta name=\"keywords\" content=\"
    {% if product.metaKeywords is not null%}
        {{ product.metaKeywords |trans }}
    {% else %}
        autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje
    {% endif %}\">
    <meta name=\"author\" content=\"prikolica.shop\">
    <link rel=\"icon\" href=\"{{ asset('assets/images/favicon/2.png') }}\" type=\"image/x-icon\" />

    <!-- facebook -->
    <meta property=\"og:type\" content=\"article\" />
    <meta property=\"og:title\" content=\"{{ product.title |trans }} | prikolica.shop\" />
    <meta property=\"og:url\" content=\"{{ app.request.uri }}\" />
    <meta property=\"og:image\" content=\"{{ asset('bundles/site/images/logo.png') }}\"/>
    <meta property=\"og:site_name\" content=\"prikolice.shop - najveći izbor autoprikolica u Srbiji\"/>
    <meta property=\"fb:admins\" content=\"1285367254\" />
    <meta property=\"og:description\" content=\"\" />
    <!-- ./facebook -->

    <title>{{ product.title |trans }} - Prodaja autoprikolica, traktora. | prikolica.shop</title>

    <!-- Google font -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- bootstrap css -->
    <link id=\"rtl-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/bootstrap.css') }}\">

    <!-- font-awesome css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/font-awesome.css') }}\">

    <!-- feather icon css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/feather-icon.css') }}\">

    <!--Plugin CSS file with desired skin-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}\">

    <!-- animation css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/animate.css') }}\">

    <!-- slick css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/slick/slick.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/slick/slick-theme.css') }}\">

    <!-- Theme css -->
    <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/demo2.css') }}\">
    <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/demo1.css') }}\">

</head>

<body class=\"theme-color1 light ltr\">

{% include 'include/header.html.twig' %}
<!-- mobile fix menu -->
{% include 'include/mobile_menu.html.twig' %}
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0\" nonce=\"kV2PhO6v\"></script>
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
                <h3>Proizvod</h3>
                <nav>
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('pocetna') }}\">
                                <i class=\"fas fa-home\"></i>
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ product.title |trans }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=\"container\">
        <div class=\"row gx-4 gy-5\">
            <div class=\"col-12\">
                <div class=\"details-items\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"degree-section\">
                                <div class=\"details-image ratio_asos\">
                                    {% if product.slikaMain is null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset('assets/images/products/no-image.jpg') }}\" id=\"zoom_01\"
                                                     data-zoom-image=\"{{ asset('assets/images/products/no-image.jpg') }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-0 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                        {% else %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slikaMain) }}\" id=\"zoom_01\"
                                                     data-zoom-image=\"{{ asset(product.slikaMain) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-0 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika1 is defined and product.slika1 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika1) }}\" id=\"zoom_02\"
                                                     data-zoom-image=\"{{ asset(product.slika1) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika2 is defined and product.slika2 is not null %}
                                    <div>
                                        <div class=\"product-image-tag\">
                                            <img src=\"{{ asset(product.slika2) }}\" id=\"zoom_03\"
                                                 data-zoom-image=\"{{ asset(product.slika2) }}\"
                                                 class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if product.slika3 is defined and product.slika3 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika3) }}\" id=\"zoom_04\"
                                                     data-zoom-image=\"{{ asset(product.slika3) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika4 is defined and product.slika4 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika4) }}\" id=\"zoom_05\"
                                                     data-zoom-image=\"{{ asset(product.slika4) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika5 is defined and product.slika5 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika5) }}\" id=\"zoom_06\"
                                                     data-zoom-image=\"{{ asset(product.slika5) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika6 is defined and product.slika6 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika6) }}\" id=\"zoom_07\"
                                                     data-zoom-image=\"{{ asset(product.slika6) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika7 is defined and product.slika7 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika7) }}\" id=\"zoom_08\"
                                                     data-zoom-image=\"{{ asset(product.slika7) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika8 is defined and product.slika8 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika8) }}\" id=\"zoom_09\"
                                                     data-zoom-image=\"{{ asset(product.slika8) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika9 is defined and product.slika9 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika9) }}\" id=\"zoom_10\"
                                                     data-zoom-image=\"{{ asset(product.slika9) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika10 is defined and product.slika10 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika10) }}\" id=\"zoom_11\"
                                                     data-zoom-image=\"{{ asset(product.slika10) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika11 is defined and product.slika11 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika11) }}\" id=\"zoom_12\"
                                                     data-zoom-image=\"{{ asset(product.slika11) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika12 is defined and product.slika12 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika12) }}\" id=\"zoom_13\"
                                                     data-zoom-image=\"{{ asset(product.slika12) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika13 is defined and product.slika13 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika13) }}\" id=\"zoom_14\"
                                                     data-zoom-image=\"{{ asset(product.slika13) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if product.slika14 is defined and product.slika14 is not null %}
                                        <div>
                                            <div class=\"product-image-tag\">
                                                <img src=\"{{ asset(product.slika14) }}\" id=\"zoom_15\"
                                                     data-zoom-image=\"{{ asset(product.slika14) }}\"
                                                     class=\"img-fluid w-100 image_zoom_cls-1 blur-up lazyload\" alt=\"\">
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"details-image-option black-slide mt-4 rounded\">
                                    {% if product.slikaMain is defined and product.slikaMain is not null %}
                                    <div><img src=\"{{ asset(product.slikaMain) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika1 is defined and product.slika1 is not null %}
                                        <div><img src=\"{{ asset(product.slika1) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika2 is defined and product.slika2 is not null %}
                                        <div><img src=\"{{ asset(product.slika2) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika3 is defined and product.slika3 is not null %}
                                        <div><img src=\"{{ asset(product.slika3) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika4 is defined and product.slika4 is not null %}
                                        <div><img src=\"{{ asset(product.slika4) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika5 is defined and product.slika5 is not null %}
                                        <div><img src=\"{{ asset(product.slika5) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika6 is defined and product.slika6 is not null %}
                                        <div><img src=\"{{ asset(product.slika6) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika7 is defined and product.slika7 is not null %}
                                        <div><img src=\"{{ asset(product.slika7) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika8 is defined and product.slika8 is not null %}
                                        <div><img src=\"{{ asset(product.slika8) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika9 is defined and product.slika9 is not null %}
                                        <div><img src=\"{{ asset(product.slika9) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika10 is defined and product.slika10 is not null %}
                                        <div><img src=\"{{ asset(product.slika10) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika11 is defined and product.slika11 is not null %}
                                        <div><img src=\"{{ asset(product.slika11) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika12 is defined and product.slika12 is not null %}
                                        <div><img src=\"{{ asset(product.slika12) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika13 is defined and product.slika13 is not null %}
                                        <div><img src=\"{{ asset(product.slika13) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                    {% if product.slika14 is defined and product.slika14 is not null %}
                                        <div><img src=\"{{ asset(product.slika14) }}\" class=\"img-fluid blur-up lazyload\" alt=\"\"></div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>


                        <div class=\"col-md-6\">
                            <div class=\"cloth-details-size\">
                                <div class=\"details-image-concept\">
                                    <h3 class=\"text-muted\">{{ product.kategorija.getName() }}</h3>
                                    <h2>{{ product.title }}</h2>
                                </div>

                                <div class=\"label-section\">
                                        {% if product.flNewProduct == 1 %}
                                            <span class=\"label label-black\">Novo</span>
                                        {% endif %}
                                        {% if app.user %}
                                            {% if app.user.FirmaIliFizickoLice == 1 %}
                                                {% if product.flDiscountVp == 1 %}
                                                    <span class=\"label label-theme\">Popust</span>
                                                {% endif %}
                                            {% else %}
                                                {% if product.flDiscount == 1 %}
                                                    <span class=\"label label-theme\">Popust</span>
                                                {% endif %}
                                            {% endif%}
                                        {% else %}
                                            {% if product.flDiscount == 1 %}
                                                <span class=\"label label-theme\">Popust</span>
                                            {% endif %}
                                        {% endif %}
                                        {% if product.flOutOfStock == 1 %}
                                            <span class=\"label label-theme\">Nema na stanju</span>
                                        {% else %}
                                            <span class=\"label label-theme\">Dostupno</span>
                                        {% endif %}
                                </div>
                                {% if app.user %}
                                    {% if app.user.FirmaIliFizickoLice in [1, 4] %}
                                        {% if product.flDiscountVp == 1 %}
                                            {% if product.discountVpPriceDin > 0 %}
                                                <h3 class=\"price-detail\">{{ ((product.discountVpPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                    <del>{{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
                                                </h3>
                                                <h4 class=\"text-muted\">Cena na koju se obračunava subvencija za gazdinstva:</h4>
                                                <h3 class=\"price-detail\">{{ ((product.discountVpPriceDin | round)  | number_format(2, '.', ',')) }} din</h3>
                                            {% else %}
                                                <h3 class=\"price-detail\">{{ product.discountVpPriceEur  | number_format(2, '.', ',') }} eur
                                                    <del>{{ product.priceVpEur  | number_format(2, '.', ',') }} eur</del>
                                                </h3>
                                            {% endif %}
                                        {% else %}
                                            {% if product.priceVpDin > 0 %}
                                                <h3 class=\"price-detail\">{{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</h3>
                                                <h4 class=\"text-muted\">Cena na koju se obračunava subvencija za gazdinstva:</h4>
                                                <h3 class=\"price-detail\">{{ ((product.priceVpDin | round)  | number_format(2, '.', ',')) }} din</h3>
                                            {% else %}
                                                <h3 class=\"price-detail\">{{ product.priceVpEur  | number_format(2, '.', ',') }} eur</h3>
                                            {% endif %}
                                        {% endif %}
                                    {% else %}
                                        {% if product.flDiscount == 1 %}
                                            {% if product.discountPriceDin > 0 %}
                                                <h3 class=\"price-detail\">{{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                    <del>{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
                                                </h3>
                                            {% else %}
                                                <h3 class=\"price-detail\">{{ product.discountPriceEur  | number_format(2, '.', ',') }} eur
                                                    <del>{{ product.priceEur  | number_format(2, '.', ',') }} eur</del>
                                                </h3>
                                            {% endif %}
                                        {% else %}
                                            {% if product.priceDin > 0 %}
                                                <h3 class=\"price-detail\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</h3>
                                            {% else %}
                                                <h3 class=\"price-detail\">{{ product.priceEur  | number_format(2, '.', ',') }} eur</h3>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                {% else %}
                                    {% if product.flDiscount == 1 %}
                                        {% if product.discountPriceDin > 0 %}
                                            <h3 class=\"price-detail\">{{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                <del>{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</del>
                                            </h3>
                                        {% else %}
                                            <h3 class=\"price-detail\">{{ product.discountPriceEur  | number_format(2, '.', ',') }} eur
                                                <del>{{ product.priceEur  | number_format(2, '.', ',') }} eur</del>
                                            </h3>
                                        {% endif %}
                                    {% else %}
                                        {% if product.priceDin > 0 %}
                                            <h3 class=\"price-detail\">{{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din</h3>

                                        {% else %}
                                            <h3 class=\"price-detail\">{{ product.priceEur  | number_format(2, '.', ',') }} eur</h3>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                                <div id=\"selectSize\" class=\"addeffect-section product-description border-product\">
                                    <h6 class=\"product-title size-text\">Proizvođač</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">{{ product.proizvodjac }}</h6>
                                    </div>
                                    <h6 class=\"product-title size-text\">Dobavljač</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">{{ product.seller.getName() }}</h6>
                                    </div>
                                    <h6 class=\"product-title size-text\">Atributi</h6>

                                    <div class=\"size-box\">
                                        {% if product.atr1 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr1.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr2 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr2.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr3 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr3.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr4 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr4.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr5 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr5.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr6 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr6.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr7 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr7.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr8 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr8.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr9 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr9.getName() }}</span>
                                        {% endif %}
                                        {% if product.atr10 is not null %}
                                            <span class=\"label label-theme\">{{ product.atr10.getName() }}</span>
                                        {% endif %}
                                    </div>
                                    <h6 class=\"product-title size-text\">Šifra proizvoda</h6>

                                    <div class=\"size-box\">
                                        <h6 class=\"product-title hurry-title d-block\">{{ product.code }}</h6>
                                    </div>

{#                                    <h6 class=\"product-title size-text\">Korisna nosivost proizvoda</h6>#}

{#                                    <div class=\"size-box\">#}
{#                                        <h6 class=\"product-title hurry-title d-block\">{{ product.weight | round }} kg</h6>#}
{#                                    </div>#}

                                    <h6 class=\"product-title product-title-2 d-block\">Količina</h6>
                                    {% if product.flOutOfStock == 0 %}
                                    <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\">
                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\"/>
                                    <div class=\"qty-box\">
                                        <div class=\"input-group\">
                                                <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-left-minus\"
                                                            data-type=\"minus\" data-field=\"\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                </span>
                                            <input type=\"text\" name=\"quantity\" class=\"form-control input-number\"
                                                   value=\"1\">
                                            <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-right-plus\"
                                                            data-type=\"plus\" data-field=\"\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"product-buttons\">
                                    <button type=\"submit\" id=\"cartEffect\"
                                       class=\"btn btn-solid hover-solid\">
                                        <i class=\"fa fa-shopping-cart\"></i>
                                        <span>Dodajte u korpu</span>
                                    </button>
                                </div>
                                </form>
                                {% else %}
                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\">
                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\"/>
                                    <div class=\"qty-box\">
                                        <div class=\"input-group\">
                                                <span class=\"input-group-prepend\">
                                                    <button type=\"button\" disabled class=\"btn quantity-left-minus\"
                                                            data-type=\"minus\" data-field=\"\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                </span>
                                            <input type=\"text\" name=\"quantity\" disabled class=\"form-control input-number\"
                                                   value=\"1\">
                                            <span class=\"input-group-prepend\">
                                                    <button type=\"button\" class=\"btn quantity-right-plus\"
                                                            data-type=\"plus\" disabled data-field=\"\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"product-buttons\">
                                <button type=\"submit\" id=\"cartEffect\" disabled
                                        class=\"btn btn-solid hover-solid\">
                                    <i class=\"fa fa-shopping-cart\"></i>
                                    <span>Dodajte u korpu</span>
                                </button>
                            </div>
                            </form>
                                {% endif %}
                                <ul class=\"product-count shipping-order\">
                                    <li>
                                        <img src=\"{{ asset('assets/images/gif/truck.png') }}\" class=\"img-fluid blur-up lazyload\"
                                             alt=\"image\">
                                        <span class=\"lang\">{{ product.deliveryCharacteristics }}&nbsp;</span> / <span class=\"lang\">&nbsp;{{ product.deliveryTime }} radna dana&nbsp;</span> /&nbsp;{% if product.deliveryPrice > 0 %}
                                        <span class=\"lang\">&nbsp;{{ product.deliveryPrice | number_format(2, '.', ',') }} din po km&nbsp;</span>
                                    {% else %}
                                        <span class=\"lang\">&nbsp;Besplatna dostava</span>
                                        {% endif %}
                                    </li>
                                </ul>

                                <div class=\"border-product\">
                                    <div class=\"product-icon\">
                                        <ul class=\"product-social\">
                                            <li>
                                                <div class=\"fb-share-button\" data-href=\"https://montaznekucesrbopromet.rs/tip27.php\" data-layout=\"button_count\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Share</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class=\"col-12\">
                <div class=\"cloth-review\">
                    <nav>
                        <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                            <button class=\"nav-link active\" id=\"nav-speci-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#speci\" type=\"button\">Specifikacija</button>
                            <button class=\"nav-link\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#desc\" type=\"button\">Opis</button>
                            {% if product.kategorija.getId == 5 %}
                            <button class=\"nav-link\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#opc\" type=\"button\">Opciona oprema</button>
                            {% endif %}
                            <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#review\" type=\"button\">Komentari</button>
                        </div>
                    </nav>

                    <div class=\"tab-content\" id=\"nav-tabContent\">
                        {% if product.kategorija.getId() == 5 %}
                            <div class=\"tab-pane fade \" id=\"opc\">
                                <div class=\"shipping-chart\">
                                    <div class=\"part\">
                                        <h2 class=\"inner-title mb-2\">Opciona oprema</h2>
                                        {{ product.options | raw }}
                                    </div>
                                </div>
                            </div>
                        {% endif %}

                        <div class=\"tab-pane fade \" id=\"desc\">
                            <div class=\"shipping-chart\">
                                <div class=\"part\">
                                    <h2 class=\"inner-title mb-2\">Detaljan opis proizvoda</h2>
                                    {{ product.caracteristic | raw }}
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade show active\" id=\"speci\">
                            <div class=\"pro mb-4\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-part\">
                                        {{ product.charasteristicsDescription |raw }}
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane fade\" id=\"review\">
                            <div class=\"row g-4\">

                                <div class=\"col-lg-12\">

                                    <div class=\"review-box\">
                                        {{ render(controller('App\\\\Controller\\\\ShopController::komentarForm', { 'id': product.id })) }}
                                    </div>
                                </div>

                                <div class=\"col-12 mt-4\">
                                    <div class=\"customer-review-box\">

                                        {% if comment is defined and (comment | length > 0) %}
                                            <h4>Komentari</h4>
                                            {% for comm in comment %}
                                            <div class=\"customer-section\">

                                                <div class=\"customer-details\">
                                                    <h5>{{ comm.name }}</h5>

                                                    <p class=\"font-light\">{{ comm.comment }}</p>

                                                    <p class=\"date-custo font-light\">- {{ comm.created | date(\"d.m.Y\") }}</p>
                                                </div>
                                            </div>
                                            {% endfor %}
                                            {% else %}
                                                <h4>Ovaj proizvod nije komentarisan. Budite prvi koji će ostaviti mišljenje o proizvodu.</h4>
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class=\"ratio_asos section-b-space overflow-hidden\">
    <div class=\"container-fluid p-0\">
        <div class=\"row m-0\">
            <div class=\"col-sm-12 p-0\">
                <div class=\"title text-center\">
                    <h2>Slični proizvodi koje korisnici gledaju</h2>
                </div>
                <div class=\"product-wrapper slide-6\">
                    {% if (randomProducts is defined) and (randomProducts | length > 0) %}
                        {% for product in randomProducts |slice(0, 6) %}
                            {% if app.user %}
                                {% if app.user.FirmaIliFizickoLice in [1, 4]  %}
                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                                <div class=\"label-block\">
                                                    {% if product.flNewProduct == 1 %}
                                                        <span class=\"label label-black\">Novo</span>
                                                    {% endif %}
                                                    {% if product.flDiscountVp == 1 %}
                                                        <span class=\"label label-theme\">Popust</span>
                                                    {% endif %}
                                                    {% if product.flOutOfStock == 1 %}
                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    {% endif %}
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    {% if product.flDiscountVp == 1 %}
                                                        {% if product.discountVpPriceDin > 0 %}
                                                            {{ ((product.discountVpPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                            <span class=\"font-light ml-1\">{{ product.priceVpDin  | number_format(2, '.', ',') }} din</span>
                                                        {% else %}
                                                            {{ product.discountVpPriceEur | number_format(2, '.', ',') }} eur
                                                            <span class=\"font-light ml-1\">{{ product.priceVpEur | number_format(2, '.', ',') }} eur</span>
                                                        {% endif %}
                                                    {% else %}
                                                        {% if product.priceVpDin > 0 %}
                                                            {{ ((product.priceVpDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        {% else %}
                                                            {{ product.priceVpEur | number_format(2, '.', ',') }} eur
                                                        {% endif %}
                                                    {% endif %}
                                                </h3>
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                    <h5>{{ product.title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                    <div>
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                    <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                         class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                                </a>
                                                <div class=\"label-block\">
                                                    {% if product.flNewProduct == 1 %}
                                                        <span class=\"label label-black\">Novo</span>
                                                    {% endif %}
                                                    {% if product.flDiscount == 1 %}
                                                        <span class=\"label label-theme\">Popust</span>
                                                    {% endif %}
                                                    {% if product.flOutOfStock == 1 %}
                                                        <span class=\"label label-theme\">Nema na stanju</span>
                                                    {% endif %}
                                                </div>
                                                {% if product.flOutOfStock == 0 %}
                                                    <div class=\"cart-wrap\">
                                                        <ul>
                                                            <li>
                                                                <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                    <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                    <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                    <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    {% if product.flDiscount == 1 %}
                                                        {% if product.discountPriceDin > 0 %}
                                                            {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                            <span class=\"font-light ml-1\">{{ product.priceDin  | number_format(2, '.', ',') }} din</span>
                                                        {% else %}
                                                            {{ product.discountPriceEur | number_format(2, '.', ',') }} eur
                                                            <span class=\"font-light ml-1\">{{ product.priceEur | number_format(2, '.', ',') }} eur</span>
                                                        {% endif %}
                                                    {% else %}
                                                        {% if product.priceDin > 0 %}
                                                            {{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        {% else %}
                                                            {{ product.priceEur | number_format(2, '.', ',') }} eur
                                                        {% endif %}
                                                    {% endif %}
                                                </h3>
                                                <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                    <h5>{{ product.title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"img-wrapper\">
                                            <a href=\"{{ path('proizvod', {'id': product.id}) }}\">
                                                <img src=\"{% if product.slikaMain is null %}
                                                                {{ asset('assets/images/products/no-image.jpg') }}
                                                            {% else %}
                                                                {{ asset(product.slikaMain) }}
                                                            {% endif %}\"
                                                     class=\"bg-img blur-up lazyload\" alt=\"{{ product.seo }}\">
                                            </a>
                                            <div class=\"label-block\">
                                                {% if product.flNewProduct == 1 %}
                                                    <span class=\"label label-black\">Novo</span>
                                                {% endif %}
                                                {% if product.flDiscount == 1 %}
                                                    <span class=\"label label-theme\">Popust</span>
                                                {% endif %}
                                                {% if product.flOutOfStock == 1 %}
                                                    <span class=\"label label-theme\">Nema na stanju</span>
                                                {% endif %}
                                            </div>
                                            {% if product.flOutOfStock == 0 %}
                                                <div class=\"cart-wrap\">
                                                    <ul>
                                                        <li>
                                                            <form method=\"post\" action=\"{{ path('korpa_dodaj') }}\" name=\"form\" style=\"margin:0 auto;\">
                                                                <input name=\"pid\" type=\"hidden\" id=\"pid\" value=\"{{ product.id }}\">
                                                                <input name=\"qty\" type=\"hidden\" value=\"1\">
                                                                <button class=\"btn btn-outline-default\" type=\"submit\"><i data-feather=\"shopping-bag\"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"product-details text-center\">
                                            <h3 class=\"theme-color\">
                                                {% if product.flDiscount == 1 %}
                                                    {% if product.discountPriceDin > 0 %}
                                                        {{ ((product.discountPriceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                        <span class=\"font-light ml-1\">{{ product.priceDin  | number_format(2, '.', ',') }} din</span>
                                                    {% else %}
                                                        {{ product.discountPriceEur | number_format(2, '.', ',') }} eur
                                                        <span class=\"font-light ml-1\">{{ product.priceEur | number_format(2, '.', ',') }} eur</span>
                                                    {% endif %}
                                                {% else %}
                                                    {% if product.priceDin > 0 %}
                                                        {{ ((product.priceDin * ((product.taxPercentage/100) + 1)) | round)  | number_format(2, '.', ',') }} din
                                                    {% else %}
                                                        {{ product.priceEur | number_format(2, '.', ',') }} eur
                                                    {% endif %}
                                                {% endif %}
                                            </h3>
                                            <a href=\"{{ path('proizvod', {'id': product.id}) }}\" class=\"font-default\">
                                                <h5>{{ product.title }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

<!-- Subscribe Section End -->

<!-- footer start -->
{% include 'include/footer.html.twig' %}
<!-- footer end -->

<!-- tap to top Section Start -->
{% include 'include/top.html.twig' %}
<!-- tap to top Section End -->

<div class=\"bg-overlay\"></div>

<!-- latest jquery-->
<script src=\"{{ asset('assets/js/jquery-3.5.1.min.js') }}\"></script>

<!-- Add To Home js -->
<script src=\"{{ asset('assets/js/pwa.js') }}\"></script>

<!-- Bootstrap js-->
<script src=\"{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}\"></script>

<!-- feather icon js-->
<script src=\"{{ asset('assets/js/feather/feather.min.js') }}\"></script>

<!-- lazyload js-->
<script src=\"{{ asset('assets/js/lazysizes.min.js') }}\"></script>

<!-- Slick js-->
<script src=\"{{ asset('assets/js/slick/slick.js') }}\"></script>
<script src=\"{{ asset('assets/js/slick/slick-animation.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/slick/custom_slick.js') }}\"></script>

<!-- Notify js-->
<script src=\"{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}\"></script>

<!-- timer js -->
<script src=\"{{ asset('assets/js/timer.js') }}\"></script>

<!-- sticky cart bottom js-->
<script src=\"{{ asset('assets/js/sticky-cart-bottom.js') }}\"></script>

<!-- sticky cart bottom js-->
<script src=\"{{ asset('assets/js/check-box-select.js') }}\"></script>

<!-- Zoom Js -->
<script src=\"{{ asset('assets/js/jquery.elevatezoom.js') }}\"></script>
<script src=\"{{ asset('assets/js/zoom-filter.js') }}\"></script>

<!--Plugin JavaScript file-->
<script src=\"{{ asset('assets/js/ion.rangeSlider.min.js') }}\"></script>

<!-- Filter Hide and show Js -->
<script src=\"{{ asset('assets/js/filter.js') }}\"></script>

<!-- add to cart modal resize -->
<script src=\"{{ asset('assets/js/cart_modal_resize.js') }}\"></script>

<!-- Notify js-->
<script src=\"{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}\"></script>

<!-- script js -->
<script src=\"{{ asset('assets/js/theme-setting.js') }}\"></script>
<script src=\"{{ asset('assets/js/script.js') }}\"></script>
<script>
    \$(function() {
        \$('table').addClass('table table-part');
    });
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>
</body>

</html>", "shop/proizvod.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/proizvod.html.twig");
    }
}
