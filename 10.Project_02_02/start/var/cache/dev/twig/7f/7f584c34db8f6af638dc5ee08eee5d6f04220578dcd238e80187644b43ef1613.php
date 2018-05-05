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
        $__internal_2255be99c17e12f7400e3542fa90f37a38ad52b6601783db3af0fda0499ef54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2255be99c17e12f7400e3542fa90f37a38ad52b6601783db3af0fda0499ef54c->enter($__internal_2255be99c17e12f7400e3542fa90f37a38ad52b6601783db3af0fda0499ef54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_444a3d78c641d5015a99dc804965f4db34288a07d9105cd3409e52a72732e266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444a3d78c641d5015a99dc804965f4db34288a07d9105cd3409e52a72732e266->enter($__internal_444a3d78c641d5015a99dc804965f4db34288a07d9105cd3409e52a72732e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2255be99c17e12f7400e3542fa90f37a38ad52b6601783db3af0fda0499ef54c->leave($__internal_2255be99c17e12f7400e3542fa90f37a38ad52b6601783db3af0fda0499ef54c_prof);

        
        $__internal_444a3d78c641d5015a99dc804965f4db34288a07d9105cd3409e52a72732e266->leave($__internal_444a3d78c641d5015a99dc804965f4db34288a07d9105cd3409e52a72732e266_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66fd0fcd087bf237b520b726ad531b5bf3949d7eb506b1ad8193412161ab16bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fd0fcd087bf237b520b726ad531b5bf3949d7eb506b1ad8193412161ab16bb->enter($__internal_66fd0fcd087bf237b520b726ad531b5bf3949d7eb506b1ad8193412161ab16bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2bf00b8a8be094822e16266ef52723fac1b1b11cabff34f9f898fb3301ba816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf00b8a8be094822e16266ef52723fac1b1b11cabff34f9f898fb3301ba816->enter($__internal_d2bf00b8a8be094822e16266ef52723fac1b1b11cabff34f9f898fb3301ba816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d2bf00b8a8be094822e16266ef52723fac1b1b11cabff34f9f898fb3301ba816->leave($__internal_d2bf00b8a8be094822e16266ef52723fac1b1b11cabff34f9f898fb3301ba816_prof);

        
        $__internal_66fd0fcd087bf237b520b726ad531b5bf3949d7eb506b1ad8193412161ab16bb->leave($__internal_66fd0fcd087bf237b520b726ad531b5bf3949d7eb506b1ad8193412161ab16bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_681bc7e4a331639860ae71035aa1059ee6a37775b025484541607097d4cdc0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681bc7e4a331639860ae71035aa1059ee6a37775b025484541607097d4cdc0b8->enter($__internal_681bc7e4a331639860ae71035aa1059ee6a37775b025484541607097d4cdc0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cf63eebc0e50f1083929da65e69dcc49f2950c1bb1e6c84f57fc0927ac20491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf63eebc0e50f1083929da65e69dcc49f2950c1bb1e6c84f57fc0927ac20491->enter($__internal_5cf63eebc0e50f1083929da65e69dcc49f2950c1bb1e6c84f57fc0927ac20491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5cf63eebc0e50f1083929da65e69dcc49f2950c1bb1e6c84f57fc0927ac20491->leave($__internal_5cf63eebc0e50f1083929da65e69dcc49f2950c1bb1e6c84f57fc0927ac20491_prof);

        
        $__internal_681bc7e4a331639860ae71035aa1059ee6a37775b025484541607097d4cdc0b8->leave($__internal_681bc7e4a331639860ae71035aa1059ee6a37775b025484541607097d4cdc0b8_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
