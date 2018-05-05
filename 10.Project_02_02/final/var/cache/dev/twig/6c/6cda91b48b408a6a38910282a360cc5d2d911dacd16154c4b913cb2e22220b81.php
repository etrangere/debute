<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_1a212801e8bdd28bb333eb0a2a9e4cb9dfe087690863e3b20db4cb49ca837e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a212801e8bdd28bb333eb0a2a9e4cb9dfe087690863e3b20db4cb49ca837e16->enter($__internal_1a212801e8bdd28bb333eb0a2a9e4cb9dfe087690863e3b20db4cb49ca837e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a885cfba35c3b40bcbd73399787fafe41756ee3b8abc66d4e51173cdf6d60779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a885cfba35c3b40bcbd73399787fafe41756ee3b8abc66d4e51173cdf6d60779->enter($__internal_a885cfba35c3b40bcbd73399787fafe41756ee3b8abc66d4e51173cdf6d60779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1a212801e8bdd28bb333eb0a2a9e4cb9dfe087690863e3b20db4cb49ca837e16->leave($__internal_1a212801e8bdd28bb333eb0a2a9e4cb9dfe087690863e3b20db4cb49ca837e16_prof);

        
        $__internal_a885cfba35c3b40bcbd73399787fafe41756ee3b8abc66d4e51173cdf6d60779->leave($__internal_a885cfba35c3b40bcbd73399787fafe41756ee3b8abc66d4e51173cdf6d60779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
