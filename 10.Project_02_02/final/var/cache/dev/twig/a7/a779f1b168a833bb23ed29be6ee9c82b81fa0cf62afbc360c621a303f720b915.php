<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_697eeca3751ff80ef265441b16a1724a631b171cfe20f7ef753f4c1c3f8342eb extends Twig_Template
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
        $__internal_c1165fa8ff0fae9c9ed9710161cfd35d976a967ea2272520c8f207ee3f549966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1165fa8ff0fae9c9ed9710161cfd35d976a967ea2272520c8f207ee3f549966->enter($__internal_c1165fa8ff0fae9c9ed9710161cfd35d976a967ea2272520c8f207ee3f549966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c7be0c1e8804c280facbb7bb9d50fc110306e8f769b03695248d23d35cf26a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7be0c1e8804c280facbb7bb9d50fc110306e8f769b03695248d23d35cf26a1e->enter($__internal_c7be0c1e8804c280facbb7bb9d50fc110306e8f769b03695248d23d35cf26a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c1165fa8ff0fae9c9ed9710161cfd35d976a967ea2272520c8f207ee3f549966->leave($__internal_c1165fa8ff0fae9c9ed9710161cfd35d976a967ea2272520c8f207ee3f549966_prof);

        
        $__internal_c7be0c1e8804c280facbb7bb9d50fc110306e8f769b03695248d23d35cf26a1e->leave($__internal_c7be0c1e8804c280facbb7bb9d50fc110306e8f769b03695248d23d35cf26a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
