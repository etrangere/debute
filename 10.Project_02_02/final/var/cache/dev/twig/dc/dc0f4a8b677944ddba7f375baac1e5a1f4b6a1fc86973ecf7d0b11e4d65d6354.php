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
        $__internal_e37ccbf01a8a3a816cd4ea5f7173ae553e0b0dfa76a3e8523677c6edd74fd66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37ccbf01a8a3a816cd4ea5f7173ae553e0b0dfa76a3e8523677c6edd74fd66d->enter($__internal_e37ccbf01a8a3a816cd4ea5f7173ae553e0b0dfa76a3e8523677c6edd74fd66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_195f70e7466c02893e1721904f23edd0a287c701c3c0fbcad8fd0657502e5d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195f70e7466c02893e1721904f23edd0a287c701c3c0fbcad8fd0657502e5d02->enter($__internal_195f70e7466c02893e1721904f23edd0a287c701c3c0fbcad8fd0657502e5d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37ccbf01a8a3a816cd4ea5f7173ae553e0b0dfa76a3e8523677c6edd74fd66d->leave($__internal_e37ccbf01a8a3a816cd4ea5f7173ae553e0b0dfa76a3e8523677c6edd74fd66d_prof);

        
        $__internal_195f70e7466c02893e1721904f23edd0a287c701c3c0fbcad8fd0657502e5d02->leave($__internal_195f70e7466c02893e1721904f23edd0a287c701c3c0fbcad8fd0657502e5d02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_728624d078478af092f2c8f8e737a61f337c3172c3ff64084d2fd3088a805dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728624d078478af092f2c8f8e737a61f337c3172c3ff64084d2fd3088a805dd8->enter($__internal_728624d078478af092f2c8f8e737a61f337c3172c3ff64084d2fd3088a805dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e1d52070efe15e42012d4acfbd0108f02fe8d56ce3660b60f9398afba068d964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d52070efe15e42012d4acfbd0108f02fe8d56ce3660b60f9398afba068d964->enter($__internal_e1d52070efe15e42012d4acfbd0108f02fe8d56ce3660b60f9398afba068d964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e1d52070efe15e42012d4acfbd0108f02fe8d56ce3660b60f9398afba068d964->leave($__internal_e1d52070efe15e42012d4acfbd0108f02fe8d56ce3660b60f9398afba068d964_prof);

        
        $__internal_728624d078478af092f2c8f8e737a61f337c3172c3ff64084d2fd3088a805dd8->leave($__internal_728624d078478af092f2c8f8e737a61f337c3172c3ff64084d2fd3088a805dd8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27bc5fa9b5ec363ac5e052864db7ef5dc04862332da19fd38bab46c0f702b75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bc5fa9b5ec363ac5e052864db7ef5dc04862332da19fd38bab46c0f702b75f->enter($__internal_27bc5fa9b5ec363ac5e052864db7ef5dc04862332da19fd38bab46c0f702b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_32209096b979b407aa6257003ec71252cdee4d95143667a3dd9464dd90f5a0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32209096b979b407aa6257003ec71252cdee4d95143667a3dd9464dd90f5a0f7->enter($__internal_32209096b979b407aa6257003ec71252cdee4d95143667a3dd9464dd90f5a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32209096b979b407aa6257003ec71252cdee4d95143667a3dd9464dd90f5a0f7->leave($__internal_32209096b979b407aa6257003ec71252cdee4d95143667a3dd9464dd90f5a0f7_prof);

        
        $__internal_27bc5fa9b5ec363ac5e052864db7ef5dc04862332da19fd38bab46c0f702b75f->leave($__internal_27bc5fa9b5ec363ac5e052864db7ef5dc04862332da19fd38bab46c0f702b75f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_681154acc475d8ff94a65bcf5d7cd68fad64589c3c1086435b644cd1d4cadd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681154acc475d8ff94a65bcf5d7cd68fad64589c3c1086435b644cd1d4cadd65->enter($__internal_681154acc475d8ff94a65bcf5d7cd68fad64589c3c1086435b644cd1d4cadd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56c5007a7230a39dcccf6991ac16a3d17f740869dccafcb470b866a02c0bfd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c5007a7230a39dcccf6991ac16a3d17f740869dccafcb470b866a02c0bfd31->enter($__internal_56c5007a7230a39dcccf6991ac16a3d17f740869dccafcb470b866a02c0bfd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56c5007a7230a39dcccf6991ac16a3d17f740869dccafcb470b866a02c0bfd31->leave($__internal_56c5007a7230a39dcccf6991ac16a3d17f740869dccafcb470b866a02c0bfd31_prof);

        
        $__internal_681154acc475d8ff94a65bcf5d7cd68fad64589c3c1086435b644cd1d4cadd65->leave($__internal_681154acc475d8ff94a65bcf5d7cd68fad64589c3c1086435b644cd1d4cadd65_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
