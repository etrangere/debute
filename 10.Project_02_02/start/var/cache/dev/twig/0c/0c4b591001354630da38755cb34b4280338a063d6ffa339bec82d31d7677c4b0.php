<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4b2e27988eed615d35295441117f8caf5fbec0967cbda51c9f86f9e55d4bde81 extends Twig_Template
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
        $__internal_96f0c2b3833883760c4c35edbaf953d74e643a059794edfd7ea1e2b3520183c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f0c2b3833883760c4c35edbaf953d74e643a059794edfd7ea1e2b3520183c4->enter($__internal_96f0c2b3833883760c4c35edbaf953d74e643a059794edfd7ea1e2b3520183c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4768be365a5b5464832a4ffd24e2b9886e134b3a06b1ca3768b6a86d631f1bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4768be365a5b5464832a4ffd24e2b9886e134b3a06b1ca3768b6a86d631f1bd4->enter($__internal_4768be365a5b5464832a4ffd24e2b9886e134b3a06b1ca3768b6a86d631f1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_96f0c2b3833883760c4c35edbaf953d74e643a059794edfd7ea1e2b3520183c4->leave($__internal_96f0c2b3833883760c4c35edbaf953d74e643a059794edfd7ea1e2b3520183c4_prof);

        
        $__internal_4768be365a5b5464832a4ffd24e2b9886e134b3a06b1ca3768b6a86d631f1bd4->leave($__internal_4768be365a5b5464832a4ffd24e2b9886e134b3a06b1ca3768b6a86d631f1bd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
