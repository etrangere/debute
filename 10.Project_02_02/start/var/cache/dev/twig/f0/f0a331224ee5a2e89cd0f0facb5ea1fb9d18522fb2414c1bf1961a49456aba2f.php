<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f5721b73d031d1a4d5db77899f96c91ff2006370af1b6bed411be2f33c8a2720 extends Twig_Template
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
        $__internal_a3f604f34e392926ab0d37c0db59d24a6c6e61e076520d2e8e3ae1ff9d63a7c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f604f34e392926ab0d37c0db59d24a6c6e61e076520d2e8e3ae1ff9d63a7c5->enter($__internal_a3f604f34e392926ab0d37c0db59d24a6c6e61e076520d2e8e3ae1ff9d63a7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_63348036b6c64619395d10875b07527bc955103c51a8d55e05be3520e0dd273c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63348036b6c64619395d10875b07527bc955103c51a8d55e05be3520e0dd273c->enter($__internal_63348036b6c64619395d10875b07527bc955103c51a8d55e05be3520e0dd273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a3f604f34e392926ab0d37c0db59d24a6c6e61e076520d2e8e3ae1ff9d63a7c5->leave($__internal_a3f604f34e392926ab0d37c0db59d24a6c6e61e076520d2e8e3ae1ff9d63a7c5_prof);

        
        $__internal_63348036b6c64619395d10875b07527bc955103c51a8d55e05be3520e0dd273c->leave($__internal_63348036b6c64619395d10875b07527bc955103c51a8d55e05be3520e0dd273c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
