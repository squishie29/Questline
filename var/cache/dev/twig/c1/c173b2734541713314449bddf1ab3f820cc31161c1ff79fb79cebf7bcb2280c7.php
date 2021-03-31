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
class __TwigTemplate_964e1f80f979ff06dc9a1f87049406f79069e87f07da9664bfd2491fed61664a extends \Twig\Template
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
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
<html>
<head>
    <title>Suntour</title>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "</head>

<body>
<header>
    ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 195
        echo "</header>

";
        // line 197
        $this->displayBlock('body', $context, $blocks);
        // line 198
        echo "



";
        // line 202
        $this->displayBlock('js', $context, $blocks);
        // line 239
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/jquery.fancybox.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/fonts/fi/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/flexslider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/css/indent.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/css/layers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/css/navigation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/tuner/css/colorpicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/tuner/css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "        <!-- site top panel-->
        <div class=\"site-top-panel\">
            <div class=\"container p-relative\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-7\">
                        <!-- lang select wrapper-->
                        <div class=\"top-left-wrap font-3\">
                            <div class=\"mail-top\"><a href=\"mailto:support.suntour@example.com\"> <i class=\"flaticon-suntour-email\"></i>suntour@example.com</a></div><span>/</span>
                            <div class=\"tel-top\"><a href=\"tel:(723)-700-1183\"> <i class=\"flaticon-suntour-phone\"></i>(723)-700-1183</a></div>
                        </div>
                        <!-- ! lang select wrapper-->
                    </div>
                    <div class=\"col-md-6 col-sm-5 text-right\">
                        <div class=\"top-right-wrap\">
                            <div class=\"top-login\"><a href=\"#\">My Account</a></div>
                            <div class=\"curr-wrap dropdown\">
                                <div>
                                    <ul>
                                        <li><a href=\"#\" class=\"lang-sel icl-en\">Currency<i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"#\">USD</a></li>
                                                <li><a href=\"#\">EUR</a></li>
                                                <li> <a href=\"#\">GBP</a></li>
                                                <li> <a href=\"#\">AUD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"lang-wrap dropdown\">
                                <div>
                                    <ul>
                                        <li><a href=\"#\" class=\"lang-sel icl-en\">Language <i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"#\">English</a></li>
                                                <li> <a href=\"#\">Deutsch</a></li>
                                                <li> <a href=\"#\">Espanol</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ! site top panel-->
        <!-- Navigation panel-->
        <nav class=\"main-nav js-stick\">
            <div class=\"full-wrapper relative clearfix container\">
                <!-- Logo ( * your text or image into link tag *)-->
                <div class=\"nav-logo-wrap local-scroll\"><a href=\"index-2.html\" class=\"logo\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" data-at2x=\"img/logo@2x.png\" alt></a></div>
                <!-- Main Menu-->
                <div class=\"inner-nav desktop-nav\">
                    <ul class=\"clearlist\">
                        <!-- Item With Sub-->
                        <li><a href=\"index-2.html\" class=\"mn-has-sub\">Home <i class=\"fa fa-angle-down button_open\"></i></a>
                            <ul class=\"mn-sub\">
                                <li><a href=\"index-2.html\">Standart Slider</a></li>
                                <li><a href=\"index-search.html\">Main Search</a></li>
                                <li><a href=\"index-slider.html\">Full Slider</a></li>
                                <li><a href=\"index-video.html\">Video Slider</a></li>
                            </ul>
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li><a href=\"hotels-search.html\" class=\"mn-has-sub\"> Evennemnts <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub\">
                                <li>
                                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventFront");
        echo "\">mes evennements</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesReservation");
        echo "\">Reservation</a>
                                </li>

                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li class=\"megamenu\"><a href=\"page-about-us.html\" class=\"mn-has-sub active\">pages <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub mn-has-multi\">
                                <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Pages</a>
                                    <ul>
                                        <li><a href=\"page-about-us.html\">About Us</a></li>
                                        <li><a href=\"page-services.html\">Services</a></li>
                                        <li><a href=\"page-procces.html\">Our Procces</a></li>
                                        <li><a href=\"page-our-team.html\">Our Team</a></li>
                                        <li><a href=\"page-profile.html\">Profile</a></li>
                                        <li><a href=\"page-elements.html\">Elements</a></li>
                                    </ul>
                                </li>
                                <li class=\"mn-sub-multi active\"><a class=\"mn-group-title\">Portfolio</a>
                                    <ul>
                                        <li><a href=\"portfolio-3-col.html\">Three Columns</a></li>
                                        <li><a href=\"portfolio-4-col.html\">Four Columns</a></li>
                                        <li><a href=\"portfolio-masonry.html\">Portfolio Masonry</a></li>
                                        <li><a href=\"portfolio-with-sidebar.html\">With Sidebar</a></li>
                                        <li class=\"active\"><a href=\"portfolio-gallery.html\">Gallery</a></li>
                                        <li><a href=\"page-portfolio-single.html\">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Blog</a>
                                    <ul>
                                        <li><a href=\"blog-2-col-sidebar.html\">Two Columns + Sidebar</a></li>
                                        <li><a href=\"blog-3-col.html\">Three Columns</a></li>
                                        <li><a href=\"blog-4-col.html\">Four Columns</a></li>
                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                        <li><a href=\"blog-list.html\">Blog List</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <!-- span /-->
                        <!-- Item With Sub-->
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li><a href=\"shop-grid.html\" class=\"mn-has-sub\">Shop <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub\">
                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                <li><a href=\"shop-cart.html\">Shop Cart</a></li>
                                <li><a href=\"shop-checkout.html\">Shop Checkout</a></li>
                                <li><a href=\"shop-single.html\">Shop Single Product</a></li>
                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item-->
                        <li><a href=\"page-contact.html\">Contact</a></li>
                        <!-- End Item-->
                        <!-- Search-->
                        <li class=\"search\"><a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchevent");
        echo "\" class=\"mn-has-sub\">Search</a>
                            <ul class=\"search-sub\">
                                <li>
                                    <div class=\"container\">
                                        <div class=\"mn-wrap\">
                                            <form method=\"post\" class=\"form\">
                                                <div class=\"search-wrap\">
                                                    <input type=\"text\" placeholder=\"Where will you go next?\" class=\"form-control search-field\"><i class=\"flaticon-suntour-search search-icon\"></i>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"close-button\"><span>Search</span></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Search-->
                    </ul>
                </div>
                <!-- End Main Menu-->
            </div>
        </nav>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 202
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 203
        echo "    <script src=\"https://www.youtube.com/player_api\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/cws_parallax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/rs-plugin/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.form.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/bg-video/cws_self_vimeo_bg.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/bg-video/jquery.vimeo.api.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/bg-video/cws_YT_bg.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/tuner/js/colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/tuner/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/js/retina.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  551 => 237,  547 => 236,  543 => 235,  539 => 234,  535 => 233,  531 => 232,  527 => 231,  523 => 230,  519 => 229,  515 => 228,  511 => 227,  507 => 226,  503 => 225,  499 => 224,  495 => 223,  491 => 222,  487 => 221,  483 => 220,  479 => 219,  475 => 218,  471 => 217,  467 => 216,  463 => 215,  459 => 214,  455 => 213,  451 => 212,  447 => 211,  443 => 210,  439 => 209,  435 => 208,  431 => 207,  427 => 206,  423 => 205,  419 => 204,  416 => 203,  406 => 202,  388 => 197,  354 => 171,  284 => 104,  278 => 101,  255 => 81,  201 => 29,  191 => 28,  179 => 22,  175 => 21,  171 => 20,  167 => 19,  163 => 18,  159 => 17,  155 => 16,  151 => 15,  147 => 14,  143 => 13,  139 => 12,  135 => 11,  131 => 10,  126 => 9,  116 => 8,  97 => 6,  84 => 239,  82 => 202,  76 => 198,  74 => 197,  70 => 195,  68 => 28,  62 => 24,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Suntour</title>
    <meta charset=\"utf-8\">
    <title>{% block title %}PI{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/reset.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/bootstrap.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/font-awesome.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/owl.carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/jquery.fancybox.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/fonts/fi/flaticon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/flexslider.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/main.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/css/indent.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/rs-plugin/css/settings.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/rs-plugin/css/layers.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/rs-plugin/css/navigation.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/tuner/css/colorpicker.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('/front/tuner/css/styles.css')}}\">
    {% endblock %}
