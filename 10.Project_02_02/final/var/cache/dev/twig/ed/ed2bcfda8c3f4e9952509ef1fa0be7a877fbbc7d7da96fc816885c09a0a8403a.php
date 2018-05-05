<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_966c31e5eba600d44dd07f93b2e403c957bf8804aef09a9f8c45109fc681a15b extends Twig_Template
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
        $__internal_84cc855e98dc694015ed917eb7aa70e5bce69d6b38eeb2ac7864b89d37a79936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cc855e98dc694015ed917eb7aa70e5bce69d6b38eeb2ac7864b89d37a79936->enter($__internal_84cc855e98dc694015ed917eb7aa70e5bce69d6b38eeb2ac7864b89d37a79936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9a795f760d4e6b72a5c9c4445dd6b48e79cefe1bbbc37f1eba9f25f971c2c6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a795f760d4e6b72a5c9c4445dd6b48e79cefe1bbbc37f1eba9f25f971c2c6f4->enter($__internal_9a795f760d4e6b72a5c9c4445dd6b48e79cefe1bbbc37f1eba9f25f971c2c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_84cc855e98dc694015ed917eb7aa70e5bce69d6b38eeb2ac7864b89d37a79936->leave($__internal_84cc855e98dc694015ed917eb7aa70e5bce69d6b38eeb2ac7864b89d37a79936_prof);

        
        $__internal_9a795f760d4e6b72a5c9c4445dd6b48e79cefe1bbbc37f1eba9f25f971c2c6f4->leave($__internal_9a795f760d4e6b72a5c9c4445dd6b48e79cefe1bbbc37f1eba9f25f971c2c6f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
