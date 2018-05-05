<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c894797157bdf3a7c1341bccd7bceff6a1f87da3d39b5477103fd25bd29f0c9b extends Twig_Template
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
        $__internal_5d51dabb0367c82115e4dcfa96963588fbdcede5ad42ec916f835a12876f1a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d51dabb0367c82115e4dcfa96963588fbdcede5ad42ec916f835a12876f1a57->enter($__internal_5d51dabb0367c82115e4dcfa96963588fbdcede5ad42ec916f835a12876f1a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5e4cac359e506bb6ff0294348bd1bb82979e17c774470d56e68dfbf27bb68ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4cac359e506bb6ff0294348bd1bb82979e17c774470d56e68dfbf27bb68ace->enter($__internal_5e4cac359e506bb6ff0294348bd1bb82979e17c774470d56e68dfbf27bb68ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5d51dabb0367c82115e4dcfa96963588fbdcede5ad42ec916f835a12876f1a57->leave($__internal_5d51dabb0367c82115e4dcfa96963588fbdcede5ad42ec916f835a12876f1a57_prof);

        
        $__internal_5e4cac359e506bb6ff0294348bd1bb82979e17c774470d56e68dfbf27bb68ace->leave($__internal_5e4cac359e506bb6ff0294348bd1bb82979e17c774470d56e68dfbf27bb68ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
