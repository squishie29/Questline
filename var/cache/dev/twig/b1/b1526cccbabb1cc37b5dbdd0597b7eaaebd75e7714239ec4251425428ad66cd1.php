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

/* base.html.twig */
class __TwigTemplate_896bd60c991304d323d9ac777947ade30b3fd6c32c7553946ee2fd285d5edbca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'container' => [$this, 'block_container'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from designreset.com/cork/ltr/demo6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 20:01:34 GMT -->
<head>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>CORK Admin Template - Sales Dashboard </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/favicon.ico"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/css/loader.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/js/loader.js"), "html", null, true);
        echo "\"> </script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/plugins/apex/apexcharts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/css/dashboard/dash_1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class=\"sidebar-noneoverflow\">
<!-- BEGIN LOADER -->
<div id=\"load_screen\"> <div class=\"loader\"> <div class=\"loader-content\">
            <div class=\"spinner-grow align-self-center\"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class=\"header-container fixed-top\">
    <header class=\"header navbar navbar-expand-sm\">

        <ul class=\"navbar-nav theme-brand flex-row  text-center\">
            <li class=\"nav-item theme-logo\">
                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/logo.svg"), "html", null, true);
        echo "\" class=\"navbar-logo\" alt=\"logo\">
                </a>
            </li>
            <li class=\"nav-item theme-text\">
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\" class=\"nav-link\"> QuestLine </a>
            </li>
            <li class=\"nav-item toggle-sidebar\">
                <a href=\"../back/javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"></line><line x1=\"3\" y1=\"6\" x2=\"3\" y2=\"6\"></line><line x1=\"3\" y1=\"12\" x2=\"3\" y2=\"12\"></line><line x1=\"3\" y1=\"18\" x2=\"3\" y2=\"18\"></line></svg></a>
            </li>
        </ul>

        <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown apps-dropdown more-dropdown md-hidden\">
                <div class=\"dropdown  custom-dropdown-icon\">
                    <a class=\"dropdown-toggle btn\" href=\"../back/#\" role=\"button\" id=\"appSection\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-crosshair\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"22\" y1=\"12\" x2=\"18\" y2=\"12\"></line><line x1=\"6\" y1=\"12\" x2=\"2\" y2=\"12\"></line><line x1=\"12\" y1=\"6\" x2=\"12\" y2=\"2\"></line><line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"18\"></line></svg><span>Apps</span> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></a>

                    <div class=\"dropdown-menu dropdown-menu-right animated fadeInUp\" aria-labelledby=\"appSection\">
                        <a class=\"dropdown-item\" data-value=\"Chat\" href=\"../back/apps_chat.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square\"><path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path></svg> Chat</a>
                        <a class=\"dropdown-item\" data-value=\"Mailbox\" href=\"../back/apps_mailbox.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mailbox</a>
                        <a class=\"dropdown-item\" data-value=\"Todo\" href=\"../back/apps_todoList.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path></svg> Todo List</a>
                        <a class=\"dropdown-item\" data-value=\"Notes\" href=\"../back/apps_notes.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg> Notes</a>
                        <a class=\"dropdown-item\" data-value=\"Scrumboard\" href=\"../back/apps_scrumboard.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-plus\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"></line><line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"></line></svg> Scrumboard</a>
                        <a class=\"dropdown-item\" data-value=\"Contacts\" href=\"../back/apps_contacts.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map-pin\"><path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg> Contacts</a>
                        <a class=\"dropdown-item\" data-value=\"Invoice\" href=\"../back/apps_invoice.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg> Invoice List</a>
                        <a class=\"dropdown-item\" data-value=\"Calendar\" href=\"../back/apps_calendar.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line></svg> Calendar</a>
                    </div>
                </div>
            </li>
        </ul>

        <ul class=\"navbar-item flex-row search-ul\">
            <li class=\"nav-item align-self-center search-animated\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search toggle-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>
                <form class=\"form-inline search-full form-inline search\" role=\"search\">
                    <div class=\"search-bar\">
                        <input type=\"text\"  class=\"form-control search-form-control  ml-lg-auto\" placeholder=\"Search...\">
                    </div>
                </form>
            </li>
        </ul>
        <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown language-dropdown more-dropdown\">
                <div class=\"dropdown  custom-dropdown-icon\">
                    <a class=\"dropdown-toggle btn\" href=\"../back/#\" role=\"button\" id=\"langDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"../back/assets/img/ca.png\" class=\"flag-width\" alt=\"flag\"><span>English</span> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></a>

                    <div class=\"dropdown-menu dropdown-menu-right animated fadeInUp\" aria-labelledby=\"langDropdown\">
                        <a class=\"dropdown-item\" data-img-value=\"de\" data-value=\"German\" href=\"../back/javascript:void(0);\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/de.png"), "html", null, true);
        echo "\" class=\"flag-width\" alt=\"flag\"> German</a>
                        <a class=\"dropdown-item\" data-img-value=\"jp\" data-value=\"Japanese\" href=\"../back/javascript:void(0);\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/jp.png"), "html", null, true);
        echo "\" class=\"flag-width\" alt=\"flag\"> Japanese</a>
                        <a class=\"dropdown-item\" data-img-value=\"fr\" data-value=\"French\" href=\"../back/javascript:void(0);\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/fr.png"), "html", null, true);
        echo "\" class=\"flag-width\" alt=\"flag\"> French</a>
                        <a class=\"dropdown-item\" data-img-value=\"ca\" data-value=\"English\" href=\"../back/javascript:void(0);\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/ca.png"), "html", null, true);
        echo "\" class=\"flag-width\" alt=\"flag\"> English</a>
                    </div>
                </div>
            </li>

            <li class=\"nav-item dropdown message-dropdown\">
                <a href=\"../back/javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"messageDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-circle\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg><span class=\"badge badge-primary\"></span>
                </a>
                <div class=\"dropdown-menu p-0 position-absolute animated fadeInUp\" aria-labelledby=\"messageDropdown\">
                    <div class=\"\">
                        <a class=\"dropdown-item\">
                            <div class=\"\">

                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">KY</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Kara Young</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"\">
                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">DA</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Daisy Anderson</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"\">

                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">OG</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Oscar Garner</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>

            ";
        // line 160
        $this->displayBlock('container', $context, $blocks);
        // line 161
        echo "
            <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                <a href=\"../back/javascript:void(0);\" class=\"nav-link dropdown-toggle user\" id=\"userProfileDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                </a>
                <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"userProfileDropdown\">
                    <div class=\"user-profile-section\">
                        <div class=\"media mx-auto\">
                            <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/profile-17.jpg"), "html", null, true);
        echo "\" class=\"img-fluid mr-2\" alt=\"avatar\">
                            <div class=\"media-body\">
                                <h5>Questline</h5>
                                <p>Administrateur</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/user_profile.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> <span>My Profile</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/apps_mailbox.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-inbox\"><polyline points=\"22 12 16 12 14 15 10 15 8 12 2 12\"></polyline><path d=\"M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\"></path></svg> <span>My Inbox</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/auth_lockscreen.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg> <span>Lock Screen</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/auth_login.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class=\"main-container\" id=\"container\">

    <div class=\"overlay\"></div>
    <div class=\"search-overlay\"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class=\"sidebar-wrapper sidebar-theme\">

        <nav id=\"sidebar\">
            <div class=\"profile-info\">
                <figure class=\"user-cover-image\"></figure>
                <div class=\"user-info\">
                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/img/profile-17.jpg"), "html", null, true);
        echo "\" alt=\"avatar\">
                    <h6 class=\"\">Questline</h6>
                    <p class=\"\">Administrateur</p>
                </div>
            </div>
            <div class=\"shadow-bottom\"></div>
            <ul class=\"list-unstyled menu-categories\" id=\"accordionExample\">
                <li class=\"menu active\">
                    <a href=\"../back/#dashboard\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            <span>Liste des entités</span>
                        </div>
                        <div>
                        </div>
                    </a>
                    <ul class=\"collapse submenu recent-submenu mini-recent-submenu list-unstyled show\" id=\"dashboard\" data-parent=\"#accordionExample\">


                        <li>
                            <a href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">Utilisateur</a>
                            <a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_index");
        echo "\">Review</a>
                            <a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categ");
        echo "\">Catégories</a>
                            <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\">Events</a>
                        </li>
                    </ul>

                </li>
                <li class=\"menu active\">
                    <a href=\"../back/#dashboard\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            <span>Liste des evenements</span>
                        </div>
                        <div>
                        </div>
                    </a>
                    <ul class=\"collapse submenu recent-submenu mini-recent-submenu list-unstyled show\" id=\"dashboard\" data-parent=\"#accordionExample\">



                        <li>
                            <a href=\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\">Event</a>
                            <a href=\"";
        // line 259
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categ");
        echo "\">Categories</a>
                            <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        echo "\">Reservations</a>
                            <a href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventStats");
        echo "\">Statistiques</a>
                        </li>
                    </ul>

                </li>

                <li class=\"menu md-visible menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>Apps</span></div>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_chat.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square\"><path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path></svg>
                            <span>Chat</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_mailbox.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                            <span>Mailbox</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_todoList.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path></svg>
                            <span>Todo List</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_notes.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg>
                            <span>Notes</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_scrumboard.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-plus\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"></line><line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"></line></svg>
                            <span>Scrumboard</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_contacts.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map-pin\"><path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_invoice.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg>
                            <span>Invoice List</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_calendar.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line></svg>
                            <span>Calendar</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span></span></div>
                </li>


                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#forms\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                            <span>Forms</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"forms\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/form_bootstrap_basic.html\"> Basic </a>
                        </li>
                        <li>
                            <a href=\"../back/form_input_group_basic.html\"> Input Group </a>
                        </li>
                        <li>
                            <a href=\"../back/form_layouts.html\"> Layouts </a>
                        </li>
                        <li>
                            <a href=\"../back/form_validation.html\"> Validation </a>
                        </li>
                        <li>
                            <a href=\"../back/form_input_mask.html\"> Input Mask </a>
                        </li>
                        <li>
                            <a href=\"../back/form_bootstrap_select.html\"> Bootstrap Select </a>
                        </li>
                        <li>
                            <a href=\"../back/form_select2.html\"> Select2 </a>
                        </li>
                        <li>
                            <a href=\"../back/form_bootstrap_touchspin.html\"> TouchSpin </a>
                        </li>
                        <li>
                            <a href=\"../back/form_maxlength.html\"> Maxlength </a>
                        </li>
                        <li>
                            <a href=\"../back/form_checkbox_radio.html\"> Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href=\"../back/form_switches.html\"> Switches </a>
                        </li>
                        <li>
                            <a href=\"../back/form_wizard.html\"> Wizards </a>
                        </li>
                        <li>
                            <a href=\"../back/form_fileupload.html\"> File Upload </a>
                        </li>
                        <li>
                            <a href=\"../back/form_quill.html\"> Quill Editor </a>
                        </li>
                        <li>
                            <a href=\"../back/form_markdown.html\"> Markdown Editor </a>
                        </li>
                        <li>
                            <a href=\"../back/form_date_range_picker.html\"> Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href=\"../back/form_clipboard.html\"> Clipboard </a>
                        </li>
                        <li>
                            <a href=\"../back/form_typeahead.html\"> Typeahead </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER AND PAGES</span></div>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#users\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                            <span>Users</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"users\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/user_profile.html\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"../back/user_account_setting.html\"> Account Settings </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#pages\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
                            <span>Pages</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"pages\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/pages_helpdesk.html\"> Helpdesk </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_contact_us.html\"> Contact Form </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_faq.html\"> FAQ </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_faq2.html\"> FAQ 2 </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_privacy.html\"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_coming_soon.html\"> Coming Soon </a>
                        </li>
                        <li>
                            <a href=\"../back/#pages-error\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\"> Error <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg> </a>
                            <ul class=\"collapse list-unstyled sub-submenu\" id=\"pages-error\" data-parent=\"#pages\">
                                <li>
                                    <a href=\"../back/pages_error404.html\"> 404 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_error500.html\"> 500 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_error503.html\"> 503 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_maintenence.html\"> Maintanence </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>EXTRA ELEMENTS</span></div>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#authentication\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg>
                            <span>Authentication</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"authentication\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/auth_login_boxed.html\"> Login Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_register_boxed.html\"> Register Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_lockscreen_boxed.html\"> Unlock Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_pass_recovery_boxed.html\"> Recover ID Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_login.html\"> Login Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_register.html\"> Register Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_lockscreen.html\"> Unlock Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_pass_recovery.html\"> Recover ID Cover </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/dragndrop_dragula.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-move\"><polyline points=\"5 9 2 12 5 15\"></polyline><polyline points=\"9 5 12 2 15 5\"></polyline><polyline points=\"15 19 12 22 9 19\"></polyline><polyline points=\"19 9 22 12 19 15\"></polyline><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><line x1=\"12\" y1=\"2\" x2=\"12\" y2=\"22\"></line></svg>
                            <span>Drag and Drop</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/map_jvector.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map\"><polygon points=\"1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6\"></polygon><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"18\"></line><line x1=\"16\" y1=\"6\" x2=\"16\" y2=\"22\"></line></svg>
                            <span>Maps</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/charts_apex.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                            <span>Charts</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#starter-kit\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-terminal\"><polyline points=\"4 17 10 11 4 5\"></polyline><line x1=\"12\" y1=\"19\" x2=\"20\" y2=\"19\"></line></svg>
                            <span>Starter Kit</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"starter-kit\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/starter_kit_blank_page.html\"> Blank Page </a>
                        </li>
                        <li>
                            <a href=\"../back/starter_kit_boxed.html\"> Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/starter_kit_collapsible_menu.html\"> Collapsible </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/https://designreset.com/cork/documentation/index.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-book\"><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"></path><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"></path></svg>
                            <span>Documentation</span>
                        </div>
                    </a>
                </li>

            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id=\"content\" class=\"main-content\">
        <div class=\"layout-px-spacing\">

            <div class=\"row layout-top-spacing\">

                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                    <div class=\"widget widget-chart-one\">
                        <div class=\"widget-heading\" >

                            <ul class=\"tabs tab-pills\">

                            </ul>
                        </div>
                        ";
        // line 614
        $this->displayBlock('body', $context, $blocks);
        // line 615
        echo "                        <div class=\"widget-content\">
                            <div class=\"tabs tab-content\">
                                <div id=\"content_1\" class=\"tabcontent\">
                                    <div ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


















            </div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © 2020 <a target=\"_blank\" href=\"../back/https://designreset.com/\">Questline    </a>, All rights reserved.</p>
                </div>
                <div class=\"footer-section f-section-2\">
                    <p class=\"\">Coded with <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-heart\"><path d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->
    ";
        // line 657
        $this->displayBlock('javascripts', $context, $blocks);
        // line 658
        echo "    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!--  <script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/js/libs/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>-->
    <script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/plugins/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/js/app.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
    <script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/plugins/apex/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../back/assets/js/dashboard/dash_1.js"), "html", null, true);
        echo "\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 20:02:06 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 614
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 657
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  905 => 657,  886 => 614,  867 => 160,  847 => 6,  830 => 674,  826 => 673,  819 => 669,  810 => 663,  806 => 662,  802 => 661,  798 => 660,  794 => 659,  791 => 658,  789 => 657,  745 => 615,  743 => 614,  387 => 261,  383 => 260,  379 => 259,  375 => 258,  353 => 239,  349 => 238,  345 => 237,  341 => 236,  318 => 216,  268 => 169,  258 => 161,  256 => 160,  183 => 90,  179 => 89,  175 => 88,  171 => 87,  126 => 45,  119 => 41,  115 => 40,  95 => 23,  91 => 22,  84 => 18,  80 => 17,  76 => 16,  71 => 14,  67 => 13,  63 => 12,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from designreset.com/cork/ltr/demo6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 20:01:34 GMT -->
<head>
    {% block stylesheets %} {{ encore_entry_link_tags('app') }}{% endblock %}

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>CORK Admin Template - Sales Dashboard </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset ('../back/assets/img/favicon.ico') }}\"/>
    <link href=\"{{ asset ('../back/assets/css/loader.css') }}\"  rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"{{asset ('../back/assets/js/loader.js')}}\"> </script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"{{asset('../back/https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('../back/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('../back/assets/css/plugins.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href=\"{{asset('../back/plugins/apex/apexcharts.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('../back/assets/css/dashboard/dash_1.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class=\"sidebar-noneoverflow\">
<!-- BEGIN LOADER -->
<div id=\"load_screen\"> <div class=\"loader\"> <div class=\"loader-content\">
            <div class=\"spinner-grow align-self-center\"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class=\"header-container fixed-top\">
    <header class=\"header navbar navbar-expand-sm\">

        <ul class=\"navbar-nav theme-brand flex-row  text-center\">
            <li class=\"nav-item theme-logo\">
                <a href=\"{{ path ('utilisateur_index') }}\">
                    <img src=\"{{asset('../back/assets/img/logo.svg')}}\" class=\"navbar-logo\" alt=\"logo\">
                </a>
            </li>
            <li class=\"nav-item theme-text\">
                <a href=\"{{path ('utilisateur_index')}}\" class=\"nav-link\"> QuestLine </a>
            </li>
            <li class=\"nav-item toggle-sidebar\">
                <a href=\"../back/javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"></line><line x1=\"3\" y1=\"6\" x2=\"3\" y2=\"6\"></line><line x1=\"3\" y1=\"12\" x2=\"3\" y2=\"12\"></line><line x1=\"3\" y1=\"18\" x2=\"3\" y2=\"18\"></line></svg></a>
            </li>
        </ul>

        <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown apps-dropdown more-dropdown md-hidden\">
                <div class=\"dropdown  custom-dropdown-icon\">
                    <a class=\"dropdown-toggle btn\" href=\"../back/#\" role=\"button\" id=\"appSection\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-crosshair\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"22\" y1=\"12\" x2=\"18\" y2=\"12\"></line><line x1=\"6\" y1=\"12\" x2=\"2\" y2=\"12\"></line><line x1=\"12\" y1=\"6\" x2=\"12\" y2=\"2\"></line><line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"18\"></line></svg><span>Apps</span> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></a>

                    <div class=\"dropdown-menu dropdown-menu-right animated fadeInUp\" aria-labelledby=\"appSection\">
                        <a class=\"dropdown-item\" data-value=\"Chat\" href=\"../back/apps_chat.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square\"><path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path></svg> Chat</a>
                        <a class=\"dropdown-item\" data-value=\"Mailbox\" href=\"../back/apps_mailbox.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mailbox</a>
                        <a class=\"dropdown-item\" data-value=\"Todo\" href=\"../back/apps_todoList.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path></svg> Todo List</a>
                        <a class=\"dropdown-item\" data-value=\"Notes\" href=\"../back/apps_notes.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg> Notes</a>
                        <a class=\"dropdown-item\" data-value=\"Scrumboard\" href=\"../back/apps_scrumboard.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-plus\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"></line><line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"></line></svg> Scrumboard</a>
                        <a class=\"dropdown-item\" data-value=\"Contacts\" href=\"../back/apps_contacts.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map-pin\"><path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg> Contacts</a>
                        <a class=\"dropdown-item\" data-value=\"Invoice\" href=\"../back/apps_invoice.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg> Invoice List</a>
                        <a class=\"dropdown-item\" data-value=\"Calendar\" href=\"../back/apps_calendar.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line></svg> Calendar</a>
                    </div>
                </div>
            </li>
        </ul>

        <ul class=\"navbar-item flex-row search-ul\">
            <li class=\"nav-item align-self-center search-animated\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search toggle-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>
                <form class=\"form-inline search-full form-inline search\" role=\"search\">
                    <div class=\"search-bar\">
                        <input type=\"text\"  class=\"form-control search-form-control  ml-lg-auto\" placeholder=\"Search...\">
                    </div>
                </form>
            </li>
        </ul>
        <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown language-dropdown more-dropdown\">
                <div class=\"dropdown  custom-dropdown-icon\">
                    <a class=\"dropdown-toggle btn\" href=\"../back/#\" role=\"button\" id=\"langDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"../back/assets/img/ca.png\" class=\"flag-width\" alt=\"flag\"><span>English</span> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></a>

                    <div class=\"dropdown-menu dropdown-menu-right animated fadeInUp\" aria-labelledby=\"langDropdown\">
                        <a class=\"dropdown-item\" data-img-value=\"de\" data-value=\"German\" href=\"../back/javascript:void(0);\"><img src=\"{{asset('../back/assets/img/de.png')}}\" class=\"flag-width\" alt=\"flag\"> German</a>
                        <a class=\"dropdown-item\" data-img-value=\"jp\" data-value=\"Japanese\" href=\"../back/javascript:void(0);\"><img src=\"{{asset('../back/assets/img/jp.png')}}\" class=\"flag-width\" alt=\"flag\"> Japanese</a>
                        <a class=\"dropdown-item\" data-img-value=\"fr\" data-value=\"French\" href=\"../back/javascript:void(0);\"><img src=\"{{asset('../back/assets/img/fr.png')}}\" class=\"flag-width\" alt=\"flag\"> French</a>
                        <a class=\"dropdown-item\" data-img-value=\"ca\" data-value=\"English\" href=\"../back/javascript:void(0);\"><img src=\"{{asset('../back/assets/img/ca.png')}}\" class=\"flag-width\" alt=\"flag\"> English</a>
                    </div>
                </div>
            </li>

            <li class=\"nav-item dropdown message-dropdown\">
                <a href=\"../back/javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"messageDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-circle\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"></path></svg><span class=\"badge badge-primary\"></span>
                </a>
                <div class=\"dropdown-menu p-0 position-absolute animated fadeInUp\" aria-labelledby=\"messageDropdown\">
                    <div class=\"\">
                        <a class=\"dropdown-item\">
                            <div class=\"\">

                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">KY</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Kara Young</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"\">
                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">DA</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Daisy Anderson</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"\">

                                <div class=\"media\">
                                    <div class=\"user-img\">
                                        <div class=\"avatar avatar-xl\">
                                            <span class=\"avatar-title rounded-circle\">OG</span>
                                        </div>
                                    </div>
                                    <div class=\"media-body\">
                                        <div class=\"\">
                                            <h5 class=\"usr-name\">Oscar Garner</h5>
                                            <p class=\"msg-title\">ACCOUNT UPDATE</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>

            {% block container %} {% endblock %}

            <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                <a href=\"../back/javascript:void(0);\" class=\"nav-link dropdown-toggle user\" id=\"userProfileDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                </a>
                <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"userProfileDropdown\">
                    <div class=\"user-profile-section\">
                        <div class=\"media mx-auto\">
                            <img src=\"{{asset('../back/assets/img/profile-17.jpg')}}\" class=\"img-fluid mr-2\" alt=\"avatar\">
                            <div class=\"media-body\">
                                <h5>Questline</h5>
                                <p>Administrateur</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/user_profile.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> <span>My Profile</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/apps_mailbox.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-inbox\"><polyline points=\"22 12 16 12 14 15 10 15 8 12 2 12\"></polyline><path d=\"M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\"></path></svg> <span>My Inbox</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/auth_lockscreen.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg> <span>Lock Screen</span>
                        </a>
                    </div>
                    <div class=\"dropdown-item\">
                        <a href=\"../back/auth_login.html\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class=\"main-container\" id=\"container\">

    <div class=\"overlay\"></div>
    <div class=\"search-overlay\"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class=\"sidebar-wrapper sidebar-theme\">

        <nav id=\"sidebar\">
            <div class=\"profile-info\">
                <figure class=\"user-cover-image\"></figure>
                <div class=\"user-info\">
                    <img src=\"{{asset('../back/assets/img/profile-17.jpg')}}\" alt=\"avatar\">
                    <h6 class=\"\">Questline</h6>
                    <p class=\"\">Administrateur</p>
                </div>
            </div>
            <div class=\"shadow-bottom\"></div>
            <ul class=\"list-unstyled menu-categories\" id=\"accordionExample\">
                <li class=\"menu active\">
                    <a href=\"../back/#dashboard\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            <span>Liste des entités</span>
                        </div>
                        <div>
                        </div>
                    </a>
                    <ul class=\"collapse submenu recent-submenu mini-recent-submenu list-unstyled show\" id=\"dashboard\" data-parent=\"#accordionExample\">


                        <li>
                            <a href=\"{{ path('utilisateur_index') }}\">Utilisateur</a>
                            <a href=\"{{ path('review_index') }}\">Review</a>
                            <a href=\"{{ path('categ') }}\">Catégories</a>
                            <a href=\"{{ path('event') }}\">Events</a>
                        </li>
                    </ul>

                </li>
                <li class=\"menu active\">
                    <a href=\"../back/#dashboard\" data-toggle=\"collapse\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            <span>Liste des evenements</span>
                        </div>
                        <div>
                        </div>
                    </a>
                    <ul class=\"collapse submenu recent-submenu mini-recent-submenu list-unstyled show\" id=\"dashboard\" data-parent=\"#accordionExample\">



                        <li>
                            <a href=\"{{ path('event') }}\">Event</a>
                            <a href=\"{{ path('categ') }}\">Categories</a>
                            <a href=\"{{ path('reservations') }}\">Reservations</a>
                            <a href=\"{{ path('eventStats') }}\">Statistiques</a>
                        </li>
                    </ul>

                </li>

                <li class=\"menu md-visible menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>Apps</span></div>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_chat.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square\"><path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path></svg>
                            <span>Chat</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_mailbox.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                            <span>Mailbox</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_todoList.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path></svg>
                            <span>Todo List</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_notes.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg>
                            <span>Notes</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_scrumboard.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-plus\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"></line><line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"></line></svg>
                            <span>Scrumboard</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_contacts.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map-pin\"><path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path><circle cx=\"12\" cy=\"10\" r=\"3\"></circle></svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_invoice.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line><path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg>
                            <span>Invoice List</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu md-visible\">
                    <a href=\"../back/apps_calendar.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line></svg>
                            <span>Calendar</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span></span></div>
                </li>


                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#forms\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                            <span>Forms</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"forms\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/form_bootstrap_basic.html\"> Basic </a>
                        </li>
                        <li>
                            <a href=\"../back/form_input_group_basic.html\"> Input Group </a>
                        </li>
                        <li>
                            <a href=\"../back/form_layouts.html\"> Layouts </a>
                        </li>
                        <li>
                            <a href=\"../back/form_validation.html\"> Validation </a>
                        </li>
                        <li>
                            <a href=\"../back/form_input_mask.html\"> Input Mask </a>
                        </li>
                        <li>
                            <a href=\"../back/form_bootstrap_select.html\"> Bootstrap Select </a>
                        </li>
                        <li>
                            <a href=\"../back/form_select2.html\"> Select2 </a>
                        </li>
                        <li>
                            <a href=\"../back/form_bootstrap_touchspin.html\"> TouchSpin </a>
                        </li>
                        <li>
                            <a href=\"../back/form_maxlength.html\"> Maxlength </a>
                        </li>
                        <li>
                            <a href=\"../back/form_checkbox_radio.html\"> Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href=\"../back/form_switches.html\"> Switches </a>
                        </li>
                        <li>
                            <a href=\"../back/form_wizard.html\"> Wizards </a>
                        </li>
                        <li>
                            <a href=\"../back/form_fileupload.html\"> File Upload </a>
                        </li>
                        <li>
                            <a href=\"../back/form_quill.html\"> Quill Editor </a>
                        </li>
                        <li>
                            <a href=\"../back/form_markdown.html\"> Markdown Editor </a>
                        </li>
                        <li>
                            <a href=\"../back/form_date_range_picker.html\"> Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href=\"../back/form_clipboard.html\"> Clipboard </a>
                        </li>
                        <li>
                            <a href=\"../back/form_typeahead.html\"> Typeahead </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER AND PAGES</span></div>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#users\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                            <span>Users</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"users\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/user_profile.html\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"../back/user_account_setting.html\"> Account Settings </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#pages\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg>
                            <span>Pages</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"pages\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/pages_helpdesk.html\"> Helpdesk </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_contact_us.html\"> Contact Form </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_faq.html\"> FAQ </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_faq2.html\"> FAQ 2 </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_privacy.html\"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href=\"../back/pages_coming_soon.html\"> Coming Soon </a>
                        </li>
                        <li>
                            <a href=\"../back/#pages-error\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\"> Error <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg> </a>
                            <ul class=\"collapse list-unstyled sub-submenu\" id=\"pages-error\" data-parent=\"#pages\">
                                <li>
                                    <a href=\"../back/pages_error404.html\"> 404 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_error500.html\"> 500 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_error503.html\"> 503 </a>
                                </li>
                                <li>
                                    <a href=\"../back/pages_maintenence.html\"> Maintanence </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class=\"menu menu-heading\">
                    <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>EXTRA ELEMENTS</span></div>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#authentication\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg>
                            <span>Authentication</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"authentication\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/auth_login_boxed.html\"> Login Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_register_boxed.html\"> Register Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_lockscreen_boxed.html\"> Unlock Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_pass_recovery_boxed.html\"> Recover ID Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_login.html\"> Login Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_register.html\"> Register Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_lockscreen.html\"> Unlock Cover </a>
                        </li>
                        <li>
                            <a href=\"../back/auth_pass_recovery.html\"> Recover ID Cover </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/dragndrop_dragula.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-move\"><polyline points=\"5 9 2 12 5 15\"></polyline><polyline points=\"9 5 12 2 15 5\"></polyline><polyline points=\"15 19 12 22 9 19\"></polyline><polyline points=\"19 9 22 12 19 15\"></polyline><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><line x1=\"12\" y1=\"2\" x2=\"12\" y2=\"22\"></line></svg>
                            <span>Drag and Drop</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/map_jvector.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-map\"><polygon points=\"1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6\"></polygon><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"18\"></line><line x1=\"16\" y1=\"6\" x2=\"16\" y2=\"22\"></line></svg>
                            <span>Maps</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/charts_apex.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                            <span>Charts</span>
                        </div>
                    </a>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/#starter-kit\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-terminal\"><polyline points=\"4 17 10 11 4 5\"></polyline><line x1=\"12\" y1=\"19\" x2=\"20\" y2=\"19\"></line></svg>
                            <span>Starter Kit</span>
                        </div>
                        <div>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                        </div>
                    </a>
                    <ul class=\"collapse submenu list-unstyled\" id=\"starter-kit\" data-parent=\"#accordionExample\">
                        <li>
                            <a href=\"../back/starter_kit_blank_page.html\"> Blank Page </a>
                        </li>
                        <li>
                            <a href=\"../back/starter_kit_boxed.html\"> Boxed </a>
                        </li>
                        <li>
                            <a href=\"../back/starter_kit_collapsible_menu.html\"> Collapsible </a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu\">
                    <a href=\"../back/https://designreset.com/cork/documentation/index.html\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                        <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-book\"><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"></path><path d=\"M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z\"></path></svg>
                            <span>Documentation</span>
                        </div>
                    </a>
                </li>

            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id=\"content\" class=\"main-content\">
        <div class=\"layout-px-spacing\">

            <div class=\"row layout-top-spacing\">

                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                    <div class=\"widget widget-chart-one\">
                        <div class=\"widget-heading\" >

                            <ul class=\"tabs tab-pills\">

                            </ul>
                        </div>
                        {% block body %} {% endblock %}
                        <div class=\"widget-content\">
                            <div class=\"tabs tab-content\">
                                <div id=\"content_1\" class=\"tabcontent\">
                                    <div ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


















            </div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © 2020 <a target=\"_blank\" href=\"../back/https://designreset.com/\">Questline    </a>, All rights reserved.</p>
                </div>
                <div class=\"footer-section f-section-2\">
                    <p class=\"\">Coded with <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-heart\"><path d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->
    {% block javascripts %} {{ encore_entry_script_tags('app') }} {% endblock %}
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!--  <script src=\"{{asset('../back/assets/js/libs/jquery-3.1.1.min.js')}}\"></script>-->
    <script src=\"{{asset('../back/bootstrap/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('../back/bootstrap/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('../back/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}\"></script>
    <script src=\"{{asset('../back/assets/js/app.js')}}\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
    <script src=\"{{asset('../back/assets/js/custom.js')}}\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"{{asset('../back/plugins/apex/apexcharts.min.js')}}\"></script>
    <script src=\"{{asset('../back/assets/js/dashboard/dash_1.js')}}\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 20:02:06 GMT -->
</html>", "base.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\base.html.twig");
    }
}
