<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3e350fe11d29c7026f598fb1f4febdb72797f9f8cc3a0704d0a7346f746d8a52 extends Twig_Template
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
        $__internal_b6fb7ae3467623fadaf261b9f77153d83c3ff91972121c048e4a1d769e8b8395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fb7ae3467623fadaf261b9f77153d83c3ff91972121c048e4a1d769e8b8395->enter($__internal_b6fb7ae3467623fadaf261b9f77153d83c3ff91972121c048e4a1d769e8b8395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_94afd2a2d0a0c1902acd905bf2f94553c75ed8e3ace3196620ae23d8f990e100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94afd2a2d0a0c1902acd905bf2f94553c75ed8e3ace3196620ae23d8f990e100->enter($__internal_94afd2a2d0a0c1902acd905bf2f94553c75ed8e3ace3196620ae23d8f990e100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b6fb7ae3467623fadaf261b9f77153d83c3ff91972121c048e4a1d769e8b8395->leave($__internal_b6fb7ae3467623fadaf261b9f77153d83c3ff91972121c048e4a1d769e8b8395_prof);

        
        $__internal_94afd2a2d0a0c1902acd905bf2f94553c75ed8e3ace3196620ae23d8f990e100->leave($__internal_94afd2a2d0a0c1902acd905bf2f94553c75ed8e3ace3196620ae23d8f990e100_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
