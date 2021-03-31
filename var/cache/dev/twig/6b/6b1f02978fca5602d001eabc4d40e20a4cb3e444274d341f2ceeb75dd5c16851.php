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

/* front/details.html.twig */
class __TwigTemplate_0ea0a777daf8584a8dbb86ab8cd98d8e1d84de496c4733863e6910390cc642a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/details.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FrontController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

    <script type=\"text/javascript\">
        window.onload = function() {
            L.mapquest.key = 'eXp9wRtoKlG1COwGgDy3TWPUHMm6GwGL';

            var map = L.mapquest.map('map', {
                center: [0, 0],
                layers: L.mapquest.tileLayer('map'),
                zoom: 14
            });

            L.mapquest.geocoding().geocode('";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 19, $this->source); })()), "adress", [], "any", false, false, false, 19), "html", null, true);
        echo "');
        }
    </script>


    <div class=\"content-body\">
        <section class=\"page-section pt-0 pb-50\">
            <div class=\"container\">
                <div class=\"menu-widget with-switch mt-30 mb-30\">
                    <ul class=\"magic-line\">
                        <li class=\"current_item\"><a href=\"#overview\" class=\"scrollto\">Overview</a></li>
                        <li><a href=\"#prices\" class=\"scrollto\">Prices</a></li>
                        <li><a href=\"#location\" class=\"scrollto\">Location</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"container\">
                <div id=\"flex-slider\" class=\"flexslider\">
                    <ul class=\"slides\">


                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 41
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, $context["gallery"], "hotel_id", [], "any", false, false, false, 41)))) {
                // line 42
                echo "                            <li><img src=\"/gallery/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "imgpath", [], "any", false, false, false, 42), "html", null, true);
                echo "\" alt></li>
                            ";
            }
            // line 44
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </ul>
                </div>
                <div id=\"flex-carousel\" class=\"flexslider\">
                    <ul class=\"slides\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 51
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, $context["gallery"], "hotel_id", [], "any", false, false, false, 51)))) {
                // line 52
                echo "                                <li><img src=\"/gallery/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "imgpath", [], "any", false, false, false, 52), "html", null, true);
                echo "\" alt></li>
                            ";
            }
            // line 54
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </ul>
                </div>
            </div>
            <div class=\"container mt-30\">
                <h4 class=\"mb-20\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
        echo "</h4>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p class=\"mb-15\">";
        // line 62
        echo twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62);
        echo "</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-gray-3 p-30-40\">
                            <ul class=\"style-1 mb-0\">
                                 ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 68
            echo "                                     ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, $context["room"], "idHotel", [], "any", false, false, false, 68)))) {
                // line 69
                echo "                                         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 70
                    echo "                                                 ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "id2", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, $context["option"], "room_id", [], "any", false, false, false, 70)))) {
                        // line 71
                        echo "                                                     <li> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 71), "html", null, true);
                        echo "</li>
                                                     <br>
                                                 ";
                    }
                    // line 74
                    echo "                                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
                                     ";
            }
            // line 77
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section prices-->
            <div id=\"prices\" class=\"container mb-50 mt-40\">
                <div class=\"search-hotels room-search pattern\">
                    <div class=\"search-room-title\">
                        <h5>Choose your room</h5>
                    </div>
                    <div class=\"tours-container\">
                        <div class=\"tours-box\">
                            <div class=\"tours-search mb-20\">
                                <form method=\"post\" class=\"form search divider-skew\">
                                    <div class=\"search-wrap\">
                                        <input type=\"text\" placeholder=\"Destination\" class=\"form-control search-field\"><i class=\"flaticon-suntour-map search-icon\"></i>
                                    </div>
                                </form>
                                <div class=\"tours-calendar divider-skew\">
                                    <input placeholder=\"Depart date\" type=\"text\" onfocus=\"(this.type='date')\" onblur=\"(this.type='text')\" class=\"calendar-default textbox-n\"><i class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                </div>
                                <div class=\"tours-calendar divider-skew\">
                                    <input placeholder=\"Return date\" type=\"text\" onfocus=\"(this.type='date')\" onblur=\"(this.type='text')\" class=\"calendar-default textbox-n\"><i class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                </div>
                                <div class=\"selection-box divider-skew\"><i class=\"flaticon-suntour-adult box-icon\"></i>
                                    <select>
                                        <option>Adult</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"selection-box divider-skew\"><i class=\"flaticon-suntour-children box-icon\"></i>
                                    <select>
                                        <option>Child</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"selection-box\"><i class=\"flaticon-suntour-bed box-icon\"></i>
                                    <select>
                                        <option>Room</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"button-search\">GO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"room-table\">
                    <table class=\"table alt-2\">
                        <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Max.</th>
                            <th>Options</th>
                            <th>Today's price</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 149
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 149, $this->source); })()), "name", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, $context["room"], "idHotel", [], "any", false, false, false, 149)))) {
                // line 150
                echo "                        <tr>

                            <td>
                                <h6>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "type", [], "any", false, false, false, 153), "html", null, true);
                echo "</h6>

                            </td>
                            <td>
                                <div class=\"table-icon\">
                                    ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["room"], "nbPersonnes", [], "any", false, false, false, 158)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 159
                    echo "                                    <i class=\"flaticon-people\"></i>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                                </div>


                            </td>
                            <td>

                                <ul class=\"style-1\">
                            ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 168, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 169
                    echo "                                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["room"], "id2", [], "any", false, false, false, 169), twig_get_attribute($this->env, $this->source, $context["option"], "room_id", [], "any", false, false, false, 169)))) {
                        // line 170
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 170), "html", null, true);
                        echo "</li>
                                        <br>
                                    ";
                    }
                    // line 173
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "

                                </ul>

                            </td>
                            <td class=\"room-price\">";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "prix", [], "any", false, false, false, 179), "html", null, true);
                echo " TND</td>

                             <td> <p>";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 181), "html", null, true);
                echo "</p></td>
                        </tr>
                        ";
            }
            // line 184
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
                        </tbody>

                    </table>
                    <div style=\"display:flex;justify-content:space-around;margin-top: 10px;\">
                        <a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservationNew", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
        echo "\" class=\"cws-button alt \" style=\"width: 20vw;\">Book now 1</a>
                    </div>
                </div>
            </div>
            <!-- section location-->
            <div id=\"location\" class=\"container mb-50\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4 class=\"trans-uppercase mb-10\">Location</h4>
                        <div class=\"cws_divider mb-30\"></div>
                        <div id=\"map\" style=\"width: 100%; height: 530px;\"></div>
                        <ul class=\"icon inline mt-20\">
                            <li> <a href=\"#\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 202, $this->source); })()), "adress", [], "any", false, false, false, 202), "html", null, true);
        echo "<i class=\"flaticon-suntour-map\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 202,  393 => 190,  386 => 185,  380 => 184,  374 => 181,  369 => 179,  362 => 174,  356 => 173,  349 => 170,  346 => 169,  342 => 168,  333 => 161,  326 => 159,  322 => 158,  314 => 153,  309 => 150,  306 => 149,  302 => 148,  230 => 78,  224 => 77,  220 => 75,  214 => 74,  207 => 71,  204 => 70,  199 => 69,  196 => 68,  192 => 67,  184 => 62,  178 => 59,  172 => 55,  166 => 54,  160 => 52,  157 => 51,  153 => 50,  147 => 46,  140 => 44,  134 => 42,  131 => 41,  127 => 40,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Hello FrontController!{% endblock %}

