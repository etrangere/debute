<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_966c31e5eba600d44dd07f93b2e403c957bf8804aef09a9f8c45109fc681a15b extends Twig_Template
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
        $__internal_6cb7ebde6a3ebc8270651063bc9158c6cb9319aff41064c6c9190c4f946c4e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb7ebde6a3ebc8270651063bc9158c6cb9319aff41064c6c9190c4f946c4e3b->enter($__internal_6cb7ebde6a3ebc8270651063bc9158c6cb9319aff41064c6c9190c4f946c4e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_20ae29ae6e5baa773cc42617c2181d379a223568b997e8fe61b06940b6707e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ae29ae6e5baa773cc42617c2181d379a223568b997e8fe61b06940b6707e66->enter($__internal_20ae29ae6e5baa773cc42617c2181d379a223568b997e8fe61b06940b6707e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6cb7ebde6a3ebc8270651063bc9158c6cb9319aff41064c6c9190c4f946c4e3b->leave($__internal_6cb7ebde6a3ebc8270651063bc9158c6cb9319aff41064c6c9190c4f946c4e3b_prof);

        
        $__internal_20ae29ae6e5baa773cc42617c2181d379a223568b997e8fe61b06940b6707e66->leave($__internal_20ae29ae6e5baa773cc42617c2181d379a223568b997e8fe61b06940b6707e66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
