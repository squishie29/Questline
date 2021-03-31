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

/* destination/index.html.twig */
class __TwigTemplate_82d7d2f25d65ba8037175e159d8cdf3b9de5de66ad85baf90c8a077865114898 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "destination/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "destination/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "destination";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class =\"contrainer\">
        <div class =\"panel panel-primary\">
            <div class =\"panel-heading\">
            <i class=\"icon_menu\"></i>Liste destination
            </div>

            <div class =\"panel-body\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo "
        <button class=\"btn\">";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 19, $this->source); })()), "Rechercher")) : ("Rechercher")), "html", null, true);
        echo "</button>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        <table class=\"table table-condensed\">

            <thead>
                <tr>
                <th>Id_dest</th>
                <th>Date</th>
                <th>Nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["destination"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["destination"], "date", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["destination"], "date", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["destination"], "Nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                  <td>
                   <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm\">Open</button>
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split\" Id=\"dropdownMenuReference1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg>
                                                    </button>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuReference1\">
                                                      <a class=\"dropdown-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destination_show", ["id" => twig_get_attribute($this->env, $this->source, $context["destination"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Afficher</a>
                                                      <a class=\"dropdown-item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destination_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["destination"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Modifier</a>
                                                     
                                                      
                                                  </div> 
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
 
    <a type=\"button\" class=\"btn btn-dark btn-sm\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destination_new");
        echo "\" > Ajouter </a>
</center>
<div class=\"pagination\">
 
            ";
        // line 63
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 63, $this->source); })()));
        echo "
        </div>
      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "destination/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 63,  183 => 59,  178 => 56,  169 => 52,  157 => 45,  153 => 44,  142 => 36,  138 => 35,  134 => 34,  131 => 33,  126 => 32,  111 => 20,  107 => 19,  103 => 18,  98 => 16,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}

{% block title %}destination{% endblock %}

{% block body %}

<div class =\"contrainer\">
        <div class =\"panel panel-primary\">
            <div class =\"panel-heading\">
            <i class=\"icon_menu\"></i>Liste destination
            </div>

            <div class =\"panel-body\">
            {{ form_start(form)  }}

        {{ form_widget(form)  }}
        <button class=\"btn\">{{ button_label|default('Rechercher') }}</button>
        {{form_end(form) }}
        <table class=\"table table-condensed\">

            <thead>
                <tr>
                <th>Id_dest</th>
                <th>Date</th>
                <th>Nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for destination in destinations %}
            <tr>
                <td>{{ destination.id }}</td>
                <td>{{ destination.date ? destination.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ destination.Nom }}</td>
                  <td>
                   <div class=\"btn-group\">
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm\">Open</button>
                                                    <button type=\"button\" class=\"btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split\" Id=\"dropdownMenuReference1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-reference=\"parent\">
                                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg>
                                                    </button>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuReference1\">
                                                      <a class=\"dropdown-item\" href=\"{{ path('destination_show', {'id': destination.id}) }}\">Afficher</a>
                                                      <a class=\"dropdown-item\" href=\"{{ path('destination_edit', {'id': destination.id}) }}\">Modifier</a>
                                                     
                                                      
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
 
    <a type=\"button\" class=\"btn btn-dark btn-sm\" href=\"{{ path('destination_new') }}\" > Ajouter </a>
</center>
<div class=\"pagination\">
 
            {{ knp_pagination_render(destinations) }}
        </div>
      
{% endblock %}
", "destination/index.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\destination\\index.html.twig");
    }
}
