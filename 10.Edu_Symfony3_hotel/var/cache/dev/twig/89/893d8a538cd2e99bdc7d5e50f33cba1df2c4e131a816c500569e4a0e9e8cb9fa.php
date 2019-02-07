<?php

/* :home:front_booking.html.twig */
class __TwigTemplate_394a72e866e171357957be4e76643de993584666a400e85df58362823203671f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:front_booking.html.twig", 1);
        $this->blocks = [
            'top_bar' => [$this, 'block_top_bar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:front_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:front_booking.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_top_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
    ";
        // line 8
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
            <li class=\"is-active\">Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4></h4>
            <form action=\"\" method=\"post\">
                <ul>
                    ";
        // line 25
        if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
            // line 26
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "                            <li>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["error"], "message", [])) : ("")), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </ul>
                <div class=\"medium-4  columns\">
                    <label for=\"title\">Title</label>

                    <select id=\"title\" name=\"form[title]\" style=\"border-color: #00ace6\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 36
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "title", []))) ? ("selected") : (""));
            echo " \">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </select>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"name\">Name</label>
                    <input name=\"form[name]\" id=\"name\" style=\"border-color: #00ace6\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"last_name\">Last Name</label>
                    <input name=\"form[last_name]\" id=\"last_name\" style=\"border-color: #00ace6\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "last_name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-8  columns\">
                    <label for=\"address\">Address</label>
                    <input name=\"form[address]\" id=\"address\" style=\"border-color: #00ace6\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "address", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"zip\">ZipCode</label>
                    <input name=\"form[zip_code]\" id=\"zip\" list=\"zipr\" style=\"border-color: #00ace6\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip_code", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "zip_code", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                    <datalist  id=\"zipr\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 57
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "zip", []), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"city\">City</label>
                    <input name=\"form[city]\" id=\"city\" list=\"cityr\" style=\"border-color: #00ace6\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "city", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                    <datalist  id=\"cityr\">
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 66
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "city", []), "html", null, true);
            echo "\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"state\">State</label>
                    <input name=\"form[state]\" id=\"state\" list=\"stater\" style=\"border-color: #00ace6\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "state", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" formnovalidate/>
                    <datalist  id=\"stater\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 75
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "state", []), "html", null, true);
            echo "\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </datalist>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"tel\">Tel:</label>
                    <input name=\"form[tel]\" id=\"tel\" style=\"border-color: #00ace6\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "tel", [])) : ("")), "html", null, true);
        echo "\" type=\"tel\" formnovalidate/>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"email\">Email</label>
                    <input name=\"form[client_email]\" id=\"email\" style=\"border-color: #00ace6\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_email", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "client_email", [])) : ("")), "html", null, true);
        echo "\" type=\"email\" formnovalidate/>
                </div>
                <div class=\"medium-12  columns\">
                    <input type=\"submit\" class=\"button\" value=\"BOOKING INFORMATION\"  />
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
        return ":home:front_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 85,  239 => 81,  233 => 77,  224 => 75,  220 => 74,  215 => 72,  209 => 68,  200 => 66,  196 => 65,  191 => 63,  185 => 59,  176 => 57,  172 => 56,  167 => 54,  160 => 50,  153 => 46,  146 => 42,  140 => 38,  127 => 36,  123 => 35,  116 => 30,  113 => 29,  104 => 27,  99 => 26,  97 => 25,  79 => 10,  74 => 8,  71 => 7,  62 => 6,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block top_bar %}{% endblock %}

{% block body %}

    {{ dump() }}
    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/progresbar.css') }}\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li>Your choice</li>
            <li class=\"is-active\">Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4></h4>
            <form action=\"\" method=\"post\">
                <ul>
                    {% if errors is defined %}
                        {% for error in errors %}
                            <li>{{ error.message is defined ? error.message : '' }}</li>
                        {% endfor %}
                    {% endif %}
                </ul>
                <div class=\"medium-4  columns\">
                    <label for=\"title\">Title</label>

                    <select id=\"title\" name=\"form[title]\" style=\"border-color: #00ace6\">
                        {% for title in titles %}
                            <option value=\"{{ title }} {{ title == form.title ? 'selected' : '' }} \">{{ title | capitalize }}.</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"name\">Name</label>
                    <input name=\"form[name]\" id=\"name\" style=\"border-color: #00ace6\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"last_name\">Last Name</label>
                    <input name=\"form[last_name]\" id=\"last_name\" style=\"border-color: #00ace6\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-8  columns\">
                    <label for=\"address\">Address</label>
                    <input name=\"form[address]\" id=\"address\" style=\"border-color: #00ace6\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" formnovalidate/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"zip\">ZipCode</label>
                    <input name=\"form[zip_code]\" id=\"zip\" list=\"zipr\" style=\"border-color: #00ace6\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" formnovalidate/>
                    <datalist  id=\"zipr\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.zip }}\">
                        {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"city\">City</label>
                    <input name=\"form[city]\" id=\"city\" list=\"cityr\" style=\"border-color: #00ace6\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" formnovalidate/>
                    <datalist  id=\"cityr\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.city }}\">
                            {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"state\">State</label>
                    <input name=\"form[state]\" id=\"state\" list=\"stater\" style=\"border-color: #00ace6\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" formnovalidate/>
                    <datalist  id=\"stater\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.state }}\">
                            {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"tel\">Tel:</label>
                    <input name=\"form[tel]\" id=\"tel\" style=\"border-color: #00ace6\" value=\"{{ form.tel is defined ? form.tel : '' }}\" type=\"tel\" formnovalidate/>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"email\">Email</label>
                    <input name=\"form[client_email]\" id=\"email\" style=\"border-color: #00ace6\" value=\"{{ form.client_email is defined ? form.client_email : '' }}\" type=\"email\" formnovalidate/>
                </div>
                <div class=\"medium-12  columns\">
                    <input type=\"submit\" class=\"button\" value=\"BOOKING INFORMATION\"  />
                </div>
            </form>
        </div>
    </div>

{% endblock %}
", ":home:front_booking.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/front_booking.html.twig");
    }
}
