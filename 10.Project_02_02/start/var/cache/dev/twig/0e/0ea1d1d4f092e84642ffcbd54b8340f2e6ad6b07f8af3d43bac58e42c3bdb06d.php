<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc947c03ff27153303aee18d5a493371064f8f2590e9dc6ee4a72b1ab21cc233 extends Twig_Template
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
        $__internal_87b1929e887edd8a3aa21bcab098d2c372acb06cd0b5a8a1e5bb78620868053b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b1929e887edd8a3aa21bcab098d2c372acb06cd0b5a8a1e5bb78620868053b->enter($__internal_87b1929e887edd8a3aa21bcab098d2c372acb06cd0b5a8a1e5bb78620868053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4d3a0a3ae899972ca2c60cede1a439e5e8e7ddf68cafd071cc5a4ed66763d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3a0a3ae899972ca2c60cede1a439e5e8e7ddf68cafd071cc5a4ed66763d856->enter($__internal_4d3a0a3ae899972ca2c60cede1a439e5e8e7ddf68cafd071cc5a4ed66763d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_87b1929e887edd8a3aa21bcab098d2c372acb06cd0b5a8a1e5bb78620868053b->leave($__internal_87b1929e887edd8a3aa21bcab098d2c372acb06cd0b5a8a1e5bb78620868053b_prof);

        
        $__internal_4d3a0a3ae899972ca2c60cede1a439e5e8e7ddf68cafd071cc5a4ed66763d856->leave($__internal_4d3a0a3ae899972ca2c60cede1a439e5e8e7ddf68cafd071cc5a4ed66763d856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
