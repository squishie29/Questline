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

/* ReservationVol/new.html.twig */
class __TwigTemplate_dcee6bddfae58e1e4d9cf103d8961dd0b72c3fa433d1f7372b0064df09af570e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReservationVol/new.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
";
        
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
        echo "
    ";
        // line 4
        echo twig_include($this->env, $context, "ReservationVol/_form.html.twig");
        echo "
    <!-- modify this form HTML and place wherever you want your form -->

    <form
            action=\"https://formspree.io/f/xgerwjny\"
            method=\"POST\"
    >
        <label>
            Your email:
            <input type=\"text\" id=\"personneF\" name=\"_replyto\">
        </label>

        <label>
            Your email:
            <input type=\"text\" id=\"dateF\" name=\"_replyto\">
        </label>

        <label>
            Your email:
            <input type=\"text\" id=\"volF\" name=\"_replyto\">
        </label>




        <!-- your other form fields go here -->

        <button type=\"submit\">Send</button>
    </form>

    <button onclick=\"myFunction()\">aaaa</button>
    <script>
       function myFunction() {

            x =document.getElementById(\"reservation_vol_nombre_personne\").value;
            a =document.getElementById(\"reservation_vol_date_res_date_month\").value;
            b =document.getElementById(\"reservation_vol_date_res_date_day\").value;
            c =document.getElementById(\"reservation_vol_date_res_date_year\").value;
            d =document.getElementById(\"reservation_vol_date_res_time_hour\").value;
            e =document.getElementById(\"reservation_vol_date_res_time_hour\").value;
            f =document.getElementById(\"reservation_vol_date_res_time_minute\").value;


            document.getElementById(\"personneF\").value =a;

            //document.getElementById(\"form1\").submit();

           /* setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);*/
        }
    </script>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ReservationVol/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 4,  70 => 3,  60 => 2,  49 => 58,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

    {{ include('ReservationVol/_form.html.twig') }}
    <!-- modify this form HTML and place wherever you want your form -->

    <form
            action=\"https://formspree.io/f/xgerwjny\"
            method=\"POST\"
    >
        <label>
            Your email:
            <input type=\"text\" id=\"personneF\" name=\"_replyto\">
        </label>

        <label>
            Your email:
            <input type=\"text\" id=\"dateF\" name=\"_replyto\">
        </label>

        <label>
            Your email:
            <input type=\"text\" id=\"volF\" name=\"_replyto\">
        </label>




        <!-- your other form fields go here -->

        <button type=\"submit\">Send</button>
    </form>

    <button onclick=\"myFunction()\">aaaa</button>
    <script>
       function myFunction() {

            x =document.getElementById(\"reservation_vol_nombre_personne\").value;
            a =document.getElementById(\"reservation_vol_date_res_date_month\").value;
            b =document.getElementById(\"reservation_vol_date_res_date_day\").value;
            c =document.getElementById(\"reservation_vol_date_res_date_year\").value;
            d =document.getElementById(\"reservation_vol_date_res_time_hour\").value;
            e =document.getElementById(\"reservation_vol_date_res_time_hour\").value;
            f =document.getElementById(\"reservation_vol_date_res_time_minute\").value;


            document.getElementById(\"personneF\").value =a;

            //document.getElementById(\"form1\").submit();

           /* setTimeout(function() {
                document.getElementById(\"form2\").submit();
            }, 1000);*/
        }
    </script>
        
{% endblock %}

", "ReservationVol/new.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\ReservationVol\\new.html.twig");
    }
}
