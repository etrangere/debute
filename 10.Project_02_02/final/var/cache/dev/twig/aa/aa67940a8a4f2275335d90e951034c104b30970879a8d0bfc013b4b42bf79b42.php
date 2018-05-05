<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3bebc8679f9932a3df7e07ad45f5a9b8adbda48f5750ff05169b957a8855987c extends Twig_Template
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
        $__internal_4da2f577c6a8f7c86772df6adc15c0101fe508601c412fd37113dc663e0bd407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da2f577c6a8f7c86772df6adc15c0101fe508601c412fd37113dc663e0bd407->enter($__internal_4da2f577c6a8f7c86772df6adc15c0101fe508601c412fd37113dc663e0bd407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7777b7edeca81b3f591f52153e85b19a5ca24a0961f5bb679637a9074f3bc3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7777b7edeca81b3f591f52153e85b19a5ca24a0961f5bb679637a9074f3bc3e2->enter($__internal_7777b7edeca81b3f591f52153e85b19a5ca24a0961f5bb679637a9074f3bc3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4da2f577c6a8f7c86772df6adc15c0101fe508601c412fd37113dc663e0bd407->leave($__internal_4da2f577c6a8f7c86772df6adc15c0101fe508601c412fd37113dc663e0bd407_prof);

        
        $__internal_7777b7edeca81b3f591f52153e85b19a5ca24a0961f5bb679637a9074f3bc3e2->leave($__internal_7777b7edeca81b3f591f52153e85b19a5ca24a0961f5bb679637a9074f3bc3e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
