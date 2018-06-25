<?php

/* :main:homepage.html.twig */
class __TwigTemplate_b2086f2f297e131ef77d4f2d8594a4e1ed51c951139929b5e094d9ed2cec06fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
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
        $__internal_e01610e240a381a4c1f6c4c9f46024a6a4192fc5ff1a87bf178923cab481abbb = $this->env->getExtension("native_profiler");
        $__internal_e01610e240a381a4c1f6c4c9f46024a6a4192fc5ff1a87bf178923cab481abbb->enter($__internal_e01610e240a381a4c1f6c4c9f46024a6a4192fc5ff1a87bf178923cab481abbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e01610e240a381a4c1f6c4c9f46024a6a4192fc5ff1a87bf178923cab481abbb->leave($__internal_e01610e240a381a4c1f6c4c9f46024a6a4192fc5ff1a87bf178923cab481abbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04422597a4cd286aa9bf753ac664b9ed9053370d4705803317431c96cdb8c79 = $this->env->getExtension("native_profiler");
        $__internal_c04422597a4cd286aa9bf753ac664b9ed9053370d4705803317431c96cdb8c79->enter($__internal_c04422597a4cd286aa9bf753ac664b9ed9053370d4705803317431c96cdb8c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_c04422597a4cd286aa9bf753ac664b9ed9053370d4705803317431c96cdb8c79->leave($__internal_c04422597a4cd286aa9bf753ac664b9ed9053370d4705803317431c96cdb8c79_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
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
