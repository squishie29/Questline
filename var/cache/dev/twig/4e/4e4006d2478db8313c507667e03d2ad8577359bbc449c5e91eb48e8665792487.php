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

/* voyage/read.html.twig */
class __TwigTemplate_553c62302a7cd9a1011f1b1ff7026fdfab5566f9fc7c74c2e737798ebe3dd309 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voyage/read.html.twig", 1);
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
        echo "    <center>

        <div class=\"navigation\">
            ";
        // line 9
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 9, $this->source); })()));
        echo "
        </div>
        ";
        // line 15
        echo "
        <br><br>

        <h1>Voyages</h1>

        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.min.js"), "html", null, true);
        echo "\"></script>

        <table class=\"table\" id=\"tableac\" border=\"1\">
            <thead>
            <tr>
                <th><h6>Id</h6></th>
                <th><h6>Destination</h6></th>
                <th><h6>Prix</h6></th>
                <th><h6>Periode</h6></th>
                <th><h6>Actions</h6></th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"> <br>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 35
            echo "                <tr>
                    <td> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 37), "html", null, true);
            echo " </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Prix", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Periode", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoyage", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">Modifier</button> </a><br>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteVoyage", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">supprimer</button></a>
                    </td>

                    <td> <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 44), "html", null, true);
            echo "\" height=\"200\" width=\"300\"/> </td>
                </tr>

                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addVoyage");
        echo "\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\"> Ajouter un voyage </button></a> <br>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery-1.11.1.min.js\"> </script>

        <script type=\"text/javascript\" src=\"js/app.js\"></script>

    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voyage/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 78,  195 => 76,  155 => 44,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  126 => 35,  122 => 34,  105 => 20,  98 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voyages{% endblock %}

{% block body %}
    <center>

        <div class=\"navigation\">
            {{ knp_pagination_render(voyages) }}
        </div>
        {#  <form method=\"post\" action=\"{{ path('recherche') }}\"> <h5>Chercher un voyage : </h5> <br>
            <label>Saisir la destination</label> <input type=\"text\" name=\"search\"> <input type=\"submit\" value=\"Recherche\"></form>
        <label><h6>Filtrer les voyages</h6></label>
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Saisir la destination\">#}

        <br><br>

        <h1>Voyages</h1>

        <script src=\"{{ asset('js/search.min.js') }}\"></script>

        <table class=\"table\" id=\"tableac\" border=\"1\">
            <thead>
            <tr>
                <th><h6>Id</h6></th>
                <th><h6>Destination</h6></th>
                <th><h6>Prix</h6></th>
                <th><h6>Periode</h6></th>
                <th><h6>Actions</h6></th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"> <br>
            {% for voyage in voyages %}
                <tr>
                    <td> {{ voyage.id }}</td>
                    <td> {{ voyage.Destination }} </td>
                    <td>{{ voyage.Prix }}</td>
                    <td>{{ voyage.Periode }}</td>
                    <td> <a href=\"{{ path('updateVoyage',{'id':voyage.id }) }}\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">Modifier</button> </a><br>
                        <a href=\"{{ path('deleteVoyage',{'id':voyage.id }) }}\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">supprimer</button></a>
                    </td>

                    <td> <img src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.Destination}}\" height=\"200\" width=\"300\"/> </td>
                </tr>

                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"{{ path('addVoyage') }}\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\"> Ajouter un voyage </button></a> <br>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery-1.11.1.min.js\"> </script>

        <script type=\"text/javascript\" src=\"js/app.js\"></script>

    </center>

{% endblock %}
", "voyage/read.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\voyage\\read.html.twig");
    }
}
