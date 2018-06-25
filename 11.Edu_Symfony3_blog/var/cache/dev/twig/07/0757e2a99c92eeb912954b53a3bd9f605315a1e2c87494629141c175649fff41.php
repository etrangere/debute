<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d4f283e7dc6f80a3ac8b9a1b456e17688a1501eb78641f21d7f103c785767ff6 extends Twig_Template
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
        $__internal_a07b3b6c373b8e801561910ef15a9eeb6360b39735b6f282aa5ed3b2ad8a3fd2 = $this->env->getExtension("native_profiler");
        $__internal_a07b3b6c373b8e801561910ef15a9eeb6360b39735b6f282aa5ed3b2ad8a3fd2->enter($__internal_a07b3b6c373b8e801561910ef15a9eeb6360b39735b6f282aa5ed3b2ad8a3fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a07b3b6c373b8e801561910ef15a9eeb6360b39735b6f282aa5ed3b2ad8a3fd2->leave($__internal_a07b3b6c373b8e801561910ef15a9eeb6360b39735b6f282aa5ed3b2ad8a3fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
