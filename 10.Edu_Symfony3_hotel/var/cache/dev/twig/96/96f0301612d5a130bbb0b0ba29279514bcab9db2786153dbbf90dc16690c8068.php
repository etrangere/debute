<?php

/* reservations/book.html.twig */
class __TwigTemplate_d309cc2481c70cde8211c69377bffad24dd66b699a76a6a4880c563213ccdae7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

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
";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id_client"]) || array_key_exists("id_client", $context) ? $context["id_client"] : (function () { throw new Twig_Error_Runtime('Variable "id_client" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</div>

        <div class=\"medium-2  columns\"><b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 12, $this->source); })()), "name", array()), "html", null, true);
        echo "</b></div>

        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>

          <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

          <div class=\"medium-1  columns\">TO:</div>

          <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 36
            echo "          <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", array()), "html", null, true);
            echo "</td>

            <td>
            <div class=\"callout success\">
              <h7>Available</h7>
            </div>
            </td>
            <td>
              <a class=\"hollow button warning\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_room", array("id_client" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 45, $this->source); })()), "id", array()), "id_room" => twig_get_attribute($this->env, $this->source, $context["room"], "id", array()), "date_in" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "from", array()), "date_out" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "to", array()))), "html", null, true);
            echo "\">BOOK NOW</a>
            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  113 => 45,  102 => 37,  99 => 36,  95 => 35,  69 => 12,  64 => 10,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{{ dump() }}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{ id_client }}</div>

        <div class=\"medium-2  columns\"><b>{{ client.name }}</b></div>

        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>

          <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

          <div class=\"medium-1  columns\">TO:</div>

          <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          {% for room in rooms %}
          <tr>
            <td>{{ room.name}}</td>

            <td>
            <div class=\"callout success\">
              <h7>Available</h7>
            </div>
            </td>
            <td>
              <a class=\"hollow button warning\" href=\"{{ path(\"book_room\",{'id_client': client.id,'id_room' : room.id, 'date_in': form.from,'date_out': form.to })  }}\">BOOK NOW</a>
            </td>
          </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/reservations/book.html.twig");
    }
}
