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
        $__internal_94f63e07671e546f2ddf24277dc6f8196ba6508866179dbebb5bc29b165c0491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f63e07671e546f2ddf24277dc6f8196ba6508866179dbebb5bc29b165c0491->enter($__internal_94f63e07671e546f2ddf24277dc6f8196ba6508866179dbebb5bc29b165c0491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bfef3097ee9428275234be54b9d0a9d129a19b12c88ba330313e42b2c6481a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfef3097ee9428275234be54b9d0a9d129a19b12c88ba330313e42b2c6481a1e->enter($__internal_bfef3097ee9428275234be54b9d0a9d129a19b12c88ba330313e42b2c6481a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_94f63e07671e546f2ddf24277dc6f8196ba6508866179dbebb5bc29b165c0491->leave($__internal_94f63e07671e546f2ddf24277dc6f8196ba6508866179dbebb5bc29b165c0491_prof);

        
        $__internal_bfef3097ee9428275234be54b9d0a9d129a19b12c88ba330313e42b2c6481a1e->leave($__internal_bfef3097ee9428275234be54b9d0a9d129a19b12c88ba330313e42b2c6481a1e_prof);

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
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
