<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c416650d2b1e5ef1a8e7ebdf9f82637796b29a736f060a449d843af5f5b66e1 extends Twig_Template
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
        $__internal_2903972ee961684cf34e9e40b28e4d15fdab9a59c6e5bbe35db95e1b29bf9bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2903972ee961684cf34e9e40b28e4d15fdab9a59c6e5bbe35db95e1b29bf9bf6->enter($__internal_2903972ee961684cf34e9e40b28e4d15fdab9a59c6e5bbe35db95e1b29bf9bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c938ae93b5d1ff2ec96225f60053ddf505e7057ad2bd32685f015e9eee7208c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c938ae93b5d1ff2ec96225f60053ddf505e7057ad2bd32685f015e9eee7208c5->enter($__internal_c938ae93b5d1ff2ec96225f60053ddf505e7057ad2bd32685f015e9eee7208c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2903972ee961684cf34e9e40b28e4d15fdab9a59c6e5bbe35db95e1b29bf9bf6->leave($__internal_2903972ee961684cf34e9e40b28e4d15fdab9a59c6e5bbe35db95e1b29bf9bf6_prof);

        
        $__internal_c938ae93b5d1ff2ec96225f60053ddf505e7057ad2bd32685f015e9eee7208c5->leave($__internal_c938ae93b5d1ff2ec96225f60053ddf505e7057ad2bd32685f015e9eee7208c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
