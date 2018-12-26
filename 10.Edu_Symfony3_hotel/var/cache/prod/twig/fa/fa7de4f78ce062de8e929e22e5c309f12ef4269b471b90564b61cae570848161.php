<?php

/* clients/index.html.twig */
class __TwigTemplate_4abf0b1050f30969211c40fbec6615ebe189f6864bdbe66a488a84a32f1460be extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
        $this->blocks = array(
            'top_bar' => array($this, 'block_top_bar'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_top_bar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        // line 5
        echo "
    <body>
    <div class=\"top-bar\">
        <div class=\"row\">
            <div class=\"top-bar-left\">
                <ul class=\"dropdown menu\" data-dropdown-menu>
                    <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_clients");
        echo "\">Clients</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        echo "\">Reservations</a></li>
                </ul>
            </div>
        </div>
    </div>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context), "html", null, true);
        echo "


    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>



        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
                <th width=\"200\">Action</th>
            </tr>
          </thead>


                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 43
            echo "                <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Email", array()), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"hollow button\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_client", array("id_client" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                    <a class=\"hollow button warning\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id_client" => twig_get_attribute($this->env, $this->source, $context["client"], "id", array()))), "html", null, true);
            echo "\">DELETE</a>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
          </tbody>
        </table>
      </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  128 => 49,  124 => 48,  118 => 45,  110 => 44,  107 => 43,  103 => 42,  81 => 23,  78 => 22,  72 => 21,  57 => 12,  53 => 11,  45 => 5,  39 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block top_bar %}

    <body>
    <div class=\"top-bar\">
        <div class=\"row\">
            <div class=\"top-bar-left\">
                <ul class=\"dropdown menu\" data-dropdown-menu>
                    <li><a href=\"{{ path(\"index_clients\")}}\">Clients</a></li>
                    <li><a href=\"{{ path(\"reservations\")}}\">Reservations</a></li>
                </ul>
            </div>
        </div>
    </div>
    </body>

{% endblock %}

{% block body %}

    {{ dump() }}


    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>



        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
                <th width=\"200\">Action</th>
            </tr>
          </thead>


                {%  for client in clients %}
                <tr>
                <td>{{ client.title | upper }}. {{ client.name }} {{ client.lastName }}</td>
                <td>{{ client.Email }}</td>

                <td>
                    <a class=\"hollow button\" href=\"{{ path(\"modify_client\", { 'id_client': client.id }) }}\">EDIT</a>
                    <a class=\"hollow button warning\" href=\"{{ path(\"delete\", { 'id_client': client.id }) }}\">DELETE</a>
                </td>
              </tr>
              {%  endfor %}

          </tbody>
        </table>
      </div>
    </div>



{% endblock %}
", "clients/index.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/clients/index.html.twig");
    }
}