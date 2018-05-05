<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b2117e1ceccd64d72d5f05077f27c022ddb91b0a90b387bc397c3ed6c381f93 extends Twig_Template
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
        $__internal_4063bfec7fa3371f4fb23e43a0608204291a8fe16d8e36901d7e81688e304c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4063bfec7fa3371f4fb23e43a0608204291a8fe16d8e36901d7e81688e304c42->enter($__internal_4063bfec7fa3371f4fb23e43a0608204291a8fe16d8e36901d7e81688e304c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bd98b6ade79fd99d281c3601bb27162ffe2c3029ec44329bd38faa2ab5153da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd98b6ade79fd99d281c3601bb27162ffe2c3029ec44329bd38faa2ab5153da6->enter($__internal_bd98b6ade79fd99d281c3601bb27162ffe2c3029ec44329bd38faa2ab5153da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4063bfec7fa3371f4fb23e43a0608204291a8fe16d8e36901d7e81688e304c42->leave($__internal_4063bfec7fa3371f4fb23e43a0608204291a8fe16d8e36901d7e81688e304c42_prof);

        
        $__internal_bd98b6ade79fd99d281c3601bb27162ffe2c3029ec44329bd38faa2ab5153da6->leave($__internal_bd98b6ade79fd99d281c3601bb27162ffe2c3029ec44329bd38faa2ab5153da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
