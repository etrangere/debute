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
        $__internal_8f04a6c3a8d02168fb5043355e53b551ab220ac3c8ddf4cd97199bac2211c320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f04a6c3a8d02168fb5043355e53b551ab220ac3c8ddf4cd97199bac2211c320->enter($__internal_8f04a6c3a8d02168fb5043355e53b551ab220ac3c8ddf4cd97199bac2211c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9b5272f2e960f724f168ebd65128dbfe578671530ebfa6a84ee943bb5eccab78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5272f2e960f724f168ebd65128dbfe578671530ebfa6a84ee943bb5eccab78->enter($__internal_9b5272f2e960f724f168ebd65128dbfe578671530ebfa6a84ee943bb5eccab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8f04a6c3a8d02168fb5043355e53b551ab220ac3c8ddf4cd97199bac2211c320->leave($__internal_8f04a6c3a8d02168fb5043355e53b551ab220ac3c8ddf4cd97199bac2211c320_prof);

        
        $__internal_9b5272f2e960f724f168ebd65128dbfe578671530ebfa6a84ee943bb5eccab78->leave($__internal_9b5272f2e960f724f168ebd65128dbfe578671530ebfa6a84ee943bb5eccab78_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
