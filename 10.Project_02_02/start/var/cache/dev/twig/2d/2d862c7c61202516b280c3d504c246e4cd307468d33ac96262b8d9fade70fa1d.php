<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d94f0912a047d33a556eee67275389da604dc8fb9df590da35249fd8b6cba5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daa6e85617fb99fdc3130694ffc5693f422056dd374e9a66005e60e6c9655383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa6e85617fb99fdc3130694ffc5693f422056dd374e9a66005e60e6c9655383->enter($__internal_daa6e85617fb99fdc3130694ffc5693f422056dd374e9a66005e60e6c9655383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c8fbe0d33d7db48b187f2e0c2c0f52d646cf18990710603d4cc6a9d88c3ba72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fbe0d33d7db48b187f2e0c2c0f52d646cf18990710603d4cc6a9d88c3ba72d->enter($__internal_c8fbe0d33d7db48b187f2e0c2c0f52d646cf18990710603d4cc6a9d88c3ba72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa6e85617fb99fdc3130694ffc5693f422056dd374e9a66005e60e6c9655383->leave($__internal_daa6e85617fb99fdc3130694ffc5693f422056dd374e9a66005e60e6c9655383_prof);

        
        $__internal_c8fbe0d33d7db48b187f2e0c2c0f52d646cf18990710603d4cc6a9d88c3ba72d->leave($__internal_c8fbe0d33d7db48b187f2e0c2c0f52d646cf18990710603d4cc6a9d88c3ba72d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d53c0d6208c90b8c0695b449904c2b8f7bbd70a63960c54227e331a2506c7f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53c0d6208c90b8c0695b449904c2b8f7bbd70a63960c54227e331a2506c7f7a->enter($__internal_d53c0d6208c90b8c0695b449904c2b8f7bbd70a63960c54227e331a2506c7f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c23b34efc5bd0c55b53c45a6ff064f53344101dd71465dc1516e56b3ad75f856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23b34efc5bd0c55b53c45a6ff064f53344101dd71465dc1516e56b3ad75f856->enter($__internal_c23b34efc5bd0c55b53c45a6ff064f53344101dd71465dc1516e56b3ad75f856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c23b34efc5bd0c55b53c45a6ff064f53344101dd71465dc1516e56b3ad75f856->leave($__internal_c23b34efc5bd0c55b53c45a6ff064f53344101dd71465dc1516e56b3ad75f856_prof);

        
        $__internal_d53c0d6208c90b8c0695b449904c2b8f7bbd70a63960c54227e331a2506c7f7a->leave($__internal_d53c0d6208c90b8c0695b449904c2b8f7bbd70a63960c54227e331a2506c7f7a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98752ad030a8e52775e155ef4b32e4e303ac98295fb83035407c695fe86cf64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98752ad030a8e52775e155ef4b32e4e303ac98295fb83035407c695fe86cf64->enter($__internal_e98752ad030a8e52775e155ef4b32e4e303ac98295fb83035407c695fe86cf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0351f702c4bc63bcd829fe820e0be7d5f94b62b543a6239a8192d94e6e63461e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0351f702c4bc63bcd829fe820e0be7d5f94b62b543a6239a8192d94e6e63461e->enter($__internal_0351f702c4bc63bcd829fe820e0be7d5f94b62b543a6239a8192d94e6e63461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0351f702c4bc63bcd829fe820e0be7d5f94b62b543a6239a8192d94e6e63461e->leave($__internal_0351f702c4bc63bcd829fe820e0be7d5f94b62b543a6239a8192d94e6e63461e_prof);

        
        $__internal_e98752ad030a8e52775e155ef4b32e4e303ac98295fb83035407c695fe86cf64->leave($__internal_e98752ad030a8e52775e155ef4b32e4e303ac98295fb83035407c695fe86cf64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
