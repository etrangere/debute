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
        $__internal_82b3b8ca1a32b47501ac8eee863ed72712c9971d93fc324ebc2f78c704497a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b3b8ca1a32b47501ac8eee863ed72712c9971d93fc324ebc2f78c704497a60->enter($__internal_82b3b8ca1a32b47501ac8eee863ed72712c9971d93fc324ebc2f78c704497a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8806e0d44a058bc2067b47e55544ed00fe5458ea0660db90a4a38b408bab456f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8806e0d44a058bc2067b47e55544ed00fe5458ea0660db90a4a38b408bab456f->enter($__internal_8806e0d44a058bc2067b47e55544ed00fe5458ea0660db90a4a38b408bab456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b3b8ca1a32b47501ac8eee863ed72712c9971d93fc324ebc2f78c704497a60->leave($__internal_82b3b8ca1a32b47501ac8eee863ed72712c9971d93fc324ebc2f78c704497a60_prof);

        
        $__internal_8806e0d44a058bc2067b47e55544ed00fe5458ea0660db90a4a38b408bab456f->leave($__internal_8806e0d44a058bc2067b47e55544ed00fe5458ea0660db90a4a38b408bab456f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ae5529a12ec4479d888ba19a172cb59d51401ab2dda43eddb07337c3924e9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae5529a12ec4479d888ba19a172cb59d51401ab2dda43eddb07337c3924e9cd->enter($__internal_3ae5529a12ec4479d888ba19a172cb59d51401ab2dda43eddb07337c3924e9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf3f7e3e7b54d55c4a9440b84915e97a73905454de9306bebdc4266099ed0b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3f7e3e7b54d55c4a9440b84915e97a73905454de9306bebdc4266099ed0b29->enter($__internal_bf3f7e3e7b54d55c4a9440b84915e97a73905454de9306bebdc4266099ed0b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf3f7e3e7b54d55c4a9440b84915e97a73905454de9306bebdc4266099ed0b29->leave($__internal_bf3f7e3e7b54d55c4a9440b84915e97a73905454de9306bebdc4266099ed0b29_prof);

        
        $__internal_3ae5529a12ec4479d888ba19a172cb59d51401ab2dda43eddb07337c3924e9cd->leave($__internal_3ae5529a12ec4479d888ba19a172cb59d51401ab2dda43eddb07337c3924e9cd_prof);

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
