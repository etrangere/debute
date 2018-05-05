<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7de574f9432a752b7aa1407aee3fe315c0f1aad2d8fb1f71d69a578f2ffc85c extends Twig_Template
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
        $__internal_e97ed5ef81af1f84d3f7a30f45e646d9b14153ea7688e0bd98008d64ad29aebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97ed5ef81af1f84d3f7a30f45e646d9b14153ea7688e0bd98008d64ad29aebc->enter($__internal_e97ed5ef81af1f84d3f7a30f45e646d9b14153ea7688e0bd98008d64ad29aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1c26c0c44fc3fc9662510c9536444e5cdb579d18d069cbb2a85cac5e206222f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c26c0c44fc3fc9662510c9536444e5cdb579d18d069cbb2a85cac5e206222f4->enter($__internal_1c26c0c44fc3fc9662510c9536444e5cdb579d18d069cbb2a85cac5e206222f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e97ed5ef81af1f84d3f7a30f45e646d9b14153ea7688e0bd98008d64ad29aebc->leave($__internal_e97ed5ef81af1f84d3f7a30f45e646d9b14153ea7688e0bd98008d64ad29aebc_prof);

        
        $__internal_1c26c0c44fc3fc9662510c9536444e5cdb579d18d069cbb2a85cac5e206222f4->leave($__internal_1c26c0c44fc3fc9662510c9536444e5cdb579d18d069cbb2a85cac5e206222f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
