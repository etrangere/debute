<?php

/* home/validation_payment.html.twig */
class __TwigTemplate_40db0213ec70b632377769a26f906e38ee8685b89c103e7519bb58e381d9f1c3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/validation_payment.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/validation_payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/validation_payment.html.twig"));

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
    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/progresbar.css"), "html", null, true);
        echo "\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li>Your choice</li>
            <li>Booking information</li>
            <li class=\"is-active\">Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>


    <div class=\"medium-12  columns\"><br><br>

    <input type=\"radio\" name=\"r\" id=\"radio2\">With this option you can pay your charges in hotel at your arrival</br>

    <a align=\"center\"  class=\"medium-12  columns\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmation");
        echo "\"><input type=\"submit\" id=\"text1\" disabled=\"disabled\" class=\"button\" value=\"Booking validation without payment\"></a>

    <hr>
    <br><br><h3>Here will be Stripe billing system</h3><br><br>
    <input type=\"radio\" name=\"r\" id=\"radio1\">You can pay your charges immediately by one of our payment options</br>

    <input type=\"text\" id=\"text2\" disabled=\"disabled\" placeholder=\"Lenght\">
    <input type=\"text\" id=\"text3\" disabled=\"disabled\" placeholder=\"Width\">
    <input type=\"text\" id=\"text4\" disabled=\"disabled\" placeholder=\"Depth\">



        <script>
            document.getElementById(\"radio1\").onclick = function() {myFunction1()};

            function myFunction1() {
                if(document.getElementById(\"radio1\").checked == true)
                {
                    document.getElementById(\"text1\").disabled = true;
                    document.getElementById(\"text2\").disabled = false;
                    document.getElementById(\"text3\").disabled = false;
                    document.getElementById(\"text4\").disabled = false;
                }
                else
                {
                    document.getElementById(\"text1\").disabled = false;
                    document.getElementById(\"text2\").disabled = true;
                    document.getElementById(\"text3\").disabled = true;
                    document.getElementById(\"text4\").disabled = true;
                }

            }


            document.getElementById(\"radio2\").onclick = function() {myFunction2()};

            function myFunction2() {
                if(document.getElementById(\"radio2\").checked == false)
                {
                    document.getElementById(\"text1\").disabled = true;
                    document.getElementById(\"text2\").disabled = false;
                    document.getElementById(\"text3\").disabled = false;
                    document.getElementById(\"text4\").disabled = false;
                }
                else
                {
                    document.getElementById(\"text1\").disabled = false;
                    document.getElementById(\"text2\").disabled = true;
                    document.getElementById(\"text3\").disabled = true;
                    document.getElementById(\"text4\").disabled = true;
                }

            }
        </script>




</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/validation_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  57 => 9,  53 => 7,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/progresbar.css') }}\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li>Your choice</li>
            <li>Booking information</li>
            <li class=\"is-active\">Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>


    <div class=\"medium-12  columns\"><br><br>

    <input type=\"radio\" name=\"r\" id=\"radio2\">With this option you can pay your charges in hotel at your arrival</br>

    <a align=\"center\"  class=\"medium-12  columns\" href=\"{{ path(\"confirmation\")}}\"><input type=\"submit\" id=\"text1\" disabled=\"disabled\" class=\"button\" value=\"Booking validation without payment\"></a>

    <hr>
    <br><br><h3>Here will be Stripe billing system</h3><br><br>
    <input type=\"radio\" name=\"r\" id=\"radio1\">You can pay your charges immediately by one of our payment options</br>

    <input type=\"text\" id=\"text2\" disabled=\"disabled\" placeholder=\"Lenght\">
    <input type=\"text\" id=\"text3\" disabled=\"disabled\" placeholder=\"Width\">
    <input type=\"text\" id=\"text4\" disabled=\"disabled\" placeholder=\"Depth\">



        <script>
            document.getElementById(\"radio1\").onclick = function() {myFunction1()};

            function myFunction1() {
                if(document.getElementById(\"radio1\").checked == true)
                {
                    document.getElementById(\"text1\").disabled = true;
                    document.getElementById(\"text2\").disabled = false;
                    document.getElementById(\"text3\").disabled = false;
                    document.getElementById(\"text4\").disabled = false;
                }
                else
                {
                    document.getElementById(\"text1\").disabled = false;
                    document.getElementById(\"text2\").disabled = true;
                    document.getElementById(\"text3\").disabled = true;
                    document.getElementById(\"text4\").disabled = true;
                }

            }


            document.getElementById(\"radio2\").onclick = function() {myFunction2()};

            function myFunction2() {
                if(document.getElementById(\"radio2\").checked == false)
                {
                    document.getElementById(\"text1\").disabled = true;
                    document.getElementById(\"text2\").disabled = false;
                    document.getElementById(\"text3\").disabled = false;
                    document.getElementById(\"text4\").disabled = false;
                }
                else
                {
                    document.getElementById(\"text1\").disabled = false;
                    document.getElementById(\"text2\").disabled = true;
                    document.getElementById(\"text3\").disabled = true;
                    document.getElementById(\"text4\").disabled = true;
                }

            }
        </script>




</div>
{% endblock %}
", "home/validation_payment.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/validation_payment.html.twig");
    }
}
