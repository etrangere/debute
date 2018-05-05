<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7bcdcbd17d7e3cac9211ac93d7e56b546580c775021defa5590ab503fe10c87c extends Twig_Template
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
        $__internal_fad83f6f39c982997855975843c63bb3694c29d6bb41150011fdce3af5c1312f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad83f6f39c982997855975843c63bb3694c29d6bb41150011fdce3af5c1312f->enter($__internal_fad83f6f39c982997855975843c63bb3694c29d6bb41150011fdce3af5c1312f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0bf86e54a4c320a0ca370703606481ddacef626507436ffcc31bd6c0a0d281d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf86e54a4c320a0ca370703606481ddacef626507436ffcc31bd6c0a0d281d0->enter($__internal_0bf86e54a4c320a0ca370703606481ddacef626507436ffcc31bd6c0a0d281d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fad83f6f39c982997855975843c63bb3694c29d6bb41150011fdce3af5c1312f->leave($__internal_fad83f6f39c982997855975843c63bb3694c29d6bb41150011fdce3af5c1312f_prof);

        
        $__internal_0bf86e54a4c320a0ca370703606481ddacef626507436ffcc31bd6c0a0d281d0->leave($__internal_0bf86e54a4c320a0ca370703606481ddacef626507436ffcc31bd6c0a0d281d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
