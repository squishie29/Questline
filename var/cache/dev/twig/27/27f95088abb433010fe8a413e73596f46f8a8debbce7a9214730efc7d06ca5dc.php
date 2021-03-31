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

/* ReservationVol/index.html.twig */
class __TwigTemplate_743dad9e42e00837e8544691b39a2a49f748ef4cf3308d89ce47d6da9e09262a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "ReservationVol/index.html.twig", 1);
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

        echo "ReservationVol index";
        
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
        echo "
    <center><table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre_personne</th>
                <th>Date_res</th>
                <th>Id vols</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ReservationVols"]) || array_key_exists("ReservationVols", $context) ? $context["ReservationVols"] : (function () { throw new RuntimeError('Variable "ReservationVols" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ReservationVol"]) {
            // line 19
            echo "            <tr>
            
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "getNombrePersonne", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            ((twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "getDateRes", [], "method", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "getDateRes", [], "method", false, false, false, 23), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "getVols", [], "method", false, false, false, 24), "getId", [], "method", false, false, false, 24), "html", null, true);
            echo " </td>
                
                <td>
                   <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm\">Open</button>
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split\" id=\"dropdownMenuReference1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg>
                                                    </button>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuReference1\">
                                                      <a class=\"dropdown-item\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReservationVol_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Afficher</a>
                                                      <a class=\"dropdown-item\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReservationVol_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ReservationVol"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Modifier</a>
                                                     
                                                      
                                                  </div> 
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ReservationVol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
<center><a type=\"submit\" class=\"btn btn-dark btn-sm\" class=\"btn\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReservationVol_pdf");
        echo "\">Imprimer</a>
</center><br>
    <a type=\"button\" class=\"btn btn-dark btn-sm\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReservationVol_new");
        echo "\" > Ajouter </a>
</center>
      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ReservationVol/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  164 => 47,  160 => 45,  151 => 41,  139 => 34,  135 => 33,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}ReservationVol index{% endblock %}

{% block body %}

    <center><table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre_personne</th>
                <th>Date_res</th>
                <th>Id vols</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ReservationVol in ReservationVols %}
            <tr>
            
                <td>{{ReservationVol.id}}</td>
                <td>{{ReservationVol.getNombrePersonne()}}</td>
                <td>{{ReservationVol.getDateRes() ? ReservationVol.getDateRes()|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ReservationVol.getVols().getId()}} </td>
                
                <td>
                   <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm\">Open</button>
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split\" id=\"dropdownMenuReference1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg>
                                                    </button>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuReference1\">
                                                      <a class=\"dropdown-item\" href=\"{{ path('ReservationVol_show', {'id': ReservationVol.id}) }}\">Afficher</a>
                                                      <a class=\"dropdown-item\" href=\"{{ path('ReservationVol_edit', {'id': ReservationVol.id}) }}\">Modifier</a>
                                                     
                                                      
                                                  </div> 
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<center><a type=\"submit\" class=\"btn btn-dark btn-sm\" class=\"btn\" href=\"{{ path('ReservationVol_pdf') }}\">Imprimer</a>
</center><br>
    <a type=\"button\" class=\"btn btn-dark btn-sm\" href=\"{{ path('ReservationVol_new') }}\" > Ajouter </a>
</center>
      
{% endblock %}
", "ReservationVol/index.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\ReservationVol\\index.html.twig");
    }
}
