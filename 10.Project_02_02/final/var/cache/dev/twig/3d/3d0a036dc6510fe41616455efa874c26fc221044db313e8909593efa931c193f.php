<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6c271c6b89eebeeeb97b91625f1401b284b8c46b91a20034af872964b0a5c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afb76f90e9da98f4740e3475837f979daf02493fd3cd2d14b2ecd8bb85e0415b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb76f90e9da98f4740e3475837f979daf02493fd3cd2d14b2ecd8bb85e0415b->enter($__internal_afb76f90e9da98f4740e3475837f979daf02493fd3cd2d14b2ecd8bb85e0415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5d41ec7f14b028f18b4566707f34fdf66cf6156180708cddbe66c2ea3ba66166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d41ec7f14b028f18b4566707f34fdf66cf6156180708cddbe66c2ea3ba66166->enter($__internal_5d41ec7f14b028f18b4566707f34fdf66cf6156180708cddbe66c2ea3ba66166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb76f90e9da98f4740e3475837f979daf02493fd3cd2d14b2ecd8bb85e0415b->leave($__internal_afb76f90e9da98f4740e3475837f979daf02493fd3cd2d14b2ecd8bb85e0415b_prof);

        
        $__internal_5d41ec7f14b028f18b4566707f34fdf66cf6156180708cddbe66c2ea3ba66166->leave($__internal_5d41ec7f14b028f18b4566707f34fdf66cf6156180708cddbe66c2ea3ba66166_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ffe056359ffbde2b069daf71143192d530ad7d8c2054adaa7b42b157cf9d440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffe056359ffbde2b069daf71143192d530ad7d8c2054adaa7b42b157cf9d440->enter($__internal_1ffe056359ffbde2b069daf71143192d530ad7d8c2054adaa7b42b157cf9d440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c9b8ef5b31720e631a7d6797dc6df3075a5c410b5052ae7df4afb36d26a5a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9b8ef5b31720e631a7d6797dc6df3075a5c410b5052ae7df4afb36d26a5a87->enter($__internal_0c9b8ef5b31720e631a7d6797dc6df3075a5c410b5052ae7df4afb36d26a5a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0c9b8ef5b31720e631a7d6797dc6df3075a5c410b5052ae7df4afb36d26a5a87->leave($__internal_0c9b8ef5b31720e631a7d6797dc6df3075a5c410b5052ae7df4afb36d26a5a87_prof);

        
        $__internal_1ffe056359ffbde2b069daf71143192d530ad7d8c2054adaa7b42b157cf9d440->leave($__internal_1ffe056359ffbde2b069daf71143192d530ad7d8c2054adaa7b42b157cf9d440_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
