<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d7fc57ec57976c834bdabbe0692a6b93448dc3d151726d1fff2da8573abd814 extends Twig_Template
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
        $__internal_ccdb2b5541e416d327ae8f7eaa97349ad4bc79eaec3c8ac7bdf9724ed86e90f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdb2b5541e416d327ae8f7eaa97349ad4bc79eaec3c8ac7bdf9724ed86e90f6->enter($__internal_ccdb2b5541e416d327ae8f7eaa97349ad4bc79eaec3c8ac7bdf9724ed86e90f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f7286a430b4beb6bf2b82b7abcd8e449999c9287064eacc009663fd1090289d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7286a430b4beb6bf2b82b7abcd8e449999c9287064eacc009663fd1090289d1->enter($__internal_f7286a430b4beb6bf2b82b7abcd8e449999c9287064eacc009663fd1090289d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ccdb2b5541e416d327ae8f7eaa97349ad4bc79eaec3c8ac7bdf9724ed86e90f6->leave($__internal_ccdb2b5541e416d327ae8f7eaa97349ad4bc79eaec3c8ac7bdf9724ed86e90f6_prof);

        
        $__internal_f7286a430b4beb6bf2b82b7abcd8e449999c9287064eacc009663fd1090289d1->leave($__internal_f7286a430b4beb6bf2b82b7abcd8e449999c9287064eacc009663fd1090289d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
