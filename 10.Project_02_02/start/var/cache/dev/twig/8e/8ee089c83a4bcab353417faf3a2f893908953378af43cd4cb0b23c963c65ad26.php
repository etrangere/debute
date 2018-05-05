<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6c30209a0ee35b37683e288466f63f773d44181ece6d4f921f4433a2ec8b871 extends Twig_Template
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
        $__internal_0302a31b99d74d930ae94d3eb05b4ee00d2ae5168d3a6aa29b29318f4e7551dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0302a31b99d74d930ae94d3eb05b4ee00d2ae5168d3a6aa29b29318f4e7551dc->enter($__internal_0302a31b99d74d930ae94d3eb05b4ee00d2ae5168d3a6aa29b29318f4e7551dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dae18cc340c7b7b167a6e7b937de82aef17ac0fded0bba55599eaa437565d9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae18cc340c7b7b167a6e7b937de82aef17ac0fded0bba55599eaa437565d9d6->enter($__internal_dae18cc340c7b7b167a6e7b937de82aef17ac0fded0bba55599eaa437565d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0302a31b99d74d930ae94d3eb05b4ee00d2ae5168d3a6aa29b29318f4e7551dc->leave($__internal_0302a31b99d74d930ae94d3eb05b4ee00d2ae5168d3a6aa29b29318f4e7551dc_prof);

        
        $__internal_dae18cc340c7b7b167a6e7b937de82aef17ac0fded0bba55599eaa437565d9d6->leave($__internal_dae18cc340c7b7b167a6e7b937de82aef17ac0fded0bba55599eaa437565d9d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
