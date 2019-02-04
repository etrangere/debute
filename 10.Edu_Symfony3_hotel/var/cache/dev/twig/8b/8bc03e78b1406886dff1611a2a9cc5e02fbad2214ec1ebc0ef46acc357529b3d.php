<?php

/* :clients:form.html.twig */
class __TwigTemplate_4e8c55dab8be216b9d85f6b081ed9b6f498443c8a7a25e5b7d29ebb8f8e40ddd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:form.html.twig", 1);
        $this->blocks = [
            'top_bar' => [$this, 'block_top_bar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_top_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        // line 4
        echo "
  <body>
  <div class=\"top-bar\">
    <div class=\"row\">
      <div class=\"top-bar-left\">
        <ul class=\"dropdown menu\" data-dropdown-menu>
          <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_clients");
        echo "\">Clients</a></li>
          <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservations");
        echo "\">Reservations</a></li>
        </ul>
      </div>
    </div>
  </div>
  </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    ";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "
  <div class=\"row\">
    <div class=\"medium-12 large-12 columns\">
      <h4></h4>
      <form action=\"\" method=\"post\">

        <div class=\"medium-4  columns\">
          <label>Title</label>

          <select name=\"form[title]\">
              ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 35
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "title", []))) ? ("selected") : (""));
            echo " \">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "          </select>

        </div>
        <div class=\"medium-4  columns\">
          <label>Name</label>
          <input name=\"form[name]\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>Last Name</label>
          <input name=\"form[last_name]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "last_name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-8  columns\">
          <label>Address</label>
          <input name=\"form[address]\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "address", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>ZipCode</label>
          <input name=\"form[zip_code]\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip_code", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "zip_code", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>City</label>
          <input name=\"form[city]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "city", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>State</label>
          <input name=\"form[state]\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "state", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Tel</label>
          <input name=\"form[tel]\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "tel", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Email</label>
          <input name=\"form[client_email]\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_email", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "client_email", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" disabled/>
        </div>

        <div class=\"medium-3  columns\">
          <label>ROOM TYPE</label>
          <h4>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "room_type", []), "html", null, true);
        echo "</h4>
          <div>
            <select class=\"\" name=\"form[room_type]\" disabled>
              <option selected=\"selected\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "room_type", []), "html", null, true);
        echo "\">Choose</option>
              <option value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">Single</option>
              <option value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">Double</option>
              <option value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">Triple</option>
            </select>
          </div>
        </div>
        <div class=\"medium-3  columns\">
          <label>Adult</label>
          <h4>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "adult", []), "html", null, true);
        echo "</h4>
          <div>
            <select class=\"\" name=\"form[adult]\">
              <option selected=\"selected\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "adult", []), "html", null, true);
        echo "\">Choose</option>
              <option value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 person</option>
              <option value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 persons</option>
              <option value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 persons</option>

            </select>
          </div>
        </div>
        <div class=\"medium-3  columns\">
          <label>Child</label>
          <h4>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), "child", []), "html", null, true);
        echo "</h4>
          <div>
            <select class=\"\" name=\"form[child]\">
              <option selected=\"selected\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), "child", []), "html", null, true);
        echo "\">Choose</option>
              <option value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 child</option>
              <option value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 childs</option>
              <option value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 childs</option>

            </select>

          </div>
        </div>
        <div class=\"medium-3 columns\">
          <label>Baby</label>
          <h4>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->source); })()), "baby", []), "html", null, true);
        echo "</h4>
          <div>
            <select class=\"\" name=\"form[baby]\">
              <option selected=\"selected\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "baby", []), "html", null, true);
        echo "\">Choose</option>
              <option value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 baby</option>
              <option value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 babies</option>
              <option value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 babies</option>
            </select>
          </div>
        </div>

        <div class=\"medium-12  columns\">
          <input type=\"submit\" class=\"button\" value=\"SAVE\"  />
        </div>
      </form>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":clients:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 120,  288 => 119,  284 => 118,  280 => 117,  274 => 114,  263 => 106,  259 => 105,  255 => 104,  251 => 103,  245 => 100,  235 => 93,  231 => 92,  227 => 91,  223 => 90,  217 => 87,  208 => 81,  204 => 80,  200 => 79,  196 => 78,  190 => 75,  182 => 70,  175 => 66,  168 => 62,  161 => 58,  154 => 54,  147 => 50,  140 => 46,  133 => 42,  126 => 37,  113 => 35,  109 => 34,  96 => 24,  93 => 23,  84 => 22,  66 => 11,  62 => 10,  54 => 4,  45 => 3,  15 => 1,);
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
      <h4></h4>
      <form action=\"\" method=\"post\">

        <div class=\"medium-4  columns\">
          <label>Title</label>

          <select name=\"form[title]\">
              {% for title in titles %}
            <option value=\"{{ title }} {{ title == form.title ? 'selected' : '' }} \">{{ title | capitalize }}.</option>
              {% endfor %}
          </select>

        </div>
        <div class=\"medium-4  columns\">
          <label>Name</label>
          <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>Last Name</label>
          <input name=\"form[last_name]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-8  columns\">
          <label>Address</label>
          <input name=\"form[address]\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>ZipCode</label>
          <input name=\"form[zip_code]\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>City</label>
          <input name=\"form[city]\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>State</label>
          <input name=\"form[state]\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Tel</label>
          <input name=\"form[tel]\" value=\"{{ form.tel is defined ? form.tel : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Email</label>
          <input name=\"form[client_email]\" value=\"{{ form.client_email is defined ? form.client_email : '' }}\" type=\"text\" disabled/>
        </div>

        <div class=\"medium-3  columns\">
          <label>ROOM TYPE</label>
          <h4>{{ form.room_type }}</h4>
          <div>
            <select class=\"\" name=\"form[room_type]\" disabled>
              <option selected=\"selected\" value=\"{{ form.room_type }}\">Choose</option>
              <option value=\"{{ 1|number_format }}\">Single</option>
              <option value=\"{{ 2|number_format }}\">Double</option>
              <option value=\"{{ 3|number_format }}\">Triple</option>
            </select>
          </div>
        </div>
        <div class=\"medium-3  columns\">
          <label>Adult</label>
          <h4>{{ form.adult }}</h4>
          <div>
            <select class=\"\" name=\"form[adult]\">
              <option selected=\"selected\" value=\"{{ form.adult }}\">Choose</option>
              <option value=\"{{ 1|number_format }}\">1 person</option>
              <option value=\"{{ 2|number_format }}\">2 persons</option>
              <option value=\"{{ 3|number_format }}\">3 persons</option>

            </select>
          </div>
        </div>
        <div class=\"medium-3  columns\">
          <label>Child</label>
          <h4>{{ form.child }}</h4>
          <div>
            <select class=\"\" name=\"form[child]\">
              <option selected=\"selected\" value=\"{{ form.child }}\">Choose</option>
              <option value=\"{{ 1|number_format }}\">1 child</option>
              <option value=\"{{ 2|number_format }}\">2 childs</option>
              <option value=\"{{ 3|number_format }}\">3 childs</option>

            </select>

          </div>
        </div>
        <div class=\"medium-3 columns\">
          <label>Baby</label>
          <h4>{{ form.baby }}</h4>
          <div>
            <select class=\"\" name=\"form[baby]\">
              <option selected=\"selected\" value=\"{{ form.baby }}\">Choose</option>
              <option value=\"{{ 1|number_format }}\">1 baby</option>
              <option value=\"{{ 2|number_format }}\">2 babies</option>
              <option value=\"{{ 3|number_format }}\">3 babies</option>
            </select>
          </div>
        </div>

        <div class=\"medium-12  columns\">
          <input type=\"submit\" class=\"button\" value=\"SAVE\"  />
        </div>
      </form>
    </div>
  </div>
{% endblock %}", ":clients:form.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/clients/form.html.twig");
    }
}
