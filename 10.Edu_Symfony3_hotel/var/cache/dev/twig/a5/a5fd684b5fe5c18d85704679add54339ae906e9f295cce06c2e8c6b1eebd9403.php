<?php

/* home/front_booking.html.twig */
class __TwigTemplate_4543c8cbcb3b596dd8b474529909c6670352003dbb1d05198c076ea3728a504a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/front_booking.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/front_booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/front_booking.html.twig"));

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
                <div class=\"medium-4  columns\">
                    <label for=\"title\">Title</label>

                    <select id=\"title\" name=\"form[title]\" style=\"border-color: #00ace6\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 29
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "title", []))) ? ("selected") : (""));
            echo " \">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>

                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"name\">Name</label>
                    <input name=\"form[name]\" id=\"name\" style=\"border-color: #00ace6\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"last_name\">Last Name</label>
                    <input name=\"form[last_name]\" id=\"last_name\" style=\"border-color: #00ace6\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_name", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "last_name", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                </div>
                <div class=\"medium-8  columns\">
                    <label for=\"address\">Address</label>
                    <input name=\"form[address]\" id=\"address\" style=\"border-color: #00ace6\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "address", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"zip\">ZipCode</label>
                    <input name=\"form[zip_code]\" id=\"zip\" list=\"zipr\" style=\"border-color: #00ace6\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zip_code", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "zip_code", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                    <datalist  id=\"zipr\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 51
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "zip", []), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"city\">City</label>
                    <input name=\"form[city]\" id=\"city\" list=\"cityr\" style=\"border-color: #00ace6\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "city", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                    <datalist  id=\"cityr\">
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 60
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "city", []), "html", null, true);
            echo "\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"state\">State</label>
                    <input name=\"form[state]\" id=\"state\" list=\"stater\" style=\"border-color: #00ace6\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "state", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
                    <datalist  id=\"stater\">
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["z_c_ss"]) || array_key_exists("z_c_ss", $context) ? $context["z_c_ss"] : (function () { throw new Twig_Error_Runtime('Variable "z_c_ss" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["z_c_s"]) {
            // line 69
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["z_c_s"], "state", []), "html", null, true);
            echo "\">
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['z_c_s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </datalist>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"email\">Email</label>
                    <input name=\"form[client_email]\" id=\"email\" style=\"border-color: #00ace6\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "client_email", [], "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "client_email", [])) : ("")), "html", null, true);
        echo "\" type=\"text\" required/>
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
        return "home/front_booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 75,  211 => 71,  202 => 69,  198 => 68,  193 => 66,  187 => 62,  178 => 60,  174 => 59,  169 => 57,  163 => 53,  154 => 51,  150 => 50,  145 => 48,  138 => 44,  131 => 40,  124 => 36,  117 => 31,  104 => 29,  100 => 28,  79 => 10,  74 => 8,  71 => 7,  62 => 6,  45 => 4,  15 => 1,);
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
                    <input name=\"form[name]\" id=\"name\" style=\"border-color: #00ace6\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" required/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"last_name\">Last Name</label>
                    <input name=\"form[last_name]\" id=\"last_name\" style=\"border-color: #00ace6\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" required/>
                </div>
                <div class=\"medium-8  columns\">
                    <label for=\"address\">Address</label>
                    <input name=\"form[address]\" id=\"address\" style=\"border-color: #00ace6\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" required/>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"zip\">ZipCode</label>
                    <input name=\"form[zip_code]\" id=\"zip\" list=\"zipr\" style=\"border-color: #00ace6\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" required/>
                    <datalist  id=\"zipr\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.zip }}\">
                        {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"city\">City</label>
                    <input name=\"form[city]\" id=\"city\" list=\"cityr\" style=\"border-color: #00ace6\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" required/>
                    <datalist  id=\"cityr\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.city }}\">
                            {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-4  columns\">
                    <label for=\"state\">State</label>
                    <input name=\"form[state]\" id=\"state\" list=\"stater\" style=\"border-color: #00ace6\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" required/>
                    <datalist  id=\"stater\">
                        {% for z_c_s in z_c_ss %}
                        <option value=\"{{ z_c_s.state }}\">
                            {% endfor %}
                    </datalist>
                </div>
                <div class=\"medium-12  columns\">
                    <label for=\"email\">Email</label>
                    <input name=\"form[client_email]\" id=\"email\" style=\"border-color: #00ace6\" value=\"{{ form.client_email is defined ? form.client_email : '' }}\" type=\"text\" required/>
                </div>
                <div class=\"medium-12  columns\">
                    <input type=\"submit\" class=\"button\" value=\"BOOKING INFORMATION\"  />
                </div>
            </form>
        </div>
    </div>

{% endblock %}
", "home/front_booking.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/front_booking.html.twig");
    }
}
