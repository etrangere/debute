<?php

/* reservations/book.html.twig */
class __TwigTemplate_64c0cb274f827e5d938cbe7702f25fe23a40ed4a35a04d5324219e193814e3cf extends Twig_Template
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
        $__internal_bcbd93b897285837af42f7638b9b76c7aed8a2311f36f790c518c057da4f5e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbd93b897285837af42f7638b9b76c7aed8a2311f36f790c518c057da4f5e17->enter($__internal_bcbd93b897285837af42f7638b9b76c7aed8a2311f36f790c518c057da4f5e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_c1e0a9619e2e888715910811f9e07ea31198dbded27b6f8acbc5c231a0320942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e0a9619e2e888715910811f9e07ea31198dbded27b6f8acbc5c231a0320942->enter($__internal_c1e0a9619e2e888715910811f9e07ea31198dbded27b6f8acbc5c231a0320942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcbd93b897285837af42f7638b9b76c7aed8a2311f36f790c518c057da4f5e17->leave($__internal_bcbd93b897285837af42f7638b9b76c7aed8a2311f36f790c518c057da4f5e17_prof);

        
        $__internal_c1e0a9619e2e888715910811f9e07ea31198dbded27b6f8acbc5c231a0320942->leave($__internal_c1e0a9619e2e888715910811f9e07ea31198dbded27b6f8acbc5c231a0320942_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e3cdcc245a79ac4ab4602f0064e8afe4d8c8f73ba86aec3005ef0e9b31574e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e3cdcc245a79ac4ab4602f0064e8afe4d8c8f73ba86aec3005ef0e9b31574e->enter($__internal_81e3cdcc245a79ac4ab4602f0064e8afe4d8c8f73ba86aec3005ef0e9b31574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29be4be60b96e77d09d009f38ebb4c5670867a155f7810f6db57c44ecc692963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29be4be60b96e77d09d009f38ebb4c5670867a155f7810f6db57c44ecc692963->enter($__internal_29be4be60b96e77d09d009f38ebb4c5670867a155f7810f6db57c44ecc692963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
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
        
        $__internal_29be4be60b96e77d09d009f38ebb4c5670867a155f7810f6db57c44ecc692963->leave($__internal_29be4be60b96e77d09d009f38ebb4c5670867a155f7810f6db57c44ecc692963_prof);

        
        $__internal_81e3cdcc245a79ac4ab4602f0064e8afe4d8c8f73ba86aec3005ef0e9b31574e->leave($__internal_81e3cdcc245a79ac4ab4602f0064e8afe4d8c8f73ba86aec3005ef0e9b31574e_prof);

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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
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
