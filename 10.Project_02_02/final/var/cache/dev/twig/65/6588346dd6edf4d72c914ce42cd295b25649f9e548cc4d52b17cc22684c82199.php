<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_acc67efbe8dfabf866610a8d2ddf729d502aec8ccff741537b46cc72db61ee6a extends Twig_Template
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
        $__internal_e2ecaea7c0e035dbcb3ac8b8709ae6cd4cc17fc79f6cb9f8639603d9a82f591c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ecaea7c0e035dbcb3ac8b8709ae6cd4cc17fc79f6cb9f8639603d9a82f591c->enter($__internal_e2ecaea7c0e035dbcb3ac8b8709ae6cd4cc17fc79f6cb9f8639603d9a82f591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ed6900d75588ec4c4c02589ed583102f527c06176f68e6c0855087b0999c344b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6900d75588ec4c4c02589ed583102f527c06176f68e6c0855087b0999c344b->enter($__internal_ed6900d75588ec4c4c02589ed583102f527c06176f68e6c0855087b0999c344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e2ecaea7c0e035dbcb3ac8b8709ae6cd4cc17fc79f6cb9f8639603d9a82f591c->leave($__internal_e2ecaea7c0e035dbcb3ac8b8709ae6cd4cc17fc79f6cb9f8639603d9a82f591c_prof);

        
        $__internal_ed6900d75588ec4c4c02589ed583102f527c06176f68e6c0855087b0999c344b->leave($__internal_ed6900d75588ec4c4c02589ed583102f527c06176f68e6c0855087b0999c344b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
