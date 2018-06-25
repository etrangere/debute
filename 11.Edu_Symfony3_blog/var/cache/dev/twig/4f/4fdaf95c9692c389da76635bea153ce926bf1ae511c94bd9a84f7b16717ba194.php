<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a5b743bfcec2d7e307dcc1a372484cab3f220d7444a2ff41348b1e6c73c46e38 extends Twig_Template
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
        $__internal_d06be69adf60a52690362655333710a9de7022bb2a23464fec6996d32460f590 = $this->env->getExtension("native_profiler");
        $__internal_d06be69adf60a52690362655333710a9de7022bb2a23464fec6996d32460f590->enter($__internal_d06be69adf60a52690362655333710a9de7022bb2a23464fec6996d32460f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d06be69adf60a52690362655333710a9de7022bb2a23464fec6996d32460f590->leave($__internal_d06be69adf60a52690362655333710a9de7022bb2a23464fec6996d32460f590_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
