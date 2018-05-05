<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0b3f57431964e96bf8a0316eebfb19beba63a737e415eb76b330e03199bad3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3f57431964e96bf8a0316eebfb19beba63a737e415eb76b330e03199bad3f0->enter($__internal_0b3f57431964e96bf8a0316eebfb19beba63a737e415eb76b330e03199bad3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4870a28fbb79b651c07da68ee94b195c0845cebc708c9ca85bfa0a330f6b6631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4870a28fbb79b651c07da68ee94b195c0845cebc708c9ca85bfa0a330f6b6631->enter($__internal_4870a28fbb79b651c07da68ee94b195c0845cebc708c9ca85bfa0a330f6b6631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3f57431964e96bf8a0316eebfb19beba63a737e415eb76b330e03199bad3f0->leave($__internal_0b3f57431964e96bf8a0316eebfb19beba63a737e415eb76b330e03199bad3f0_prof);

        
        $__internal_4870a28fbb79b651c07da68ee94b195c0845cebc708c9ca85bfa0a330f6b6631->leave($__internal_4870a28fbb79b651c07da68ee94b195c0845cebc708c9ca85bfa0a330f6b6631_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_537ae42ac206f8bb56ec3dc26b2a4d32a149ec57bfc914af1538d051491c05c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537ae42ac206f8bb56ec3dc26b2a4d32a149ec57bfc914af1538d051491c05c9->enter($__internal_537ae42ac206f8bb56ec3dc26b2a4d32a149ec57bfc914af1538d051491c05c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34e5a5b0852e87504aab38adc41e98bd3da7a997c0fecd1ebfba062a47da0d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e5a5b0852e87504aab38adc41e98bd3da7a997c0fecd1ebfba062a47da0d3c->enter($__internal_34e5a5b0852e87504aab38adc41e98bd3da7a997c0fecd1ebfba062a47da0d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_34e5a5b0852e87504aab38adc41e98bd3da7a997c0fecd1ebfba062a47da0d3c->leave($__internal_34e5a5b0852e87504aab38adc41e98bd3da7a997c0fecd1ebfba062a47da0d3c_prof);

        
        $__internal_537ae42ac206f8bb56ec3dc26b2a4d32a149ec57bfc914af1538d051491c05c9->leave($__internal_537ae42ac206f8bb56ec3dc26b2a4d32a149ec57bfc914af1538d051491c05c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce0997a157cb6ca4bd5621649b294077aca9f012ed1dab01f61e4868e1b0feff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0997a157cb6ca4bd5621649b294077aca9f012ed1dab01f61e4868e1b0feff->enter($__internal_ce0997a157cb6ca4bd5621649b294077aca9f012ed1dab01f61e4868e1b0feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_048a93eb5203cf699ab8bac8265161d1bdaa07c230be174fc937430b0b661495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048a93eb5203cf699ab8bac8265161d1bdaa07c230be174fc937430b0b661495->enter($__internal_048a93eb5203cf699ab8bac8265161d1bdaa07c230be174fc937430b0b661495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_048a93eb5203cf699ab8bac8265161d1bdaa07c230be174fc937430b0b661495->leave($__internal_048a93eb5203cf699ab8bac8265161d1bdaa07c230be174fc937430b0b661495_prof);

        
        $__internal_ce0997a157cb6ca4bd5621649b294077aca9f012ed1dab01f61e4868e1b0feff->leave($__internal_ce0997a157cb6ca4bd5621649b294077aca9f012ed1dab01f61e4868e1b0feff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ced2ad90f7f382b3e5dbda998bbc096a43920515e01886d8d4d98d18c86737b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ced2ad90f7f382b3e5dbda998bbc096a43920515e01886d8d4d98d18c86737b->enter($__internal_8ced2ad90f7f382b3e5dbda998bbc096a43920515e01886d8d4d98d18c86737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdc62b6bc7eb21f92df08b918679f36a217bb56ff3ed78ef95d5d3b871cb09ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc62b6bc7eb21f92df08b918679f36a217bb56ff3ed78ef95d5d3b871cb09ee->enter($__internal_cdc62b6bc7eb21f92df08b918679f36a217bb56ff3ed78ef95d5d3b871cb09ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cdc62b6bc7eb21f92df08b918679f36a217bb56ff3ed78ef95d5d3b871cb09ee->leave($__internal_cdc62b6bc7eb21f92df08b918679f36a217bb56ff3ed78ef95d5d3b871cb09ee_prof);

        
        $__internal_8ced2ad90f7f382b3e5dbda998bbc096a43920515e01886d8d4d98d18c86737b->leave($__internal_8ced2ad90f7f382b3e5dbda998bbc096a43920515e01886d8d4d98d18c86737b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
