<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_603bacef8113388edf030b45db8445b8bdbdc4bc5d6e923f92a38677d433a12b extends Twig_Template
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
        $__internal_64c02505929ca8f5625c16cc4aa0e169bd6c4fef8d4f81fdfc04eb61ef98faad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c02505929ca8f5625c16cc4aa0e169bd6c4fef8d4f81fdfc04eb61ef98faad->enter($__internal_64c02505929ca8f5625c16cc4aa0e169bd6c4fef8d4f81fdfc04eb61ef98faad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cde688f357e2e79d5c37a03c6638b1b1879616530d7742ddf1838a4898d91f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde688f357e2e79d5c37a03c6638b1b1879616530d7742ddf1838a4898d91f47->enter($__internal_cde688f357e2e79d5c37a03c6638b1b1879616530d7742ddf1838a4898d91f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64c02505929ca8f5625c16cc4aa0e169bd6c4fef8d4f81fdfc04eb61ef98faad->leave($__internal_64c02505929ca8f5625c16cc4aa0e169bd6c4fef8d4f81fdfc04eb61ef98faad_prof);

        
        $__internal_cde688f357e2e79d5c37a03c6638b1b1879616530d7742ddf1838a4898d91f47->leave($__internal_cde688f357e2e79d5c37a03c6638b1b1879616530d7742ddf1838a4898d91f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
