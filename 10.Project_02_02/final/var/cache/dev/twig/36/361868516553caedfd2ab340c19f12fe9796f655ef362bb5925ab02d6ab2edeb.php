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
        $__internal_b003da2583997347d6660a0efa217a11a44765db9fba7722f80b37887e7183dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b003da2583997347d6660a0efa217a11a44765db9fba7722f80b37887e7183dd->enter($__internal_b003da2583997347d6660a0efa217a11a44765db9fba7722f80b37887e7183dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9b9174516e85d4c0f533ed624092aca573f263ee66baf48db8dd6b224254fba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9174516e85d4c0f533ed624092aca573f263ee66baf48db8dd6b224254fba7->enter($__internal_9b9174516e85d4c0f533ed624092aca573f263ee66baf48db8dd6b224254fba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b003da2583997347d6660a0efa217a11a44765db9fba7722f80b37887e7183dd->leave($__internal_b003da2583997347d6660a0efa217a11a44765db9fba7722f80b37887e7183dd_prof);

        
        $__internal_9b9174516e85d4c0f533ed624092aca573f263ee66baf48db8dd6b224254fba7->leave($__internal_9b9174516e85d4c0f533ed624092aca573f263ee66baf48db8dd6b224254fba7_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
