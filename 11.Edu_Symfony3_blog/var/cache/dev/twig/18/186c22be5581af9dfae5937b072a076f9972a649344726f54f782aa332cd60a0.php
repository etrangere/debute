<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_436beb6a79155951176afdcbe2d31970e2f694b6cd1c752379cbb12083e60236 extends Twig_Template
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
        $__internal_b170c8028ab04a66c3e2b61ef8e7725247fc7cedc14970b87cead91585ac9aeb = $this->env->getExtension("native_profiler");
        $__internal_b170c8028ab04a66c3e2b61ef8e7725247fc7cedc14970b87cead91585ac9aeb->enter($__internal_b170c8028ab04a66c3e2b61ef8e7725247fc7cedc14970b87cead91585ac9aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b170c8028ab04a66c3e2b61ef8e7725247fc7cedc14970b87cead91585ac9aeb->leave($__internal_b170c8028ab04a66c3e2b61ef8e7725247fc7cedc14970b87cead91585ac9aeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
