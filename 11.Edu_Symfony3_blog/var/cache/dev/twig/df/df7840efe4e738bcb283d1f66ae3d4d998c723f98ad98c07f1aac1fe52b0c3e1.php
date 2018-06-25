<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d172e4363dea5f7806ce1851ae9fe798ab72d1fc6bb709893cf628d40eb06f8b extends Twig_Template
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
        $__internal_5edc7f48b4c77c5ef8128b7cd4c8758d8e81cacc90da3ee34f81bf9d95440529 = $this->env->getExtension("native_profiler");
        $__internal_5edc7f48b4c77c5ef8128b7cd4c8758d8e81cacc90da3ee34f81bf9d95440529->enter($__internal_5edc7f48b4c77c5ef8128b7cd4c8758d8e81cacc90da3ee34f81bf9d95440529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5edc7f48b4c77c5ef8128b7cd4c8758d8e81cacc90da3ee34f81bf9d95440529->leave($__internal_5edc7f48b4c77c5ef8128b7cd4c8758d8e81cacc90da3ee34f81bf9d95440529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
