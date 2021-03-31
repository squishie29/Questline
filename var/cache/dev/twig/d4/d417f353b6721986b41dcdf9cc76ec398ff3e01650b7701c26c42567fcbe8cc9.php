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

/* front.html.twig */
class __TwigTemplate_3f0a86d9b8b5dfc1ebdb5c6a9d6bb9c5f57ca5d6ba497d9a5885d3bb01693aed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>Suntour</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/front/css/reset.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/front/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/fi/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/flexslider.css\">
    <link rel=\"stylesheet\" href=\"/front/css/main.css\">
    <link rel=\"stylesheet\" href=\"/front/css/indent.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/settings.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/layers.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/navigation.css\">
    <link rel=\"stylesheet\" href=\"/front/tuner/css/colorpicker.css\">
    <link rel=\"stylesheet\" href=\"/front/tuner/css/styles.css\">
</head>
<body>
<!-- header page-->
<header>
    <!-- site top panel-->
    <div class=\"site-top-panel\">
        <div class=\"container p-relative\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-7\">
                    <!-- lang select wrapper-->
                    <div class=\"top-left-wrap font-3\">
                        <div class=\"mail-top\"><a href=\"/front/mailto:support.suntour@example.com\"> <i class=\"flaticon-suntour-email\"></i>suntour@example.com</a></div><span>/</span>
                        <div class=\"tel-top\"><a href=\"/front/tel:(723)-700-1183\"> <i class=\"flaticon-suntour-phone\"></i>(723)-700-1183</a></div>
                    </div>
                    <!-- ! lang select wrapper-->
                </div>
                <div class=\"col-md-6 col-sm-5 text-right\">
                    <div class=\"top-right-wrap\">
                    <div class=\"\"><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign");
        echo "\">Sign in !</a></div>
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
            <div class=\"nav-logo-wrap local-scroll\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\" class=\"logo\"><img src=\"/front/img/logo.png\"  alt></a></div>
            <!-- Main Menu-->
            <div class=\"inner-nav desktop-nav\">
                <ul class=\"clearlist\">
                    <!-- Item With Sub-->
                    <li><a href=\"/front/index-2.html\" class=\"mn-has-sub active\">Home <i class=\"fa fa-angle-down button_open\"></i></a>
                        <ul class=\"mn-sub\">
                            <li class=\"active\"><a href=\"/front/index-2.html\">Standart Slider</a></li>
                            <li><a href=\"/front/index-search.html\">Main Search</a></li>
                            <li><a href=\"/front/index-slider.html\">Full Slider</a></li>
                            <li><a href=\"/front/index-video.html\">Video Slider</a></li>
                        </ul>
                    </li>
                    <!-- End Item With Sub-->
                    <li class=\"slash\">/</li>
                    <!-- Item With Sub-->
                    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventFront");
        echo "\" class=\"mn-has-sub\"> Evennemnts <i class=\"fa fa-angle-down button_open\"></i></a>
                        <!-- Sub-->
                        <ul class=\"mn-sub\">
                            <li>
                                <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventFront");
        echo "\">mes evennements</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesReservation");
        echo "\">Reservation</a>
                            </li>

                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <li class=\"slash\">/</li>
                    <!-- Item With Sub-->
                    <li class=\"megamenu\"><a href=\"/front/page-about-us.html\" class=\"mn-has-sub\">Pages <i class=\"fa fa-angle-down button_open\"></i></a>
                        <!-- Sub-->
                        <ul class=\"mn-sub mn-has-multi\">
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Pages</a>
                                <ul>
                                    <li><a href=\"/front/page-about-us.html\">About Us</a></li>
                                    <li><a href=\"/front/page-services.html\">Services</a></li>
                                    <li><a href=\"/front/page-procces.html\">Our Procces</a></li>
                                    <li><a href=\"/front/page-our-team.html\">Our Team</a></li>
                                    <li><a href=\"/front/page-profile.html\">Profile</a></li>
                                    <li><a href=\"/front/page-elements.html\">Elements</a></li>
                                </ul>
                            </li>
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Portfolio</a>
                                <ul>
                                    <li><a href=\"/front/portfolio-3-col.html\">Three Columns</a></li>
                                    <li><a href=\"/front/portfolio-4-col.html\">Four Columns</a></li>
                                    <li><a href=\"/front/portfolio-masonry.html\">Portfolio Masonry</a></li>
                                    <li><a href=\"/front/portfolio-with-sidebar.html\">With Sidebar</a></li>
                                    <li><a href=\"/front/portfolio-gallery.html\">Gallery</a></li>
                                    <li><a href=\"/front/page-portfolio-single.html\">Portfolio Single</a></li>
                                </ul>
                            </li>
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Blog</a>
                                <ul>
                                    <li><a href=\"/front/blog-2-col-sidebar.html\">Two Columns + Sidebar</a></li>
                                    <li><a href=\"/front/blog-3-col.html\">Three Columns</a></li>
                                    <li><a href=\"/front/blog-4-col.html\">Four Columns</a></li>
                                    <li><a href=\"/front/blog-single.html\">Blog Single</a></li>
                                    <li><a href=\"/front/blog-grid.html\">Blog Grid</a></li>
                                    <li><a href=\"/front/blog-list.html\">Blog List</a></li>
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
                    <li><a href=\"/front/shop-grid.html\" class=\"mn-has-sub\">Shop <i class=\"fa fa-angle-down button_open\"></i></a>
                        <!-- Sub-->
                        <ul class=\"mn-sub\">
                            <li><a href=\"/front/shop-grid.html\">Shop Grid</a></li>
                            <li><a href=\"/front/shop-cart.html\">Shop Cart</a></li>
                            <li><a href=\"/front/shop-checkout.html\">Shop Checkout</a></li>
                            <li><a href=\"/front/shop-single.html\">Shop Single Product</a></li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <li class=\"slash\">/</li>
                    <!-- Item-->
                    <li><a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_review");
        echo "\">Reviews</a></li>
                    <!-- End Item-->
                    <!-- Search-->
                    <li class=\"search\"><a href=\"/front/#\" class=\"mn-has-sub\">Search</a>
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
    <!-- End Navigation panel-->
