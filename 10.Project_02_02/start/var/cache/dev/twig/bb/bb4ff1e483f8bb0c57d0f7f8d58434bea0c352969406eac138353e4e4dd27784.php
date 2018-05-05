<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_60081cb057b2ed8093ab5ebf7604e0278b3ffc887a41d905a34ed540c135f81c extends Twig_Template
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
        $__internal_7d01f0618ea28076006303209cedd1ec52846f7188a56e63f11462ecec8739c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d01f0618ea28076006303209cedd1ec52846f7188a56e63f11462ecec8739c3->enter($__internal_7d01f0618ea28076006303209cedd1ec52846f7188a56e63f11462ecec8739c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_51ebe18b5f172bfab85149032428a857c0fc4147dbf01bda0090bcf5821b6bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ebe18b5f172bfab85149032428a857c0fc4147dbf01bda0090bcf5821b6bca->enter($__internal_51ebe18b5f172bfab85149032428a857c0fc4147dbf01bda0090bcf5821b6bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d01f0618ea28076006303209cedd1ec52846f7188a56e63f11462ecec8739c3->leave($__internal_7d01f0618ea28076006303209cedd1ec52846f7188a56e63f11462ecec8739c3_prof);

        
        $__internal_51ebe18b5f172bfab85149032428a857c0fc4147dbf01bda0090bcf5821b6bca->leave($__internal_51ebe18b5f172bfab85149032428a857c0fc4147dbf01bda0090bcf5821b6bca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a47b918223b8f1652f34d382b0b6f899b4a1e4d32e427ae7e489df0daea2219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a47b918223b8f1652f34d382b0b6f899b4a1e4d32e427ae7e489df0daea2219->enter($__internal_4a47b918223b8f1652f34d382b0b6f899b4a1e4d32e427ae7e489df0daea2219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d26d40c025835ca7f5bb385dc6848e92cd1a3af600b00cae18ec100ea4d85879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26d40c025835ca7f5bb385dc6848e92cd1a3af600b00cae18ec100ea4d85879->enter($__internal_d26d40c025835ca7f5bb385dc6848e92cd1a3af600b00cae18ec100ea4d85879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d26d40c025835ca7f5bb385dc6848e92cd1a3af600b00cae18ec100ea4d85879->leave($__internal_d26d40c025835ca7f5bb385dc6848e92cd1a3af600b00cae18ec100ea4d85879_prof);

        
        $__internal_4a47b918223b8f1652f34d382b0b6f899b4a1e4d32e427ae7e489df0daea2219->leave($__internal_4a47b918223b8f1652f34d382b0b6f899b4a1e4d32e427ae7e489df0daea2219_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18dc1cd44f73a9fcc894966d1b2ea17a1beece4b5ea0f834d09d6822794491c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dc1cd44f73a9fcc894966d1b2ea17a1beece4b5ea0f834d09d6822794491c7->enter($__internal_18dc1cd44f73a9fcc894966d1b2ea17a1beece4b5ea0f834d09d6822794491c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3f8220f6a01120346f460ddbff7b552593d2fadadc30c83671033d5de5fc9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f8220f6a01120346f460ddbff7b552593d2fadadc30c83671033d5de5fc9c8->enter($__internal_d3f8220f6a01120346f460ddbff7b552593d2fadadc30c83671033d5de5fc9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d3f8220f6a01120346f460ddbff7b552593d2fadadc30c83671033d5de5fc9c8->leave($__internal_d3f8220f6a01120346f460ddbff7b552593d2fadadc30c83671033d5de5fc9c8_prof);

        
        $__internal_18dc1cd44f73a9fcc894966d1b2ea17a1beece4b5ea0f834d09d6822794491c7->leave($__internal_18dc1cd44f73a9fcc894966d1b2ea17a1beece4b5ea0f834d09d6822794491c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b55a58e9223f39f871b750968f0186ca3e419b7a66e7217c842ac7204a6f090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b55a58e9223f39f871b750968f0186ca3e419b7a66e7217c842ac7204a6f090->enter($__internal_8b55a58e9223f39f871b750968f0186ca3e419b7a66e7217c842ac7204a6f090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_857760e79ca184d406d34e214a61046a863f14561bec3775d959d7b9259cb762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857760e79ca184d406d34e214a61046a863f14561bec3775d959d7b9259cb762->enter($__internal_857760e79ca184d406d34e214a61046a863f14561bec3775d959d7b9259cb762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_857760e79ca184d406d34e214a61046a863f14561bec3775d959d7b9259cb762->leave($__internal_857760e79ca184d406d34e214a61046a863f14561bec3775d959d7b9259cb762_prof);

        
        $__internal_8b55a58e9223f39f871b750968f0186ca3e419b7a66e7217c842ac7204a6f090->leave($__internal_8b55a58e9223f39f871b750968f0186ca3e419b7a66e7217c842ac7204a6f090_prof);

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
