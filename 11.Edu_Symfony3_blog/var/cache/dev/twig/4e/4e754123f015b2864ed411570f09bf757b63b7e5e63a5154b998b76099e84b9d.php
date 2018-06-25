<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d51e17998c2cb72523553682950dda7cba480604a40c28bf3c496714280711f4 extends Twig_Template
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
        $__internal_82375fb9a770beca63365b1d30638ec15282ee15af4096df24d5268ce36f5d23 = $this->env->getExtension("native_profiler");
        $__internal_82375fb9a770beca63365b1d30638ec15282ee15af4096df24d5268ce36f5d23->enter($__internal_82375fb9a770beca63365b1d30638ec15282ee15af4096df24d5268ce36f5d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_82375fb9a770beca63365b1d30638ec15282ee15af4096df24d5268ce36f5d23->leave($__internal_82375fb9a770beca63365b1d30638ec15282ee15af4096df24d5268ce36f5d23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
