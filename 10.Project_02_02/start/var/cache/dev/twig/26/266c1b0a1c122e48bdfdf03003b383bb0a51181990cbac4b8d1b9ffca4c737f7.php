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
        $__internal_a2264142dd7110416afc29c69c1fafe7c98fab09b718198a46a9684e8c0dd08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2264142dd7110416afc29c69c1fafe7c98fab09b718198a46a9684e8c0dd08b->enter($__internal_a2264142dd7110416afc29c69c1fafe7c98fab09b718198a46a9684e8c0dd08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3eef31e019015edee17df15c764faa757cdaff27584b2a44315668b9fa4751fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eef31e019015edee17df15c764faa757cdaff27584b2a44315668b9fa4751fd->enter($__internal_3eef31e019015edee17df15c764faa757cdaff27584b2a44315668b9fa4751fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a2264142dd7110416afc29c69c1fafe7c98fab09b718198a46a9684e8c0dd08b->leave($__internal_a2264142dd7110416afc29c69c1fafe7c98fab09b718198a46a9684e8c0dd08b_prof);

        
        $__internal_3eef31e019015edee17df15c764faa757cdaff27584b2a44315668b9fa4751fd->leave($__internal_3eef31e019015edee17df15c764faa757cdaff27584b2a44315668b9fa4751fd_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