{% block body %}
    <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

    <script type=\"text/javascript\">
        window.onload = function() {
            L.mapquest.key = 'eXp9wRtoKlG1COwGgDy3TWPUHMm6GwGL';

            var map = L.mapquest.map('map', {
                center: [0, 0],
                layers: L.mapquest.tileLayer('map'),
                zoom: 14
            });

            L.mapquest.geocoding().geocode('{{ hotel.adress}}');
        }
    </script>


    <div class=\"content-body\">
        <section class=\"page-section pt-0 pb-50\">
            <div class=\"container\">
                <div class=\"menu-widget with-switch mt-30 mb-30\">
                    <ul class=\"magic-line\">
                        <li class=\"current_item\"><a href=\"#overview\" class=\"scrollto\">Overview</a></li>
                        <li><a href=\"#prices\" class=\"scrollto\">Prices</a></li>
                        <li><a href=\"#location\" class=\"scrollto\">Location</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"container\">
                <div id=\"flex-slider\" class=\"flexslider\">
                    <ul class=\"slides\">


                        {% for gallery in galleries %}
                            {% if hotel.name==gallery.hotel_id %}
                            <li><img src=\"/gallery/{{ gallery.imgpath }}\" alt></li>
                            {% endif %}

                        {% endfor %}
                    </ul>
                </div>
                <div id=\"flex-carousel\" class=\"flexslider\">
                    <ul class=\"slides\">
                        {% for gallery in galleries %}
                            {% if hotel.name==gallery.hotel_id %}
                                <li><img src=\"/gallery/{{ gallery.imgpath }}\" alt></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <div class=\"container mt-30\">
                <h4 class=\"mb-20\">{{ hotel.name }}</h4>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p class=\"mb-15\">{{ hotel.description|raw }}</p>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"bg-gray-3 p-30-40\">
                            <ul class=\"style-1 mb-0\">
                                 {% for room in rooms %}
                                     {% if hotel.name==room.idHotel %}
                                         {% for option in options %}
                                                 {% if room.id2==option.room_id %}
                                                     <li> {{ option.description}}</li>
                                                     <br>
                                                 {% endif %}
                                             {% endfor %}

                                     {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section prices-->
            <div id=\"prices\" class=\"container mb-50 mt-40\">
                <div class=\"search-hotels room-search pattern\">
                    <div class=\"search-room-title\">
                        <h5>Choose your room</h5>
                    </div>
                    <div class=\"tours-container\">
                        <div class=\"tours-box\">
                            <div class=\"tours-search mb-20\">
                                <form method=\"post\" class=\"form search divider-skew\">
                                    <div class=\"search-wrap\">
                                        <input type=\"text\" placeholder=\"Destination\" class=\"form-control search-field\"><i class=\"flaticon-suntour-map search-icon\"></i>
                                    </div>
                                </form>
                                <div class=\"tours-calendar divider-skew\">
                                    <input placeholder=\"Depart date\" type=\"text\" onfocus=\"(this.type='date')\" onblur=\"(this.type='text')\" class=\"calendar-default textbox-n\"><i class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                </div>
                                <div class=\"tours-calendar divider-skew\">
                                    <input placeholder=\"Return date\" type=\"text\" onfocus=\"(this.type='date')\" onblur=\"(this.type='text')\" class=\"calendar-default textbox-n\"><i class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                </div>
                                <div class=\"selection-box divider-skew\"><i class=\"flaticon-suntour-adult box-icon\"></i>
                                    <select>
                                        <option>Adult</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"selection-box divider-skew\"><i class=\"flaticon-suntour-children box-icon\"></i>
                                    <select>
                                        <option>Child</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"selection-box\"><i class=\"flaticon-suntour-bed box-icon\"></i>
                                    <select>
                                        <option>Room</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class=\"button-search\">GO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"room-table\">
                    <table class=\"table alt-2\">
                        <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Max.</th>
                            <th>Options</th>
                            <th>Today's price</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for room in rooms %}
                        {% if hotel.name==room.idHotel %}
                        <tr>

                            <td>
                                <h6>{{ room.type }}</h6>

                            </td>
                            <td>
                                <div class=\"table-icon\">
                                    {% for i in 1..room.nbPersonnes %}
                                    <i class=\"flaticon-people\"></i>
                                        {% endfor %}
                                </div>


                            </td>
                            <td>

                                <ul class=\"style-1\">
                            {% for option in options %}
                                    {% if room.id2==option.room_id %}
                                        <li>{{ option.description}}</li>
                                        <br>
                                    {% endif %}
                                {% endfor %}


                                </ul>

                            </td>
                            <td class=\"room-price\">{{ room.prix }} TND</td>

                             <td> <p>{{ room.description }}</p></td>
                        </tr>
                        {% endif %}
                        {% endfor %}

                        </tbody>

                    </table>
                    <div style=\"display:flex;justify-content:space-around;margin-top: 10px;\">
                        <a href=\"{{ path('reservationNew', {'id': hotel.id}) }}\" class=\"cws-button alt \" style=\"width: 20vw;\">Book now 1</a>
                    </div>
                </div>
            </div>
            <!-- section location-->
            <div id=\"location\" class=\"container mb-50\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4 class=\"trans-uppercase mb-10\">Location</h4>
                        <div class=\"cws_divider mb-30\"></div>
                        <div id=\"map\" style=\"width: 100%; height: 530px;\"></div>
                        <ul class=\"icon inline mt-20\">
                            <li> <a href=\"#\">{{ hotel.adress}}<i class=\"flaticon-suntour-map\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
    </div>
{% endblock %}", "front/details.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\details.html.twig");
    }
}
