<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_59f88757b98d8f593e93b5e4010a407efd290aaddebc0e4c7aca77f44dc752d7 extends Twig_Template
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
        $__internal_b8ef0aeaaa634be47724111f5bff6d80514d2e3465149bf583d450e1ee47127d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ef0aeaaa634be47724111f5bff6d80514d2e3465149bf583d450e1ee47127d->enter($__internal_b8ef0aeaaa634be47724111f5bff6d80514d2e3465149bf583d450e1ee47127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_96cc953ac31614df0c34da5af6be1cd1b719d007c1a5d545d34a55c9650abc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cc953ac31614df0c34da5af6be1cd1b719d007c1a5d545d34a55c9650abc79->enter($__internal_96cc953ac31614df0c34da5af6be1cd1b719d007c1a5d545d34a55c9650abc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b8ef0aeaaa634be47724111f5bff6d80514d2e3465149bf583d450e1ee47127d->leave($__internal_b8ef0aeaaa634be47724111f5bff6d80514d2e3465149bf583d450e1ee47127d_prof);

        
        $__internal_96cc953ac31614df0c34da5af6be1cd1b719d007c1a5d545d34a55c9650abc79->leave($__internal_96cc953ac31614df0c34da5af6be1cd1b719d007c1a5d545d34a55c9650abc79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
