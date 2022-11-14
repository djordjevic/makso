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

/* registration/welcome.html.twig */
class __TwigTemplate_66b10a7e6ee9e606c4c7f3a407580ecdf5041c7610b223583e224ecaf778bbc8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/welcome.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

    <title>Prikolica.shop | Uspešno ste se registrovali </title>

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

        .mb-3 {
            margin-bottom: 30px;
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

        .welcome-name h5 {
            font-weight: normal;
            margin: 10px 0 0;
            color: #232323;
            text-align: justify;
            line-height: 1.6;
            letter-spacing: 0.05em;
        }

        .welcome-details p span {
            color: #e22454;
            font-weight: 700;
            margin: 0 2px;
            text-decoration: underline;
        }

        .welcome-details p {
            font-weight: normal;
            font-size: 14px;
            color: #232323;
            line-height: 1.6;
            letter-spacing: 0.05em;
            margin: 0;
            text-align: justify;
        }

        .verify-button button {
            padding: 12px 30px;
            border: none;
            background-color: #e22454;
            color: #fff;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 1.3px;
            border-radius: 5px;
        }

        .how-work li {
            margin: 0 20px;
            color: #232323;
            position: relative;
        }

        .how-work li:after {
            content: '';
            position: absolute;
            top: 50%;
            left: -21px;
            width: 2px;
            height: 70%;
            background-color: #7e7e7e;
            transform: translateY(-50%);
        }

        .how-work li:first-child::after {
            content: none;
        }

        .main-bg-light {
            background-color: #fafafa;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td style=\"padding: 25px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tbody>
                <tr class=\"header\">
                    <td align=\"left\" valign=\"top\">
                        <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("pocetna");
        echo "\">
                            <img src=\"\" class=\"main-logo\" alt=\"logo\">
                        </a>
                    </td>
                    <td class=\"menu\" align=\"right\">

                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; padding: 0 30px; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td class=\"welcome-image mb-3\" style=\"display: block;\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/welcome.jpg")), "html", null, true);
        echo "\" style=\"width: 100%; margin-top: 20px;\" alt=\"\">
        </td>

        <td class=\"welcome-name mb-3\" style=\"text-align: left; display: block;\">
            <h4 style=\"text-transform: capitalize; margin: 0; font-weight: 500; color: #232323\">Dobrodošli u našu prodavnicu!</h4>
            <h5>Nadamo se da će Vam se naša ponuda svideti i da ćete preporučiti i drugima da nas posete.</h5>
        </td>

        <td class=\"verify-button mb-3\" style=\"display: block;\">
            <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        echo "\" class=\"btn btn-primary\">Posetite sajt</a>
        </td>
        <td class=\"welcome-details mb-3\" style=\"display: block;\">
            <p><span>Važno je</span> da prilikom prve prijave na sajtu popunite sve podatke.</p>
        </td>
        <td class=\"welcome-details mb-3\" style=\"display: block;\">
            <p>Ako imate neko pitanje kontaktirajte nas na <span>voxo@example.com</span> ili putem kontakt forme na sajtu.</p>
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
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/email/fb.png")), "html", null, true);
        echo "\" alt=\"\"
                                 style=\"font-size: 25px; margin: 0 18px 0 0;width: 22px;filter: invert(1);\">
                        </a>
                    </td>
                    <td>
                        <a href=\"https://www.instagram.com/triganoprikolicearilje1/\">
                            <img src=\"";
        // line 192
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
        // line 203
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
        return "registration/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 203,  248 => 192,  239 => 186,  211 => 161,  199 => 152,  176 => 132,  43 => 1,);
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

    <title>Prikolica.shop | Uspešno ste se registrovali </title>

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

        .mb-3 {
            margin-bottom: 30px;
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

        .welcome-name h5 {
            font-weight: normal;
            margin: 10px 0 0;
            color: #232323;
            text-align: justify;
            line-height: 1.6;
            letter-spacing: 0.05em;
        }

        .welcome-details p span {
            color: #e22454;
            font-weight: 700;
            margin: 0 2px;
            text-decoration: underline;
        }

        .welcome-details p {
            font-weight: normal;
            font-size: 14px;
            color: #232323;
            line-height: 1.6;
            letter-spacing: 0.05em;
            margin: 0;
            text-align: justify;
        }

        .verify-button button {
            padding: 12px 30px;
            border: none;
            background-color: #e22454;
            color: #fff;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 1.3px;
            border-radius: 5px;
        }

        .how-work li {
            margin: 0 20px;
            color: #232323;
            position: relative;
        }

        .how-work li:after {
            content: '';
            position: absolute;
            top: 50%;
            left: -21px;
            width: 2px;
            height: 70%;
            background-color: #7e7e7e;
            transform: translateY(-50%);
        }

        .how-work li:first-child::after {
            content: none;
        }

        .main-bg-light {
            background-color: #fafafa;
        }
    </style>
</head>

<body style=\"margin: 20px auto;\">
<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td style=\"padding: 25px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tbody>
                <tr class=\"header\">
                    <td align=\"left\" valign=\"top\">
                        <a href=\"{{ url('pocetna') }}\">
                            <img src=\"\" class=\"main-logo\" alt=\"logo\">
                        </a>
                    </td>
                    <td class=\"menu\" align=\"right\">

                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"
       style=\"background-color: white; width: 100%; padding: 0 30px; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);\">
    <tbody>
    <tr>
        <td class=\"welcome-image mb-3\" style=\"display: block;\">
            <img src=\"{{ absolute_url(asset('assets/images/email/welcome.jpg')) }}\" style=\"width: 100%; margin-top: 20px;\" alt=\"\">
        </td>

        <td class=\"welcome-name mb-3\" style=\"text-align: left; display: block;\">
            <h4 style=\"text-transform: capitalize; margin: 0; font-weight: 500; color: #232323\">Dobrodošli u našu prodavnicu!</h4>
            <h5>Nadamo se da će Vam se naša ponuda svideti i da ćete preporučiti i drugima da nas posete.</h5>
        </td>

        <td class=\"verify-button mb-3\" style=\"display: block;\">
            <a href=\"{{ url('app_login') }}\" class=\"btn btn-primary\">Posetite sajt</a>
        </td>
        <td class=\"welcome-details mb-3\" style=\"display: block;\">
            <p><span>Važno je</span> da prilikom prve prijave na sajtu popunite sve podatke.</p>
        </td>
        <td class=\"welcome-details mb-3\" style=\"display: block;\">
            <p>Ako imate neko pitanje kontaktirajte nas na <span>voxo@example.com</span> ili putem kontakt forme na sajtu.</p>
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

</html>", "registration/welcome.html.twig", "/home/prikolic/public_html/prikolica/templates/registration/welcome.html.twig");
    }
}
