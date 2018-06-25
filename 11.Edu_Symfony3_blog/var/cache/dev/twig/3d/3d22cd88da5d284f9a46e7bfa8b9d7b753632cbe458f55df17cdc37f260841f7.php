<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d53c9534cd6861fe7b9ed739819dd349f1c9ba2165db6b7830c42c2f4da0a7a extends Twig_Template
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
        $__internal_764e7f252fce54f67ef09b8eda68bd3ad3b2fdab5e7f471579d624a9255e2e30 = $this->env->getExtension("native_profiler");
        $__internal_764e7f252fce54f67ef09b8eda68bd3ad3b2fdab5e7f471579d624a9255e2e30->enter($__internal_764e7f252fce54f67ef09b8eda68bd3ad3b2fdab5e7f471579d624a9255e2e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_764e7f252fce54f67ef09b8eda68bd3ad3b2fdab5e7f471579d624a9255e2e30->leave($__internal_764e7f252fce54f67ef09b8eda68bd3ad3b2fdab5e7f471579d624a9255e2e30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
