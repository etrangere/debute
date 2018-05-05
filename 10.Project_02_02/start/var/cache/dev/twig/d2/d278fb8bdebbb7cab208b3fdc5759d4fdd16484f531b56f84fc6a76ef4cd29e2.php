<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_f48198bb7ecdb1714284572472f940c6161df7fb2d3c4d42841ea96b4172dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48198bb7ecdb1714284572472f940c6161df7fb2d3c4d42841ea96b4172dc6f->enter($__internal_f48198bb7ecdb1714284572472f940c6161df7fb2d3c4d42841ea96b4172dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a78a2ac4d43d07adce397bf942c1ec38c283ad665c1ac08210a16a0eb9089cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78a2ac4d43d07adce397bf942c1ec38c283ad665c1ac08210a16a0eb9089cd4->enter($__internal_a78a2ac4d43d07adce397bf942c1ec38c283ad665c1ac08210a16a0eb9089cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f48198bb7ecdb1714284572472f940c6161df7fb2d3c4d42841ea96b4172dc6f->leave($__internal_f48198bb7ecdb1714284572472f940c6161df7fb2d3c4d42841ea96b4172dc6f_prof);

        
        $__internal_a78a2ac4d43d07adce397bf942c1ec38c283ad665c1ac08210a16a0eb9089cd4->leave($__internal_a78a2ac4d43d07adce397bf942c1ec38c283ad665c1ac08210a16a0eb9089cd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
