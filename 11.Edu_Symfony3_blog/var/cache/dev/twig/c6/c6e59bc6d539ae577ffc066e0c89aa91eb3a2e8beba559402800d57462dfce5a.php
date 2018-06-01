<?php

/* main/homepage.html.twig */
class __TwigTemplate_b2086f2f297e131ef77d4f2d8594a4e1ed51c951139929b5e094d9ed2cec06fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f540cccdf057817ce32d5d50cc7576dd48325f416bd23f89708689ccd6d9c82 = $this->env->getExtension("native_profiler");
        $__internal_0f540cccdf057817ce32d5d50cc7576dd48325f416bd23f89708689ccd6d9c82->enter($__internal_0f540cccdf057817ce32d5d50cc7576dd48325f416bd23f89708689ccd6d9c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f540cccdf057817ce32d5d50cc7576dd48325f416bd23f89708689ccd6d9c82->leave($__internal_0f540cccdf057817ce32d5d50cc7576dd48325f416bd23f89708689ccd6d9c82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76d2711b6f16454c83b794e1f8cd6e2c10b8f2bd75c34fc1c687235a3f30a3f8 = $this->env->getExtension("native_profiler");
        $__internal_76d2711b6f16454c83b794e1f8cd6e2c10b8f2bd75c34fc1c687235a3f30a3f8->enter($__internal_76d2711b6f16454c83b794e1f8cd6e2c10b8f2bd75c34fc1c687235a3f30a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_76d2711b6f16454c83b794e1f8cd6e2c10b8f2bd75c34fc1c687235a3f30a3f8->leave($__internal_76d2711b6f16454c83b794e1f8cd6e2c10b8f2bd75c34fc1c687235a3f30a3f8_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
