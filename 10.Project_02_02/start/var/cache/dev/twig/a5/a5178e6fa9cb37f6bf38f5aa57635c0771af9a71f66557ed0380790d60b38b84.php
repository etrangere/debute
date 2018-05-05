<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_3b2bdae2cc357c4274b0331b4184ff23ad52558ed9b6672ae317e24e8506d1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2bdae2cc357c4274b0331b4184ff23ad52558ed9b6672ae317e24e8506d1ec->enter($__internal_3b2bdae2cc357c4274b0331b4184ff23ad52558ed9b6672ae317e24e8506d1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7cfaf971ced2387352967329e56adc7a7044dc02cb594d7da32147b971182333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfaf971ced2387352967329e56adc7a7044dc02cb594d7da32147b971182333->enter($__internal_7cfaf971ced2387352967329e56adc7a7044dc02cb594d7da32147b971182333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3b2bdae2cc357c4274b0331b4184ff23ad52558ed9b6672ae317e24e8506d1ec->leave($__internal_3b2bdae2cc357c4274b0331b4184ff23ad52558ed9b6672ae317e24e8506d1ec_prof);

        
        $__internal_7cfaf971ced2387352967329e56adc7a7044dc02cb594d7da32147b971182333->leave($__internal_7cfaf971ced2387352967329e56adc7a7044dc02cb594d7da32147b971182333_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
