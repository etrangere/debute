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
        $__internal_f9247e40c4b44835aaf4b2c31fe8d03e43b3440724eef4cacb13ca289a31fc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9247e40c4b44835aaf4b2c31fe8d03e43b3440724eef4cacb13ca289a31fc15->enter($__internal_f9247e40c4b44835aaf4b2c31fe8d03e43b3440724eef4cacb13ca289a31fc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_eee76608b570223eac0aca1700b1ea47b7529333e573e27d436311f824c5c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee76608b570223eac0aca1700b1ea47b7529333e573e27d436311f824c5c7dc->enter($__internal_eee76608b570223eac0aca1700b1ea47b7529333e573e27d436311f824c5c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f9247e40c4b44835aaf4b2c31fe8d03e43b3440724eef4cacb13ca289a31fc15->leave($__internal_f9247e40c4b44835aaf4b2c31fe8d03e43b3440724eef4cacb13ca289a31fc15_prof);

        
        $__internal_eee76608b570223eac0aca1700b1ea47b7529333e573e27d436311f824c5c7dc->leave($__internal_eee76608b570223eac0aca1700b1ea47b7529333e573e27d436311f824c5c7dc_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
