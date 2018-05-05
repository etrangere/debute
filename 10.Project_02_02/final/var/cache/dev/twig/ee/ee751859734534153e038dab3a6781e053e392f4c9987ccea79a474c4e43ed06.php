<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_732ac4de1dadfb5a86d1f907235868aa30d0ab9a4c07060de1755fcb83a7e1e2 extends Twig_Template
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
        $__internal_c2a5fe589926fac781eceba8ca95cc7d9a8b30f44a0b16abad0f4998ea0bb65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a5fe589926fac781eceba8ca95cc7d9a8b30f44a0b16abad0f4998ea0bb65c->enter($__internal_c2a5fe589926fac781eceba8ca95cc7d9a8b30f44a0b16abad0f4998ea0bb65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1acfa2b25926a754e27647239f4946c3dcc57dded8e6c9d3a8208bf5f69a4d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acfa2b25926a754e27647239f4946c3dcc57dded8e6c9d3a8208bf5f69a4d5f->enter($__internal_1acfa2b25926a754e27647239f4946c3dcc57dded8e6c9d3a8208bf5f69a4d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c2a5fe589926fac781eceba8ca95cc7d9a8b30f44a0b16abad0f4998ea0bb65c->leave($__internal_c2a5fe589926fac781eceba8ca95cc7d9a8b30f44a0b16abad0f4998ea0bb65c_prof);

        
        $__internal_1acfa2b25926a754e27647239f4946c3dcc57dded8e6c9d3a8208bf5f69a4d5f->leave($__internal_1acfa2b25926a754e27647239f4946c3dcc57dded8e6c9d3a8208bf5f69a4d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