</head>

<body>
<header>
    {% block header %}
        <!-- site top panel-->
        <div class=\"site-top-panel\">
            <div class=\"container p-relative\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-7\">
                        <!-- lang select wrapper-->
                        <div class=\"top-left-wrap font-3\">
                            <div class=\"mail-top\"><a href=\"mailto:support.suntour@example.com\"> <i class=\"flaticon-suntour-email\"></i>suntour@example.com</a></div><span>/</span>
                            <div class=\"tel-top\"><a href=\"tel:(723)-700-1183\"> <i class=\"flaticon-suntour-phone\"></i>(723)-700-1183</a></div>
                        </div>
                        <!-- ! lang select wrapper-->
                    </div>
                    <div class=\"col-md-6 col-sm-5 text-right\">
                        <div class=\"top-right-wrap\">
                            <div class=\"top-login\"><a href=\"#\">My Account</a></div>
                            <div class=\"curr-wrap dropdown\">
                                <div>
                                    <ul>
                                        <li><a href=\"#\" class=\"lang-sel icl-en\">Currency<i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"#\">USD</a></li>
                                                <li><a href=\"#\">EUR</a></li>
                                                <li> <a href=\"#\">GBP</a></li>
                                                <li> <a href=\"#\">AUD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"lang-wrap dropdown\">
                                <div>
                                    <ul>
                                        <li><a href=\"#\" class=\"lang-sel icl-en\">Language <i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"#\">English</a></li>
                                                <li> <a href=\"#\">Deutsch</a></li>
                                                <li> <a href=\"#\">Espanol</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ! site top panel-->
        <!-- Navigation panel-->
        <nav class=\"main-nav js-stick\">
            <div class=\"full-wrapper relative clearfix container\">
                <!-- Logo ( * your text or image into link tag *)-->
                <div class=\"nav-logo-wrap local-scroll\"><a href=\"index-2.html\" class=\"logo\"><img src=\"{{ asset ('front/img/logo.png')}}\" data-at2x=\"img/logo@2x.png\" alt></a></div>
                <!-- Main Menu-->
                <div class=\"inner-nav desktop-nav\">
                    <ul class=\"clearlist\">
                        <!-- Item With Sub-->
                        <li><a href=\"index-2.html\" class=\"mn-has-sub\">Home <i class=\"fa fa-angle-down button_open\"></i></a>
                            <ul class=\"mn-sub\">
                                <li><a href=\"index-2.html\">Standart Slider</a></li>
                                <li><a href=\"index-search.html\">Main Search</a></li>
                                <li><a href=\"index-slider.html\">Full Slider</a></li>
                                <li><a href=\"index-video.html\">Video Slider</a></li>
                            </ul>
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li><a href=\"hotels-search.html\" class=\"mn-has-sub\"> Evennemnts <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub\">
                                <li>
                                    <a href=\"{{ path('eventFront') }}\">mes evennements</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('mesReservation') }}\">Reservation</a>
                                </li>

                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li class=\"megamenu\"><a href=\"page-about-us.html\" class=\"mn-has-sub active\">pages <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub mn-has-multi\">
                                <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Pages</a>
                                    <ul>
                                        <li><a href=\"page-about-us.html\">About Us</a></li>
                                        <li><a href=\"page-services.html\">Services</a></li>
                                        <li><a href=\"page-procces.html\">Our Procces</a></li>
                                        <li><a href=\"page-our-team.html\">Our Team</a></li>
                                        <li><a href=\"page-profile.html\">Profile</a></li>
                                        <li><a href=\"page-elements.html\">Elements</a></li>
                                    </ul>
                                </li>
                                <li class=\"mn-sub-multi active\"><a class=\"mn-group-title\">Portfolio</a>
                                    <ul>
                                        <li><a href=\"portfolio-3-col.html\">Three Columns</a></li>
                                        <li><a href=\"portfolio-4-col.html\">Four Columns</a></li>
                                        <li><a href=\"portfolio-masonry.html\">Portfolio Masonry</a></li>
                                        <li><a href=\"portfolio-with-sidebar.html\">With Sidebar</a></li>
                                        <li class=\"active\"><a href=\"portfolio-gallery.html\">Gallery</a></li>
                                        <li><a href=\"page-portfolio-single.html\">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Blog</a>
                                    <ul>
                                        <li><a href=\"blog-2-col-sidebar.html\">Two Columns + Sidebar</a></li>
                                        <li><a href=\"blog-3-col.html\">Three Columns</a></li>
                                        <li><a href=\"blog-4-col.html\">Four Columns</a></li>
                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                        <li><a href=\"blog-list.html\">Blog List</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <!-- span /-->
                        <!-- Item With Sub-->
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item With Sub-->
                        <li><a href=\"shop-grid.html\" class=\"mn-has-sub\">Shop <i class=\"fa fa-angle-down button_open\"></i></a>
                            <!-- Sub-->
                            <ul class=\"mn-sub\">
                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                <li><a href=\"shop-cart.html\">Shop Cart</a></li>
                                <li><a href=\"shop-checkout.html\">Shop Checkout</a></li>
                                <li><a href=\"shop-single.html\">Shop Single Product</a></li>
                            </ul>
                            <!-- End Sub-->
                        </li>
                        <!-- End Item With Sub-->
                        <li class=\"slash\">/</li>
                        <!-- Item-->
                        <li><a href=\"page-contact.html\">Contact</a></li>
                        <!-- End Item-->
                        <!-- Search-->
                        <li class=\"search\"><a href=\"{{ path('searchevent') }}\" class=\"mn-has-sub\">Search</a>
                            <ul class=\"search-sub\">
                                <li>
                                    <div class=\"container\">
                                        <div class=\"mn-wrap\">
                                            <form method=\"post\" class=\"form\">
                                                <div class=\"search-wrap\">
                                                    <input type=\"text\" placeholder=\"Where will you go next?\" class=\"form-control search-field\"><i class=\"flaticon-suntour-search search-icon\"></i>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"close-button\"><span>Search</span></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Search-->
                    </ul>
                </div>
                <!-- End Main Menu-->
            </div>
        </nav>

    {% endblock %}
</header>

{% block body %}{% endblock %}




{% block js %}
    <script src=\"https://www.youtube.com/player_api\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery-ui.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/bootstrap.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/owl.carousel.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.sticky.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/TweenMax.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/cws_parallax.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.fancybox.pack.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.fancybox-media.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/isotope.pkgd.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/imagesloaded.pkgd.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/masonry.pkgd.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/jquery.themepunch.tools.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/jquery.themepunch.revolution.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.video.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.validate.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.form.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/script.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/bg-video/cws_self_vimeo_bg.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/bg-video/jquery.vimeo.api.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/bg-video/cws_YT_bg.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.tweet.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.scrollTo.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/jquery.flexslider.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/tuner/js/colorpicker.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/tuner/js/scripts.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('/front/js/retina.min.js')}}\"></script>
{% endblock %}
</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\devahmed\\templates\\base.html.twig");
    }
}
