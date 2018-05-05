<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ef369a0eeb937e09fc70afea8044e9a68d1b1c0247bd7907f7eb3b45eaa1377 extends Twig_Template
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
        $__internal_421b21b02df6d7dcf9408256847fa8b72b8a7499e91632f2b09f0a4b8370c6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421b21b02df6d7dcf9408256847fa8b72b8a7499e91632f2b09f0a4b8370c6a9->enter($__internal_421b21b02df6d7dcf9408256847fa8b72b8a7499e91632f2b09f0a4b8370c6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5bfff69b7783f2902e467fb54ac3aad04bcf6dcae311efd362256b83e2caba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfff69b7783f2902e467fb54ac3aad04bcf6dcae311efd362256b83e2caba90->enter($__internal_5bfff69b7783f2902e467fb54ac3aad04bcf6dcae311efd362256b83e2caba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_421b21b02df6d7dcf9408256847fa8b72b8a7499e91632f2b09f0a4b8370c6a9->leave($__internal_421b21b02df6d7dcf9408256847fa8b72b8a7499e91632f2b09f0a4b8370c6a9_prof);

        
        $__internal_5bfff69b7783f2902e467fb54ac3aad04bcf6dcae311efd362256b83e2caba90->leave($__internal_5bfff69b7783f2902e467fb54ac3aad04bcf6dcae311efd362256b83e2caba90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
