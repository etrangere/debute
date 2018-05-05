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
        $__internal_a65866a592da341014667ed8ee80b6cbd36d7086a92ca330e117391d61ee755f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65866a592da341014667ed8ee80b6cbd36d7086a92ca330e117391d61ee755f->enter($__internal_a65866a592da341014667ed8ee80b6cbd36d7086a92ca330e117391d61ee755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3bbe094186efa517e18fd8770e31ff9a49d19b9677276422bd4ec8c13eb16e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbe094186efa517e18fd8770e31ff9a49d19b9677276422bd4ec8c13eb16e70->enter($__internal_3bbe094186efa517e18fd8770e31ff9a49d19b9677276422bd4ec8c13eb16e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a65866a592da341014667ed8ee80b6cbd36d7086a92ca330e117391d61ee755f->leave($__internal_a65866a592da341014667ed8ee80b6cbd36d7086a92ca330e117391d61ee755f_prof);

        
        $__internal_3bbe094186efa517e18fd8770e31ff9a49d19b9677276422bd4ec8c13eb16e70->leave($__internal_3bbe094186efa517e18fd8770e31ff9a49d19b9677276422bd4ec8c13eb16e70_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f71f8b08cd3be5c635b977b8a99aa478e2df38c2470c9dfe2ee335066cb023ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71f8b08cd3be5c635b977b8a99aa478e2df38c2470c9dfe2ee335066cb023ef->enter($__internal_f71f8b08cd3be5c635b977b8a99aa478e2df38c2470c9dfe2ee335066cb023ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_671b82c5b3c9e2f64bcd78fed236ea1d2cdc642b06b9939c921ca57094151b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671b82c5b3c9e2f64bcd78fed236ea1d2cdc642b06b9939c921ca57094151b1c->enter($__internal_671b82c5b3c9e2f64bcd78fed236ea1d2cdc642b06b9939c921ca57094151b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_671b82c5b3c9e2f64bcd78fed236ea1d2cdc642b06b9939c921ca57094151b1c->leave($__internal_671b82c5b3c9e2f64bcd78fed236ea1d2cdc642b06b9939c921ca57094151b1c_prof);

        
        $__internal_f71f8b08cd3be5c635b977b8a99aa478e2df38c2470c9dfe2ee335066cb023ef->leave($__internal_f71f8b08cd3be5c635b977b8a99aa478e2df38c2470c9dfe2ee335066cb023ef_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19f118cff3119f2126ce7313a01d44b01d8964ce3ad4a55d7fc1955e7cfc84c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f118cff3119f2126ce7313a01d44b01d8964ce3ad4a55d7fc1955e7cfc84c4->enter($__internal_19f118cff3119f2126ce7313a01d44b01d8964ce3ad4a55d7fc1955e7cfc84c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d21a24920837e2179943d04d21ca676f252d67b5a18cf52990c7c54190e069e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21a24920837e2179943d04d21ca676f252d67b5a18cf52990c7c54190e069e0->enter($__internal_d21a24920837e2179943d04d21ca676f252d67b5a18cf52990c7c54190e069e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d21a24920837e2179943d04d21ca676f252d67b5a18cf52990c7c54190e069e0->leave($__internal_d21a24920837e2179943d04d21ca676f252d67b5a18cf52990c7c54190e069e0_prof);

        
        $__internal_19f118cff3119f2126ce7313a01d44b01d8964ce3ad4a55d7fc1955e7cfc84c4->leave($__internal_19f118cff3119f2126ce7313a01d44b01d8964ce3ad4a55d7fc1955e7cfc84c4_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
