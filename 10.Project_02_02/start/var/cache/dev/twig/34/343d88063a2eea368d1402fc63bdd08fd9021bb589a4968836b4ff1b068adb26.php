<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9e151c727dbbbbe9ec2bf0b8676caf1d6877e1ac965844f0b7c95a7fd86c744a extends Twig_Template
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
        $__internal_d2d9e6655bb341ecf8365fb77f6ae7f130e34f43c9edf68eaf607ad663ff1471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d9e6655bb341ecf8365fb77f6ae7f130e34f43c9edf68eaf607ad663ff1471->enter($__internal_d2d9e6655bb341ecf8365fb77f6ae7f130e34f43c9edf68eaf607ad663ff1471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_043629c036f07b36a56665e8e6a73c2821b312750ad4103e8b8f5722dbf86739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043629c036f07b36a56665e8e6a73c2821b312750ad4103e8b8f5722dbf86739->enter($__internal_043629c036f07b36a56665e8e6a73c2821b312750ad4103e8b8f5722dbf86739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2d9e6655bb341ecf8365fb77f6ae7f130e34f43c9edf68eaf607ad663ff1471->leave($__internal_d2d9e6655bb341ecf8365fb77f6ae7f130e34f43c9edf68eaf607ad663ff1471_prof);

        
        $__internal_043629c036f07b36a56665e8e6a73c2821b312750ad4103e8b8f5722dbf86739->leave($__internal_043629c036f07b36a56665e8e6a73c2821b312750ad4103e8b8f5722dbf86739_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_586a99dac695d6f74317ba9fa3991155aa7a0fd0ad3b2325105e4729a98b5157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586a99dac695d6f74317ba9fa3991155aa7a0fd0ad3b2325105e4729a98b5157->enter($__internal_586a99dac695d6f74317ba9fa3991155aa7a0fd0ad3b2325105e4729a98b5157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_20ddb87190ff9691a1cae95cc15b9f89da456d17d2ce81f51080963f9913398d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ddb87190ff9691a1cae95cc15b9f89da456d17d2ce81f51080963f9913398d->enter($__internal_20ddb87190ff9691a1cae95cc15b9f89da456d17d2ce81f51080963f9913398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_20ddb87190ff9691a1cae95cc15b9f89da456d17d2ce81f51080963f9913398d->leave($__internal_20ddb87190ff9691a1cae95cc15b9f89da456d17d2ce81f51080963f9913398d_prof);

        
        $__internal_586a99dac695d6f74317ba9fa3991155aa7a0fd0ad3b2325105e4729a98b5157->leave($__internal_586a99dac695d6f74317ba9fa3991155aa7a0fd0ad3b2325105e4729a98b5157_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
