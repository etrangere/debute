<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74b6eb33431e1d2269b8a34ddf75e4ac32bc6551b85f60c0f8b13f43a4f556e8 extends Twig_Template
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
        $__internal_ef2d87d703f5a91b5dcc6634b9dee90055861871d91207a9d1afe7ca4146091e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2d87d703f5a91b5dcc6634b9dee90055861871d91207a9d1afe7ca4146091e->enter($__internal_ef2d87d703f5a91b5dcc6634b9dee90055861871d91207a9d1afe7ca4146091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_daff16ab497d5e068a2ce3b67125302faf5f1b18af43a8fc87c476f1db079513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daff16ab497d5e068a2ce3b67125302faf5f1b18af43a8fc87c476f1db079513->enter($__internal_daff16ab497d5e068a2ce3b67125302faf5f1b18af43a8fc87c476f1db079513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef2d87d703f5a91b5dcc6634b9dee90055861871d91207a9d1afe7ca4146091e->leave($__internal_ef2d87d703f5a91b5dcc6634b9dee90055861871d91207a9d1afe7ca4146091e_prof);

        
        $__internal_daff16ab497d5e068a2ce3b67125302faf5f1b18af43a8fc87c476f1db079513->leave($__internal_daff16ab497d5e068a2ce3b67125302faf5f1b18af43a8fc87c476f1db079513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
