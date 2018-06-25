<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_90f3c244ed20d5675c3f6bc6b09911358d75334497e6de68620a6feb2c15dee3 extends Twig_Template
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
        $__internal_5bec5db2a9441b004466b0070111eb0f45924978ca7c9519a023d37f720d2bca = $this->env->getExtension("native_profiler");
        $__internal_5bec5db2a9441b004466b0070111eb0f45924978ca7c9519a023d37f720d2bca->enter($__internal_5bec5db2a9441b004466b0070111eb0f45924978ca7c9519a023d37f720d2bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5bec5db2a9441b004466b0070111eb0f45924978ca7c9519a023d37f720d2bca->leave($__internal_5bec5db2a9441b004466b0070111eb0f45924978ca7c9519a023d37f720d2bca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
