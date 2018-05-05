<?php

/* base.html.twig */
class __TwigTemplate_26b0ef7d92f0714810dc3aabf7a17ea1dcb4fdf664c4e9ff8054ca9e71139470 extends Twig_Template
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
        $__internal_90462ebe182d14c481a03c2bc57d88389fb101c7d18c72dc1549667387bf0e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90462ebe182d14c481a03c2bc57d88389fb101c7d18c72dc1549667387bf0e93->enter($__internal_90462ebe182d14c481a03c2bc57d88389fb101c7d18c72dc1549667387bf0e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5320ef2ff0a43362310b09cbda518d6d2dc09aeef17e32120d2df47375f0e195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5320ef2ff0a43362310b09cbda518d6d2dc09aeef17e32120d2df47375f0e195->enter($__internal_5320ef2ff0a43362310b09cbda518d6d2dc09aeef17e32120d2df47375f0e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
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
        
        $__internal_90462ebe182d14c481a03c2bc57d88389fb101c7d18c72dc1549667387bf0e93->leave($__internal_90462ebe182d14c481a03c2bc57d88389fb101c7d18c72dc1549667387bf0e93_prof);

        
        $__internal_5320ef2ff0a43362310b09cbda518d6d2dc09aeef17e32120d2df47375f0e195->leave($__internal_5320ef2ff0a43362310b09cbda518d6d2dc09aeef17e32120d2df47375f0e195_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9bd5f02cba66608129d5ce189bb76fd2e3331c9fef19480c40546c793e0cb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bd5f02cba66608129d5ce189bb76fd2e3331c9fef19480c40546c793e0cb8a->enter($__internal_a9bd5f02cba66608129d5ce189bb76fd2e3331c9fef19480c40546c793e0cb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2624b8207dca8be513dcd2da5c3169f078d1bf95b9bdfdca163df779bfd0b0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2624b8207dca8be513dcd2da5c3169f078d1bf95b9bdfdca163df779bfd0b0ff->enter($__internal_2624b8207dca8be513dcd2da5c3169f078d1bf95b9bdfdca163df779bfd0b0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_2624b8207dca8be513dcd2da5c3169f078d1bf95b9bdfdca163df779bfd0b0ff->leave($__internal_2624b8207dca8be513dcd2da5c3169f078d1bf95b9bdfdca163df779bfd0b0ff_prof);

        
        $__internal_a9bd5f02cba66608129d5ce189bb76fd2e3331c9fef19480c40546c793e0cb8a->leave($__internal_a9bd5f02cba66608129d5ce189bb76fd2e3331c9fef19480c40546c793e0cb8a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_099702d04f6a9e0621edd5f86b38703d0b2aa5f6d0483452e91a2e0ebc1bdc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099702d04f6a9e0621edd5f86b38703d0b2aa5f6d0483452e91a2e0ebc1bdc0c->enter($__internal_099702d04f6a9e0621edd5f86b38703d0b2aa5f6d0483452e91a2e0ebc1bdc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49b99255371da0012a8d382c8cee6a59dd5f52f53dc649a291a3698b41d0d5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b99255371da0012a8d382c8cee6a59dd5f52f53dc649a291a3698b41d0d5dd->enter($__internal_49b99255371da0012a8d382c8cee6a59dd5f52f53dc649a291a3698b41d0d5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49b99255371da0012a8d382c8cee6a59dd5f52f53dc649a291a3698b41d0d5dd->leave($__internal_49b99255371da0012a8d382c8cee6a59dd5f52f53dc649a291a3698b41d0d5dd_prof);

        
        $__internal_099702d04f6a9e0621edd5f86b38703d0b2aa5f6d0483452e91a2e0ebc1bdc0c->leave($__internal_099702d04f6a9e0621edd5f86b38703d0b2aa5f6d0483452e91a2e0ebc1bdc0c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5dd5cd9c915821ffcf8c97e42078f015532703e6aaebe0ec309cac156113b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dd5cd9c915821ffcf8c97e42078f015532703e6aaebe0ec309cac156113b88->enter($__internal_e5dd5cd9c915821ffcf8c97e42078f015532703e6aaebe0ec309cac156113b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_971f73aaaaf176a9f4fa297444f11c7fbade467e033ed61c48957e4b7e907926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971f73aaaaf176a9f4fa297444f11c7fbade467e033ed61c48957e4b7e907926->enter($__internal_971f73aaaaf176a9f4fa297444f11c7fbade467e033ed61c48957e4b7e907926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_971f73aaaaf176a9f4fa297444f11c7fbade467e033ed61c48957e4b7e907926->leave($__internal_971f73aaaaf176a9f4fa297444f11c7fbade467e033ed61c48957e4b7e907926_prof);

        
        $__internal_e5dd5cd9c915821ffcf8c97e42078f015532703e6aaebe0ec309cac156113b88->leave($__internal_e5dd5cd9c915821ffcf8c97e42078f015532703e6aaebe0ec309cac156113b88_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83bed27adef53dbd5ec33b4f3bce3bc2ab910543e2aaea2ff325ac8b7c928137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bed27adef53dbd5ec33b4f3bce3bc2ab910543e2aaea2ff325ac8b7c928137->enter($__internal_83bed27adef53dbd5ec33b4f3bce3bc2ab910543e2aaea2ff325ac8b7c928137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ed8038a8112f17c6782bd2ca277a18eef7e4e7ce962ecdc90bb9d8b5eab1778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed8038a8112f17c6782bd2ca277a18eef7e4e7ce962ecdc90bb9d8b5eab1778->enter($__internal_9ed8038a8112f17c6782bd2ca277a18eef7e4e7ce962ecdc90bb9d8b5eab1778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ed8038a8112f17c6782bd2ca277a18eef7e4e7ce962ecdc90bb9d8b5eab1778->leave($__internal_9ed8038a8112f17c6782bd2ca277a18eef7e4e7ce962ecdc90bb9d8b5eab1778_prof);

        
        $__internal_83bed27adef53dbd5ec33b4f3bce3bc2ab910543e2aaea2ff325ac8b7c928137->leave($__internal_83bed27adef53dbd5ec33b4f3bce3bc2ab910543e2aaea2ff325ac8b7c928137_prof);

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
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <li><a href=\"{{ path(\"home\")}}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\")}}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\")}}\">Reservations</a></li>
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
