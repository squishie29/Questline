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

/* @MgiletNotification/notifications.html.twig */
class __TwigTemplate_1bfce9742e7c6b557ea83535ffa8d6fd1fb2d30a2284acb7e6ceaea78f34cafd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notifications.html.twig"));

        // line 1
        echo "Notifications :
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new RuntimeError('Variable "notificationList" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_all_as_seen", twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new RuntimeError('Variable "notificationList" does not exist.', 3, $this->source); })())), "notifiableEntity", [], "any", false, false, false, 3));
            echo "\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
";
        }
        // line 7
        echo "<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new RuntimeError('Variable "notificationList" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <li>
            <b>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "notification", [], "any", false, false, false, 10), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "seen", [], "any", false, false, false, 12), "html", null, true);
            echo "
            <form action=\"";
            // line 13
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_as_seen", twig_get_attribute($this->env, $this->source, $context["item"], "notifiableEntity", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, $context["item"], "notification", [], "any", false, false, false, 13));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 17
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_as_unseen", twig_get_attribute($this->env, $this->source, $context["item"], "notifiableEntity", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["item"], "notification", [], "any", false, false, false, 17));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MgiletNotification/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  82 => 17,  75 => 13,  71 => 12,  66 => 10,  63 => 9,  59 => 8,  56 => 7,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Notifications :
{% if notificationList|length > 0 %}
    <form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notificationList|first.notifiableEntity) }}\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
{% endif %}
<ul>
    {% for item in notificationList %}
        <li>
            <b>{{ item.notification }}</b>
            <br>
            seen : {{ item.seen }}
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    {% endfor %}
</ul>
", "@MgiletNotification/notifications.html.twig", "C:\\wamp64\\www\\devahmed\\vendor\\mgilet\\notification-bundle\\Resources\\views\\notifications.html.twig");
    }
}
