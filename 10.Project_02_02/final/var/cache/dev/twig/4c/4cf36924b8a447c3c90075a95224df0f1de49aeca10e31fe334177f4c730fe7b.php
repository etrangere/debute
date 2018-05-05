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
        $__internal_5d1f4fcd65805cdfb34767fea64c32552e264da24223e62f1e444823704ff231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1f4fcd65805cdfb34767fea64c32552e264da24223e62f1e444823704ff231->enter($__internal_5d1f4fcd65805cdfb34767fea64c32552e264da24223e62f1e444823704ff231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_6b6a1d742a55772813c39f7e1b601425cdb3f642e258798849e6d8ceb250b5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6a1d742a55772813c39f7e1b601425cdb3f642e258798849e6d8ceb250b5f2->enter($__internal_6b6a1d742a55772813c39f7e1b601425cdb3f642e258798849e6d8ceb250b5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1f4fcd65805cdfb34767fea64c32552e264da24223e62f1e444823704ff231->leave($__internal_5d1f4fcd65805cdfb34767fea64c32552e264da24223e62f1e444823704ff231_prof);

        
        $__internal_6b6a1d742a55772813c39f7e1b601425cdb3f642e258798849e6d8ceb250b5f2->leave($__internal_6b6a1d742a55772813c39f7e1b601425cdb3f642e258798849e6d8ceb250b5f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a42d4299b4ed3316126cac14022d5af13d6801eaddcdb5478b3511bf7e79b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a42d4299b4ed3316126cac14022d5af13d6801eaddcdb5478b3511bf7e79b7->enter($__internal_38a42d4299b4ed3316126cac14022d5af13d6801eaddcdb5478b3511bf7e79b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a28f45c099ee522aadb9e7ea3571092766dabb357390687570909dfc96439df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28f45c099ee522aadb9e7ea3571092766dabb357390687570909dfc96439df8->enter($__internal_a28f45c099ee522aadb9e7ea3571092766dabb357390687570909dfc96439df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a28f45c099ee522aadb9e7ea3571092766dabb357390687570909dfc96439df8->leave($__internal_a28f45c099ee522aadb9e7ea3571092766dabb357390687570909dfc96439df8_prof);

        
        $__internal_38a42d4299b4ed3316126cac14022d5af13d6801eaddcdb5478b3511bf7e79b7->leave($__internal_38a42d4299b4ed3316126cac14022d5af13d6801eaddcdb5478b3511bf7e79b7_prof);

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
", "reservations/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/app/Resources/views/reservations/index.html.twig");
    }
}
