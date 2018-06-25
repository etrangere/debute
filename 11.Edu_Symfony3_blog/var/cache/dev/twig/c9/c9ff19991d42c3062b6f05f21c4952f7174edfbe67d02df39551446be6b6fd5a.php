<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d259800c12e582273981096c9f32297daa9bf07c881a07810ea6ff3329afa01 extends Twig_Template
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
        $__internal_144c9acc6d147a3057c6676fa9e51a969427633357b8027430e2c2446cfc08fc = $this->env->getExtension("native_profiler");
        $__internal_144c9acc6d147a3057c6676fa9e51a969427633357b8027430e2c2446cfc08fc->enter($__internal_144c9acc6d147a3057c6676fa9e51a969427633357b8027430e2c2446cfc08fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_144c9acc6d147a3057c6676fa9e51a969427633357b8027430e2c2446cfc08fc->leave($__internal_144c9acc6d147a3057c6676fa9e51a969427633357b8027430e2c2446cfc08fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
