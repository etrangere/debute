<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3f7d66bc5f021989a9afb3a9bf4063ec6eac85d37c218402f697aa6826feade3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6c65dd554008d0cf31154ad7e707f3bea6780d9df4bef2b8aa3fdb4f5936ea1 = $this->env->getExtension("native_profiler");
        $__internal_b6c65dd554008d0cf31154ad7e707f3bea6780d9df4bef2b8aa3fdb4f5936ea1->enter($__internal_b6c65dd554008d0cf31154ad7e707f3bea6780d9df4bef2b8aa3fdb4f5936ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6c65dd554008d0cf31154ad7e707f3bea6780d9df4bef2b8aa3fdb4f5936ea1->leave($__internal_b6c65dd554008d0cf31154ad7e707f3bea6780d9df4bef2b8aa3fdb4f5936ea1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a24ac9dae0088af624ab02153000a9c22218c438faf945cd4c277edb79a328a2 = $this->env->getExtension("native_profiler");
        $__internal_a24ac9dae0088af624ab02153000a9c22218c438faf945cd4c277edb79a328a2->enter($__internal_a24ac9dae0088af624ab02153000a9c22218c438faf945cd4c277edb79a328a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a24ac9dae0088af624ab02153000a9c22218c438faf945cd4c277edb79a328a2->leave($__internal_a24ac9dae0088af624ab02153000a9c22218c438faf945cd4c277edb79a328a2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
