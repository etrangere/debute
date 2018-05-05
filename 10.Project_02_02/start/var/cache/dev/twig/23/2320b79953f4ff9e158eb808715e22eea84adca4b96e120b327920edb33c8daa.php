<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e3fb65ac65754b15880c41ae0fac6c97546e13f1da9af00004a62c56618db22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b164524c22a69996b6c570e0665bb7401a58552519204055834e93ef6ce5611e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b164524c22a69996b6c570e0665bb7401a58552519204055834e93ef6ce5611e->enter($__internal_b164524c22a69996b6c570e0665bb7401a58552519204055834e93ef6ce5611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_457ecb9fd1cd4ed45ce5523f604a954f9362684c7f726b0e5d0409396e46edc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457ecb9fd1cd4ed45ce5523f604a954f9362684c7f726b0e5d0409396e46edc1->enter($__internal_457ecb9fd1cd4ed45ce5523f604a954f9362684c7f726b0e5d0409396e46edc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b164524c22a69996b6c570e0665bb7401a58552519204055834e93ef6ce5611e->leave($__internal_b164524c22a69996b6c570e0665bb7401a58552519204055834e93ef6ce5611e_prof);

        
        $__internal_457ecb9fd1cd4ed45ce5523f604a954f9362684c7f726b0e5d0409396e46edc1->leave($__internal_457ecb9fd1cd4ed45ce5523f604a954f9362684c7f726b0e5d0409396e46edc1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_891dbb747d475756c5168cd75969a9fc96649483e9e95c6f9f42b6e42a79b47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891dbb747d475756c5168cd75969a9fc96649483e9e95c6f9f42b6e42a79b47d->enter($__internal_891dbb747d475756c5168cd75969a9fc96649483e9e95c6f9f42b6e42a79b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fdcdd5177165b48659e2f9f946b8b1e71742a27265a9c9b7a1fe27a930540717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcdd5177165b48659e2f9f946b8b1e71742a27265a9c9b7a1fe27a930540717->enter($__internal_fdcdd5177165b48659e2f9f946b8b1e71742a27265a9c9b7a1fe27a930540717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fdcdd5177165b48659e2f9f946b8b1e71742a27265a9c9b7a1fe27a930540717->leave($__internal_fdcdd5177165b48659e2f9f946b8b1e71742a27265a9c9b7a1fe27a930540717_prof);

        
        $__internal_891dbb747d475756c5168cd75969a9fc96649483e9e95c6f9f42b6e42a79b47d->leave($__internal_891dbb747d475756c5168cd75969a9fc96649483e9e95c6f9f42b6e42a79b47d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1157c91b6e6c7b7f77b6a019439ad9f71a136513f07d132274353d47f3302a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1157c91b6e6c7b7f77b6a019439ad9f71a136513f07d132274353d47f3302a63->enter($__internal_1157c91b6e6c7b7f77b6a019439ad9f71a136513f07d132274353d47f3302a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8c307d87f0450ff82de84a0fa46a14389c563207e29db4e882c93a7f646719d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c307d87f0450ff82de84a0fa46a14389c563207e29db4e882c93a7f646719d->enter($__internal_f8c307d87f0450ff82de84a0fa46a14389c563207e29db4e882c93a7f646719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8c307d87f0450ff82de84a0fa46a14389c563207e29db4e882c93a7f646719d->leave($__internal_f8c307d87f0450ff82de84a0fa46a14389c563207e29db4e882c93a7f646719d_prof);

        
        $__internal_1157c91b6e6c7b7f77b6a019439ad9f71a136513f07d132274353d47f3302a63->leave($__internal_1157c91b6e6c7b7f77b6a019439ad9f71a136513f07d132274353d47f3302a63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ab1882d8c84acfec4faae783b5a316358bb793f1657450c8f9e236e5b42cb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab1882d8c84acfec4faae783b5a316358bb793f1657450c8f9e236e5b42cb44->enter($__internal_7ab1882d8c84acfec4faae783b5a316358bb793f1657450c8f9e236e5b42cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5be6f16b20ad3b8f5b122e8001ee2ba58008e2c932bfd50ffe8d2dca46e87349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be6f16b20ad3b8f5b122e8001ee2ba58008e2c932bfd50ffe8d2dca46e87349->enter($__internal_5be6f16b20ad3b8f5b122e8001ee2ba58008e2c932bfd50ffe8d2dca46e87349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5be6f16b20ad3b8f5b122e8001ee2ba58008e2c932bfd50ffe8d2dca46e87349->leave($__internal_5be6f16b20ad3b8f5b122e8001ee2ba58008e2c932bfd50ffe8d2dca46e87349_prof);

        
        $__internal_7ab1882d8c84acfec4faae783b5a316358bb793f1657450c8f9e236e5b42cb44->leave($__internal_7ab1882d8c84acfec4faae783b5a316358bb793f1657450c8f9e236e5b42cb44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
