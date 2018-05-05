<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_8c029b92a8d8c1305d59b9e1c37e24d82cfb60726d5410b916375244fdd7ba68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c029b92a8d8c1305d59b9e1c37e24d82cfb60726d5410b916375244fdd7ba68->enter($__internal_8c029b92a8d8c1305d59b9e1c37e24d82cfb60726d5410b916375244fdd7ba68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bc39fa7105768123749ef017f4a82d08b3b5b0b69ed0b6df14ba60975ec2cb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc39fa7105768123749ef017f4a82d08b3b5b0b69ed0b6df14ba60975ec2cb43->enter($__internal_bc39fa7105768123749ef017f4a82d08b3b5b0b69ed0b6df14ba60975ec2cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8c029b92a8d8c1305d59b9e1c37e24d82cfb60726d5410b916375244fdd7ba68->leave($__internal_8c029b92a8d8c1305d59b9e1c37e24d82cfb60726d5410b916375244fdd7ba68_prof);

        
        $__internal_bc39fa7105768123749ef017f4a82d08b3b5b0b69ed0b6df14ba60975ec2cb43->leave($__internal_bc39fa7105768123749ef017f4a82d08b3b5b0b69ed0b6df14ba60975ec2cb43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
