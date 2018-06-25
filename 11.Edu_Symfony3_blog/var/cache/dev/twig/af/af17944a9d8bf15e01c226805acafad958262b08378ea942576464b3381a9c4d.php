<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8da65be0c303f213aa28ce9073532efea8d0e3b78cf869ce9f0c1de70614445a extends Twig_Template
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
        $__internal_65b87c487e7ebb3a440ccd81cf526f18b4013fa611da5afd463e954c75bd2d27 = $this->env->getExtension("native_profiler");
        $__internal_65b87c487e7ebb3a440ccd81cf526f18b4013fa611da5afd463e954c75bd2d27->enter($__internal_65b87c487e7ebb3a440ccd81cf526f18b4013fa611da5afd463e954c75bd2d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65b87c487e7ebb3a440ccd81cf526f18b4013fa611da5afd463e954c75bd2d27->leave($__internal_65b87c487e7ebb3a440ccd81cf526f18b4013fa611da5afd463e954c75bd2d27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
