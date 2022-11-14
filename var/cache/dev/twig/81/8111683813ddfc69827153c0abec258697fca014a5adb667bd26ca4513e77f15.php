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

/* page/privatnost.html.twig */
class __TwigTemplate_5d840435f21aff713b5873a4744e45285b9be58d2967fbd3fac09a19f07f16e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/privatnost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/privatnost.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "page/privatnost.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Politika privatnosti - Prodaja autoprikolica, traktora."), "html", null, true);
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
        $this->loadTemplate("include/header.html.twig", "page/privatnost.html.twig", 17)->display($context);
        // line 18
        echo "    <!-- mobile fix menu -->
    ";
        // line 19
        $this->loadTemplate("include/mobile_menu.html.twig", "page/privatnost.html.twig", 19)->display($context);
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
                    <h3>Politika privatnosti</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Politika privatnosti</li>
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
                                    <h5>Kako i kada prikupljamo vaše lične podatke?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Koje podatke prikupljamo direktno od Vas?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Koja prava na privatnost imate?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Gde se vaši lični podaci čuvaju?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Da li PRODAVAC deli moje podatke sa trećim licima?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#6\">
                                    <h4>6.</h4>
                                    <h5>Koliko dugo PRODAVAC čuva vaše lične podatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#7\">
                                    <h4>7.</h4>
                                    <h5>Za šta koristimo vaše lične podatke?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#8\">
                                    <h4>8.</h4>
                                    <h5>Stupanje na snagu i izmene Politike privatnosti</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Kako i kada prikupljamo vaše lične podatke?</h3>
                            <h6 class=\"font-light\">Prikupljamo Vaše lične podatke kada je to relevantno za potrebe Vas kao kupca, ili za naše poslovanje (npr. kada kupujete i/ili naručujete proizvode i/ili usluge od nas, kada nas kontaktirate Vaše lične informacije uglavnom dobijamo direktno od Vas, kada naručite određene proizvode ili usluge, popunite određeni formular, kontaktirate nas elektronskom poštom i sl. )</h6>
                            <h6 class=\"font-light\">Više informacija o situacijama i okolnostima u kojima prikupljamo Vaše lične podatke možete pronaći u odeljku Za šta koristimo vaše lične podatke? Zapamtite da su ovo samo informacije o potencijalnim načinima upotrebe Vaših ličnih podataka, sa kojima se možete susresti prilikom posete našim prodavnicama i sajtovima, prilikom kupovine kod nas. U svakom slučaju, dobićete jasne informacije o svrsi obrade Vaših podataka, a u pojedinim slučajevima će nam dodatno biti potrebna Vaša izričita saglasnost.</h6>
                            <h6 class=\"font-light\">Sve vaše lične informacije tretiraju se kao poverljive, a PRODAVAC ih čuva na adekvatan način (za više informacija pogledajte odeljak: Da li PRODAVAC deli moje podatke sa trećim stranama? u nastavku).</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koje podatke prikupljamo direktno od Vas?</h3>
                            <h6 class=\"font-light\">Uobičajene kategorije podataka koje prikupljamo od kupaca su: ime, adresa, datum rođenja, preferirani jezik, adresa plaćanja, adresa isporuke ili druge informacije koje se tiču kupovine, a koje navodite prilikom popunjavanja formulara na sajtu, odnosno plaćanja u prodavnici ili kada komunicirate sa nama putem telefona ili e-pošte, Vaše prethodne kupovine proizvoda i ostale informacije koje ste odlučili da podelite sa nama na dobrovoljnoj osnovi.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koja prava na privatnost imate?</h3>
                            <h6 class=\"font-light\">Da Vam omogucimo pristup Vašim ličnim podacima
                                Možete da pitate PRODAVACa za koje svrhe se koriste podaci koji se tiču Vas, kao i da pristupite takvim ličnim podacima. Pored toga, imate pravo i da znate svrhu obrade, kategorije vaših ličnih podataka koje čuvamo, treće strane ili kategorije trećih strana sa kojima se vaši lični podaci dele, period tokom kog zadržavamo podatke, kao i naš izvor podataka koje nismo prikupili direktno od Vas.</h6>
                            <h6 class=\"font-light\">Da Vam damo kopiju ličnih podataka koje čuvamo
                                Možete nas kontaktirati ukoliko želite kopiju pojedinih, ili svih ličnih podataka koje imamo o Vama.</h6>
                            <h6 class=\"font-light\">Da zahtevate ispravku pogrešno unetih podataka
                                Želimo da se uverimo da su Vaši lični podaci tačni i ažurirani. Možete nas zamoliti da ispravimo ili uklonimo podatke koje smatrate netačnim ili zastarelim.</h6>
                            <h6 class=\"font-light\">Da zatražite brisanje Vaših ličnih podataka
                                Možete nas zamoliti da prekinemo obradu, ili čak, da obrišemo lične podatke o Vama koje posedujemo. Ukoliko su Vaše lične informacije neophodne za izvršenje određenih ugovornih obaveza PRODAVACa prema Vama, PRODAVAC možda ne bude u stanju da izvrši takve ugovorne obaveze. Isto tako, ukoliko su Vaši lični podaci potrebni kako bi se PRODAVAC pridržavao određenih zakonskih obaveza (npr. poreski propisi), Vaš zahtev se ne može rešiti.</h6>
                            <h6 class=\"font-light\">Da ograničite pristup Vašim podacima nama i/ili trećim stranama, na određenim procesima, ili u potpunosti
                                Ukoliko ste osporili tačnost Vaših podataka, ili nam više nisu potrebni lični podaci za svrhu obrade, ali ih Vi zahtevate radi uspostavljanja, sprovođenja ili odbrane pravnih potraživanja, ili ste se protivili obradi po osnovu razloga koje PRODAVAC smatra legitimnim, imate pravo da zatražite ograničenje obrade Vaših ličnih podataka.</h6>
                            <h6 class=\"font-light\">Da podnesete prigovor na način na koji rukujemo vašim podacima
                                Zapamtite da imate pravo na prigovor na obradu vaših ličnih podataka koja se zasniva na zakonskim osnovama koje PRODAVAC smatra legitimnim. Uz to, imate pravo i da u bilo kom trenutku uputite prigovor na obradu vaših ličnih podataka u cilju direktnog marketinga, koja uključuje profilisanje u meri u kojoj je povezano sa takvim direktnim marketingom.</h6>
                            <h6 class=\"font-light\">Da zahtevate prebacivanje podataka drugom rukovaocu podataka (pravo na prenosivost podataka)
                                Ukoliko se obrada zasniva na vašoj saglasnosti ili se vrši automatizovanim sredstvima, imate pravo da tražite od PRODAVACa da prenese vaše podatke drugom rukovaocu.</h6>
                            <h6 class=\"font-light\">Lične podatke koje prikupimo o Vama za ostvarivanje napred navedenih prava, molimo upotrebite kontakt podatke kompanije PRODAVAC navedene u odeljku O ovoj Politici privatnosti. Ukoliko niste zadovoljni načinom na koji prikupljamo ili koristimo Vaše lične informacije, uvek imate pravo da podnesete zvaničnu žalbu Povereniku za informacije od javnog značaja i zaštitu podataka o ličnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Gde se vaši lični podaci čuvaju?</h3>
                            <h6 class=\"font-light\">Vaše lične podatke čuvamo u bezbednim okruženjima. Vaše lične informacije su zaštićene od neovlašćenog pristupa, otkrivanja, upotrebe, izmene ili uništavanja od strane bilo koje organizacije ili pojedinca.

                                Određeni podaci se i dalje čuvaju u papirnom obliku. Obrađeni podaci se skladište u prostorijama i IT sistemima PRODAVACa, ali ponekad čuvamo podatke na serverima naših pouzdanih provajdera.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Da li PRODAVAC deli moje podatke sa trećim licima?</h3>
                            <h6 class=\"font-light\">PRODAVAC je zaštita vaše privatnosti veoma važna, stoga nikada nećemo deliti vaše lične podatke sa trećim licem za svrhe koje nisu opisane u ovoj Politici.

                                Pored navedenog, možemo dati vaše lične podatke našim pouzdanim partnerima koji održavaju naše IT sisteme ili koji vam pružaju usluge u ime PRODAVACa. Na primer, za marketinške, finansijske ili reklamne svrhe, radi obrade plaćanja, isporuke, ili radi obezbeđenja ostalih usluga koje pružamo u prodavnici ili van nje. Ovi pružaoci usluga su, međutim, prema relevantnim sporazumima, u obavezi da koriste podatke koji su im povereni isključivo u skladu s našim smernicama, i strogo za svrhu koju smo naveli. Takođe ih obavezujemo da adekvatno zaštite vaše podatke i da ih drže u tajnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"6\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koliko dugo PRODAVAC čuva vaše lične podatke</h3>
                            <h6 class=\"font-light\">PRODAVAC neće čuvati vaše lične podatke duže nego što su vaši lični podaci neophodni radi ispunjenja specifične namene. Više informacija o periodima zadržavanja za određene tipove podataka možete naći u odeljku Za šta koristimo vaše lične podatke?</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"7\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Za šta koristimo vaše lične podatke?</h3>
                            <h6 class=\"font-light\">Vaše lične podatke koristimo na različite načine, uglavnom za izvršavanje ugovornih obaveza prema vama, ali ponekad ih koristimo i za poboljšanje iskustva kupovine, za direktan marketing, ili iz bezbednosnih razloga. Molimo pročitajte pažljivo svaku sledeću stavku u nastavku teksta, kako biste saznali više o svrsi i pravnom osnovu za prikupljanje podataka.</h6>
                            <h6 class=\"font-light\">Kada obavite kupovinu lično u jednoj od PRODAVAC prodavnica ili putem PRODAVAC sajta, u zavisnosti od slučaja, od vas se može tražiti da ostavite određene lične podatke koji su neophodni za pravilno izvršenje kupovine. Ovo će se, naročito, dogoditi ukoliko, pored kupovine naših proizvoda, odaberete da koristite uslugu isporuke. Isto tako, da bismo obradili vašu porudžbinu, i proverili da su lični i finansijski podaci koje ste nam dostavili tačni, koristimo sisteme plaćanja trećih lica, kako bi se osiguralo da uplata bude izvršena bezbedno, i da vaši podaci nisu lažno upotrebljeni.

                                Kako bismo se postarali da proizvodi i usluge koje kupite od nas budu dostavljeni na tačnu adresu, sarađujemo sa pouzdanim eksternim partnerima i delimo sa njima neke od vaših ličnih podataka koji su neophodni za pružanje odgovarajućih usluga (npr. vaše ime, adresu isporuke, i preferencije u vezi sa isporukom koje ste naveli, kao što je vreme dana u toku kog želite da dobijete isporuku).</h6>
                            <h6 class=\"font-light\">Ukoliko kontaktirate našu Službu za kupce (npr. ukoliko zahtevate vraćanje proizvoda kojim niste zadovoljni, itd.), direktno u PRODAVAC prodavnici ili putem određenog sredstva komunikacije koje Vam je na raspolaganju, biće nam potrebne vaše kontakt informacije kako bismo rešili pitanje u vezi sa kojim ste nas kontaktirali. Takvi podaci će se koristiti samo za tu svrhu. U određenim slučajevima ćemo koristiti usluge trećih lica kojima smo poverili vaše podatke, u meri u kojoj je to neophodno za rešavanje vašeg slučaja (npr. pružaoci usluga dostave), kao što je opisano u odeljku Da li PRODAVAC deli moje podatke sa trećim stranama? U ovom slučaju, oni mogu biti pružaoci usluga transporta kao i dobavljači IT sistema koji rade pri PRODAVACu kao deo tehničke podrške.

                                Isto tako, možete kontaktirati Službu za kupce kada želite da kupujete u kompaniji putem telefona. Da biste obavili kupovinu putem telefona, PRODAVAC obrađuje vaše podatke, kao što su: ime i prezime, adresa za slanje fakture, adresa za dostavu, broj telefona i adresa e-pošte. Ove podatke dajete na dobrovoljnoj bazi, ali ukoliko to ne učinite, postoji mogućnost neizvršenja porudžbine ili isporuke.</h6>
                            <h6 class=\"font-light\">Neke informacije o vama mogu se prikupljati i prilikom posete sajtu. Ovi podaci će se obrađivati za određenu svrhu, o čemu ćemo vas obavestiti najkasnije u vreme prikupljanja (npr. za vršenje prodaje putem interneta, za čuvanje šoping liste koju ste kreirali, itd.). U ovom slučaju, ukoliko nam ne pružite određene informacije, to može ograničiti mogućnost obavljanja kupovine preko interneta, ili smanjiti nivo iskustva kupovine.</h6>
                            <h6 class=\"font-light\">PRODAVAC bi želeo da vam šalje informacije o našim proizvodima i uslugama za koje biste mogli da budete zainteresovani. Međutim, dozvoljeno nam je da vam šaljemo takav marketinški materijal samo ukoliko se vi za to odlučite. Imajte na umu da, čak i ukoliko ste dali saglasnost da primate naše marketinške poruke, možete jednostavno da se odjavite u nekom kasnijem trenutku.

                                Imate pravo da nas sprečite, u bilo kom trenutku, da vas kontaktiramo u marketinške svrhe. Ukoliko više ne želite da budete kontaktirani u marketinške svrhe, kliknite na dugme za odjavu na kraju naše marketinške poruke (imejl/bilten/newsletter).</h6>
                            <h6 class=\"font-light\">Možete nam, na dobrovoljnoj osnovi, davati informacije u koje spadaju vaše preferencije po pitanju proizvoda, razlozi iz kojih kupujete određeni proizvod, podaci o vašoj porodici i načinu života – zahvaljujući ovome, možemo saznati više o vašim preferencijama koje se tiču kupovine, i dodatno unaprediti vaše iskustvo kupovine.

                                Možete nam dati ove informacije i ukoliko se registrujete ili iskoristite specijalne PRODAVAC ponude, kupone za popust ili druge promocije.

                                U svakom od napred navedenih slučajeva ćemo nastojati da vam pružimo pouzdane informacije u vezi sa obradom podataka.</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"8\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Stupanje na snagu i izmene Politike privatnosti</h3>
                            <h6 class=\"font-light\">Ova Politika stupa na snagu dana 1.09.2022.

                                Politika privatnosti će biti predmet redovnih revizija, a svaku ažuriranu verziju ćemo postaviti na ovu internet stranicu.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ details end -->

    <!-- Subscribe Section Start -->
    ";
        // line 219
        $this->loadTemplate("include/subscribe.html.twig", "page/privatnost.html.twig", 219)->display($context);
        // line 220
        echo "    <!-- Subscribe Section End -->

    <!-- footer start -->
    ";
        // line 223
        $this->loadTemplate("include/footer.html.twig", "page/privatnost.html.twig", 223)->display($context);
        // line 224
        echo "    <!-- footer end -->

    <!-- Newsletter modal start -->
    ";
        // line 228
        echo "    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    ";
        // line 232
        echo "    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    ";
        // line 236
        echo "    ";
        // line 237
        echo "    ";
        // line 238
        echo "    ";
        // line 239
        echo "    ";
        // line 240
        echo "    ";
        // line 241
        echo "    ";
        // line 242
        echo "    ";
        // line 243
        echo "    ";
        // line 244
        echo "    ";
        // line 245
        echo "    ";
        // line 246
        echo "    ";
        // line 247
        echo "    ";
        // line 248
        echo "    ";
        // line 249
        echo "    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    ";
        // line 252
        $this->loadTemplate("include/top.html.twig", "page/privatnost.html.twig", 252)->display($context);
        // line 253
        echo "    <!-- tap to top Section End -->

    <div class=\"bg-overlay\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 258
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        // line 259
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/privatnost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 259,  412 => 258,  399 => 253,  397 => 252,  392 => 249,  390 => 248,  388 => 247,  386 => 246,  384 => 245,  382 => 244,  380 => 243,  378 => 242,  376 => 241,  374 => 240,  372 => 239,  370 => 238,  368 => 237,  366 => 236,  361 => 232,  356 => 228,  351 => 224,  349 => 223,  344 => 220,  342 => 219,  162 => 42,  138 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  118 => 15,  106 => 12,  101 => 9,  99 => 8,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}
    {{ 'Politika privatnosti - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Politika privatnosti</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Politika privatnosti</li>
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
                                    <h5>Kako i kada prikupljamo vaše lične podatke?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#2\">
                                    <h4>2.</h4>
                                    <h5>Koje podatke prikupljamo direktno od Vas?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#3\">
                                    <h4>3.</h4>
                                    <h5>Koja prava na privatnost imate?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#4\">
                                    <h4>4.</h4>
                                    <h5>Gde se vaši lični podaci čuvaju?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Da li PRODAVAC deli moje podatke sa trećim licima?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#6\">
                                    <h4>6.</h4>
                                    <h5>Koliko dugo PRODAVAC čuva vaše lične podatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#7\">
                                    <h4>7.</h4>
                                    <h5>Za šta koristimo vaše lične podatke?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#8\">
                                    <h4>8.</h4>
                                    <h5>Stupanje na snagu i izmene Politike privatnosti</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-7 col-md-8\">
                    <div class=\"faq-heading\" id=\"1\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Kako i kada prikupljamo vaše lične podatke?</h3>
                            <h6 class=\"font-light\">Prikupljamo Vaše lične podatke kada je to relevantno za potrebe Vas kao kupca, ili za naše poslovanje (npr. kada kupujete i/ili naručujete proizvode i/ili usluge od nas, kada nas kontaktirate Vaše lične informacije uglavnom dobijamo direktno od Vas, kada naručite određene proizvode ili usluge, popunite određeni formular, kontaktirate nas elektronskom poštom i sl. )</h6>
                            <h6 class=\"font-light\">Više informacija o situacijama i okolnostima u kojima prikupljamo Vaše lične podatke možete pronaći u odeljku Za šta koristimo vaše lične podatke? Zapamtite da su ovo samo informacije o potencijalnim načinima upotrebe Vaših ličnih podataka, sa kojima se možete susresti prilikom posete našim prodavnicama i sajtovima, prilikom kupovine kod nas. U svakom slučaju, dobićete jasne informacije o svrsi obrade Vaših podataka, a u pojedinim slučajevima će nam dodatno biti potrebna Vaša izričita saglasnost.</h6>
                            <h6 class=\"font-light\">Sve vaše lične informacije tretiraju se kao poverljive, a PRODAVAC ih čuva na adekvatan način (za više informacija pogledajte odeljak: Da li PRODAVAC deli moje podatke sa trećim stranama? u nastavku).</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koje podatke prikupljamo direktno od Vas?</h3>
                            <h6 class=\"font-light\">Uobičajene kategorije podataka koje prikupljamo od kupaca su: ime, adresa, datum rođenja, preferirani jezik, adresa plaćanja, adresa isporuke ili druge informacije koje se tiču kupovine, a koje navodite prilikom popunjavanja formulara na sajtu, odnosno plaćanja u prodavnici ili kada komunicirate sa nama putem telefona ili e-pošte, Vaše prethodne kupovine proizvoda i ostale informacije koje ste odlučili da podelite sa nama na dobrovoljnoj osnovi.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koja prava na privatnost imate?</h3>
                            <h6 class=\"font-light\">Da Vam omogucimo pristup Vašim ličnim podacima
                                Možete da pitate PRODAVACa za koje svrhe se koriste podaci koji se tiču Vas, kao i da pristupite takvim ličnim podacima. Pored toga, imate pravo i da znate svrhu obrade, kategorije vaših ličnih podataka koje čuvamo, treće strane ili kategorije trećih strana sa kojima se vaši lični podaci dele, period tokom kog zadržavamo podatke, kao i naš izvor podataka koje nismo prikupili direktno od Vas.</h6>
                            <h6 class=\"font-light\">Da Vam damo kopiju ličnih podataka koje čuvamo
                                Možete nas kontaktirati ukoliko želite kopiju pojedinih, ili svih ličnih podataka koje imamo o Vama.</h6>
                            <h6 class=\"font-light\">Da zahtevate ispravku pogrešno unetih podataka
                                Želimo da se uverimo da su Vaši lični podaci tačni i ažurirani. Možete nas zamoliti da ispravimo ili uklonimo podatke koje smatrate netačnim ili zastarelim.</h6>
                            <h6 class=\"font-light\">Da zatražite brisanje Vaših ličnih podataka
                                Možete nas zamoliti da prekinemo obradu, ili čak, da obrišemo lične podatke o Vama koje posedujemo. Ukoliko su Vaše lične informacije neophodne za izvršenje određenih ugovornih obaveza PRODAVACa prema Vama, PRODAVAC možda ne bude u stanju da izvrši takve ugovorne obaveze. Isto tako, ukoliko su Vaši lični podaci potrebni kako bi se PRODAVAC pridržavao određenih zakonskih obaveza (npr. poreski propisi), Vaš zahtev se ne može rešiti.</h6>
                            <h6 class=\"font-light\">Da ograničite pristup Vašim podacima nama i/ili trećim stranama, na određenim procesima, ili u potpunosti
                                Ukoliko ste osporili tačnost Vaših podataka, ili nam više nisu potrebni lični podaci za svrhu obrade, ali ih Vi zahtevate radi uspostavljanja, sprovođenja ili odbrane pravnih potraživanja, ili ste se protivili obradi po osnovu razloga koje PRODAVAC smatra legitimnim, imate pravo da zatražite ograničenje obrade Vaših ličnih podataka.</h6>
                            <h6 class=\"font-light\">Da podnesete prigovor na način na koji rukujemo vašim podacima
                                Zapamtite da imate pravo na prigovor na obradu vaših ličnih podataka koja se zasniva na zakonskim osnovama koje PRODAVAC smatra legitimnim. Uz to, imate pravo i da u bilo kom trenutku uputite prigovor na obradu vaših ličnih podataka u cilju direktnog marketinga, koja uključuje profilisanje u meri u kojoj je povezano sa takvim direktnim marketingom.</h6>
                            <h6 class=\"font-light\">Da zahtevate prebacivanje podataka drugom rukovaocu podataka (pravo na prenosivost podataka)
                                Ukoliko se obrada zasniva na vašoj saglasnosti ili se vrši automatizovanim sredstvima, imate pravo da tražite od PRODAVACa da prenese vaše podatke drugom rukovaocu.</h6>
                            <h6 class=\"font-light\">Lične podatke koje prikupimo o Vama za ostvarivanje napred navedenih prava, molimo upotrebite kontakt podatke kompanije PRODAVAC navedene u odeljku O ovoj Politici privatnosti. Ukoliko niste zadovoljni načinom na koji prikupljamo ili koristimo Vaše lične informacije, uvek imate pravo da podnesete zvaničnu žalbu Povereniku za informacije od javnog značaja i zaštitu podataka o ličnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Gde se vaši lični podaci čuvaju?</h3>
                            <h6 class=\"font-light\">Vaše lične podatke čuvamo u bezbednim okruženjima. Vaše lične informacije su zaštićene od neovlašćenog pristupa, otkrivanja, upotrebe, izmene ili uništavanja od strane bilo koje organizacije ili pojedinca.

                                Određeni podaci se i dalje čuvaju u papirnom obliku. Obrađeni podaci se skladište u prostorijama i IT sistemima PRODAVACa, ali ponekad čuvamo podatke na serverima naših pouzdanih provajdera.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Da li PRODAVAC deli moje podatke sa trećim licima?</h3>
                            <h6 class=\"font-light\">PRODAVAC je zaštita vaše privatnosti veoma važna, stoga nikada nećemo deliti vaše lične podatke sa trećim licem za svrhe koje nisu opisane u ovoj Politici.

                                Pored navedenog, možemo dati vaše lične podatke našim pouzdanim partnerima koji održavaju naše IT sisteme ili koji vam pružaju usluge u ime PRODAVACa. Na primer, za marketinške, finansijske ili reklamne svrhe, radi obrade plaćanja, isporuke, ili radi obezbeđenja ostalih usluga koje pružamo u prodavnici ili van nje. Ovi pružaoci usluga su, međutim, prema relevantnim sporazumima, u obavezi da koriste podatke koji su im povereni isključivo u skladu s našim smernicama, i strogo za svrhu koju smo naveli. Takođe ih obavezujemo da adekvatno zaštite vaše podatke i da ih drže u tajnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"6\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koliko dugo PRODAVAC čuva vaše lične podatke</h3>
                            <h6 class=\"font-light\">PRODAVAC neće čuvati vaše lične podatke duže nego što su vaši lični podaci neophodni radi ispunjenja specifične namene. Više informacija o periodima zadržavanja za određene tipove podataka možete naći u odeljku Za šta koristimo vaše lične podatke?</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"7\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Za šta koristimo vaše lične podatke?</h3>
                            <h6 class=\"font-light\">Vaše lične podatke koristimo na različite načine, uglavnom za izvršavanje ugovornih obaveza prema vama, ali ponekad ih koristimo i za poboljšanje iskustva kupovine, za direktan marketing, ili iz bezbednosnih razloga. Molimo pročitajte pažljivo svaku sledeću stavku u nastavku teksta, kako biste saznali više o svrsi i pravnom osnovu za prikupljanje podataka.</h6>
                            <h6 class=\"font-light\">Kada obavite kupovinu lično u jednoj od PRODAVAC prodavnica ili putem PRODAVAC sajta, u zavisnosti od slučaja, od vas se može tražiti da ostavite određene lične podatke koji su neophodni za pravilno izvršenje kupovine. Ovo će se, naročito, dogoditi ukoliko, pored kupovine naših proizvoda, odaberete da koristite uslugu isporuke. Isto tako, da bismo obradili vašu porudžbinu, i proverili da su lični i finansijski podaci koje ste nam dostavili tačni, koristimo sisteme plaćanja trećih lica, kako bi se osiguralo da uplata bude izvršena bezbedno, i da vaši podaci nisu lažno upotrebljeni.

                                Kako bismo se postarali da proizvodi i usluge koje kupite od nas budu dostavljeni na tačnu adresu, sarađujemo sa pouzdanim eksternim partnerima i delimo sa njima neke od vaših ličnih podataka koji su neophodni za pružanje odgovarajućih usluga (npr. vaše ime, adresu isporuke, i preferencije u vezi sa isporukom koje ste naveli, kao što je vreme dana u toku kog želite da dobijete isporuku).</h6>
                            <h6 class=\"font-light\">Ukoliko kontaktirate našu Službu za kupce (npr. ukoliko zahtevate vraćanje proizvoda kojim niste zadovoljni, itd.), direktno u PRODAVAC prodavnici ili putem određenog sredstva komunikacije koje Vam je na raspolaganju, biće nam potrebne vaše kontakt informacije kako bismo rešili pitanje u vezi sa kojim ste nas kontaktirali. Takvi podaci će se koristiti samo za tu svrhu. U određenim slučajevima ćemo koristiti usluge trećih lica kojima smo poverili vaše podatke, u meri u kojoj je to neophodno za rešavanje vašeg slučaja (npr. pružaoci usluga dostave), kao što je opisano u odeljku Da li PRODAVAC deli moje podatke sa trećim stranama? U ovom slučaju, oni mogu biti pružaoci usluga transporta kao i dobavljači IT sistema koji rade pri PRODAVACu kao deo tehničke podrške.

                                Isto tako, možete kontaktirati Službu za kupce kada želite da kupujete u kompaniji putem telefona. Da biste obavili kupovinu putem telefona, PRODAVAC obrađuje vaše podatke, kao što su: ime i prezime, adresa za slanje fakture, adresa za dostavu, broj telefona i adresa e-pošte. Ove podatke dajete na dobrovoljnoj bazi, ali ukoliko to ne učinite, postoji mogućnost neizvršenja porudžbine ili isporuke.</h6>
                            <h6 class=\"font-light\">Neke informacije o vama mogu se prikupljati i prilikom posete sajtu. Ovi podaci će se obrađivati za određenu svrhu, o čemu ćemo vas obavestiti najkasnije u vreme prikupljanja (npr. za vršenje prodaje putem interneta, za čuvanje šoping liste koju ste kreirali, itd.). U ovom slučaju, ukoliko nam ne pružite određene informacije, to može ograničiti mogućnost obavljanja kupovine preko interneta, ili smanjiti nivo iskustva kupovine.</h6>
                            <h6 class=\"font-light\">PRODAVAC bi želeo da vam šalje informacije o našim proizvodima i uslugama za koje biste mogli da budete zainteresovani. Međutim, dozvoljeno nam je da vam šaljemo takav marketinški materijal samo ukoliko se vi za to odlučite. Imajte na umu da, čak i ukoliko ste dali saglasnost da primate naše marketinške poruke, možete jednostavno da se odjavite u nekom kasnijem trenutku.

                                Imate pravo da nas sprečite, u bilo kom trenutku, da vas kontaktiramo u marketinške svrhe. Ukoliko više ne želite da budete kontaktirani u marketinške svrhe, kliknite na dugme za odjavu na kraju naše marketinške poruke (imejl/bilten/newsletter).</h6>
                            <h6 class=\"font-light\">Možete nam, na dobrovoljnoj osnovi, davati informacije u koje spadaju vaše preferencije po pitanju proizvoda, razlozi iz kojih kupujete određeni proizvod, podaci o vašoj porodici i načinu života – zahvaljujući ovome, možemo saznati više o vašim preferencijama koje se tiču kupovine, i dodatno unaprediti vaše iskustvo kupovine.

                                Možete nam dati ove informacije i ukoliko se registrujete ili iskoristite specijalne PRODAVAC ponude, kupone za popust ili druge promocije.

                                U svakom od napred navedenih slučajeva ćemo nastojati da vam pružimo pouzdane informacije u vezi sa obradom podataka.</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"8\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Stupanje na snagu i izmene Politike privatnosti</h3>
                            <h6 class=\"font-light\">Ova Politika stupa na snagu dana 1.09.2022.

                                Politika privatnosti će biti predmet redovnih revizija, a svaku ažuriranu verziju ćemo postaviti na ovu internet stranicu.</h6>
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

{% endblock footerjavascript %}", "page/privatnost.html.twig", "/home/prikolic/public_html/prikolica/templates/page/privatnost.html.twig");
    }
}
