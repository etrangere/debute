<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_35a83013a12faaa84ae41ffded28aee3b5e4c18fedf5183e23108823490f01d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf06f1adaabf73ddd9843d681a55a6622bda0488bfcf741f785477efed8af0c = $this->env->getExtension("native_profiler");
        $__internal_dbf06f1adaabf73ddd9843d681a55a6622bda0488bfcf741f785477efed8af0c->enter($__internal_dbf06f1adaabf73ddd9843d681a55a6622bda0488bfcf741f785477efed8af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf06f1adaabf73ddd9843d681a55a6622bda0488bfcf741f785477efed8af0c->leave($__internal_dbf06f1adaabf73ddd9843d681a55a6622bda0488bfcf741f785477efed8af0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1cbbe36fc3548994c234022cab92950d50469776a32ee5e1cb72ac8fe6743e80 = $this->env->getExtension("native_profiler");
        $__internal_1cbbe36fc3548994c234022cab92950d50469776a32ee5e1cb72ac8fe6743e80->enter($__internal_1cbbe36fc3548994c234022cab92950d50469776a32ee5e1cb72ac8fe6743e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1cbbe36fc3548994c234022cab92950d50469776a32ee5e1cb72ac8fe6743e80->leave($__internal_1cbbe36fc3548994c234022cab92950d50469776a32ee5e1cb72ac8fe6743e80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dea6108683a1a48cdf247a0550e21c126a754923ec7b69a34451df7160d2607 = $this->env->getExtension("native_profiler");
        $__internal_2dea6108683a1a48cdf247a0550e21c126a754923ec7b69a34451df7160d2607->enter($__internal_2dea6108683a1a48cdf247a0550e21c126a754923ec7b69a34451df7160d2607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dea6108683a1a48cdf247a0550e21c126a754923ec7b69a34451df7160d2607->leave($__internal_2dea6108683a1a48cdf247a0550e21c126a754923ec7b69a34451df7160d2607_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_516267730bfea7c8272dbca11e97892b289f05f8f5a21e786203614fea9cc133 = $this->env->getExtension("native_profiler");
        $__internal_516267730bfea7c8272dbca11e97892b289f05f8f5a21e786203614fea9cc133->enter($__internal_516267730bfea7c8272dbca11e97892b289f05f8f5a21e786203614fea9cc133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_516267730bfea7c8272dbca11e97892b289f05f8f5a21e786203614fea9cc133->leave($__internal_516267730bfea7c8272dbca11e97892b289f05f8f5a21e786203614fea9cc133_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
