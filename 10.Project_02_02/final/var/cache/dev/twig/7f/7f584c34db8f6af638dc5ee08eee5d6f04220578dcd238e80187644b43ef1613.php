<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7a6fdc327dc8747a13a5413a15b34c103ab647e65b3b9f71cd948e3de5a6b772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90d9d20c517a72be827ea2074bc70c7e361baf4a442c09ea756d138817899e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d9d20c517a72be827ea2074bc70c7e361baf4a442c09ea756d138817899e97->enter($__internal_90d9d20c517a72be827ea2074bc70c7e361baf4a442c09ea756d138817899e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e0afaa32abb602892e44f861c052f9595bff4f089ee4b9d9ff41def02055ecaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0afaa32abb602892e44f861c052f9595bff4f089ee4b9d9ff41def02055ecaf->enter($__internal_e0afaa32abb602892e44f861c052f9595bff4f089ee4b9d9ff41def02055ecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d9d20c517a72be827ea2074bc70c7e361baf4a442c09ea756d138817899e97->leave($__internal_90d9d20c517a72be827ea2074bc70c7e361baf4a442c09ea756d138817899e97_prof);

        
        $__internal_e0afaa32abb602892e44f861c052f9595bff4f089ee4b9d9ff41def02055ecaf->leave($__internal_e0afaa32abb602892e44f861c052f9595bff4f089ee4b9d9ff41def02055ecaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9028adb84a7a9c0714b497615c42741060d632cc56a664977387f795340ae909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9028adb84a7a9c0714b497615c42741060d632cc56a664977387f795340ae909->enter($__internal_9028adb84a7a9c0714b497615c42741060d632cc56a664977387f795340ae909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08ccf500b2419088142270cc27c519d777441a3088ffa3d9efbfd81ae95283b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ccf500b2419088142270cc27c519d777441a3088ffa3d9efbfd81ae95283b8->enter($__internal_08ccf500b2419088142270cc27c519d777441a3088ffa3d9efbfd81ae95283b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08ccf500b2419088142270cc27c519d777441a3088ffa3d9efbfd81ae95283b8->leave($__internal_08ccf500b2419088142270cc27c519d777441a3088ffa3d9efbfd81ae95283b8_prof);

        
        $__internal_9028adb84a7a9c0714b497615c42741060d632cc56a664977387f795340ae909->leave($__internal_9028adb84a7a9c0714b497615c42741060d632cc56a664977387f795340ae909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8f2651a50a0ee156788e9a6c0e2e3784321f34170561631e30f0d58230653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8f2651a50a0ee156788e9a6c0e2e3784321f34170561631e30f0d58230653d->enter($__internal_ee8f2651a50a0ee156788e9a6c0e2e3784321f34170561631e30f0d58230653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2046ec3abe89c108d1b1c663d1735340a192a0713a0db3720881a7e89cb975bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2046ec3abe89c108d1b1c663d1735340a192a0713a0db3720881a7e89cb975bd->enter($__internal_2046ec3abe89c108d1b1c663d1735340a192a0713a0db3720881a7e89cb975bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2046ec3abe89c108d1b1c663d1735340a192a0713a0db3720881a7e89cb975bd->leave($__internal_2046ec3abe89c108d1b1c663d1735340a192a0713a0db3720881a7e89cb975bd_prof);

        
        $__internal_ee8f2651a50a0ee156788e9a6c0e2e3784321f34170561631e30f0d58230653d->leave($__internal_ee8f2651a50a0ee156788e9a6c0e2e3784321f34170561631e30f0d58230653d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
