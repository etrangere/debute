<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_7feb3803d5eeb486d412942f5a2912dfde588951b6c7f0dbdb54d869c54c63cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7feb3803d5eeb486d412942f5a2912dfde588951b6c7f0dbdb54d869c54c63cb->enter($__internal_7feb3803d5eeb486d412942f5a2912dfde588951b6c7f0dbdb54d869c54c63cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_932a2dad9cbe020590e29bcf0a411a00407a3aff9ed3b5f6d5e86cfbabf41016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a2dad9cbe020590e29bcf0a411a00407a3aff9ed3b5f6d5e86cfbabf41016->enter($__internal_932a2dad9cbe020590e29bcf0a411a00407a3aff9ed3b5f6d5e86cfbabf41016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7feb3803d5eeb486d412942f5a2912dfde588951b6c7f0dbdb54d869c54c63cb->leave($__internal_7feb3803d5eeb486d412942f5a2912dfde588951b6c7f0dbdb54d869c54c63cb_prof);

        
        $__internal_932a2dad9cbe020590e29bcf0a411a00407a3aff9ed3b5f6d5e86cfbabf41016->leave($__internal_932a2dad9cbe020590e29bcf0a411a00407a3aff9ed3b5f6d5e86cfbabf41016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
