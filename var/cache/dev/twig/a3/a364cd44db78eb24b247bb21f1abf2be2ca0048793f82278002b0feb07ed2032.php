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

/* layout.html.twig */
class __TwigTemplate_12ad3ede7c33d2df61a65fc2669219f7f9ebdda534036ac62fe013eb08be75f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 41
        echo "
</head>

<body class=\"theme-color1 light ltr\">
";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('includejavascript', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('footerjavascript', $context, $blocks);
        // line 114
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

        // line 11
        echo "        <meta name=\"theme-color\" content=\"#0163d2\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Voxo\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon/4.png"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
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
        echo "        <!-- google font -->
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
        <!-- bootstrap css -->
        <link id=\"rtl-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/bootstrap.css"), "html", null, true);
        echo "\">
        <!-- font-awesome css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/font-awesome.css"), "html", null, true);
        echo "\">
        <!-- feather icon css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/feather-icon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/ion.rangeSlider.min.css"), "html", null, true);
        echo "\" />
        <!-- animation css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/animate.css"), "html", null, true);
        echo "\">
        <!-- slick css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/slick/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors/slick/slick-theme.css"), "html", null, true);
        echo "\">
        <!-- Theme css -->
        <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo2.css"), "html", null, true);
        echo "\">
        <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo1.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
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

    // line 48
    public function block_includejavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "includejavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "includejavascript"));

        // line 49
        echo "    <!-- latest jquery-->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap js-->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- feather icon js-->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/feather/feather.min.js"), "html", null, true);
        echo "\"></script>
    <!-- lazyload js-->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Add To Home js -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pwa.js"), "html", null, true);
        echo "\"></script>
    <!-- Slick js-->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/slick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/slick-animation.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick/custom_slick.js"), "html", null, true);
        echo "\"></script>
    <!-- Timer js -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/timer1.js"), "html", null, true);
        echo "\"></script>
    <!-- newsletter js -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/newsletter.js"), "html", null, true);
        echo "\"></script>
    <!-- Notify js-->
";
        // line 70
        echo "    <!-- script js -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-setting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/home-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filter.js"), "html", null, true);
        echo "\"></script>
    <!-- sticky cart bottom js-->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sticky-cart-bottom.js"), "html", null, true);
        echo "\"></script>

    <!-- sticky cart bottom js-->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/check-box-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Zoom Js -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.elevatezoom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/zoom-filter.js"), "html", null, true);
        echo "\"></script>

    <!--Plugin JavaScript file-->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Filter Hide and show Js -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filter.js"), "html", null, true);
        echo "\"></script>

    <!-- add to cart modal resize -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cart_modal_resize.js"), "html", null, true);
        echo "\"></script>
    <script>
        function myFunction() {
            document.getElementById(\"search\").submit();
        }
    </script>
    <script>
        function myFunction1() {
            document.getElementById(\"basket\").submit();
        }
    </script>
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

    // line 112
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
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 112,  357 => 92,  351 => 89,  345 => 86,  339 => 83,  335 => 82,  329 => 79,  323 => 76,  318 => 74,  314 => 73,  310 => 72,  306 => 71,  303 => 70,  298 => 67,  293 => 65,  288 => 63,  284 => 62,  280 => 61,  275 => 59,  270 => 57,  265 => 55,  260 => 53,  254 => 50,  251 => 49,  241 => 48,  223 => 45,  211 => 39,  207 => 38,  202 => 36,  198 => 35,  193 => 33,  188 => 31,  184 => 30,  179 => 28,  174 => 26,  168 => 22,  158 => 21,  142 => 15,  136 => 11,  126 => 9,  108 => 8,  94 => 114,  92 => 112,  89 => 111,  87 => 48,  84 => 47,  82 => 45,  76 => 41,  73 => 21,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  49 => 1,);
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
        <meta name=\"theme-color\" content=\"#0163d2\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Voxo\">
        <meta name=\"msapplication-TileImage\" content=\"{{ asset('assets/images/favicon/4.png') }}\">
        <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% endblock metatags %}
    {% block customstylesheet %}
        <!-- google font -->
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
        <!-- bootstrap css -->
        <link id=\"rtl-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/bootstrap.css') }}\">
        <!-- font-awesome css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/font-awesome.css') }}\">
        <!-- feather icon css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/feather-icon.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}\" />
        <!-- animation css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/animate.css') }}\">
        <!-- slick css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/slick/slick.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors/slick/slick-theme.css') }}\">
        <!-- Theme css -->
        <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/demo2.css') }}\">
        <link id=\"color-link\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/demo1.css') }}\">
    {% endblock customstylesheet %}

</head>

<body class=\"theme-color1 light ltr\">
{% block content %}
{% endblock content %}

{% block includejavascript %}
    <!-- latest jquery-->
    <script src=\"{{ asset('assets/js/jquery-3.5.1.min.js') }}\"></script>

    <!-- Bootstrap js-->
    <script src=\"{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}\"></script>
    <!-- feather icon js-->
    <script src=\"{{ asset('assets/js/feather/feather.min.js') }}\"></script>
    <!-- lazyload js-->
    <script src=\"{{ asset('assets/js/lazysizes.min.js') }}\"></script>
    <!-- Add To Home js -->
    <script src=\"{{ asset('assets/js/pwa.js') }}\"></script>
    <!-- Slick js-->
    <script src=\"{{ asset('assets/js/slick/slick.js') }}\"></script>
    <script src=\"{{ asset('assets/js/slick/slick-animation.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/slick/custom_slick.js') }}\"></script>
    <!-- Timer js -->
    <script src=\"{{ asset('assets/js/timer1.js') }}\"></script>
    <!-- newsletter js -->
    <script src=\"{{ asset('assets/js/newsletter.js') }}\"></script>
    <!-- Notify js-->
{#    <script src=\"{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}\"></script>#}
    <!-- script js -->
    <script src=\"{{ asset('assets/js/theme-setting.js') }}\"></script>
    <script src=\"{{ asset('assets/js/script.js') }}\"></script>
    <script src=\"{{ asset('assets/js/home-script.js') }}\"></script>
    <script src=\"{{ asset('assets/js/filter.js') }}\"></script>
    <!-- sticky cart bottom js-->
    <script src=\"{{ asset('assets/js/sticky-cart-bottom.js') }}\"></script>

    <!-- sticky cart bottom js-->
    <script src=\"{{ asset('assets/js/check-box-select.js') }}\"></script>

    <!-- Zoom Js -->
    <script src=\"{{ asset('assets/js/jquery.elevatezoom.js') }}\"></script>
    <script src=\"{{ asset('assets/js/zoom-filter.js') }}\"></script>

    <!--Plugin JavaScript file-->
    <script src=\"{{ asset('assets/js/ion.rangeSlider.min.js') }}\"></script>

    <!-- Filter Hide and show Js -->
    <script src=\"{{ asset('assets/js/filter.js') }}\"></script>

    <!-- add to cart modal resize -->
    <script src=\"{{ asset('assets/js/cart_modal_resize.js') }}\"></script>
    <script>
        function myFunction() {
            document.getElementById(\"search\").submit();
        }
    </script>
    <script>
        function myFunction1() {
            document.getElementById(\"basket\").submit();
        }
    </script>
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

</html>", "layout.html.twig", "/home/prikolic/public_html/prikolica/templates/layout.html.twig");
    }
}
