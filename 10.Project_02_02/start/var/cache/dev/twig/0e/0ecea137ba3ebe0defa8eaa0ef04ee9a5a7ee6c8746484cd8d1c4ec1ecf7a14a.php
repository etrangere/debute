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
        $__internal_0d6055cf10bf5bf888c7a7fcf93352332c0d59e08623c966745b33820e171f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6055cf10bf5bf888c7a7fcf93352332c0d59e08623c966745b33820e171f13->enter($__internal_0d6055cf10bf5bf888c7a7fcf93352332c0d59e08623c966745b33820e171f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f5704caa239b209d6666f065f3c47e83737dbadaae3b7edc025479ddce7fa46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5704caa239b209d6666f065f3c47e83737dbadaae3b7edc025479ddce7fa46c->enter($__internal_f5704caa239b209d6666f065f3c47e83737dbadaae3b7edc025479ddce7fa46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0d6055cf10bf5bf888c7a7fcf93352332c0d59e08623c966745b33820e171f13->leave($__internal_0d6055cf10bf5bf888c7a7fcf93352332c0d59e08623c966745b33820e171f13_prof);

        
        $__internal_f5704caa239b209d6666f065f3c47e83737dbadaae3b7edc025479ddce7fa46c->leave($__internal_f5704caa239b209d6666f065f3c47e83737dbadaae3b7edc025479ddce7fa46c_prof);

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
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
