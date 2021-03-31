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

/* front/readV.html.twig */
class __TwigTemplate_027660cab43799c7598dbef9e35d0d7fc225562398e721970ba86096cfd0a4c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/readV.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/readV.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/readV.html.twig", 1);
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

        echo "Voyages";
        
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
        echo "    <div class=\"navigation\">
        ";
        // line 7
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 7, $this->source); })()));
        echo "
    </div>
        <center>

        <h1>Voyages</h1>

        <table class=\"table\">
            <tbody>
            <tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 17
            echo "
                <td>
                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 19), "html", null, true);
            echo "\" height=\"350\" width=\"300\"/><br></li>
                    <h6>Destination : <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 20), "html", null, true);
            echo "</span> </h6>
                    <h6>Prix :";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Prix", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
                    <h6>Période :";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Periode", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>

                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                    <button class=\"btn btn-success float-right fas fa-shopping-cart\" > Réserver</button>
                    </a>
                </td>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tr>
            </tbody>
        </table>
<br>
            <html>
            <head>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 37
            echo "                <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
                <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

                <script type=\"text/javascript\">
                    window.onload = function() {
                        L.mapquest.key = 'GtMAuVAD2yGyDJ9gKa56B0qvGfaKiTaX';

                        var map = L.mapquest.map('map', {
                            center: [0, 0],
                            layers: L.mapquest.tileLayer('map'),
                            zoom: 14
                        });

                        L.mapquest.geocoding().geocode('";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 50), "html", null, true);
            echo "');
                    }
                </script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </head>

            <body style=\"border: 0; margin: 0;\">
            <div id=\"map\" style=\"width: 100%; height: 530px;\"></div>

            </body>
            </html>

    </center>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/readV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  169 => 50,  154 => 37,  150 => 36,  142 => 30,  130 => 24,  125 => 22,  121 => 21,  117 => 20,  111 => 19,  107 => 17,  103 => 16,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Voyages{% endblock %}

{% block body %}
    <div class=\"navigation\">
        {{ knp_pagination_render(voyages) }}
    </div>
        <center>

        <h1>Voyages</h1>

        <table class=\"table\">
            <tbody>
            <tr>
            {% for voyage in voyages %}

                <td>
                    <img src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.Destination}}\" height=\"350\" width=\"300\"/><br></li>
                    <h6>Destination : <span>{{ voyage.Destination }}</span> </h6>
                    <h6>Prix :{{ voyage.Prix }}</h6>
                    <h6>Période :{{ voyage.Periode }}</h6>

                    <a href=\"{{ path('addPanier',{'id':voyage.id }) }}\">
                    <button class=\"btn btn-success float-right fas fa-shopping-cart\" > Réserver</button>
                    </a>
                </td>

            {% endfor %}
            </tr>
            </tbody>
        </table>
<br>
            <html>
            <head>
                {% for voyage in voyages %}
                <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
                <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

                <script type=\"text/javascript\">
                    window.onload = function() {
                        L.mapquest.key = 'GtMAuVAD2yGyDJ9gKa56B0qvGfaKiTaX';

                        var map = L.mapquest.map('map', {
                            center: [0, 0],
                            layers: L.mapquest.tileLayer('map'),
                            zoom: 14
                        });

                        L.mapquest.geocoding().geocode('{{ voyage.Destination }}');
                    }
                </script>
                {% endfor %}
            </head>

            <body style=\"border: 0; margin: 0;\">
            <div id=\"map\" style=\"width: 100%; height: 530px;\"></div>

            </body>
            </html>

    </center>



{% endblock %}

", "front/readV.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\readV.html.twig");
    }
}
