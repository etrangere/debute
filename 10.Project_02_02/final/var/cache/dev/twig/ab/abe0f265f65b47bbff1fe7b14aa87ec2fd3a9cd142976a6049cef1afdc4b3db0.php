<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_32542f1243ae1ad188159dae01efca73c3fa07f22d14876dc22485d85b289cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32542f1243ae1ad188159dae01efca73c3fa07f22d14876dc22485d85b289cb1->enter($__internal_32542f1243ae1ad188159dae01efca73c3fa07f22d14876dc22485d85b289cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_99d918b691ddb8d468b2d7741413b5af9d12840148b2af3669cae1fb7f941885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d918b691ddb8d468b2d7741413b5af9d12840148b2af3669cae1fb7f941885->enter($__internal_99d918b691ddb8d468b2d7741413b5af9d12840148b2af3669cae1fb7f941885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32542f1243ae1ad188159dae01efca73c3fa07f22d14876dc22485d85b289cb1->leave($__internal_32542f1243ae1ad188159dae01efca73c3fa07f22d14876dc22485d85b289cb1_prof);

        
        $__internal_99d918b691ddb8d468b2d7741413b5af9d12840148b2af3669cae1fb7f941885->leave($__internal_99d918b691ddb8d468b2d7741413b5af9d12840148b2af3669cae1fb7f941885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
