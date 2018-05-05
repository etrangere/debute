<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
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
        $__internal_e43fa0f3bf05ff1ecb3bfbab51c7160c11c56fd014af54491f89e2df36984548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43fa0f3bf05ff1ecb3bfbab51c7160c11c56fd014af54491f89e2df36984548->enter($__internal_e43fa0f3bf05ff1ecb3bfbab51c7160c11c56fd014af54491f89e2df36984548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_6187f0e37d12ca041c512f6d2213462a605d33b1d5531e86b606b2d2dec7a4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6187f0e37d12ca041c512f6d2213462a605d33b1d5531e86b606b2d2dec7a4ce->enter($__internal_6187f0e37d12ca041c512f6d2213462a605d33b1d5531e86b606b2d2dec7a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43fa0f3bf05ff1ecb3bfbab51c7160c11c56fd014af54491f89e2df36984548->leave($__internal_e43fa0f3bf05ff1ecb3bfbab51c7160c11c56fd014af54491f89e2df36984548_prof);

        
        $__internal_6187f0e37d12ca041c512f6d2213462a605d33b1d5531e86b606b2d2dec7a4ce->leave($__internal_6187f0e37d12ca041c512f6d2213462a605d33b1d5531e86b606b2d2dec7a4ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f079c779f8c1e2df8d7b5a67537e08abad1b6f3ac0d6ec589e86daf0694191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f079c779f8c1e2df8d7b5a67537e08abad1b6f3ac0d6ec589e86daf0694191->enter($__internal_c6f079c779f8c1e2df8d7b5a67537e08abad1b6f3ac0d6ec589e86daf0694191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_233e8cf5c401e91274de48d44220ae3c409f00a545df7ccd8bdc077de62f7b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233e8cf5c401e91274de48d44220ae3c409f00a545df7ccd8bdc077de62f7b33->enter($__internal_233e8cf5c401e91274de48d44220ae3c409f00a545df7ccd8bdc077de62f7b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
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
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_233e8cf5c401e91274de48d44220ae3c409f00a545df7ccd8bdc077de62f7b33->leave($__internal_233e8cf5c401e91274de48d44220ae3c409f00a545df7ccd8bdc077de62f7b33_prof);

        
        $__internal_c6f079c779f8c1e2df8d7b5a67537e08abad1b6f3ac0d6ec589e86daf0694191->leave($__internal_c6f079c779f8c1e2df8d7b5a67537e08abad1b6f3ac0d6ec589e86daf0694191_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/app/Resources/views/clients/form.html.twig");
    }
}
