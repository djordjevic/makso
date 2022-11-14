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

/* shop/porudzbina.html.twig */
class __TwigTemplate_6d5c790a73e857ed96b0ce96f598e8b051c4b12e91ed2d411ef9308d30d756d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/porudzbina.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/porudzbina.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png")), "html", null, true);
        echo "\" type=\"image/x-icon\">

    <title>Prikolica.shop | Potvrda porudžbine</title>

    <link
            href=\"https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\"
            rel=\"stylesheet\">



    <style type=\"text/css\">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Rubik', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 8px 0;
        }

        h5 {
            color: #777777;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #3d3d3d;
            color: #fff;
        }

        .title {
            color: #222222;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td {
            width: 30px;
            height: 30px;
            background: transparent;
            margin: 0 30px;
            border-radius: 50%;
            text-align: center;
        }

        .footer-social-icon tr td a {
            width: 100%;
            align-items: center;
            display: flex;
            justify-content: center;
            color: #fff;
        }

        .footer-social-icon tr td a i {
            width: 50%;
            margin: 0;
        }

        .footer-subscript p {
            margin: 0;
            letter-spacing: 1.1px;
            line-height: 1.6;
            font-size: 14px;
            color: #c5c5c5;
        }

        .footer-subscript p a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\" data-new-gr-c-s-check-loaded=\"14.1031.0\" data-gr-ext-installed=\"\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"padding: 0 30px;background-color: #fff; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td>
                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/order-image.jpg")), "html", null, true);
        echo "\" alt=\"\" style=\"margin-bottom: 10px;width: 50%;\">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h2 class=\"title\">Hvala Vam</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style=\"color: #777777;\">Uspešno ste kreirali porudžbinu.</p>
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">Datum: ";
        // line 155
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "dateAdded", [], "any", false, false, false, 155), "d.m.Y"), "html", null, true);
        echo "
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">ID: ";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156), "html", null, true);
        echo "</p>
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">USKORO ĆE VAS KONTAKTIRATI NEKO OD NAŠIH PRODAVACA!</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <div style=\"border-top: 1px solid #ddd;height:1px;margin-top: 30px;\">
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td>
                        <h2 class=\"title\">DETALJI PORUDŽBINE</h2>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class=\"order-detail\" style=\"margin-top: 10px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                   align=\"center\">
                <tbody>
                <tr align=\"left\">
                    <th>Šifra</th>
                    <th style=\"padding-left: 15px;\">Proizvod</th>
                    <th>Količina</th>
                    <th>Cena</th>
                </tr>
                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderProducts"]) || array_key_exists("orderProducts", $context) ? $context["orderProducts"] : (function () { throw new RuntimeError('Variable "orderProducts" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 189
            echo "                <tr>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod", [], "any", false, false, false, 191), "getCode", [], "method", false, false, false, 191), "html", null, true);
            echo "</h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"margin-top: 15px;\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 194), "html", null, true);
            echo "</h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;margin-bottom: 0px;\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 197), "html", null, true);
            echo "
                        </h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;\"><b>";
            // line 201
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pricePdv", [], "any", false, false, false, 201), 2, ".", ","), "html", null, true);
            echo "</b></h5>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                <tr>
                    <td style=\"line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;\"
                        colspan=\"2\">Ukupna cena :</td>
                    <td style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\"
                        colspan=\"3\" class=\"price\"><b>";
        // line 209
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 209, $this->source); })()), "totalPrice", [], "any", false, false, false, 209)), 2, ".", ","), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td style=\"line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;\"
                        colspan=\"2\">PDV :</td>
                    <td style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\"
                        colspan=\"3\" class=\"price\"><b>";
        // line 215
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 215, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 215) - twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 215, $this->source); })()), "totalPrice", [], "any", false, false, false, 215))), 2, ".", ","), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"line-height: 49px;font-size: 13px;color: #000000;
                                    padding-left: 20px;text-align:left;border-right: unset;\">UKUPNO sa PDV :</td>
                    <td colspan=\"3\" class=\"price\"
                        style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\">
                        <b>";
        // line 222
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 222, $this->source); })()), "totalPricePdv", [], "any", false, false, false, 222)), 2, ".", ","), "html", null, true);
        echo "</b>
                    </td>
                </tr>
                </tbody>
            </table>
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"left\"
                   style=\"width: 100%;margin-top: 40px;    margin-bottom: 30px;\">
                <tbody>
                <tr>
                    <td
                            style=\"font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;\">
                        <h5
                                style=\"font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;\">
                            Adresa za dostavu</h5>
                        <p
                                style=\"text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;\">
                            ";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 238, $this->source); })()), "imePrimaoca", [], "any", false, false, false, 238), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 238, $this->source); })()), "prezimePrimaoca", [], "any", false, false, false, 238), "html", null, true);
        echo ",
                            <br>";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 239, $this->source); })()), "adresaPrimaoca", [], "any", false, false, false, 239), "html", null, true);
        echo "
                            <br>";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 240, $this->source); })()), "gradPrimaoca", [], "any", false, false, false, 240), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 240, $this->source); })()), "pttPrimaoca", [], "any", false, false, false, 240), "html", null, true);
        echo "
                            <br>Tel: ";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 241, $this->source); })()), "telefonPrimaoca", [], "any", false, false, false, 241), "html", null, true);
        echo "
                        </p>
                    </td>
                    <td width=\"57\" height=\"25\" class=\"user-info\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/space.jpg")), "html", null, true);
        echo "\" alt=\" \"
                                                                      height=\"25\" width=\"57\"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table class=\"main-bg-light text-center\" style=\"margin-top: 0;\" align=\"center\" border=\"0\" cellpadding=\"0\"
       cellspacing=\"0\" width=\"100%\">
    <tr>
        <td style=\"padding: 30px;\">
            <div>
                <h4 class=\"title\" style=\"margin:0;text-align: center; color: whitesmoke;\">Pratite nas na društvenim mrežama
                </h4>
            </div>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"footer-social-icon text-center\" align=\"center\"
                   style=\"margin-top:12px;\">
                <tr>
                    <td>
                        <a href=\"https://www.facebook.com/trigano.arilje.7\">
                            <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/fb.png")), "html", null, true);
        echo "\" alt=\"\"
                                 style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                        </a>
                    </td>
                    <td>
                        <a href=\"https://www.instagram.com/triganoprikolicearilje1/\">
                            <img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/insta.png")), "html", null, true);
        echo "\" alt=\"\"
                                 style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                        </a>
                    </td>
                </tr>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"margin: 20px auto 0;\"
                   class=\"footer-subscript\">
                <tr>
                    <td>
                        <p>
                            © Sva prava zadržava prikolica.shop, ";
        // line 284
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <br> Powered by <a href=\"mailto:stefanmaksimovic88@gmail.com\">barba</a>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shop/porudzbina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 284,  382 => 273,  373 => 267,  347 => 244,  341 => 241,  335 => 240,  331 => 239,  325 => 238,  306 => 222,  296 => 215,  287 => 209,  281 => 205,  271 => 201,  264 => 197,  258 => 194,  252 => 191,  248 => 189,  244 => 188,  209 => 156,  205 => 155,  190 => 143,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" href=\"{{ absolute_url(asset('assets/images/favicon.png')) }}\" type=\"image/x-icon\">

    <title>Prikolica.shop | Potvrda porudžbine</title>

    <link
            href=\"https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\"
            rel=\"stylesheet\">



    <style type=\"text/css\">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Rubik', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 8px 0;
        }

        h5 {
            color: #777777;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #3d3d3d;
            color: #fff;
        }

        .title {
            color: #222222;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td {
            width: 30px;
            height: 30px;
            background: transparent;
            margin: 0 30px;
            border-radius: 50%;
            text-align: center;
        }

        .footer-social-icon tr td a {
            width: 100%;
            align-items: center;
            display: flex;
            justify-content: center;
            color: #fff;
        }

        .footer-social-icon tr td a i {
            width: 50%;
            margin: 0;
        }

        .footer-subscript p {
            margin: 0;
            letter-spacing: 1.1px;
            line-height: 1.6;
            font-size: 14px;
            color: #c5c5c5;
        }

        .footer-subscript p a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\" data-new-gr-c-s-check-loaded=\"14.1031.0\" data-gr-ext-installed=\"\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"padding: 0 30px;background-color: #fff; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td>
                        <img src=\"{{ absolute_url(asset('assets/images/email/order-image.jpg')) }}\" alt=\"\" style=\"margin-bottom: 10px;width: 50%;\">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h2 class=\"title\">Hvala Vam</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style=\"color: #777777;\">Uspešno ste kreirali porudžbinu.</p>
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">Datum: {{ order.dateAdded | date(\"d.m.Y\") }}
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">ID: {{ order.id  }}</p>
                        <p style=\"color: #777777; letter-spacing: 0.5px;\">USKORO ĆE VAS KONTAKTIRATI NEKO OD NAŠIH PRODAVACA!</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <div style=\"border-top: 1px solid #ddd;height:1px;margin-top: 30px;\">
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                    <td>
                        <h2 class=\"title\">DETALJI PORUDŽBINE</h2>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class=\"order-detail\" style=\"margin-top: 10px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
                   align=\"center\">
                <tbody>
                <tr align=\"left\">
                    <th>Šifra</th>
                    <th style=\"padding-left: 15px;\">Proizvod</th>
                    <th>Količina</th>
                    <th>Cena</th>
                </tr>
                {% for product in orderProducts %}
                <tr>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;\">{{ product.proizvod.getCode() }}</h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"margin-top: 15px;\">{{ product.productName }}</h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;margin-bottom: 0px;\">{{ product.quantity }}
                        </h5>
                    </td>
                    <td valign=\"top\" style=\"padding: 0 15px;\">
                        <h5 style=\"font-size: 14px; color:#444;margin-top:15px;\"><b>{{ product.pricePdv | number_format(2, '.', ',') }}</b></h5>
                    </td>
                </tr>
                {% endfor %}
                <tr>
                    <td style=\"line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;\"
                        colspan=\"2\">Ukupna cena :</td>
                    <td style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\"
                        colspan=\"3\" class=\"price\"><b>{{ (order.totalPrice | round)  | number_format(2, '.', ',') }}</b></td>
                </tr>
                <tr>
                    <td style=\"line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;\"
                        colspan=\"2\">PDV :</td>
                    <td style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\"
                        colspan=\"3\" class=\"price\"><b>{{ ((order.totalPricePdv - order.totalPrice) | round) | number_format(2, '.', ',') }}</b></td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"line-height: 49px;font-size: 13px;color: #000000;
                                    padding-left: 20px;text-align:left;border-right: unset;\">UKUPNO sa PDV :</td>
                    <td colspan=\"3\" class=\"price\"
                        style=\"line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;\">
                        <b>{{ (order.totalPricePdv | round) | number_format(2, '.', ',') }}</b>
                    </td>
                </tr>
                </tbody>
            </table>
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"left\"
                   style=\"width: 100%;margin-top: 40px;    margin-bottom: 30px;\">
                <tbody>
                <tr>
                    <td
                            style=\"font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;\">
                        <h5
                                style=\"font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;\">
                            Adresa za dostavu</h5>
                        <p
                                style=\"text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;\">
                            {{ order.imePrimaoca }} {{ order.prezimePrimaoca }},
                            <br>{{ order.adresaPrimaoca }}
                            <br>{{ order.gradPrimaoca }}, {{ order.pttPrimaoca }}
                            <br>Tel: {{ order.telefonPrimaoca }}
                        </p>
                    </td>
                    <td width=\"57\" height=\"25\" class=\"user-info\"><img src=\"{{ absolute_url(asset('assets/images/email/space.jpg')) }}\" alt=\" \"
                                                                      height=\"25\" width=\"57\"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table class=\"main-bg-light text-center\" style=\"margin-top: 0;\" align=\"center\" border=\"0\" cellpadding=\"0\"
       cellspacing=\"0\" width=\"100%\">
    <tr>
        <td style=\"padding: 30px;\">
            <div>
                <h4 class=\"title\" style=\"margin:0;text-align: center; color: whitesmoke;\">Pratite nas na društvenim mrežama
                </h4>
            </div>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"footer-social-icon text-center\" align=\"center\"
                   style=\"margin-top:12px;\">
                <tr>
                    <td>
                        <a href=\"https://www.facebook.com/trigano.arilje.7\">
                            <img src=\"{{ absolute_url(asset('assets/images/email/fb.png')) }}\" alt=\"\"
                                 style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                        </a>
                    </td>
                    <td>
                        <a href=\"https://www.instagram.com/triganoprikolicearilje1/\">
                            <img src=\"{{ absolute_url(asset('assets/images/email/insta.png')) }}\" alt=\"\"
                                 style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                        </a>
                    </td>
                </tr>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"margin: 20px auto 0;\"
                   class=\"footer-subscript\">
                <tr>
                    <td>
                        <p>
                            © Sva prava zadržava prikolica.shop, {{ 'now' | date('Y') }} <br> Powered by <a href=\"mailto:stefanmaksimovic88@gmail.com\">barba</a>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>", "shop/porudzbina.html.twig", "/home/prikolic/public_html/prikolica/templates/shop/porudzbina.html.twig");
    }
}
