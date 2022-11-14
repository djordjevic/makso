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

/* page/reklamacije.html.twig */
class __TwigTemplate_33dcf0fa836ef20cf2d91e149fd078a350f87ef157f993c26fa47cfdda73a7ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/reklamacije.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/reklamacije.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/reklamacije.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reklamacije - Prodaja autoprikolica, traktora."), "html", null, true);
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
        echo "    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
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
        $this->loadTemplate("include/header.html.twig", "page/reklamacije.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/reklamacije.html.twig", 19)->display($context);
        // line 20
        echo "
    <!-- Breadcrumb section start -->
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
                    <h3>Reklamacije</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pocetna");
        echo "\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Reklamacije</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- FAQ details start -->
    <section class=\"faq-details section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"faq-link-box\">
                        <ul>
                            <li>
                                <a href=\"#1\">
                                    <h4>1.</h4>
                                    <h5>Reklamacije</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Prodavac ne odgovara za nedostatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Postupak reklamacije</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Vansudsko rešavanje potrošačkih sporova</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Otklanjanje nesaobraznosti posle isteka zakonskog roka</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Reklamacije</h3>
                            <h6 class=\"font-light\">U skladu sa Zakonom o zaštiti potrošača ( u daljem tekstu: Zakon) prodavac odgovara za nesaobraznost robe, u roku od 2 (dve) godine, počev od datuma kupovine. U slučaju kada je rok trajanja odnosno važenje garancije koje je navedeno uz svaki proizvod duže od onog predviđenog propisima Republike Srbije, primenjivaće se pravo koje je povoljnije za Kupca, odnosno važenje i trajanje garancije

                                Garancije ne pokrivaju mehanička oštećenja nastala nepravilnim rukovanjem i ne ograničavaju se na: rezove ili ogrebotine, oštećenja izazvana udarcima, nezgodama. Ove garancije ne važe ako su se proizvodi koristili u vlažnom okruženju (isključujući određene proizvode koji su namenjeni za spoljašnju upotrebu). Ove garancije ne pokrivaju posledična ili slučajna oštećenja.

                                Kako bi reklamacija, odnosno garancija, bila valjana, nužno je pridržavati se posebnih upustava za upotrebu i održavanje za svaki proizvod

                                Napominjemo da period saobraznosti artikala koji se smatraju potrošnom robom može biti manja od 24 meseca. U takve artikle spadaju baterije za uređaje (telefona, tableta...), itd. Period saobraznosti za takve artikle iznosi 6 (šest) meseci, ukoliko proizvođač nije drugačije propisao.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Prodavac ne odgovara za nedostatke ako isporučena roba</h3>
                            <h6 class=\"font-light\">odgovara opisu koji je dao prodavac i ako ima svojstva robe koju je prodavac pokazao potrošaču kao uzorak ili model;
                                ima svojstva potrebna za naročitu upotrebu za koju je potrošač nabavlja, a koja je bila poznata prodavcu ili mu je morala biti poznata u vreme zaključenja ugovora;
                                ima svojstva potrebna za redovnu upotrebu robe iste vrste;
                                po kvalitetu i funkcionisanju odgovara onome što je uobičajeno kod robe iste vrste i što potrošač može osnovano da očekuje s obzirom na prirodu robe i javna obećanja o posebnim svojstvima robe data od strane prodavca, proizvođača ili njihovih predstavnika, naročito ako je obećanje učinjeno putem oglasa ili na ambalaži robe.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Postupak reklamacije</h3>
                            <h6 class=\"font-light\">Potrošač izjavljuje reklamaciju radi ostvarivanja prava po osnovu saobraznosti, garancije, pogrešno obračunate cene i drugih nedostataka na jedan od sledećih načina:

                                lično u bilo kom od naših maloprodajnih objekata;
                                pozivanjem brojeva: 032 / 65 2014; 032/ 66 00 88
                                slanjem e-mail-a na mail: reklamacije@spektar.rs;
                                Obrazac za reklamaciju

                                Potrošač je dužan da prilikom izjavljivanja reklamacije priloži račun, kopiju računa ili bilo koji drugi dokaz o kupovini. Iako Zakon ne predviđa obavezu da potrošač čuva ambalažu, niti je to uslov za rešavanje reklamacije, niti razlog za odbijanje otklanjanja nesaobraznosti, naša preporuka je da ambalažu sačuvate radi obezbeđenja sigurnijeg transporta robe u ovlašćeni servis.

                                Potrošač je u skladu sa čl.55.stav 10. Zakona o zaštiti potrošača, dužan da se izjasni na Odgovor prodavca na reklamaciju i to u roku od 3 (tri) dana počev od dana prijema Odgovora prodavca, dostavljanjem odgovora na e- mail adresu prodavca reklamacije@spektar.rs.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Vansudsko rešavanje potrošačkih sporova</h3>
                            <h6 class=\"font-light\">U skladu sa članom 55. i članom 151. Zakona o zaštiti potrošača ( Sl. Glasnik RS, br. 62/2014, 6/2016, 44/2018, 88/2021 – dr. zakon), obaveštavamo kupce da imaju mogućnost rešavanja potrošačkog spora vansudskim putem. Vansudsko rešavanje potrošačkih sporova obavlja se na transparentan, efikasan, brz i pravičan način pred telom za vansudsko rešavanje potrošačkih sporova.

                                Ministarstvo trgovine, turizma i telekomunikacija sačinjava listu tela i javno je objavljuje. Dostupna je na adresi https://mtt.gov.rs/tekst/2306/zaštita-potrosaca.php.

                                Postupak pred telom može da pokrene POTROŠAČ predlogom samo ukoliko je prethodno izjavio reklamaciju ili prigovor i ne nakon isteka roka od 1(jedne) godine od dana podnošenja reklamacije.

                                Kao PRODAVAC smo po Zakonu dužni da učestvujemo u postupku za vansudsko rešavanje potrošačkih sporova.

                                Svaka stranka u postupku vansudskog rešavanja potrošačkog spora plaća svoje troškove (troškovi zastupanja, putni troškovi i sl.).

                                Ukoliko se potrošač ne izjasni u napred navedenom roku, smatraće se da nije saglasan sa predlogom prodavca.

                                Važna napomena: Obratite pažnju na uslove koje proizvođač propisuje u garantnom listu izdatom za ispravno funkcionisanje stvari u periodu dužem od 2 (dve) godine, jer je moguće da kao poseban uslov koji kupac mora da poštuje bude navedeno i čuvanje ambalaže.

                                Nakon što izjavite reklamaciju na jedan od predviđenih načina i dostavite dokaz o kupovini, dobićete pisanu potvrdu ili elektronskim putem će Vam biti potvrđen prijem reklamacije, odnosno saopšten broj pod kojim je vaša reklamacija zavedena u evidenciji primljenih reklamacija.

                                Nakon toga prodavac o svom trošku šalje reklamiranu robu u ovlašćeni servis koji je jedini merodavan da proceni da li je roba saobrazna ugovoru ili nije. Ako se reklamacija odnosi za veće uređaje bele tehnike, ovlašćeni servis će da izađe i na teren radi utvrđivanja nesaobraznosti i eventualne popravke. Nakon prijema nalaza od strane ovlašćenog servisa, a u roku od 8 dana od dana prijema reklamacije, pisanim ili elektronskm putem ćemo vam odgovoriti na izjavljenu reklamaciju.

                                U slučaju da se reklamacija prihvata, ista će biti rešena u periodu od 15 dana od dana podnošenja reklamacije, odnosno u periodu od 30 dana od dana podnošenja reklamacije ukoliko je u pitanju tehnička roba u skladu sa vašim zahtevom.

                                Robu koja je pristiglu sa servisa, a za koju je reklamacija prihvaćena, prodavac vraća kupcu, bez troškova za kupca. Potrošač je dužan da popravljenu robu preuzme ili omogući njeno dostavljanje najkasnije u roku od 45 dana od trenutka kada je dobio obaveštenje da je roba popravljena i spremna za preuzimanje-isporuku.

                                Ako se reklamacija ne prihvata (npr. slučajevi fizičkog oštećenja ne spadaju u nesaobraznost), kupac snosi troškove slanja robe na servis i troškove dijagnostike kvara prema cenovniku ovlašćenog servisa.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Otklanjanje nesaobraznosti posle isteka zakonskog roka</h3>
                            <h6 class=\"font-light\">Posle isteka zakonskog roka saobraznosti robe (2 godine), potrošač je sam odgovoran za slanje robe na servis. U tom slučaju samo on snosi troškove slanja i primanja robe i troškove popravke. Spisak servisa isporučuje se zajedno sa dokumentacijom koja ide uz robu a pojedini proizvođači daju samo podatke o centralnom ovlašćenom servisu koji kupca dalje preusmerava na njemu najbliži ovlašćeni servis.

                                Prodavac će rado izaći u susret svojim kupcima i pomoći im oko informacija o servisima posle isteka zakonskog perioda saobraznosti.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ details end -->

    <!-- Subscribe Section Start -->
    ";
        // line 184
        $this->loadTemplate("include/subscribe.html.twig", "page/reklamacije.html.twig", 184)->display($context);
        // line 185
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 188
        $this->loadTemplate("include/footer.html.twig", "page/reklamacije.html.twig", 188)->display($context);
        // line 189
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 193
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 197
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 201
        echo "    ";
        // line 202
        echo "    ";
        // line 203
        echo "    ";
        // line 204
        echo "    ";
        // line 205
        echo "    ";
        // line 206
        echo "    ";
        // line 207
        echo "    ";
        // line 208
        echo "    ";
        // line 209
        echo "    ";
        // line 210
        echo "    ";
        // line 211
        echo "    ";
        // line 212
        echo "    ";
        // line 213
        echo "    ";
        // line 214
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 217
        $this->loadTemplate("include/top.html.twig", "page/reklamacije.html.twig", 217)->display($context);
        // line 218
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 224
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/reklamacije.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 224,  377 => 223,  364 => 218,  362 => 217,  357 => 214,  355 => 213,  353 => 212,  351 => 211,  349 => 210,  347 => 209,  345 => 208,  343 => 207,  341 => 206,  339 => 205,  337 => 204,  335 => 203,  333 => 202,  331 => 201,  326 => 197,  321 => 193,  316 => 189,  314 => 188,  309 => 185,  307 => 184,  162 => 42,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Reklamacije - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
{% endblock title %}
{% block metatags %}
    {{ parent() }}
    {#    <meta name=\"description\" content=\"{{ metaData.pageMetaDescription }}\"/>#}
    {#    <meta name=\"keywords\" content=\"{{ metaData.pageMetaKeywords }}\"/>#}
    <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
    <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"{{ app.request.uri }}\" />
{% endblock metatags %}

{% block content %}
    <!-- header  -->
    {% include 'include/header.html.twig' %}
    <!-- mobile fix menu -->
    {% include 'include/mobile_menu.html.twig' %}

    <!-- Breadcrumb section start -->
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
                    <h3>Reklamacije</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Reklamacije</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- FAQ details start -->
    <section class=\"faq-details section-b-space\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"faq-link-box\">
                        <ul>
                            <li>
                                <a href=\"#1\">
                                    <h4>1.</h4>
                                    <h5>Reklamacije</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Prodavac ne odgovara za nedostatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Postupak reklamacije</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Vansudsko rešavanje potrošačkih sporova</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Otklanjanje nesaobraznosti posle isteka zakonskog roka</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Reklamacije</h3>
                            <h6 class=\"font-light\">U skladu sa Zakonom o zaštiti potrošača ( u daljem tekstu: Zakon) prodavac odgovara za nesaobraznost robe, u roku od 2 (dve) godine, počev od datuma kupovine. U slučaju kada je rok trajanja odnosno važenje garancije koje je navedeno uz svaki proizvod duže od onog predviđenog propisima Republike Srbije, primenjivaće se pravo koje je povoljnije za Kupca, odnosno važenje i trajanje garancije

                                Garancije ne pokrivaju mehanička oštećenja nastala nepravilnim rukovanjem i ne ograničavaju se na: rezove ili ogrebotine, oštećenja izazvana udarcima, nezgodama. Ove garancije ne važe ako su se proizvodi koristili u vlažnom okruženju (isključujući određene proizvode koji su namenjeni za spoljašnju upotrebu). Ove garancije ne pokrivaju posledična ili slučajna oštećenja.

                                Kako bi reklamacija, odnosno garancija, bila valjana, nužno je pridržavati se posebnih upustava za upotrebu i održavanje za svaki proizvod

                                Napominjemo da period saobraznosti artikala koji se smatraju potrošnom robom može biti manja od 24 meseca. U takve artikle spadaju baterije za uređaje (telefona, tableta...), itd. Period saobraznosti za takve artikle iznosi 6 (šest) meseci, ukoliko proizvođač nije drugačije propisao.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Prodavac ne odgovara za nedostatke ako isporučena roba</h3>
                            <h6 class=\"font-light\">odgovara opisu koji je dao prodavac i ako ima svojstva robe koju je prodavac pokazao potrošaču kao uzorak ili model;
                                ima svojstva potrebna za naročitu upotrebu za koju je potrošač nabavlja, a koja je bila poznata prodavcu ili mu je morala biti poznata u vreme zaključenja ugovora;
                                ima svojstva potrebna za redovnu upotrebu robe iste vrste;
                                po kvalitetu i funkcionisanju odgovara onome što je uobičajeno kod robe iste vrste i što potrošač može osnovano da očekuje s obzirom na prirodu robe i javna obećanja o posebnim svojstvima robe data od strane prodavca, proizvođača ili njihovih predstavnika, naročito ako je obećanje učinjeno putem oglasa ili na ambalaži robe.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Postupak reklamacije</h3>
                            <h6 class=\"font-light\">Potrošač izjavljuje reklamaciju radi ostvarivanja prava po osnovu saobraznosti, garancije, pogrešno obračunate cene i drugih nedostataka na jedan od sledećih načina:

                                lično u bilo kom od naših maloprodajnih objekata;
                                pozivanjem brojeva: 032 / 65 2014; 032/ 66 00 88
                                slanjem e-mail-a na mail: reklamacije@spektar.rs;
                                Obrazac za reklamaciju

                                Potrošač je dužan da prilikom izjavljivanja reklamacije priloži račun, kopiju računa ili bilo koji drugi dokaz o kupovini. Iako Zakon ne predviđa obavezu da potrošač čuva ambalažu, niti je to uslov za rešavanje reklamacije, niti razlog za odbijanje otklanjanja nesaobraznosti, naša preporuka je da ambalažu sačuvate radi obezbeđenja sigurnijeg transporta robe u ovlašćeni servis.

                                Potrošač je u skladu sa čl.55.stav 10. Zakona o zaštiti potrošača, dužan da se izjasni na Odgovor prodavca na reklamaciju i to u roku od 3 (tri) dana počev od dana prijema Odgovora prodavca, dostavljanjem odgovora na e- mail adresu prodavca reklamacije@spektar.rs.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Vansudsko rešavanje potrošačkih sporova</h3>
                            <h6 class=\"font-light\">U skladu sa članom 55. i članom 151. Zakona o zaštiti potrošača ( Sl. Glasnik RS, br. 62/2014, 6/2016, 44/2018, 88/2021 – dr. zakon), obaveštavamo kupce da imaju mogućnost rešavanja potrošačkog spora vansudskim putem. Vansudsko rešavanje potrošačkih sporova obavlja se na transparentan, efikasan, brz i pravičan način pred telom za vansudsko rešavanje potrošačkih sporova.

                                Ministarstvo trgovine, turizma i telekomunikacija sačinjava listu tela i javno je objavljuje. Dostupna je na adresi https://mtt.gov.rs/tekst/2306/zaštita-potrosaca.php.

                                Postupak pred telom može da pokrene POTROŠAČ predlogom samo ukoliko je prethodno izjavio reklamaciju ili prigovor i ne nakon isteka roka od 1(jedne) godine od dana podnošenja reklamacije.

                                Kao PRODAVAC smo po Zakonu dužni da učestvujemo u postupku za vansudsko rešavanje potrošačkih sporova.

                                Svaka stranka u postupku vansudskog rešavanja potrošačkog spora plaća svoje troškove (troškovi zastupanja, putni troškovi i sl.).

                                Ukoliko se potrošač ne izjasni u napred navedenom roku, smatraće se da nije saglasan sa predlogom prodavca.

                                Važna napomena: Obratite pažnju na uslove koje proizvođač propisuje u garantnom listu izdatom za ispravno funkcionisanje stvari u periodu dužem od 2 (dve) godine, jer je moguće da kao poseban uslov koji kupac mora da poštuje bude navedeno i čuvanje ambalaže.

                                Nakon što izjavite reklamaciju na jedan od predviđenih načina i dostavite dokaz o kupovini, dobićete pisanu potvrdu ili elektronskim putem će Vam biti potvrđen prijem reklamacije, odnosno saopšten broj pod kojim je vaša reklamacija zavedena u evidenciji primljenih reklamacija.

                                Nakon toga prodavac o svom trošku šalje reklamiranu robu u ovlašćeni servis koji je jedini merodavan da proceni da li je roba saobrazna ugovoru ili nije. Ako se reklamacija odnosi za veće uređaje bele tehnike, ovlašćeni servis će da izađe i na teren radi utvrđivanja nesaobraznosti i eventualne popravke. Nakon prijema nalaza od strane ovlašćenog servisa, a u roku od 8 dana od dana prijema reklamacije, pisanim ili elektronskm putem ćemo vam odgovoriti na izjavljenu reklamaciju.

                                U slučaju da se reklamacija prihvata, ista će biti rešena u periodu od 15 dana od dana podnošenja reklamacije, odnosno u periodu od 30 dana od dana podnošenja reklamacije ukoliko je u pitanju tehnička roba u skladu sa vašim zahtevom.

                                Robu koja je pristiglu sa servisa, a za koju je reklamacija prihvaćena, prodavac vraća kupcu, bez troškova za kupca. Potrošač je dužan da popravljenu robu preuzme ili omogući njeno dostavljanje najkasnije u roku od 45 dana od trenutka kada je dobio obaveštenje da je roba popravljena i spremna za preuzimanje-isporuku.

                                Ako se reklamacija ne prihvata (npr. slučajevi fizičkog oštećenja ne spadaju u nesaobraznost), kupac snosi troškove slanja robe na servis i troškove dijagnostike kvara prema cenovniku ovlašćenog servisa.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Otklanjanje nesaobraznosti posle isteka zakonskog roka</h3>
                            <h6 class=\"font-light\">Posle isteka zakonskog roka saobraznosti robe (2 godine), potrošač je sam odgovoran za slanje robe na servis. U tom slučaju samo on snosi troškove slanja i primanja robe i troškove popravke. Spisak servisa isporučuje se zajedno sa dokumentacijom koja ide uz robu a pojedini proizvođači daju samo podatke o centralnom ovlašćenom servisu koji kupca dalje preusmerava na njemu najbliži ovlašćeni servis.

                                Prodavac će rado izaći u susret svojim kupcima i pomoći im oko informacija o servisima posle isteka zakonskog perioda saobraznosti.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ details end -->

    <!-- Subscribe Section Start -->
    {% include 'include/subscribe.html.twig' %}
    <!-- Subscribe Section End -->

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

{% endblock footerjavascript %}", "page/reklamacije.html.twig", "/home/prikolic/public_html/prikolica/templates/page/reklamacije.html.twig");
    }
}
