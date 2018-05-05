<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_126ff0bbf48f3cb1013d0339b5f96018de579560c1e7852b08a3b1a3badc6868 extends Twig_Template
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
        $__internal_cc787b09280c744ea42ddfb0bc2ebb53d482dac35e467d6b87f0b097c5c3fe72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc787b09280c744ea42ddfb0bc2ebb53d482dac35e467d6b87f0b097c5c3fe72->enter($__internal_cc787b09280c744ea42ddfb0bc2ebb53d482dac35e467d6b87f0b097c5c3fe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_680f321c7367946dfb50796b7e29a2cbbcb8b02ec92cb8c67b0b0ebd97b33637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680f321c7367946dfb50796b7e29a2cbbcb8b02ec92cb8c67b0b0ebd97b33637->enter($__internal_680f321c7367946dfb50796b7e29a2cbbcb8b02ec92cb8c67b0b0ebd97b33637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc787b09280c744ea42ddfb0bc2ebb53d482dac35e467d6b87f0b097c5c3fe72->leave($__internal_cc787b09280c744ea42ddfb0bc2ebb53d482dac35e467d6b87f0b097c5c3fe72_prof);

        
        $__internal_680f321c7367946dfb50796b7e29a2cbbcb8b02ec92cb8c67b0b0ebd97b33637->leave($__internal_680f321c7367946dfb50796b7e29a2cbbcb8b02ec92cb8c67b0b0ebd97b33637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
