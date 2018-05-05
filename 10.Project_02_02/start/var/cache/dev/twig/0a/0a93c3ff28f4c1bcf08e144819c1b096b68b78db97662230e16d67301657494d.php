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
        $__internal_2083857ed627673d49b3b960aac1551a9dd979f4dfa06fc3ce0be47478d4c8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2083857ed627673d49b3b960aac1551a9dd979f4dfa06fc3ce0be47478d4c8a5->enter($__internal_2083857ed627673d49b3b960aac1551a9dd979f4dfa06fc3ce0be47478d4c8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c54b10f5a617f902120aeeca21c02623a49264bd2ed8b3d52991c6eb632aab6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54b10f5a617f902120aeeca21c02623a49264bd2ed8b3d52991c6eb632aab6c->enter($__internal_c54b10f5a617f902120aeeca21c02623a49264bd2ed8b3d52991c6eb632aab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2083857ed627673d49b3b960aac1551a9dd979f4dfa06fc3ce0be47478d4c8a5->leave($__internal_2083857ed627673d49b3b960aac1551a9dd979f4dfa06fc3ce0be47478d4c8a5_prof);

        
        $__internal_c54b10f5a617f902120aeeca21c02623a49264bd2ed8b3d52991c6eb632aab6c->leave($__internal_c54b10f5a617f902120aeeca21c02623a49264bd2ed8b3d52991c6eb632aab6c_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
