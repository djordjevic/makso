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

/* include/footer.html.twig */
class __TwigTemplate_d8203151dafc51d37fa7090d6fa85a9707519647b87f70b4c2a1943c7d6577c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer-sm-space\">
    <div class=\"main-footer\">
        <div class=\"container\">
            <div class=\"row gy-4\">
                <div class=\"col-xl-3 col-lg-4 col-md-6\">
                    <div class=\"footer-contact\">
                        <div class=\"brand-logo\">
                            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\" class=\"footer-logo\">
                                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_test_2.png"), "html", null, true);
        echo "\" class=\"img-fluid blur-up lazyload\" alt=\"logo\">
                            </a>
                        </div>
                        <ul class=\"contact-lists\">
                            <li>
                                <span><b>Telefon:</b> <span class=\"font-light\">031/3893-716</span></span>

                            </li>
                            <li>
                                    <span><b>Adresa:</b><span class=\"font-light\"> Grdovići bb, 31230 Arilje</span></span>
                            </li>
                            <li>
                                <span><b>Email:</b><span class=\"font-light\"> Voxo123@gmail.com</span></span>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Kupovina</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nacini-dostave");
        echo "\" class=\"font-dark\">Načini dostave</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nacini-placanja");
        echo "\" class=\"font-dark\">Načini plaćanja</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uslovi-koriscenja");
        echo "\" class=\"font-dark\">Uslovi korišćenja</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politika-privatnosti");
        echo "\" class=\"font-dark\">Politika privatnosti</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reklamacije");
        echo "\" class=\"font-dark\">Reklamacije</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zastita-podataka");
        echo "\" class=\"font-dark\">Zaštita podataka o ličnosti</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Korisnički nalog</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("izbor_registracije");
        echo "\" class=\"font-dark\">Registrujte se</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"font-dark\">Prijavite se</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"font-dark\">Zaboravljena lozinka</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Korisni linkovi</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\" class=\"font-dark\">Početna</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_prikolica");
        echo "\" class=\"font-dark\">Prikolice</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_traktor");
        echo "\" class=\"font-dark\">Traktori</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_kuka");
        echo "\" class=\"font-dark\">Kuke</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prodavnica_izdavanje");
        echo "\" class=\"font-dark\">Izdavanje</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerija");
        echo "\" class=\"font-dark\">Galerija</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("o-nama");
        echo "\" class=\"font-dark\">O nama</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontakt");
        echo "\" class=\"font-dark\">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block\">
                    <div class=\"footer-newsletter\">
                        <h3>Budite u toku!</h3>
                        <div class=\"form-newsletter\">
                            <form action=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscribe");
        echo "\" method=\"post\">
                            <div class=\"input-group mb-4\">
                                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Vaša e-mail adresa\" required>
                                <button class=\"input-group-text\" id=\"basic-addon4\"><i
                                            class=\"fas fa-arrow-right\"></i></button>
                            </div>
                            <p class=\"font-dark mb-0\">Prijavite se na naš servis za obaveštenja i budite u toku sa novim informacijama.
                            </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"row gy-3\">
                <div class=\"col-md-6\">
