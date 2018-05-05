<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_560e8b52d178a5a334d440485f5e98e60f11474ae76e82c895bc816739d46ed5 extends Twig_Template
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
        $__internal_f501fc3ac52a16256be6f1acdc800a03357e8a903363583c3c56c6504b0b92fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f501fc3ac52a16256be6f1acdc800a03357e8a903363583c3c56c6504b0b92fe->enter($__internal_f501fc3ac52a16256be6f1acdc800a03357e8a903363583c3c56c6504b0b92fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2f348920aa5a4de83b1d4eb333a54a4389b76524e097fa38d8c97765693e1a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f348920aa5a4de83b1d4eb333a54a4389b76524e097fa38d8c97765693e1a5a->enter($__internal_2f348920aa5a4de83b1d4eb333a54a4389b76524e097fa38d8c97765693e1a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f501fc3ac52a16256be6f1acdc800a03357e8a903363583c3c56c6504b0b92fe->leave($__internal_f501fc3ac52a16256be6f1acdc800a03357e8a903363583c3c56c6504b0b92fe_prof);

        
        $__internal_2f348920aa5a4de83b1d4eb333a54a4389b76524e097fa38d8c97765693e1a5a->leave($__internal_2f348920aa5a4de83b1d4eb333a54a4389b76524e097fa38d8c97765693e1a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
