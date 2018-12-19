<?php

/* home/index.html.twig */
class __TwigTemplate_deb3b444416a87cd8909548a3aff8ad80fbc6545a58641961597a062da50de45 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 columns\">
        <h2 align=\"center\">Welcome to Hotel de France</h2>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-12  columns\">
        <p>A hotel is an establishment that provides paid lodging on a short-term basis.
          Facilities provided may range from a modest-quality mattress in a small room to
          large suites with bigger, higher-quality beds, a dresser, a refrigerator and
          other kitchen facilities, upholstered chairs, a flat screen television, and
          en-suite bathrooms. Small, lower-priced hotels may offer only the most basic
          guest services and facilities. Larger, higher-priced hotels may provide
          additional guest facilities such as a swimming pool, business centre
          (with computers, printers, and other office equipment), childcare,
          conference and event facilities, tennis or basketball courts, gymnasium,
          restaurants, day spa, and social function services. Hotel rooms are usually
          numbered (or named in some smaller hotels) to allow guests to
          identify their room.</p>
      </div>

    </div>
  <div>
    <a align=\"center\" class=\"medium-12  columns\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("available_room_list");
        echo "\">
      <input  type=\"submit\" class=\"button\"  value=\"SEARCH ACCOMODATION\"></a>
  </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  50 => 8,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 columns\">
        <h2 align=\"center\">Welcome to Hotel de France</h2>
        <img class=\"thumbnail\" src=\"{{ asset('images/1.jpg') }}\">
      </div>
      <div class=\"medium-12  columns\">
        <p>A hotel is an establishment that provides paid lodging on a short-term basis.
          Facilities provided may range from a modest-quality mattress in a small room to
          large suites with bigger, higher-quality beds, a dresser, a refrigerator and
          other kitchen facilities, upholstered chairs, a flat screen television, and
          en-suite bathrooms. Small, lower-priced hotels may offer only the most basic
          guest services and facilities. Larger, higher-priced hotels may provide
          additional guest facilities such as a swimming pool, business centre
          (with computers, printers, and other office equipment), childcare,
          conference and event facilities, tennis or basketball courts, gymnasium,
          restaurants, day spa, and social function services. Hotel rooms are usually
          numbered (or named in some smaller hotels) to allow guests to
          identify their room.</p>
      </div>

    </div>
  <div>
    <a align=\"center\" class=\"medium-12  columns\" href=\"{{ path(\"available_room_list\")}}\">
      <input  type=\"submit\" class=\"button\"  value=\"SEARCH ACCOMODATION\"></a>
  </div>
        {% endblock %}
", "home/index.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/index.html.twig");
    }
}
