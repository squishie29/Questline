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

/* ReservationVol/show.html.twig */
class __TwigTemplate_dda2bd8b4f19f57c1f60db1670c9e0797319f3e584c8e3f2e89153877f01fdf4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/show.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "ReservationVol/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationVol";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>ReservationVol</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre_personne</th>
                <th>Date_res</th>
                <th>Id vols</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 20, $this->source); })()), "getNombrePersonne", [], "method", false, false, false, 20), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 21, $this->source); })()), "getDateRes", [], "method", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 21, $this->source); })()), "getDateRes", [], "method", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 22, $this->source); })()), "getVols", [], "method", false, false, false, 22), "getId", [], "method", false, false, false, 22), "html", null, true);
        echo " </td>
                
                
            </tr>
        </tbody>
    </table>
";
        // line 28
        echo twig_include($this->env, $context, "ReservationVol/_delete_form.html.twig");
        echo "
    <center><a type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReservationVol_index");
        echo "\">back to list</a>
</center>

    
    
                             
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ReservationVol/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  125 => 28,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block title %}ReservationVol{% endblock %}

{% block body %}
    <h1>ReservationVol</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre_personne</th>
                <th>Date_res</th>
                <th>Id vols</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ReservationVols.id}}</td>
                <td>{{ReservationVols.getNombrePersonne()}}</td>
                <td>{{ReservationVols.getDateRes() ? ReservationVols.getDateRes()|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ReservationVols.getVols().getId()}} </td>
                
                
            </tr>
        </tbody>
    </table>
{{ include('ReservationVol/_delete_form.html.twig') }}
    <center><a type=\"submit\" class=\"btn btn-primary mt-3\" class=\"btn\" href=\"{{ path('ReservationVol_index') }}\">back to list</a>
</center>

    
    
                             
{% endblock %}
", "ReservationVol/show.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\ReservationVol\\show.html.twig");
    }
}
