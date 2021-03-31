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

/* reservation_hotel/checkout.html.twig */
class __TwigTemplate_21b7f570721480fa424a9ea95d3be14a35847c13d20b9fb140d75f71b889d3f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/checkout.html.twig"));

        // line 1
        echo " <style>
    .hidden2
    {
        display: none;
    }
</style>

";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    </style>
    <link rel=\"stylesheet\" href=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css\">
    <script src=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js\"></script>
    <script src=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js\"></script>


    <header class=\"site-header\" id=\"header\">
        <h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">THANK YOU!</h1>
    </header>

    <div class=\"main-content\">
        <i class=\"fa fa-check main-content__checkmark\" id=\"checkmark\"></i>
        <p class=\"main-content__body\" data-lead-id=\"main-content-body\">Thanks a bunch for picking QUESTLINE. It means a lot to us, just like you do! We really appreciate you giving us a chance. Thanks for being you.
            <br> you will be redirected shortly.</p>
    </div>

    <footer class=\"site-footer\" id=\"footer\">
        <p class=\"site-footer__fineprint\" id=\"fineprint\">Copyright QUESTLINE ©2021 | All Rights Reserved</p>
    </footer>

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["id" => "form1"]]);
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "debut", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "hidden2"]]);
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "fin", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "hidden2"]]);
        echo "
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "userId", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "hidden2"]]);
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "roomId", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "hidden2"]]);
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "confirmation", [], "any", false, false, false, 41), 'widget', ["value" => "valide"]);
        echo "

    <button class=\"btn hidden2\">";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "



    <script>
        window.onload = function() {

            document.getElementById(\"debF\").value = \"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "debut", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "day", [], "any", false, false, false, 51), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "debut", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "month", [], "any", false, false, false, 51), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "debut", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "year", [], "any", false, false, false, 51), "html", null, true);
        echo "\";
            document.getElementById(\"finF\").value = \"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "fin", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "day", [], "any", false, false, false, 52), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "fin", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "month", [], "any", false, false, false, 52), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "fin", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "year", [], "any", false, false, false, 52), "html", null, true);
        echo "\";
            document.getElementById(\"userF\").value = \"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "getUserId", [], "method", false, false, false, 53), "getEmail", [], "method", false, false, false, 53), "html", null, true);
        echo "\";
            document.getElementById(\"roomF\").value = \"type: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "getRoomId", [], "method", false, false, false, 54), "getType", [], "method", false, false, false, 54), "html", null, true);
        echo " prix: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "getRoomId", [], "method", false, false, false, 54), "getPrix", [], "method", false, false, false, 54), "html", null, true);
        echo "\";


            document.getElementById(\"form1\").submit();

            setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);
        };
    </script>


    <form  action=\"https://formspree.io/f/xwkaezeq\"   method=\"POST\" id=\"form2\" >

        <input type=\"hidden\" name=\"_subject\" value=\"New reservation confirmed!\" >
        <label class=\"hidden2\">
            start date off reservation:
            <input  type=\"text\" name=\"start date off reservation:\" id=\"debF\">
        </label class=\"hidden2\">
        <label class=\"hidden2\">
            end date of reservation
            <input  type=\"text\" name=\"end date of reservation\" id=\"finF\">
        </label >
        <label class=\"hidden2\">
            User
            <input type=\"text\" name=\"Utilisateur\" id=\"userF\">
        </label>
        <label class=\"hidden2\">
            Chambre
            <input type=\"text\"  name=\"Chambre\" id=\"roomF\">
        </label>


        <button class=\"hidden2\"  type=\"submit\" onclick=\"myFunction()\">Submit Payment</button>

        <script>
            function myFunction() {


                document.getElementById(\"debF\").value = \"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "debut", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "day", [], "any", false, false, false, 93), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "debut", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "month", [], "any", false, false, false, 93), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "debut", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "year", [], "any", false, false, false, 93), "html", null, true);
        echo "\";
                document.getElementById(\"finF\").value = \"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "fin", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94), "day", [], "any", false, false, false, 94), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "fin", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94), "month", [], "any", false, false, false, 94), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "fin", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94), "year", [], "any", false, false, false, 94), "html", null, true);
        echo "\";
                document.getElementById(\"userF\").value = \"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "getUserId", [], "method", false, false, false, 95), "getEmail", [], "method", false, false, false, 95), "html", null, true);
        echo "\";
                document.getElementById(\"roomF\").value = \"type: ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96), "getRoomId", [], "method", false, false, false, 96), "getType", [], "method", false, false, false, 96), "html", null, true);
        echo " prix: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96), "getRoomId", [], "method", false, false, false, 96), "getPrix", [], "method", false, false, false, 96), "html", null, true);
        echo "\";


                setTimeout(function() {
                    document.getElementById(\"form4\").submit();
                }, 1000);
            }
        </script>


    </form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_hotel/checkout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 96,  243 => 95,  235 => 94,  227 => 93,  183 => 54,  179 => 53,  171 => 52,  163 => 51,  153 => 44,  149 => 43,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  97 => 11,  87 => 10,  69 => 8,  59 => 10,  56 => 9,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <style>
    .hidden2
    {
        display: none;
    }
</style>

{% block title %}{% endblock %}

{% block body %}

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    </style>
    <link rel=\"stylesheet\" href=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css\">
    <script src=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js\"></script>
    <script src=\"https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js\"></script>


    <header class=\"site-header\" id=\"header\">
        <h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">THANK YOU!</h1>
    </header>

    <div class=\"main-content\">
        <i class=\"fa fa-check main-content__checkmark\" id=\"checkmark\"></i>
        <p class=\"main-content__body\" data-lead-id=\"main-content-body\">Thanks a bunch for picking QUESTLINE. It means a lot to us, just like you do! We really appreciate you giving us a chance. Thanks for being you.
            <br> you will be redirected shortly.</p>
    </div>

    <footer class=\"site-footer\" id=\"footer\">
        <p class=\"site-footer__fineprint\" id=\"fineprint\">Copyright QUESTLINE ©2021 | All Rights Reserved</p>
    </footer>

    {{ form_start(form, {'attr': {'id': 'form1'}}) }}
    {{ form_widget(form.debut, { 'attr': {'class': 'hidden2'} })}}
    {{ form_widget(form.fin, { 'attr': {'class': 'hidden2'} })}}
    {{ form_widget(form.userId, { 'attr': {'class': 'hidden2'} })}}
    {{ form_widget(form.roomId, { 'attr': {'class': 'hidden2'} })}}
    {{ form_widget(form.confirmation, {'value' : 'valide'})}}

    <button class=\"btn hidden2\">{{ button_label|default('Save') }}</button>
    {{ form_end(form) }}



    <script>
        window.onload = function() {

            document.getElementById(\"debF\").value = \"{{ (form.debut.vars.value.day) }}/{{ (form.debut.vars.value.month) }}/{{ (form.debut.vars.value.year) }}\";
            document.getElementById(\"finF\").value = \"{{ (form.fin.vars.value.day) }}/{{ (form.fin.vars.value.month) }}/{{ (form.fin.vars.value.year) }}\";
            document.getElementById(\"userF\").value = \"{{ form.vars.value.getUserId().getEmail() }}\";
            document.getElementById(\"roomF\").value = \"type: {{ form.vars.value.getRoomId().getType() }} prix: {{ form.vars.value.getRoomId().getPrix() }}\";


            document.getElementById(\"form1\").submit();

            setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);
        };
    </script>


    <form  action=\"https://formspree.io/f/xwkaezeq\"   method=\"POST\" id=\"form2\" >

        <input type=\"hidden\" name=\"_subject\" value=\"New reservation confirmed!\" >
        <label class=\"hidden2\">
            start date off reservation:
            <input  type=\"text\" name=\"start date off reservation:\" id=\"debF\">
        </label class=\"hidden2\">
        <label class=\"hidden2\">
            end date of reservation
            <input  type=\"text\" name=\"end date of reservation\" id=\"finF\">
        </label >
        <label class=\"hidden2\">
            User
            <input type=\"text\" name=\"Utilisateur\" id=\"userF\">
        </label>
        <label class=\"hidden2\">
            Chambre
            <input type=\"text\"  name=\"Chambre\" id=\"roomF\">
        </label>


        <button class=\"hidden2\"  type=\"submit\" onclick=\"myFunction()\">Submit Payment</button>

        <script>
            function myFunction() {


                document.getElementById(\"debF\").value = \"{{ (form.debut.vars.value.day) }}/{{ (form.debut.vars.value.month) }}/{{ (form.debut.vars.value.year) }}\";
                document.getElementById(\"finF\").value = \"{{ (form.fin.vars.value.day) }}/{{ (form.fin.vars.value.month) }}/{{ (form.fin.vars.value.year) }}\";
                document.getElementById(\"userF\").value = \"{{ form.vars.value.getUserId().getEmail() }}\";
                document.getElementById(\"roomF\").value = \"type: {{ form.vars.value.getRoomId().getType() }} prix: {{ form.vars.value.getRoomId().getPrix() }}\";


                setTimeout(function() {
                    document.getElementById(\"form4\").submit();
                }, 1000);
            }
        </script>


    </form>


{% endblock %}", "reservation_hotel/checkout.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\reservation_hotel\\checkout.html.twig");
    }
}
