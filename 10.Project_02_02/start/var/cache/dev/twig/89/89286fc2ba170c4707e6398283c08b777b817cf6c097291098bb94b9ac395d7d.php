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
        $__internal_33e7bd07e10005eeb16cb3fa3246bab44d6a270edbfe48f9ea12e1e04317dc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e7bd07e10005eeb16cb3fa3246bab44d6a270edbfe48f9ea12e1e04317dc6d->enter($__internal_33e7bd07e10005eeb16cb3fa3246bab44d6a270edbfe48f9ea12e1e04317dc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0e461a39d768b243a042f5c4ff773c6602ba27061002368ebe6891fa9b2bd19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e461a39d768b243a042f5c4ff773c6602ba27061002368ebe6891fa9b2bd19e->enter($__internal_0e461a39d768b243a042f5c4ff773c6602ba27061002368ebe6891fa9b2bd19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e7bd07e10005eeb16cb3fa3246bab44d6a270edbfe48f9ea12e1e04317dc6d->leave($__internal_33e7bd07e10005eeb16cb3fa3246bab44d6a270edbfe48f9ea12e1e04317dc6d_prof);

        
        $__internal_0e461a39d768b243a042f5c4ff773c6602ba27061002368ebe6891fa9b2bd19e->leave($__internal_0e461a39d768b243a042f5c4ff773c6602ba27061002368ebe6891fa9b2bd19e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d397c48400fe358c5699cd55eed709c63cf155e172f9d9abe509b5c61bf192d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d397c48400fe358c5699cd55eed709c63cf155e172f9d9abe509b5c61bf192d5->enter($__internal_d397c48400fe358c5699cd55eed709c63cf155e172f9d9abe509b5c61bf192d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5544637ed9f9cdc73470aad12473b6cd8c0a8dfa26799283bc82118e164166b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5544637ed9f9cdc73470aad12473b6cd8c0a8dfa26799283bc82118e164166b4->enter($__internal_5544637ed9f9cdc73470aad12473b6cd8c0a8dfa26799283bc82118e164166b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5544637ed9f9cdc73470aad12473b6cd8c0a8dfa26799283bc82118e164166b4->leave($__internal_5544637ed9f9cdc73470aad12473b6cd8c0a8dfa26799283bc82118e164166b4_prof);

        
        $__internal_d397c48400fe358c5699cd55eed709c63cf155e172f9d9abe509b5c61bf192d5->leave($__internal_d397c48400fe358c5699cd55eed709c63cf155e172f9d9abe509b5c61bf192d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69c33882d51b0fcc711bbf304727ec336a94ec71d5467eaefd1093b3b9a203c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c33882d51b0fcc711bbf304727ec336a94ec71d5467eaefd1093b3b9a203c9->enter($__internal_69c33882d51b0fcc711bbf304727ec336a94ec71d5467eaefd1093b3b9a203c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec395b773422ab9ea3d0c946cbddff47f37de8971c90aa797036363d52d66ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec395b773422ab9ea3d0c946cbddff47f37de8971c90aa797036363d52d66ce7->enter($__internal_ec395b773422ab9ea3d0c946cbddff47f37de8971c90aa797036363d52d66ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec395b773422ab9ea3d0c946cbddff47f37de8971c90aa797036363d52d66ce7->leave($__internal_ec395b773422ab9ea3d0c946cbddff47f37de8971c90aa797036363d52d66ce7_prof);

        
        $__internal_69c33882d51b0fcc711bbf304727ec336a94ec71d5467eaefd1093b3b9a203c9->leave($__internal_69c33882d51b0fcc711bbf304727ec336a94ec71d5467eaefd1093b3b9a203c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83b280be0e57938d9ea0c8feec318bfd56c36ee0f9c4a0591b1b8c8224cbbeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b280be0e57938d9ea0c8feec318bfd56c36ee0f9c4a0591b1b8c8224cbbeb8->enter($__internal_83b280be0e57938d9ea0c8feec318bfd56c36ee0f9c4a0591b1b8c8224cbbeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e5f69cc49b4123e528193e6ea9a1f9eb0b6fbe8ecb189429d4cd4a7c43b9f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5f69cc49b4123e528193e6ea9a1f9eb0b6fbe8ecb189429d4cd4a7c43b9f5b->enter($__internal_1e5f69cc49b4123e528193e6ea9a1f9eb0b6fbe8ecb189429d4cd4a7c43b9f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1e5f69cc49b4123e528193e6ea9a1f9eb0b6fbe8ecb189429d4cd4a7c43b9f5b->leave($__internal_1e5f69cc49b4123e528193e6ea9a1f9eb0b6fbe8ecb189429d4cd4a7c43b9f5b_prof);

        
        $__internal_83b280be0e57938d9ea0c8feec318bfd56c36ee0f9c4a0591b1b8c8224cbbeb8->leave($__internal_83b280be0e57938d9ea0c8feec318bfd56c36ee0f9c4a0591b1b8c8224cbbeb8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
