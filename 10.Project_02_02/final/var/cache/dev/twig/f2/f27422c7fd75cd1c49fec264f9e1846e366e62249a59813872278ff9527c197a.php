<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_fe8050a2cbc9c395ed5994a58512bb40178dab386d86d6810aa8dad7bc83838a extends Twig_Template
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
        $__internal_5155e9db5967248dc79a59f9752bc1c091971dbf50eeb40eada2ba4e97745dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5155e9db5967248dc79a59f9752bc1c091971dbf50eeb40eada2ba4e97745dfc->enter($__internal_5155e9db5967248dc79a59f9752bc1c091971dbf50eeb40eada2ba4e97745dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_08afb2ca82fe25c398a7415a52aa49e3f07b82193061465e2b9dcca85c756c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08afb2ca82fe25c398a7415a52aa49e3f07b82193061465e2b9dcca85c756c03->enter($__internal_08afb2ca82fe25c398a7415a52aa49e3f07b82193061465e2b9dcca85c756c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5155e9db5967248dc79a59f9752bc1c091971dbf50eeb40eada2ba4e97745dfc->leave($__internal_5155e9db5967248dc79a59f9752bc1c091971dbf50eeb40eada2ba4e97745dfc_prof);

        
        $__internal_08afb2ca82fe25c398a7415a52aa49e3f07b82193061465e2b9dcca85c756c03->leave($__internal_08afb2ca82fe25c398a7415a52aa49e3f07b82193061465e2b9dcca85c756c03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
