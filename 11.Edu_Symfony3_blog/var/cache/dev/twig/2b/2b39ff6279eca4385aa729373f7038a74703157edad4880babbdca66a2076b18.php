<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca2999ca9a2c1bbf1b07ac4feb1336e8ff78b2a8e5569bf2b4c4c9a99218221e extends Twig_Template
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
        $__internal_88c85c55aa1f96a7dd238fb177e2091fcb3744001e87c13c3bff75de2c40d80d = $this->env->getExtension("native_profiler");
        $__internal_88c85c55aa1f96a7dd238fb177e2091fcb3744001e87c13c3bff75de2c40d80d->enter($__internal_88c85c55aa1f96a7dd238fb177e2091fcb3744001e87c13c3bff75de2c40d80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_88c85c55aa1f96a7dd238fb177e2091fcb3744001e87c13c3bff75de2c40d80d->leave($__internal_88c85c55aa1f96a7dd238fb177e2091fcb3744001e87c13c3bff75de2c40d80d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
