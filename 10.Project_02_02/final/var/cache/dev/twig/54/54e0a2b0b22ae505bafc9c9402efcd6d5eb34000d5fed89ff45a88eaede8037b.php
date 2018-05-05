<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_117d7e6ba912c8024a0275b56ed8553d86fb57108b92f907017796efd08f20dd extends Twig_Template
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
        $__internal_880f5761f0d46af619f8565937c0e30141d53f49c54a4957c9d0635a0f757f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880f5761f0d46af619f8565937c0e30141d53f49c54a4957c9d0635a0f757f88->enter($__internal_880f5761f0d46af619f8565937c0e30141d53f49c54a4957c9d0635a0f757f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ecb7d21e0733a619de31bd005b528b58fd7bd16e62d3ec02fa01c141948da43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb7d21e0733a619de31bd005b528b58fd7bd16e62d3ec02fa01c141948da43d->enter($__internal_ecb7d21e0733a619de31bd005b528b58fd7bd16e62d3ec02fa01c141948da43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_880f5761f0d46af619f8565937c0e30141d53f49c54a4957c9d0635a0f757f88->leave($__internal_880f5761f0d46af619f8565937c0e30141d53f49c54a4957c9d0635a0f757f88_prof);

        
        $__internal_ecb7d21e0733a619de31bd005b528b58fd7bd16e62d3ec02fa01c141948da43d->leave($__internal_ecb7d21e0733a619de31bd005b528b58fd7bd16e62d3ec02fa01c141948da43d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
