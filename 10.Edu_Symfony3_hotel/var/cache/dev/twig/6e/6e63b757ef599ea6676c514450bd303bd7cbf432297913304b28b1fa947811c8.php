<?php

/* clients/form.html.twig */
class __TwigTemplate_34cf1c84443039fcd7618b687ec656efc9383165502dc563ac447b9d994c395e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"row\">
    <div class=\"medium-12 large-12 columns\">
      <h4>New Client</h4>
      <form action=\"\" method=\"post\">
        <div class=\"medium-4  columns\">
          <label>Title</label>
          <select name=\"form[title]\">
            <option value=\"mr\">Mr.</option>
          </select>
        </div>
        <div class=\"medium-4  columns\">
          <label>Name</label>
          <input name=\"form[name]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>Last Name</label>
          <input name=\"form[lastName]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-8  columns\">
          <label>Address</label>
          <input name=\"form[address]\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Adress", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Adress", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>ZipCode</label>
          <input name=\"form[zipCode]\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Zip_code", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>City</label>
          <input name=\"form[city]\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "City", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "City", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>State</label>
          <input name=\"form[state]\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "State", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "State", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Email</label>
          <input name=\"form[email]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Email", array(), "any", true, true)) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array())) : ("")), "html", null, true);
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
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  98 => 35,  91 => 31,  84 => 27,  77 => 23,  70 => 19,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
  <div class=\"row\">
    <div class=\"medium-12 large-12 columns\">
      <h4>New Client</h4>
      <form action=\"\" method=\"post\">
        <div class=\"medium-4  columns\">
          <label>Title</label>
          <select name=\"form[title]\">
            <option value=\"mr\">Mr.</option>
          </select>
        </div>
        <div class=\"medium-4  columns\">
          <label>Name</label>
          <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>Last Name</label>
          <input name=\"form[lastName]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-8  columns\">
          <label>Address</label>
          <input name=\"form[address]\" value=\"{{ form.Adress is defined ? form.Adress : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>ZipCode</label>
          <input name=\"form[zipCode]\" value=\"{{ form.Zip_code is defined ? form.Zip_code : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>City</label>
          <input name=\"form[city]\" value=\"{{ form.City is defined ? form.City : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-4  columns\">
          <label>State</label>
          <input name=\"form[state]\" value=\"{{ form.State is defined ? form.State : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <label>Email</label>
          <input name=\"form[email]\" value=\"{{ form.Email is defined ? form.Email : '' }}\" type=\"text\" />
        </div>
        <div class=\"medium-12  columns\">
          <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
        </div>
      </form>
    </div>
  </div>
{% endblock %}", "clients/form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Edu_Symfony3_hotel/app/Resources/views/clients/form.html.twig");
    }
}
