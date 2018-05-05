<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d5cca6cc74f015fb48d321ef79264e7cc69bfdadc255f22b73c3e73eed45a5a9 extends Twig_Template
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
        $__internal_a9f29a4f51c31ae5d9acc3671c02ac7eda92ada22b4e85054102faf19999ee2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f29a4f51c31ae5d9acc3671c02ac7eda92ada22b4e85054102faf19999ee2f->enter($__internal_a9f29a4f51c31ae5d9acc3671c02ac7eda92ada22b4e85054102faf19999ee2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_669f2165bb865db391cf79744da59c4f67f1d64e9d26157ebb752efea6bb2035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669f2165bb865db391cf79744da59c4f67f1d64e9d26157ebb752efea6bb2035->enter($__internal_669f2165bb865db391cf79744da59c4f67f1d64e9d26157ebb752efea6bb2035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a9f29a4f51c31ae5d9acc3671c02ac7eda92ada22b4e85054102faf19999ee2f->leave($__internal_a9f29a4f51c31ae5d9acc3671c02ac7eda92ada22b4e85054102faf19999ee2f_prof);

        
        $__internal_669f2165bb865db391cf79744da59c4f67f1d64e9d26157ebb752efea6bb2035->leave($__internal_669f2165bb865db391cf79744da59c4f67f1d64e9d26157ebb752efea6bb2035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