</header>
<!-- ! header page-->
";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 194));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 195
            echo "    <div class=\"alert alert-success\">
        ";
            // line 196
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        $this->displayBlock('body', $context, $blocks);
        // line 200
        echo "<!-- footer-->
<footer style=\"background-image: url('pic/footer/footer-bg.jpg')\" class=\"footer footer-fixed\">
    <div class=\"container\">
        <div class=\"row pb-100 pb-md-40\">
            <!-- widget footer-->
            <div class=\"col-md-6 col-sm-12 mb-sm-30\">
                <div class=\"logo-soc clearfix\">
                    <div class=\"footer-logo\"><a href=\"/front/index-2.html\"><img src=\"/front/img/logo-white.png\"  alt></a></div>
                </div>
                <p class=\"color-g2 mt-10\">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
                <!-- social-->
                <div class=\"social-link dark\"><a href=\"/front/#\" class=\"cws-social fa fa-twitter\"></a><a href=\"/front/#\" class=\"cws-social fa fa-facebook\"></a><a href=\"/front/#\" class=\"cws-social fa fa-google-plus\"></a><a href=\"/front/#\" class=\"cws-social fa fa-linkedin\"></a></div>
                <!-- ! social-->
            </div>
            <!-- ! widget footer-->
            <!-- widget footer-->
            <div class=\"col-md-3 col-sm-6 mb-sm-30\">
                <div class=\"widget-footer\">
                    <h4>Latest Tweets</h4>
                    <div class=\"twitter-footer align-left\"></div>
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget-footer\">
                    <h4>Tag cloud</h4>
                    <div class=\"widget-tags-wrap\"><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Adventure</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Romantic</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Wildlife</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Beach</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Honeymoon</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Island</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Parks</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Family</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Travel</a></div>
                </div>
            </div>
            <!-- end widget footer-->
        </div>
    </div>
    <!-- copyright-->
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <p>© Copyright 2016 <span>Suntour</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
                </div>
                <div class=\"col-sm-6 text-right\"><a href=\"/front/index-2.html\" class=\"footer-nav\">Home</a><a href=\"/front/page-about-us.html\" class=\"footer-nav\">Pages</a><a href=\"/front/hotels-search.html\" class=\"footer-nav\">Hotels</a><a href=\"/front/blog-grid.html\" class=\"footer-nav\">Blog</a><a href=\"/front/shop-grid.html\" class=\"footer-nav\">Shop</a><a href=\"/front/page-contact.html\" class=\"footer-nav\">Contacts</a></div>
            </div>
        </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
