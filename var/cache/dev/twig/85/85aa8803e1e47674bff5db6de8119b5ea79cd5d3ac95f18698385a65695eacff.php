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

/* front/hotel-details.html.twig */
class __TwigTemplate_25c965af4b770002729f786fe06e639e4c65d0bdddc6a92e53a6ae41087302f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/hotel-details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/hotel-details.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/hotel-details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-body\">
      <section class=\"page-section pt-0 pb-50\">
        <div class=\"container\">
          <div class=\"menu-widget with-switch mt-30 mb-30\">
            <ul class=\"magic-line\">
              <li class=\"current_item\"><a href=\"#overview\" class=\"scrollto\">Overview</a></li>
              <li><a href=\"#prices\" class=\"scrollto\">Prices</a></li>
              <li><a href=\"#location\" class=\"scrollto\">Location</a></li>
              <li><a href=\"#amenties\" class=\"scrollto\">Amenties</a></li>
              <li><a href=\"#reviews\" class=\"scrollto\">Reviews (28) <span class=\"stars stars-5\"></span></a></li>
            </ul>
          </div>
        </div>
        <div class=\"container\">
          <div id=\"flex-slider\" class=\"flexslider\">
            <ul class=\"slides\">
              <li><img src=\"pic/flexslider/l-1.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-2.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-3.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-4.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-5.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-6.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-7.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-8.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-9.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-1.jpg\" alt></li>
            </ul>
          </div>
          <div id=\"flex-carousel\" class=\"flexslider\">
            <ul class=\"slides\">
              <li><img src=\"pic/flexslider/1%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/2.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/3.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/4.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/5.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/6.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/7%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/8%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/9.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/1.jpg\"  alt></li>
            </ul>
          </div>
        </div>
        <!-- section reviews-->
        <div id=\"reviews\" class=\"container mb-60\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <h4 class=\"trans-uppercase mb-10\">Reviews travellers</h4>
              <div class=\"cws_divider mb-30\"></div>
            </div>
          </div>
          <div class=\"reviews-wrap\">
            <div class=\"reviews-top pattern relative\">
              <div class=\"reviews-total\">
                <h5>Excellent</h5>
                <div class=\"reviews-sub-mark\">4.2</div>
                <div class=\"stars-perc\"><span style=\"width:85%\"></span></div><span>Based on 18 reviews</span>
              </div>
              <div class=\"reviews-marks\">
                <ul>
                  <li>Cleanliness<span><span class=\"stars-perc\"><span style=\"width:85%\"></span></span>4.5</span></li>
                  <li>Location<span><span class=\"stars-perc\"><span style=\"width:80%\"></span></span>4.0</span></li>
                  <li>Staff<span><span class=\"stars-perc\"><span style=\"width:100%\"></span></span>5.0</span></li>
                  <li>Free Wi-Fi<span><span class=\"stars-perc\"><span style=\"width:65%\"> </span></span>3.5</span></li>
                </ul>
                <ul>
                  <li>Comfort<span><span class=\"stars-perc\"><span style=\"width:85%\"> </span></span>4.5</span></li>
                  <li>Facilities<span><span class=\"stars-perc\"><span style=\"width:80%\"></span></span>4.0</span></li>
                  <li>Value for money<span><span class=\"stars-perc\"><span style=\"width:100%\"> </span></span>5.0</span></li>
                </ul>
              </div>
            </div>
            <div class=\"comments\">
              <div class=\"comment-body\">
                
                <div class=\"comment-info\">
                  <div class=\"comment-meta\">
                    <div class=\"title\">
                      
                    </div>
                    <div class=\"comment-date\">
                      
                    </div>
                  </div>
                  <div class=\"comment-content\">
                    <h2>Browse reviews</h2>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Comment</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviewss"]) || array_key_exists("reviewss", $context) ? $context["reviewss"] : (function () { throw new RuntimeError('Variable "reviewss" does not exist.', 100, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 101
            echo "            <tr>
            
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "idUtil", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 105), 1))) {
                // line 106
                echo "                <div class=\"stars stars-1\"></div>
                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 107
$context["review"], "rating", [], "any", false, false, false, 107), 2))) {
                // line 108
                echo "                <div class=\"stars stars-2\"></div>
                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 109
$context["review"], "rating", [], "any", false, false, false, 109), 3))) {
                // line 110
                echo "                <div class=\"stars stars-3\"></div>
                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 111
$context["review"], "rating", [], "any", false, false, false, 111), 4))) {
                // line 112
                echo "                <div class=\"stars stars-4\"></div>
                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 113
$context["review"], "rating", [], "any", false, false, false, 113), 5))) {
                // line 114
                echo "                <div class=\"stars stars-5\"></div>
                ";
            }
            // line 116
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </tbody>
    </table>
                  </div>
                </div>
              </div>
              <div class=\"comment-body\">
                
                <div class=\"comment-info\">
                  <div class=\"comment-meta\">
                    <div class=\"title\">
                      
                    </div>
                  </div>
                  <div class=\"comment-content\">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class=\"reviews-bottom\">
              
            </div>
          </div>
        </div>
        
        <!-- review -->
        <div class=\"container\">
        <h4 class=\"trans-uppercase mb-10\">Write a review</h4>
        <div class=\"cws_divider mb-30\"></div>
         ";
        // line 152
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 152, $this->source); })()), 'form_start', ["attr" => ["class" => "review-content"]]);
        echo "
        

                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 155, $this->source); })()), "comment", [], "any", false, false, false, 155), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 156, $this->source); })()), "rating", [], "any", false, false, false, 156), 'row', ["attr" => ["class" => "form-row"]]);
        echo "
                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 157, $this->source); })()), "idUtil", [], "any", false, false, false, 157), 'row');
        echo "
                
                
        
        <button class=\"cws-button alt float-right\">";
        // line 161
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 161, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 162, $this->source); })()), 'form_end');
        echo " 
        </div>
          ";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 164, $this->source); })()), "idUtil", [], "any", false, false, false, 164));
        echo "
          ";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["formreview"]) || array_key_exists("formreview", $context) ? $context["formreview"] : (function () { throw new RuntimeError('Variable "formreview" does not exist.', 165, $this->source); })()), "idUtil", [], "any", false, false, false, 165));
        echo "

        
        <!-- ! review -->
      </section>
    </div>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/hotel-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 165,  286 => 164,  281 => 162,  277 => 161,  270 => 157,  266 => 156,  262 => 155,  256 => 152,  225 => 123,  216 => 119,  209 => 116,  205 => 114,  203 => 113,  200 => 112,  198 => 111,  195 => 110,  193 => 109,  190 => 108,  188 => 107,  185 => 106,  183 => 105,  179 => 104,  175 => 103,  171 => 101,  166 => 100,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
  
