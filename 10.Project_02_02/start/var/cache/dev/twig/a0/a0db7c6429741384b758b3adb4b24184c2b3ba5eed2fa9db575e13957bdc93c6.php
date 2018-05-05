<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7de574f9432a752b7aa1407aee3fe315c0f1aad2d8fb1f71d69a578f2ffc85c extends Twig_Template
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
        $__internal_16046cb4d6066e094605d555b2e5e776172d55b972e569ec1030f7a979b262e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16046cb4d6066e094605d555b2e5e776172d55b972e569ec1030f7a979b262e2->enter($__internal_16046cb4d6066e094605d555b2e5e776172d55b972e569ec1030f7a979b262e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2bd5b05fc16cc1c7ec477b0c71b40442fb24e51e8d59186ef568287a4e23911a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd5b05fc16cc1c7ec477b0c71b40442fb24e51e8d59186ef568287a4e23911a->enter($__internal_2bd5b05fc16cc1c7ec477b0c71b40442fb24e51e8d59186ef568287a4e23911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_16046cb4d6066e094605d555b2e5e776172d55b972e569ec1030f7a979b262e2->leave($__internal_16046cb4d6066e094605d555b2e5e776172d55b972e569ec1030f7a979b262e2_prof);

        
        $__internal_2bd5b05fc16cc1c7ec477b0c71b40442fb24e51e8d59186ef568287a4e23911a->leave($__internal_2bd5b05fc16cc1c7ec477b0c71b40442fb24e51e8d59186ef568287a4e23911a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
