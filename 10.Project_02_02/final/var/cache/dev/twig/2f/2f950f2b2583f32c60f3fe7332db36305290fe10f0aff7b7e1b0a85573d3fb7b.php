<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c894797157bdf3a7c1341bccd7bceff6a1f87da3d39b5477103fd25bd29f0c9b extends Twig_Template
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
        $__internal_e6dfe4103660370e4fde5e35a9bd0d3269001939663bd62494c609d23b8bf26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dfe4103660370e4fde5e35a9bd0d3269001939663bd62494c609d23b8bf26e->enter($__internal_e6dfe4103660370e4fde5e35a9bd0d3269001939663bd62494c609d23b8bf26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3b4bb8ba3afb28fe9ff91bebe60bb25b8358c95293273b95bffb03f6c3838563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4bb8ba3afb28fe9ff91bebe60bb25b8358c95293273b95bffb03f6c3838563->enter($__internal_3b4bb8ba3afb28fe9ff91bebe60bb25b8358c95293273b95bffb03f6c3838563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e6dfe4103660370e4fde5e35a9bd0d3269001939663bd62494c609d23b8bf26e->leave($__internal_e6dfe4103660370e4fde5e35a9bd0d3269001939663bd62494c609d23b8bf26e_prof);

        
        $__internal_3b4bb8ba3afb28fe9ff91bebe60bb25b8358c95293273b95bffb03f6c3838563->leave($__internal_3b4bb8ba3afb28fe9ff91bebe60bb25b8358c95293273b95bffb03f6c3838563_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
