<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e718221981cec3324fb973c15cc4dc8695cf93fd59e996febf13d6da53a4adcb extends Twig_Template
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
        $__internal_eea26766cbefbd1b22bc64d161edd9ac9c9009243b6a03af0110160af7598eb3 = $this->env->getExtension("native_profiler");
        $__internal_eea26766cbefbd1b22bc64d161edd9ac9c9009243b6a03af0110160af7598eb3->enter($__internal_eea26766cbefbd1b22bc64d161edd9ac9c9009243b6a03af0110160af7598eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eea26766cbefbd1b22bc64d161edd9ac9c9009243b6a03af0110160af7598eb3->leave($__internal_eea26766cbefbd1b22bc64d161edd9ac9c9009243b6a03af0110160af7598eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
