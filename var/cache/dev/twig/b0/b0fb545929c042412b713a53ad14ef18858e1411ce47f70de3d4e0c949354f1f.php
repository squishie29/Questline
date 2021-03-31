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

/* gallery/_delete_form.html.twig */
class __TwigTemplate_ef44daac36faa79916123d89ebcbf58d521011318c68598899b0253d2e1ebcfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/_delete_form.html.twig"));

        // line 1
        echo "
<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>


<div class=\"form_container\">
    <form  method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\" id=\"my_captcha_form\">
        <div class=\"g-recaptcha\"
             data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\"
        ></div>
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))), "html", null, true);
        echo "\">
        <button class=\"btn-outline-primary\" >Delete</button>
    </form>
</div>


<script>


    document.getElementById(\"my_captcha_form\").addEventListener(\"submit\",function(evt)
    {

        var response = grecaptcha.getResponse();
        if(response.length == 0)
        {
            //reCaptcha not verified
            alert(\"please verify you are humann!\");
            evt.preventDefault();
            return false;
        }
        //captcha verified
        //do the rest of your validations here

    });
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gallery/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>


<div class=\"form_container\">
    <form  method=\"post\" action=\"{{ path('gallery_delete', {'id': gallery.id}) }}\" id=\"my_captcha_form\">
        <div class=\"g-recaptcha\"
             data-sitekey=\"6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI\"
        ></div>
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ gallery.id) }}\">
        <button class=\"btn-outline-primary\" >Delete</button>
    </form>
</div>


<script>


    document.getElementById(\"my_captcha_form\").addEventListener(\"submit\",function(evt)
    {

        var response = grecaptcha.getResponse();
        if(response.length == 0)
        {
            //reCaptcha not verified
            alert(\"please verify you are humann!\");
            evt.preventDefault();
            return false;
        }
        //captcha verified
        //do the rest of your validations here

    });
</script>

", "gallery/_delete_form.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\gallery\\_delete_form.html.twig");
    }
}
