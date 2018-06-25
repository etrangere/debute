<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_aab12cb84cde610c4448c0e9f31f400613e6e2b503900283c4aae482502688e5 extends Twig_Template
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
        $__internal_b865ddd6cba8317a32ff34f40909aa832720199c8e3fb9c0e2ca8923d57db7c7 = $this->env->getExtension("native_profiler");
        $__internal_b865ddd6cba8317a32ff34f40909aa832720199c8e3fb9c0e2ca8923d57db7c7->enter($__internal_b865ddd6cba8317a32ff34f40909aa832720199c8e3fb9c0e2ca8923d57db7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b865ddd6cba8317a32ff34f40909aa832720199c8e3fb9c0e2ca8923d57db7c7->leave($__internal_b865ddd6cba8317a32ff34f40909aa832720199c8e3fb9c0e2ca8923d57db7c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
