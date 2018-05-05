<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b2117e1ceccd64d72d5f05077f27c022ddb91b0a90b387bc397c3ed6c381f93 extends Twig_Template
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
        $__internal_acfe2cc0739d1a51b41b9e10cb4c2a0b77bb4be9c7d4f01d087a081875236384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfe2cc0739d1a51b41b9e10cb4c2a0b77bb4be9c7d4f01d087a081875236384->enter($__internal_acfe2cc0739d1a51b41b9e10cb4c2a0b77bb4be9c7d4f01d087a081875236384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0fe5d1c2621bfbab3a1d30e8888b62ff9d83a848f8861550c0b6da99724782d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe5d1c2621bfbab3a1d30e8888b62ff9d83a848f8861550c0b6da99724782d0->enter($__internal_0fe5d1c2621bfbab3a1d30e8888b62ff9d83a848f8861550c0b6da99724782d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_acfe2cc0739d1a51b41b9e10cb4c2a0b77bb4be9c7d4f01d087a081875236384->leave($__internal_acfe2cc0739d1a51b41b9e10cb4c2a0b77bb4be9c7d4f01d087a081875236384_prof);

        
        $__internal_0fe5d1c2621bfbab3a1d30e8888b62ff9d83a848f8861550c0b6da99724782d0->leave($__internal_0fe5d1c2621bfbab3a1d30e8888b62ff9d83a848f8861550c0b6da99724782d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
