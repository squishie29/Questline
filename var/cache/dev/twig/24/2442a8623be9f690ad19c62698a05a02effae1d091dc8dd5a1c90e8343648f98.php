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

/* reservation_hotel/form2.html.twig */
class __TwigTemplate_fd677d7d4eeb74905547f099e94f04366817ba93f5081d1a53641950da9dbc33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/form2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/form2.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"d-none\" style=\"display:none\" >
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "roomId", [], "any", false, false, false, 3), 'widget');
        echo "
</div>
                    <div class=\"px-2\">
                        <div class=\"\">
                            <div class=\"form-group\">
                                <label class=\"sr-only\">Name</label>
                                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "debut", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "dropdown"]]);
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "fin", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "dropdown"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" style=\"\">Email</label>
                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "userId", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                <label for=\"room\"> Room </label>
                                <select class=\"form-control\" name=\"room\" id=\"room\">
                                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "roomId", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "choices", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "
                                        ";
            // line 21
            $context["x"] = twig_get_attribute($this->env, $this->source, $context["i"], "value", [], "any", false, false, false, 21);
            // line 22
            echo "                                        ";
            $context["idHotel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "roomId", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "choices", [], "any", false, false, false, 22), (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), "data", [], "any", false, false, false, 22), "idHotel", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22);
            // line 23
            echo "
                                        ";
            // line 24
            if ((0 === twig_compare((isset($context["idHotel"]) || array_key_exists("idHotel", $context) ? $context["idHotel"] : (function () { throw new RuntimeError('Variable "idHotel" does not exist.', 24, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "\"> Room ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "roomId", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "choices", [], "any", false, false, false, 25), (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "label", [], "any", false, false, false, 25), "html", null, true);
                echo " | Hotel ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 25, $this->source); })()), "getName", [], "method", false, false, false, 25), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 27
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                                </select>
                            </div>
                            <button  onclick=\"myFunction()\" class=\"btn\" >";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                        </div>
                    </div>


<script>
    function myFunction() {

        x = document.getElementById(\"room\").value;
        document.getElementById(\"reservation_hotel_roomId\").value = x;
    }
</script>
";
        // line 50
        echo "
";
        // line 52
        echo "





";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation_hotel/form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  133 => 52,  130 => 50,  114 => 32,  109 => 29,  102 => 27,  92 => 25,  90 => 24,  87 => 23,  84 => 22,  82 => 21,  79 => 20,  75 => 19,  66 => 13,  57 => 9,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"d-none\" style=\"display:none\" >
    {{ form_widget(form.roomId) }}
</div>
                    <div class=\"px-2\">
                        <div class=\"\">
                            <div class=\"form-group\">
                                <label class=\"sr-only\">Name</label>
                                {{ form_row(form.debut,{'attr': {'class': 'dropdown'}})}}  {{ form_row(form.fin,{'attr': {'class': 'dropdown'}})}}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" style=\"\">Email</label>
                                {{ form_row(form.userId,{'attr': {'class': 'form-control'}})}}
                            </div>

                            <div class=\"form-group\">
                                <label for=\"room\"> Room </label>
                                <select class=\"form-control\" name=\"room\" id=\"room\">
                                    {% for i in form.roomId.vars.choices %}

                                        {% set x = i.value %}
                                        {% set idHotel = form.roomId.vars.choices[x].data.idHotel.id %}

                                        {% if idHotel == hotel.id %}
                                            <option value=\"{{ x }}\"> Room {{ form.roomId.vars.choices[x].label }} | Hotel {{ hotel.getName() }}</option>
                                        {% endif %}

                                    {% endfor %}

                                </select>
                            </div>
                            <button  onclick=\"myFunction()\" class=\"btn\" >{{ button_label|default('Save') }}</button>

                        </div>
                    </div>


<script>
    function myFunction() {

        x = document.getElementById(\"room\").value;
        document.getElementById(\"reservation_hotel_roomId\").value = x;
    }
</script>
{#{{ dump(hotel) }}#}
{#{% for i in form.roomId.vars.choices %}#}
{#    {% set x = i.value %}#}
{#    {{ x }}#}
{#    {{ dump(form.roomId.vars.choices[x].data.idHotel.id) }}#}

{#{% endfor %}#}






{{ form_end(form) }}", "reservation_hotel/form2.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\reservation_hotel\\form2.html.twig");
    }
}
