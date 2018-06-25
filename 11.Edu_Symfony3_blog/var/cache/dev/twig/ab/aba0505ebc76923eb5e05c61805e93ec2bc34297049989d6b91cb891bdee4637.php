<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3357afd3f5958d351a17281940f1f2ad264dea5fe50328e9da318e163c9c857d extends Twig_Template
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
        $__internal_a61fca6cb8cff8f701ae3439c8abd111f0f20646786f36241bb92a5130795639 = $this->env->getExtension("native_profiler");
        $__internal_a61fca6cb8cff8f701ae3439c8abd111f0f20646786f36241bb92a5130795639->enter($__internal_a61fca6cb8cff8f701ae3439c8abd111f0f20646786f36241bb92a5130795639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a61fca6cb8cff8f701ae3439c8abd111f0f20646786f36241bb92a5130795639->leave($__internal_a61fca6cb8cff8f701ae3439c8abd111f0f20646786f36241bb92a5130795639_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
