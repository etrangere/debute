<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2b15fa3c12e566f37b8e965555ab82c603d07842763ca383d1fe4ab15728820a extends Twig_Template
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
        $__internal_40290ef4aa76f0a4fb4afd538b0f88517e79f80c93224a07af2683b5f9df7fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40290ef4aa76f0a4fb4afd538b0f88517e79f80c93224a07af2683b5f9df7fe1->enter($__internal_40290ef4aa76f0a4fb4afd538b0f88517e79f80c93224a07af2683b5f9df7fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_568a8c8ebcd10e8daae07d5e06290fd85dea0a66d0e0c0e34a114c0c2fe2071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568a8c8ebcd10e8daae07d5e06290fd85dea0a66d0e0c0e34a114c0c2fe2071a->enter($__internal_568a8c8ebcd10e8daae07d5e06290fd85dea0a66d0e0c0e34a114c0c2fe2071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_40290ef4aa76f0a4fb4afd538b0f88517e79f80c93224a07af2683b5f9df7fe1->leave($__internal_40290ef4aa76f0a4fb4afd538b0f88517e79f80c93224a07af2683b5f9df7fe1_prof);

        
        $__internal_568a8c8ebcd10e8daae07d5e06290fd85dea0a66d0e0c0e34a114c0c2fe2071a->leave($__internal_568a8c8ebcd10e8daae07d5e06290fd85dea0a66d0e0c0e34a114c0c2fe2071a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
