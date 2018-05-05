<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_a95b7e13d2dafd7e24e185df11bd2748e464d2bf489884fd88af7a49bc283c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95b7e13d2dafd7e24e185df11bd2748e464d2bf489884fd88af7a49bc283c9e->enter($__internal_a95b7e13d2dafd7e24e185df11bd2748e464d2bf489884fd88af7a49bc283c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eb846f870e158c823808090938134aa2e9e51aaab42831312148cfcd879dd290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb846f870e158c823808090938134aa2e9e51aaab42831312148cfcd879dd290->enter($__internal_eb846f870e158c823808090938134aa2e9e51aaab42831312148cfcd879dd290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a95b7e13d2dafd7e24e185df11bd2748e464d2bf489884fd88af7a49bc283c9e->leave($__internal_a95b7e13d2dafd7e24e185df11bd2748e464d2bf489884fd88af7a49bc283c9e_prof);

        
        $__internal_eb846f870e158c823808090938134aa2e9e51aaab42831312148cfcd879dd290->leave($__internal_eb846f870e158c823808090938134aa2e9e51aaab42831312148cfcd879dd290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
