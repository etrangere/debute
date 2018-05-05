<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_12c24491de8e2319784765e2c8b2b3745dfad996f235e6b81715aeb37d490fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c24491de8e2319784765e2c8b2b3745dfad996f235e6b81715aeb37d490fb7->enter($__internal_12c24491de8e2319784765e2c8b2b3745dfad996f235e6b81715aeb37d490fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_80339e183d45941ff3b4a093919af03041eaca45da71435540904cbdacac9115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80339e183d45941ff3b4a093919af03041eaca45da71435540904cbdacac9115->enter($__internal_80339e183d45941ff3b4a093919af03041eaca45da71435540904cbdacac9115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_12c24491de8e2319784765e2c8b2b3745dfad996f235e6b81715aeb37d490fb7->leave($__internal_12c24491de8e2319784765e2c8b2b3745dfad996f235e6b81715aeb37d490fb7_prof);

        
        $__internal_80339e183d45941ff3b4a093919af03041eaca45da71435540904cbdacac9115->leave($__internal_80339e183d45941ff3b4a093919af03041eaca45da71435540904cbdacac9115_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
