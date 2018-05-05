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
        $__internal_a8fd0d9978a1d1338eaa0f597ad541f6336d20480cc2da707e72c43cc6f5aa9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fd0d9978a1d1338eaa0f597ad541f6336d20480cc2da707e72c43cc6f5aa9f->enter($__internal_a8fd0d9978a1d1338eaa0f597ad541f6336d20480cc2da707e72c43cc6f5aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_893083e2435d127f08efffa03510f5f9344ed75bf9417bb3b07e5597501b2664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893083e2435d127f08efffa03510f5f9344ed75bf9417bb3b07e5597501b2664->enter($__internal_893083e2435d127f08efffa03510f5f9344ed75bf9417bb3b07e5597501b2664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a8fd0d9978a1d1338eaa0f597ad541f6336d20480cc2da707e72c43cc6f5aa9f->leave($__internal_a8fd0d9978a1d1338eaa0f597ad541f6336d20480cc2da707e72c43cc6f5aa9f_prof);

        
        $__internal_893083e2435d127f08efffa03510f5f9344ed75bf9417bb3b07e5597501b2664->leave($__internal_893083e2435d127f08efffa03510f5f9344ed75bf9417bb3b07e5597501b2664_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd70955fc5bd4c43f547d94059dff5363520565acf7daf8d12fc38ef1c50485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd70955fc5bd4c43f547d94059dff5363520565acf7daf8d12fc38ef1c50485->enter($__internal_cfd70955fc5bd4c43f547d94059dff5363520565acf7daf8d12fc38ef1c50485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33fb6f922ec2188357decf555e7286713140847e33b9095b5f5db2238f3e0547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fb6f922ec2188357decf555e7286713140847e33b9095b5f5db2238f3e0547->enter($__internal_33fb6f922ec2188357decf555e7286713140847e33b9095b5f5db2238f3e0547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_33fb6f922ec2188357decf555e7286713140847e33b9095b5f5db2238f3e0547->leave($__internal_33fb6f922ec2188357decf555e7286713140847e33b9095b5f5db2238f3e0547_prof);

        
        $__internal_cfd70955fc5bd4c43f547d94059dff5363520565acf7daf8d12fc38ef1c50485->leave($__internal_cfd70955fc5bd4c43f547d94059dff5363520565acf7daf8d12fc38ef1c50485_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6521385ecca1ce4ceaa6df48fde086195e82a7e96e1880e3c6b526958fc4b796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6521385ecca1ce4ceaa6df48fde086195e82a7e96e1880e3c6b526958fc4b796->enter($__internal_6521385ecca1ce4ceaa6df48fde086195e82a7e96e1880e3c6b526958fc4b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8c8ccbbcc8c24777d93a28037b7d067e48c108fee186f09446e8f513959907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c8ccbbcc8c24777d93a28037b7d067e48c108fee186f09446e8f513959907d->enter($__internal_a8c8ccbbcc8c24777d93a28037b7d067e48c108fee186f09446e8f513959907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8c8ccbbcc8c24777d93a28037b7d067e48c108fee186f09446e8f513959907d->leave($__internal_a8c8ccbbcc8c24777d93a28037b7d067e48c108fee186f09446e8f513959907d_prof);

        
        $__internal_6521385ecca1ce4ceaa6df48fde086195e82a7e96e1880e3c6b526958fc4b796->leave($__internal_6521385ecca1ce4ceaa6df48fde086195e82a7e96e1880e3c6b526958fc4b796_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_981d48146248f0c8988fdc3c476868d4231ba95047e2b99bc0df3e31ba9d5687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981d48146248f0c8988fdc3c476868d4231ba95047e2b99bc0df3e31ba9d5687->enter($__internal_981d48146248f0c8988fdc3c476868d4231ba95047e2b99bc0df3e31ba9d5687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0d82b487b73ad914a0e8c974e534f8843f5070023c23943058278ee4b119a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d82b487b73ad914a0e8c974e534f8843f5070023c23943058278ee4b119a3d->enter($__internal_f0d82b487b73ad914a0e8c974e534f8843f5070023c23943058278ee4b119a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0d82b487b73ad914a0e8c974e534f8843f5070023c23943058278ee4b119a3d->leave($__internal_f0d82b487b73ad914a0e8c974e534f8843f5070023c23943058278ee4b119a3d_prof);

        
        $__internal_981d48146248f0c8988fdc3c476868d4231ba95047e2b99bc0df3e31ba9d5687->leave($__internal_981d48146248f0c8988fdc3c476868d4231ba95047e2b99bc0df3e31ba9d5687_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21ac788f0bf78d0c69e84b607b139fcbdde09c86903749879e7430b310435826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ac788f0bf78d0c69e84b607b139fcbdde09c86903749879e7430b310435826->enter($__internal_21ac788f0bf78d0c69e84b607b139fcbdde09c86903749879e7430b310435826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bc4e5b9c9b928a3dda5acd3007de34c31f868ed71b81d0ef0a16a1df1b30822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc4e5b9c9b928a3dda5acd3007de34c31f868ed71b81d0ef0a16a1df1b30822->enter($__internal_3bc4e5b9c9b928a3dda5acd3007de34c31f868ed71b81d0ef0a16a1df1b30822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bc4e5b9c9b928a3dda5acd3007de34c31f868ed71b81d0ef0a16a1df1b30822->leave($__internal_3bc4e5b9c9b928a3dda5acd3007de34c31f868ed71b81d0ef0a16a1df1b30822_prof);

        
        $__internal_21ac788f0bf78d0c69e84b607b139fcbdde09c86903749879e7430b310435826->leave($__internal_21ac788f0bf78d0c69e84b607b139fcbdde09c86903749879e7430b310435826_prof);

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
", "base.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/app/Resources/views/base.html.twig");
    }
}
