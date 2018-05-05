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
        $__internal_51db3808149f3addbee14b1e10156d3cc6bcccca0bcf963471fe77c17f6ae0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51db3808149f3addbee14b1e10156d3cc6bcccca0bcf963471fe77c17f6ae0f6->enter($__internal_51db3808149f3addbee14b1e10156d3cc6bcccca0bcf963471fe77c17f6ae0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b6a9196238c5ac0d7cbae025ce34ce79e61688b79c6560c252ee9e8c1ae1785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a9196238c5ac0d7cbae025ce34ce79e61688b79c6560c252ee9e8c1ae1785c->enter($__internal_b6a9196238c5ac0d7cbae025ce34ce79e61688b79c6560c252ee9e8c1ae1785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_51db3808149f3addbee14b1e10156d3cc6bcccca0bcf963471fe77c17f6ae0f6->leave($__internal_51db3808149f3addbee14b1e10156d3cc6bcccca0bcf963471fe77c17f6ae0f6_prof);

        
        $__internal_b6a9196238c5ac0d7cbae025ce34ce79e61688b79c6560c252ee9e8c1ae1785c->leave($__internal_b6a9196238c5ac0d7cbae025ce34ce79e61688b79c6560c252ee9e8c1ae1785c_prof);

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
", "@Framework/Form/search_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
