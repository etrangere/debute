<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_d78be854884c8a9ce94ada0ee59a3c58ce80a155c73dc529b755e75e98cb18e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78be854884c8a9ce94ada0ee59a3c58ce80a155c73dc529b755e75e98cb18e1->enter($__internal_d78be854884c8a9ce94ada0ee59a3c58ce80a155c73dc529b755e75e98cb18e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_33cd2627c81b1efbd2007b65f625b5540af8c09b4a029b86067468e13630c761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cd2627c81b1efbd2007b65f625b5540af8c09b4a029b86067468e13630c761->enter($__internal_33cd2627c81b1efbd2007b65f625b5540af8c09b4a029b86067468e13630c761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d78be854884c8a9ce94ada0ee59a3c58ce80a155c73dc529b755e75e98cb18e1->leave($__internal_d78be854884c8a9ce94ada0ee59a3c58ce80a155c73dc529b755e75e98cb18e1_prof);

        
        $__internal_33cd2627c81b1efbd2007b65f625b5540af8c09b4a029b86067468e13630c761->leave($__internal_33cd2627c81b1efbd2007b65f625b5540af8c09b4a029b86067468e13630c761_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
