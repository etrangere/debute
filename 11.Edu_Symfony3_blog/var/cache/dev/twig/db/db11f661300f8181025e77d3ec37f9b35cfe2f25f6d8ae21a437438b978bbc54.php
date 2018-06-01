<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b1a39a2dcb421a2f76afae2395ba1287e787a7fd8310ef7582e1df7328ca0e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_14d583b26a613926c8fc04cc700d92d774b91c61a1fa9f4c73729fe92422af8a = $this->env->getExtension("native_profiler");
        $__internal_14d583b26a613926c8fc04cc700d92d774b91c61a1fa9f4c73729fe92422af8a->enter($__internal_14d583b26a613926c8fc04cc700d92d774b91c61a1fa9f4c73729fe92422af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d583b26a613926c8fc04cc700d92d774b91c61a1fa9f4c73729fe92422af8a->leave($__internal_14d583b26a613926c8fc04cc700d92d774b91c61a1fa9f4c73729fe92422af8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98def8c2c955dd8710e287d4e396545a325276b5bf53658a374db70755a8ec24 = $this->env->getExtension("native_profiler");
        $__internal_98def8c2c955dd8710e287d4e396545a325276b5bf53658a374db70755a8ec24->enter($__internal_98def8c2c955dd8710e287d4e396545a325276b5bf53658a374db70755a8ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98def8c2c955dd8710e287d4e396545a325276b5bf53658a374db70755a8ec24->leave($__internal_98def8c2c955dd8710e287d4e396545a325276b5bf53658a374db70755a8ec24_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d250cf90c57eefb4066492c00d3e6ffcdc00c2c4ee00cd82b0ae187bdaf51f54 = $this->env->getExtension("native_profiler");
        $__internal_d250cf90c57eefb4066492c00d3e6ffcdc00c2c4ee00cd82b0ae187bdaf51f54->enter($__internal_d250cf90c57eefb4066492c00d3e6ffcdc00c2c4ee00cd82b0ae187bdaf51f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d250cf90c57eefb4066492c00d3e6ffcdc00c2c4ee00cd82b0ae187bdaf51f54->leave($__internal_d250cf90c57eefb4066492c00d3e6ffcdc00c2c4ee00cd82b0ae187bdaf51f54_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12200d72af6997b105f111fa7abec4611afcd22f8d52db2c98748947b5e0f7bf = $this->env->getExtension("native_profiler");
        $__internal_12200d72af6997b105f111fa7abec4611afcd22f8d52db2c98748947b5e0f7bf->enter($__internal_12200d72af6997b105f111fa7abec4611afcd22f8d52db2c98748947b5e0f7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_12200d72af6997b105f111fa7abec4611afcd22f8d52db2c98748947b5e0f7bf->leave($__internal_12200d72af6997b105f111fa7abec4611afcd22f8d52db2c98748947b5e0f7bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
