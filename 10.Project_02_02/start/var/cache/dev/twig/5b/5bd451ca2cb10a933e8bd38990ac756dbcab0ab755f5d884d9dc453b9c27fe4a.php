<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_67ed0b308a3b20af32497669367b6f76949cf51537563c750d886bdd9c14e7ab extends Twig_Template
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
        $__internal_541eea182f5d66b87b7b7cdb305393881a224f5d2dbf4c3bb701774298db8415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541eea182f5d66b87b7b7cdb305393881a224f5d2dbf4c3bb701774298db8415->enter($__internal_541eea182f5d66b87b7b7cdb305393881a224f5d2dbf4c3bb701774298db8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ecf4d72705b1bc0aee10668b37eda40d802ec1ec9823575580efd95921543fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf4d72705b1bc0aee10668b37eda40d802ec1ec9823575580efd95921543fa0->enter($__internal_ecf4d72705b1bc0aee10668b37eda40d802ec1ec9823575580efd95921543fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_541eea182f5d66b87b7b7cdb305393881a224f5d2dbf4c3bb701774298db8415->leave($__internal_541eea182f5d66b87b7b7cdb305393881a224f5d2dbf4c3bb701774298db8415_prof);

        
        $__internal_ecf4d72705b1bc0aee10668b37eda40d802ec1ec9823575580efd95921543fa0->leave($__internal_ecf4d72705b1bc0aee10668b37eda40d802ec1ec9823575580efd95921543fa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
