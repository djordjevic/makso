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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Za??tita podataka o li??nosti - Prodaja autoprikolica, traktora."), "html", null, true);
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
                    <h3>Za??tita podataka o li??nosti</h3>
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
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Za??tita podataka o li??nosti</li>
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
                                    <h5>Termini kori????eni u tekstu</h5>
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
                                    <h5>Podno??enje pritu??be nadzornom telu</h5>
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
                            <h6 class=\"font-light\">Korisnici, na koje se odnose li??ni podaci, mogu da stupe u kontakt sa ovla????enim licem za za??titu li??nih podataka u
                                vezi sa svim pitanjima povezanim sa obradom njihovih li??nih podataka i ostvarivanjem njihovih prava na osnovu va??e??ih propisa o za??titi li??nih podataka.
                                Za sva pitanja mo??ete kontaktirati, lice ovla????eno za za??titu podataka o li??nosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Termini kori????eni u tekstu:</h3>
                            <h6 class=\"font-light\"><strong>Li??ni podatak</strong> je svaki podatak koji se odnosi na fizi??ko lice ??iji je identitet odre??en ili odrediv, neposredno ili posredno, posebno na osnovu oznake identiteta (to uklju??uje na primer: ime, prezime, e-mail, telefonski broj i dr.).</h6>
                            <h6 class=\"font-light\"><strong>Rukovalac</strong> je lice koje odre??uje svrhu i na??in obrade Va??ih li??nih podataka. Rukovalac Va??ih li??nih podataka je prikolica.shop.</h6>
                            <h6 class=\"font-light\"><strong>Obra??iva??</strong> je pravno ili fizi??ko lice koje obra??uje li??ne podatke u ime rukovaoca. Obra??iva??i nam poma??u u pru??anju odre??enih usluga ili ispunjenju obaveza koje imamo.</h6>
                            <h6 class=\"font-light\"><strong>Obrada</strong> podrazumeva prikupljanje, ??uvanje, ??injenje dostupnim, brisanje i sve druge oblike kori????enja li??nih podataka.</h6>
                            <h6 class=\"font-light\">Ova za??tita podataka o li??nosti podrazumeva informacije o tome koje Va??e li??ne podatke prikupljamo i obra??ujemo, kako koristimo Va??e podatke odnosno u koje svrhe, kada podatke otkrivamo obra??iva??ima, koliko dugo ih ??uvamo, koja su Va??a prava u vezi sa obradom Va??ih li??nih podataka.</h6>

                                <h6 class=\"font-light\">Pitanje koje naj??e????e potro??a??i postavljaju je: ???Da li imam obavezu da Vam dam svoje li??ne podatke????

                                Obavezni ste da prikolica.shop date samo li??ne podatke koje obra??ujemo u svrhu ispunjavanja zakonskih obaveza ili uz Va??u saglasnost.

                                Me??utim, ??elimo da Vas upozorimo da ukoliko nam ne date Va??e li??ne podatke, prikolica.shop nec??e biti u moguc??nosti da Vam pru??i usluge (npr. ne mo??emo primiti niti obraditi porud??binu, ne mo??emo isporu??iti robu bez adrese...).

                                Ova za??tita podataka o li??nosti je namenjena korisnicima web stranice i kupcima, posetiocima iz na??e web prodavnice.

                                prikolica.shop ??e Va??e li??ne podatke obra??ivati isklju??ivo na osnovu zakonitih i unapred odre??enih svrha. Ako se u buduc??nosti pojavi potreba za daljom obradom li??nih podataka (u dodatne svrhe), prethodno c??emo Vas obavestiti ovom politikom. </h6>

                            <h6 class=\"font-light\">Va??e li??ne podatke obra??ujemo isklju??ivo na odgovarajuc??im pravnim osnovima, propisanim Zakonom o za??titi podataka o li??nosti Republike Srbije.

                                Va??e li??ne podatke obra??ujemo u svrhu statisti??kih analiza,kako bi pobolj??ali svoje usluge ili proizvode ili u svrhu re??avanja reklamacije.

                                U prikolica.shop ula??emo sve napore da obezbedimo sigurnost Va??ih li??nih podataka, zato koristimo tehni??ke i organizacione mere za za??titu Va??ih li??nih podataka od uni??tenja, brisanja, neovla??c??enog pristupa i bilo koje druge neovla??c??ene izmene. Li??ne podatke koje obra??ujemo nikada ne iznajmljujemo, ne prodajemo i ne dozvoljavamo njihovu obradu od bilo kog trec??eg lica osim na??ih obra??iva??a na osnovu ugovora, kako je definisano u ta??ki VI ove politike.

                                Li??ne podatke mogu obra??ivati samo ovla??c??ena lica kod nas ili na??i obra??iva??i na osnovu ugovora.

                                Pravila o za??titi li??nih podataka menjamo i dopunjavamo u skladu sa izmenama zakonodavstva u oblasti za??tite li??nih podataka.

                                U vezi sa obradom li??nih podataka, imate na raspolaganju prava definisana u nastavku. </h6>

                                <h6 class=\"font-light\">Sva prava mo??ete ostvariti slanjem pismenog zahteva na adresu: , ili putem e-maila na: .

                                Odgovoric??emo na Va?? zahtev u roku od 30 dana. Rok mo??e biti produ??en za jo?? 60 dana ako je to neophodno, uzimaju??i u obzir slo??enost i broj zahteva. O produ??enju roka i razlozima za to produ??enje bi??ete obave??teni u roku od 30 dana od dana prijema zahteva.

                                Da bi postupili po Va??em zahtevu, imamo pravo da proverimo Va?? identitet. U tu svrhu, mo??emo zahtevati od Vas dodatne li??ne podatke kako bi osigurali pouzdanu identifikaciju. Ako nam ne date dodatne informacije ili ne mo??emo da osiguramo pouzdanu identifikaciju, imamo pravo da odbacimo zahtev za ostvarivanje prava.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Imate pravo na:</h3>
                            <h6 class=\"font-light\">
                                <strong>Pristup Va??im li??nim podacima:</strong>
                                imate pravo da zahtevate informaciju o tome da li obra??ujemo Va??e li??ne podatke i informaciju o obradi (o svrsi obrade, vrsti podataka koji se obra??uju, pravnoj osnovi, periodu ??uvanja, primaocima li??nih podataka...). Ako obra??ujemo Va??e li??ne podatke, imate pravo na pristup i kopiju ovih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Ispravku i dopunu Va??ih li??nih podataka:</strong>
                                ako su Va??i podaci koje obra??ujemo neta??ni ili nepotpuni imate pravo da zatra??ite ispravku i dopunu li??nih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Opoziv Va??e saglasnosti:</strong>
                                saglasnost koju ste dali mo??ete opozvati u bilo kojem trenutku bez bilo kakvih negativnih posledica za Vas. U slu??aju da opozovete svoju saglasnost, nec??emo biti vi??e u moguc??nosti da Vam obezbedimo odre??ene usluge (na primer, ako opozovete svoju saglasnost za slanje e-vesti, nec??ete vi??e primati ove vesti).</h6>

                            <h6 class=\"font-light\">
                                <strong>Brisanje Va??ih li??nih podataka:</strong> imate pravo da zatra??ite brisanje li??nih podataka koje obra??ujemo o Vama u sledec??im slu??ajevima:
                                kada je ispunjena svrha radi koje su prikupljeni podaci,
                                kada opozovete saglasnost za obradu,
                                kada prigovarate obradi, a ne postoji drugi pravni osnov koji prete??e nad Va??im interesima, pravima i slobodama,
                                kada je obrada li??nih podataka nezakonita,
                                kada podatke moramo izbrisati u cilju izvr??enja na??ih zakonskih obaveza,
                                kada su podaci prikupljeni u vezi sa kori????enjem usluga informacionog dru??tva</h6>

                            <h6 class=\"font-light\">
                                <strong>Ograni??enje obrade Va??ih li??nih podataka:</strong> imate pravo tra??iti da privremeno ograni??imo obradu li??nih podataka u sledec??im slu??ajevima:
                                kada osporavate ta??nost Va??ih li??nih podataka, u roku koji nam omogu??ava proveru ta??nosti,
                                kada je obrada nezakonita, a Vi tra??ite ograni??enje obrade umesto brisanja,
                                kada je svrha obrade li??nih podataka ispunjena, a podaci su Vam potrebni, u cilju podno??enja, ostvarivanja ili odbrane Va??eg pravnog zahteva,
                                kada ste podneli prigovor na obradu, u toku procenjivanja da li pravni osnov za obradu prete??e nad Va??im interesima, pravima i slobodama.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prenosivost Va??ih li??nih podataka:</strong>
                                imate pravo tra??iti da primite Va??e li??ne podatke u strukturiranom, uobi??ajeno kori????enom i elektronski ??itljivom obliku. Tako??e imate pravo da ove podatke prenesete drugom rukovaocu. Pravo na prenosivost odnosi se na li??ne podatke ??ija obrada se vr??i automatizovano, a zasnovana je na Va??oj izri??itoj saglasnosti ili na osnovu ugovora.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prigovor na obradu Va??ih li??nih podataka:</strong>
                                imate pravo da prigovorite na obradu Va??ih li??nih podataka kada se obrada odvija na osnovu na??ih legitimnih interesa, uklju??ujuc??i i profilisanje na osnovu te obrade. U slu??aju prigovora obustavic??emo obradu, osim ako se ne poka??e da na?? legitimni interes za obradu prete??e nad Va??im interesima, pravima i slobodama. Kada se li??ni podaci obra??uju za potrebe direktnog ogla??avanja, uklju??uju??i i profilisanje, imate pravo u svakom trenutku prigovoriti na ovu obradu Va??ih li??nih podataka. U slu??aju prigovora, ne mo??emo dalje obra??ivati Va??e podatke za potrebe direktnog ogla??avanja.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Podno??enje pritu??be nadzornom telu:</h3>
                            <h6 class=\"font-light\">Nadzorno telo za za??titu podataka o li??nosti u Republici Srbiji je Poverenik za informacije od javnog zna??aja i za??titu podataka o li??nosti, Bulevar kralja Aleksandra 15, Beograd.

                                Imate pravo da podnesete pritu??bu Povereniku ako smatrate da je obrada podataka izvr??ena suprotno odredbama Zakona o za??titi podataka o li??nosti Republike Srbije. Pritu??ba se podnosi u pisanom obliku, neposredno ili elektronski na obrascu Pritu??ba (obrazac je dostupan na veb stranici Poverenika), po??tom na gornju adresu ili na email: prituzba@poverenik.rs.</h6>
                                <h6 class=\"font-light\">Va??e li??ne podatke ??uvamo toliko vremena koliko nam je potrebno da bismo ispunili svrhu njihove obrade. Nakon isteka pojedinih rokova ??uvanja, Va??e li??ne podatke bri??emo (uni??tavamo) ili ih anonimiziramo da identifikacija pojedinaca vi??e nije moguc??a.

                                Politika privatnosti se mo??e promeniti u bilo koje vreme.</h6>
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
    {{ 'Za??tita podataka o li??nosti - Prodaja autoprikolica, traktora.'|trans }} | prikolica.shop
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
                    <h3>Za??tita podataka o li??nosti</h3>
                    <nav>
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ path('pocetna') }}\">
                                    <i class=\"fas fa-home\"></i>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Za??tita podataka o li??nosti</li>
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
                                    <h5>Termini kori????eni u tekstu</h5>
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
                                    <h5>Podno??enje pritu??be nadzornom telu</h5>
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
                            <h6 class=\"font-light\">Korisnici, na koje se odnose li??ni podaci, mogu da stupe u kontakt sa ovla????enim licem za za??titu li??nih podataka u
                                vezi sa svim pitanjima povezanim sa obradom njihovih li??nih podataka i ostvarivanjem njihovih prava na osnovu va??e??ih propisa o za??titi li??nih podataka.
                                Za sva pitanja mo??ete kontaktirati, lice ovla????eno za za??titu podataka o li??nosti.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"2\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Termini kori????eni u tekstu:</h3>
                            <h6 class=\"font-light\"><strong>Li??ni podatak</strong> je svaki podatak koji se odnosi na fizi??ko lice ??iji je identitet odre??en ili odrediv, neposredno ili posredno, posebno na osnovu oznake identiteta (to uklju??uje na primer: ime, prezime, e-mail, telefonski broj i dr.).</h6>
                            <h6 class=\"font-light\"><strong>Rukovalac</strong> je lice koje odre??uje svrhu i na??in obrade Va??ih li??nih podataka. Rukovalac Va??ih li??nih podataka je prikolica.shop.</h6>
                            <h6 class=\"font-light\"><strong>Obra??iva??</strong> je pravno ili fizi??ko lice koje obra??uje li??ne podatke u ime rukovaoca. Obra??iva??i nam poma??u u pru??anju odre??enih usluga ili ispunjenju obaveza koje imamo.</h6>
                            <h6 class=\"font-light\"><strong>Obrada</strong> podrazumeva prikupljanje, ??uvanje, ??injenje dostupnim, brisanje i sve druge oblike kori????enja li??nih podataka.</h6>
                            <h6 class=\"font-light\">Ova za??tita podataka o li??nosti podrazumeva informacije o tome koje Va??e li??ne podatke prikupljamo i obra??ujemo, kako koristimo Va??e podatke odnosno u koje svrhe, kada podatke otkrivamo obra??iva??ima, koliko dugo ih ??uvamo, koja su Va??a prava u vezi sa obradom Va??ih li??nih podataka.</h6>

                                <h6 class=\"font-light\">Pitanje koje naj??e????e potro??a??i postavljaju je: ???Da li imam obavezu da Vam dam svoje li??ne podatke????

                                Obavezni ste da prikolica.shop date samo li??ne podatke koje obra??ujemo u svrhu ispunjavanja zakonskih obaveza ili uz Va??u saglasnost.

                                Me??utim, ??elimo da Vas upozorimo da ukoliko nam ne date Va??e li??ne podatke, prikolica.shop nec??e biti u moguc??nosti da Vam pru??i usluge (npr. ne mo??emo primiti niti obraditi porud??binu, ne mo??emo isporu??iti robu bez adrese...).

                                Ova za??tita podataka o li??nosti je namenjena korisnicima web stranice i kupcima, posetiocima iz na??e web prodavnice.

                                prikolica.shop ??e Va??e li??ne podatke obra??ivati isklju??ivo na osnovu zakonitih i unapred odre??enih svrha. Ako se u buduc??nosti pojavi potreba za daljom obradom li??nih podataka (u dodatne svrhe), prethodno c??emo Vas obavestiti ovom politikom. </h6>

                            <h6 class=\"font-light\">Va??e li??ne podatke obra??ujemo isklju??ivo na odgovarajuc??im pravnim osnovima, propisanim Zakonom o za??titi podataka o li??nosti Republike Srbije.

                                Va??e li??ne podatke obra??ujemo u svrhu statisti??kih analiza,kako bi pobolj??ali svoje usluge ili proizvode ili u svrhu re??avanja reklamacije.

                                U prikolica.shop ula??emo sve napore da obezbedimo sigurnost Va??ih li??nih podataka, zato koristimo tehni??ke i organizacione mere za za??titu Va??ih li??nih podataka od uni??tenja, brisanja, neovla??c??enog pristupa i bilo koje druge neovla??c??ene izmene. Li??ne podatke koje obra??ujemo nikada ne iznajmljujemo, ne prodajemo i ne dozvoljavamo njihovu obradu od bilo kog trec??eg lica osim na??ih obra??iva??a na osnovu ugovora, kako je definisano u ta??ki VI ove politike.

                                Li??ne podatke mogu obra??ivati samo ovla??c??ena lica kod nas ili na??i obra??iva??i na osnovu ugovora.

                                Pravila o za??titi li??nih podataka menjamo i dopunjavamo u skladu sa izmenama zakonodavstva u oblasti za??tite li??nih podataka.

                                U vezi sa obradom li??nih podataka, imate na raspolaganju prava definisana u nastavku. </h6>

                                <h6 class=\"font-light\">Sva prava mo??ete ostvariti slanjem pismenog zahteva na adresu: , ili putem e-maila na: .

                                Odgovoric??emo na Va?? zahtev u roku od 30 dana. Rok mo??e biti produ??en za jo?? 60 dana ako je to neophodno, uzimaju??i u obzir slo??enost i broj zahteva. O produ??enju roka i razlozima za to produ??enje bi??ete obave??teni u roku od 30 dana od dana prijema zahteva.

                                Da bi postupili po Va??em zahtevu, imamo pravo da proverimo Va?? identitet. U tu svrhu, mo??emo zahtevati od Vas dodatne li??ne podatke kako bi osigurali pouzdanu identifikaciju. Ako nam ne date dodatne informacije ili ne mo??emo da osiguramo pouzdanu identifikaciju, imamo pravo da odbacimo zahtev za ostvarivanje prava.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"3\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Imate pravo na:</h3>
                            <h6 class=\"font-light\">
                                <strong>Pristup Va??im li??nim podacima:</strong>
                                imate pravo da zahtevate informaciju o tome da li obra??ujemo Va??e li??ne podatke i informaciju o obradi (o svrsi obrade, vrsti podataka koji se obra??uju, pravnoj osnovi, periodu ??uvanja, primaocima li??nih podataka...). Ako obra??ujemo Va??e li??ne podatke, imate pravo na pristup i kopiju ovih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Ispravku i dopunu Va??ih li??nih podataka:</strong>
                                ako su Va??i podaci koje obra??ujemo neta??ni ili nepotpuni imate pravo da zatra??ite ispravku i dopunu li??nih podataka.</h6>

                            <h6 class=\"font-light\">
                                <strong>Opoziv Va??e saglasnosti:</strong>
                                saglasnost koju ste dali mo??ete opozvati u bilo kojem trenutku bez bilo kakvih negativnih posledica za Vas. U slu??aju da opozovete svoju saglasnost, nec??emo biti vi??e u moguc??nosti da Vam obezbedimo odre??ene usluge (na primer, ako opozovete svoju saglasnost za slanje e-vesti, nec??ete vi??e primati ove vesti).</h6>

                            <h6 class=\"font-light\">
                                <strong>Brisanje Va??ih li??nih podataka:</strong> imate pravo da zatra??ite brisanje li??nih podataka koje obra??ujemo o Vama u sledec??im slu??ajevima:
                                kada je ispunjena svrha radi koje su prikupljeni podaci,
                                kada opozovete saglasnost za obradu,
                                kada prigovarate obradi, a ne postoji drugi pravni osnov koji prete??e nad Va??im interesima, pravima i slobodama,
                                kada je obrada li??nih podataka nezakonita,
                                kada podatke moramo izbrisati u cilju izvr??enja na??ih zakonskih obaveza,
                                kada su podaci prikupljeni u vezi sa kori????enjem usluga informacionog dru??tva</h6>

                            <h6 class=\"font-light\">
                                <strong>Ograni??enje obrade Va??ih li??nih podataka:</strong> imate pravo tra??iti da privremeno ograni??imo obradu li??nih podataka u sledec??im slu??ajevima:
                                kada osporavate ta??nost Va??ih li??nih podataka, u roku koji nam omogu??ava proveru ta??nosti,
                                kada je obrada nezakonita, a Vi tra??ite ograni??enje obrade umesto brisanja,
                                kada je svrha obrade li??nih podataka ispunjena, a podaci su Vam potrebni, u cilju podno??enja, ostvarivanja ili odbrane Va??eg pravnog zahteva,
                                kada ste podneli prigovor na obradu, u toku procenjivanja da li pravni osnov za obradu prete??e nad Va??im interesima, pravima i slobodama.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prenosivost Va??ih li??nih podataka:</strong>
                                imate pravo tra??iti da primite Va??e li??ne podatke u strukturiranom, uobi??ajeno kori????enom i elektronski ??itljivom obliku. Tako??e imate pravo da ove podatke prenesete drugom rukovaocu. Pravo na prenosivost odnosi se na li??ne podatke ??ija obrada se vr??i automatizovano, a zasnovana je na Va??oj izri??itoj saglasnosti ili na osnovu ugovora.</h6>

                            <h6 class=\"font-light\">
                                <strong>Prigovor na obradu Va??ih li??nih podataka:</strong>
                                imate pravo da prigovorite na obradu Va??ih li??nih podataka kada se obrada odvija na osnovu na??ih legitimnih interesa, uklju??ujuc??i i profilisanje na osnovu te obrade. U slu??aju prigovora obustavic??emo obradu, osim ako se ne poka??e da na?? legitimni interes za obradu prete??e nad Va??im interesima, pravima i slobodama. Kada se li??ni podaci obra??uju za potrebe direktnog ogla??avanja, uklju??uju??i i profilisanje, imate pravo u svakom trenutku prigovoriti na ovu obradu Va??ih li??nih podataka. U slu??aju prigovora, ne mo??emo dalje obra??ivati Va??e podatke za potrebe direktnog ogla??avanja.</h6>
                        </div>
                    </div>

                    <div class=\"faq-heading\" id=\"4\">
                        <i data-feather=\"help-circle\" class=\"theme-color\"></i>
                        <div class=\"faq-option\">
                            <h3>Podno??enje pritu??be nadzornom telu:</h3>
                            <h6 class=\"font-light\">Nadzorno telo za za??titu podataka o li??nosti u Republici Srbiji je Poverenik za informacije od javnog zna??aja i za??titu podataka o li??nosti, Bulevar kralja Aleksandra 15, Beograd.

                                Imate pravo da podnesete pritu??bu Povereniku ako smatrate da je obrada podataka izvr??ena suprotno odredbama Zakona o za??titi podataka o li??nosti Republike Srbije. Pritu??ba se podnosi u pisanom obliku, neposredno ili elektronski na obrascu Pritu??ba (obrazac je dostupan na veb stranici Poverenika), po??tom na gornju adresu ili na email: prituzba@poverenik.rs.</h6>
                                <h6 class=\"font-light\">Va??e li??ne podatke ??uvamo toliko vremena koliko nam je potrebno da bismo ispunili svrhu njihove obrade. Nakon isteka pojedinih rokova ??uvanja, Va??e li??ne podatke bri??emo (uni??tavamo) ili ih anonimiziramo da identifikacija pojedinaca vi??e nije moguc??a.

                                Politika privatnosti se mo??e promeniti u bilo koje vreme.</h6>
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
