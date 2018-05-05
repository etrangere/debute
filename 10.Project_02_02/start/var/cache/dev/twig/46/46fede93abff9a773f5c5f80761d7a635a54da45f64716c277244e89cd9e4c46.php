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
        $__internal_b56764b06da744734b15a118ec688f155814be9aa22841416e99019af8c0ecfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56764b06da744734b15a118ec688f155814be9aa22841416e99019af8c0ecfa->enter($__internal_b56764b06da744734b15a118ec688f155814be9aa22841416e99019af8c0ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_14083898924c6b960a1948cc77319b1a7b278e50db01b01a16a00a5dc31ce3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14083898924c6b960a1948cc77319b1a7b278e50db01b01a16a00a5dc31ce3de->enter($__internal_14083898924c6b960a1948cc77319b1a7b278e50db01b01a16a00a5dc31ce3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56764b06da744734b15a118ec688f155814be9aa22841416e99019af8c0ecfa->leave($__internal_b56764b06da744734b15a118ec688f155814be9aa22841416e99019af8c0ecfa_prof);

        
        $__internal_14083898924c6b960a1948cc77319b1a7b278e50db01b01a16a00a5dc31ce3de->leave($__internal_14083898924c6b960a1948cc77319b1a7b278e50db01b01a16a00a5dc31ce3de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91501d17562c38c7c18fcda4a113b0d35a80d1d9167d7340b36cd0c7300dae87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91501d17562c38c7c18fcda4a113b0d35a80d1d9167d7340b36cd0c7300dae87->enter($__internal_91501d17562c38c7c18fcda4a113b0d35a80d1d9167d7340b36cd0c7300dae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d607088052348c3311864dad34def92f180742b06c9134103576ab0c1639c41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d607088052348c3311864dad34def92f180742b06c9134103576ab0c1639c41e->enter($__internal_d607088052348c3311864dad34def92f180742b06c9134103576ab0c1639c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d607088052348c3311864dad34def92f180742b06c9134103576ab0c1639c41e->leave($__internal_d607088052348c3311864dad34def92f180742b06c9134103576ab0c1639c41e_prof);

        
        $__internal_91501d17562c38c7c18fcda4a113b0d35a80d1d9167d7340b36cd0c7300dae87->leave($__internal_91501d17562c38c7c18fcda4a113b0d35a80d1d9167d7340b36cd0c7300dae87_prof);

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
", "clients/form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/clients/form.html.twig");
    }
}
