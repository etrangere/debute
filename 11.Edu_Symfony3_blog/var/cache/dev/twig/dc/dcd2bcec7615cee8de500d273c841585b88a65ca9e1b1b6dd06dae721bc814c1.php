<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_02eed9b0f2cef0f6d021b6f6244da199df7f80d0a593fb513c7327c3985cb901 extends Twig_Template
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
        $__internal_510c13fbe1088bc02e2ec6463daddaec39487c8487185214bcf825acbc38a3c4 = $this->env->getExtension("native_profiler");
        $__internal_510c13fbe1088bc02e2ec6463daddaec39487c8487185214bcf825acbc38a3c4->enter($__internal_510c13fbe1088bc02e2ec6463daddaec39487c8487185214bcf825acbc38a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_510c13fbe1088bc02e2ec6463daddaec39487c8487185214bcf825acbc38a3c4->leave($__internal_510c13fbe1088bc02e2ec6463daddaec39487c8487185214bcf825acbc38a3c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
