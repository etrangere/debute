<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_117d7e6ba912c8024a0275b56ed8553d86fb57108b92f907017796efd08f20dd extends Twig_Template
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
        $__internal_5e14bba706eab64413e60a9350a6266fec8f386d0f43ec8b73e422366ccf7f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e14bba706eab64413e60a9350a6266fec8f386d0f43ec8b73e422366ccf7f98->enter($__internal_5e14bba706eab64413e60a9350a6266fec8f386d0f43ec8b73e422366ccf7f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6920ea0400d59582995e5cdf1f897612214758b053442de66ef8395c5e507b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6920ea0400d59582995e5cdf1f897612214758b053442de66ef8395c5e507b3e->enter($__internal_6920ea0400d59582995e5cdf1f897612214758b053442de66ef8395c5e507b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5e14bba706eab64413e60a9350a6266fec8f386d0f43ec8b73e422366ccf7f98->leave($__internal_5e14bba706eab64413e60a9350a6266fec8f386d0f43ec8b73e422366ccf7f98_prof);

        
        $__internal_6920ea0400d59582995e5cdf1f897612214758b053442de66ef8395c5e507b3e->leave($__internal_6920ea0400d59582995e5cdf1f897612214758b053442de66ef8395c5e507b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
