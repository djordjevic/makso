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

/* include/banner1.html.twig */
class __TwigTemplate_326d46cf5098b7eacec81c1e8a1658c9bd226aca6726a70daa2960d8c59fcaf4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/banner1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/banner1.html.twig"));

        // line 1
        echo "<section class=\"ratio2_1\">
    <div class=\"container\">
        <div class=\"row gy-3\">
            <div class=\"col-xl-5 col-lg-4 col-md-6 custom-col\">
                <div class=\"collection-banner p-center text-center\">
                    <a href=\"shop-left-sidebar.html\" class=\"banner-img\">
                        <img src=\"assets/images/electronics/banner/1.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    </a>
                    <a href=\"shop-left-sidebar.html\" class=\"contain-banner\">
                        <div class=\"banner-content with-bg\">
                            <h2 class=\"mb-2 mins-spacing\">Headphone</h2>
                            <span class=\"s-spacing\">BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-4 order-lg-0 order-md-1 order-0\">
                <div class=\"collection-banner text-center collection-center\">
                    <h6 class=\"theme-color mb-2\">Get Rewarded</h6>
                    <h2>Earn 10% </h2>
                    <h2>Back Reward</h2>
                    <p class=\"mt-2\">Valid online & in-store with select styles.</p>
                    <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                            class=\"btn btn-solid-default\">Learn more</button>
                </div>
            </div>

            <div class=\"col-xl-5 col-lg-4 col-md-6 custom-col\">
                <div class=\"collection-banner p-center text-center\">
                    <a href=\"shop-left-sidebar.html\" class=\"banner-img\">
                        <img src=\"assets/images/electronics/banner/2.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    </a>
                    <a href=\"shop-left-sidebar.html\" class=\"contain-banner\">
                        <div class=\"banner-content with-bg\">
                            <h2 class=\"mb-2 mins-spacing\">Headphone</h2>
                            <span class=\"s-spacing\">BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/banner1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ratio2_1\">
    <div class=\"container\">
        <div class=\"row gy-3\">
            <div class=\"col-xl-5 col-lg-4 col-md-6 custom-col\">
                <div class=\"collection-banner p-center text-center\">
                    <a href=\"shop-left-sidebar.html\" class=\"banner-img\">
                        <img src=\"assets/images/electronics/banner/1.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    </a>
                    <a href=\"shop-left-sidebar.html\" class=\"contain-banner\">
                        <div class=\"banner-content with-bg\">
                            <h2 class=\"mb-2 mins-spacing\">Headphone</h2>
                            <span class=\"s-spacing\">BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-4 order-lg-0 order-md-1 order-0\">
                <div class=\"collection-banner text-center collection-center\">
                    <h6 class=\"theme-color mb-2\">Get Rewarded</h6>
                    <h2>Earn 10% </h2>
                    <h2>Back Reward</h2>
                    <p class=\"mt-2\">Valid online & in-store with select styles.</p>
                    <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                            class=\"btn btn-solid-default\">Learn more</button>
                </div>
            </div>

            <div class=\"col-xl-5 col-lg-4 col-md-6 custom-col\">
                <div class=\"collection-banner p-center text-center\">
                    <a href=\"shop-left-sidebar.html\" class=\"banner-img\">
                        <img src=\"assets/images/electronics/banner/2.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    </a>
                    <a href=\"shop-left-sidebar.html\" class=\"contain-banner\">
                        <div class=\"banner-content with-bg\">
                            <h2 class=\"mb-2 mins-spacing\">Headphone</h2>
                            <span class=\"s-spacing\">BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>", "include/banner1.html.twig", "/home/prikolic/public_html/prikolica/templates/include/banner1.html.twig");
    }
}
