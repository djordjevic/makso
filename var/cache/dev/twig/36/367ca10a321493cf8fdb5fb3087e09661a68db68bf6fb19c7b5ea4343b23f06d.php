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

/* include/top_banner.html.twig */
class __TwigTemplate_a37801a6fb90f86352be232d35bc78ee420fb4d288e23548fdd3f9ccdde4778e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/top_banner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/top_banner.html.twig"));

        // line 1
        echo "<section class=\"tab-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"title text-center\">
                    <h5>Special Offer</h5>
                    <h2>Hurry up!</h2>
                </div>
                <div class=\"tab-wrap\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"camera-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Camera\"
                                    type=\"button\" role=\"tab\">Camera</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"audio-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Audio\"
                                    type=\"button\" role=\"tab\">Audio</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"navigation-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Navigation\" type=\"button\" role=\"tab\">Gps & Navigation</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"other-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Others\" type=\"button\" role=\"tab\">Others</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"phones-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Phones\"
                                    type=\"button\" role=\"tab\">Cell Phones</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"computer-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Computer\" type=\"button\" role=\"tab\">Computer</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"accesories-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Accesories\" type=\"button\" role=\"tab\">Accesories</button>
                        </li>
                    </ul>
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade\" id=\"Camera\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Audio\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Navigation\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade show active\" id=\"Others\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Phones\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Computer\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Accesories\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "include/top_banner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"tab-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"title text-center\">
                    <h5>Special Offer</h5>
                    <h2>Hurry up!</h2>
                </div>
                <div class=\"tab-wrap\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"camera-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Camera\"
                                    type=\"button\" role=\"tab\">Camera</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"audio-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Audio\"
                                    type=\"button\" role=\"tab\">Audio</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"navigation-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Navigation\" type=\"button\" role=\"tab\">Gps & Navigation</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"other-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Others\" type=\"button\" role=\"tab\">Others</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"phones-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Phones\"
                                    type=\"button\" role=\"tab\">Cell Phones</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"computer-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Computer\" type=\"button\" role=\"tab\">Computer</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"accesories-tab\" data-bs-toggle=\"tab\"
                                    data-bs-target=\"#Accesories\" type=\"button\" role=\"tab\">Accesories</button>
                        </li>
                    </ul>
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade\" id=\"Camera\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Audio\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Navigation\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade show active\" id=\"Others\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Phones\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Computer\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"Accesories\" role=\"tabpanel\">
                            <div class=\"offer-wrap product-style-1\">
                                <div class=\"row g-xl-4 g-3\">
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/10.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$1000.00
                                                        <span class=\"font-light ml-1\">\$1068.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/9.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$30.00
                                                        <span class=\"font-light ml-1\">\$50.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Ear Bluetooth Wireless Headphone</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/8.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$52.00
                                                        <span class=\"font-light ml-1\">\$60.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 product-banner\">
                                        <div class=\"product-box\">
                                            <div class=\"img-wrapper\">
                                                <div class=\"label-block\">
                                                    <span class=\"label label-black\">New</span>
                                                    <span class=\"label label-theme\">50% Off</span>
                                                </div>
                                                <a href=\"javascript:void(0)\">
                                                    <img src=\"assets/images/electronics/product/png/14.png\"
                                                         class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                </a>
                                                <div class=\"offer-end\">
                                                    <h3>Hurry Up !!!!! </h3>
                                                    <h6>Offer Expire in 02 hours</h6>
                                                </div>
                                            </div>
                                            <div class=\"product-details text-center\">
                                                <h3 class=\"theme-color\">
                                                    \$600.00
                                                    <span class=\"font-light ml-1\">\$945.00</span>
                                                </h3>
                                                <a href=\"javascript:void(0)\" class=\"font-default\" tabindex=\"-1\">
                                                    <h5 class=\"main-title\">Bluetooth Wireless Earphones(black)</h5>
                                                </a>
                                                <ul class=\"rating\">
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star theme-color\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                    <li>
                                                        <i class=\"fas fa-star\"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"product-list\">
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/12.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$78.00
                                                        <span class=\"font-light ml-1\">\$90.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>White dial Wrist Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/13.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$700.00
                                                        <span class=\"font-light ml-1\">\$850.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Smart Security Camera (White)</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"product-box\">
                                                <div class=\"img-wrapper\">
                                                    <a href=\"shop-left-sidebar.html\" class=\"text-center\">
                                                        <img src=\"assets/images/electronics/product/png/11.png\"
                                                             class=\"img-fluid blur-up lazyload\" alt=\"\">
                                                    </a>
                                                </div>
                                                <div class=\"product-details\">
                                                    <h3 class=\"theme-color\">
                                                        \$25.00
                                                        <span class=\"font-light ml-1\">\$58.00</span>
                                                    </h3>
                                                    <a href=\"product-left-sidebar.html\" class=\"font-default\">
                                                        <h5>Digital Unisex Watch</h5>
                                                    </a>
                                                    <ul class=\"rating\">
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star theme-color\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                        <li>
                                                            <i class=\"fas fa-star\"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "include/top_banner.html.twig", "/home/prikolic/public_html/prikolica/templates/include/top_banner.html.twig");
    }
}
