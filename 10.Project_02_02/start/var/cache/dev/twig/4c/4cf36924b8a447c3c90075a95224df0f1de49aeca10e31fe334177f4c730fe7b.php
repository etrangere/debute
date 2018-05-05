<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
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
        $__internal_6700056299eba47c62d106fec7b0fa6d1a39e9fbdb70bba8ff3058c940e73432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6700056299eba47c62d106fec7b0fa6d1a39e9fbdb70bba8ff3058c940e73432->enter($__internal_6700056299eba47c62d106fec7b0fa6d1a39e9fbdb70bba8ff3058c940e73432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_dc0bd3bdaf5a7818af9a336710cb9d768bb83ded996e030ac645f0b2c2ac2568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0bd3bdaf5a7818af9a336710cb9d768bb83ded996e030ac645f0b2c2ac2568->enter($__internal_dc0bd3bdaf5a7818af9a336710cb9d768bb83ded996e030ac645f0b2c2ac2568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6700056299eba47c62d106fec7b0fa6d1a39e9fbdb70bba8ff3058c940e73432->leave($__internal_6700056299eba47c62d106fec7b0fa6d1a39e9fbdb70bba8ff3058c940e73432_prof);

        
        $__internal_dc0bd3bdaf5a7818af9a336710cb9d768bb83ded996e030ac645f0b2c2ac2568->leave($__internal_dc0bd3bdaf5a7818af9a336710cb9d768bb83ded996e030ac645f0b2c2ac2568_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc931432b627de8f72f4057b4d76526d30b4e45b1eec0dd03f505d7367fa1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc931432b627de8f72f4057b4d76526d30b4e45b1eec0dd03f505d7367fa1bc->enter($__internal_dfc931432b627de8f72f4057b4d76526d30b4e45b1eec0dd03f505d7367fa1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42361c9f4db4c662f4fee6b36018b2ba7a3dc889e263c6cab883ff99aac292fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42361c9f4db4c662f4fee6b36018b2ba7a3dc889e263c6cab883ff99aac292fc->enter($__internal_42361c9f4db4c662f4fee6b36018b2ba7a3dc889e263c6cab883ff99aac292fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42361c9f4db4c662f4fee6b36018b2ba7a3dc889e263c6cab883ff99aac292fc->leave($__internal_42361c9f4db4c662f4fee6b36018b2ba7a3dc889e263c6cab883ff99aac292fc_prof);

        
        $__internal_dfc931432b627de8f72f4057b4d76526d30b4e45b1eec0dd03f505d7367fa1bc->leave($__internal_dfc931432b627de8f72f4057b4d76526d30b4e45b1eec0dd03f505d7367fa1bc_prof);

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
