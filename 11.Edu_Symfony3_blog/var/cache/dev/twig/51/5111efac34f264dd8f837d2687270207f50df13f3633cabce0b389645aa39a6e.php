<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_48b91f925ec499242703ef0aa4e016703949612bfdf9a7e53ac408d088e34154 extends Twig_Template
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
        $__internal_aaae8ff8510e7c3d227b704b2a6c445633c335c8c2ad20859b3e73c738ff0c2f = $this->env->getExtension("native_profiler");
        $__internal_aaae8ff8510e7c3d227b704b2a6c445633c335c8c2ad20859b3e73c738ff0c2f->enter($__internal_aaae8ff8510e7c3d227b704b2a6c445633c335c8c2ad20859b3e73c738ff0c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_aaae8ff8510e7c3d227b704b2a6c445633c335c8c2ad20859b3e73c738ff0c2f->leave($__internal_aaae8ff8510e7c3d227b704b2a6c445633c335c8c2ad20859b3e73c738ff0c2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
