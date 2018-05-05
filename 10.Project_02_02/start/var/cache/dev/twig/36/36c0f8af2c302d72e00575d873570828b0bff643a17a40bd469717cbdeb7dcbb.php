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
        $__internal_ad86932a22d95c96e73330e3e751c7c2439936e56fae6c46fb0b2dff4be0639f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad86932a22d95c96e73330e3e751c7c2439936e56fae6c46fb0b2dff4be0639f->enter($__internal_ad86932a22d95c96e73330e3e751c7c2439936e56fae6c46fb0b2dff4be0639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5e422bc302ba482fca694c1aea184ebff9dbbe709ae40cca33f15ae5e91baba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e422bc302ba482fca694c1aea184ebff9dbbe709ae40cca33f15ae5e91baba5->enter($__internal_5e422bc302ba482fca694c1aea184ebff9dbbe709ae40cca33f15ae5e91baba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ad86932a22d95c96e73330e3e751c7c2439936e56fae6c46fb0b2dff4be0639f->leave($__internal_ad86932a22d95c96e73330e3e751c7c2439936e56fae6c46fb0b2dff4be0639f_prof);

        
        $__internal_5e422bc302ba482fca694c1aea184ebff9dbbe709ae40cca33f15ae5e91baba5->leave($__internal_5e422bc302ba482fca694c1aea184ebff9dbbe709ae40cca33f15ae5e91baba5_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
