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
                                    <h5>Kako i kada prikupljamo va??e li??ne podatke?</h5>
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
                                    <h5>Gde se va??i li??ni podaci ??uvaju?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Da li PRODAVAC deli moje podatke sa tre??im licima?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#6\">
                                    <h4>6.</h4>
                                    <h5>Koliko dugo PRODAVAC ??uva va??e li??ne podatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#7\">
                                    <h4>7.</h4>
                                    <h5>Za ??ta koristimo va??e li??ne podatke?</h5>
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
                            <h3>Kako i kada prikupljamo va??e li??ne podatke?</h3>
                            <h6 class=\"font-light\">Prikupljamo Va??e li??ne podatke kada je to relevantno za potrebe Vas kao kupca, ili za na??e poslovanje (npr. kada kupujete i/ili naru??ujete proizvode i/ili usluge od nas, kada nas kontaktirate Va??e li??ne informacije uglavnom dobijamo direktno od Vas, kada naru??ite odre??ene proizvode ili usluge, popunite odre??eni formular, kontaktirate nas elektronskom po??tom i sl. )</h6>
                            <h6 class=\"font-light\">Vi??e informacija o situacijama i okolnostima u kojima prikupljamo Va??e li??ne podatke mo??ete prona??i u odeljku Za ??ta koristimo va??e li??ne podatke? Zapamtite da su ovo samo informacije o potencijalnim na??inima upotrebe Va??ih li??nih podataka, sa kojima se mo??ete susresti prilikom posete na??im prodavnicama i sajtovima, prilikom kupovine kod nas. U svakom slu??aju, dobi??ete jasne informacije o svrsi obrade Va??ih podataka, a u pojedinim slu??ajevima ??e nam dodatno biti potrebna Va??a izri??ita saglasnost.</h6>
                            <h6 class=\"font-light\">Sve va??e li??ne informacije tretiraju se kao poverljive, a PRODAVAC ih ??uva na adekvatan na??in (za vi??e informacija pogledajte odeljak: Da li PRODAVAC deli moje podatke sa tre??im stranama? u nastavku).</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koje podatke prikupljamo direktno od Vas?</h3>
                            <h6 class=\"font-light\">Uobi??ajene kategorije podataka koje prikupljamo od kupaca su: ime, adresa, datum ro??enja, preferirani jezik, adresa pla??anja, adresa isporuke ili druge informacije koje se ti??u kupovine, a koje navodite prilikom popunjavanja formulara na sajtu, odnosno pla??anja u prodavnici ili kada komunicirate sa nama putem telefona ili e-po??te, Va??e prethodne kupovine proizvoda i ostale informacije koje ste odlu??ili da podelite sa nama na dobrovoljnoj osnovi.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koja prava na privatnost imate?</h3>
                            <h6 class=\"font-light\">Da Vam omogucimo pristup Va??im li??nim podacima
                                Mo??ete da pitate PRODAVACa za koje svrhe se koriste podaci koji se ti??u Vas, kao i da pristupite takvim li??nim podacima. Pored toga, imate pravo i da znate svrhu obrade, kategorije va??ih li??nih podataka koje ??uvamo, tre??e strane ili kategorije tre??ih strana sa kojima se va??i li??ni podaci dele, period tokom kog zadr??avamo podatke, kao i na?? izvor podataka koje nismo prikupili direktno od Vas.</h6>
                            <h6 class=\"font-light\">Da Vam damo kopiju li??nih podataka koje ??uvamo
                                Mo??ete nas kontaktirati ukoliko ??elite kopiju pojedinih, ili svih li??nih podataka koje imamo o Vama.</h6>
                            <h6 class=\"font-light\">Da zahtevate ispravku pogre??no unetih podataka
                                ??elimo da se uverimo da su Va??i li??ni podaci ta??ni i a??urirani. Mo??ete nas zamoliti da ispravimo ili uklonimo podatke koje smatrate neta??nim ili zastarelim.</h6>
                            <h6 class=\"font-light\">Da zatra??ite brisanje Va??ih li??nih podataka
                                Mo??ete nas zamoliti da prekinemo obradu, ili ??ak, da obri??emo li??ne podatke o Vama koje posedujemo. Ukoliko su Va??e li??ne informacije neophodne za izvr??enje odre??enih ugovornih obaveza PRODAVACa prema Vama, PRODAVAC mo??da ne bude u stanju da izvr??i takve ugovorne obaveze. Isto tako, ukoliko su Va??i li??ni podaci potrebni kako bi se PRODAVAC pridr??avao odre??enih zakonskih obaveza (npr. poreski propisi), Va?? zahtev se ne mo??e re??iti.</h6>
                            <h6 class=\"font-light\">Da ograni??ite pristup Va??im podacima nama i/ili tre??im stranama, na odre??enim procesima, ili u potpunosti
                                Ukoliko ste osporili ta??nost Va??ih podataka, ili nam vi??e nisu potrebni li??ni podaci za svrhu obrade, ali ih Vi zahtevate radi uspostavljanja, sprovo??enja ili odbrane pravnih potra??ivanja, ili ste se protivili obradi po osnovu razloga koje PRODAVAC smatra legitimnim, imate pravo da zatra??ite ograni??enje obrade Va??ih li??nih podataka.</h6>
                            <h6 class=\"font-light\">Da podnesete prigovor na na??in na koji rukujemo va??im podacima
                                Zapamtite da imate pravo na prigovor na obradu va??ih li??nih podataka koja se zasniva na zakonskim osnovama koje PRODAVAC smatra legitimnim. Uz to, imate pravo i da u bilo kom trenutku uputite prigovor na obradu va??ih li??nih podataka u cilju direktnog marketinga, koja uklju??uje profilisanje u meri u kojoj je povezano sa takvim direktnim marketingom.</h6>
                            <h6 class=\"font-light\">Da zahtevate prebacivanje podataka drugom rukovaocu podataka (pravo na prenosivost podataka)
                                Ukoliko se obrada zasniva na va??oj saglasnosti ili se vr??i automatizovanim sredstvima, imate pravo da tra??ite od PRODAVACa da prenese va??e podatke drugom rukovaocu.</h6>
                            <h6 class=\"font-light\">Li??ne podatke koje prikupimo o Vama za ostvarivanje napred navedenih prava, molimo upotrebite kontakt podatke kompanije PRODAVAC navedene u odeljku O ovoj Politici privatnosti. Ukoliko niste zadovoljni na??inom na koji prikupljamo ili koristimo Va??e li??ne informacije, uvek imate pravo da podnesete zvani??nu ??albu Povereniku za informacije od javnog zna??aja i za??titu podataka o li??nosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Gde se va??i li??ni podaci ??uvaju?</h3>
                            <h6 class=\"font-light\">Va??e li??ne podatke ??uvamo u bezbednim okru??enjima. Va??e li??ne informacije su za??ti??ene od neovla????enog pristupa, otkrivanja, upotrebe, izmene ili uni??tavanja od strane bilo koje organizacije ili pojedinca.

                                Odre??eni podaci se i dalje ??uvaju u papirnom obliku. Obra??eni podaci se skladi??te u prostorijama i IT sistemima PRODAVACa, ali ponekad ??uvamo podatke na serverima na??ih pouzdanih provajdera.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Da li PRODAVAC deli moje podatke sa tre??im licima?</h3>
                            <h6 class=\"font-light\">PRODAVAC je za??tita va??e privatnosti veoma va??na, stoga nikada ne??emo deliti va??e li??ne podatke sa tre??im licem za svrhe koje nisu opisane u ovoj Politici.

                                Pored navedenog, mo??emo dati va??e li??ne podatke na??im pouzdanim partnerima koji odr??avaju na??e IT sisteme ili koji vam pru??aju usluge u ime PRODAVACa. Na primer, za marketin??ke, finansijske ili reklamne svrhe, radi obrade pla??anja, isporuke, ili radi obezbe??enja ostalih usluga koje pru??amo u prodavnici ili van nje. Ovi pru??aoci usluga su, me??utim, prema relevantnim sporazumima, u obavezi da koriste podatke koji su im povereni isklju??ivo u skladu s na??im smernicama, i strogo za svrhu koju smo naveli. Tako??e ih obavezujemo da adekvatno za??tite va??e podatke i da ih dr??e u tajnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"6\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koliko dugo PRODAVAC ??uva va??e li??ne podatke</h3>
                            <h6 class=\"font-light\">PRODAVAC ne??e ??uvati va??e li??ne podatke du??e nego ??to su va??i li??ni podaci neophodni radi ispunjenja specifi??ne namene. Vi??e informacija o periodima zadr??avanja za odre??ene tipove podataka mo??ete na??i u odeljku Za ??ta koristimo va??e li??ne podatke?</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"7\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Za ??ta koristimo va??e li??ne podatke?</h3>
                            <h6 class=\"font-light\">Va??e li??ne podatke koristimo na razli??ite na??ine, uglavnom za izvr??avanje ugovornih obaveza prema vama, ali ponekad ih koristimo i za pobolj??anje iskustva kupovine, za direktan marketing, ili iz bezbednosnih razloga. Molimo pro??itajte pa??ljivo svaku slede??u stavku u nastavku teksta, kako biste saznali vi??e o svrsi i pravnom osnovu za prikupljanje podataka.</h6>
                            <h6 class=\"font-light\">Kada obavite kupovinu li??no u jednoj od PRODAVAC prodavnica ili putem PRODAVAC sajta, u zavisnosti od slu??aja, od vas se mo??e tra??iti da ostavite odre??ene li??ne podatke koji su neophodni za pravilno izvr??enje kupovine. Ovo ??e se, naro??ito, dogoditi ukoliko, pored kupovine na??ih proizvoda, odaberete da koristite uslugu isporuke. Isto tako, da bismo obradili va??u porud??binu, i proverili da su li??ni i finansijski podaci koje ste nam dostavili ta??ni, koristimo sisteme pla??anja tre??ih lica, kako bi se osiguralo da uplata bude izvr??ena bezbedno, i da va??i podaci nisu la??no upotrebljeni.

                                Kako bismo se postarali da proizvodi i usluge koje kupite od nas budu dostavljeni na ta??nu adresu, sara??ujemo sa pouzdanim eksternim partnerima i delimo sa njima neke od va??ih li??nih podataka koji su neophodni za pru??anje odgovaraju??ih usluga (npr. va??e ime, adresu isporuke, i preferencije u vezi sa isporukom koje ste naveli, kao ??to je vreme dana u toku kog ??elite da dobijete isporuku).</h6>
                            <h6 class=\"font-light\">Ukoliko kontaktirate na??u Slu??bu za kupce (npr. ukoliko zahtevate vra??anje proizvoda kojim niste zadovoljni, itd.), direktno u PRODAVAC prodavnici ili putem odre??enog sredstva komunikacije koje Vam je na raspolaganju, bi??e nam potrebne va??e kontakt informacije kako bismo re??ili pitanje u vezi sa kojim ste nas kontaktirali. Takvi podaci ??e se koristiti samo za tu svrhu. U odre??enim slu??ajevima ??emo koristiti usluge tre??ih lica kojima smo poverili va??e podatke, u meri u kojoj je to neophodno za re??avanje va??eg slu??aja (npr. pru??aoci usluga dostave), kao ??to je opisano u odeljku Da li PRODAVAC deli moje podatke sa tre??im stranama? U ovom slu??aju, oni mogu biti pru??aoci usluga transporta kao i dobavlja??i IT sistema koji rade pri PRODAVACu kao deo tehni??ke podr??ke.

                                Isto tako, mo??ete kontaktirati Slu??bu za kupce kada ??elite da kupujete u kompaniji putem telefona. Da biste obavili kupovinu putem telefona, PRODAVAC obra??uje va??e podatke, kao ??to su: ime i prezime, adresa za slanje fakture, adresa za dostavu, broj telefona i adresa e-po??te. Ove podatke dajete na dobrovoljnoj bazi, ali ukoliko to ne u??inite, postoji mogu??nost neizvr??enja porud??bine ili isporuke.</h6>
                            <h6 class=\"font-light\">Neke informacije o vama mogu se prikupljati i prilikom posete sajtu. Ovi podaci ??e se obra??ivati za odre??enu svrhu, o ??emu ??emo vas obavestiti najkasnije u vreme prikupljanja (npr. za vr??enje prodaje putem interneta, za ??uvanje ??oping liste koju ste kreirali, itd.). U ovom slu??aju, ukoliko nam ne pru??ite odre??ene informacije, to mo??e ograni??iti mogu??nost obavljanja kupovine preko interneta, ili smanjiti nivo iskustva kupovine.</h6>
                            <h6 class=\"font-light\">PRODAVAC bi ??eleo da vam ??alje informacije o na??im proizvodima i uslugama za koje biste mogli da budete zainteresovani. Me??utim, dozvoljeno nam je da vam ??aljemo takav marketin??ki materijal samo ukoliko se vi za to odlu??ite. Imajte na umu da, ??ak i ukoliko ste dali saglasnost da primate na??e marketin??ke poruke, mo??ete jednostavno da se odjavite u nekom kasnijem trenutku.

                                Imate pravo da nas spre??ite, u bilo kom trenutku, da vas kontaktiramo u marketin??ke svrhe. Ukoliko vi??e ne ??elite da budete kontaktirani u marketin??ke svrhe, kliknite na dugme za odjavu na kraju na??e marketin??ke poruke (imejl/bilten/newsletter).</h6>
                            <h6 class=\"font-light\">Mo??ete nam, na dobrovoljnoj osnovi, davati informacije u koje spadaju va??e preferencije po pitanju proizvoda, razlozi iz kojih kupujete odre??eni proizvod, podaci o va??oj porodici i na??inu ??ivota ??? zahvaljuju??i ovome, mo??emo saznati vi??e o va??im preferencijama koje se ti??u kupovine, i dodatno unaprediti va??e iskustvo kupovine.

                                Mo??ete nam dati ove informacije i ukoliko se registrujete ili iskoristite specijalne PRODAVAC ponude, kupone za popust ili druge promocije.

                                U svakom od napred navedenih slu??ajeva ??emo nastojati da vam pru??imo pouzdane informacije u vezi sa obradom podataka.</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"8\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Stupanje na snagu i izmene Politike privatnosti</h3>
                            <h6 class=\"font-light\">Ova Politika stupa na snagu dana 1.09.2022.

                                Politika privatnosti ??e biti predmet redovnih revizija, a svaku a??uriranu verziju ??emo postaviti na ovu internet stranicu.</h6>
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
                                    <h5>Kako i kada prikupljamo va??e li??ne podatke?</h5>
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
                                    <h5>Gde se va??i li??ni podaci ??uvaju?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#5\">
                                    <h4>5.</h4>
                                    <h5>Da li PRODAVAC deli moje podatke sa tre??im licima?</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#6\">
                                    <h4>6.</h4>
                                    <h5>Koliko dugo PRODAVAC ??uva va??e li??ne podatke</h5>
                                </a>
                            </li>
                            <li>
                                <a href=\"#7\">
                                    <h4>7.</h4>
                                    <h5>Za ??ta koristimo va??e li??ne podatke?</h5>
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
                            <h3>Kako i kada prikupljamo va??e li??ne podatke?</h3>
                            <h6 class=\"font-light\">Prikupljamo Va??e li??ne podatke kada je to relevantno za potrebe Vas kao kupca, ili za na??e poslovanje (npr. kada kupujete i/ili naru??ujete proizvode i/ili usluge od nas, kada nas kontaktirate Va??e li??ne informacije uglavnom dobijamo direktno od Vas, kada naru??ite odre??ene proizvode ili usluge, popunite odre??eni formular, kontaktirate nas elektronskom po??tom i sl. )</h6>
                            <h6 class=\"font-light\">Vi??e informacija o situacijama i okolnostima u kojima prikupljamo Va??e li??ne podatke mo??ete prona??i u odeljku Za ??ta koristimo va??e li??ne podatke? Zapamtite da su ovo samo informacije o potencijalnim na??inima upotrebe Va??ih li??nih podataka, sa kojima se mo??ete susresti prilikom posete na??im prodavnicama i sajtovima, prilikom kupovine kod nas. U svakom slu??aju, dobi??ete jasne informacije o svrsi obrade Va??ih podataka, a u pojedinim slu??ajevima ??e nam dodatno biti potrebna Va??a izri??ita saglasnost.</h6>
                            <h6 class=\"font-light\">Sve va??e li??ne informacije tretiraju se kao poverljive, a PRODAVAC ih ??uva na adekvatan na??in (za vi??e informacija pogledajte odeljak: Da li PRODAVAC deli moje podatke sa tre??im stranama? u nastavku).</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koje podatke prikupljamo direktno od Vas?</h3>
                            <h6 class=\"font-light\">Uobi??ajene kategorije podataka koje prikupljamo od kupaca su: ime, adresa, datum ro??enja, preferirani jezik, adresa pla??anja, adresa isporuke ili druge informacije koje se ti??u kupovine, a koje navodite prilikom popunjavanja formulara na sajtu, odnosno pla??anja u prodavnici ili kada komunicirate sa nama putem telefona ili e-po??te, Va??e prethodne kupovine proizvoda i ostale informacije koje ste odlu??ili da podelite sa nama na dobrovoljnoj osnovi.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koja prava na privatnost imate?</h3>
                            <h6 class=\"font-light\">Da Vam omogucimo pristup Va??im li??nim podacima
                                Mo??ete da pitate PRODAVACa za koje svrhe se koriste podaci koji se ti??u Vas, kao i da pristupite takvim li??nim podacima. Pored toga, imate pravo i da znate svrhu obrade, kategorije va??ih li??nih podataka koje ??uvamo, tre??e strane ili kategorije tre??ih strana sa kojima se va??i li??ni podaci dele, period tokom kog zadr??avamo podatke, kao i na?? izvor podataka koje nismo prikupili direktno od Vas.</h6>
                            <h6 class=\"font-light\">Da Vam damo kopiju li??nih podataka koje ??uvamo
                                Mo??ete nas kontaktirati ukoliko ??elite kopiju pojedinih, ili svih li??nih podataka koje imamo o Vama.</h6>
                            <h6 class=\"font-light\">Da zahtevate ispravku pogre??no unetih podataka
                                ??elimo da se uverimo da su Va??i li??ni podaci ta??ni i a??urirani. Mo??ete nas zamoliti da ispravimo ili uklonimo podatke koje smatrate neta??nim ili zastarelim.</h6>
                            <h6 class=\"font-light\">Da zatra??ite brisanje Va??ih li??nih podataka
                                Mo??ete nas zamoliti da prekinemo obradu, ili ??ak, da obri??emo li??ne podatke o Vama koje posedujemo. Ukoliko su Va??e li??ne informacije neophodne za izvr??enje odre??enih ugovornih obaveza PRODAVACa prema Vama, PRODAVAC mo??da ne bude u stanju da izvr??i takve ugovorne obaveze. Isto tako, ukoliko su Va??i li??ni podaci potrebni kako bi se PRODAVAC pridr??avao odre??enih zakonskih obaveza (npr. poreski propisi), Va?? zahtev se ne mo??e re??iti.</h6>
                            <h6 class=\"font-light\">Da ograni??ite pristup Va??im podacima nama i/ili tre??im stranama, na odre??enim procesima, ili u potpunosti
                                Ukoliko ste osporili ta??nost Va??ih podataka, ili nam vi??e nisu potrebni li??ni podaci za svrhu obrade, ali ih Vi zahtevate radi uspostavljanja, sprovo??enja ili odbrane pravnih potra??ivanja, ili ste se protivili obradi po osnovu razloga koje PRODAVAC smatra legitimnim, imate pravo da zatra??ite ograni??enje obrade Va??ih li??nih podataka.</h6>
                            <h6 class=\"font-light\">Da podnesete prigovor na na??in na koji rukujemo va??im podacima
                                Zapamtite da imate pravo na prigovor na obradu va??ih li??nih podataka koja se zasniva na zakonskim osnovama koje PRODAVAC smatra legitimnim. Uz to, imate pravo i da u bilo kom trenutku uputite prigovor na obradu va??ih li??nih podataka u cilju direktnog marketinga, koja uklju??uje profilisanje u meri u kojoj je povezano sa takvim direktnim marketingom.</h6>
                            <h6 class=\"font-light\">Da zahtevate prebacivanje podataka drugom rukovaocu podataka (pravo na prenosivost podataka)
                                Ukoliko se obrada zasniva na va??oj saglasnosti ili se vr??i automatizovanim sredstvima, imate pravo da tra??ite od PRODAVACa da prenese va??e podatke drugom rukovaocu.</h6>
                            <h6 class=\"font-light\">Li??ne podatke koje prikupimo o Vama za ostvarivanje napred navedenih prava, molimo upotrebite kontakt podatke kompanije PRODAVAC navedene u odeljku O ovoj Politici privatnosti. Ukoliko niste zadovoljni na??inom na koji prikupljamo ili koristimo Va??e li??ne informacije, uvek imate pravo da podnesete zvani??nu ??albu Povereniku za informacije od javnog zna??aja i za??titu podataka o li??nosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Gde se va??i li??ni podaci ??uvaju?</h3>
                            <h6 class=\"font-light\">Va??e li??ne podatke ??uvamo u bezbednim okru??enjima. Va??e li??ne informacije su za??ti??ene od neovla????enog pristupa, otkrivanja, upotrebe, izmene ili uni??tavanja od strane bilo koje organizacije ili pojedinca.

                                Odre??eni podaci se i dalje ??uvaju u papirnom obliku. Obra??eni podaci se skladi??te u prostorijama i IT sistemima PRODAVACa, ali ponekad ??uvamo podatke na serverima na??ih pouzdanih provajdera.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"5\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Da li PRODAVAC deli moje podatke sa tre??im licima?</h3>
                            <h6 class=\"font-light\">PRODAVAC je za??tita va??e privatnosti veoma va??na, stoga nikada ne??emo deliti va??e li??ne podatke sa tre??im licem za svrhe koje nisu opisane u ovoj Politici.

                                Pored navedenog, mo??emo dati va??e li??ne podatke na??im pouzdanim partnerima koji odr??avaju na??e IT sisteme ili koji vam pru??aju usluge u ime PRODAVACa. Na primer, za marketin??ke, finansijske ili reklamne svrhe, radi obrade pla??anja, isporuke, ili radi obezbe??enja ostalih usluga koje pru??amo u prodavnici ili van nje. Ovi pru??aoci usluga su, me??utim, prema relevantnim sporazumima, u obavezi da koriste podatke koji su im povereni isklju??ivo u skladu s na??im smernicama, i strogo za svrhu koju smo naveli. Tako??e ih obavezujemo da adekvatno za??tite va??e podatke i da ih dr??e u tajnosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"6\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Koliko dugo PRODAVAC ??uva va??e li??ne podatke</h3>
                            <h6 class=\"font-light\">PRODAVAC ne??e ??uvati va??e li??ne podatke du??e nego ??to su va??i li??ni podaci neophodni radi ispunjenja specifi??ne namene. Vi??e informacija o periodima zadr??avanja za odre??ene tipove podataka mo??ete na??i u odeljku Za ??ta koristimo va??e li??ne podatke?</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"7\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Za ??ta koristimo va??e li??ne podatke?</h3>
                            <h6 class=\"font-light\">Va??e li??ne podatke koristimo na razli??ite na??ine, uglavnom za izvr??avanje ugovornih obaveza prema vama, ali ponekad ih koristimo i za pobolj??anje iskustva kupovine, za direktan marketing, ili iz bezbednosnih razloga. Molimo pro??itajte pa??ljivo svaku slede??u stavku u nastavku teksta, kako biste saznali vi??e o svrsi i pravnom osnovu za prikupljanje podataka.</h6>
                            <h6 class=\"font-light\">Kada obavite kupovinu li??no u jednoj od PRODAVAC prodavnica ili putem PRODAVAC sajta, u zavisnosti od slu??aja, od vas se mo??e tra??iti da ostavite odre??ene li??ne podatke koji su neophodni za pravilno izvr??enje kupovine. Ovo ??e se, naro??ito, dogoditi ukoliko, pored kupovine na??ih proizvoda, odaberete da koristite uslugu isporuke. Isto tako, da bismo obradili va??u porud??binu, i proverili da su li??ni i finansijski podaci koje ste nam dostavili ta??ni, koristimo sisteme pla??anja tre??ih lica, kako bi se osiguralo da uplata bude izvr??ena bezbedno, i da va??i podaci nisu la??no upotrebljeni.

                                Kako bismo se postarali da proizvodi i usluge koje kupite od nas budu dostavljeni na ta??nu adresu, sara??ujemo sa pouzdanim eksternim partnerima i delimo sa njima neke od va??ih li??nih podataka koji su neophodni za pru??anje odgovaraju??ih usluga (npr. va??e ime, adresu isporuke, i preferencije u vezi sa isporukom koje ste naveli, kao ??to je vreme dana u toku kog ??elite da dobijete isporuku).</h6>
                            <h6 class=\"font-light\">Ukoliko kontaktirate na??u Slu??bu za kupce (npr. ukoliko zahtevate vra??anje proizvoda kojim niste zadovoljni, itd.), direktno u PRODAVAC prodavnici ili putem odre??enog sredstva komunikacije koje Vam je na raspolaganju, bi??e nam potrebne va??e kontakt informacije kako bismo re??ili pitanje u vezi sa kojim ste nas kontaktirali. Takvi podaci ??e se koristiti samo za tu svrhu. U odre??enim slu??ajevima ??emo koristiti usluge tre??ih lica kojima smo poverili va??e podatke, u meri u kojoj je to neophodno za re??avanje va??eg slu??aja (npr. pru??aoci usluga dostave), kao ??to je opisano u odeljku Da li PRODAVAC deli moje podatke sa tre??im stranama? U ovom slu??aju, oni mogu biti pru??aoci usluga transporta kao i dobavlja??i IT sistema koji rade pri PRODAVACu kao deo tehni??ke podr??ke.

                                Isto tako, mo??ete kontaktirati Slu??bu za kupce kada ??elite da kupujete u kompaniji putem telefona. Da biste obavili kupovinu putem telefona, PRODAVAC obra??uje va??e podatke, kao ??to su: ime i prezime, adresa za slanje fakture, adresa za dostavu, broj telefona i adresa e-po??te. Ove podatke dajete na dobrovoljnoj bazi, ali ukoliko to ne u??inite, postoji mogu??nost neizvr??enja porud??bine ili isporuke.</h6>
                            <h6 class=\"font-light\">Neke informacije o vama mogu se prikupljati i prilikom posete sajtu. Ovi podaci ??e se obra??ivati za odre??enu svrhu, o ??emu ??emo vas obavestiti najkasnije u vreme prikupljanja (npr. za vr??enje prodaje putem interneta, za ??uvanje ??oping liste koju ste kreirali, itd.). U ovom slu??aju, ukoliko nam ne pru??ite odre??ene informacije, to mo??e ograni??iti mogu??nost obavljanja kupovine preko interneta, ili smanjiti nivo iskustva kupovine.</h6>
                            <h6 class=\"font-light\">PRODAVAC bi ??eleo da vam ??alje informacije o na??im proizvodima i uslugama za koje biste mogli da budete zainteresovani. Me??utim, dozvoljeno nam je da vam ??aljemo takav marketin??ki materijal samo ukoliko se vi za to odlu??ite. Imajte na umu da, ??ak i ukoliko ste dali saglasnost da primate na??e marketin??ke poruke, mo??ete jednostavno da se odjavite u nekom kasnijem trenutku.

                                Imate pravo da nas spre??ite, u bilo kom trenutku, da vas kontaktiramo u marketin??ke svrhe. Ukoliko vi??e ne ??elite da budete kontaktirani u marketin??ke svrhe, kliknite na dugme za odjavu na kraju na??e marketin??ke poruke (imejl/bilten/newsletter).</h6>
                            <h6 class=\"font-light\">Mo??ete nam, na dobrovoljnoj osnovi, davati informacije u koje spadaju va??e preferencije po pitanju proizvoda, razlozi iz kojih kupujete odre??eni proizvod, podaci o va??oj porodici i na??inu ??ivota ??? zahvaljuju??i ovome, mo??emo saznati vi??e o va??im preferencijama koje se ti??u kupovine, i dodatno unaprediti va??e iskustvo kupovine.

                                Mo??ete nam dati ove informacije i ukoliko se registrujete ili iskoristite specijalne PRODAVAC ponude, kupone za popust ili druge promocije.

                                U svakom od napred navedenih slu??ajeva ??emo nastojati da vam pru??imo pouzdane informacije u vezi sa obradom podataka.</h6>
                        </div>
                    </div>
                    <div class=\"faq-heading\" id=\"8\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Stupanje na snagu i izmene Politike privatnosti</h3>
                            <h6 class=\"font-light\">Ova Politika stupa na snagu dana 1.09.2022.

                                Politika privatnosti ??e biti predmet redovnih revizija, a svaku a??uriranu verziju ??emo postaviti na ovu internet stranicu.</h6>
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
