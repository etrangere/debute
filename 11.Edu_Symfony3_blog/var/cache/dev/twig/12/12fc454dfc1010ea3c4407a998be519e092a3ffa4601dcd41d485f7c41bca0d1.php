<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2f5d015985f44bf9befdbae62835d25306294563fb652408b8cace9b511aa7cb extends Twig_Template
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
        $__internal_9b4c2ac846893429e0f7f6b295644aea367a81f6e90dfec2f511ff198af8e712 = $this->env->getExtension("native_profiler");
        $__internal_9b4c2ac846893429e0f7f6b295644aea367a81f6e90dfec2f511ff198af8e712->enter($__internal_9b4c2ac846893429e0f7f6b295644aea367a81f6e90dfec2f511ff198af8e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9b4c2ac846893429e0f7f6b295644aea367a81f6e90dfec2f511ff198af8e712->leave($__internal_9b4c2ac846893429e0f7f6b295644aea367a81f6e90dfec2f511ff198af8e712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
