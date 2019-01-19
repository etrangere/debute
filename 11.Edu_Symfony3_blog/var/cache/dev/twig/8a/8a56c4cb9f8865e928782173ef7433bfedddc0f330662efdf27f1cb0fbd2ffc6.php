<?php

/* :main:homepage.html.twig */
class __TwigTemplate_a231ceb35eb68eb75c1903e219fbf5b3aa5a65dc3e2bf2130db20d14ec009949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"page-header text-center\">

        biological classification of living and fossil organisms, as well as viruses

        ";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array())) : ("")), "html", null, true);
        echo "!</h1>



<center></center><h2><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_all");
        echo " \">List of all Aquanauts</a></h2></center>

    <!DOCTYPE html>


    <body>

    <div class=\"container-fluid\">


        <div class=\"row\">

            <div class=\"col-sm-3\" style=\"background-color:lavender\">
                <h4 style=\"padding: 5%\">Eight major taxonomic ranks</h4>
                <img style=\"padding: 15%\" src=\"/11.Edu_Symfony3_blog/web/images/Biological_classification.png\">
            </div>

            <div class=\"col-sm-6\" style=\"background-color:lavenderblush;\">
                .col-sm-6</div>
            <div class=\"col-sm-3\" style=\"background-color:lavender;\">.col-sm-3</div>
        </div>
    </div>

    </body>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
    <h1 class=\"page-header text-center\">

        biological classification of living and fossil organisms, as well as viruses

        {{ app.user ? app.user.email }}!</h1>



<center></center><h2><a href=\"{{ path('genus_all')}} \">List of all Aquanauts</a></h2></center>

    <!DOCTYPE html>


    <body>

    <div class=\"container-fluid\">


        <div class=\"row\">

            <div class=\"col-sm-3\" style=\"background-color:lavender\">
                <h4 style=\"padding: 5%\">Eight major taxonomic ranks</h4>
                <img style=\"padding: 15%\" src=\"/11.Edu_Symfony3_blog/web/images/Biological_classification.png\">
            </div>

            <div class=\"col-sm-6\" style=\"background-color:lavenderblush;\">
                .col-sm-6</div>
            <div class=\"col-sm-3\" style=\"background-color:lavender;\">.col-sm-3</div>
        </div>
    </div>

    </body>




{% endblock %}
", ":main:homepage.html.twig", "/var/www/11.Edu_Symfony3_blog/app/Resources/views/main/homepage.html.twig");
    }
}
