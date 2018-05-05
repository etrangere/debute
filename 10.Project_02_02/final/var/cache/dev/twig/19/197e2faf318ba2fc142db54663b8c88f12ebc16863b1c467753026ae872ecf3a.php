<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_44bf8ebaa60aa3923717b0613d579fb96e739e4724e4bed73bdd8897a5366928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5479a39a6838bc79985a53edd7e56f7ae67cc3a620262d05e7a2f04b3e007f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5479a39a6838bc79985a53edd7e56f7ae67cc3a620262d05e7a2f04b3e007f7d->enter($__internal_5479a39a6838bc79985a53edd7e56f7ae67cc3a620262d05e7a2f04b3e007f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8351a41fbfe26fb87a2ac4a7e25bb6b7d77a91261b2977c298118a2345e82cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8351a41fbfe26fb87a2ac4a7e25bb6b7d77a91261b2977c298118a2345e82cc2->enter($__internal_8351a41fbfe26fb87a2ac4a7e25bb6b7d77a91261b2977c298118a2345e82cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5479a39a6838bc79985a53edd7e56f7ae67cc3a620262d05e7a2f04b3e007f7d->leave($__internal_5479a39a6838bc79985a53edd7e56f7ae67cc3a620262d05e7a2f04b3e007f7d_prof);

        
        $__internal_8351a41fbfe26fb87a2ac4a7e25bb6b7d77a91261b2977c298118a2345e82cc2->leave($__internal_8351a41fbfe26fb87a2ac4a7e25bb6b7d77a91261b2977c298118a2345e82cc2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_62745ffcdaeb30c416390e4aa3c2f90e9554aaa3dcc693aff4e31b2894e56c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62745ffcdaeb30c416390e4aa3c2f90e9554aaa3dcc693aff4e31b2894e56c3e->enter($__internal_62745ffcdaeb30c416390e4aa3c2f90e9554aaa3dcc693aff4e31b2894e56c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2a81283f63de0ba9940d8addebda7910b5bb4b91fd7088457f80fafe5d2a4a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a81283f63de0ba9940d8addebda7910b5bb4b91fd7088457f80fafe5d2a4a1c->enter($__internal_2a81283f63de0ba9940d8addebda7910b5bb4b91fd7088457f80fafe5d2a4a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2a81283f63de0ba9940d8addebda7910b5bb4b91fd7088457f80fafe5d2a4a1c->leave($__internal_2a81283f63de0ba9940d8addebda7910b5bb4b91fd7088457f80fafe5d2a4a1c_prof);

        
        $__internal_62745ffcdaeb30c416390e4aa3c2f90e9554aaa3dcc693aff4e31b2894e56c3e->leave($__internal_62745ffcdaeb30c416390e4aa3c2f90e9554aaa3dcc693aff4e31b2894e56c3e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff460371164f9fdf3520ba495baff01cd624c28fbba205da5c5954511e0c081f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff460371164f9fdf3520ba495baff01cd624c28fbba205da5c5954511e0c081f->enter($__internal_ff460371164f9fdf3520ba495baff01cd624c28fbba205da5c5954511e0c081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8af582c409c3e86ede96643c673664e70dae3643edb710b5be4e6948d8c637a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af582c409c3e86ede96643c673664e70dae3643edb710b5be4e6948d8c637a5->enter($__internal_8af582c409c3e86ede96643c673664e70dae3643edb710b5be4e6948d8c637a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8af582c409c3e86ede96643c673664e70dae3643edb710b5be4e6948d8c637a5->leave($__internal_8af582c409c3e86ede96643c673664e70dae3643edb710b5be4e6948d8c637a5_prof);

        
        $__internal_ff460371164f9fdf3520ba495baff01cd624c28fbba205da5c5954511e0c081f->leave($__internal_ff460371164f9fdf3520ba495baff01cd624c28fbba205da5c5954511e0c081f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
