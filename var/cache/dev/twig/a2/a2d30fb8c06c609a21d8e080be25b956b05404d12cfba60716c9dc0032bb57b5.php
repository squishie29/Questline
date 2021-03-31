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

/* destination/mapsaziz.html.twig */
class __TwigTemplate_5604999c6532f757cba20bdd04ac2c345aa9cac42cd2cefde498332dd0af1f21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination/mapsaziz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination/mapsaziz.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "destination/mapsaziz.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

    <script type=\"text/javascript\">
        window.onload = function() {
            L.mapquest.key = 'aiixgMlcAIhJAMNKHGjmjBMMmSVGy1NG';

            var map = L.mapquest.map('map', {
                center: [0, 0],
                layers: L.mapquest.tileLayer('map'),
                zoom: 14
            });

            L.mapquest.geocoding().geocode('";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["destt"]) || array_key_exists("destt", $context) ? $context["destt"] : (function () { throw new RuntimeError('Variable "destt" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "');
        }
    </script>
    <div id=\"map\" style=\"width: 500px; height: 400px;\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "destination/mapsaziz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}
    <script src=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css\"/>

    <script type=\"text/javascript\">
        window.onload = function() {
            L.mapquest.key = 'aiixgMlcAIhJAMNKHGjmjBMMmSVGy1NG';

            var map = L.mapquest.map('map', {
                center: [0, 0],
                layers: L.mapquest.tileLayer('map'),
                zoom: 14
            });

            L.mapquest.geocoding().geocode('{{destt[0].nom}}');
        }
    </script>
    <div id=\"map\" style=\"width: 500px; height: 400px;\"></div>
{% endblock %}", "destination/mapsaziz.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\destination\\mapsaziz.html.twig");
    }
}
