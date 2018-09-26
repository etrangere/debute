<?php

/* :admin/genus:edit.html.twig */
class __TwigTemplate_e593e54906b34884f3f2fbc1566b175c222e8b7e053c075a15533ce78198b8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/genus/formLayout.html.twig", ":admin/genus:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/genus/formLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/genus:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Edit Genus</h1>

                ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["genusForm"] ?? $this->getContext($context, "genusForm")), 'form_start');
        echo "

                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "name", array()), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "subFamily", array()), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "speciesCount", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "funFact", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "isPublished", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["genusForm"] ?? $this->getContext($context, "genusForm")), "firstDiscoveredAt", array()), 'row');
        echo "


                <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>

                ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["genusForm"] ?? $this->getContext($context, "genusForm")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":admin/genus:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/genus/formLayout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Edit Genus</h1>

                {{ form_start(genusForm) }}

                {{ form_row(genusForm.name) }}
                {{ form_row(genusForm.subFamily) }}
                {{ form_row(genusForm.speciesCount) }}
                {{ form_row(genusForm.funFact) }}
                {{ form_row(genusForm.isPublished) }}
                {{ form_row(genusForm.firstDiscoveredAt) }}


                <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>

                {{ form_end(genusForm) }}

            </div>
        </div>
    </div>
{% endblock %}
", ":admin/genus:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/11.Edu_Symfony3_blog/app/Resources/views/admin/genus/edit.html.twig");
    }
}
