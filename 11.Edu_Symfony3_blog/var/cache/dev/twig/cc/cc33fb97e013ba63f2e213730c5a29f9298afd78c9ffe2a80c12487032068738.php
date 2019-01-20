<?php

/* main/homepage.html.twig */
class __TwigTemplate_3213ad86133a836ba9bfa8fb1e3fca564faeb684b94610caf31d9934ace3550a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!DOCTYPE html>



    <body>
<h1 class=\"page-header text-center\">

    ";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array())) : ("")), "html", null, true);
        echo "</h1>

<h1 align=\"center\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_all");
        echo " \">Species Database</a></h1><br/>



    <div class=\"container-fluid\">


        <div class=\"row\">

            <div class=\"col-sm-3\" style=\"background-color:lavender;\">

                <h2 style=\"padding: 5%\">Eight major taxonomic ranks</h2>
                <img style=\"padding: 15%\" src=\"/11.Edu_Symfony3_blog/web/images/Biological_classification.png\">

            </div>


            <div class=\" col-sm-6\" style=\"background-color:lavenderblush;\">
                <div style=\"width: 103%\">
                <button type=\"button\" class=\"btn btn-primary\">Domain</button>
                <button type=\"button\" class=\"btn btn-primary\">Kingdom</button>
                <button type=\"button\" class=\"btn btn-primary\">Phylum</button>
                <button type=\"button\" class=\"btn btn-primary\">Class</button>
                <button type=\"button\" class=\"btn btn-primary\">Order</button>
                <button type=\"button\" class=\"btn btn-primary\">Family</button>
                <button type=\"button\" class=\"btn btn-primary\">Genus</button>
                <button type=\"button\" class=\"btn btn-primary\">Species</button>
                </div>
            </div>


            <div class=\"col-sm-3\" style=\"background-color:lavender;\">

            <h4 style=\"padding: 5%\">Worldwide Identification codes</h4>

              <ul>

                  <li><a href=\"https://en.wikipedia.org/wiki/Taxonomic_rank\">Taxonomic rank</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/Global_Species_Database\">Global Species Database</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                  <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>
                  <li><a href=\"https://en.wikipedia.org/wiki/UniProt\">UniProt</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/Integrated_Taxonomic_Information_System\">Integrated Taxonomic Information System (ITIS)</a> </li>
              </ul>

                <h4>Worldwide Identification codes</h4>

                <ul>
                    <li><a href=\"https://en.m.wikipedia.org/wiki/Fossil\">Fossil</a> </li>
                    <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/Integrated_Taxonomic_Information_System\">Integrated Taxonomic Information System (ITIS)</a> </li>
                </ul>
                <h4>Worldwide Identification codes</h4>

                <ul>

                    <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>

                </ul>
            </div>

        </div>

    </div>

</body>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  49 => 13,  40 => 6,  34 => 5,  11 => 1,);
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
    <!DOCTYPE html>



    <body>
<h1 class=\"page-header text-center\">

    {{ app.user ? app.user.email }}</h1>

<h1 align=\"center\"><a href=\"{{ path('genus_all')}} \">Species Database</a></h1><br/>



    <div class=\"container-fluid\">


        <div class=\"row\">

            <div class=\"col-sm-3\" style=\"background-color:lavender;\">

                <h2 style=\"padding: 5%\">Eight major taxonomic ranks</h2>
                <img style=\"padding: 15%\" src=\"/11.Edu_Symfony3_blog/web/images/Biological_classification.png\">

            </div>


            <div class=\" col-sm-6\" style=\"background-color:lavenderblush;\">
                <div style=\"width: 103%\">
                <button type=\"button\" class=\"btn btn-primary\">Domain</button>
                <button type=\"button\" class=\"btn btn-primary\">Kingdom</button>
                <button type=\"button\" class=\"btn btn-primary\">Phylum</button>
                <button type=\"button\" class=\"btn btn-primary\">Class</button>
                <button type=\"button\" class=\"btn btn-primary\">Order</button>
                <button type=\"button\" class=\"btn btn-primary\">Family</button>
                <button type=\"button\" class=\"btn btn-primary\">Genus</button>
                <button type=\"button\" class=\"btn btn-primary\">Species</button>
                </div>
            </div>


            <div class=\"col-sm-3\" style=\"background-color:lavender;\">

            <h4 style=\"padding: 5%\">Worldwide Identification codes</h4>

              <ul>

                  <li><a href=\"https://en.wikipedia.org/wiki/Taxonomic_rank\">Taxonomic rank</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/Global_Species_Database\">Global Species Database</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                  <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>
                  <li><a href=\"https://en.wikipedia.org/wiki/UniProt\">UniProt</a> </li>
                  <li><a href=\"https://en.wikipedia.org/wiki/Integrated_Taxonomic_Information_System\">Integrated Taxonomic Information System (ITIS)</a> </li>
              </ul>

                <h4>Worldwide Identification codes</h4>

                <ul>
                    <li><a href=\"https://en.m.wikipedia.org/wiki/Fossil\">Fossil</a> </li>
                    <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/Integrated_Taxonomic_Information_System\">Integrated Taxonomic Information System (ITIS)</a> </li>
                </ul>
                <h4>Worldwide Identification codes</h4>

                <ul>

                    <li><a href=\"https://en.wikipedia.org/wiki/National_Center_for_Biotechnology_Information\">National Center for Biotechnology Information (NCBI)</a></li>
                    <li><a href=\"https://en.wikipedia.org/wiki/KEGG\">Kyoto Encyclopedia of Genes and Genomes (KEGG)</a></li>

                </ul>
            </div>

        </div>

    </div>

</body>




{% endblock %}
", "main/homepage.html.twig", "/var/www/11.Edu_Symfony3_blog/app/Resources/views/main/homepage.html.twig");
    }
}
