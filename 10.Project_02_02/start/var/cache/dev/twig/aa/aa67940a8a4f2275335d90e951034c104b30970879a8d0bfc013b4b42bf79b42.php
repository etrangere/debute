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
        $__internal_1e54d2c34e8c6f39d017566bc9e5f2e33caabe7457a6cf73cd700a7c2ee2fc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e54d2c34e8c6f39d017566bc9e5f2e33caabe7457a6cf73cd700a7c2ee2fc31->enter($__internal_1e54d2c34e8c6f39d017566bc9e5f2e33caabe7457a6cf73cd700a7c2ee2fc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bb7294e123abf6cff386c827a40eb8872644c41d04a849f3b7a37114c6b677b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7294e123abf6cff386c827a40eb8872644c41d04a849f3b7a37114c6b677b4->enter($__internal_bb7294e123abf6cff386c827a40eb8872644c41d04a849f3b7a37114c6b677b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1e54d2c34e8c6f39d017566bc9e5f2e33caabe7457a6cf73cd700a7c2ee2fc31->leave($__internal_1e54d2c34e8c6f39d017566bc9e5f2e33caabe7457a6cf73cd700a7c2ee2fc31_prof);

        
        $__internal_bb7294e123abf6cff386c827a40eb8872644c41d04a849f3b7a37114c6b677b4->leave($__internal_bb7294e123abf6cff386c827a40eb8872644c41d04a849f3b7a37114c6b677b4_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
