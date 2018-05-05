<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8135d1f43ee6b5a5055b85c1b2dc042c7acc2eb5d13d68e6f011013f80d50cbb extends Twig_Template
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
        $__internal_92c1374dbce1884ff8b8a9b595539b30f8cbe74977fc9fcd9ec9eef2183ee56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c1374dbce1884ff8b8a9b595539b30f8cbe74977fc9fcd9ec9eef2183ee56b->enter($__internal_92c1374dbce1884ff8b8a9b595539b30f8cbe74977fc9fcd9ec9eef2183ee56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2338219f85a45aa2c310841799c0534855048a3ba3c9dbca03930e1c6107adbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2338219f85a45aa2c310841799c0534855048a3ba3c9dbca03930e1c6107adbb->enter($__internal_2338219f85a45aa2c310841799c0534855048a3ba3c9dbca03930e1c6107adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_92c1374dbce1884ff8b8a9b595539b30f8cbe74977fc9fcd9ec9eef2183ee56b->leave($__internal_92c1374dbce1884ff8b8a9b595539b30f8cbe74977fc9fcd9ec9eef2183ee56b_prof);

        
        $__internal_2338219f85a45aa2c310841799c0534855048a3ba3c9dbca03930e1c6107adbb->leave($__internal_2338219f85a45aa2c310841799c0534855048a3ba3c9dbca03930e1c6107adbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
