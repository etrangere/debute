<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_08fc253a0869ca414a1e3458afcfe0d960aaeaae396f68e22639486b9a288736 extends Twig_Template
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
        $__internal_434b840411179fe3c7ed5dc73d8589eb08a0a401c7c419ad125c3154234a70d4 = $this->env->getExtension("native_profiler");
        $__internal_434b840411179fe3c7ed5dc73d8589eb08a0a401c7c419ad125c3154234a70d4->enter($__internal_434b840411179fe3c7ed5dc73d8589eb08a0a401c7c419ad125c3154234a70d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_434b840411179fe3c7ed5dc73d8589eb08a0a401c7c419ad125c3154234a70d4->leave($__internal_434b840411179fe3c7ed5dc73d8589eb08a0a401c7c419ad125c3154234a70d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
