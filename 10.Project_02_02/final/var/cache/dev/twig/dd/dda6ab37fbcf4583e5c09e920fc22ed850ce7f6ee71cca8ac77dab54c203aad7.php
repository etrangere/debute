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
        $__internal_993858627d7166100444d64ae3484b9254345847119c3a69583b1de3783f7824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993858627d7166100444d64ae3484b9254345847119c3a69583b1de3783f7824->enter($__internal_993858627d7166100444d64ae3484b9254345847119c3a69583b1de3783f7824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6807bf4b375aa72c96044e1ba718de05f576eb434b29ec56fca96148b6ded33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6807bf4b375aa72c96044e1ba718de05f576eb434b29ec56fca96148b6ded33b->enter($__internal_6807bf4b375aa72c96044e1ba718de05f576eb434b29ec56fca96148b6ded33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_993858627d7166100444d64ae3484b9254345847119c3a69583b1de3783f7824->leave($__internal_993858627d7166100444d64ae3484b9254345847119c3a69583b1de3783f7824_prof);

        
        $__internal_6807bf4b375aa72c96044e1ba718de05f576eb434b29ec56fca96148b6ded33b->leave($__internal_6807bf4b375aa72c96044e1ba718de05f576eb434b29ec56fca96148b6ded33b_prof);

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
", "@Framework/Form/attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
