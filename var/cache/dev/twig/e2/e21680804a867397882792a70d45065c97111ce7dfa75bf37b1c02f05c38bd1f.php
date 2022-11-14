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

/* base.html.twig */
class __TwigTemplate_8c93c9064e96ffaf1314b87ae072b61d685c2b4b92699aa0840efa777cc0e899 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metatags' => [$this, 'block_metatags'],
            'customstylesheet' => [$this, 'block_customstylesheet'],
            'content' => [$this, 'block_content'],
            'includejavascript' => [$this, 'block_includejavascript'],
            'footerjavascript' => [$this, 'block_footerjavascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <link rel=\"manifest\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./manifest.json"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon/4.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon/4.png"), "html", null, true);
        echo "\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('metatags', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('customstylesheet', $context, $blocks);
        // line 66
        echo "
</head>

<body class=\"theme-color1 light ltr\">
";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('includejavascript', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('footerjavascript', $context, $blocks);
        // line 123
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatags"));

        // line 10
        echo "        ";
        // line 11
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
        <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
        <meta name=\"author\" content=\"barba\">
        <meta name=\"copyright\" content=\"© prikolica.shop\" />
        <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_customstylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customstylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customstylesheet"));

        // line 22
        echo "        <!-- Google font-->
        <link
                href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap\"
                rel=\"stylesheet\">

        <!-- Linear Icon css -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/linearicon.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/css_dataTables.bootstrap5.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/twitter-bootstrap_5.1.3_css_bootstrap.css"), "html", null, true);
        echo "\">

        <!-- fontawesome css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/font-awesome.css"), "html", null, true);
        echo "\">

        <!-- Themify icon css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/themify.css"), "html", null, true);
        echo "\">

        <!-- ratio css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/ratio.css"), "html", null, true);
        echo "\">

        <!-- Feather icon css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/feather-icon.css"), "html", null, true);
        echo "\">

        <!-- Plugins css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/scrollbar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/animate.css"), "html", null, true);
        echo "\">

        <!-- Bootstrap css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vendors/bootstrap.css"), "html", null, true);
        echo "\">

        <!-- vector map css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/vector-map.css"), "html", null, true);
        echo "\">

        <!-- slick slider css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/slick-theme.css"), "html", null, true);
        echo "\">

        <!-- App css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/style.css"), "html", null, true);
        echo "\">

        <!-- Responsive css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/css/responsive.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_includejavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "includejavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "includejavascript"));

        // line 74
        echo "    <!-- latest js -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/datatables.net_1.12.1_js_dataTables.bootstrap5.js"), "html", null, true);
        echo "\"></script>


    <!-- Bootstrap js -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- feather icon js -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/icons/feather-icon/feather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/icons/feather-icon/feather-icon.js"), "html", null, true);
        echo "\"></script>
    <!-- scrollbar simplebar js -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/scrollbar/simplebar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/scrollbar/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- Sidebar jquery -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/config.js"), "html", null, true);
        echo "\"></script>
    <!-- tooltip init js -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/tooltip-init.js"), "html", null, true);
        echo "\"></script>
    <!-- Plugins JS -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/notify/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 96
        echo "
    <!-- Apexchar js -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/chart/apex-chart/apex-chart1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/chart/apex-chart/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/chart/apex-chart/apex-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/chart/apex-chart/stock-prices.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/chart/apex-chart/chart-custom1.js"), "html", null, true);
        echo "\"></script>

    <!-- customizer js -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/customizer.js"), "html", null, true);
        echo "\"></script>

    <!-- ratio js -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/ratio.js"), "html", null, true);
        echo "\"></script>

    <!-- Theme js -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_assets/js/script.js"), "html", null, true);
        echo "\"></script>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_footerjavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerjavascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 121,  392 => 111,  386 => 108,  380 => 105,  374 => 102,  370 => 101,  366 => 100,  362 => 99,  358 => 98,  354 => 96,  350 => 94,  346 => 93,  341 => 91,  336 => 89,  331 => 87,  327 => 86,  322 => 84,  318 => 83,  313 => 81,  306 => 77,  301 => 75,  298 => 74,  288 => 73,  270 => 70,  257 => 63,  251 => 60,  245 => 57,  241 => 56,  235 => 53,  229 => 50,  223 => 47,  219 => 46,  213 => 43,  207 => 40,  201 => 37,  195 => 34,  189 => 31,  185 => 30,  180 => 28,  172 => 22,  162 => 21,  150 => 19,  146 => 18,  137 => 11,  135 => 10,  125 => 9,  107 => 8,  94 => 123,  92 => 121,  89 => 120,  87 => 73,  84 => 72,  82 => 70,  76 => 66,  73 => 21,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <link rel=\"manifest\" href=\"{{ asset('./manifest.json') }}\">
    <link rel=\"icon\" href=\"{{ asset('assets/images/favicon/4.png') }}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('assets/images/favicon/4.png') }}\">
    <title>{% block title %}{% endblock title %}</title>
    {% block metatags %}
        {#        <meta name=\"google-site-verification\" content=\"\" />#}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Distribucija i prodaja autoprikolica i traktora.\">
        <meta name=\"keywords\" content=\"autoprikolice, prikolice, traktori, prodaja, cena, trigano, arilje\">
        <meta name=\"author\" content=\"barba\">
        <meta name=\"copyright\" content=\"© prikolica.shop\" />
        <link rel=\"icon\" href=\"{{ asset('admin_assets/images/favicon.png') }}\" type=\"image/x-icon\">
        <link rel=\"shortcut icon\" href=\"{{ asset('admin_assets/images/favicon.png') }}\" type=\"image/x-icon\">
    {% endblock metatags %}
    {% block customstylesheet %}
        <!-- Google font-->
        <link
                href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap\"
                rel=\"stylesheet\">

        <!-- Linear Icon css -->
        <link rel=\"stylesheet\" href=\"{{ asset('admin_assets/css/linearicon.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/css_dataTables.bootstrap5.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/twitter-bootstrap_5.1.3_css_bootstrap.css') }}\">

        <!-- fontawesome css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/font-awesome.css') }}\">

        <!-- Themify icon css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/themify.css') }}\">

        <!-- ratio css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/ratio.css') }}\">

        <!-- Feather icon css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/feather-icon.css') }}\">

        <!-- Plugins css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/scrollbar.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/animate.css') }}\">

        <!-- Bootstrap css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vendors/bootstrap.css') }}\">

        <!-- vector map css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/vector-map.css') }}\">

        <!-- slick slider css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/slick.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/slick-theme.css') }}\">

        <!-- App css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/style.css') }}\">

        <!-- Responsive css-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('admin_assets/css/responsive.css') }}\">

    {% endblock customstylesheet %}

