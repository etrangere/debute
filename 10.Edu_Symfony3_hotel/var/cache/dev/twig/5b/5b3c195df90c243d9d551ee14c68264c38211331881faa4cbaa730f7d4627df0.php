<?php

/* reservations/book.html.twig */
class __TwigTemplate_d4930fd674f30f0101c3a61bd5ec0ae32c073b6ec456414d076e27d955b2e8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        echo "

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id_client"]) ? $context["id_client"] : $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>

          <div class=\"medium-2  columns\"><input name=\"reservation[dateIn]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "from", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>

          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"reservation[dateOut]\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "to", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>

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
          
            <tr>
              <h7>Available room</h7>
              <td>
                <div class=\"callout success\">

                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 39
            echo "
                 <a class=\"hollow button warning\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_room", array("id_client" => (isset($context["id_client"]) ? $context["id_client"] : $this->getContext($context, "id_client")))), "html", null, true);
            echo "\">BOOK THIS ROOM</a>

                      ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
              </td>
            </tr>
          
          </tbody>
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
        return array (  118 => 45,  109 => 42,  104 => 40,  101 => 39,  97 => 38,  74 => 18,  68 => 15,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {{ dump(rooms) }}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>

          <div class=\"medium-2  columns\"><input name=\"reservation[dateIn]\" value=\"{{ dates.from }}\" type=\"text\" class=\"datepicker\" /></div>

          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"reservation[dateOut]\" value=\"{{ dates.to }}\" type=\"text\" class=\"datepicker\" /></div>

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
          
            <tr>
              <h7>Available room</h7>
              <td>
                <div class=\"callout success\">

                  {% for room in rooms  %}

                 <a class=\"hollow button warning\" href=\"{{ path(\"book_room\", { 'id_client': id_client }) }}\">BOOK THIS ROOM</a>

                      {{ room.name }}

                  {% endfor %}

              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Edu_Symfony3_hotel/app/Resources/views/reservations/book.html.twig");
    }
}
