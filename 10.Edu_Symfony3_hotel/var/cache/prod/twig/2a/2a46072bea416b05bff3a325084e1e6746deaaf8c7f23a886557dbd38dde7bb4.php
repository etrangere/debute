<?php

/* home/contact.html.twig */
class __TwigTemplate_9cb457b5eccd7facbbe0bc48af54262fa59dd32b75f9d1b7f30a5976d5c59ad0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div align=\"center\">
       <h2>Contact Information</h2>
       <p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: <a href=\"mailto:g.khachatrian.job@gmail.com?Subject=contact\" >g.khachatrian.job@gmail.com</a> </p></center>
    </div>

    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div align=\"center\" class=\"col-md-10\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>

    <div class=\"site-section\" align=\"center\">
        <div class=\"container\">
            <div class=\"row block-9\">
                <div class=\"col-md-6 pr-md-5\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\"  class=\"\" style=\"width: 50%\" placeholder=\"Your Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"\" style=\"width: 60%\" placeholder=\"Your Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"\" style=\"width: 40%\" placeholder=\"Subject\" >
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" id=\"\" cols=\"30\" rows=\"8\"  style=\"width: 40%\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"#\"><input align=\"center\" type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div align=\"center\">
        <b><h5>Opening Hours</h5></b>
        <p>Monday - Saturday  8:00 - 22:00</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div align=\"center\">
       <h2>Contact Information</h2>
       <p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: <a href=\"mailto:g.khachatrian.job@gmail.com?Subject=contact\" >g.khachatrian.job@gmail.com</a> </p></center>
    </div>

    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div align=\"center\" class=\"col-md-10\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>

    <div class=\"site-section\" align=\"center\">
        <div class=\"container\">
            <div class=\"row block-9\">
                <div class=\"col-md-6 pr-md-5\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <input type=\"text\"  class=\"\" style=\"width: 50%\" placeholder=\"Your Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"\" style=\"width: 60%\" placeholder=\"Your Email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"\" style=\"width: 40%\" placeholder=\"Subject\" >
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"\" id=\"\" cols=\"30\" rows=\"8\"  style=\"width: 40%\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"#\"><input align=\"center\" type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div align=\"center\">
        <b><h5>Opening Hours</h5></b>
        <p>Monday - Saturday  8:00 - 22:00</p>
    </div>
{% endblock %}
", "home/contact.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/contact.html.twig");
    }
}