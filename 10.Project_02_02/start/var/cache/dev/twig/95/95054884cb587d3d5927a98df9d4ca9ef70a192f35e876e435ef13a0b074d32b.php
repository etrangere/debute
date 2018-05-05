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
        $__internal_005213f41ecc39e6b1dd98ab1f0d9d26aeb3b6779d32756775a8a23ab5a2bed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005213f41ecc39e6b1dd98ab1f0d9d26aeb3b6779d32756775a8a23ab5a2bed0->enter($__internal_005213f41ecc39e6b1dd98ab1f0d9d26aeb3b6779d32756775a8a23ab5a2bed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ae352861743fc59f4dc943974441c1a1732e39dcf60c984f3dda153aabc8482e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae352861743fc59f4dc943974441c1a1732e39dcf60c984f3dda153aabc8482e->enter($__internal_ae352861743fc59f4dc943974441c1a1732e39dcf60c984f3dda153aabc8482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_005213f41ecc39e6b1dd98ab1f0d9d26aeb3b6779d32756775a8a23ab5a2bed0->leave($__internal_005213f41ecc39e6b1dd98ab1f0d9d26aeb3b6779d32756775a8a23ab5a2bed0_prof);

        
        $__internal_ae352861743fc59f4dc943974441c1a1732e39dcf60c984f3dda153aabc8482e->leave($__internal_ae352861743fc59f4dc943974441c1a1732e39dcf60c984f3dda153aabc8482e_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
