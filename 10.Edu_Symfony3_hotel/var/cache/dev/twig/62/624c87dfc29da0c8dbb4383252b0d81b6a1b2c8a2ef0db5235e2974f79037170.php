<?php

/* home/contact.html.twig */
class __TwigTemplate_2d8c94e4a96756aefe3c1b75159f840ca8c008d98222fd60914a353bc095dc6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

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
<center><h2>Contact Information</h2></center>
<center><p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: g.khachatrian.job@gmail.com</p></center>


    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-10\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>
    </div>




    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row block-9\">
                <div class=\"col-md-6 pr-md-5\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Your Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Your Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Subject\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control px-3 py-3\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                           <!-- <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary py-3 px-5\">-->
                            <a class=\"medium-6  columns\" href=\"#\"><input type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                    </form>

                </div>


        </div>
    </div>

        <center> <b><h5>Opening Hours</h5></b></center>
        <center> <p><li>Monday - Saturday  8:00 - 22:00</li></p></center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}

<center><h2>Contact Information</h2></center>
<center><p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: g.khachatrian.job@gmail.com</p></center>


    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-10\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>
    </div>




    <div class=\"site-section\">
        <div class=\"container\">
            <div class=\"row block-9\">
                <div class=\"col-md-6 pr-md-5\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Your Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Your Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control px-3 py-3\" placeholder=\"Subject\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control px-3 py-3\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                           <!-- <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary py-3 px-5\">-->
                            <a class=\"medium-6  columns\" href=\"#\"><input type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                    </form>

                </div>


        </div>
    </div>

        <center> <b><h5>Opening Hours</h5></b></center>
        <center> <p><li>Monday - Saturday  8:00 - 22:00</li></p></center>

{% endblock %}
", "home/contact.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/contact.html.twig");
    }
}
