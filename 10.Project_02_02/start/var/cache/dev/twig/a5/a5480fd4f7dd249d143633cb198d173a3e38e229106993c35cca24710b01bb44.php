<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8135d1f43ee6b5a5055b85c1b2dc042c7acc2eb5d13d68e6f011013f80d50cbb extends Twig_Template
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
        $__internal_89d8c8e8c99e62aed0f0bfed465c523ebce4d7b9b15f52ee01c390ed7a6deb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d8c8e8c99e62aed0f0bfed465c523ebce4d7b9b15f52ee01c390ed7a6deb5e->enter($__internal_89d8c8e8c99e62aed0f0bfed465c523ebce4d7b9b15f52ee01c390ed7a6deb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_eafbeed831a3c44c2ebce8f291d3ad3d13006501bea53623260ae200e0317494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafbeed831a3c44c2ebce8f291d3ad3d13006501bea53623260ae200e0317494->enter($__internal_eafbeed831a3c44c2ebce8f291d3ad3d13006501bea53623260ae200e0317494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_89d8c8e8c99e62aed0f0bfed465c523ebce4d7b9b15f52ee01c390ed7a6deb5e->leave($__internal_89d8c8e8c99e62aed0f0bfed465c523ebce4d7b9b15f52ee01c390ed7a6deb5e_prof);

        
        $__internal_eafbeed831a3c44c2ebce8f291d3ad3d13006501bea53623260ae200e0317494->leave($__internal_eafbeed831a3c44c2ebce8f291d3ad3d13006501bea53623260ae200e0317494_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
