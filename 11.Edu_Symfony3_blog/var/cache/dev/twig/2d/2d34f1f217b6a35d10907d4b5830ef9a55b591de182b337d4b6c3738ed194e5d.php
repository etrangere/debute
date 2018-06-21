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
        $__internal_a1dd9a4b28e26e4d2b4a3173c217dac74d7720a4365752e974167d71e0141c34 = $this->env->getExtension("native_profiler");
        $__internal_a1dd9a4b28e26e4d2b4a3173c217dac74d7720a4365752e974167d71e0141c34->enter($__internal_a1dd9a4b28e26e4d2b4a3173c217dac74d7720a4365752e974167d71e0141c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a1dd9a4b28e26e4d2b4a3173c217dac74d7720a4365752e974167d71e0141c34->leave($__internal_a1dd9a4b28e26e4d2b4a3173c217dac74d7720a4365752e974167d71e0141c34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b355fcd793de784711cbd49599160dca5340e8c6afe378d49c9b564342cc927f = $this->env->getExtension("native_profiler");
        $__internal_b355fcd793de784711cbd49599160dca5340e8c6afe378d49c9b564342cc927f->enter($__internal_b355fcd793de784711cbd49599160dca5340e8c6afe378d49c9b564342cc927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_b355fcd793de784711cbd49599160dca5340e8c6afe378d49c9b564342cc927f->leave($__internal_b355fcd793de784711cbd49599160dca5340e8c6afe378d49c9b564342cc927f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_620b19549cd64ff5fd5ae49541348ac94cf08ab71c6c1159623b865fe0891a02 = $this->env->getExtension("native_profiler");
        $__internal_620b19549cd64ff5fd5ae49541348ac94cf08ab71c6c1159623b865fe0891a02->enter($__internal_620b19549cd64ff5fd5ae49541348ac94cf08ab71c6c1159623b865fe0891a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_620b19549cd64ff5fd5ae49541348ac94cf08ab71c6c1159623b865fe0891a02->leave($__internal_620b19549cd64ff5fd5ae49541348ac94cf08ab71c6c1159623b865fe0891a02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3454bf2739a4427c22044d9ff383679fa7c1e23e751ed93251cc0132327076 = $this->env->getExtension("native_profiler");
        $__internal_da3454bf2739a4427c22044d9ff383679fa7c1e23e751ed93251cc0132327076->enter($__internal_da3454bf2739a4427c22044d9ff383679fa7c1e23e751ed93251cc0132327076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da3454bf2739a4427c22044d9ff383679fa7c1e23e751ed93251cc0132327076->leave($__internal_da3454bf2739a4427c22044d9ff383679fa7c1e23e751ed93251cc0132327076_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52548906d98f5eedf91aa01bef60308375be65ae5bafbf1f32264473d78823ab = $this->env->getExtension("native_profiler");
        $__internal_52548906d98f5eedf91aa01bef60308375be65ae5bafbf1f32264473d78823ab->enter($__internal_52548906d98f5eedf91aa01bef60308375be65ae5bafbf1f32264473d78823ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_52548906d98f5eedf91aa01bef60308375be65ae5bafbf1f32264473d78823ab->leave($__internal_52548906d98f5eedf91aa01bef60308375be65ae5bafbf1f32264473d78823ab_prof);

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
