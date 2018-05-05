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
        $__internal_c67a96bd651ae7ced5df98fa0fa50033d2658fb45e08f670121c6c56977cae5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67a96bd651ae7ced5df98fa0fa50033d2658fb45e08f670121c6c56977cae5d->enter($__internal_c67a96bd651ae7ced5df98fa0fa50033d2658fb45e08f670121c6c56977cae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_978377a38d70acb9e2ecdc7f828f5f6f0c6b5773e89456f6498f624e6743d994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978377a38d70acb9e2ecdc7f828f5f6f0c6b5773e89456f6498f624e6743d994->enter($__internal_978377a38d70acb9e2ecdc7f828f5f6f0c6b5773e89456f6498f624e6743d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_c67a96bd651ae7ced5df98fa0fa50033d2658fb45e08f670121c6c56977cae5d->leave($__internal_c67a96bd651ae7ced5df98fa0fa50033d2658fb45e08f670121c6c56977cae5d_prof);

        
        $__internal_978377a38d70acb9e2ecdc7f828f5f6f0c6b5773e89456f6498f624e6743d994->leave($__internal_978377a38d70acb9e2ecdc7f828f5f6f0c6b5773e89456f6498f624e6743d994_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
