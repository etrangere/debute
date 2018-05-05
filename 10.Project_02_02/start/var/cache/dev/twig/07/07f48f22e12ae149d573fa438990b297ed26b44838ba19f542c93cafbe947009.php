<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6c2a44b87bf9f49fbc0b4be3750016bd380ada46eef127a512ee3808f984a286 extends Twig_Template
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
        $__internal_143670a125ff0468a905dac8003e0190959393210e8831837c75789ddb601911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143670a125ff0468a905dac8003e0190959393210e8831837c75789ddb601911->enter($__internal_143670a125ff0468a905dac8003e0190959393210e8831837c75789ddb601911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_92d727c58e881c8a413991d337d13833a92a2ceeb3d9d22c37ff0c9f0c320d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d727c58e881c8a413991d337d13833a92a2ceeb3d9d22c37ff0c9f0c320d4d->enter($__internal_92d727c58e881c8a413991d337d13833a92a2ceeb3d9d22c37ff0c9f0c320d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_143670a125ff0468a905dac8003e0190959393210e8831837c75789ddb601911->leave($__internal_143670a125ff0468a905dac8003e0190959393210e8831837c75789ddb601911_prof);

        
        $__internal_92d727c58e881c8a413991d337d13833a92a2ceeb3d9d22c37ff0c9f0c320d4d->leave($__internal_92d727c58e881c8a413991d337d13833a92a2ceeb3d9d22c37ff0c9f0c320d4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
