<?php

/* :clients:form.html.twig */
class __TwigTemplate_fb2ec06cf67254f5a76fb21d0e3793d744136bc9925fd36098c94a5dd9ee54fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":clients:form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":clients:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 14
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "title", array()))) ? ("selected") : (""));
            echo " \">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "          </select>

        </div>
        <div class=\"medium-4  columns\">
          <label>Name</label>
          <input name=\"form[name]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>Last Name</label>
          <input name=\"form[last_name]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-8  columns\">
          <label>Address</label>
          <input name=\"form[address]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>ZipCode</label>
          <input name=\"form[zip_code]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip_code", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>City</label>
          <input name=\"form[city]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>State</label>
          <input name=\"form[state]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Email</label>
          <input name=\"form[email]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
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
        return array (  134 => 45,  127 => 41,  120 => 37,  113 => 33,  106 => 29,  99 => 25,  92 => 21,  85 => 16,  72 => 14,  68 => 13,  56 => 4,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
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
          <label>Email</label>
          <input name=\"form[email]\" value=\"{{ form.email is defined ? form.email : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
        </div>
      </form>
    </div>
  </div>
{% endblock %}", ":clients:form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Edu_Symfony3_hotel/app/Resources/views/clients/form.html.twig");
    }
}
