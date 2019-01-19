<?php

/* base.html.twig */
class __TwigTemplate_2acad632edeaf55aa9d2c03cb9dcca245ed2816194150cdbe0e86d594669ffc0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Species\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>

        <header style=\"background-color: #5eb5e0\">

          <div align=\"center\"> <img  style=\"zoom: 6%;padding: 1%\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caduceus-medical-symbol.png"), "html", null, true);
        echo "\"></div>
           <h3 align=\"center\">- Bioinformatics -</h3>
           <h2 align=\"center\">Biological classification of living and fossil organisms database</h2>
           <br/>
        </header>

      <div class=\"row\" align=\"center\">
        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo-icon\"><i class=\"fa fa-home\"></i> Home</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-info-circle\"></i> About</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-location-arrow\"></i> Locate</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-at\"></i> Contact</a>&nbsp;&nbsp;
        <a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\">Search</i></a>&nbsp;&nbsp;



                ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 43
            echo "
                    <a class=\"fa fa-sign-out\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a>

                ";
        } else {
            // line 47
            echo "

                    <a class=\"fa fa-user\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Register</a>&nbsp;&nbsp;
                    <a class=\"fa fa-sign-in\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a>

                ";
        }
        // line 53
        echo "      </div>

        <div class=\"main-content\">

            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 58
            echo "
                <div class=\"alert alert-success\">

                    ";
            // line 61
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "

                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
        </div>

        <div class=\"footer\" >
            <p class=\"fa fa-copyright\"  style=\"padding-left: 80%\">2018</p>
        </div>

        ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
          <!--  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "            <script src=\"http://code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  209 => 77,  206 => 76,  200 => 75,  189 => 67,  176 => 10,  172 => 9,  167 => 8,  161 => 7,  149 => 5,  140 => 79,  138 => 75,  129 => 68,  127 => 67,  124 => 66,  113 => 61,  108 => 58,  104 => 57,  98 => 53,  92 => 50,  88 => 49,  84 => 47,  78 => 44,  75 => 43,  73 => 42,  62 => 34,  52 => 27,  39 => 16,  37 => 7,  32 => 5,  26 => 1,);
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
        <meta charset=\"utf-8\">
        <title>{% block title %}AquaNote!{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
          <!--  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>-->
        {% endblock %}

    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Species\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>

        <header style=\"background-color: #5eb5e0\">

          <div align=\"center\"> <img  style=\"zoom: 6%;padding: 1%\" src=\"{{ asset('images/caduceus-medical-symbol.png') }}\"></div>
           <h3 align=\"center\">- Bioinformatics -</h3>
           <h2 align=\"center\">Biological classification of living and fossil organisms database</h2>
           <br/>
        </header>

      <div class=\"row\" align=\"center\">
        <a href=\"{{ path('homepage')}}\" class=\"logo-icon\"><i class=\"fa fa-home\"></i> Home</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-info-circle\"></i> About</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-location-arrow\"></i> Locate</a>&nbsp;&nbsp;
        <a  class=\"logo-icon\"><i class=\"fa fa-at\"></i> Contact</a>&nbsp;&nbsp;
        <a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\">Search</i></a>&nbsp;&nbsp;



                {% if is_granted('ROLE_USER') %}

                    <a class=\"fa fa-sign-out\" href=\"{{  path ('security_logout') }}\">Logout</a>

                {% else %}


                    <a class=\"fa fa-user\" href=\"{{  path ('user_register') }}\">Register</a>&nbsp;&nbsp;
                    <a class=\"fa fa-sign-in\" href=\"{{  path ('security_login') }}\">Login</a>

                {% endif %}
      </div>

        <div class=\"main-content\">

            {% for msg in app.session.flashBag.get('success') %}

                <div class=\"alert alert-success\">

                    {{  msg }}

                </div>

            {% endfor %}

            {% block body %}{% endblock %}

        </div>

        <div class=\"footer\" >
            <p class=\"fa fa-copyright\"  style=\"padding-left: 80%\">2018</p>
        </div>

        {% block javascripts %}
            <script src=\"http://code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/11.Edu_Symfony3_blog/app/Resources/views/base.html.twig");
    }
}
