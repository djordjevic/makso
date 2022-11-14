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

/* reset_password/email.html.twig */
class __TwigTemplate_3ec31d6152fa8edcb641c7bb8b9756a7ba75811f06aeb33d8e5ec39763b2ea0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

    <title>Prikolica.shop | Reset lozinke </title>

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

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        h4.title {
            color: white;
            font-weight: bold;
            padding-bottom: 0;
            text-transform: capitalize;
            display: inline-block;
            letter-spacing: 1.5px;
            position: relative;
            padding-bottom: 5px;
            border-bottom: 2px solid white;
        }

        .header .header-logo a {
            display: block;
            margin: 0;
            padding: 20px;
            text-align: left;
        }

        .header .header-contain h5 {
            margin: 0;
            font-size: 20px;
            letter-spacing: 4px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .header .header-contain h2 {
            margin: 40px 0 0;
            font-size: 28px;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 18px;
        }

        .header .header-contain h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #212529;
        }

        .header .header-contain .market {
            margin: 25px auto 0;
            letter-spacing: 0;
            font-weight: normal;
            text-transform: none;
            display: block;
            width: 80%;
            color: #7e7e7e;
        }

        .title-2 h2 {
            margin: 0;
            font-size: 26px;
            letter-spacing: 1px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1;
        }

        .title-2 h6 {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
        }

        .title-2 button {
            color: white;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-top: 25px;
            border-radius: 8px;
            padding: 18px 30px;
            border: 1px solid #e22454;
            background-color: #e22454;
            font-size: 14px;
        }

        .header .header-contain button {
            text-transform: uppercase;
            margin: 25px 0;
            border-radius: 5px;
            padding: 15px 35px;
            background-color: #e22454;
            color: white;
            border: none;
        }

        .contact-table {
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-table td {
            margin-top: 17px;
            position: relative;
            font-size: 13px;
            text-transform: uppercase;
            color: #ddd;
            letter-spacing: 1.1px;
        }

        .contact-table td:after {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            border-radius: 50%;
            background-color: white;
            width: 3px;
            height: 3px;
            transform: translateY(-50%);
        }

        .contact-table td:first-child:after {
            content: unset;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr class=\"header\">
                    <td align=\"left\" class=\"header-logo\"
                        style=\"text-align: center; display: block; margin-bottom: 20px;\" valign=\"top\">
                        <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                            <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/logo.png")), "html", null, true);
        echo "\" class=\"main-logo\" alt=\"logo\">
                        </a>
                    </td>
                    <td class=\"header-contain\" style=\"display: block;\">
                        <ul>
                            <li style=\"display: block;text-decoration: unset;\">
                                <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/reset.jpg")), "html", null, true);
        echo "\" alt=\"\">
                            </li>

                            <li style=\"display: block;text-decoration: unset\" class=\"reset-contain\">
                                <h2>Resetujte svoju lozinku</h2>
                                <h4 class=\"market\">Ok je, dešava se da se zaboravi lozinka. Samo kliknite na dugme ispod da je resetujete.</h4>
                                <a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 210, $this->source); })()), "token", [], "any", false, false, false, 210)]), "html", null, true);
        echo "\"><button>Resetujte lozinku</button></a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <div class=\"title title-2 text-center\">
";
        // line 224
        echo "                        <p style=\"margin-bottom: 0;\">Ako je greška samo ignorišite mail.</p>
                    </div>
                </tr>
                </thead>
            </table>

            <table class=\"text-center\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                   style=\"margin-top:40px; background-color: #212529; color: white; padding: 40px 0;\">
                <tr>
                    <td>
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"footer-social-icon\"
                               align=\"center\" class=\"text-center\" style=\"margin: 8px auto 20px;\">
                            <tr>
                                <td>
                                    <a href=\"https://www.facebook.com/trigano.arilje.7\">
                                        <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/fb.png")), "html", null, true);
        echo "\" alt=\"\"
                                             style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                                    </a>
                                </td>
                                <td>
                                    <a href=\"https://www.instagram.com/triganoprikolicearilje1/\">
                                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/insta.png")), "html", null, true);
        echo "\" alt=\"\"
                                             style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                            <tr>
                                <td>
";
        // line 263
        echo "                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 100%\">
                                    <table class=\"contact-table\">
";
        // line 276
        echo "                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>






";
        // line 297
        echo "
";
        // line 299
        echo "
";
        // line 301
        echo "