</footer>
<div id=\"scroll-top\"><i class=\"fa fa-angle-up\"></i></div>
<!-- ! footer-->
<!-- login popup-->
<div class=\"login-popup\">
    <div class=\"login-popup-wrap\">
        <div class=\"title-wrap\">
            <h2>Login</h2><i class=\"close-button flaticon-close\"></i>
        </div>
        <div class=\"login-content\">
            <form class=\"form\">
                <input type=\"text\" name=\"email\" value=\"\" size=\"40\" placeholder=\"Enter Your Email ...\" aria-required=\"true\" class=\"form-row form-row-first\">
                <input type=\"text\" name=\"password\" value=\"\" size=\"40\" placeholder=\"Enter Your Password ...\" aria-required=\"true\" class=\"form-row form-row-last\">
            </form>
            <div class=\"remember\">
                <div class=\"checkbox\">
                    <input id=\"checkbox30\" type=\"checkbox\" value=\"None\" name=\"check\">
                    <label for=\"checkbox30\">Remember Me</label>
                </div><a href=\"#\">Forgot Password ?</a>
            </div><a href=\"#\" class=\"cws-button gray alt full-width mt-20\">Login now</a>
        </div>
        <div class=\"login-bot\">
            <p>No account yet? <a href=\"#\">Register now</a></p>
        </div>
    </div>
</div>
<!-- ! login popup-->
<!-- news popup-->
<div class=\"news-popup\">
    <div class=\"news-popup-wrap\"> <i class=\"close-button flaticon-close\"></i>
        <div class=\"row\">
            <div class=\"col-sm-6\"><img src=\"/front/pic/news-popup.jpg\"  alt></div>
            <div class=\"col-sm-6\">
                <div class=\"news-content\">
                    <div class=\"news-title\">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                    <form method=\"get\" action=\"#\" class=\"newsletter contact-form\">
                        <label class=\"mb-0\">
                            <input type=\"text\" placeholder=\"Enter Your Email ...\" value=\"\" name=\"email\" class=\"newsletter-field mb-0\">
                        </label>
                        <button type=\"submit\" class=\"newsletter-submit cws-button alt\">Submit</button>
                    </form>
                    <div class=\"checkbox-wrap\">
                        <div class=\"checkbox\">
                            <input id=\"checkbox40\" type=\"checkbox\" value=\"None\" name=\"check\">
                            <label for=\"checkbox40\">Dont Show This Message Again</label>
                        </div>
                    </div>
                    <div class=\"social-wrap\"><a href=\"/front/#\" class=\"cws-social flaticon-social-4\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-3\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-1\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-network\"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ! news popup-->
<script src=\"/front/https://www.youtube.com/player_api\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bootstrap.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/owl.carousel.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.sticky.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/TweenMax.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/cws_parallax.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.fancybox.pack.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.fancybox-media.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/isotope.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/imagesloaded.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/masonry.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.navigation.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.parallax.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.video.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.actions.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.migration.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.validate.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.form.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/script.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/cws_self_vimeo_bg.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/jquery.vimeo.api.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/cws_YT_bg.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.tweet.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.scrollTo.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.flexslider.js\"></script>
<script type=\"text/javascript\" src=\"/front/tuner/js/colorpicker.js\"></script>
<script type=\"text/javascript\" src=\"/front/tuner/js/scripts.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/retina.min.js\"></script>
</body>

