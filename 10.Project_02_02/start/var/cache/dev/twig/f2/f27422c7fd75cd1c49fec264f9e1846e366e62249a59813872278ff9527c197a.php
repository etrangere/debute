<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_fe8050a2cbc9c395ed5994a58512bb40178dab386d86d6810aa8dad7bc83838a extends Twig_Template
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
        $__internal_2e3dea6f0f99bb46bcb34c50995ea7fe6d716a46cc7f88751dcedd7d4817770e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3dea6f0f99bb46bcb34c50995ea7fe6d716a46cc7f88751dcedd7d4817770e->enter($__internal_2e3dea6f0f99bb46bcb34c50995ea7fe6d716a46cc7f88751dcedd7d4817770e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a7e1670710a21fdad7a02ed481a087dcca1c4778a3b73b69a5f9a665dcb518d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e1670710a21fdad7a02ed481a087dcca1c4778a3b73b69a5f9a665dcb518d2->enter($__internal_a7e1670710a21fdad7a02ed481a087dcca1c4778a3b73b69a5f9a665dcb518d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2e3dea6f0f99bb46bcb34c50995ea7fe6d716a46cc7f88751dcedd7d4817770e->leave($__internal_2e3dea6f0f99bb46bcb34c50995ea7fe6d716a46cc7f88751dcedd7d4817770e_prof);

        
        $__internal_a7e1670710a21fdad7a02ed481a087dcca1c4778a3b73b69a5f9a665dcb518d2->leave($__internal_a7e1670710a21fdad7a02ed481a087dcca1c4778a3b73b69a5f9a665dcb518d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
