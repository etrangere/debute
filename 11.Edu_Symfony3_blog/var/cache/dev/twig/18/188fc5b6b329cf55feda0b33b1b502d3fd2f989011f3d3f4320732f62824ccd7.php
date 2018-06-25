<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_90686b2efb96e3467d8e19a79cbf81570bc362ada12aaf2a76c8f4a05600f2eb extends Twig_Template
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
        $__internal_b898d245deaf33b6e5602aedfab349508fed52194ddc5cd4299dc42ed888f8da = $this->env->getExtension("native_profiler");
        $__internal_b898d245deaf33b6e5602aedfab349508fed52194ddc5cd4299dc42ed888f8da->enter($__internal_b898d245deaf33b6e5602aedfab349508fed52194ddc5cd4299dc42ed888f8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b898d245deaf33b6e5602aedfab349508fed52194ddc5cd4299dc42ed888f8da->leave($__internal_b898d245deaf33b6e5602aedfab349508fed52194ddc5cd4299dc42ed888f8da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