<!-- Mirrored from html.cwsthemes.com/suntour/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 21:50:52 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 199
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 199,  275 => 200,  273 => 199,  264 => 196,  261 => 195,  257 => 194,  226 => 166,  159 => 102,  153 => 99,  146 => 95,  127 => 79,  85 => 40,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <title>Suntour</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/front/css/reset.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/front/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/fi/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/flexslider.css\">
    <link rel=\"stylesheet\" href=\"/front/css/main.css\">
    <link rel=\"stylesheet\" href=\"/front/css/indent.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/settings.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/layers.css\">
    <link rel=\"stylesheet\" href=\"/front/rs-plugin/css/navigation.css\">
    <link rel=\"stylesheet\" href=\"/front/tuner/css/colorpicker.css\">
    <link rel=\"stylesheet\" href=\"/front/tuner/css/styles.css\">
</head>
<body>
<!-- header page-->
<header>
    <!-- site top panel-->
    <div class=\"site-top-panel\">
        <div class=\"container p-relative\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-7\">
                    <!-- lang select wrapper-->
                    <div class=\"top-left-wrap font-3\">
                        <div class=\"mail-top\"><a href=\"/front/mailto:support.suntour@example.com\"> <i class=\"flaticon-suntour-email\"></i>suntour@example.com</a></div><span>/</span>
                        <div class=\"tel-top\"><a href=\"/front/tel:(723)-700-1183\"> <i class=\"flaticon-suntour-phone\"></i>(723)-700-1183</a></div>
                    </div>
                    <!-- ! lang select wrapper-->
                </div>
                <div class=\"col-md-6 col-sm-5 text-right\">
                    <div class=\"top-right-wrap\">
                    <div class=\"\"><a href=\"{{ path('sign') }}\">Sign in !</a></div>
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
            <div class=\"nav-logo-wrap local-scroll\"><a href=\"{{ path ('front') }}\" class=\"logo\"><img src=\"/front/img/logo.png\"  alt></a></div>
            <!-- Main Menu-->
            <div class=\"inner-nav desktop-nav\">
                <ul class=\"clearlist\">
                    <!-- Item With Sub-->
                    <li><a href=\"/front/index-2.html\" class=\"mn-has-sub active\">Home <i class=\"fa fa-angle-down button_open\"></i></a>
                        <ul class=\"mn-sub\">
                            <li class=\"active\"><a href=\"/front/index-2.html\">Standart Slider</a></li>
                            <li><a href=\"/front/index-search.html\">Main Search</a></li>
                            <li><a href=\"/front/index-slider.html\">Full Slider</a></li>
                            <li><a href=\"/front/index-video.html\">Video Slider</a></li>
                        </ul>
                    </li>
                    <!-- End Item With Sub-->
                    <li class=\"slash\">/</li>
                    <!-- Item With Sub-->
                    <li><a href=\"{{ path('eventFront') }}\" class=\"mn-has-sub\"> Evennemnts <i class=\"fa fa-angle-down button_open\"></i></a>
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
                    <li class=\"megamenu\"><a href=\"/front/page-about-us.html\" class=\"mn-has-sub\">Pages <i class=\"fa fa-angle-down button_open\"></i></a>
                        <!-- Sub-->
                        <ul class=\"mn-sub mn-has-multi\">
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Pages</a>
                                <ul>
                                    <li><a href=\"/front/page-about-us.html\">About Us</a></li>
                                    <li><a href=\"/front/page-services.html\">Services</a></li>
                                    <li><a href=\"/front/page-procces.html\">Our Procces</a></li>
                                    <li><a href=\"/front/page-our-team.html\">Our Team</a></li>
                                    <li><a href=\"/front/page-profile.html\">Profile</a></li>
                                    <li><a href=\"/front/page-elements.html\">Elements</a></li>
                                </ul>
                            </li>
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Portfolio</a>
                                <ul>
                                    <li><a href=\"/front/portfolio-3-col.html\">Three Columns</a></li>
                                    <li><a href=\"/front/portfolio-4-col.html\">Four Columns</a></li>
                                    <li><a href=\"/front/portfolio-masonry.html\">Portfolio Masonry</a></li>
                                    <li><a href=\"/front/portfolio-with-sidebar.html\">With Sidebar</a></li>
                                    <li><a href=\"/front/portfolio-gallery.html\">Gallery</a></li>
                                    <li><a href=\"/front/page-portfolio-single.html\">Portfolio Single</a></li>
                                </ul>
                            </li>
                            <li class=\"mn-sub-multi\"><a class=\"mn-group-title\">Blog</a>
                                <ul>
                                    <li><a href=\"/front/blog-2-col-sidebar.html\">Two Columns + Sidebar</a></li>
                                    <li><a href=\"/front/blog-3-col.html\">Three Columns</a></li>
                                    <li><a href=\"/front/blog-4-col.html\">Four Columns</a></li>
                                    <li><a href=\"/front/blog-single.html\">Blog Single</a></li>
                                    <li><a href=\"/front/blog-grid.html\">Blog Grid</a></li>
                                    <li><a href=\"/front/blog-list.html\">Blog List</a></li>
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
                    <li><a href=\"/front/shop-grid.html\" class=\"mn-has-sub\">Shop <i class=\"fa fa-angle-down button_open\"></i></a>
                        <!-- Sub-->
                        <ul class=\"mn-sub\">
                            <li><a href=\"/front/shop-grid.html\">Shop Grid</a></li>
                            <li><a href=\"/front/shop-cart.html\">Shop Cart</a></li>
                            <li><a href=\"/front/shop-checkout.html\">Shop Checkout</a></li>
                            <li><a href=\"/front/shop-single.html\">Shop Single Product</a></li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <li class=\"slash\">/</li>
                    <!-- Item-->
                    <li><a href=\"{{ path('front_review') }}\">Reviews</a></li>
                    <!-- End Item-->
                    <!-- Search-->
                    <li class=\"search\"><a href=\"/front/#\" class=\"mn-has-sub\">Search</a>
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
    <!-- End Navigation panel-->
