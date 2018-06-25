<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4cd1b63528d733074247d1f0d2423e416b72d1c0c207961c5f190b0800ec8543 extends Twig_Template
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
        $__internal_62dafdd1a3986a83a4fadb8407e84fa252ff905ba192a9bcd1f1ada85fdc7b5c = $this->env->getExtension("native_profiler");
        $__internal_62dafdd1a3986a83a4fadb8407e84fa252ff905ba192a9bcd1f1ada85fdc7b5c->enter($__internal_62dafdd1a3986a83a4fadb8407e84fa252ff905ba192a9bcd1f1ada85fdc7b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_62dafdd1a3986a83a4fadb8407e84fa252ff905ba192a9bcd1f1ada85fdc7b5c->leave($__internal_62dafdd1a3986a83a4fadb8407e84fa252ff905ba192a9bcd1f1ada85fdc7b5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
