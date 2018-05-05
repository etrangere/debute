<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
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
        $__internal_a921d4c1cf3e9bb82b935101b88ef2f5254d6c88704a7b9dfe4ebbb52a616030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a921d4c1cf3e9bb82b935101b88ef2f5254d6c88704a7b9dfe4ebbb52a616030->enter($__internal_a921d4c1cf3e9bb82b935101b88ef2f5254d6c88704a7b9dfe4ebbb52a616030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b1c06544a1d4d12f51a2b132090126b3c7c9f57a9fa18d84f2ee3f9acbf8fb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c06544a1d4d12f51a2b132090126b3c7c9f57a9fa18d84f2ee3f9acbf8fb06->enter($__internal_b1c06544a1d4d12f51a2b132090126b3c7c9f57a9fa18d84f2ee3f9acbf8fb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a921d4c1cf3e9bb82b935101b88ef2f5254d6c88704a7b9dfe4ebbb52a616030->leave($__internal_a921d4c1cf3e9bb82b935101b88ef2f5254d6c88704a7b9dfe4ebbb52a616030_prof);

        
        $__internal_b1c06544a1d4d12f51a2b132090126b3c7c9f57a9fa18d84f2ee3f9acbf8fb06->leave($__internal_b1c06544a1d4d12f51a2b132090126b3c7c9f57a9fa18d84f2ee3f9acbf8fb06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bb825d9d0f67287256bcb953cc4f48997876d3ea1e864ef39d73283d18ca99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb825d9d0f67287256bcb953cc4f48997876d3ea1e864ef39d73283d18ca99f->enter($__internal_5bb825d9d0f67287256bcb953cc4f48997876d3ea1e864ef39d73283d18ca99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68265d8e4572099bcd78e1d43c85c16968d33b6535172baca4bf6581bcf078bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68265d8e4572099bcd78e1d43c85c16968d33b6535172baca4bf6581bcf078bc->enter($__internal_68265d8e4572099bcd78e1d43c85c16968d33b6535172baca4bf6581bcf078bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68265d8e4572099bcd78e1d43c85c16968d33b6535172baca4bf6581bcf078bc->leave($__internal_68265d8e4572099bcd78e1d43c85c16968d33b6535172baca4bf6581bcf078bc_prof);

        
        $__internal_5bb825d9d0f67287256bcb953cc4f48997876d3ea1e864ef39d73283d18ca99f->leave($__internal_5bb825d9d0f67287256bcb953cc4f48997876d3ea1e864ef39d73283d18ca99f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7e5b614e1289909651725d68d801ffdcb34db24f843d0c56f52007833a797d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e5b614e1289909651725d68d801ffdcb34db24f843d0c56f52007833a797d1->enter($__internal_b7e5b614e1289909651725d68d801ffdcb34db24f843d0c56f52007833a797d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e8105ea651fd7750b12cb2f410d4efa8a3fd9b7d3f486a400c935997b63035a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8105ea651fd7750b12cb2f410d4efa8a3fd9b7d3f486a400c935997b63035a->enter($__internal_1e8105ea651fd7750b12cb2f410d4efa8a3fd9b7d3f486a400c935997b63035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e8105ea651fd7750b12cb2f410d4efa8a3fd9b7d3f486a400c935997b63035a->leave($__internal_1e8105ea651fd7750b12cb2f410d4efa8a3fd9b7d3f486a400c935997b63035a_prof);

        
        $__internal_b7e5b614e1289909651725d68d801ffdcb34db24f843d0c56f52007833a797d1->leave($__internal_b7e5b614e1289909651725d68d801ffdcb34db24f843d0c56f52007833a797d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4da7e42499ce64e6d571cc403738634b35a079033e26980d30724782072b044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4da7e42499ce64e6d571cc403738634b35a079033e26980d30724782072b044->enter($__internal_c4da7e42499ce64e6d571cc403738634b35a079033e26980d30724782072b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80014a5c6dcb4e421e075e77dee65082aa5fb0756b84e128fd944ab5d89ae97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80014a5c6dcb4e421e075e77dee65082aa5fb0756b84e128fd944ab5d89ae97b->enter($__internal_80014a5c6dcb4e421e075e77dee65082aa5fb0756b84e128fd944ab5d89ae97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80014a5c6dcb4e421e075e77dee65082aa5fb0756b84e128fd944ab5d89ae97b->leave($__internal_80014a5c6dcb4e421e075e77dee65082aa5fb0756b84e128fd944ab5d89ae97b_prof);

        
        $__internal_c4da7e42499ce64e6d571cc403738634b35a079033e26980d30724782072b044->leave($__internal_c4da7e42499ce64e6d571cc403738634b35a079033e26980d30724782072b044_prof);

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
