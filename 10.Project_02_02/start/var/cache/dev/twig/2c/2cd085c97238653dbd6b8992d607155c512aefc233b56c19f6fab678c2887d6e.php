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
        $__internal_3a769adcc24ad400305d986578a980c113ec8eef7187f43a1969ae11eec3ed34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a769adcc24ad400305d986578a980c113ec8eef7187f43a1969ae11eec3ed34->enter($__internal_3a769adcc24ad400305d986578a980c113ec8eef7187f43a1969ae11eec3ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4fd7cc47cf67078b56b27ab76dd41970162d5d6ffa2cefaea3d8ca4dd1d44dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd7cc47cf67078b56b27ab76dd41970162d5d6ffa2cefaea3d8ca4dd1d44dc8->enter($__internal_4fd7cc47cf67078b56b27ab76dd41970162d5d6ffa2cefaea3d8ca4dd1d44dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3a769adcc24ad400305d986578a980c113ec8eef7187f43a1969ae11eec3ed34->leave($__internal_3a769adcc24ad400305d986578a980c113ec8eef7187f43a1969ae11eec3ed34_prof);

        
        $__internal_4fd7cc47cf67078b56b27ab76dd41970162d5d6ffa2cefaea3d8ca4dd1d44dc8->leave($__internal_4fd7cc47cf67078b56b27ab76dd41970162d5d6ffa2cefaea3d8ca4dd1d44dc8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6971785e44da57f5aca0214ace407ede890afad41c75907ff159113cd88792e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6971785e44da57f5aca0214ace407ede890afad41c75907ff159113cd88792e8->enter($__internal_6971785e44da57f5aca0214ace407ede890afad41c75907ff159113cd88792e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02d91d312baadf8ebeffedaf3367dadb2de93d87574bd888f23e42b0fd59999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d91d312baadf8ebeffedaf3367dadb2de93d87574bd888f23e42b0fd59999e->enter($__internal_02d91d312baadf8ebeffedaf3367dadb2de93d87574bd888f23e42b0fd59999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_02d91d312baadf8ebeffedaf3367dadb2de93d87574bd888f23e42b0fd59999e->leave($__internal_02d91d312baadf8ebeffedaf3367dadb2de93d87574bd888f23e42b0fd59999e_prof);

        
        $__internal_6971785e44da57f5aca0214ace407ede890afad41c75907ff159113cd88792e8->leave($__internal_6971785e44da57f5aca0214ace407ede890afad41c75907ff159113cd88792e8_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
