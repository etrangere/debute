<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_918329faaa3ec17cb733c4b140f8c4e5f379be5b4e31cf4f1c8e73e130edde24 extends Twig_Template
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
        $__internal_209d2e2bfea518be37aaef2702b5679ea48c373b3a4746cfb96c662a5a3a4643 = $this->env->getExtension("native_profiler");
        $__internal_209d2e2bfea518be37aaef2702b5679ea48c373b3a4746cfb96c662a5a3a4643->enter($__internal_209d2e2bfea518be37aaef2702b5679ea48c373b3a4746cfb96c662a5a3a4643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_209d2e2bfea518be37aaef2702b5679ea48c373b3a4746cfb96c662a5a3a4643->leave($__internal_209d2e2bfea518be37aaef2702b5679ea48c373b3a4746cfb96c662a5a3a4643_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
