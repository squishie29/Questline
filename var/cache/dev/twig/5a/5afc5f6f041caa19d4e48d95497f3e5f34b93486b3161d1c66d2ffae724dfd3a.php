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

/* event/evenementsFront.html.twig */
class __TwigTemplate_f67cdeca9191de34599f985a64d9a3e3cfd9552e48c5a0837697cc05d4486ed7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/evenementsFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/evenementsFront.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/evenementsFront.html.twig", 1);
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
        echo "


    <div class=\"row\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 10
            echo "        <table class=\"table\">
        <div class=\"col-sm-6\">

            <div class=\"card\" style=\"...\">

                <div class=\"container\">
                    <img class=\"card-img-top\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"Cinque Terre\" width=\"500\" height=\"700\">

                </div>


                <div class=\"card text-center\" style=\"width: 18rem;\">
                  <p class=\"card-subtitle mb-2 text-muted\"> nom event:";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                    <p class=\"text-md-left\"> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "Categorie", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                     <p class=\"card-footer\"> <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maps", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\" id=\"destination\">destination:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "destination", [], "any", false, false, false, 24), "html", null, true);
            echo "</button></a>
                    <p class=\"card-text\">prix: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>

                    ";
            // line 27
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "nbRestant", [], "any", false, false, false, 27), 0))) {
                // line 28
                echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                           <h5><p class=\"text-danger\"> Complet</p></h5>
                        </div>

                    ";
            } else {
                // line 33
                echo "                        <label>Nombre des places restant</label>
                        <p class=\"success\"> ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nbRestant", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserverEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Reserver</a>
                    ";
            }
            // line 37
            echo "
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/evenementsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  136 => 37,  131 => 35,  127 => 34,  124 => 33,  117 => 28,  115 => 27,  110 => 25,  104 => 24,  100 => 23,  96 => 22,  87 => 16,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}



    <div class=\"row\">

        {% for e in evenements %}
        <table class=\"table\">
        <div class=\"col-sm-6\">

            <div class=\"card\" style=\"...\">

                <div class=\"container\">
                    <img class=\"card-img-top\" src=\"{{ asset(\"/uploads/#{e.image}\") }}\" alt=\"Cinque Terre\" width=\"500\" height=\"700\">

                </div>


                <div class=\"card text-center\" style=\"width: 18rem;\">
                  <p class=\"card-subtitle mb-2 text-muted\"> nom event:{{ e.nom }}</p>
                    <p class=\"text-md-left\"> {{ e.Categorie.description }}</p>
                     <p class=\"card-footer\"> <a href=\"{{ path('maps', {'id': e.id}) }}\"><button type=\"button\" class=\"btn btn-success\" id=\"destination\">destination:{{ e.destination }}</button></a>
                    <p class=\"card-text\">prix: {{ e.prix }}</p>

                    {% if e.nbRestant ==0 %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                           <h5><p class=\"text-danger\"> Complet</p></h5>
                        </div>

                    {% else %}
                        <label>Nombre des places restant</label>
                        <p class=\"success\"> {{ e.nbRestant }}</p>
                        <a href=\"{{ path('reserverEvent',{'id':e.id}) }}\" class=\"btn btn-info\">Reserver</a>
                    {% endif %}

                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    </table>


{% endblock %}
", "event/evenementsFront.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\event\\evenementsFront.html.twig");
    }
}
