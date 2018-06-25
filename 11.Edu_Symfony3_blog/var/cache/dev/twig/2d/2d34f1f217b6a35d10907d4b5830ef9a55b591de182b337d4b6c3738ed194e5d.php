<?php

/* base.html.twig */
class __TwigTemplate_75831049ac28c3844a69617351ca771c8d2a7360782ae56c30041765ce2d5dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0f415a167c735c25f8afb3a7250ff1aec233211130af152de2174674b5d28ea = $this->env->getExtension("native_profiler");
        $__internal_a0f415a167c735c25f8afb3a7250ff1aec233211130af152de2174674b5d28ea->enter($__internal_a0f415a167c735c25f8afb3a7250ff1aec233211130af152de2174674b5d28ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_a0f415a167c735c25f8afb3a7250ff1aec233211130af152de2174674b5d28ea->leave($__internal_a0f415a167c735c25f8afb3a7250ff1aec233211130af152de2174674b5d28ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aed772be7813d5f29daf6bfdca28c65d962db0fcf7d68d148c16261ee63358b = $this->env->getExtension("native_profiler");
        $__internal_4aed772be7813d5f29daf6bfdca28c65d962db0fcf7d68d148c16261ee63358b->enter($__internal_4aed772be7813d5f29daf6bfdca28c65d962db0fcf7d68d148c16261ee63358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_4aed772be7813d5f29daf6bfdca28c65d962db0fcf7d68d148c16261ee63358b->leave($__internal_4aed772be7813d5f29daf6bfdca28c65d962db0fcf7d68d148c16261ee63358b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d51265fc8347ba537288694a51bab8dbc26d15845f2dfd8921fe10f4a4021bb0 = $this->env->getExtension("native_profiler");
        $__internal_d51265fc8347ba537288694a51bab8dbc26d15845f2dfd8921fe10f4a4021bb0->enter($__internal_d51265fc8347ba537288694a51bab8dbc26d15845f2dfd8921fe10f4a4021bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d51265fc8347ba537288694a51bab8dbc26d15845f2dfd8921fe10f4a4021bb0->leave($__internal_d51265fc8347ba537288694a51bab8dbc26d15845f2dfd8921fe10f4a4021bb0_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e04b2b8cabcb1a82a58ecaa1ce4015218e6ad914d6285a8fd952cfd86220bc6 = $this->env->getExtension("native_profiler");
        $__internal_8e04b2b8cabcb1a82a58ecaa1ce4015218e6ad914d6285a8fd952cfd86220bc6->enter($__internal_8e04b2b8cabcb1a82a58ecaa1ce4015218e6ad914d6285a8fd952cfd86220bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e04b2b8cabcb1a82a58ecaa1ce4015218e6ad914d6285a8fd952cfd86220bc6->leave($__internal_8e04b2b8cabcb1a82a58ecaa1ce4015218e6ad914d6285a8fd952cfd86220bc6_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70f1a7060de2f81243d6b31c9af8cb0377c699847c0d746ec952ec78825f07de = $this->env->getExtension("native_profiler");
        $__internal_70f1a7060de2f81243d6b31c9af8cb0377c699847c0d746ec952ec78825f07de->enter($__internal_70f1a7060de2f81243d6b31c9af8cb0377c699847c0d746ec952ec78825f07de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_70f1a7060de2f81243d6b31c9af8cb0377c699847c0d746ec952ec78825f07de->leave($__internal_70f1a7060de2f81243d6b31c9af8cb0377c699847c0d746ec952ec78825f07de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  138 => 38,  132 => 37,  121 => 30,  112 => 10,  108 => 9,  103 => 8,  97 => 7,  85 => 5,  76 => 41,  74 => 37,  66 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}AquaNote!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         <header class="header">*/
/*             <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*             <h1 class="logo">AquaNote</h1>*/
/*             <ul class="navi">*/
/*                 <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*                 <li><a href="#">Login</a></li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="main-content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="footer">*/
/*             <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
