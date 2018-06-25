<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec62b452c95bed406afbccb500e7f059fd465323fe5660289f6409b1511efa5f extends Twig_Template
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
        $__internal_6162f6375d7300373591727e0c0bdf77bff7279465a60b3bdfa87d24297e84f4 = $this->env->getExtension("native_profiler");
        $__internal_6162f6375d7300373591727e0c0bdf77bff7279465a60b3bdfa87d24297e84f4->enter($__internal_6162f6375d7300373591727e0c0bdf77bff7279465a60b3bdfa87d24297e84f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6162f6375d7300373591727e0c0bdf77bff7279465a60b3bdfa87d24297e84f4->leave($__internal_6162f6375d7300373591727e0c0bdf77bff7279465a60b3bdfa87d24297e84f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
