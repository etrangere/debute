<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_d6c88540e3011cda17e1ff91eedb07c930a5fb4c3c463237d73e64d7fa824111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c88540e3011cda17e1ff91eedb07c930a5fb4c3c463237d73e64d7fa824111->enter($__internal_d6c88540e3011cda17e1ff91eedb07c930a5fb4c3c463237d73e64d7fa824111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_356e1c4fb72fd7ef375994f9b0db7208cb893ef5889e2e323fc421c548838e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356e1c4fb72fd7ef375994f9b0db7208cb893ef5889e2e323fc421c548838e86->enter($__internal_356e1c4fb72fd7ef375994f9b0db7208cb893ef5889e2e323fc421c548838e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d6c88540e3011cda17e1ff91eedb07c930a5fb4c3c463237d73e64d7fa824111->leave($__internal_d6c88540e3011cda17e1ff91eedb07c930a5fb4c3c463237d73e64d7fa824111_prof);

        
        $__internal_356e1c4fb72fd7ef375994f9b0db7208cb893ef5889e2e323fc421c548838e86->leave($__internal_356e1c4fb72fd7ef375994f9b0db7208cb893ef5889e2e323fc421c548838e86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
