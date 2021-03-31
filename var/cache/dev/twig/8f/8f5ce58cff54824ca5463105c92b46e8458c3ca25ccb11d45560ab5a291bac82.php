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

/* hoteldepartement.html.twig */
class __TwigTemplate_883bea36e087e8bccb6c83fc5bff83b12b3f2948b3ed6984dbcf9609f094a8d9 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hoteldepartement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hoteldepartement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hoteldepartement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Options test";
        
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

    <body class=\"sidebar-noneoverflow\">



    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">

        <div class=\"overlay\"></div>
        <div class=\"search-overlay\"></div>


        <!--  BEGIN CONTENT AREA  -->

        <div >
            <div class=\"layout-px-spacing\">

                <div class=\"row layout-top-spacing\">
                    <!--  HOTELS INFO AREA  -->
                    <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-chart-one\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">HOTEL DEPARTEMENT ELEMENTS</h5>
                                <ul class=\"tabs tab-pills\">
                                    <li><a href=\"javascript:void(0);\" id=\"tb_1\" class=\"tabmenu\">Currently</a></li>
                                </ul>
                            </div>

                            <div id=\"div_chart\"></div>


                            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                            <script type=\"text/javascript\">
                                ";
        // line 41
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["pieChart"]) || array_key_exists("pieChart", $context) ? $context["pieChart"] : (function () { throw new RuntimeError('Variable "pieChart" does not exist.', 41, $this->source); })()), "div_chart");
        echo "
                                ";
        // line 42
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["barchart"]) || array_key_exists("barchart", $context) ? $context["barchart"] : (function () { throw new RuntimeError('Variable "barchart" does not exist.', 42, $this->source); })()), "div_chart2");
        echo "
                            </script>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-chart-two\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">HOTELS BY STARS</h5>
                            </div>
                            <div class=\"widget-content\">
                                <div id=\"div_chart2\"></div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing\">

                            <div id=\"openweathermap-widget-11\"></div>
                            <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 11,cityid: '2473245',appid: '530a9cc227de19e67de05378ce472466',units: 'metric',containerid: 'openweathermap-widget-11',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = \"utf-8\";script.src = \"//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js\";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

                    </div>




                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Feb 2021 19:17:39 GMT -->
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hoteldepartement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  124 => 41,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Options test{% endblock %}


{% block body %}


    <body class=\"sidebar-noneoverflow\">



    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">

        <div class=\"overlay\"></div>
        <div class=\"search-overlay\"></div>


        <!--  BEGIN CONTENT AREA  -->

        <div >
            <div class=\"layout-px-spacing\">

                <div class=\"row layout-top-spacing\">
                    <!--  HOTELS INFO AREA  -->
                    <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-chart-one\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">HOTEL DEPARTEMENT ELEMENTS</h5>
                                <ul class=\"tabs tab-pills\">
                                    <li><a href=\"javascript:void(0);\" id=\"tb_1\" class=\"tabmenu\">Currently</a></li>
                                </ul>
                            </div>

                            <div id=\"div_chart\"></div>


                            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                            <script type=\"text/javascript\">
                                {{ gc_draw(pieChart, 'div_chart') }}
                                {{ gc_draw(barchart, 'div_chart2') }}
                            </script>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-chart-two\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">HOTELS BY STARS</h5>
                            </div>
                            <div class=\"widget-content\">
                                <div id=\"div_chart2\"></div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing\">

                            <div id=\"openweathermap-widget-11\"></div>
                            <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 11,cityid: '2473245',appid: '530a9cc227de19e67de05378ce472466',units: 'metric',containerid: 'openweathermap-widget-11',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = \"utf-8\";script.src = \"//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js\";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

                    </div>




                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Feb 2021 19:17:39 GMT -->
    </html>

{% endblock %}", "hoteldepartement.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\hoteldepartement.html.twig");
    }
}
