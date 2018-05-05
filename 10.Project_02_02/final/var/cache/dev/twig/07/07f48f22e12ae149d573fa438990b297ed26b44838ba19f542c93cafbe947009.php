<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6c2a44b87bf9f49fbc0b4be3750016bd380ada46eef127a512ee3808f984a286 extends Twig_Template
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
        $__internal_ee39c67a16be1b375494dc452f3443d968aedda2b225555b3499c5798e4c2dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee39c67a16be1b375494dc452f3443d968aedda2b225555b3499c5798e4c2dfe->enter($__internal_ee39c67a16be1b375494dc452f3443d968aedda2b225555b3499c5798e4c2dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_ce85139529e953d4150a3b0459bf02517b638ecacf8c16f3bc0ffc924cdb2bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce85139529e953d4150a3b0459bf02517b638ecacf8c16f3bc0ffc924cdb2bdd->enter($__internal_ce85139529e953d4150a3b0459bf02517b638ecacf8c16f3bc0ffc924cdb2bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ee39c67a16be1b375494dc452f3443d968aedda2b225555b3499c5798e4c2dfe->leave($__internal_ee39c67a16be1b375494dc452f3443d968aedda2b225555b3499c5798e4c2dfe_prof);

        
        $__internal_ce85139529e953d4150a3b0459bf02517b638ecacf8c16f3bc0ffc924cdb2bdd->leave($__internal_ce85139529e953d4150a3b0459bf02517b638ecacf8c16f3bc0ffc924cdb2bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
