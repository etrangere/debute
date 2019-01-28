<?php

/* :home:contact.html.twig */
class __TwigTemplate_f2c516404dc11d51a84c906ebf5a04dfb74c7b0d161ee0898fb2e88463f4582a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "


    <div align=\"center\">
       <h2>Contact Information</h2>
       <p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: <a href=\"mailto:g.khachatrian@free.fr?Subject=contact\" >g.khachatrian@free.fr</a> </p></center>
    </div>

    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div align=\"center\" class=\"col-md-12\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>
   <div align=\"center\" style=\"color: darkorange\" id=\"message\">

       ";
        // line 26
        echo twig_escape_filter($this->env, (((isset($context["msg"]) || array_key_exists("msg", $context))) ? ((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new Twig_Error_Runtime('Variable "msg" does not exist.', 26, $this->source); })())) : ("Send status")), "html", null, true);
        echo twig_escape_filter($this->env, (((isset($context["message"]) || array_key_exists("message", $context))) ? ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 26, $this->source); })())) : ("")), "html", null, true);
        echo "
   </div>
    <div class=\"site-section\" align=\"center\">
        <div class=\"container\">
            <div class=\"row block-12\">
                <div class=\"col-md-12 pr-md-5\">
                    <form  method=\"post\"  action=\"\" id=\"contact-form\">

                        <div class=\"form-group\">
                            <input type=\"text\" id=\"contact_email\" name=\"form[contact_email]\" onclick=\"myFunction()\" style=\"width: 60%\" placeholder=\"Your Email\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"contact_subject\" name=\"form[contact_subject]\" onclick=\"myFunction()\" style=\"width: 40%\" placeholder=\"Subject\" required>
                        </div>
                        <div class=\"form-group\">
                            <textarea id=\"contact_message\" name=\"form[contact_message]\" onclick=\"myFunction()\" cols=\"30\" rows=\"8\"  style=\"width: 40%\" placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"#\"><input align=\"center\" id=\"send-message\" type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                        <div class=\"g-recaptcha\" data-sitekey=\"6LcFNIUUAAAAABRFJJut0NyDtuSgkXPKHr1xkv5s\"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div align=\"center\">
        <b><h5>Opening Hours</h5></b>
        <p>Monday - Saturday  8:00 - 22:00</p>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById(\"message\");

            if (x.style.display === \"none\") {
               return false;
            }
            else {
                x.style.display = \"none\";
            }
        }
    </script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
{{ dump() }}


    <div align=\"center\">
       <h2>Contact Information</h2>
       <p>198 West 21th Street,Suite 721 New York NY 10016</p>
       <p>Tel:+ 1235 1155 98</p>
       <p>Email: <a href=\"mailto:g.khachatrian@free.fr?Subject=contact\" >g.khachatrian@free.fr</a> </p></center>
    </div>

    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div align=\"center\" class=\"col-md-12\">

                <h4 class=\"heading\">Get In Touch</h4>
            </div>
        </div>
    </div>
   <div align=\"center\" style=\"color: darkorange\" id=\"message\">

       {{ msg is defined ? msg : 'Send status' }}{{ message is defined ? message : '' }}
   </div>
    <div class=\"site-section\" align=\"center\">
        <div class=\"container\">
            <div class=\"row block-12\">
                <div class=\"col-md-12 pr-md-5\">
                    <form  method=\"post\"  action=\"\" id=\"contact-form\">

                        <div class=\"form-group\">
                            <input type=\"text\" id=\"contact_email\" name=\"form[contact_email]\" onclick=\"myFunction()\" style=\"width: 60%\" placeholder=\"Your Email\" required>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"contact_subject\" name=\"form[contact_subject]\" onclick=\"myFunction()\" style=\"width: 40%\" placeholder=\"Subject\" required>
                        </div>
                        <div class=\"form-group\">
                            <textarea id=\"contact_message\" name=\"form[contact_message]\" onclick=\"myFunction()\" cols=\"30\" rows=\"8\"  style=\"width: 40%\" placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"#\"><input align=\"center\" id=\"send-message\" type=\"submit\" class=\"button\"  value=\"SEND MESSAGE\"></a>
                        </div>
                        <div class=\"g-recaptcha\" data-sitekey=\"6LcFNIUUAAAAABRFJJut0NyDtuSgkXPKHr1xkv5s\"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div align=\"center\">
        <b><h5>Opening Hours</h5></b>
        <p>Monday - Saturday  8:00 - 22:00</p>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById(\"message\");

            if (x.style.display === \"none\") {
               return false;
            }
            else {
                x.style.display = \"none\";
            }
        }
    </script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
{% endblock %}
", ":home:contact.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/contact.html.twig");
    }
}
