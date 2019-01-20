<?php

/* :home:about.html.twig */
class __TwigTemplate_e61dfe045af23fffc0d771632610ca7b44525409f68d2662c080e1f55e0a062b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:about.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>

 <h2 align=\"center\" >Our hotel</h2>

 <p style=\"object-fit: contain; padding: 20px;\">Far far away, behind the word mountains, far from the countries
  Vokalia and Consonantia, there live the blind texts. Separated they live in
  Bookmarksgrove right at the coast of the Semantics, a large language ocean.

  A small river named Duden flows by their place and supplies it with the
  necessary regelialia. It is a paradisematic country, in which roasted parts
  of sentences fly into your mouth.
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

 <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
   <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
   <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
   <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
   <div class=\"item active\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\">
    <div class=\"carousel-caption\">
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>

   <div class=\"item\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\">
    <div class=\"carousel-caption\" >
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>

   <div class=\"item\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" alt=\"New York\">
    <div class=\"carousel-caption\">
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
   <span class=\"glyphicon glyphicon-chevron-left\"></span>
   <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
   <span class=\"glyphicon glyphicon-chevron-right\"></span>
   <span class=\"sr-only\">Next</span>
  </a>
 </div>

<!--
 <h4 align=\"center\" >Our single rooms</h4>
 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
 </div>

 <h4 align=\"center\" >Our double rooms</h4>

 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
 </div>


 <h4 align=\"center\" >Our triple rooms</h4>

 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
 </div>
-->

 <script>
     \$(document).ready(function(){
         // Activate Carousel
         \$(\"#myCarousel\").carousel();

         // Enable Carousel Indicators
         \$(\".item1\").click(function(){
             \$(\"#myCarousel\").carousel(0);
         });
         \$(\".item2\").click(function(){
             \$(\"#myCarousel\").carousel(1);
         });
         \$(\".item3\").click(function(){
             \$(\"#myCarousel\").carousel(2);
         });
         \$(\".item4\").click(function(){
             \$(\"#myCarousel\").carousel(3);
         });

         // Enable Carousel Controls
         \$(\".left\").click(function(){
             \$(\"#myCarousel\").carousel(\"prev\");
         });
         \$(\".right\").click(function(){
             \$(\"#myCarousel\").carousel(\"next\");
         });
     });
 </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":home:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 113,  202 => 112,  198 => 111,  194 => 110,  184 => 103,  180 => 102,  176 => 101,  172 => 100,  163 => 94,  159 => 93,  155 => 92,  151 => 91,  126 => 69,  115 => 61,  104 => 53,  57 => 9,  53 => 7,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}


    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>

 <h2 align=\"center\" >Our hotel</h2>

 <p style=\"object-fit: contain; padding: 20px;\">Far far away, behind the word mountains, far from the countries
  Vokalia and Consonantia, there live the blind texts. Separated they live in
  Bookmarksgrove right at the coast of the Semantics, a large language ocean.

  A small river named Duden flows by their place and supplies it with the
  necessary regelialia. It is a paradisematic country, in which roasted parts
  of sentences fly into your mouth.
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

 <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
   <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
   <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
   <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
   <div class=\"item active\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"{{ asset('images/3.jpg') }}\" alt=\"Los Angeles\">
    <div class=\"carousel-caption\">
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>

   <div class=\"item\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"{{ asset('images/2.jpg') }}\" alt=\"Chicago\">
    <div class=\"carousel-caption\" >
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>

   <div class=\"item\">
    <img  style=\"max-height: 60%; max-width:120%;\" src=\"{{ asset('images/3.jpg') }}\" alt=\"New York\">
    <div class=\"carousel-caption\">
     <h3 style=\"padding: 10%\">Los Angeles</h3>
     <p>LA is always so much fun!</p>
    </div>
   </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
   <span class=\"glyphicon glyphicon-chevron-left\"></span>
   <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
   <span class=\"glyphicon glyphicon-chevron-right\"></span>
   <span class=\"sr-only\">Next</span>
  </a>
 </div>

<!--
 <h4 align=\"center\" >Our single rooms</h4>
 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/2.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/2.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/2.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/2.jpg') }}\">
 </div>

 <h4 align=\"center\" >Our double rooms</h4>

 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/3.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/3.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/3.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/3.jpg') }}\">
 </div>


 <h4 align=\"center\" >Our triple rooms</h4>

 <div class=\"medium-12  columns\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/4.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/4.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/4.jpg') }}\">
  <img class=\"thumbnail\" object-fit: contain; style=\"max-height: 24%; max-width:24%;\" src=\"{{ asset('images/4.jpg') }}\">
 </div>
-->

 <script>
     \$(document).ready(function(){
         // Activate Carousel
         \$(\"#myCarousel\").carousel();

         // Enable Carousel Indicators
         \$(\".item1\").click(function(){
             \$(\"#myCarousel\").carousel(0);
         });
         \$(\".item2\").click(function(){
             \$(\"#myCarousel\").carousel(1);
         });
         \$(\".item3\").click(function(){
             \$(\"#myCarousel\").carousel(2);
         });
         \$(\".item4\").click(function(){
             \$(\"#myCarousel\").carousel(3);
         });

         // Enable Carousel Controls
         \$(\".left\").click(function(){
             \$(\"#myCarousel\").carousel(\"prev\");
         });
         \$(\".right\").click(function(){
             \$(\"#myCarousel\").carousel(\"next\");
         });
     });
 </script>

{% endblock %}
", ":home:about.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/about.html.twig");
    }
}
