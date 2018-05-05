<?php

/* reservations/index.html.twig */
class __TwigTemplate_0251a6d8c1cc5ec4ae2d15ec0fde5d05937d67be6548e01693014fa284114442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_399c78a9f54f668fa859c0cc409834cb2b5ef3b5679706f4a45b033ccef021dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399c78a9f54f668fa859c0cc409834cb2b5ef3b5679706f4a45b033ccef021dd->enter($__internal_399c78a9f54f668fa859c0cc409834cb2b5ef3b5679706f4a45b033ccef021dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_282e100c45fd0ae24b74ecd6b98b53ae6e9d56b10dd91ea5841ada440fb7fba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282e100c45fd0ae24b74ecd6b98b53ae6e9d56b10dd91ea5841ada440fb7fba4->enter($__internal_282e100c45fd0ae24b74ecd6b98b53ae6e9d56b10dd91ea5841ada440fb7fba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399c78a9f54f668fa859c0cc409834cb2b5ef3b5679706f4a45b033ccef021dd->leave($__internal_399c78a9f54f668fa859c0cc409834cb2b5ef3b5679706f4a45b033ccef021dd_prof);

        
        $__internal_282e100c45fd0ae24b74ecd6b98b53ae6e9d56b10dd91ea5841ada440fb7fba4->leave($__internal_282e100c45fd0ae24b74ecd6b98b53ae6e9d56b10dd91ea5841ada440fb7fba4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_771e7bf0bceccd2abca908403a7a2477ecf9e2712199697c05a17bd26d2df4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771e7bf0bceccd2abca908403a7a2477ecf9e2712199697c05a17bd26d2df4ca->enter($__internal_771e7bf0bceccd2abca908403a7a2477ecf9e2712199697c05a17bd26d2df4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d857ced843719887903ab5c00a80533245f15fbaa61a92cdae09a8a2c61d04fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857ced843719887903ab5c00a80533245f15fbaa61a92cdae09a8a2c61d04fc->enter($__internal_d857ced843719887903ab5c00a80533245f15fbaa61a92cdae09a8a2c61d04fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_d857ced843719887903ab5c00a80533245f15fbaa61a92cdae09a8a2c61d04fc->leave($__internal_d857ced843719887903ab5c00a80533245f15fbaa61a92cdae09a8a2c61d04fc_prof);

        
        $__internal_771e7bf0bceccd2abca908403a7a2477ecf9e2712199697c05a17bd26d2df4ca->leave($__internal_771e7bf0bceccd2abca908403a7a2477ecf9e2712199697c05a17bd26d2df4ca_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
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
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/reservations/index.html.twig");
    }
}
