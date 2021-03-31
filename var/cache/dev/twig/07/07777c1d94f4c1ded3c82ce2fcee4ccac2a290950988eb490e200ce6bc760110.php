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

/* guide/read.html.twig */
class __TwigTemplate_f4a35258d0fa747f67f5d26fd1caafbad7c2247e4dc6b36feefe7e7dd6c403a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guide/read.html.twig", 1);
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

        echo "Guides disponibles";
        
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
<br><br>
        <h1>Guides disponibles</h1>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.min.js"), "html", null, true);
        echo "\"></script>

        <table class=\"table\" border=\"1\" id=\"tableac\">
            <thead>
            <tr>
                <th><h6>Id</h6></th>
                <th><h6>Voyage</h6></th>
                <th><h6>Nom</h6></th>
                <th><h6>Prenom</h6></th>
                <th><h6>Email</h6></th>
                <th><h6>Num_tel</h6></th>
                <th><h6>Actions</h6></th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"> <br>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guide"], "voyage", [], "any", false, false, false, 28), "Destination", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "numTel", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateGuide", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">Modifier</button></a> <br>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteGuide", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" ><button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">supprimer</button> </a>
                    </td>


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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </tbody>
        </table>
        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addGuide");
        echo "\" ><button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\"> Ajouter un guide </button></a> <br>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "guide/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 71,  188 => 69,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  116 => 26,  112 => 25,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guides disponibles{% endblock %}

{% block body %}
    <center>
<br><br>
        <h1>Guides disponibles</h1>
        <script src=\"{{ asset('js/search.min.js') }}\"></script>

        <table class=\"table\" border=\"1\" id=\"tableac\">
            <thead>
            <tr>
                <th><h6>Id</h6></th>
                <th><h6>Voyage</h6></th>
                <th><h6>Nom</h6></th>
                <th><h6>Prenom</h6></th>
                <th><h6>Email</h6></th>
                <th><h6>Num_tel</h6></th>
                <th><h6>Actions</h6></th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"> <br>
            {% for guide in guides %}
                <tr>
                    <td>{{ guide.id }}</td>
                    <td>{{ guide.voyage.Destination}}</td>
                    <td>{{ guide.nom }}</td>
                    <td>{{ guide.prenom }}</td>
                    <td>{{ guide.email }}</td>
                    <td>{{ guide.numTel }}</td>
                    <td> <a href=\"{{ path('updateGuide',{'id':guide.id }) }}\" > <button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">Modifier</button></a> <br>
                        <a href=\"{{ path('deleteGuide',{'id':guide.id }) }}\" ><button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\">supprimer</button> </a>
                    </td>


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
        <a href=\"{{ path('addGuide') }}\" ><button type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" class=\"btn\"> Ajouter un guide </button></a> <br>
    </center>
{% endblock %}
", "guide/read.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\guide\\read.html.twig");
    }
}
