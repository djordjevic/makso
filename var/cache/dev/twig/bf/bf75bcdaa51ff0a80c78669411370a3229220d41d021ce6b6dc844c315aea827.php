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

/* page/zastita.html.twig */
class __TwigTemplate_7b87aa7d35c3b17312e2ccdbc01fa2dc3188c5429bd38f8a4f22f05289e6c5f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/zastita.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/zastita.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/zastita.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zaštita podataka o ličnosti - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "page/zastita.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/zastita.html.twig", 19)->display($context);
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
                    <h3>Zaštita podataka o ličnosti</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Zaštita podataka o ličnosti</li>
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
                                    <h5>prikolica.shop</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Termini korišćeni u tekstu</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Imate pravo na</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Podnošenje pritužbe nadzornom telu</h5>
                                </a>
                            </li>
";
        // line 98
        echo "                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>prikolica.shop</h3>
                            <h6 class=\"font-light\">Korisnici, na koje se odnose lični podaci, mogu da stupe u kontakt sa ovlašćenim licem za zaštitu ličnih podataka u
                                vezi sa svim pitanjima povezanim sa obradom njihovih ličnih podataka i ostvarivanjem njihovih prava na osnovu važećih propisa o zaštiti ličnih podataka.
                                Za sva pitanja možete kontaktirati, lice ovlašćeno za zaštitu podataka o ličnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Termini korišćeni u tekstu:</h3>
                            <h6 class=\"font-light\"><strong>Lični podatak</strong> je svaki podatak koji se odnosi na fizičko lice čiji je identitet određen ili odrediv, neposredno ili posredno, posebno na osnovu oznake identiteta (to uključuje na primer: ime, prezime, e-mail, telefonski broj i dr.).</h6>
                            <h6 class=\"font-light\"><strong>Rukovalac</strong> je lice koje određuje svrhu i način obrade Vaših ličnih podataka. Rukovalac Vaših ličnih podataka je prikolica.shop.</h6>
                            <h6 class=\"font-light\"><strong>Obrađivač</strong> je pravno ili fizičko lice koje obrađuje lične podatke u ime rukovaoca. Obrađivači nam pomažu u pružanju određenih usluga ili ispunjenju obaveza koje imamo.</h6>
                            <h6 class=\"font-light\"><strong>Obrada</strong> podrazumeva prikupljanje, čuvanje, činjenje dostupnim, brisanje i sve druge oblike korišćenja ličnih podataka.</h6>
                            <h6 class=\"font-light\">Ova zaštita podataka o ličnosti podrazumeva informacije o tome koje Vaše lične podatke prikupljamo i obrađujemo, kako koristimo Vaše podatke odnosno u koje svrhe, kada podatke otkrivamo obrađivačima, koliko dugo ih čuvamo, koja su Vaša prava u vezi sa obradom Vaših ličnih podataka.</h6>

                                <h6 class=\"font-light\">Pitanje koje najčešće potrošači postavljaju je: „Da li imam obavezu da Vam dam svoje lične podatke?“

                                Obavezni ste da prikolica.shop date samo lične podatke koje obrađujemo u svrhu ispunjavanja zakonskih obaveza ili uz Vašu saglasnost.

                                Međutim, želimo da Vas upozorimo da ukoliko nam ne date Vaše lične podatke, prikolica.shop neće biti u mogućnosti da Vam pruži usluge (npr. ne možemo primiti niti obraditi porudžbinu, ne možemo isporučiti robu bez adrese...).

                                Ova zaštita podataka o ličnosti je namenjena korisnicima web stranice i kupcima, posetiocima iz naše web prodavnice.

                                prikolica.shop će Vaše lične podatke obrađivati isključivo na osnovu zakonitih i unapred određenih svrha. Ako se u budućnosti pojavi potreba za daljom obradom ličnih podataka (u dodatne svrhe), prethodno ćemo Vas obavestiti ovom politikom. </h6>

                            <h6 class=\"font-light\">Vaše lične podatke obrađujemo isključivo na odgovarajućim pravnim osnovima, propisanim Zakonom o zaštiti podataka o ličnosti Republike Srbije.

                                Vaše lične podatke obrađujemo u svrhu statističkih analiza,kako bi poboljšali svoje usluge ili proizvode ili u svrhu rešavanja reklamacije.

                                U prikolica.shop ulažemo sve napore da obezbedimo sigurnost Vaših ličnih podataka, zato koristimo tehničke i organizacione mere za zaštitu Vaših ličnih podataka od uništenja, brisanja, neovlašćenog pristupa i bilo koje druge neovlašćene izmene. Lične podatke koje obrađujemo nikada ne iznajmljujemo, ne prodajemo i ne dozvoljavamo njihovu obradu od bilo kog trećeg lica osim naših obrađivača na osnovu ugovora, kako je definisano u tački VI ove politike.

                                Lične podatke mogu obrađivati samo ovlašćena lica kod nas ili naši obrađivači na osnovu ugovora.

                                Pravila o zaštiti ličnih podataka menjamo i dopunjavamo u skladu sa izmenama zakonodavstva u oblasti zaštite ličnih podataka.

                                U vezi sa obradom ličnih podataka, imate na raspolaganju prava definisana u nastavku. </h6>

                                <h6 class=\"font-light\">Sva prava možete ostvariti slanjem pismenog zahteva na adresu: , ili putem e-maila na: .

                                Odgovorićemo na Vaš zahtev u roku od 30 dana. Rok može biti produžen za još 60 dana ako je to neophodno, uzimajući u obzir složenost i broj zahteva. O produženju roka i razlozima za to produženje bićete obavešteni u roku od 30 dana od dana prijema zahteva.

                                Da bi postupili po Vašem zahtevu, imamo pravo da proverimo Vaš identitet. U tu svrhu, možemo zahtevati od Vas dodatne lične podatke kako bi osigurali pouzdanu identifikaciju. Ako nam ne date dodatne informacije ili ne možemo da osiguramo pouzdanu identifikaciju, imamo pravo da odbacimo zahtev za ostvarivanje prava.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Imate pravo na:</h3>
                            <h6 class=\"font-light\">
                                <strong>Pristup Vašim ličnim podacima:</strong>
                                imate pravo da zahtevate informaciju o tome da li obrađujemo Vaše lične podatke i informaciju o obradi (o svrsi obrade, vrsti podataka koji se obrađuju, pravnoj osnovi, periodu čuvanja, primaocima ličnih podataka...). Ako obrađujemo Vaše lične podatke, imate pravo na pristup i kopiju ovih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Ispravku i dopunu Vaših ličnih podataka:</strong>
                                ako su Vaši podaci koje obrađujemo netačni ili nepotpuni imate pravo da zatražite ispravku i dopunu ličnih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Opoziv Vaše saglasnosti:</strong>
                                saglasnost koju ste dali možete opozvati u bilo kojem trenutku bez bilo kakvih negativnih posledica za Vas. U slučaju da opozovete svoju saglasnost, nećemo biti više u mogućnosti da Vam obezbedimo određene usluge (na primer, ako opozovete svoju saglasnost za slanje e-vesti, nećete više primati ove vesti).</h6>

                            <h6 class=\"font-light\">
                                <strong>Brisanje Vaših ličnih podataka:</strong> imate pravo da zatražite brisanje ličnih podataka koje obrađujemo o Vama u sledećim slučajevima:
                                kada je ispunjena svrha radi koje su prikupljeni podaci,
                                kada opozovete saglasnost za obradu,
                                kada prigovarate obradi, a ne postoji drugi pravni osnov koji preteže nad Vašim interesima, pravima i slobodama,
                                kada je obrada ličnih podataka nezakonita,
                                kada podatke moramo izbrisati u cilju izvršenja naših zakonskih obaveza,
                                kada su podaci prikupljeni u vezi sa korišćenjem usluga informacionog društva</h6>

                            <h6 class=\"font-light\">
                                <strong>Ograničenje obrade Vaših ličnih podataka:</strong> imate pravo tražiti da privremeno ograničimo obradu ličnih podataka u sledećim slučajevima:
                                kada osporavate tačnost Vaših ličnih podataka, u roku koji nam omogućava proveru tačnosti,
                                kada je obrada nezakonita, a Vi tražite ograničenje obrade umesto brisanja,
                                kada je svrha obrade ličnih podataka ispunjena, a podaci su Vam potrebni, u cilju podnošenja, ostvarivanja ili odbrane Vašeg pravnog zahteva,
                                kada ste podneli prigovor na obradu, u toku procenjivanja da li pravni osnov za obradu preteže nad Vašim interesima, pravima i slobodama.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prenosivost Vaših ličnih podataka:</strong>
                                imate pravo tražiti da primite Vaše lične podatke u strukturiranom, uobičajeno korišćenom i elektronski čitljivom obliku. Takođe imate pravo da ove podatke prenesete drugom rukovaocu. Pravo na prenosivost odnosi se na lične podatke čija obrada se vrši automatizovano, a zasnovana je na Vašoj izričitoj saglasnosti ili na osnovu ugovora.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prigovor na obradu Vaših ličnih podataka:</strong>
                                imate pravo da prigovorite na obradu Vaših ličnih podataka kada se obrada odvija na osnovu naših legitimnih interesa, uključujući i profilisanje na osnovu te obrade. U slučaju prigovora obustavićemo obradu, osim ako se ne pokaže da naš legitimni interes za obradu preteže nad Vašim interesima, pravima i slobodama. Kada se lični podaci obrađuju za potrebe direktnog oglašavanja, uključujući i profilisanje, imate pravo u svakom trenutku prigovoriti na ovu obradu Vaših ličnih podataka. U slučaju prigovora, ne možemo dalje obrađivati Vaše podatke za potrebe direktnog oglašavanja.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Podnošenje pritužbe nadzornom telu:</h3>
                            <h6 class=\"font-light\">Nadzorno telo za zaštitu podataka o ličnosti u Republici Srbiji je Poverenik za informacije od javnog značaja i zaštitu podataka o ličnosti, Bulevar kralja Aleksandra 15, Beograd.

                                Imate pravo da podnesete pritužbu Povereniku ako smatrate da je obrada podataka izvršena suprotno odredbama Zakona o zaštiti podataka o ličnosti Republike Srbije. Pritužba se podnosi u pisanom obliku, neposredno ili elektronski na obrascu Pritužba (obrazac je dostupan na veb stranici Poverenika), poštom na gornju adresu ili na email: prituzba@poverenik.rs.</h6>
                                <h6 class=\"font-light\">Vaše lične podatke čuvamo toliko vremena koliko nam je potrebno da bismo ispunili svrhu njihove obrade. Nakon isteka pojedinih rokova čuvanja, Vaše lične podatke brišemo (uništavamo) ili ih anonimiziramo da identifikacija pojedinaca više nije moguća.

                                Politika privatnosti se može promeniti u bilo koje vreme.</h6>
                        </div>
                    </div>

