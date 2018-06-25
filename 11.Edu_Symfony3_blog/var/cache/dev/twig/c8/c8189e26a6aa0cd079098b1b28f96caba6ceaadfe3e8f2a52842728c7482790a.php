<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0d7fa0a156f78459d4dca5e4cffd4f14d1b2c6403c65db6f1e5af46efa84c265 extends Twig_Template
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
        $__internal_1716709daa28e42198f391305f1f7f61b54c4d12fe6299d32694b8bdd96f8063 = $this->env->getExtension("native_profiler");
        $__internal_1716709daa28e42198f391305f1f7f61b54c4d12fe6299d32694b8bdd96f8063->enter($__internal_1716709daa28e42198f391305f1f7f61b54c4d12fe6299d32694b8bdd96f8063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1716709daa28e42198f391305f1f7f61b54c4d12fe6299d32694b8bdd96f8063->leave($__internal_1716709daa28e42198f391305f1f7f61b54c4d12fe6299d32694b8bdd96f8063_prof);

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
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
