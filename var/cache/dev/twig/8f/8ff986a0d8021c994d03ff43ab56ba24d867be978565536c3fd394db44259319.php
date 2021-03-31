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

/* front/test.html.twig */
class __TwigTemplate_de266f5f58132c7626e7c26e7eb07da846e74d0e402bc2f7d321346dc48b7810 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/test.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
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

        echo "checkout test";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <style>

        body {
            font-size: 20px;
            font-family: system-ui, Helvetica, Arial, sans-serif;
        }

        form {
            width: 300px;
            margin: 20px auto;
        }

        .testt2 {
            position: relative;
            border: none;
        }

        label {
            top: 18px;
            color: rgba(0, 0, 0, 0.3);
            transform-origin: left;
            transition: all 0.3s ease;
        }

        input:focus ~ label {
            color: red;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: 0;
            transform: scale(0.6, 0.6);
        }

        input {
            font-size: 20px;
            width: 100%;
            border: none;
            margin-top: 10px;
        }

        input:focus {
            outline: none;
        }

        .after {
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, red 50%, transparent 50%);
            background-color: rgba(0, 0, 0, 0.3);
            background-size: 200% 100%;
            background-position: 100% 0;
            transition: all 0.6s ease;
        }

        input:focus ~ .after {
            background-position: 0 0;
        }

        button {
            position: relative;
            width: 100%;
            font-size: 20px;
            font-family: system-ui, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            margin-top: 20px;
            padding: 2px 10px;
            color: rgba(0, 0, 0, 0.4);
            background: white;
            border: none;
            background: linear-gradient(to right, red 50%, transparent 50%);
            background-color: rgba(0, 0, 0, 0.3);
            background-size: 200% 100%;
            background-position: 100% 0;
            transition: all 0.6s ease;
        }

        button:before {
            position: absolute;
            content: \"Submit\";
            top: 2px;
            bottom: 2px;
            left: 2px;
            right: 2px;
            display: block;
            background-color: white;
        }

        button:active,
        button:focus,
        button:hover {
            outline: none;
            background-position: 0 0;
            color: red;
        }
    </style>

    <script src=\"https://js.stripe.com/v3/\"></script>

    <script>var stripe = Stripe('pk_test_51IZIMOALxTyarhINNwG4N93R74wClzUQIhYxZxud8XyTIEoxHVrVRg5gE8JbrFy19CBJuCHABqB71q40mv9RYG0z00xPVWnk26');
        var elements = stripe.elements();</script>




    <form action=\"\"  method=\"POST\" id=\"payment-form\">
        <input type=\"hidden\" name=\"_subject\" value=\"New submission from x\">



        <div >
            <label>
                Money to deposit:
        <input aria-describedby=\"emailHelp\"  type=\"text\" id=\"amount\" name=\"_amount\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 122, $this->source); })()), "getRoomId", [], "method", false, false, false, 122), "getPrix", [], "method", false, false, false, 122), "html", null, true);
        echo "\" readonly>
            </label>
        </div>
        <div class=\"testt2\">
        <label>
            Your email:
            <input  type=\"email\"  name=\"Sender Email\" id=\"email2\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 128, $this->source); })()), "getUserId", [], "method", false, false, false, 128), "getEmail", [], "method", false, false, false, 128), "html", null, true);
        echo "\"readonly>
        </label>
        </div>
        <div class=\"testt2\">
        <label>
            Room reserved:
            <textarea name=\"message\"  id=\"message2\"readonly>Reservation de: ";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_hotel"]) || array_key_exists("reservation_hotel", $context) ? $context["reservation_hotel"] : (function () { throw new RuntimeError('Variable "reservation_hotel" does not exist.', 134, $this->source); })()), "getRoomId", [], "method", false, false, false, 134), "getType", [], "method", false, false, false, 134), "html", null, true);
        echo "</textarea>
        </label>
        </div>

        <div class=\"form-row\">
            <label for=\"card-element\">
                Credit or debit card
            </label>
            <div id=\"card-element\">
                <!-- A Stripe Element will be inserted here. -->
            </div>


            <!-- Used to display Element errors. -->
            <div id=\"card-errors\" role=\"alert\"></div>
        </div>

        <button onsubmit=\"myFunction();\">Submit Payment</button>
    </form>



    <script>
        function myFunction() {


            //document.getElementById(\"form4\").submit();

            //window.location.href = \"http://www.w3schools.com\";

           /* setTimeout(function() {
                document.getElementById(\"form4\").submit();
            }, 10);*/

        }
    </script>



    <script>
        // Custom styling can be passed to options when creating an Element.
        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: '#32325d',
            },
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });


        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }




    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 134,  220 => 128,  211 => 122,  94 => 7,  84 => 6,  65 => 3,  55 => 6,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}checkout test{% endblock %}


