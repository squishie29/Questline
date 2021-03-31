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

/* vol/Tri.html.twig */
class __TwigTemplate_bb9c73c0259b78df040ff1aaddd4005e8ac249cae29de6b17744fbde65f4af6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/Tri.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/Tri.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "vol/Tri.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des vols";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
 ";
        
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
        echo "    <section class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        ";
        // line 16
        echo "                        <li class=\"breadcrumb-item active\">vols</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Table des vols</h3>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"container-fluid\">
                            <div class=\"row mb-2\">
                                <div class=\"col-sm-6\">
                                    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vol_new");
        echo "\"  class=\"btn btn-success\" >Créer</a>
                                </div>

                            </div>
                            ";
        // line 38
        if ((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                            <div class=\"card-body table-responsive p-0\">
                                <table id=\"#example1\" class=\"table table-bordered table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>date</th>
                                        <th>prix</th>
                                        <th>Nbplace</th>
              
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["clients"]);
            foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
                // line 53
                echo "                                        <tr>
                                            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clients"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                                            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clients"], "date", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clients"], "prix", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clients"], "Nbplace", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                                            <td align=\"center\">
                                                <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vol_by_id", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" class=\"btn btn-primary \"> <i class=\"fas fa-eye\"></i> Détails</a>
                                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vol_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-warning\"> <i class=\"fas fa-pencil-alt\"></i> Modifier</a>
                                                <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vol_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez vous vraiment supprimer ce vol ?')\"> <i class=\"fas fa-trash\"></i> Supprimer</a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clients'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                    </tbody>
                                </table>
                                ";
        } else {
            // line 68
            echo "                                    <p>Aucun vol n'a été trouvé</p>
                                ";
        }
        // line 70
        echo "
                                <br>
                                ";
        // line 73
        echo "                                ";
        // line 74
        echo "                                ";
        // line 75
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Tri
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("volname");
        echo "\">TriParNom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class=\"control-sidebar control-sidebar-dark\">
    </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vol/Tri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 83,  228 => 75,  226 => 74,  224 => 73,  220 => 70,  216 => 68,  211 => 65,  201 => 61,  197 => 60,  193 => 59,  188 => 57,  184 => 56,  180 => 55,  176 => 54,  173 => 53,  169 => 52,  154 => 39,  152 => 38,  145 => 34,  125 => 16,  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\"%}
{% block title %}Liste des vols{% endblock %}
 {% block stylesheets %}
     <link rel=\"stylesheet\" href=\"{{ asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}\">
     <link rel=\"stylesheet\" href=\"{{ asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}\">
 {% endblock %}
{% block body %}
    <section class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        {#                        <li class=\"breadcrumb-item\"><a href=\"{{ path('admin') }}\">Home</a></li>#}
                        <li class=\"breadcrumb-item active\">vols</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Table des vols</h3>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"container-fluid\">
                            <div class=\"row mb-2\">
                                <div class=\"col-sm-6\">
                                    <a href=\"{{ path('vol_new') }}\"  class=\"btn btn-success\" >Créer</a>
                                </div>

                            </div>
                            {% if clients %}
                            <div class=\"card-body table-responsive p-0\">
                                <table id=\"#example1\" class=\"table table-bordered table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>date</th>
                                        <th>prix</th>
                                        <th>Nbplace</th>
              
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for clients in clients %}
                                        <tr>
                                            <td>{{ clients.id }}</td>
                                            <td>{{ clients.date }}</td>
                                            <td>{{ clients.prix }}</td>
                                            <td>{{ clients.Nbplace}}</td>
                                            <td align=\"center\">
                                                <a href=\"{{ path('vol_by_id',{'id':vols.id }) }}\" class=\"btn btn-primary \"> <i class=\"fas fa-eye\"></i> Détails</a>
                                                <a href=\"{{ path('vol_edit',{'id':vols.id }) }}\" class=\"btn btn-warning\"> <i class=\"fas fa-pencil-alt\"></i> Modifier</a>
                                                <a href=\"{{ path('vol_delete',{'id':vols.id }) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Voulez vous vraiment supprimer ce vol ?')\"> <i class=\"fas fa-trash\"></i> Supprimer</a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                {% else %}
                                    <p>Aucun vol n'a été trouvé</p>
                                {% endif %}

                                <br>
                                {#                                <div class=\"navigation\">#}
                                {#                                    {{ knp_pagination_render(vols) }}#}
                                {#                                </div>#}
                            </div>
                        </div>
                    </div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Tri
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a class=\"dropdown-item\" href=\"{{ path('volname') }}\">TriParNom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class=\"control-sidebar control-sidebar-dark\">
    </aside>
{% endblock %}", "vol/Tri.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\vol\\Tri.html.twig");
    }
}
