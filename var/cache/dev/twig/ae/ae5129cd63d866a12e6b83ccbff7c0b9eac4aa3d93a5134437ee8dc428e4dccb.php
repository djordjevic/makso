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

/* include/banner2.html.twig */
class __TwigTemplate_ec1f241aeacc64d300673b521d1ac9637e55619fca3ea0e0b59d815a3298365b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/banner2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/banner2.html.twig"));

        // line 1
        echo "<section class=\"ratio2_1\">
    <div class=\"container\">
        <div class=\"row gy-3\">
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"timer-banner text-center\">
                    <img src=\"assets/images/electronics/banner/3.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"coupon-code theme-color\">
                        DGR548548
                    </div>
                    <div class=\"discount-offer\">
                        <h5>New Festival Offer
                            <span class=\"theme-color\">70% OFF <a href=\"wishlist.html\" class=\"wishlist-icon mt-2\"><i
                                            class=\"fas fa-heart\"></i></a></span>
                        </h5>
                    </div>
                    <div>
                        <div class=\"timer\">
                            <ul>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"days1\"></h2>Days
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"hours1\"></h2>Hour
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"minutes1\"></h2>Min
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"seconds1\"></h2>Sec
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"banner-btn-grup\">
                        <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                                class=\"btn btn-solid-default\">Shop Now</button>
                    </div>
                    <div class=\"social-media\">
                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/1.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Facebook</h6>
                        </div>

                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/2.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Instagram</h6>
                        </div>

                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/3.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Twitter</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-4 small-banner\">
                <div class=\"collection-banner text-center collection-center\">
                    <img src=\"assets/images/electronics/banner/4.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"collection-contain\">
                        <h6 class=\"theme-color mb-2\">New Headphone</h6>
                        <h2>50% Cash </h2>
                        <h2>Back Reward</h2>
                        <p class=\"mt-2 mb-0 font-light\">Limited offer </p>
                        <p class=\"font-light mb-0\"> Buy now!!</p>
                        <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                                class=\"btn btn-solid-default mt-lg-4 mt-2\">Shop now</button>
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
        return "include/banner2.html.twig";
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
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"timer-banner text-center\">
                    <img src=\"assets/images/electronics/banner/3.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"coupon-code theme-color\">
                        DGR548548
                    </div>
                    <div class=\"discount-offer\">
                        <h5>New Festival Offer
                            <span class=\"theme-color\">70% OFF <a href=\"wishlist.html\" class=\"wishlist-icon mt-2\"><i
                                            class=\"fas fa-heart\"></i></a></span>
                        </h5>
                    </div>
                    <div>
                        <div class=\"timer\">
                            <ul>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"days1\"></h2>Days
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"hours1\"></h2>Hour
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"minutes1\"></h2>Min
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"counter\">
                                        <div>
                                            <h2 id=\"seconds1\"></h2>Sec
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"banner-btn-grup\">
                        <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                                class=\"btn btn-solid-default\">Shop Now</button>
                    </div>
                    <div class=\"social-media\">
                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/1.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Facebook</h6>
                        </div>

                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/2.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Instagram</h6>
                        </div>

                        <div class=\"social-icon\">
                            <img src=\"assets/images/social-icon/3.png\" class=\"img-fluid blur-up lazyload\" alt=\"\">
                            <h6>Twitter</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-4 small-banner\">
                <div class=\"collection-banner text-center collection-center\">
                    <img src=\"assets/images/electronics/banner/4.jpg\" class=\"bg-img blur-up lazyload\" alt=\"\">
                    <div class=\"collection-contain\">
                        <h6 class=\"theme-color mb-2\">New Headphone</h6>
                        <h2>50% Cash </h2>
                        <h2>Back Reward</h2>
                        <p class=\"mt-2 mb-0 font-light\">Limited offer </p>
                        <p class=\"font-light mb-0\"> Buy now!!</p>
                        <button onclick=\"location.href = 'shop-left-sidebar.html';\" type=\"button\"
                                class=\"btn btn-solid-default mt-lg-4 mt-2\">Shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "include/banner2.html.twig", "/home/prikolic/public_html/prikolica/templates/include/banner2.html.twig");
    }
}
