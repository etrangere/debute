<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1e7a1f8bab4e20aa4dbb7afd21f0d1832f11973f4703c9c645f0aa3e13638cc7 extends Twig_Template
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
        $__internal_c9a2163518fd612f14be54877dd6f26db756f7834d4e53bf126e384fb88992af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a2163518fd612f14be54877dd6f26db756f7834d4e53bf126e384fb88992af->enter($__internal_c9a2163518fd612f14be54877dd6f26db756f7834d4e53bf126e384fb88992af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_48219a44d9e1db98862de36e218309c94b0c0831abe909aca30ed0f6a2ce8375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48219a44d9e1db98862de36e218309c94b0c0831abe909aca30ed0f6a2ce8375->enter($__internal_48219a44d9e1db98862de36e218309c94b0c0831abe909aca30ed0f6a2ce8375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c9a2163518fd612f14be54877dd6f26db756f7834d4e53bf126e384fb88992af->leave($__internal_c9a2163518fd612f14be54877dd6f26db756f7834d4e53bf126e384fb88992af_prof);

        
        $__internal_48219a44d9e1db98862de36e218309c94b0c0831abe909aca30ed0f6a2ce8375->leave($__internal_48219a44d9e1db98862de36e218309c94b0c0831abe909aca30ed0f6a2ce8375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
