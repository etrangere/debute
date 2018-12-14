<?php

/* home/pre_booking.html.twig */
class __TwigTemplate_a4cfe686437065534c0614e16a14bad4397bf64342f9a8388730c03594def694 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/pre_booking.html.twig", 1);
        $this->blocks = array(
            'top_bar' => array($this, 'block_top_bar'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/pre_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/pre_booking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_top_bar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
    ";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4></h4>
            <form action=\"\" method=\"post\">
                <div class=\"medium-4  columns\">
                    <label>Title</label>

                    <select name=\"form[title]\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 18
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "title", array()))) ? ("selected") : (""));
            echo " \">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </select>

                </div>
                <div class=\"medium-4  columns\">
                    <label>Name</label>
                    <input name=\"form[name]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>Last Name</label>
                    <input name=\"form[last_name]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-8  columns\">
                    <label>Address</label>
                    <input name=\"form[address]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>ZipCode</label>
                    <input name=\"form[zip_code]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip_code", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>City</label>
                    <input name=\"form[city]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>State</label>
                    <input name=\"form[state]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-12  columns\">
                    <label>Email</label>
                    <input name=\"form[email]\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
                </div>
                <div class=\"medium-12  columns\">
                    <input type=\"submit\" value=\"BOOKING CONFIRMATION\" class=\"button success hollow\" />
                </div>
            </form>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/pre_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  145 => 45,  138 => 41,  131 => 37,  124 => 33,  117 => 29,  110 => 25,  103 => 20,  90 => 18,  86 => 17,  74 => 8,  71 => 7,  62 => 6,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block top_bar %}{% endblock %}

{% block body %}

    {{ dump() }}
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4></h4>
            <form action=\"\" method=\"post\">
                <div class=\"medium-4  columns\">
                    <label>Title</label>

                    <select name=\"form[title]\">
                        {% for title in titles %}
                            <option value=\"{{ title }} {{ title == form.title ? 'selected' : '' }} \">{{ title | capitalize }}.</option>
                        {% endfor %}
                    </select>

                </div>
                <div class=\"medium-4  columns\">
                    <label>Name</label>
                    <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>Last Name</label>
                    <input name=\"form[last_name]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-8  columns\">
                    <label>Address</label>
                    <input name=\"form[address]\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>ZipCode</label>
                    <input name=\"form[zip_code]\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>City</label>
                    <input name=\"form[city]\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-4  columns\">
                    <label>State</label>
                    <input name=\"form[state]\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-12  columns\">
                    <label>Email</label>
                    <input name=\"form[email]\" value=\"{{ form.email is defined ? form.email : '' }}\" type=\"text\" />
                </div>
                <div class=\"medium-12  columns\">
                    <input type=\"submit\" value=\"BOOKING CONFIRMATION\" class=\"button success hollow\" />
                </div>
            </form>
        </div>
    </div>

{% endblock %}
", "home/pre_booking.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/pre_booking.html.twig");
    }
}
