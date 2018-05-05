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
        $__internal_4c7c8f6dd577261d8615ae13e7ef11b788d56b2bc9935f3f4f70046d701354d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7c8f6dd577261d8615ae13e7ef11b788d56b2bc9935f3f4f70046d701354d7->enter($__internal_4c7c8f6dd577261d8615ae13e7ef11b788d56b2bc9935f3f4f70046d701354d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e7ed3b0d0719e6d90a59989e643c09f7fb5e0b2004feef9e40e74dd01d8ec44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ed3b0d0719e6d90a59989e643c09f7fb5e0b2004feef9e40e74dd01d8ec44f->enter($__internal_e7ed3b0d0719e6d90a59989e643c09f7fb5e0b2004feef9e40e74dd01d8ec44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4c7c8f6dd577261d8615ae13e7ef11b788d56b2bc9935f3f4f70046d701354d7->leave($__internal_4c7c8f6dd577261d8615ae13e7ef11b788d56b2bc9935f3f4f70046d701354d7_prof);

        
        $__internal_e7ed3b0d0719e6d90a59989e643c09f7fb5e0b2004feef9e40e74dd01d8ec44f->leave($__internal_e7ed3b0d0719e6d90a59989e643c09f7fb5e0b2004feef9e40e74dd01d8ec44f_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
