<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_56a2f1ed5b7a22c68d6f9594bdbaef07c0e5b6757ef0a9a4725c4f8e8b00b483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a2f1ed5b7a22c68d6f9594bdbaef07c0e5b6757ef0a9a4725c4f8e8b00b483->enter($__internal_56a2f1ed5b7a22c68d6f9594bdbaef07c0e5b6757ef0a9a4725c4f8e8b00b483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d4ba4bbf2b909fea23fddf6f97d5c0c04738c123ae59e750702ae7af44096a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ba4bbf2b909fea23fddf6f97d5c0c04738c123ae59e750702ae7af44096a74->enter($__internal_d4ba4bbf2b909fea23fddf6f97d5c0c04738c123ae59e750702ae7af44096a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_56a2f1ed5b7a22c68d6f9594bdbaef07c0e5b6757ef0a9a4725c4f8e8b00b483->leave($__internal_56a2f1ed5b7a22c68d6f9594bdbaef07c0e5b6757ef0a9a4725c4f8e8b00b483_prof);

        
        $__internal_d4ba4bbf2b909fea23fddf6f97d5c0c04738c123ae59e750702ae7af44096a74->leave($__internal_d4ba4bbf2b909fea23fddf6f97d5c0c04738c123ae59e750702ae7af44096a74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