";
        // line 303
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 303,  350 => 301,  347 => 299,  344 => 297,  322 => 276,  315 => 263,  303 => 245,  294 => 239,  277 => 224,  263 => 210,  254 => 204,  245 => 198,  241 => 197,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

    <title>Prikolica.shop | Reset lozinke </title>

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

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        h4.title {
            color: white;
            font-weight: bold;
            padding-bottom: 0;
            text-transform: capitalize;
            display: inline-block;
            letter-spacing: 1.5px;
            position: relative;
            padding-bottom: 5px;
            border-bottom: 2px solid white;
        }

        .header .header-logo a {
            display: block;
            margin: 0;
            padding: 20px;
            text-align: left;
        }

        .header .header-contain h5 {
            margin: 0;
            font-size: 20px;
            letter-spacing: 4px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .header .header-contain h2 {
            margin: 40px 0 0;
            font-size: 28px;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 18px;
        }

        .header .header-contain h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #212529;
        }

        .header .header-contain .market {
            margin: 25px auto 0;
            letter-spacing: 0;
            font-weight: normal;
            text-transform: none;
            display: block;
            width: 80%;
            color: #7e7e7e;
        }

        .title-2 h2 {
            margin: 0;
            font-size: 26px;
            letter-spacing: 1px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1;
        }

        .title-2 h6 {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
        }

        .title-2 button {
            color: white;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-top: 25px;
            border-radius: 8px;
            padding: 18px 30px;
            border: 1px solid #e22454;
            background-color: #e22454;
            font-size: 14px;
        }

        .header .header-contain button {
            text-transform: uppercase;
            margin: 25px 0;
            border-radius: 5px;
            padding: 15px 35px;
            background-color: #e22454;
            color: white;
            border: none;
        }

        .contact-table {
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-table td {
            margin-top: 17px;
            position: relative;
            font-size: 13px;
            text-transform: uppercase;
            color: #ddd;
            letter-spacing: 1.1px;
        }

        .contact-table td:after {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            border-radius: 50%;
            background-color: white;
            width: 3px;
            height: 3px;
            transform: translateY(-50%);
        }

        .contact-table td:first-child:after {
            content: unset;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td>
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr class=\"header\">
                    <td align=\"left\" class=\"header-logo\"
                        style=\"text-align: center; display: block; margin-bottom: 20px;\" valign=\"top\">
                        <a href=\"{{ path('pocetna') }}\">
                            <img src=\"{{ absolute_url(asset(\"assets/images/email/logo.png\")) }}\" class=\"main-logo\" alt=\"logo\">
                        </a>
                    </td>
                    <td class=\"header-contain\" style=\"display: block;\">
                        <ul>
                            <li style=\"display: block;text-decoration: unset;\">
                                <img src=\"{{ absolute_url(asset(\"assets/images/email/reset.jpg\")) }}\" alt=\"\">
                            </li>

                            <li style=\"display: block;text-decoration: unset\" class=\"reset-contain\">
                                <h2>Resetujte svoju lozinku</h2>
                                <h4 class=\"market\">Ok je, dešava se da se zaboravi lozinka. Samo kliknite na dugme ispod da je resetujete.</h4>
                                <a href=\"{{ url('app_reset_password', {token: resetToken.token}) }}\"><button>Resetujte lozinku</button></a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <div class=\"title title-2 text-center\">
{#                        <h6>tvoj email :- <a href=\"#\"#}
{#                                             style=\"font-weight: 600; text-decoration: underline;\">imthebest@example.com</a>#}
{#                        </h6>#}
                        <p style=\"margin-bottom: 0;\">Ako je greška samo ignorišite mail.</p>
                    </div>
                </tr>
                </thead>
            </table>

            <table class=\"text-center\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                   style=\"margin-top:40px; background-color: #212529; color: white; padding: 40px 0;\">
                <tr>
                    <td>
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"footer-social-icon\"
                               align=\"center\" class=\"text-center\" style=\"margin: 8px auto 20px;\">
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
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                            <tr>
                                <td>
{#                                    <h5#}
{#                                            style=\"font-size: 13px; text-transform: uppercase; margin: 0; color:#ddd; letter-spacing:1px;\">#}
{#                                        This email was created using the <span#}
{#                                                style=\"color: #e22454;\">VOXO</span>.</h5>#}
{#                                    <h5#}
{#                                            style=\"font-size: 13px; text-transform: uppercase; margin: 10px 0 0; color:#ddd; letter-spacing:1px;\">#}
{#                                        Made with <i class=\"fas fa-heart\"#}
{#                                                     style=\"color: #e22454; margin: 0 5px;\"></i> by design#}
{#                                        voxo team.</h5>#}
                                </td>
                            </tr>
                            <tr>
                                <td style=\"width: 100%\">
                                    <table class=\"contact-table\">
{#                                        <tbody style=\"display: block; width: 100%;\">#}
{#                                        <tr#}
{#                                                style=\"display: block; width: 100%;display: flex; align-items: center; justify-content: center;\">#}
{#                                            <td><a href=\"#\"#}
{#                                                   style=\"color: #777; font-weight: 600; text-decoration: underline;\">Unsubscribe</a>#}
{#                                            </td>#}
{#                                        </tr>#}
{#                                        </tbody>#}
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>






{#<h1>Hi!</h1>#}

{#<p>To reset your password, please visit the following link</p>#}

{#<a href=\"{{ url('app_reset_password', {token: resetToken.token}) }}\">{{ url('app_reset_password', {token: resetToken.token}) }}</a>#}

{#<p>This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</p>#}

{#<p>Cheers!</p>#}
", "reset_password/email.html.twig", "/home/prikolic/public_html/prikolica/templates/reset_password/email.html.twig");
    }
}
