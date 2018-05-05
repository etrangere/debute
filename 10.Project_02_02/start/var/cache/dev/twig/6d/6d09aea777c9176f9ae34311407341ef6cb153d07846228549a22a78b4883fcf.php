<?php

/* reservations/book.html.twig */
class __TwigTemplate_1818f9edb614bb1d34979c322002ba5718000ad32914aef01adfaf5971e7ee45 extends Twig_Template
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
        $__internal_cd3e29a2c87e6bc184b0efb6d468b441ea821311a2a8e12b0d81c96c421f87ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3e29a2c87e6bc184b0efb6d468b441ea821311a2a8e12b0d81c96c421f87ea->enter($__internal_cd3e29a2c87e6bc184b0efb6d468b441ea821311a2a8e12b0d81c96c421f87ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_539aac0d5521478e896866473f03834045d20cf6795f5d391c5ddf298486ff13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539aac0d5521478e896866473f03834045d20cf6795f5d391c5ddf298486ff13->enter($__internal_539aac0d5521478e896866473f03834045d20cf6795f5d391c5ddf298486ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3e29a2c87e6bc184b0efb6d468b441ea821311a2a8e12b0d81c96c421f87ea->leave($__internal_cd3e29a2c87e6bc184b0efb6d468b441ea821311a2a8e12b0d81c96c421f87ea_prof);

        
        $__internal_539aac0d5521478e896866473f03834045d20cf6795f5d391c5ddf298486ff13->leave($__internal_539aac0d5521478e896866473f03834045d20cf6795f5d391c5ddf298486ff13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5bb9349cc8dc2a24fd2a95fe9530feb39ca1cf29b42c5feaec60c1c03054bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bb9349cc8dc2a24fd2a95fe9530feb39ca1cf29b42c5feaec60c1c03054bd5->enter($__internal_e5bb9349cc8dc2a24fd2a95fe9530feb39ca1cf29b42c5feaec60c1c03054bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05050cdee31dd30101b8d7dc9327417a12373050c098e6828821aad265898c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05050cdee31dd30101b8d7dc9327417a12373050c098e6828821aad265898c7c->enter($__internal_05050cdee31dd30101b8d7dc9327417a12373050c098e6828821aad265898c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id_client"]) ? $context["id_client"] : $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
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
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_05050cdee31dd30101b8d7dc9327417a12373050c098e6828821aad265898c7c->leave($__internal_05050cdee31dd30101b8d7dc9327417a12373050c098e6828821aad265898c7c_prof);

        
        $__internal_e5bb9349cc8dc2a24fd2a95fe9530feb39ca1cf29b42c5feaec60c1c03054bd5->leave($__internal_e5bb9349cc8dc2a24fd2a95fe9530feb39ca1cf29b42c5feaec60c1c03054bd5_prof);

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
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
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
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/reservations/book.html.twig");
    }
}
