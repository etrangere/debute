<?php

/* admin/index.html.twig */
class __TwigTemplate_745fc88232140aa4d6ce23a1aba4c91aac5f075349e61f27dab881ed56bebe77 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>Un hôtel est un établissement commercial qui offre un service d'hébergement
          payant en chambres meublées à une clientèle de passage. En général, un hôtel
          assure l'entretien quotidien des chambres
          et des lits, ainsi que la fourniture du linge de toilette. Wikipédia</p>
        <p>A hotel is a commercial establishment that offers a paid accommodation
          service in furnished rooms to a passing clientele. In general, a hotel ensures the
          daily maintenance of rooms and beds, as well as the supply of towels. Wikipedia</p>

    </div>

      <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
          <h4>Book a room</h4>

          <form action=\"\" method=\"post\">
            <div class=\"medium-1  columns\">FROM:</div>

            <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

            <div class=\"medium-1  columns\">TO:</div>

            <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

            <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
          </form>
        </div>
      </div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/1.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>Un hôtel est un établissement commercial qui offre un service d'hébergement
          payant en chambres meublées à une clientèle de passage. En général, un hôtel
          assure l'entretien quotidien des chambres
          et des lits, ainsi que la fourniture du linge de toilette. Wikipédia</p>
        <p>A hotel is a commercial establishment that offers a paid accommodation
          service in furnished rooms to a passing clientele. In general, a hotel ensures the
          daily maintenance of rooms and beds, as well as the supply of towels. Wikipedia</p>

    </div>

      <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
          <h4>Book a room</h4>

          <form action=\"\" method=\"post\">
            <div class=\"medium-1  columns\">FROM:</div>

            <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

            <div class=\"medium-1  columns\">TO:</div>

            <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

            <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
          </form>
        </div>
      </div>

        {% endblock %}
", "admin/index.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/admin/index.html.twig");
    }
}
