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

/* front/ajoutUtil.html.twig */
class __TwigTemplate_2cdec3ef1f30ed232fe21dd596a680d984cc65782ad86c079f53403a96dcd9c9 extends Template
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
        // line 2
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/ajoutUtil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/ajoutUtil.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/ajoutUtil.html.twig", 2);
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

        echo "New Utilisateur";
        
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
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()));
        echo "
    <style>
        .hidden3
        {
            display: none;
        }

    </style>
<div class=\"container\">
        <h4 class=\"trans-uppercase mb-10\">Sign in ! </h4>
        <div class=\" mb-30\"></div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "review-content"]]);
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "mdp", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
    <div class=\"hidden3\">
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "roles", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "hidden3"]]);
        echo "
    </div>

    
    <button onclick=\"myFunction()\" class=\"cws-button alt float-right\" >";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
    </div>



    <form action=\"https://formspree.io/f/xrgrzreg\"  name=\"form2\" method=\"POST\" id=\"form2\">
        <label >
            Your email:
            <input type=\"email\" name=\"_replyto\" id=\"mailF\">
        </label>

        <label >
            nom utilisateur:
            <input type=\"text\" name=\"nomF\" id=\"nomF\">
        </label>


        <label >
            Prenom:
            <input name=\"prenomF\" id=\"prenomF\">
        </label>






        <!-- your other form fields go here -->

        <button style=\"display: none;\" onclick=\"myFunction();\">Send</button>
    </form>

    <script>
        function myFunction() {

            x = document.getElementById(\"utilisateur_nom\").value;
            b = document.getElementById(\"utilisateur_prenom\").value;
            c = document.getElementById(\"utilisateur_email\").value;


            document.getElementById(\"nomF\").value = x;
            document.getElementById(\"prenomF\").value = b;
            document.getElementById(\"mailF\").value = c;

            setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);


        }
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/ajoutUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  131 => 29,  124 => 25,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  88 => 8,  78 => 7,  59 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'front.html.twig' %}


{% block title %}New Utilisateur{% endblock %}

{% block body %}
    {{ dump (form)}}
    <style>
        .hidden3
        {
            display: none;
        }

    </style>
<div class=\"container\">
        <h4 class=\"trans-uppercase mb-10\">Sign in ! </h4>
        <div class=\" mb-30\"></div>
    {{ form_start(form,{'attr':{'class':'review-content'}}) }}
    {{form_row(form.nom, {'attr': {'class':'form-row'}})}}
    {{form_row(form.prenom, {'attr': {'class':'form-row'}})}}
    {{form_row(form.email, {'attr': {'class':'form-row'}})}}
    {{form_row(form.mdp, {'attr': {'class':'form-row'}})}}
    <div class=\"hidden3\">
    {{form_row(form.roles, {'attr': {'class':'hidden3'}})}}
    </div>

    
    <button onclick=\"myFunction()\" class=\"cws-button alt float-right\" >{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
    </div>



    <form action=\"https://formspree.io/f/xrgrzreg\"  name=\"form2\" method=\"POST\" id=\"form2\">
        <label >
            Your email:
            <input type=\"email\" name=\"_replyto\" id=\"mailF\">
        </label>

        <label >
            nom utilisateur:
            <input type=\"text\" name=\"nomF\" id=\"nomF\">
        </label>


        <label >
            Prenom:
            <input name=\"prenomF\" id=\"prenomF\">
        </label>






        <!-- your other form fields go here -->

        <button style=\"display: none;\" onclick=\"myFunction();\">Send</button>
    </form>

    <script>
        function myFunction() {

            x = document.getElementById(\"utilisateur_nom\").value;
            b = document.getElementById(\"utilisateur_prenom\").value;
            c = document.getElementById(\"utilisateur_email\").value;


            document.getElementById(\"nomF\").value = x;
            document.getElementById(\"prenomF\").value = b;
            document.getElementById(\"mailF\").value = c;

            setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);


        }
    </script>
    
{% endblock %}", "front/ajoutUtil.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\ajoutUtil.html.twig");
    }
}