</head>

<body class=\"theme-color1 light ltr\">
{% block content %}
{% endblock content %}

{% block includejavascript %}
    <!-- latest js -->
    <script src=\"{{ asset('admin_assets/js/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"{{ asset('assets/js/datatables.net_1.12.1_js_dataTables.bootstrap5.js') }}\"></script>


    <!-- Bootstrap js -->
    <script src=\"{{ asset('admin_assets/js/bootstrap/bootstrap.bundle.min.js') }}\"></script>
    <!-- feather icon js -->
    <script src=\"{{ asset('admin_assets/js/icons/feather-icon/feather.min.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/icons/feather-icon/feather-icon.js') }}\"></script>
    <!-- scrollbar simplebar js -->
    <script src=\"{{ asset('admin_assets/js/scrollbar/simplebar.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/scrollbar/custom.js') }}\"></script>
    <!-- Sidebar jquery -->
    <script src=\"{{ asset('admin_assets/js/config.js') }}\"></script>
    <!-- tooltip init js -->
    <script src=\"{{ asset('admin_assets/js/tooltip-init.js') }}\"></script>
    <!-- Plugins JS -->
    <script src=\"{{ asset('admin_assets/js/sidebar-menu.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/notify/bootstrap-notify.min.js') }}\"></script>
{#    <script src=\"{{ asset('admin_assets/js/notify/index.js') }}\"></script>#}

    <!-- Apexchar js -->
    <script src=\"{{ asset('admin_assets/js/chart/apex-chart/apex-chart1.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/chart/apex-chart/moment.min.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/chart/apex-chart/apex-chart.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/chart/apex-chart/stock-prices.js') }}\"></script>
    <script src=\"{{ asset('admin_assets/js/chart/apex-chart/chart-custom1.js') }}\"></script>

    <!-- customizer js -->
    <script src=\"{{ asset('admin_assets/js/customizer.js') }}\"></script>

    <!-- ratio js -->
    <script src=\"{{ asset('admin_assets/js/ratio.js') }}\"></script>

    <!-- Theme js -->
    <script src=\"{{ asset('admin_assets/js/script.js') }}\"></script>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
{% endblock includejavascript %}

{% block footerjavascript %}
{% endblock footerjavascript %}

</body>

</html>", "base.html.twig", "/home/prikolic/public_html/prikolica/templates/base.html.twig");
    }
}
