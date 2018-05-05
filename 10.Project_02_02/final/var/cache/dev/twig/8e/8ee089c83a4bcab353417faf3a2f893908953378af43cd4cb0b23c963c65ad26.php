<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6c30209a0ee35b37683e288466f63f773d44181ece6d4f921f4433a2ec8b871 extends Twig_Template
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
        $__internal_08b7408d9c40297937d063d52d79bbedec3948656c094b29e92b0ae8e130c088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b7408d9c40297937d063d52d79bbedec3948656c094b29e92b0ae8e130c088->enter($__internal_08b7408d9c40297937d063d52d79bbedec3948656c094b29e92b0ae8e130c088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fa443c39246f5e61b0eddf3978f029419f933f8bc26b83e90175eb4a119ef92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa443c39246f5e61b0eddf3978f029419f933f8bc26b83e90175eb4a119ef92b->enter($__internal_fa443c39246f5e61b0eddf3978f029419f933f8bc26b83e90175eb4a119ef92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_08b7408d9c40297937d063d52d79bbedec3948656c094b29e92b0ae8e130c088->leave($__internal_08b7408d9c40297937d063d52d79bbedec3948656c094b29e92b0ae8e130c088_prof);

        
        $__internal_fa443c39246f5e61b0eddf3978f029419f933f8bc26b83e90175eb4a119ef92b->leave($__internal_fa443c39246f5e61b0eddf3978f029419f933f8bc26b83e90175eb4a119ef92b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
