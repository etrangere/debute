<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6fab1bb7aeb690b637254b9f083a29f2bbfa7ca82d585cf8d5f5672c35e23dba extends Twig_Template
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
        $__internal_924eb675e66d20bb4dfc2df952105917172a544f5aba76b169d2f111affe830d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924eb675e66d20bb4dfc2df952105917172a544f5aba76b169d2f111affe830d->enter($__internal_924eb675e66d20bb4dfc2df952105917172a544f5aba76b169d2f111affe830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e928b0e3f216814cfefe86001a21b978a961072026f789dd5438b0615eb48a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e928b0e3f216814cfefe86001a21b978a961072026f789dd5438b0615eb48a50->enter($__internal_e928b0e3f216814cfefe86001a21b978a961072026f789dd5438b0615eb48a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_924eb675e66d20bb4dfc2df952105917172a544f5aba76b169d2f111affe830d->leave($__internal_924eb675e66d20bb4dfc2df952105917172a544f5aba76b169d2f111affe830d_prof);

        
        $__internal_e928b0e3f216814cfefe86001a21b978a961072026f789dd5438b0615eb48a50->leave($__internal_e928b0e3f216814cfefe86001a21b978a961072026f789dd5438b0615eb48a50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
