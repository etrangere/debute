<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b83d5b2f40169e59f48efdd2f9af27908d818c858a1188697760897519592de7 extends Twig_Template
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
        $__internal_2bc0ed456abfcbd63fa3acd3c02e4aec7e366134cd3d842dd97b5d3017c44cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc0ed456abfcbd63fa3acd3c02e4aec7e366134cd3d842dd97b5d3017c44cb0->enter($__internal_2bc0ed456abfcbd63fa3acd3c02e4aec7e366134cd3d842dd97b5d3017c44cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3f68988d677f0cc2bc9d9bec868b8c0e590aaefe2220f6943d7729c82fd8da35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f68988d677f0cc2bc9d9bec868b8c0e590aaefe2220f6943d7729c82fd8da35->enter($__internal_3f68988d677f0cc2bc9d9bec868b8c0e590aaefe2220f6943d7729c82fd8da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2bc0ed456abfcbd63fa3acd3c02e4aec7e366134cd3d842dd97b5d3017c44cb0->leave($__internal_2bc0ed456abfcbd63fa3acd3c02e4aec7e366134cd3d842dd97b5d3017c44cb0_prof);

        
        $__internal_3f68988d677f0cc2bc9d9bec868b8c0e590aaefe2220f6943d7729c82fd8da35->leave($__internal_3f68988d677f0cc2bc9d9bec868b8c0e590aaefe2220f6943d7729c82fd8da35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
