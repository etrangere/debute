<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_65001d6d5b88e0fb12e89300307e6345dd7052e21a4a28760e46ebd09c750aa4 extends Twig_Template
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
        $__internal_2aea8c601a7f0adb12771b58339248fee5b16ea31c28050589faa9427b232e25 = $this->env->getExtension("native_profiler");
        $__internal_2aea8c601a7f0adb12771b58339248fee5b16ea31c28050589faa9427b232e25->enter($__internal_2aea8c601a7f0adb12771b58339248fee5b16ea31c28050589faa9427b232e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2aea8c601a7f0adb12771b58339248fee5b16ea31c28050589faa9427b232e25->leave($__internal_2aea8c601a7f0adb12771b58339248fee5b16ea31c28050589faa9427b232e25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
