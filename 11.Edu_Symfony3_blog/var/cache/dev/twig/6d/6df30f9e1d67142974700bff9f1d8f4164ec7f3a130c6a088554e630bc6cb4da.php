<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cb5dee697749f29b32a343ed26b212f13a66d1f71157ce1d4dc2d3d417786b92 extends Twig_Template
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
        $__internal_12495838757cab2d35b5b37826f72c3e30223eeae797961c11dda2984c18621c = $this->env->getExtension("native_profiler");
        $__internal_12495838757cab2d35b5b37826f72c3e30223eeae797961c11dda2984c18621c->enter($__internal_12495838757cab2d35b5b37826f72c3e30223eeae797961c11dda2984c18621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_12495838757cab2d35b5b37826f72c3e30223eeae797961c11dda2984c18621c->leave($__internal_12495838757cab2d35b5b37826f72c3e30223eeae797961c11dda2984c18621c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
