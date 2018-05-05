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
        $__internal_f443f1a0bc5dcac73635b496ff69f8ba273e0a2ac47aa2e26a846370e30e00c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f443f1a0bc5dcac73635b496ff69f8ba273e0a2ac47aa2e26a846370e30e00c9->enter($__internal_f443f1a0bc5dcac73635b496ff69f8ba273e0a2ac47aa2e26a846370e30e00c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_13afc833b0a3ee5f70ea3036b692f54c533c78c6875a926b48d3425b3c7443e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13afc833b0a3ee5f70ea3036b692f54c533c78c6875a926b48d3425b3c7443e8->enter($__internal_13afc833b0a3ee5f70ea3036b692f54c533c78c6875a926b48d3425b3c7443e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f443f1a0bc5dcac73635b496ff69f8ba273e0a2ac47aa2e26a846370e30e00c9->leave($__internal_f443f1a0bc5dcac73635b496ff69f8ba273e0a2ac47aa2e26a846370e30e00c9_prof);

        
        $__internal_13afc833b0a3ee5f70ea3036b692f54c533c78c6875a926b48d3425b3c7443e8->leave($__internal_13afc833b0a3ee5f70ea3036b692f54c533c78c6875a926b48d3425b3c7443e8_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
