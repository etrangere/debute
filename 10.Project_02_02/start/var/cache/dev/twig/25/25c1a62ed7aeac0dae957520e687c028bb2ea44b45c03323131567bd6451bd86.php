<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08246d6fc50b9cb2f66a1e754433bcd9d9ae852716012dcf2b11d6975c1c9907 extends Twig_Template
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
        $__internal_3a83bfc8670d6c0380ef973b5a562638e763c6d0f0b7df070e19ace74f6ec9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a83bfc8670d6c0380ef973b5a562638e763c6d0f0b7df070e19ace74f6ec9be->enter($__internal_3a83bfc8670d6c0380ef973b5a562638e763c6d0f0b7df070e19ace74f6ec9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a53f62f6a96d659ad71c41b05c5105ba35999696708f38f0496442943e17de29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53f62f6a96d659ad71c41b05c5105ba35999696708f38f0496442943e17de29->enter($__internal_a53f62f6a96d659ad71c41b05c5105ba35999696708f38f0496442943e17de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3a83bfc8670d6c0380ef973b5a562638e763c6d0f0b7df070e19ace74f6ec9be->leave($__internal_3a83bfc8670d6c0380ef973b5a562638e763c6d0f0b7df070e19ace74f6ec9be_prof);

        
        $__internal_a53f62f6a96d659ad71c41b05c5105ba35999696708f38f0496442943e17de29->leave($__internal_a53f62f6a96d659ad71c41b05c5105ba35999696708f38f0496442943e17de29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
