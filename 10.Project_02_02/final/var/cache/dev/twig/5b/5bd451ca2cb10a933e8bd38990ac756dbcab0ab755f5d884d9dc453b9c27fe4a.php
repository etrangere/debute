<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_67ed0b308a3b20af32497669367b6f76949cf51537563c750d886bdd9c14e7ab extends Twig_Template
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
        $__internal_1ba7dcff8e1e26ecd5a56469741b74a326283bbcb637713da4deeb8a1f45a335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba7dcff8e1e26ecd5a56469741b74a326283bbcb637713da4deeb8a1f45a335->enter($__internal_1ba7dcff8e1e26ecd5a56469741b74a326283bbcb637713da4deeb8a1f45a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_61a49aa755b710d4b87608f46de0b0713bc8e971ad5ca874f21b7c752eb37f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a49aa755b710d4b87608f46de0b0713bc8e971ad5ca874f21b7c752eb37f13->enter($__internal_61a49aa755b710d4b87608f46de0b0713bc8e971ad5ca874f21b7c752eb37f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1ba7dcff8e1e26ecd5a56469741b74a326283bbcb637713da4deeb8a1f45a335->leave($__internal_1ba7dcff8e1e26ecd5a56469741b74a326283bbcb637713da4deeb8a1f45a335_prof);

        
        $__internal_61a49aa755b710d4b87608f46de0b0713bc8e971ad5ca874f21b7c752eb37f13->leave($__internal_61a49aa755b710d4b87608f46de0b0713bc8e971ad5ca874f21b7c752eb37f13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
