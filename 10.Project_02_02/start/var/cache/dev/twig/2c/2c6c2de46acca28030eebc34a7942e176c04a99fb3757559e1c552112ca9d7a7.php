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
        $__internal_6c8185dcbcabda55cb1acadfd7e46a5fdcc6742aea66a9783c69927814e9eda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8185dcbcabda55cb1acadfd7e46a5fdcc6742aea66a9783c69927814e9eda0->enter($__internal_6c8185dcbcabda55cb1acadfd7e46a5fdcc6742aea66a9783c69927814e9eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4148022df5450b640a0498129cccb3aedd100ad3f7e019559393930ba587015b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4148022df5450b640a0498129cccb3aedd100ad3f7e019559393930ba587015b->enter($__internal_4148022df5450b640a0498129cccb3aedd100ad3f7e019559393930ba587015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c8185dcbcabda55cb1acadfd7e46a5fdcc6742aea66a9783c69927814e9eda0->leave($__internal_6c8185dcbcabda55cb1acadfd7e46a5fdcc6742aea66a9783c69927814e9eda0_prof);

        
        $__internal_4148022df5450b640a0498129cccb3aedd100ad3f7e019559393930ba587015b->leave($__internal_4148022df5450b640a0498129cccb3aedd100ad3f7e019559393930ba587015b_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
