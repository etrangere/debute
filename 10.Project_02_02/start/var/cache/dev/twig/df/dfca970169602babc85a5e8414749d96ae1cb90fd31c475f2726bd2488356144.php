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
        $__internal_3371303214a64c76afa6d6dd18c6f15d2ea2eb75579e6af5ff58f707d75dc5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3371303214a64c76afa6d6dd18c6f15d2ea2eb75579e6af5ff58f707d75dc5d1->enter($__internal_3371303214a64c76afa6d6dd18c6f15d2ea2eb75579e6af5ff58f707d75dc5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_665ceb3fe557bed4dde09bd1afc08596d604e26d6eb8c21d809dcf4b876d8d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665ceb3fe557bed4dde09bd1afc08596d604e26d6eb8c21d809dcf4b876d8d12->enter($__internal_665ceb3fe557bed4dde09bd1afc08596d604e26d6eb8c21d809dcf4b876d8d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3371303214a64c76afa6d6dd18c6f15d2ea2eb75579e6af5ff58f707d75dc5d1->leave($__internal_3371303214a64c76afa6d6dd18c6f15d2ea2eb75579e6af5ff58f707d75dc5d1_prof);

        
        $__internal_665ceb3fe557bed4dde09bd1afc08596d604e26d6eb8c21d809dcf4b876d8d12->leave($__internal_665ceb3fe557bed4dde09bd1afc08596d604e26d6eb8c21d809dcf4b876d8d12_prof);

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
", "@Twig/Exception/error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
