<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2256ecca45113b85f61bda3af7ace20b8e4179eac1b60fcbdcb2ec05e5ed29ac extends Twig_Template
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
        $__internal_fe2c4cd8a00145c13f6ba3f546ca89a928a51e572f421bab1962a4dce43bed24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2c4cd8a00145c13f6ba3f546ca89a928a51e572f421bab1962a4dce43bed24->enter($__internal_fe2c4cd8a00145c13f6ba3f546ca89a928a51e572f421bab1962a4dce43bed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d4c11d24ba8a0b3aeeb5605d715c63a6cbab412f13d0966b570d7998aa7602ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c11d24ba8a0b3aeeb5605d715c63a6cbab412f13d0966b570d7998aa7602ca->enter($__internal_d4c11d24ba8a0b3aeeb5605d715c63a6cbab412f13d0966b570d7998aa7602ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fe2c4cd8a00145c13f6ba3f546ca89a928a51e572f421bab1962a4dce43bed24->leave($__internal_fe2c4cd8a00145c13f6ba3f546ca89a928a51e572f421bab1962a4dce43bed24_prof);

        
        $__internal_d4c11d24ba8a0b3aeeb5605d715c63a6cbab412f13d0966b570d7998aa7602ca->leave($__internal_d4c11d24ba8a0b3aeeb5605d715c63a6cbab412f13d0966b570d7998aa7602ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
