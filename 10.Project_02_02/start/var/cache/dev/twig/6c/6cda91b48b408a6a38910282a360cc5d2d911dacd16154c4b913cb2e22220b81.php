<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_74913aa414ab7c25f10dabc09dc25575f6e65422001e3f17484c355e1b8517be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74913aa414ab7c25f10dabc09dc25575f6e65422001e3f17484c355e1b8517be->enter($__internal_74913aa414ab7c25f10dabc09dc25575f6e65422001e3f17484c355e1b8517be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2bb6f0575a434fcafd02f33afe10f4de0c592bb047a6d157afcac3f89578d179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb6f0575a434fcafd02f33afe10f4de0c592bb047a6d157afcac3f89578d179->enter($__internal_2bb6f0575a434fcafd02f33afe10f4de0c592bb047a6d157afcac3f89578d179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_74913aa414ab7c25f10dabc09dc25575f6e65422001e3f17484c355e1b8517be->leave($__internal_74913aa414ab7c25f10dabc09dc25575f6e65422001e3f17484c355e1b8517be_prof);

        
        $__internal_2bb6f0575a434fcafd02f33afe10f4de0c592bb047a6d157afcac3f89578d179->leave($__internal_2bb6f0575a434fcafd02f33afe10f4de0c592bb047a6d157afcac3f89578d179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