</header>
<!-- ! header page-->
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}
{% block body %}  {%  endblock %}
<!-- footer-->
<footer style=\"background-image: url('pic/footer/footer-bg.jpg')\" class=\"footer footer-fixed\">
    <div class=\"container\">
        <div class=\"row pb-100 pb-md-40\">
            <!-- widget footer-->
            <div class=\"col-md-6 col-sm-12 mb-sm-30\">
                <div class=\"logo-soc clearfix\">
                    <div class=\"footer-logo\"><a href=\"/front/index-2.html\"><img src=\"/front/img/logo-white.png\"  alt></a></div>
                </div>
                <p class=\"color-g2 mt-10\">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
                <!-- social-->
                <div class=\"social-link dark\"><a href=\"/front/#\" class=\"cws-social fa fa-twitter\"></a><a href=\"/front/#\" class=\"cws-social fa fa-facebook\"></a><a href=\"/front/#\" class=\"cws-social fa fa-google-plus\"></a><a href=\"/front/#\" class=\"cws-social fa fa-linkedin\"></a></div>
                <!-- ! social-->
            </div>
            <!-- ! widget footer-->
            <!-- widget footer-->
            <div class=\"col-md-3 col-sm-6 mb-sm-30\">
                <div class=\"widget-footer\">
                    <h4>Latest Tweets</h4>
                    <div class=\"twitter-footer align-left\"></div>
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget-footer\">
                    <h4>Tag cloud</h4>
                    <div class=\"widget-tags-wrap\"><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Adventure</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Romantic</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Wildlife</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Beach</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Honeymoon</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Island</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Parks</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Family</a><a href=\"/front/#\" rel=\"tag\" class=\"tag\">Travel</a></div>
                </div>
            </div>
            <!-- end widget footer-->
        </div>
    </div>
    <!-- copyright-->
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <p>© Copyright 2016 <span>Suntour</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
                </div>
                <div class=\"col-sm-6 text-right\"><a href=\"/front/index-2.html\" class=\"footer-nav\">Home</a><a href=\"/front/page-about-us.html\" class=\"footer-nav\">Pages</a><a href=\"/front/hotels-search.html\" class=\"footer-nav\">Hotels</a><a href=\"/front/blog-grid.html\" class=\"footer-nav\">Blog</a><a href=\"/front/shop-grid.html\" class=\"footer-nav\">Shop</a><a href=\"/front/page-contact.html\" class=\"footer-nav\">Contacts</a></div>
            </div>
        </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