";
        // line 217
        echo "
";
        // line 229
        echo "                </div>
            </div>
        </div>
    </section>
    <!-- FAQ details end -->

    <!-- Subscribe Section Start -->
    ";
        // line 236
        $this->loadTemplate("include/subscribe.html.twig", "page/zastita.html.twig", 236)->display($context);
        // line 237
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 240
        $this->loadTemplate("include/footer.html.twig", "page/zastita.html.twig", 240)->display($context);
        // line 241
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 245
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 249
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 253
        echo "    ";
        // line 254
        echo "    ";
        // line 255
        echo "    ";
        // line 256
        echo "    ";
        // line 257
        echo "    ";
        // line 258
        echo "    ";
        // line 259
        echo "    ";
        // line 260
        echo "    ";
        // line 261
        echo "    ";
        // line 262
        echo "    ";
        // line 263
        echo "    ";
        // line 264
        echo "    ";
        // line 265
        echo "    ";
        // line 266
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 269
        $this->loadTemplate("include/top.html.twig", "page/zastita.html.twig", 269)->display($context);
        // line 270
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 276
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/zastita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 276,  402 => 275,  389 => 270,  387 => 269,  382 => 266,  380 => 265,  378 => 264,  376 => 263,  374 => 262,  372 => 261,  370 => 260,  368 => 259,  366 => 258,  364 => 257,  362 => 256,  360 => 255,  358 => 254,  356 => 253,  351 => 249,  346 => 245,  341 => 241,  339 => 240,  334 => 237,  332 => 236,  323 => 229,  320 => 217,  209 => 98,  162 => 42,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Zaštita podataka o ličnosti - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Zaštita podataka o ličnosti</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Zaštita podataka o ličnosti</li>
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
                                    <h5>prikolica.shop</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Termini korišćeni u tekstu</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Imate pravo na</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Podnošenje pritužbe nadzornom telu</h5>
                                </a>
                            </li>
{#                            <li>#}
{#                                <a href=\"#5\">#}
{#                                    <h4>5.</h4>#}
{#                                    <h5>Another very important question in FAQ?</h5>#}
{#                                </a>#}
{#                            </li>#}
{#                            <li>#}
{#                                <a href=\"#6\">#}
{#                                    <h4>6.</h4>#}
{#                                    <h5>Another question in FAQ?</h5>#}
{#                                </a>#}
{#                            </li>#}
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>prikolica.shop</h3>
                            <h6 class=\"font-light\">Korisnici, na koje se odnose lični podaci, mogu da stupe u kontakt sa ovlašćenim licem za zaštitu ličnih podataka u
                                vezi sa svim pitanjima povezanim sa obradom njihovih ličnih podataka i ostvarivanjem njihovih prava na osnovu važećih propisa o zaštiti ličnih podataka.
                                Za sva pitanja možete kontaktirati, lice ovlašćeno za zaštitu podataka o ličnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Termini korišćeni u tekstu:</h3>
                            <h6 class=\"font-light\"><strong>Lični podatak</strong> je svaki podatak koji se odnosi na fizičko lice čiji je identitet određen ili odrediv, neposredno ili posredno, posebno na osnovu oznake identiteta (to uključuje na primer: ime, prezime, e-mail, telefonski broj i dr.).</h6>
                            <h6 class=\"font-light\"><strong>Rukovalac</strong> je lice koje određuje svrhu i način obrade Vaših ličnih podataka. Rukovalac Vaših ličnih podataka je prikolica.shop.</h6>
                            <h6 class=\"font-light\"><strong>Obrađivač</strong> je pravno ili fizičko lice koje obrađuje lične podatke u ime rukovaoca. Obrađivači nam pomažu u pružanju određenih usluga ili ispunjenju obaveza koje imamo.</h6>
                            <h6 class=\"font-light\"><strong>Obrada</strong> podrazumeva prikupljanje, čuvanje, činjenje dostupnim, brisanje i sve druge oblike korišćenja ličnih podataka.</h6>
                            <h6 class=\"font-light\">Ova zaštita podataka o ličnosti podrazumeva informacije o tome koje Vaše lične podatke prikupljamo i obrađujemo, kako koristimo Vaše podatke odnosno u koje svrhe, kada podatke otkrivamo obrađivačima, koliko dugo ih čuvamo, koja su Vaša prava u vezi sa obradom Vaših ličnih podataka.</h6>

                                <h6 class=\"font-light\">Pitanje koje najčešće potrošači postavljaju je: „Da li imam obavezu da Vam dam svoje lične podatke?“

                                Obavezni ste da prikolica.shop date samo lične podatke koje obrađujemo u svrhu ispunjavanja zakonskih obaveza ili uz Vašu saglasnost.

                                Međutim, želimo da Vas upozorimo da ukoliko nam ne date Vaše lične podatke, prikolica.shop neće biti u mogućnosti da Vam pruži usluge (npr. ne možemo primiti niti obraditi porudžbinu, ne možemo isporučiti robu bez adrese...).

                                Ova zaštita podataka o ličnosti je namenjena korisnicima web stranice i kupcima, posetiocima iz naše web prodavnice.

                                prikolica.shop će Vaše lične podatke obrađivati isključivo na osnovu zakonitih i unapred određenih svrha. Ako se u budućnosti pojavi potreba za daljom obradom ličnih podataka (u dodatne svrhe), prethodno ćemo Vas obavestiti ovom politikom. </h6>

                            <h6 class=\"font-light\">Vaše lične podatke obrađujemo isključivo na odgovarajućim pravnim osnovima, propisanim Zakonom o zaštiti podataka o ličnosti Republike Srbije.

                                Vaše lične podatke obrađujemo u svrhu statističkih analiza,kako bi poboljšali svoje usluge ili proizvode ili u svrhu rešavanja reklamacije.

                                U prikolica.shop ulažemo sve napore da obezbedimo sigurnost Vaših ličnih podataka, zato koristimo tehničke i organizacione mere za zaštitu Vaših ličnih podataka od uništenja, brisanja, neovlašćenog pristupa i bilo koje druge neovlašćene izmene. Lične podatke koje obrađujemo nikada ne iznajmljujemo, ne prodajemo i ne dozvoljavamo njihovu obradu od bilo kog trećeg lica osim naših obrađivača na osnovu ugovora, kako je definisano u tački VI ove politike.

                                Lične podatke mogu obrađivati samo ovlašćena lica kod nas ili naši obrađivači na osnovu ugovora.

                                Pravila o zaštiti ličnih podataka menjamo i dopunjavamo u skladu sa izmenama zakonodavstva u oblasti zaštite ličnih podataka.

                                U vezi sa obradom ličnih podataka, imate na raspolaganju prava definisana u nastavku. </h6>

                                <h6 class=\"font-light\">Sva prava možete ostvariti slanjem pismenog zahteva na adresu: , ili putem e-maila na: .

                                Odgovorićemo na Vaš zahtev u roku od 30 dana. Rok može biti produžen za još 60 dana ako je to neophodno, uzimajući u obzir složenost i broj zahteva. O produženju roka i razlozima za to produženje bićete obavešteni u roku od 30 dana od dana prijema zahteva.

                                Da bi postupili po Vašem zahtevu, imamo pravo da proverimo Vaš identitet. U tu svrhu, možemo zahtevati od Vas dodatne lične podatke kako bi osigurali pouzdanu identifikaciju. Ako nam ne date dodatne informacije ili ne možemo da osiguramo pouzdanu identifikaciju, imamo pravo da odbacimo zahtev za ostvarivanje prava.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Imate pravo na:</h3>
                            <h6 class=\"font-light\">
                                <strong>Pristup Vašim ličnim podacima:</strong>
                                imate pravo da zahtevate informaciju o tome da li obrađujemo Vaše lične podatke i informaciju o obradi (o svrsi obrade, vrsti podataka koji se obrađuju, pravnoj osnovi, periodu čuvanja, primaocima ličnih podataka...). Ako obrađujemo Vaše lične podatke, imate pravo na pristup i kopiju ovih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Ispravku i dopunu Vaših ličnih podataka:</strong>
                                ako su Vaši podaci koje obrađujemo netačni ili nepotpuni imate pravo da zatražite ispravku i dopunu ličnih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Opoziv Vaše saglasnosti:</strong>
                                saglasnost koju ste dali možete opozvati u bilo kojem trenutku bez bilo kakvih negativnih posledica za Vas. U slučaju da opozovete svoju saglasnost, nećemo biti više u mogućnosti da Vam obezbedimo određene usluge (na primer, ako opozovete svoju saglasnost za slanje e-vesti, nećete više primati ove vesti).</h6>

                            <h6 class=\"font-light\">
                                <strong>Brisanje Vaših ličnih podataka:</strong> imate pravo da zatražite brisanje ličnih podataka koje obrađujemo o Vama u sledećim slučajevima:
                                kada je ispunjena svrha radi koje su prikupljeni podaci,
                                kada opozovete saglasnost za obradu,
                                kada prigovarate obradi, a ne postoji drugi pravni osnov koji preteže nad Vašim interesima, pravima i slobodama,
                                kada je obrada ličnih podataka nezakonita,
                                kada podatke moramo izbrisati u cilju izvršenja naših zakonskih obaveza,
                                kada su podaci prikupljeni u vezi sa korišćenjem usluga informacionog društva</h6>

                            <h6 class=\"font-light\">
                                <strong>Ograničenje obrade Vaših ličnih podataka:</strong> imate pravo tražiti da privremeno ograničimo obradu ličnih podataka u sledećim slučajevima:
                                kada osporavate tačnost Vaših ličnih podataka, u roku koji nam omogućava proveru tačnosti,
                                kada je obrada nezakonita, a Vi tražite ograničenje obrade umesto brisanja,
                                kada je svrha obrade ličnih podataka ispunjena, a podaci su Vam potrebni, u cilju podnošenja, ostvarivanja ili odbrane Vašeg pravnog zahteva,
                                kada ste podneli prigovor na obradu, u toku procenjivanja da li pravni osnov za obradu preteže nad Vašim interesima, pravima i slobodama.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prenosivost Vaših ličnih podataka:</strong>
                                imate pravo tražiti da primite Vaše lične podatke u strukturiranom, uobičajeno korišćenom i elektronski čitljivom obliku. Takođe imate pravo da ove podatke prenesete drugom rukovaocu. Pravo na prenosivost odnosi se na lične podatke čija obrada se vrši automatizovano, a zasnovana je na Vašoj izričitoj saglasnosti ili na osnovu ugovora.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prigovor na obradu Vaših ličnih podataka:</strong>
                                imate pravo da prigovorite na obradu Vaših ličnih podataka kada se obrada odvija na osnovu naših legitimnih interesa, uključujući i profilisanje na osnovu te obrade. U slučaju prigovora obustavićemo obradu, osim ako se ne pokaže da naš legitimni interes za obradu preteže nad Vašim interesima, pravima i slobodama. Kada se lični podaci obrađuju za potrebe direktnog oglašavanja, uključujući i profilisanje, imate pravo u svakom trenutku prigovoriti na ovu obradu Vaših ličnih podataka. U slučaju prigovora, ne možemo dalje obrađivati Vaše podatke za potrebe direktnog oglašavanja.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Podnošenje pritužbe nadzornom telu:</h3>
                            <h6 class=\"font-light\">Nadzorno telo za zaštitu podataka o ličnosti u Republici Srbiji je Poverenik za informacije od javnog značaja i zaštitu podataka o ličnosti, Bulevar kralja Aleksandra 15, Beograd.

                                Imate pravo da podnesete pritužbu Povereniku ako smatrate da je obrada podataka izvršena suprotno odredbama Zakona o zaštiti podataka o ličnosti Republike Srbije. Pritužba se podnosi u pisanom obliku, neposredno ili elektronski na obrascu Pritužba (obrazac je dostupan na veb stranici Poverenika), poštom na gornju adresu ili na email: prituzba@poverenik.rs.</h6>
                                <h6 class=\"font-light\">Vaše lične podatke čuvamo toliko vremena koliko nam je potrebno da bismo ispunili svrhu njihove obrade. Nakon isteka pojedinih rokova čuvanja, Vaše lične podatke brišemo (uništavamo) ili ih anonimiziramo da identifikacija pojedinaca više nije moguća.

                                Politika privatnosti se može promeniti u bilo koje vreme.</h6>
                        </div>
                    </div>

{#                    <div class=\"faq-heading\" id=\"5\">#}
{#                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>#}
{#                        <div class=\"faq-option\">#}
{#                            <h3>Another very important question in FAQ?</h3>#}
{#                            <h6 class=\"font-light\">Decide on how many bedrooms you require as most caravans can be from#}
{#                                2 to 4 bedrooms but#}
{#                                up to eight berths. manufactures will normally have their own layout but will offer but#}
{#                                will a number of ranges depending on your budget.</h6>#}
{#                        </div>#}
{#                    </div>#}

{#                    <div class=\"faq-heading\" id=\"6\">#}
{#                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>#}
{#                        <div class=\"faq-option\">#}
{#                            <h3>Another question in FAQ?</h3>#}
{#                            <h6 class=\"font-light\">The static holiday caravan has been designed for holiday use instead#}
{#                                of full time#}
{#                                living. With its modern construction and use of high quality materials the static#}
{#                                caravan should be built to British and European standard: BS EN 1647 but some luxury#}
{#                                caravans are built to BS 3632 confirming to residential standards.</h6>#}
{#                        </div>#}
{#                    </div>#}
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

{% endblock footerjavascript %}", "page/zastita.html.twig", "/home/prikolic/public_html/prikolica/templates/page/zastita.html.twig");
    }
}
