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
        $__internal_903aab7ca82abf67cb503ac54d4fb6b8ca2b6ded7432a0e57b0817265573131c = $this->env->getExtension("native_profiler");
        $__internal_903aab7ca82abf67cb503ac54d4fb6b8ca2b6ded7432a0e57b0817265573131c->enter($__internal_903aab7ca82abf67cb503ac54d4fb6b8ca2b6ded7432a0e57b0817265573131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_903aab7ca82abf67cb503ac54d4fb6b8ca2b6ded7432a0e57b0817265573131c->leave($__internal_903aab7ca82abf67cb503ac54d4fb6b8ca2b6ded7432a0e57b0817265573131c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47e13755ed73e159c724a9e749056960c3e0614c6b7c5ea4c375bfb6b61dae66 = $this->env->getExtension("native_profiler");
        $__internal_47e13755ed73e159c724a9e749056960c3e0614c6b7c5ea4c375bfb6b61dae66->enter($__internal_47e13755ed73e159c724a9e749056960c3e0614c6b7c5ea4c375bfb6b61dae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47e13755ed73e159c724a9e749056960c3e0614c6b7c5ea4c375bfb6b61dae66->leave($__internal_47e13755ed73e159c724a9e749056960c3e0614c6b7c5ea4c375bfb6b61dae66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa14a1dbc0e48539273003fc711809c5e36f390439bf9841fbd230869e2a8098 = $this->env->getExtension("native_profiler");
        $__internal_fa14a1dbc0e48539273003fc711809c5e36f390439bf9841fbd230869e2a8098->enter($__internal_fa14a1dbc0e48539273003fc711809c5e36f390439bf9841fbd230869e2a8098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa14a1dbc0e48539273003fc711809c5e36f390439bf9841fbd230869e2a8098->leave($__internal_fa14a1dbc0e48539273003fc711809c5e36f390439bf9841fbd230869e2a8098_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78110a038ac871473d0b830b0a165de5de0548200c997f3912a59388f65c9c8d = $this->env->getExtension("native_profiler");
        $__internal_78110a038ac871473d0b830b0a165de5de0548200c997f3912a59388f65c9c8d->enter($__internal_78110a038ac871473d0b830b0a165de5de0548200c997f3912a59388f65c9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78110a038ac871473d0b830b0a165de5de0548200c997f3912a59388f65c9c8d->leave($__internal_78110a038ac871473d0b830b0a165de5de0548200c997f3912a59388f65c9c8d_prof);

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
