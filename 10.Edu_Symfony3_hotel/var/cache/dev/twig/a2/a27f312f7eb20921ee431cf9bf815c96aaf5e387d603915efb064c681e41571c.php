<?php

/* home/about.html.twig */
class __TwigTemplate_b6337e2e4624c10bebbd505f1b899b89a14343cb5a41d3eda238031401b0e186 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

   <h2 align=\"center\" >Welcome to our Hotel</h2>

    <p align=\"justify\">Far far away, behind the word mountains, far from the countries
        Vokalia and Consonantia, there live the blind texts. Separated they live in
        Bookmarksgrove right at the coast of the Semantics, a large language ocean.

        A small river named Duden flows by their place and supplies it with the
        necessary regelialia. It is a paradisematic country, in which roasted parts
        of sentences fly into your mouth.</p>

    <h3 align=\"center\">Guests Says</h3>
     <p align=\"justify\">
         Our Satisfied Guests says Far far away, behind the word mountains, far from
         the countries Vokalia and Consonantia, there live the blind texts.

         Dennis Green Guests from Italy Far far away, behind the word mountains, far
         from the countries Vokalia and Consonantia, there live the blind texts.
         Dennis Green Guests from Italy Far far away, behind the word mountains, far
         from the countries Vokalia and Consonantia, there live the blind texts.Dennis
         Green Guests from Italy Far far away, behind the word mountains, far from the
         countries Vokalia and Consonantia, there live the blind texts.Dennis Green
         Guests from Italy Far far away, behind the word mountains, far from the countries
         Vokalia and Consonantia, there live the blind texts.Dennis Green Guests from
         Italy Instagram Cozy Far far away, behind the word mountains, far from the
         countries Vokalia and Consonantia, there live the blind texts.</p>

    <img class=\"thumbnail\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
    <img class=\"thumbnail\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  83 => 35,  53 => 7,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}


   <h2 align=\"center\" >Welcome to our Hotel</h2>

    <p align=\"justify\">Far far away, behind the word mountains, far from the countries
        Vokalia and Consonantia, there live the blind texts. Separated they live in
        Bookmarksgrove right at the coast of the Semantics, a large language ocean.

        A small river named Duden flows by their place and supplies it with the
        necessary regelialia. It is a paradisematic country, in which roasted parts
        of sentences fly into your mouth.</p>

    <h3 align=\"center\">Guests Says</h3>
     <p align=\"justify\">
         Our Satisfied Guests says Far far away, behind the word mountains, far from
         the countries Vokalia and Consonantia, there live the blind texts.

         Dennis Green Guests from Italy Far far away, behind the word mountains, far
         from the countries Vokalia and Consonantia, there live the blind texts.
         Dennis Green Guests from Italy Far far away, behind the word mountains, far
         from the countries Vokalia and Consonantia, there live the blind texts.Dennis
         Green Guests from Italy Far far away, behind the word mountains, far from the
         countries Vokalia and Consonantia, there live the blind texts.Dennis Green
         Guests from Italy Far far away, behind the word mountains, far from the countries
         Vokalia and Consonantia, there live the blind texts.Dennis Green Guests from
         Italy Instagram Cozy Far far away, behind the word mountains, far from the
         countries Vokalia and Consonantia, there live the blind texts.</p>

    <img class=\"thumbnail\" src=\"{{ asset('images/2.jpg') }}\">
    <img class=\"thumbnail\" src=\"{{ asset('images/3.jpg') }}\">

{% endblock %}
", "home/about.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/about.html.twig");
    }
}