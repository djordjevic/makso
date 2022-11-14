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

/* include/service.html.twig */
class __TwigTemplate_ceb14a74b1632a9249a299c83d2f267e97f611f61d7addc48bcd43bbfa9bc940 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/service.html.twig"));

        // line 1
        echo "<section class=\"service-section\">
    <div class=\"container\">
        <div class=\"row g-4 g-sm-3\">
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#customer\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Servis</h3>
                        <span class=\"font-light\">Obezbeđeni rezervni delovi</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#shop\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Dostava</h3>
                        <span class=\"font-light\">Besplatna dostava na kućnu adresu</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#secure-payment\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Plaćanje</h3>
                        <span class=\"font-light\">Plaćanje čekovima građana do 6 rata</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#return\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Free Returns</h3>
                        <span class=\"font-light\">30-days free return policy.</span>
                    </div>
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
        return "include/service.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"service-section\">
    <div class=\"container\">
        <div class=\"row g-4 g-sm-3\">
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#customer\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Servis</h3>
                        <span class=\"font-light\">Obezbeđeni rezervni delovi</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#shop\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Dostava</h3>
                        <span class=\"font-light\">Besplatna dostava na kućnu adresu</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#secure-payment\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Plaćanje</h3>
                        <span class=\"font-light\">Plaćanje čekovima građana do 6 rata</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6\">
                <div class=\"service-wrap\">
                    <div class=\"service-icon\">
                        <svg>
                            <use xlink:href=\"assets/svg/icons.svg#return\"></use>
                        </svg>
                    </div>
                    <div class=\"service-content\">
                        <h3 class=\"mb-2\">Free Returns</h3>
                        <span class=\"font-light\">30-days free return policy.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "include/service.html.twig", "/home/prikolic/public_html/prikolica/templates/include/service.html.twig");
    }
}
