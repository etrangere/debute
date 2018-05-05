<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08246d6fc50b9cb2f66a1e754433bcd9d9ae852716012dcf2b11d6975c1c9907 extends Twig_Template
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
        $__internal_7833aa929ebfa0469ed36b6a1645f3e5cf147f692f55ccddd161a974f1efd9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7833aa929ebfa0469ed36b6a1645f3e5cf147f692f55ccddd161a974f1efd9fb->enter($__internal_7833aa929ebfa0469ed36b6a1645f3e5cf147f692f55ccddd161a974f1efd9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3f589a72c33814ddd2b17063ebbc50fc002f2cd8ea8578da08ffbc2c929addd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f589a72c33814ddd2b17063ebbc50fc002f2cd8ea8578da08ffbc2c929addd7->enter($__internal_3f589a72c33814ddd2b17063ebbc50fc002f2cd8ea8578da08ffbc2c929addd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7833aa929ebfa0469ed36b6a1645f3e5cf147f692f55ccddd161a974f1efd9fb->leave($__internal_7833aa929ebfa0469ed36b6a1645f3e5cf147f692f55ccddd161a974f1efd9fb_prof);

        
        $__internal_3f589a72c33814ddd2b17063ebbc50fc002f2cd8ea8578da08ffbc2c929addd7->leave($__internal_3f589a72c33814ddd2b17063ebbc50fc002f2cd8ea8578da08ffbc2c929addd7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
