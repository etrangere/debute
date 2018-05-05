<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_8a98cbf742637e10175c998aa4ff4c8c05a677954ca4fbaa0b5a8e156f2b1b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a98cbf742637e10175c998aa4ff4c8c05a677954ca4fbaa0b5a8e156f2b1b16->enter($__internal_8a98cbf742637e10175c998aa4ff4c8c05a677954ca4fbaa0b5a8e156f2b1b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_261106e7c718ffb962b09e78632ff74601a92c2bbeba53c948ef1efd0497deb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261106e7c718ffb962b09e78632ff74601a92c2bbeba53c948ef1efd0497deb0->enter($__internal_261106e7c718ffb962b09e78632ff74601a92c2bbeba53c948ef1efd0497deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8a98cbf742637e10175c998aa4ff4c8c05a677954ca4fbaa0b5a8e156f2b1b16->leave($__internal_8a98cbf742637e10175c998aa4ff4c8c05a677954ca4fbaa0b5a8e156f2b1b16_prof);

        
        $__internal_261106e7c718ffb962b09e78632ff74601a92c2bbeba53c948ef1efd0497deb0->leave($__internal_261106e7c718ffb962b09e78632ff74601a92c2bbeba53c948ef1efd0497deb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