{% block body %}
    <div class=\"content-body\">
      <section class=\"page-section pt-0 pb-50\">
        <div class=\"container\">
          <div class=\"menu-widget with-switch mt-30 mb-30\">
            <ul class=\"magic-line\">
              <li class=\"current_item\"><a href=\"#overview\" class=\"scrollto\">Overview</a></li>
              <li><a href=\"#prices\" class=\"scrollto\">Prices</a></li>
              <li><a href=\"#location\" class=\"scrollto\">Location</a></li>
              <li><a href=\"#amenties\" class=\"scrollto\">Amenties</a></li>
              <li><a href=\"#reviews\" class=\"scrollto\">Reviews (28) <span class=\"stars stars-5\"></span></a></li>
            </ul>
          </div>
        </div>
        <div class=\"container\">
          <div id=\"flex-slider\" class=\"flexslider\">
            <ul class=\"slides\">
              <li><img src=\"pic/flexslider/l-1.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-2.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-3.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-4.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-5.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-6.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-7.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-8.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-9.jpg\" alt></li>
              <li><img src=\"pic/flexslider/l-1.jpg\" alt></li>
            </ul>
          </div>
          <div id=\"flex-carousel\" class=\"flexslider\">
            <ul class=\"slides\">
              <li><img src=\"pic/flexslider/1%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/2.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/3.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/4.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/5.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/6.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/7%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/8%402x.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/9.jpg\"  alt></li>
              <li><img src=\"pic/flexslider/1.jpg\"  alt></li>
            </ul>
          </div>
        </div>
        <!-- section reviews-->
        <div id=\"reviews\" class=\"container mb-60\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <h4 class=\"trans-uppercase mb-10\">Reviews travellers</h4>
              <div class=\"cws_divider mb-30\"></div>
            </div>
          </div>
          <div class=\"reviews-wrap\">
            <div class=\"reviews-top pattern relative\">
              <div class=\"reviews-total\">
                <h5>Excellent</h5>
                <div class=\"reviews-sub-mark\">4.2</div>
                <div class=\"stars-perc\"><span style=\"width:85%\"></span></div><span>Based on 18 reviews</span>
              </div>
              <div class=\"reviews-marks\">
                <ul>
                  <li>Cleanliness<span><span class=\"stars-perc\"><span style=\"width:85%\"></span></span>4.5</span></li>
                  <li>Location<span><span class=\"stars-perc\"><span style=\"width:80%\"></span></span>4.0</span></li>
                  <li>Staff<span><span class=\"stars-perc\"><span style=\"width:100%\"></span></span>5.0</span></li>
                  <li>Free Wi-Fi<span><span class=\"stars-perc\"><span style=\"width:65%\"> </span></span>3.5</span></li>
                </ul>
                <ul>
                  <li>Comfort<span><span class=\"stars-perc\"><span style=\"width:85%\"> </span></span>4.5</span></li>
                  <li>Facilities<span><span class=\"stars-perc\"><span style=\"width:80%\"></span></span>4.0</span></li>
                  <li>Value for money<span><span class=\"stars-perc\"><span style=\"width:100%\"> </span></span>5.0</span></li>
                </ul>
              </div>
            </div>
            <div class=\"comments\">
              <div class=\"comment-body\">
                
                <div class=\"comment-info\">
                  <div class=\"comment-meta\">
                    <div class=\"title\">
                      
                    </div>
                    <div class=\"comment-date\">
                      
                    </div>
                  </div>
                  <div class=\"comment-content\">
                    <h2>Browse reviews</h2>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Comment</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
        {% for review in reviewss %}
            <tr>
            
                <td>{{ review.idUtil }}</td>
                <td>{{ review.comment }}</td>
                <td>{% if review.rating == 1 %}
                <div class=\"stars stars-1\"></div>
                {% elseif review.rating == 2 %}
                <div class=\"stars stars-2\"></div>
                {% elseif review.rating == 3 %}
                <div class=\"stars stars-3\"></div>
                {% elseif review.rating == 4 %}
                <div class=\"stars stars-4\"></div>
                {% elseif review.rating == 5 %}
                <div class=\"stars stars-5\"></div>
                {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
                  </div>
                </div>
              </div>
              <div class=\"comment-body\">
                
                <div class=\"comment-info\">
                  <div class=\"comment-meta\">
                    <div class=\"title\">
                      
                    </div>
                  </div>
                  <div class=\"comment-content\">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class=\"reviews-bottom\">
              
            </div>
          </div>
        </div>
        
        <!-- review -->
        <div class=\"container\">
        <h4 class=\"trans-uppercase mb-10\">Write a review</h4>
        <div class=\"cws_divider mb-30\"></div>
         {{form_start(formreview,{'attr':{'class':'review-content'}})}}
        

                {{form_row(formreview.comment, {'attr': {'class':'form-row'}})}}
                {{form_row(formreview.rating, {'attr': {'class':'form-row'}})}}
                {{form_row(formreview.idUtil)}}
                
                
        
        <button class=\"cws-button alt float-right\">{{ button_label|default('Save') }}</button>
        {{ form_end(formreview) }} 
        </div>
          {{ dump(formreview.idUtil) }}
          {{ dump(formreview.idUtil) }}

        
        <!-- ! review -->
      </section>
    </div>
    
    {% endblock %}
", "front/hotel-details.html.twig", "C:\\Users\\asus\\Desktop\\PROJET\\proj\\templates\\front\\hotel-details.html.twig");
    }
}
