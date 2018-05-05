<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0d48afd35a046e2b2baa6070668a4a3311cbcce476240d4c94916fabf34a99bd extends Twig_Template
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
        $__internal_2c598d90cf16bb9195e6010a140ca63ee979dbae320078dbc41933629d3b2ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c598d90cf16bb9195e6010a140ca63ee979dbae320078dbc41933629d3b2ed9->enter($__internal_2c598d90cf16bb9195e6010a140ca63ee979dbae320078dbc41933629d3b2ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2d10b7d17f158088cb438863f794e8372d0008d0fc30798b8d066018124ca6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d10b7d17f158088cb438863f794e8372d0008d0fc30798b8d066018124ca6a1->enter($__internal_2d10b7d17f158088cb438863f794e8372d0008d0fc30798b8d066018124ca6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2c598d90cf16bb9195e6010a140ca63ee979dbae320078dbc41933629d3b2ed9->leave($__internal_2c598d90cf16bb9195e6010a140ca63ee979dbae320078dbc41933629d3b2ed9_prof);

        
        $__internal_2d10b7d17f158088cb438863f794e8372d0008d0fc30798b8d066018124ca6a1->leave($__internal_2d10b7d17f158088cb438863f794e8372d0008d0fc30798b8d066018124ca6a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
