<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fd248f0359b3639a26a13496d939e8a6914f0d8e7f9033a86d4ff4a187a4fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd248f0359b3639a26a13496d939e8a6914f0d8e7f9033a86d4ff4a187a4fb4->enter($__internal_5fd248f0359b3639a26a13496d939e8a6914f0d8e7f9033a86d4ff4a187a4fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ec9ec1958d95de3d6256c0377a0844d4d660690a662f8563a2de2ef94fec2efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9ec1958d95de3d6256c0377a0844d4d660690a662f8563a2de2ef94fec2efe->enter($__internal_ec9ec1958d95de3d6256c0377a0844d4d660690a662f8563a2de2ef94fec2efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_5fd248f0359b3639a26a13496d939e8a6914f0d8e7f9033a86d4ff4a187a4fb4->leave($__internal_5fd248f0359b3639a26a13496d939e8a6914f0d8e7f9033a86d4ff4a187a4fb4_prof);

        
        $__internal_ec9ec1958d95de3d6256c0377a0844d4d660690a662f8563a2de2ef94fec2efe->leave($__internal_ec9ec1958d95de3d6256c0377a0844d4d660690a662f8563a2de2ef94fec2efe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8326559114ee3a3640968d343ffdbe548cc794fe02dbbcedb4d038ec6c7662e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8326559114ee3a3640968d343ffdbe548cc794fe02dbbcedb4d038ec6c7662e6->enter($__internal_8326559114ee3a3640968d343ffdbe548cc794fe02dbbcedb4d038ec6c7662e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e3a672959f1ede5b59f478907fa9bd904cbd5f7fd43e420957ff102328c3802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3a672959f1ede5b59f478907fa9bd904cbd5f7fd43e420957ff102328c3802->enter($__internal_8e3a672959f1ede5b59f478907fa9bd904cbd5f7fd43e420957ff102328c3802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_8e3a672959f1ede5b59f478907fa9bd904cbd5f7fd43e420957ff102328c3802->leave($__internal_8e3a672959f1ede5b59f478907fa9bd904cbd5f7fd43e420957ff102328c3802_prof);

        
        $__internal_8326559114ee3a3640968d343ffdbe548cc794fe02dbbcedb4d038ec6c7662e6->leave($__internal_8326559114ee3a3640968d343ffdbe548cc794fe02dbbcedb4d038ec6c7662e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19947c8c3b9999c821992d8318dabb7d6db47f2f612ba3d840168874c3986c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19947c8c3b9999c821992d8318dabb7d6db47f2f612ba3d840168874c3986c46->enter($__internal_19947c8c3b9999c821992d8318dabb7d6db47f2f612ba3d840168874c3986c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_625823e2c2ca668ed39ff39dadc948451b0974fddf8f6090b1216b7887e93128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625823e2c2ca668ed39ff39dadc948451b0974fddf8f6090b1216b7887e93128->enter($__internal_625823e2c2ca668ed39ff39dadc948451b0974fddf8f6090b1216b7887e93128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_625823e2c2ca668ed39ff39dadc948451b0974fddf8f6090b1216b7887e93128->leave($__internal_625823e2c2ca668ed39ff39dadc948451b0974fddf8f6090b1216b7887e93128_prof);

        
        $__internal_19947c8c3b9999c821992d8318dabb7d6db47f2f612ba3d840168874c3986c46->leave($__internal_19947c8c3b9999c821992d8318dabb7d6db47f2f612ba3d840168874c3986c46_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_5008f8bca0e1ca074da107f143360fb00028a452a785d2383a8ac40fae3b987d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5008f8bca0e1ca074da107f143360fb00028a452a785d2383a8ac40fae3b987d->enter($__internal_5008f8bca0e1ca074da107f143360fb00028a452a785d2383a8ac40fae3b987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef994e52d82e9460d096c0671a8697806f4b4d2679fc3f2fd175d9f575e2d0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef994e52d82e9460d096c0671a8697806f4b4d2679fc3f2fd175d9f575e2d0ce->enter($__internal_ef994e52d82e9460d096c0671a8697806f4b4d2679fc3f2fd175d9f575e2d0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef994e52d82e9460d096c0671a8697806f4b4d2679fc3f2fd175d9f575e2d0ce->leave($__internal_ef994e52d82e9460d096c0671a8697806f4b4d2679fc3f2fd175d9f575e2d0ce_prof);

        
        $__internal_5008f8bca0e1ca074da107f143360fb00028a452a785d2383a8ac40fae3b987d->leave($__internal_5008f8bca0e1ca074da107f143360fb00028a452a785d2383a8ac40fae3b987d_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e7a4f1506a513070ec2595e17a880b072712373333ff1aa06ea6ce9d2be82cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7a4f1506a513070ec2595e17a880b072712373333ff1aa06ea6ce9d2be82cb->enter($__internal_7e7a4f1506a513070ec2595e17a880b072712373333ff1aa06ea6ce9d2be82cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8684e686310d5adda614119169d8f69da811942ef0ad39d72154e77cb3dda456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8684e686310d5adda614119169d8f69da811942ef0ad39d72154e77cb3dda456->enter($__internal_8684e686310d5adda614119169d8f69da811942ef0ad39d72154e77cb3dda456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8684e686310d5adda614119169d8f69da811942ef0ad39d72154e77cb3dda456->leave($__internal_8684e686310d5adda614119169d8f69da811942ef0ad39d72154e77cb3dda456_prof);

        
        $__internal_7e7a4f1506a513070ec2595e17a880b072712373333ff1aa06ea6ce9d2be82cb->leave($__internal_7e7a4f1506a513070ec2595e17a880b072712373333ff1aa06ea6ce9d2be82cb_prof);

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
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/base.html.twig");
    }
}