";
        // line 157
        echo "                </div>
                <div class=\"col-md-6\">
                    <p class=\"mb-0 font-dark\">© Sva prava zadržava prikolica.shop, ";
        // line 159
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <br> Powered by <a href=\"mailto:stefanmaksimovic88@gmail.com\">barba</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 159,  238 => 157,  216 => 115,  203 => 105,  197 => 102,  191 => 99,  185 => 96,  179 => 93,  173 => 90,  167 => 87,  161 => 84,  144 => 70,  138 => 67,  132 => 64,  115 => 50,  109 => 47,  103 => 44,  97 => 41,  91 => 38,  85 => 35,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-sm-space\">
    <div class=\"main-footer\">
        <div class=\"container\">
            <div class=\"row gy-4\">
                <div class=\"col-xl-3 col-lg-4 col-md-6\">
                    <div class=\"footer-contact\">
                        <div class=\"brand-logo\">
                            <a href=\"{{ path('pocetna') }}\" class=\"footer-logo\">
                                <img src=\"{{ asset(\"assets/images/logo_test_2.png\") }}\" class=\"img-fluid blur-up lazyload\" alt=\"logo\">
                            </a>
                        </div>
                        <ul class=\"contact-lists\">
                            <li>
                                <span><b>Telefon:</b> <span class=\"font-light\">031/3893-716</span></span>

                            </li>
                            <li>
                                    <span><b>Adresa:</b><span class=\"font-light\"> Grdovići bb, 31230 Arilje</span></span>
                            </li>
                            <li>
                                <span><b>Email:</b><span class=\"font-light\"> Voxo123@gmail.com</span></span>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Kupovina</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"{{ path('nacini-dostave') }}\" class=\"font-dark\">Načini dostave</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('nacini-placanja') }}\" class=\"font-dark\">Načini plaćanja</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('uslovi-koriscenja') }}\" class=\"font-dark\">Uslovi korišćenja</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('politika-privatnosti') }}\" class=\"font-dark\">Politika privatnosti</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('reklamacije') }}\" class=\"font-dark\">Reklamacije</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('zastita-podataka') }}\" class=\"font-dark\">Zaštita podataka o ličnosti</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Korisnički nalog</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"{{ path('izbor_registracije') }}\" class=\"font-dark\">Registrujte se</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_login') }}\" class=\"font-dark\">Prijavite se</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"font-dark\">Zaboravljena lozinka</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"footer-links\">
                        <div class=\"footer-title\">
                            <h3>Korisni linkovi</h3>
                        </div>
                        <div class=\"footer-content\">
                            <ul>
                                <li>
                                    <a href=\"{{ path('pocetna') }}\" class=\"font-dark\">Početna</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('prodavnica_prikolica') }}\" class=\"font-dark\">Prikolice</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('prodavnica_traktor') }}\" class=\"font-dark\">Traktori</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('prodavnica_kuka') }}\" class=\"font-dark\">Kuke</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('prodavnica_izdavanje') }}\" class=\"font-dark\">Izdavanje</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('galerija') }}\" class=\"font-dark\">Galerija</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('o-nama') }}\" class=\"font-dark\">O nama</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('kontakt') }}\" class=\"font-dark\">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block\">
                    <div class=\"footer-newsletter\">
                        <h3>Budite u toku!</h3>
                        <div class=\"form-newsletter\">
                            <form action=\"{{ path('app_subscribe') }}\" method=\"post\">
                            <div class=\"input-group mb-4\">
                                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Vaša e-mail adresa\" required>
                                <button class=\"input-group-text\" id=\"basic-addon4\"><i
                                            class=\"fas fa-arrow-right\"></i></button>
                            </div>
                            <p class=\"font-dark mb-0\">Prijavite se na naš servis za obaveštenja i budite u toku sa novim informacijama.
                            </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"row gy-3\">
                <div class=\"col-md-6\">
{#                    <ul>#}
{#                        <li class=\"font-dark\">We accept:</li>#}
{#                        <li>#}
{#                            <a href=\"javascript:void(0)\">#}
{#                                <img src=\"assets/images/payment-icon/1.jpg\" class=\"img-fluid blur-up lazyload\"#}
{#                                     alt=\"payment icon\"></a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"javascript:void(0)\">#}
{#                                <img src=\"assets/images/payment-icon/2.jpg\" class=\"img-fluid blur-up lazyload\"#}
{#                                     alt=\"payment icon\"></a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"javascript:void(0)\">#}
{#                                <img src=\"assets/images/payment-icon/3.jpg\" class=\"img-fluid blur-up lazyload\"#}
{#                                     alt=\"payment icon\"></a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"javascript:void(0)\">#}
{#                                <img src=\"assets/images/payment-icon/4.jpg\" class=\"img-fluid blur-up lazyload\"#}
{#                                     alt=\"payment icon\"></a>#}
{#                        </li>#}
{#                    </ul>#}
                </div>
                <div class=\"col-md-6\">
                    <p class=\"mb-0 font-dark\">© Sva prava zadržava prikolica.shop, {{ 'now' | date('Y') }} <br> Powered by <a href=\"mailto:stefanmaksimovic88@gmail.com\">barba</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>", "include/footer.html.twig", "/home/prikolic/public_html/prikolica/templates/include/footer.html.twig");
    }
}
