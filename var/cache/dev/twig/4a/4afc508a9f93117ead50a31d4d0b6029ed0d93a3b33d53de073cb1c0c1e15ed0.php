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

/* reservation_event/reservation.html.twig */
class __TwigTemplate_080726cc69c24880688986e263c01d5a54993a1abeff71cff8d59d97e2cd936f extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_event/reservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation_event/reservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .hiddenAhmed
        {
            display: none;
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p>Nombre des places restants ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nbrRestant"]) || array_key_exists("nbrRestant", $context) ? $context["nbrRestant"] : (function () { throw new RuntimeError('Variable "nbrRestant" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</p>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["id" => "form3"]]);
        echo "
    <div class=\"form-group\">
        <label for=\"exampleFormControlInput1\">Nombre des participants</label>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nbr_participant", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "min" => 1, "max" => (isset($context["nbrRestant"]) || array_key_exists("nbrRestant", $context) ? $context["nbrRestant"] : (function () { throw new RuntimeError('Variable "nbrRestant" does not exist.', 23, $this->source); })())]]);
        echo "
    </div>
    <div class=\"form-group\">
        <button onclick=\"myFunction()\" class=\"cws-button alt float-right\" >";
        // line 26
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 26, $this->source); })()), "Reserver")) : ("Reserver")), "html", null, true);
        echo "</button>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "



    </div>

    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "


    <form class=\"hiddenAhmed\"
          action=\"https://formspree.io/f/xjvjbjlk\"
          method=\"POST\"
          id=\"form1\"
          name=\"form1\"
          target=\"_blank\"
    >
        <label class=\"hidden3\">
            Your email:
            <input type=\"email\"  id=\"mail2\" name=\"nombre des participants\">
        </label>
        <label>
            Your message:
            <input name=\"confirmation\" id=\"conf2\">
        </label>

        <!-- your other form fields go here -->

        <button type=\"submit\">Send</button>
    </form>
    <script>
        function myFunction() {

            x = document.getElementById(\"reservation_nbr_participant\").value;


            document.getElementById(\"mail2\").value = x;
            if ( (x<=";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["nbrRestant"]) || array_key_exists("nbrRestant", $context) ? $context["nbrRestant"] : (function () { throw new RuntimeError('Variable "nbrRestant" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ") && (x>0) )
            {

                document.getElementById(\"conf2\").value = \"reservation confirmer!\";
                document.getElementById(\"mail2\").value = x;


                setTimeout(function() {
                    document.getElementById(\"form1\").submit();
                }, 100);
            }






        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_event/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  115 => 33,  106 => 27,  102 => 26,  96 => 23,  90 => 20,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <style>
        .hiddenAhmed
        {
            display: none;
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p>Nombre des places restants {{ nbrRestant }}</p>
    {{ form_start(form, {'attr' : {'id': 'form3'}}) }}
    <div class=\"form-group\">
        <label for=\"exampleFormControlInput1\">Nombre des participants</label>
        {{ form_widget(form.nbr_participant,{'attr':{'class':'form-control','min':1,'max':nbrRestant}}) }}
    </div>
    <div class=\"form-group\">
        <button onclick=\"myFunction()\" class=\"cws-button alt float-right\" >{{ button_label|default('Reserver') }}</button>
        {{ form_end(form) }}



    </div>

    {{ form_end(form) }}


    <form class=\"hiddenAhmed\"
          action=\"https://formspree.io/f/xjvjbjlk\"
          method=\"POST\"
          id=\"form1\"
          name=\"form1\"
          target=\"_blank\"
    >
        <label class=\"hidden3\">
            Your email:
            <input type=\"email\"  id=\"mail2\" name=\"nombre des participants\">
        </label>
        <label>
            Your message:
            <input name=\"confirmation\" id=\"conf2\">
        </label>

        <!-- your other form fields go here -->

        <button type=\"submit\">Send</button>
    </form>
    <script>
        function myFunction() {

            x = document.getElementById(\"reservation_nbr_participant\").value;


            document.getElementById(\"mail2\").value = x;
            if ( (x<={{ nbrRestant }}) && (x>0) )
            {

                document.getElementById(\"conf2\").value = \"reservation confirmer!\";
                document.getElementById(\"mail2\").value = x;


                setTimeout(function() {
                    document.getElementById(\"form1\").submit();
                }, 100);
            }






        }
    </script>
{% endblock %}", "reservation_event/reservation.html.twig", "C:\\wamp64\\www\\devahmed\\templates\\reservation_event\\reservation.html.twig");
    }
}
