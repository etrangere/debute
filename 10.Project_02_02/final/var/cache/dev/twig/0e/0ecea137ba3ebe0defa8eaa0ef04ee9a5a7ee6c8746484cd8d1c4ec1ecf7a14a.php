<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_208be8c6764811f33bd143a36f331c65ffd53d52cb9aecbcf5d11fb50be0281c extends Twig_Template
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
        $__internal_4d23c7ea5b43b41afa6137d46e7ef1830d29dd6b8de7b6823197ba35ca3da4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d23c7ea5b43b41afa6137d46e7ef1830d29dd6b8de7b6823197ba35ca3da4c8->enter($__internal_4d23c7ea5b43b41afa6137d46e7ef1830d29dd6b8de7b6823197ba35ca3da4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_47ba3af4da5a48aa1b046c6d7497ed48468bb277acd26d2a9d689bf1db0bc94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ba3af4da5a48aa1b046c6d7497ed48468bb277acd26d2a9d689bf1db0bc94c->enter($__internal_47ba3af4da5a48aa1b046c6d7497ed48468bb277acd26d2a9d689bf1db0bc94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4d23c7ea5b43b41afa6137d46e7ef1830d29dd6b8de7b6823197ba35ca3da4c8->leave($__internal_4d23c7ea5b43b41afa6137d46e7ef1830d29dd6b8de7b6823197ba35ca3da4c8_prof);

        
        $__internal_47ba3af4da5a48aa1b046c6d7497ed48468bb277acd26d2a9d689bf1db0bc94c->leave($__internal_47ba3af4da5a48aa1b046c6d7497ed48468bb277acd26d2a9d689bf1db0bc94c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
