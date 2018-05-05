<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_697eeca3751ff80ef265441b16a1724a631b171cfe20f7ef753f4c1c3f8342eb extends Twig_Template
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
        $__internal_0b645da2d37def2a1ccc22a6fd2b88ea0da7c41be8225f9c19f6f06e974e5afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b645da2d37def2a1ccc22a6fd2b88ea0da7c41be8225f9c19f6f06e974e5afa->enter($__internal_0b645da2d37def2a1ccc22a6fd2b88ea0da7c41be8225f9c19f6f06e974e5afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c3b51d25ff78ac2e6c406ebf5159e73f15e2310f1c08da96905923ad96e17197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b51d25ff78ac2e6c406ebf5159e73f15e2310f1c08da96905923ad96e17197->enter($__internal_c3b51d25ff78ac2e6c406ebf5159e73f15e2310f1c08da96905923ad96e17197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0b645da2d37def2a1ccc22a6fd2b88ea0da7c41be8225f9c19f6f06e974e5afa->leave($__internal_0b645da2d37def2a1ccc22a6fd2b88ea0da7c41be8225f9c19f6f06e974e5afa_prof);

        
        $__internal_c3b51d25ff78ac2e6c406ebf5159e73f15e2310f1c08da96905923ad96e17197->leave($__internal_c3b51d25ff78ac2e6c406ebf5159e73f15e2310f1c08da96905923ad96e17197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
