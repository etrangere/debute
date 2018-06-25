<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ba19762f63a90e3389da54a43b0c925f0bdb3ddc874384fa1a04786c7abca3b9 extends Twig_Template
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
        $__internal_2928ef9cd12ebf3b1b61c0154393432bf0ea54a65024e1e9e900ca5a514ad104 = $this->env->getExtension("native_profiler");
        $__internal_2928ef9cd12ebf3b1b61c0154393432bf0ea54a65024e1e9e900ca5a514ad104->enter($__internal_2928ef9cd12ebf3b1b61c0154393432bf0ea54a65024e1e9e900ca5a514ad104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2928ef9cd12ebf3b1b61c0154393432bf0ea54a65024e1e9e900ca5a514ad104->leave($__internal_2928ef9cd12ebf3b1b61c0154393432bf0ea54a65024e1e9e900ca5a514ad104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
