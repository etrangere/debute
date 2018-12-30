<?php

/* home/confirmation.html.twig */
class __TwigTemplate_110afebd3f7d2ddeca8dbc8177c5992d0804f3899c4f8dda781d040cc8b855e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/confirmation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/confirmation.html.twig"));

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
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/progresbar.css"), "html", null, true);
        echo "\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li>Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li class=\"is-active\">Booking confirmation</li>
        </ul>
    </div>
<h3 align=\"center\">You will receive en confirmation email for your booking!</h3>

<hr>
    <h2 align=\"center\">Booking summary!</h2>

    <div align=\"center\">
    <input  type=\"button\" class=\"button\" value=\"Print\" onclick=\"printData('print')\"/>
    <input  type=\"button\" class=\"button\" value=\"Download PDF\" />
    </div>




<div id=\"print\"  style=\"padding: 1%\">

  <fieldset>
      <legend align=\"center\"><h5>Welcome to Hotel de France</h5></legend>

       <table class=\"medium-10\" align=\"center\" border=\"1\">

        <tr>
            <th scope=\"row\">Referance</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 41, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">First name</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 45, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Last name</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "lastname", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 49, $this->source); })()), "lastname", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Check-In</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 53, $this->source); })()), "dateIn", array())), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Check-Out</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 57, $this->source); })()), "dateOut", array())), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Room type</th>
            <td>";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "roomtype", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 61, $this->source); })()), "roomtype", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Adult</th>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "adult", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 65, $this->source); })()), "adult", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Child</th>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "child", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 69, $this->source); })()), "child", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Baby</th>
            <td>";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "baby", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 73, $this->source); })()), "baby", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Address</th>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 77, $this->source); })()), "address", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">ZipCode</th>
            <td>";
        // line 81
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "zipcode", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 81, $this->source); })()), "zipcode", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">City</th>
            <td>";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 85, $this->source); })()), "city", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">State</th>
            <td>";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "state", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 89, $this->source); })()), "state", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Email</th>
            <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 93, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Tel:</th>
            <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 97, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">TOTAL</th>
            <td>";
        // line 101
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 101, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
      </table>
  </fieldset>

</div>

    <!--
    <a class='north' href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/TP/Resume.pdf"), "html", null, true);
        echo "\"
       target=\"_blank\" title=\"Download.pdf\">
        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/TP/images/icn-save.jpg"), "html", null, true);
        echo "\"
             alt=\"Download the pdf version\" /></a>
-->
<script>
    function printData()
    {
    var divToPrint=document.getElementById(\"print\");
    newWin= window.open(\"print\");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
    }
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 111,  210 => 109,  199 => 101,  192 => 97,  185 => 93,  178 => 89,  171 => 85,  164 => 81,  157 => 77,  150 => 73,  143 => 69,  136 => 65,  129 => 61,  122 => 57,  115 => 53,  108 => 49,  101 => 45,  94 => 41,  60 => 10,  53 => 7,  44 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}




{% block body %}
    {{ dump() }}

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/progresbar.css') }}\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li>Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li class=\"is-active\">Booking confirmation</li>
        </ul>
    </div>
<h3 align=\"center\">You will receive en confirmation email for your booking!</h3>

<hr>
    <h2 align=\"center\">Booking summary!</h2>

    <div align=\"center\">
    <input  type=\"button\" class=\"button\" value=\"Print\" onclick=\"printData('print')\"/>
    <input  type=\"button\" class=\"button\" value=\"Download PDF\" />
    </div>




<div id=\"print\"  style=\"padding: 1%\">

  <fieldset>
      <legend align=\"center\"><h5>Welcome to Hotel de France</h5></legend>

       <table class=\"medium-10\" align=\"center\" border=\"1\">

        <tr>
            <th scope=\"row\">Referance</th>
            <td>{{client.id}}</td>
        </tr>
        <tr>
            <th scope=\"row\">First name</th>
            <td>{{client.name is defined ? client.name : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Last name</th>
            <td>{{client.lastname is defined ? client.lastname : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Check-In</th>
            <td>{{ reservation.dateIn|date   }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Check-Out</th>
            <td>{{ reservation.dateOut|date  }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Room type</th>
            <td>{{ client.roomtype is defined ? client.roomtype : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Adult</th>
            <td>{{client.adult is defined ? client.adult : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Child</th>
            <td>{{client.child is defined ? client.child : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Baby</th>
            <td>{{client.baby is defined ? client.baby : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Address</th>
            <td>{{client.address is defined ? client.address : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">ZipCode</th>
            <td>{{client.zipcode is defined ? client.zipcode : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">City</th>
            <td>{{client.city is defined ? client.city : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">State</th>
            <td>{{client.state is defined ? client.state : '' }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Email</th>
            <td>{{ client.email}}</td>
        </tr>
        <tr>
            <th scope=\"row\">Tel:</th>
            <td>{{ client.email}}</td>
        </tr>
        <tr>
            <th scope=\"row\">TOTAL</th>
            <td>{{ client.name is defined ? client.name : '' }}</td>
        </tr>
      </table>
  </fieldset>

</div>

    <!--
    <a class='north' href=\"{{ asset('bundles/TP/Resume.pdf') }}\"
       target=\"_blank\" title=\"Download.pdf\">
        <img src=\"{{ asset('bundles/TP/images/icn-save.jpg') }}\"
             alt=\"Download the pdf version\" /></a>
-->
<script>
    function printData()
    {
    var divToPrint=document.getElementById(\"print\");
    newWin= window.open(\"print\");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
    }
</script>


{% endblock %}
", "home/confirmation.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/confirmation.html.twig");
    }
}
