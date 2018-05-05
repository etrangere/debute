<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_111cad5bc22582befb62fbb9e2be65f365aeb260496cf9bc6a6f79c66b67624f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_126dae2ef8ae4aed73d162a913fd5392b97b13aa189ceeca329f9abd04c228a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126dae2ef8ae4aed73d162a913fd5392b97b13aa189ceeca329f9abd04c228a9->enter($__internal_126dae2ef8ae4aed73d162a913fd5392b97b13aa189ceeca329f9abd04c228a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3ed5178aadb0f4e44f79349d0c2c4934a175cb7ca2fd94f85408ea5e48e0346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed5178aadb0f4e44f79349d0c2c4934a175cb7ca2fd94f85408ea5e48e0346a->enter($__internal_3ed5178aadb0f4e44f79349d0c2c4934a175cb7ca2fd94f85408ea5e48e0346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_126dae2ef8ae4aed73d162a913fd5392b97b13aa189ceeca329f9abd04c228a9->leave($__internal_126dae2ef8ae4aed73d162a913fd5392b97b13aa189ceeca329f9abd04c228a9_prof);

        
        $__internal_3ed5178aadb0f4e44f79349d0c2c4934a175cb7ca2fd94f85408ea5e48e0346a->leave($__internal_3ed5178aadb0f4e44f79349d0c2c4934a175cb7ca2fd94f85408ea5e48e0346a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b26b59fdc690f679fe54996a4811e0491df248ab1a89c1565908b2fb91d984d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b26b59fdc690f679fe54996a4811e0491df248ab1a89c1565908b2fb91d984d->enter($__internal_8b26b59fdc690f679fe54996a4811e0491df248ab1a89c1565908b2fb91d984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_351182c2982af6f190f1b97459df971cf435ba2a33ceb64a66d360643391f690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351182c2982af6f190f1b97459df971cf435ba2a33ceb64a66d360643391f690->enter($__internal_351182c2982af6f190f1b97459df971cf435ba2a33ceb64a66d360643391f690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_351182c2982af6f190f1b97459df971cf435ba2a33ceb64a66d360643391f690->leave($__internal_351182c2982af6f190f1b97459df971cf435ba2a33ceb64a66d360643391f690_prof);

        
        $__internal_8b26b59fdc690f679fe54996a4811e0491df248ab1a89c1565908b2fb91d984d->leave($__internal_8b26b59fdc690f679fe54996a4811e0491df248ab1a89c1565908b2fb91d984d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
