<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5c9ea249044f0c04031d0d546035742f2da0baa58e900556385475f88ff8646c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b805d3d7d168e16f56c854f87f191ea43699554f78d8e5cdf2fd936a074d64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b805d3d7d168e16f56c854f87f191ea43699554f78d8e5cdf2fd936a074d64d->enter($__internal_5b805d3d7d168e16f56c854f87f191ea43699554f78d8e5cdf2fd936a074d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c5b0da9f13344b14a4e25c19f16287938e8fb5575e574a5ea1a09fc7fcbf6366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b0da9f13344b14a4e25c19f16287938e8fb5575e574a5ea1a09fc7fcbf6366->enter($__internal_c5b0da9f13344b14a4e25c19f16287938e8fb5575e574a5ea1a09fc7fcbf6366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5b805d3d7d168e16f56c854f87f191ea43699554f78d8e5cdf2fd936a074d64d->leave($__internal_5b805d3d7d168e16f56c854f87f191ea43699554f78d8e5cdf2fd936a074d64d_prof);

        
        $__internal_c5b0da9f13344b14a4e25c19f16287938e8fb5575e574a5ea1a09fc7fcbf6366->leave($__internal_c5b0da9f13344b14a4e25c19f16287938e8fb5575e574a5ea1a09fc7fcbf6366_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
