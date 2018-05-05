<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_1fce473b6059d9f39f442900c35a718eae5b8a84b04b3a784a3858bdc54f62e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fce473b6059d9f39f442900c35a718eae5b8a84b04b3a784a3858bdc54f62e2->enter($__internal_1fce473b6059d9f39f442900c35a718eae5b8a84b04b3a784a3858bdc54f62e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a9147be6dccf2b34d3ebb99166849261370d81b4b06bc0ab14ed0bfbde4d0646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9147be6dccf2b34d3ebb99166849261370d81b4b06bc0ab14ed0bfbde4d0646->enter($__internal_a9147be6dccf2b34d3ebb99166849261370d81b4b06bc0ab14ed0bfbde4d0646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1fce473b6059d9f39f442900c35a718eae5b8a84b04b3a784a3858bdc54f62e2->leave($__internal_1fce473b6059d9f39f442900c35a718eae5b8a84b04b3a784a3858bdc54f62e2_prof);

        
        $__internal_a9147be6dccf2b34d3ebb99166849261370d81b4b06bc0ab14ed0bfbde4d0646->leave($__internal_a9147be6dccf2b34d3ebb99166849261370d81b4b06bc0ab14ed0bfbde4d0646_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
