<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_df2786f7d4cb9646ab039e3659e9cd1c1a57ad33e2fa5bcc0f6654fcaeff2edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2786f7d4cb9646ab039e3659e9cd1c1a57ad33e2fa5bcc0f6654fcaeff2edc->enter($__internal_df2786f7d4cb9646ab039e3659e9cd1c1a57ad33e2fa5bcc0f6654fcaeff2edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4001bba6f2b09f2d4def2a976b5ffa03e769b486bdc97da6dc9219d8eb7f68a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4001bba6f2b09f2d4def2a976b5ffa03e769b486bdc97da6dc9219d8eb7f68a8->enter($__internal_4001bba6f2b09f2d4def2a976b5ffa03e769b486bdc97da6dc9219d8eb7f68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_df2786f7d4cb9646ab039e3659e9cd1c1a57ad33e2fa5bcc0f6654fcaeff2edc->leave($__internal_df2786f7d4cb9646ab039e3659e9cd1c1a57ad33e2fa5bcc0f6654fcaeff2edc_prof);

        
        $__internal_4001bba6f2b09f2d4def2a976b5ffa03e769b486bdc97da6dc9219d8eb7f68a8->leave($__internal_4001bba6f2b09f2d4def2a976b5ffa03e769b486bdc97da6dc9219d8eb7f68a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
