<?php

/* base.html.twig */
class __TwigTemplate_a386b04c5476f11348d9b2e576834a94b6e1f2f78ef17c2ada7473b66495d152 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'top_bar' => [$this, 'block_top_bar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "    <body>
    ";
        // line 41
        $this->displayBlock('top_bar', $context, $blocks);
        // line 70
        echo "    <noscript><h4 align=\"center\">For full functionality of this page it is necessary to enable JavaScript.
            Here are the <a href=\"http://www.enable-javascript.com\" target=\"_blank\">
                instructions how to enable JavaScript in your web browser</a></h4></noscript>
    <br>

        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2018</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>


        \$(document).ready(function() {

            \$(\"#dt1\").pickadate(
                {
                    formatSubmit: 'yyyy-mm-dd',
                    //formatSubmit: 'yyyy-mm-dd',
                    //format: 'd mmmm, yyyy',
                    format: ' dddd, d mmmm yyyy',
                    min: new Date('today')
                    //max: new Date(2019,12,31),

                });

            \$(\"#dt2\").pickadate(
                {
                    formatSubmit: 'yyyy-mm-dd',
                    //formatSubmit: 'yyyy-mm-dd',
                    //format: 'd mmmm, yyyy',
                    format: ' dddd, d mmmm yyyy',
                    //min: new Date(this),
                   // min: new Date(),
                    max: new Date(2019, 12, 31),



                });


            var from_\$input = \$('#dt1').pickadate(),
                from_picker = from_\$input.pickadate('picker');

            var to_\$input = \$('#dt2').pickadate(),
                to_picker = to_\$input.pickadate('picker');


            // Check if there’s a “from” or “to” date to start with.
            if ( from_picker.get('value') ) {
                to_picker.set('min', from_picker.get('select'))
            }
            if ( to_picker.get('value') ) {
                from_picker.set('max', to_picker.get('select'))
            }

            // When something is selected, update the “from” and “to” limits.
            from_picker.on('set', function(event) {
                if ( event.select ) {
                    to_picker.set('min', from_picker.get('select'))
                }
                else if ( 'clear' in event ) {
                    to_picker.set('min', false)
                }
            });
            to_picker.on('set', function(event) {
                if ( event.select ) {
                    from_picker.set('max', to_picker.get('select'))
                }
                else if ( 'clear' in event ) {
                    from_picker.set('max', false)
                }
            })
        });
    </script>

    <!-- for bookmark-->

    <link rel=\"stylesheet\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/addtohomescreen.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/addtohomescreen.js"), "html", null, true);
        echo "\"></script>
    <!-- Additionally, include jQuery (necessary for bookmark script) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>





    <script>
        jQuery(function(\$) {

            \$('#bookmark-this').click(function(e) {
                var bookmarkURL = window.location.href;
                var bookmarkTitle = document.title;

                if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
                    // Mobile browsers
                    addToHomescreen({ autostart: false, startDelay: 0 }).show(true);
                } else if (window.sidebar && window.sidebar.addPanel) {
                    // Firefox <=22
                    window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
                } else if ((window.sidebar && /Firefox/i.test(navigator.userAgent)) || (window.opera && window.print)) {
                    // Firefox 23+ and Opera <=14
                    \$(this).attr({
                        href: bookmarkURL,
                        title: bookmarkTitle,
                        rel: 'sidebar'
                    }).off(e);
                    return true;
                } else if (window.external && ('AddFavorite' in window.external)) {
                    // IE Favorites
                    window.external.AddFavorite(bookmarkURL, bookmarkTitle);
                } else {
                    // Other browsers (mainly WebKit & Blink - Safari, Chrome, Opera 15+)
                    alert('Press ' + (/Mac/i.test(navigator.platform) ? 'Cmd' : 'Ctrl') + '+D to bookmark this page.');
                }

                return false;
            });

        });

    </script>

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidenav.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">

        

      <!--  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->





        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-131743009-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131743009-1');
        </script>
    </head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel App";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_top_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        // line 42
        echo "        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        echo "\">About us</a></li>
              <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location");
        echo "\">How to locate</a></li>
              <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

        <div class=\"col-sm-auto\">
            <div class=\"float-right\" >
                <a class=\"fa fa-sign-in\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"  ><b>Admin</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-facebook-official fa-lg\" href=\"http://www.facebook.com\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-twitter fa-lg\" href=\"http://www.twitter.com\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-bookmark fa-lg\" id=\"bookmark-this\" href=\"#\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-tripadvisor fa-lg\" href=\"https://www.tripadvisor.fr\"  ></a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  434 => 89,  416 => 75,  395 => 59,  383 => 50,  379 => 49,  375 => 48,  371 => 47,  364 => 42,  355 => 41,  337 => 10,  319 => 9,  291 => 22,  284 => 18,  280 => 17,  275 => 15,  271 => 14,  267 => 13,  261 => 11,  259 => 10,  255 => 9,  249 => 5,  240 => 4,  183 => 171,  179 => 170,  175 => 169,  100 => 97,  96 => 96,  92 => 95,  88 => 94,  84 => 93,  80 => 92,  76 => 91,  73 => 90,  71 => 89,  56 => 76,  54 => 75,  47 => 70,  45 => 41,  42 => 40,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"en\">
{% block head %}
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{% block title %}Hotel App{% endblock %}</title>
        {% block stylesheets %} {% endblock %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/sidenav.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">

        

      <!--  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />-->





        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-131743009-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131743009-1');
        </script>
    </head>

{% endblock %}
    <body>
    {% block top_bar %}
        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path(\"home\")}}\">Home</a></li>
              <li><a href=\"{{ path(\"about_us\")}}\">About us</a></li>
              <li><a href=\"{{ path(\"location\")}}\">How to locate</a></li>
              <li><a href=\"{{ path(\"contact\")}}\">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

        <div class=\"col-sm-auto\">
            <div class=\"float-right\" >
                <a class=\"fa fa-sign-in\" href=\"{{ path(\"admin\")}}\"  ><b>Admin</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-facebook-official fa-lg\" href=\"http://www.facebook.com\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-twitter fa-lg\" href=\"http://www.twitter.com\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-bookmark fa-lg\" id=\"bookmark-this\" href=\"#\"  ></a>&nbsp;&nbsp;&nbsp;
                <a class=\"fa fa-tripadvisor fa-lg\" href=\"https://www.tripadvisor.fr\"  ></a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>



    {% endblock %}
    <noscript><h4 align=\"center\">For full functionality of this page it is necessary to enable JavaScript.
            Here are the <a href=\"http://www.enable-javascript.com\" target=\"_blank\">
                instructions how to enable JavaScript in your web browser</a></h4></noscript>
    <br>

        {% block body %} {% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2018</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}

        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>


        <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>


        \$(document).ready(function() {

            \$(\"#dt1\").pickadate(
                {
                    formatSubmit: 'yyyy-mm-dd',
                    //formatSubmit: 'yyyy-mm-dd',
                    //format: 'd mmmm, yyyy',
                    format: ' dddd, d mmmm yyyy',
                    min: new Date('today')
                    //max: new Date(2019,12,31),

                });

            \$(\"#dt2\").pickadate(
                {
                    formatSubmit: 'yyyy-mm-dd',
                    //formatSubmit: 'yyyy-mm-dd',
                    //format: 'd mmmm, yyyy',
                    format: ' dddd, d mmmm yyyy',
                    //min: new Date(this),
                   // min: new Date(),
                    max: new Date(2019, 12, 31),



                });


            var from_\$input = \$('#dt1').pickadate(),
                from_picker = from_\$input.pickadate('picker');

            var to_\$input = \$('#dt2').pickadate(),
                to_picker = to_\$input.pickadate('picker');


            // Check if there’s a “from” or “to” date to start with.
            if ( from_picker.get('value') ) {
                to_picker.set('min', from_picker.get('select'))
            }
            if ( to_picker.get('value') ) {
                from_picker.set('max', to_picker.get('select'))
            }

            // When something is selected, update the “from” and “to” limits.
            from_picker.on('set', function(event) {
                if ( event.select ) {
                    to_picker.set('min', from_picker.get('select'))
                }
                else if ( 'clear' in event ) {
                    to_picker.set('min', false)
                }
            });
            to_picker.on('set', function(event) {
                if ( event.select ) {
                    from_picker.set('max', to_picker.get('select'))
                }
                else if ( 'clear' in event ) {
                    from_picker.set('max', false)
                }
            })
        });
    </script>

    <!-- for bookmark-->

    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/addtohomescreen.css') }}\">
    <script src=\"{{ asset('js/addtohomescreen.js') }}\"></script>
    <!-- Additionally, include jQuery (necessary for bookmark script) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>





    <script>
        jQuery(function(\$) {

            \$('#bookmark-this').click(function(e) {
                var bookmarkURL = window.location.href;
                var bookmarkTitle = document.title;

                if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
                    // Mobile browsers
                    addToHomescreen({ autostart: false, startDelay: 0 }).show(true);
                } else if (window.sidebar && window.sidebar.addPanel) {
                    // Firefox <=22
                    window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
                } else if ((window.sidebar && /Firefox/i.test(navigator.userAgent)) || (window.opera && window.print)) {
                    // Firefox 23+ and Opera <=14
                    \$(this).attr({
                        href: bookmarkURL,
                        title: bookmarkTitle,
                        rel: 'sidebar'
                    }).off(e);
                    return true;
                } else if (window.external && ('AddFavorite' in window.external)) {
                    // IE Favorites
                    window.external.AddFavorite(bookmarkURL, bookmarkTitle);
                } else {
                    // Other browsers (mainly WebKit & Blink - Safari, Chrome, Opera 15+)
                    alert('Press ' + (/Mac/i.test(navigator.platform) ? 'Cmd' : 'Ctrl') + '+D to bookmark this page.');
                }

                return false;
            });

        });

    </script>

    </body>
</html>
", "base.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/base.html.twig");
    }
}
