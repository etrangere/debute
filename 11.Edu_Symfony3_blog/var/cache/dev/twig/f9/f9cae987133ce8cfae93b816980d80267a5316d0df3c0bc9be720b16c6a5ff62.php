<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_439f08336241babeb546f9f156534501c54e0deec19f7988b89f3cbdecdbdb05 extends Twig_Template
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
        $__internal_b9b4fcf5c563a5094321090d7a181bad8efb8e938f155509ebe440c52324d00b = $this->env->getExtension("native_profiler");
        $__internal_b9b4fcf5c563a5094321090d7a181bad8efb8e938f155509ebe440c52324d00b->enter($__internal_b9b4fcf5c563a5094321090d7a181bad8efb8e938f155509ebe440c52324d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b9b4fcf5c563a5094321090d7a181bad8efb8e938f155509ebe440c52324d00b->leave($__internal_b9b4fcf5c563a5094321090d7a181bad8efb8e938f155509ebe440c52324d00b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
