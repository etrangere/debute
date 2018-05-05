<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef0bec61c4b2aa57b76a1d82b09797bc1877fb49da66dfdc43a5ff03a830d3a6 extends Twig_Template
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
        $__internal_f168eb15eea2dfbd8e37c568c6c3c57ded210c2327fd7ee2c6aa32d47ec22109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f168eb15eea2dfbd8e37c568c6c3c57ded210c2327fd7ee2c6aa32d47ec22109->enter($__internal_f168eb15eea2dfbd8e37c568c6c3c57ded210c2327fd7ee2c6aa32d47ec22109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cd147d9ef64de466b81dd376a17beb3c33b94994d0b2e2f6f6d5e414ef0cb7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd147d9ef64de466b81dd376a17beb3c33b94994d0b2e2f6f6d5e414ef0cb7d8->enter($__internal_cd147d9ef64de466b81dd376a17beb3c33b94994d0b2e2f6f6d5e414ef0cb7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f168eb15eea2dfbd8e37c568c6c3c57ded210c2327fd7ee2c6aa32d47ec22109->leave($__internal_f168eb15eea2dfbd8e37c568c6c3c57ded210c2327fd7ee2c6aa32d47ec22109_prof);

        
        $__internal_cd147d9ef64de466b81dd376a17beb3c33b94994d0b2e2f6f6d5e414ef0cb7d8->leave($__internal_cd147d9ef64de466b81dd376a17beb3c33b94994d0b2e2f6f6d5e414ef0cb7d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
