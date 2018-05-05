<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6fab1bb7aeb690b637254b9f083a29f2bbfa7ca82d585cf8d5f5672c35e23dba extends Twig_Template
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
        $__internal_23081ac54ca3d40ae5d7b2e9b07c14dcbe3a4557035ec7365c01d69f09f539c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23081ac54ca3d40ae5d7b2e9b07c14dcbe3a4557035ec7365c01d69f09f539c0->enter($__internal_23081ac54ca3d40ae5d7b2e9b07c14dcbe3a4557035ec7365c01d69f09f539c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d982a2d2338b551181c86d5d1ea876a2cc0868c2b7ed5bca4aa1afe1e8da7b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d982a2d2338b551181c86d5d1ea876a2cc0868c2b7ed5bca4aa1afe1e8da7b72->enter($__internal_d982a2d2338b551181c86d5d1ea876a2cc0868c2b7ed5bca4aa1afe1e8da7b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_23081ac54ca3d40ae5d7b2e9b07c14dcbe3a4557035ec7365c01d69f09f539c0->leave($__internal_23081ac54ca3d40ae5d7b2e9b07c14dcbe3a4557035ec7365c01d69f09f539c0_prof);

        
        $__internal_d982a2d2338b551181c86d5d1ea876a2cc0868c2b7ed5bca4aa1afe1e8da7b72->leave($__internal_d982a2d2338b551181c86d5d1ea876a2cc0868c2b7ed5bca4aa1afe1e8da7b72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
