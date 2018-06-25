<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7203a7f6c9df08bfd24414eac28ae03d288d5fd53584138e56b2cd09af006db8 extends Twig_Template
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
        $__internal_414ef805b7d8da54da9b7eab0f802282c4b638bda88c414ba6719f93ba18f86e = $this->env->getExtension("native_profiler");
        $__internal_414ef805b7d8da54da9b7eab0f802282c4b638bda88c414ba6719f93ba18f86e->enter($__internal_414ef805b7d8da54da9b7eab0f802282c4b638bda88c414ba6719f93ba18f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_414ef805b7d8da54da9b7eab0f802282c4b638bda88c414ba6719f93ba18f86e->leave($__internal_414ef805b7d8da54da9b7eab0f802282c4b638bda88c414ba6719f93ba18f86e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
