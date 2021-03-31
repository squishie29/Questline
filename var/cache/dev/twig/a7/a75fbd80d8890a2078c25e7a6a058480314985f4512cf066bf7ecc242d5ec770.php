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

/* event/index.html.twig */
class __TwigTemplate_30baddf0fda1d47dfd67317b92707e173966f4d6b786b59ee20a24a063d3247d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "event/index.html.twig", 1);
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
        echo "     <li class=\"nav-item dropdown notification-dropdown\">
        <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\">
                <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\">

                </path>
                <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
            </svg>
            <span class=\"badge badge-success\" id=\"seen\"></span>
        </a>
        <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"notificationDropdown\">
            <div class=\"notification-scroll\" id=\"notifications\">




            </div>
        </div>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 24
        echo "
    <h2>List des Evenements</h2>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">NOMCat</th>
            <th scope=\"col\">Destination</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Nombre des places</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>


            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
        </tr>
        </thead>
        <tbody id=\"all\">


        </tbody>




    </table>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternew");
        echo "\"><button type=\"button\" class=\"btn btn-primary\">Ajouter</button></a>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trievents");
        echo "\"><button type=\"button\" class=\"btn btn-success\" id=\"tri\">trie</button></a>


    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>




    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 0;
                var that = this;
                var value = \$(\"#search\").val();
                var entitySelector = \$(\"#all\").html('');
                    if (searchRequest != null)
                        searchRequest.abort();

                    searchRequest = \$.ajax({
                        type: \"POST\",
                        url : \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchevent");
        echo "\",
                        data: {
                            'searchValue': value
                        },
                        dataType: \"text\",
                        success: function (msg) {


                                console.log(msg);
                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key === 'entities') {
                                            if (id !== 'error') {

                                                entitySelector.append(
                                                    '<tr><td>' + value[0] + '</td>' +
                                                    '<td>' + value[1].toString() + '</td>' +
                                                    '<td>' + value[2].toString() + '</td>' +
                                                    '<td>' + value[3].toString() + '</td>' +
                                                    '<td>' + value[4].toString() + '</td>' +
                                                    '<td><a href=\"/'+id+'/modifierEvent\">Modifier</a></td>' +
                                                    '<td><a href=\"/'+id+'/suppEvent\">Supprimer</a></td>' +
                                                    '</tr>'

                                                );
                                            } else {
                                                entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                            }
                                        }
                                    });
                                });

                        }
                    });

            })
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
                var minlength = 0;
                var that = this;
                var value = \$(\"#id\").val();
                var entitySelector = \$(\"#all\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url : \"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchevent");
        echo "\",
                    data: {
                        'searchValue': value
                    },
                    dataType: \"text\",
                    success: function (msg) {


                        console.log(msg);
                        var result = JSON.parse(msg);

                        \$.each(result, function (key, arr) {
                            \$.each(arr, function (id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {

                                        entitySelector.append(
                                            '<tr><td>' + value[0] + '</td>' +
                                            '<td>' + value[1].toString() + '</td>' +
                                            '<td>' + value[2].toString() + '</td>' +
                                            '<td>' + value[3].toString() + '</td>' +
                                            '<td>' + value[4].toString() + '</td>' +
                                            '<td><a href=\"/'+id+'/modifierEvent\">Modifier</a></td>' +
                                            '<td><a href=\"/'+id+'/suppEvent\">Supprimer</a></td>' +

                                            '</tr>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                    }
                                }
                            });
                        });

                    }
                });


        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            \$(\"#notificationDropdown\").click(function (){
                \$(\"#seen\").hide();
            });
            var total=0;
            var searchRequest = null;
            var entitySelector = \$(\"#notifications\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"GET\",
                url : \"/notifications\",
                success: function (msg) {
                    console.log(msg);
                    var result = JSON.parse(msg);

                    \$.each(result, function (key, arr) {
                        \$.each(arr, function (id, value) {
                            if (key === 'notif') {
                                if (id !== 'error') {

                                    if(value[1]===0){
                                        total++;
                                    }

                                    entitySelector.append(
                                        '<div class=\"dropdown-item\">'+
                                        '<div class=\"media server-log\">'+
                                        '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-server\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect><rect x=\"2\" y=\"14\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect><line x1=\"6\" y1=\"6\" x2=\"6\" y2=\"6\"></line><line x1=\"6\" y1=\"18\" x2=\"6\" y2=\"18\"></line></svg>'+
                                        '<div class=\"media-body\">'+
                                        '<div class=\"data-info\">'+
                                        '<h6 class=\"\"> <a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        echo "\"</a> '+value[0]+'</h6>'+
                                        '<p class=\"\">'+value[0]+'</p>'+
                                        '</div>'+
                                        '<div class=\"icon-status\">'+
                                        '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>'
                                    );
                                } else {
                                    entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                }
                            }
                        });
                    });
                    if(total===0){
                        \$(\"#seen\").hide();
                    }

                }
            });


        });
    </script>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 199,  221 => 126,  166 => 74,  142 => 53,  137 => 51,  108 => 24,  98 => 23,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block body %}
     <li class=\"nav-item dropdown notification-dropdown\">
        <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\">
                <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\">

                </path>
                <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
            </svg>
            <span class=\"badge badge-success\" id=\"seen\"></span>
        </a>
        <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"notificationDropdown\">
            <div class=\"notification-scroll\" id=\"notifications\">




            </div>
        </div>
    </li>
{% endblock %}
{% block container %}

    <h2>List des Evenements</h2>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">NOMCat</th>
            <th scope=\"col\">Destination</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Nombre des places</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>


            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
        </tr>
        </thead>
        <tbody id=\"all\">


        </tbody>




    </table>

    <a href=\"{{ path('ajouternew') }}\"><button type=\"button\" class=\"btn btn-primary\">Ajouter</button></a>

    <a href=\"{{ path('trievents') }}\"><button type=\"button\" class=\"btn btn-success\" id=\"tri\">trie</button></a>


    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>




    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 0;
                var that = this;
                var value = \$(\"#search\").val();
                var entitySelector = \$(\"#all\").html('');
                    if (searchRequest != null)
                        searchRequest.abort();

                    searchRequest = \$.ajax({
                        type: \"POST\",
                        url : \"{{ path('searchevent') }}\",
                        data: {
                            'searchValue': value
                        },
                        dataType: \"text\",
                        success: function (msg) {


                                console.log(msg);
                                var result = JSON.parse(msg);

                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key === 'entities') {
                                            if (id !== 'error') {

                                                entitySelector.append(
                                                    '<tr><td>' + value[0] + '</td>' +
                                                    '<td>' + value[1].toString() + '</td>' +
                                                    '<td>' + value[2].toString() + '</td>' +
                                                    '<td>' + value[3].toString() + '</td>' +
                                                    '<td>' + value[4].toString() + '</td>' +
                                                    '<td><a href=\"/'+id+'/modifierEvent\">Modifier</a></td>' +
                                                    '<td><a href=\"/'+id+'/suppEvent\">Supprimer</a></td>' +
                                                    '</tr>'

                                                );
                                            } else {
                                                entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                            }
                                        }
                                    });
                                });

                        }
                    });

            })
        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
                var minlength = 0;
                var that = this;
                var value = \$(\"#id\").val();
                var entitySelector = \$(\"#all\").html('');
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"POST\",
                    url : \"{{ path('searchevent') }}\",
                    data: {
                        'searchValue': value
                    },
                    dataType: \"text\",
                    success: function (msg) {


                        console.log(msg);
                        var result = JSON.parse(msg);

                        \$.each(result, function (key, arr) {
                            \$.each(arr, function (id, value) {
                                if (key === 'entities') {
                                    if (id !== 'error') {

                                        entitySelector.append(
                                            '<tr><td>' + value[0] + '</td>' +
                                            '<td>' + value[1].toString() + '</td>' +
                                            '<td>' + value[2].toString() + '</td>' +
                                            '<td>' + value[3].toString() + '</td>' +
                                            '<td>' + value[4].toString() + '</td>' +
                                            '<td><a href=\"/'+id+'/modifierEvent\">Modifier</a></td>' +
                                            '<td><a href=\"/'+id+'/suppEvent\">Supprimer</a></td>' +

                                            '</tr>'
                                        );
                                    } else {
                                        entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                    }
                                }
                            });
                        });

                    }
                });


        });
    </script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            \$(\"#notificationDropdown\").click(function (){
                \$(\"#seen\").hide();
            });
            var total=0;
            var searchRequest = null;
            var entitySelector = \$(\"#notifications\").html('');
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"GET\",
                url : \"/notifications\",
                success: function (msg) {
                    console.log(msg);
                    var result = JSON.parse(msg);

                    \$.each(result, function (key, arr) {
                        \$.each(arr, function (id, value) {
                            if (key === 'notif') {
                                if (id !== 'error') {

                                    if(value[1]===0){
                                        total++;
                                    }

                                    entitySelector.append(
                                        '<div class=\"dropdown-item\">'+
                                        '<div class=\"media server-log\">'+
                                        '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-server\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect><rect x=\"2\" y=\"14\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect><line x1=\"6\" y1=\"6\" x2=\"6\" y2=\"6\"></line><line x1=\"6\" y1=\"18\" x2=\"6\" y2=\"18\"></line></svg>'+
                                        '<div class=\"media-body\">'+
                                        '<div class=\"data-info\">'+
                                        '<h6 class=\"\"> <a href=\"{{ path('reservations') }}\"</a> '+value[0]+'</h6>'+
                                        '<p class=\"\">'+value[0]+'</p>'+
                                        '</div>'+
                                        '<div class=\"icon-status\">'+
                                        '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>'
                                    );
                                } else {
                                    entitySelector.append('<div class=\"errorLi\">' + value + '</div>');
                                }
                            }
                        });
                    });
                    if(total===0){
                        \$(\"#seen\").hide();
                    }

                }
            });


        });
    </script>




{% endblock %}


", "event/index.html.twig", "C:\\wamp64\\www\\devahmed\\templates\\event\\index.html.twig");
    }
}
