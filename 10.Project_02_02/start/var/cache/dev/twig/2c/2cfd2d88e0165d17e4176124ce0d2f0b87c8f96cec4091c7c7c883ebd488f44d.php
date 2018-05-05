<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_126ff0bbf48f3cb1013d0339b5f96018de579560c1e7852b08a3b1a3badc6868 extends Twig_Template
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
        $__internal_3ff99a38dab6bfecfa69025f6582b8d6b8f3d70037e0d82ec3888d5afc5508ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff99a38dab6bfecfa69025f6582b8d6b8f3d70037e0d82ec3888d5afc5508ef->enter($__internal_3ff99a38dab6bfecfa69025f6582b8d6b8f3d70037e0d82ec3888d5afc5508ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c26d5034e26799ecf6af0d456af57fcecc0b317cc110a8998c41cb2ebd4d9b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26d5034e26799ecf6af0d456af57fcecc0b317cc110a8998c41cb2ebd4d9b1a->enter($__internal_c26d5034e26799ecf6af0d456af57fcecc0b317cc110a8998c41cb2ebd4d9b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3ff99a38dab6bfecfa69025f6582b8d6b8f3d70037e0d82ec3888d5afc5508ef->leave($__internal_3ff99a38dab6bfecfa69025f6582b8d6b8f3d70037e0d82ec3888d5afc5508ef_prof);

        
        $__internal_c26d5034e26799ecf6af0d456af57fcecc0b317cc110a8998c41cb2ebd4d9b1a->leave($__internal_c26d5034e26799ecf6af0d456af57fcecc0b317cc110a8998c41cb2ebd4d9b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
