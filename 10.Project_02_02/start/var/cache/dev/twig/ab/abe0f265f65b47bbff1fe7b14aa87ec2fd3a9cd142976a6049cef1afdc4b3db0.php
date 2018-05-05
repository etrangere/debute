<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_7ec16359cec608278276cc9ba0570cd11a4b35f745ceca5fd2a1849d8172c724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec16359cec608278276cc9ba0570cd11a4b35f745ceca5fd2a1849d8172c724->enter($__internal_7ec16359cec608278276cc9ba0570cd11a4b35f745ceca5fd2a1849d8172c724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dc4ab9d03f253435d2537f18d68938629256c68be18f633ef5d70db8abae71a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4ab9d03f253435d2537f18d68938629256c68be18f633ef5d70db8abae71a5->enter($__internal_dc4ab9d03f253435d2537f18d68938629256c68be18f633ef5d70db8abae71a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7ec16359cec608278276cc9ba0570cd11a4b35f745ceca5fd2a1849d8172c724->leave($__internal_7ec16359cec608278276cc9ba0570cd11a4b35f745ceca5fd2a1849d8172c724_prof);

        
        $__internal_dc4ab9d03f253435d2537f18d68938629256c68be18f633ef5d70db8abae71a5->leave($__internal_dc4ab9d03f253435d2537f18d68938629256c68be18f633ef5d70db8abae71a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
