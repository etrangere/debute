<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9925acbccdcd3f00558b17571ec51b6cafd4a010ab9148bc035ce766290c0ef1 extends Twig_Template
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
        $__internal_4edfbae3d61cd689b676b91d4d3e7d36a2c8fc52f4b1944b99052fb6a086f8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edfbae3d61cd689b676b91d4d3e7d36a2c8fc52f4b1944b99052fb6a086f8bc->enter($__internal_4edfbae3d61cd689b676b91d4d3e7d36a2c8fc52f4b1944b99052fb6a086f8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_bc63940206fc3c44af01c2b41e5be472cb23624a5dfda634e80ade27cf69a806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc63940206fc3c44af01c2b41e5be472cb23624a5dfda634e80ade27cf69a806->enter($__internal_bc63940206fc3c44af01c2b41e5be472cb23624a5dfda634e80ade27cf69a806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4edfbae3d61cd689b676b91d4d3e7d36a2c8fc52f4b1944b99052fb6a086f8bc->leave($__internal_4edfbae3d61cd689b676b91d4d3e7d36a2c8fc52f4b1944b99052fb6a086f8bc_prof);

        
        $__internal_bc63940206fc3c44af01c2b41e5be472cb23624a5dfda634e80ade27cf69a806->leave($__internal_bc63940206fc3c44af01c2b41e5be472cb23624a5dfda634e80ade27cf69a806_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