{% block body %}


    <style>

        body {
            font-size: 20px;
            font-family: system-ui, Helvetica, Arial, sans-serif;
        }

        form {
            width: 300px;
            margin: 20px auto;
        }

        .testt2 {
            position: relative;
            border: none;
        }

        label {
            top: 18px;
            color: rgba(0, 0, 0, 0.3);
            transform-origin: left;
            transition: all 0.3s ease;
        }

        input:focus ~ label {
            color: red;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: 0;
            transform: scale(0.6, 0.6);
        }

        input {
            font-size: 20px;
            width: 100%;
            border: none;
            margin-top: 10px;
        }

        input:focus {
            outline: none;
        }

        .after {
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, red 50%, transparent 50%);
            background-color: rgba(0, 0, 0, 0.3);
            background-size: 200% 100%;
            background-position: 100% 0;
            transition: all 0.6s ease;
        }

        input:focus ~ .after {
            background-position: 0 0;
        }

        button {
            position: relative;
            width: 100%;
            font-size: 20px;
            font-family: system-ui, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            margin-top: 20px;
            padding: 2px 10px;
            color: rgba(0, 0, 0, 0.4);
            background: white;
            border: none;
            background: linear-gradient(to right, red 50%, transparent 50%);
            background-color: rgba(0, 0, 0, 0.3);
            background-size: 200% 100%;
            background-position: 100% 0;
            transition: all 0.6s ease;
        }

        button:before {
            position: absolute;
            content: \"Submit\";
            top: 2px;
            bottom: 2px;
            left: 2px;
            right: 2px;
            display: block;
            background-color: white;
        }

        button:active,
        button:focus,
        button:hover {
            outline: none;
            background-position: 0 0;
            color: red;
        }
    </style>

    <script src=\"https://js.stripe.com/v3/\"></script>

    <script>var stripe = Stripe('pk_test_51IZIMOALxTyarhINNwG4N93R74wClzUQIhYxZxud8XyTIEoxHVrVRg5gE8JbrFy19CBJuCHABqB71q40mv9RYG0z00xPVWnk26');
        var elements = stripe.elements();</script>




    <form action=\"\"  method=\"POST\" id=\"payment-form\">
        <input type=\"hidden\" name=\"_subject\" value=\"New submission from x\">



        <div >
            <label>
                Money to deposit:
        <input aria-describedby=\"emailHelp\"  type=\"text\" id=\"amount\" name=\"_amount\" value=\"{{ reservation_hotel.getRoomId().getPrix() }}\" readonly>
            </label>
        </div>
        <div class=\"testt2\">
        <label>
            Your email:
            <input  type=\"email\"  name=\"Sender Email\" id=\"email2\" value=\"{{ reservation_hotel.getUserId().getEmail()  }}\"readonly>
        </label>
        </div>
        <div class=\"testt2\">
        <label>
            Room reserved:
            <textarea name=\"message\"  id=\"message2\"readonly>Reservation de: {{ reservation_hotel.getRoomId().getType() }}</textarea>
        </label>
        </div>

        <div class=\"form-row\">
            <label for=\"card-element\">
                Credit or debit card
            </label>
            <div id=\"card-element\">
                <!-- A Stripe Element will be inserted here. -->
            </div>


            <!-- Used to display Element errors. -->
            <div id=\"card-errors\" role=\"alert\"></div>
        </div>

        <button onsubmit=\"myFunction();\">Submit Payment</button>
    </form>



    <script>
        function myFunction() {


            //document.getElementById(\"form4\").submit();

            //window.location.href = \"http://www.w3schools.com\";

           /* setTimeout(function() {
                document.getElementById(\"form4\").submit();
            }, 10);*/

        }
    </script>



    <script>
        // Custom styling can be passed to options when creating an Element.
        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: '#32325d',
            },
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });


        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }




    </script>


{% endblock %}", "front/test.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\test.html.twig");
    }
}
