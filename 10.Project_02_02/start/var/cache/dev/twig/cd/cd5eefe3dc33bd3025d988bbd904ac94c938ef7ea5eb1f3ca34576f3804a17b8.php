<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_db569b3f96c5c2488946217496f960117d133363ab56acf6bdd35d230ce8f6b9 extends Twig_Template
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
        $__internal_382aed761068aebbedae18c4c4d0e7e9c18e07756c37b562d489e7cee160e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382aed761068aebbedae18c4c4d0e7e9c18e07756c37b562d489e7cee160e4d8->enter($__internal_382aed761068aebbedae18c4c4d0e7e9c18e07756c37b562d489e7cee160e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_99868e8f56aefc81321b6f6cbb8ca32604635cd7c2ce0d9c0028b4ba479bd169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99868e8f56aefc81321b6f6cbb8ca32604635cd7c2ce0d9c0028b4ba479bd169->enter($__internal_99868e8f56aefc81321b6f6cbb8ca32604635cd7c2ce0d9c0028b4ba479bd169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382aed761068aebbedae18c4c4d0e7e9c18e07756c37b562d489e7cee160e4d8->leave($__internal_382aed761068aebbedae18c4c4d0e7e9c18e07756c37b562d489e7cee160e4d8_prof);

        
        $__internal_99868e8f56aefc81321b6f6cbb8ca32604635cd7c2ce0d9c0028b4ba479bd169->leave($__internal_99868e8f56aefc81321b6f6cbb8ca32604635cd7c2ce0d9c0028b4ba479bd169_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d21cd09156562ee8eb2cad33f55fb4f59dee2805a65f795ca7eb3de95cb1963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d21cd09156562ee8eb2cad33f55fb4f59dee2805a65f795ca7eb3de95cb1963->enter($__internal_3d21cd09156562ee8eb2cad33f55fb4f59dee2805a65f795ca7eb3de95cb1963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47912168126aae35e8ca097d7eb77259dd6da98f4fac3c22226a104c103df557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47912168126aae35e8ca097d7eb77259dd6da98f4fac3c22226a104c103df557->enter($__internal_47912168126aae35e8ca097d7eb77259dd6da98f4fac3c22226a104c103df557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_47912168126aae35e8ca097d7eb77259dd6da98f4fac3c22226a104c103df557->leave($__internal_47912168126aae35e8ca097d7eb77259dd6da98f4fac3c22226a104c103df557_prof);

        
        $__internal_3d21cd09156562ee8eb2cad33f55fb4f59dee2805a65f795ca7eb3de95cb1963->leave($__internal_3d21cd09156562ee8eb2cad33f55fb4f59dee2805a65f795ca7eb3de95cb1963_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc399f2660c2370f2422768f8476cd59d4310e236260bd6d9b2f3e6925416385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc399f2660c2370f2422768f8476cd59d4310e236260bd6d9b2f3e6925416385->enter($__internal_bc399f2660c2370f2422768f8476cd59d4310e236260bd6d9b2f3e6925416385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc7aab150eac76a25c2044ecc9870ebd9fc8b254e9a51d67e95f9129b003aa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7aab150eac76a25c2044ecc9870ebd9fc8b254e9a51d67e95f9129b003aa6b->enter($__internal_cc7aab150eac76a25c2044ecc9870ebd9fc8b254e9a51d67e95f9129b003aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cc7aab150eac76a25c2044ecc9870ebd9fc8b254e9a51d67e95f9129b003aa6b->leave($__internal_cc7aab150eac76a25c2044ecc9870ebd9fc8b254e9a51d67e95f9129b003aa6b_prof);

        
        $__internal_bc399f2660c2370f2422768f8476cd59d4310e236260bd6d9b2f3e6925416385->leave($__internal_bc399f2660c2370f2422768f8476cd59d4310e236260bd6d9b2f3e6925416385_prof);

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
