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
        $__internal_497fe0760f7d81f15cfcda60e1a5d2107988773bec0daf63014f44b9fd65a757 = $this->env->getExtension("native_profiler");
        $__internal_497fe0760f7d81f15cfcda60e1a5d2107988773bec0daf63014f44b9fd65a757->enter($__internal_497fe0760f7d81f15cfcda60e1a5d2107988773bec0daf63014f44b9fd65a757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497fe0760f7d81f15cfcda60e1a5d2107988773bec0daf63014f44b9fd65a757->leave($__internal_497fe0760f7d81f15cfcda60e1a5d2107988773bec0daf63014f44b9fd65a757_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47226e9d1f9da19739436221ecb5f6640a84e8190c22345fe09b7d0f73fd473c = $this->env->getExtension("native_profiler");
        $__internal_47226e9d1f9da19739436221ecb5f6640a84e8190c22345fe09b7d0f73fd473c->enter($__internal_47226e9d1f9da19739436221ecb5f6640a84e8190c22345fe09b7d0f73fd473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47226e9d1f9da19739436221ecb5f6640a84e8190c22345fe09b7d0f73fd473c->leave($__internal_47226e9d1f9da19739436221ecb5f6640a84e8190c22345fe09b7d0f73fd473c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0242e304fd4c957d81e81ff29fbb06caadf974cba9f42e657fc2c832f77591fc = $this->env->getExtension("native_profiler");
        $__internal_0242e304fd4c957d81e81ff29fbb06caadf974cba9f42e657fc2c832f77591fc->enter($__internal_0242e304fd4c957d81e81ff29fbb06caadf974cba9f42e657fc2c832f77591fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0242e304fd4c957d81e81ff29fbb06caadf974cba9f42e657fc2c832f77591fc->leave($__internal_0242e304fd4c957d81e81ff29fbb06caadf974cba9f42e657fc2c832f77591fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2122ab1e27ec3689a404e1aaefd0e826ca73ce90e2dd07cbf6697f960e34b090 = $this->env->getExtension("native_profiler");
        $__internal_2122ab1e27ec3689a404e1aaefd0e826ca73ce90e2dd07cbf6697f960e34b090->enter($__internal_2122ab1e27ec3689a404e1aaefd0e826ca73ce90e2dd07cbf6697f960e34b090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2122ab1e27ec3689a404e1aaefd0e826ca73ce90e2dd07cbf6697f960e34b090->leave($__internal_2122ab1e27ec3689a404e1aaefd0e826ca73ce90e2dd07cbf6697f960e34b090_prof);

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