</footer>
<div id=\"scroll-top\"><i class=\"fa fa-angle-up\"></i></div>
<!-- ! footer-->
<!-- login popup-->
<div class=\"login-popup\">
    <div class=\"login-popup-wrap\">
        <div class=\"title-wrap\">
            <h2>Login</h2><i class=\"close-button flaticon-close\"></i>
        </div>
        <div class=\"login-content\">
            <form class=\"form\">
                <input type=\"text\" name=\"email\" value=\"\" size=\"40\" placeholder=\"Enter Your Email ...\" aria-required=\"true\" class=\"form-row form-row-first\">
                <input type=\"text\" name=\"password\" value=\"\" size=\"40\" placeholder=\"Enter Your Password ...\" aria-required=\"true\" class=\"form-row form-row-last\">
            </form>
            <div class=\"remember\">
                <div class=\"checkbox\">
                    <input id=\"checkbox30\" type=\"checkbox\" value=\"None\" name=\"check\">
                    <label for=\"checkbox30\">Remember Me</label>
                </div><a href=\"#\">Forgot Password ?</a>
            </div><a href=\"#\" class=\"cws-button gray alt full-width mt-20\">Login now</a>
        </div>
        <div class=\"login-bot\">
            <p>No account yet? <a href=\"#\">Register now</a></p>
        </div>
    </div>
</div>
<!-- ! login popup-->
<!-- news popup-->
<div class=\"news-popup\">
    <div class=\"news-popup-wrap\"> <i class=\"close-button flaticon-close\"></i>
        <div class=\"row\">
            <div class=\"col-sm-6\"><img src=\"/front/pic/news-popup.jpg\"  alt></div>
            <div class=\"col-sm-6\">
                <div class=\"news-content\">
                    <div class=\"news-title\">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                    <form method=\"get\" action=\"#\" class=\"newsletter contact-form\">
                        <label class=\"mb-0\">
                            <input type=\"text\" placeholder=\"Enter Your Email ...\" value=\"\" name=\"email\" class=\"newsletter-field mb-0\">
                        </label>
                        <button type=\"submit\" class=\"newsletter-submit cws-button alt\">Submit</button>
                    </form>
                    <div class=\"checkbox-wrap\">
                        <div class=\"checkbox\">
                            <input id=\"checkbox40\" type=\"checkbox\" value=\"None\" name=\"check\">
                            <label for=\"checkbox40\">Dont Show This Message Again</label>
                        </div>
                    </div>
                    <div class=\"social-wrap\"><a href=\"/front/#\" class=\"cws-social flaticon-social-4\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-3\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-1\"></a><a href=\"/front/#\" class=\"cws-social flaticon-social-network\"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ! news popup-->
<script src=\"/front/https://www.youtube.com/player_api\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bootstrap.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/owl.carousel.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.sticky.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/TweenMax.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/cws_parallax.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.fancybox.pack.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.fancybox-media.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/isotope.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/imagesloaded.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/masonry.pkgd.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/jquery.themepunch.tools.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.navigation.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.parallax.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.video.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.actions.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/rs-plugin/js/extensions/revolution.extension.migration.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.validate.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.form.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/script.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/cws_self_vimeo_bg.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/jquery.vimeo.api.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/bg-video/cws_YT_bg.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.tweet.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.scrollTo.min.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/jquery.flexslider.js\"></script>
<script type=\"text/javascript\" src=\"/front/tuner/js/colorpicker.js\"></script>
<script type=\"text/javascript\" src=\"/front/tuner/js/scripts.js\"></script>
<script type=\"text/javascript\" src=\"/front/js/retina.min.js\"></script>
</body>

<!-- Mirrored from html.cwsthemes.com/suntour/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 21:50:52 GMT -->
</html>", "front.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front.html.twig");
    }
}
