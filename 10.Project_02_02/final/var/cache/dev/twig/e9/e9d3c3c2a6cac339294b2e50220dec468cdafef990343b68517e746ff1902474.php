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
        $__internal_37a196f789a7770cfd3d9ef2e9d687ab07777b3f57b4bca3c6cfa5223e9d9443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a196f789a7770cfd3d9ef2e9d687ab07777b3f57b4bca3c6cfa5223e9d9443->enter($__internal_37a196f789a7770cfd3d9ef2e9d687ab07777b3f57b4bca3c6cfa5223e9d9443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_bf14525c330f5567b34e1429115ad9ad622441241bd84dd292ae4a96807d7380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf14525c330f5567b34e1429115ad9ad622441241bd84dd292ae4a96807d7380->enter($__internal_bf14525c330f5567b34e1429115ad9ad622441241bd84dd292ae4a96807d7380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_37a196f789a7770cfd3d9ef2e9d687ab07777b3f57b4bca3c6cfa5223e9d9443->leave($__internal_37a196f789a7770cfd3d9ef2e9d687ab07777b3f57b4bca3c6cfa5223e9d9443_prof);

        
        $__internal_bf14525c330f5567b34e1429115ad9ad622441241bd84dd292ae4a96807d7380->leave($__internal_bf14525c330f5567b34e1429115ad9ad622441241bd84dd292ae4a96807d7380_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
