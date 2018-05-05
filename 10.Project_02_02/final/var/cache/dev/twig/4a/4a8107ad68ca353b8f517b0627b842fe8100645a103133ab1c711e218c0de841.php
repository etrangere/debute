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
        $__internal_3beed9d56de9988d6bb79fbdf857a00b7f7c1e3ccd9333e6032c1180126ade24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3beed9d56de9988d6bb79fbdf857a00b7f7c1e3ccd9333e6032c1180126ade24->enter($__internal_3beed9d56de9988d6bb79fbdf857a00b7f7c1e3ccd9333e6032c1180126ade24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_7b8fe9a6c44bd2112943548220c309521781ee57e85de30ba34309671de6e49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8fe9a6c44bd2112943548220c309521781ee57e85de30ba34309671de6e49d->enter($__internal_7b8fe9a6c44bd2112943548220c309521781ee57e85de30ba34309671de6e49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3beed9d56de9988d6bb79fbdf857a00b7f7c1e3ccd9333e6032c1180126ade24->leave($__internal_3beed9d56de9988d6bb79fbdf857a00b7f7c1e3ccd9333e6032c1180126ade24_prof);

        
        $__internal_7b8fe9a6c44bd2112943548220c309521781ee57e85de30ba34309671de6e49d->leave($__internal_7b8fe9a6c44bd2112943548220c309521781ee57e85de30ba34309671de6e49d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73e3f09adc21bd4b25151609436568da437f7c4da194c2558f05e76d8032c015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e3f09adc21bd4b25151609436568da437f7c4da194c2558f05e76d8032c015->enter($__internal_73e3f09adc21bd4b25151609436568da437f7c4da194c2558f05e76d8032c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8da32afb051f31f38f85cb5c98b6a775d3d7d7af7acb6cca2071b6256970048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8da32afb051f31f38f85cb5c98b6a775d3d7d7af7acb6cca2071b6256970048->enter($__internal_b8da32afb051f31f38f85cb5c98b6a775d3d7d7af7acb6cca2071b6256970048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8da32afb051f31f38f85cb5c98b6a775d3d7d7af7acb6cca2071b6256970048->leave($__internal_b8da32afb051f31f38f85cb5c98b6a775d3d7d7af7acb6cca2071b6256970048_prof);

        
        $__internal_73e3f09adc21bd4b25151609436568da437f7c4da194c2558f05e76d8032c015->leave($__internal_73e3f09adc21bd4b25151609436568da437f7c4da194c2558f05e76d8032c015_prof);

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
", "reservations/book.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/app/Resources/views/reservations/book.html.twig");
    }
}
