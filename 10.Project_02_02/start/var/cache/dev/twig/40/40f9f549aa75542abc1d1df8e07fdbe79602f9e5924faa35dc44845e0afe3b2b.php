<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7bcdcbd17d7e3cac9211ac93d7e56b546580c775021defa5590ab503fe10c87c extends Twig_Template
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
        $__internal_2f1d49f121562960023b36941171eacb61f0e24ad2f9f2ccdb2044a602d64636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1d49f121562960023b36941171eacb61f0e24ad2f9f2ccdb2044a602d64636->enter($__internal_2f1d49f121562960023b36941171eacb61f0e24ad2f9f2ccdb2044a602d64636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3d45933c2c2b890bc511ae8b6ac1077783f393347fcdb3705cb778e9c13571e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d45933c2c2b890bc511ae8b6ac1077783f393347fcdb3705cb778e9c13571e8->enter($__internal_3d45933c2c2b890bc511ae8b6ac1077783f393347fcdb3705cb778e9c13571e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2f1d49f121562960023b36941171eacb61f0e24ad2f9f2ccdb2044a602d64636->leave($__internal_2f1d49f121562960023b36941171eacb61f0e24ad2f9f2ccdb2044a602d64636_prof);

        
        $__internal_3d45933c2c2b890bc511ae8b6ac1077783f393347fcdb3705cb778e9c13571e8->leave($__internal_3d45933c2c2b890bc511ae8b6ac1077783f393347fcdb3705cb778e9c13571e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
