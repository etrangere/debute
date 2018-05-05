<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e4c86ebf21fa1de0698f826157bf5325ac9095d891346e86322a0006806767c6 extends Twig_Template
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
        $__internal_02144056d363c351472e8721f6b50b335853ba30295e1ec12740f5302ef038c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02144056d363c351472e8721f6b50b335853ba30295e1ec12740f5302ef038c1->enter($__internal_02144056d363c351472e8721f6b50b335853ba30295e1ec12740f5302ef038c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bdf593ef86bbd8cc11bdd87fee11b1c4028d8c8b25f8b865762dcc40c2627c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf593ef86bbd8cc11bdd87fee11b1c4028d8c8b25f8b865762dcc40c2627c3a->enter($__internal_bdf593ef86bbd8cc11bdd87fee11b1c4028d8c8b25f8b865762dcc40c2627c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_02144056d363c351472e8721f6b50b335853ba30295e1ec12740f5302ef038c1->leave($__internal_02144056d363c351472e8721f6b50b335853ba30295e1ec12740f5302ef038c1_prof);

        
        $__internal_bdf593ef86bbd8cc11bdd87fee11b1c4028d8c8b25f8b865762dcc40c2627c3a->leave($__internal_bdf593ef86bbd8cc11bdd87fee11b1c4028d8c8b25f8b865762dcc40c2627c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
