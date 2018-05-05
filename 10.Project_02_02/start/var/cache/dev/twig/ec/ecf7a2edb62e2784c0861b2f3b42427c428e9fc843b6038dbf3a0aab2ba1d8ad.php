<?php

/* admin/index.html.twig */
class __TwigTemplate_0fd4c6afed8d6ac5af26ae933901b28d2d430dc25c250faa7312f6418efc9c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_2a4f3b98daec12319958347dba35000cc7bb983241d4e1b2332a498fd3307d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4f3b98daec12319958347dba35000cc7bb983241d4e1b2332a498fd3307d2d->enter($__internal_2a4f3b98daec12319958347dba35000cc7bb983241d4e1b2332a498fd3307d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_4a840089961637ef0e91a70b9231edf6742666af7aef286d9e9a0ba7c8fe2722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a840089961637ef0e91a70b9231edf6742666af7aef286d9e9a0ba7c8fe2722->enter($__internal_4a840089961637ef0e91a70b9231edf6742666af7aef286d9e9a0ba7c8fe2722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4f3b98daec12319958347dba35000cc7bb983241d4e1b2332a498fd3307d2d->leave($__internal_2a4f3b98daec12319958347dba35000cc7bb983241d4e1b2332a498fd3307d2d_prof);

        
        $__internal_4a840089961637ef0e91a70b9231edf6742666af7aef286d9e9a0ba7c8fe2722->leave($__internal_4a840089961637ef0e91a70b9231edf6742666af7aef286d9e9a0ba7c8fe2722_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f81b68c9c373828601f233c6fabea77c6672b0c3e5acd9e3b94b1312e0a4adeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81b68c9c373828601f233c6fabea77c6672b0c3e5acd9e3b94b1312e0a4adeb->enter($__internal_f81b68c9c373828601f233c6fabea77c6672b0c3e5acd9e3b94b1312e0a4adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f61e8fe996146988cba0bc508ec4754840d558d1728ee7cbeabf798cb72721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f61e8fe996146988cba0bc508ec4754840d558d1728ee7cbeabf798cb72721->enter($__internal_d5f61e8fe996146988cba0bc508ec4754840d558d1728ee7cbeabf798cb72721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_d5f61e8fe996146988cba0bc508ec4754840d558d1728ee7cbeabf798cb72721->leave($__internal_d5f61e8fe996146988cba0bc508ec4754840d558d1728ee7cbeabf798cb72721_prof);

        
        $__internal_f81b68c9c373828601f233c6fabea77c6672b0c3e5acd9e3b94b1312e0a4adeb->leave($__internal_f81b68c9c373828601f233c6fabea77c6672b0c3e5acd9e3b94b1312e0a4adeb_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/admin/index.html.twig");
    }
}
