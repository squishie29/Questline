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

/* front/hotels.html.twig */
class __TwigTemplate_732f7fe74b592fb3ced09960778b31acdce7eb6e90336adc03757ac7850208e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/hotels.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/hotels.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/hotels.html.twig", 1);
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
        echo "    <div class=\"content-body\">
        <div class=\"container page\">
            <div class=\"row\">


                <div class=\"col-md-12\" id=\"t\">
                    <!-- Recomended item-->
                    <input type=\"text\" id=\"search\" class=\"form-control \" placeholder=\"Search\" style=\"width: 50%;margin: auto;margin-bottom:10px;border: #ffc107 1px solid;text-align: center;\">

                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 16
            echo "                    <div class=\"recom-item border\" id=\"all\">
                        <div class=\"recom-media\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_shows", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
                                <div class=\"pic\" ><img style=\"height: 50vh;\" src=\"/front/pic/tours/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "photo", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt></div></a>
                            <div class=\"location\"><i class=\"flaticon-suntour-map\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "adress", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                        </div>
                        <!-- Recomended Content-->
                        <div class=\"recom-item-body\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_shows", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
                                <h6 class=\"blog-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h6></a>
                            <div class=\"stars stars-4\"></div>




                            <p class=\"mb-30\"> ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 29);
            echo " </p><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_shows", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"recom-button\">Read more</a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_shows", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"cws-button small alt\">Book now</a>
                            <div class=\"action font-2\">20%</div>
                        </div>
                        <!-- Recomended Image-->
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    <div id=\"search\">
                    </div>
                </div>
            </div>

        </div>
        <!-- call out section-->
        <section class=\"page-section pt-90 pb-80 bg-main pattern relative\">
            <div class=\"container\">
                <div class=\"call-out-box clearfix with-icon\">
                    <div class=\"row call-out-wrap\">
                        <div class=\"col-md-5\">
                            <h6 class=\"title-section-top gray font-4\">subscribe today</h6>
                            <h2 class=\"title-section alt-2\"><span>Get</span> Latest offers</h2><i class=\"flaticon-suntour-email call-out-icon\"></i>
                        </div>
                        <div class=\"col-md-7\">
                            <form action=\"http://html.cwsthemes.com/suntour/php/contacts-process.php\" method=\"post\" class=\"form contact-form mt-10\">
                                <div class=\"input-container\">
                                    <input type=\"text\" placeholder=\"Enter your email\" value=\"\" name=\"email\" class=\"newsletter-field mb-0 form-row\"><i class=\"flaticon-suntour-email icon-left\"></i>
                                    <button type=\"submit\" class=\"subscribe-submit\"><i class=\"flaticon-suntour-arrow icon-right\"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ! call out section\t-->
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchHotelx");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('div#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t div#all').hide();
                                \$('div#search').append('<div class=\"recom-item border\"><div class=\"recom-media\">' +
                                    '<a href=\"/hotels/'+obj.id+'\"><div class=\"pic\" ><img style=\"height: 50vh;\" src=\"/front/pic/tours/'+obj.photo+'\" alt></div></a><div class=\"location\"><i class=\"flaticon-suntour-map\"></i>'+obj.adress+'</div></div> <div class=\"recom-item-body\"><a href=\"/hotels/'+obj.id+'\"><h6 class=\"blog-title\">'+obj.name+'</h6></a><div class=\"stars stars-4\"></div><p class=\"mb-30\">'+obj.description+'</p><a href=\"/hotels/'+obj.id+'\"class=\"recom-button\">Read more</a><a href=\"/hotels/'+obj.id+'\"class=\"cws-button small alt\">Book now</a><div class=\"action font-2\">20%</div></div>       </div></div>');
                            });
                        }
                        else
                        {
                            \$('#t div#all').show();
                            \$('div#search').empty();
                            \$('div#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/hotels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 74,  149 => 35,  133 => 29,  124 => 23,  120 => 22,  114 => 19,  110 => 18,  106 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Hello FrontController!{% endblock %}

{% block body %}
    <div class=\"content-body\">
        <div class=\"container page\">
            <div class=\"row\">


                <div class=\"col-md-12\" id=\"t\">
                    <!-- Recomended item-->
                    <input type=\"text\" id=\"search\" class=\"form-control \" placeholder=\"Search\" style=\"width: 50%;margin: auto;margin-bottom:10px;border: #ffc107 1px solid;text-align: center;\">

                    {% for hotel in hotels %}
                    <div class=\"recom-item border\" id=\"all\">
                        <div class=\"recom-media\"><a href=\"{{ path('hotel_shows', {'id': hotel.id}) }}\">
                                <div class=\"pic\" ><img style=\"height: 50vh;\" src=\"/front/pic/tours/{{ hotel.photo }}\" alt></div></a>
                            <div class=\"location\"><i class=\"flaticon-suntour-map\"></i> {{ hotel.adress }}</div>
                        </div>
                        <!-- Recomended Content-->
                        <div class=\"recom-item-body\"><a href=\"{{ path('hotel_shows', {'id': hotel.id}) }}\">
                                <h6 class=\"blog-title\">{{ hotel.name }}</h6></a>
                            <div class=\"stars stars-4\"></div>




                            <p class=\"mb-30\"> {{ hotel.description|raw }} </p><a href=\"{{ path('hotel_shows', {'id': hotel.id}) }}\" class=\"recom-button\">Read more</a><a href=\"{{ path('hotel_shows', {'id': hotel.id}) }}\" class=\"cws-button small alt\">Book now</a>
                            <div class=\"action font-2\">20%</div>
                        </div>
                        <!-- Recomended Image-->
                    </div>
                    {% endfor %}
                    <div id=\"search\">
                    </div>
                </div>
            </div>

        </div>
        <!-- call out section-->
        <section class=\"page-section pt-90 pb-80 bg-main pattern relative\">
            <div class=\"container\">
                <div class=\"call-out-box clearfix with-icon\">
                    <div class=\"row call-out-wrap\">
                        <div class=\"col-md-5\">
                            <h6 class=\"title-section-top gray font-4\">subscribe today</h6>
                            <h2 class=\"title-section alt-2\"><span>Get</span> Latest offers</h2><i class=\"flaticon-suntour-email call-out-icon\"></i>
                        </div>
                        <div class=\"col-md-7\">
                            <form action=\"http://html.cwsthemes.com/suntour/php/contacts-process.php\" method=\"post\" class=\"form contact-form mt-10\">
                                <div class=\"input-container\">
                                    <input type=\"text\" placeholder=\"Enter your email\" value=\"\" name=\"email\" class=\"newsletter-field mb-0 form-row\"><i class=\"flaticon-suntour-email icon-left\"></i>
                                    <button type=\"submit\" class=\"subscribe-submit\"><i class=\"flaticon-suntour-arrow icon-right\"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ! call out section\t-->
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('searchHotelx') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('div#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t div#all').hide();
                                \$('div#search').append('<div class=\"recom-item border\"><div class=\"recom-media\">' +
                                    '<a href=\"/hotels/'+obj.id+'\"><div class=\"pic\" ><img style=\"height: 50vh;\" src=\"/front/pic/tours/'+obj.photo+'\" alt></div></a><div class=\"location\"><i class=\"flaticon-suntour-map\"></i>'+obj.adress+'</div></div> <div class=\"recom-item-body\"><a href=\"/hotels/'+obj.id+'\"><h6 class=\"blog-title\">'+obj.name+'</h6></a><div class=\"stars stars-4\"></div><p class=\"mb-30\">'+obj.description+'</p><a href=\"/hotels/'+obj.id+'\"class=\"recom-button\">Read more</a><a href=\"/hotels/'+obj.id+'\"class=\"cws-button small alt\">Book now</a><div class=\"action font-2\">20%</div></div>       </div></div>');
                            });
                        }
                        else
                        {
                            \$('#t div#all').show();
                            \$('div#search').empty();
                            \$('div#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
", "front/hotels.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\hotels.html.twig");
    }
}
