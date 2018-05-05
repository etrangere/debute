<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7520bb00f85a0bd1fa59d83bed68e2e691b654e3827346d605711b41db91df85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319f1393b2e086029a2271413fc45fe861338abf8887c2078f70936ee5faa56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319f1393b2e086029a2271413fc45fe861338abf8887c2078f70936ee5faa56b->enter($__internal_319f1393b2e086029a2271413fc45fe861338abf8887c2078f70936ee5faa56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_9c8c23399b9576f69cdbb52ea9c7031c3e2744f2c4f41562c25b74bacbe4b9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8c23399b9576f69cdbb52ea9c7031c3e2744f2c4f41562c25b74bacbe4b9af->enter($__internal_9c8c23399b9576f69cdbb52ea9c7031c3e2744f2c4f41562c25b74bacbe4b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_319f1393b2e086029a2271413fc45fe861338abf8887c2078f70936ee5faa56b->leave($__internal_319f1393b2e086029a2271413fc45fe861338abf8887c2078f70936ee5faa56b_prof);

        
        $__internal_9c8c23399b9576f69cdbb52ea9c7031c3e2744f2c4f41562c25b74bacbe4b9af->leave($__internal_9c8c23399b9576f69cdbb52ea9c7031c3e2744f2c4f41562c25b74bacbe4b9af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
