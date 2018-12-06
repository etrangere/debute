<?php

/* home/available_room_list.html.twig */
class __TwigTemplate_8dfb63f5ce25e0f4c3d0cf69d8e38328ae72f7f6492d7604d55cba7dfb811466 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/available_room_list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/available_room_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/available_room_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

<form>
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>NUMBER OF GUESTS AND ROOMS</h4>

            <form action=\"\" method=\"post\">
                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
            </form>
        </div>
    </div>
    <div class=\"medium-2  columns\">
            <label>ROOM TYPE</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[room_type]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "room_type", array(), "any", false, true), "single", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "\">Single Room</option>
                    <option input name=\"form[room_type]\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "room_type", array(), "any", false, true), "double", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "\">Double Room</option>
                    <option input name=\"form[room_type]\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "room_type", array(), "any", false, true), "triple", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "name", array())) : ("")), "html", null, true);
        echo "\">Triple Room</option>
                </select>
            </div>
        </div>
        <div class=\"medium-2  columns\">
            <label>Adult</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[adult]\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adult", array(), "any", false, true), 1, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "adult", array()), 1, array())) : ("")), "html", null, true);
        echo "\">1 adult</option>
                    <option input name=\"form[adult]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adult", array(), "any", false, true), 2, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "adult", array()), 2, array())) : ("")), "html", null, true);
        echo "\">2 adults</option>
                    <option input name=\"form[adult]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adult", array(), "any", false, true), 3, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "adult", array()), 3, array())) : ("")), "html", null, true);
        echo "\">3 adults</option>
                </select>
            </div>
        </div>

        <div class=\"medium-2  columns\">
            <label>Child</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[child]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "child", array(), "any", false, true), 1, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "child", array()), 1, array())) : ("")), "html", null, true);
        echo "\">1 child</option>
                    <option input name=\"form[child]\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "child", array(), "any", false, true), 2, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "child", array()), 2, array())) : ("")), "html", null, true);
        echo "\">2 childs</option>
                    <option input name=\"form[child]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "child", array(), "any", false, true), 3, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "child", array()), 3, array())) : ("")), "html", null, true);
        echo "\">3 childs</option>
                </select>
            </div>
        </div>
        <div class=\"medium-2  columns\">
            <label>Baby</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[baby]\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baby", array(), "any", false, true), 1, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "baby", array()), 1, array())) : ("")), "html", null, true);
        echo "\">1 baby</option>
                    <option input name=\"form[baby]\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baby", array(), "any", false, true), 2, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "baby", array()), 2, array())) : ("")), "html", null, true);
        echo "\">2 babies</option>
                    <option input name=\"form[baby]\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baby", array(), "any", false, true), 3, array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "baby", array()), 3, array())) : ("")), "html", null, true);
        echo "\">3 babies</option>
                </select>
            </div>
        </div>
    </form>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/available_room_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 69,  167 => 68,  163 => 67,  151 => 58,  147 => 57,  143 => 56,  130 => 46,  126 => 45,  122 => 44,  110 => 35,  106 => 34,  102 => 33,  74 => 8,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block top_bar %}{% endblock %}


{% block body %}

    {{ dump() }}

<form>
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>NUMBER OF GUESTS AND ROOMS</h4>

            <form action=\"\" method=\"post\">
                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
            </form>
        </div>
    </div>
    <div class=\"medium-2  columns\">
            <label>ROOM TYPE</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[room_type]\" value=\"{{ form.room_type.single is defined ? form.name : '' }}\">Single Room</option>
                    <option input name=\"form[room_type]\" value=\"{{ form.room_type.double is defined ? form.name : '' }}\">Double Room</option>
                    <option input name=\"form[room_type]\" value=\"{{ form.room_type.triple is defined ? form.name : '' }}\">Triple Room</option>
                </select>
            </div>
        </div>
        <div class=\"medium-2  columns\">
            <label>Adult</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[adult]\" value=\"{{ form.adult.1 is defined ? form.adult.1 : '' }}\">1 adult</option>
                    <option input name=\"form[adult]\" value=\"{{ form.adult.2 is defined ? form.adult.2 : '' }}\">2 adults</option>
                    <option input name=\"form[adult]\" value=\"{{ form.adult.3 is defined ? form.adult.3 : '' }}\">3 adults</option>
                </select>
            </div>
        </div>

        <div class=\"medium-2  columns\">
            <label>Child</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[child]\" value=\"{{ form.child.1 is defined ? form.child.1 : '' }}\">1 child</option>
                    <option input name=\"form[child]\" value=\"{{ form.child.2 is defined ? form.child.2 : '' }}\">2 childs</option>
                    <option input name=\"form[child]\" value=\"{{ form.child.3 is defined ? form.child.3 : '' }}\">3 childs</option>
                </select>
            </div>
        </div>
        <div class=\"medium-2  columns\">
            <label>Baby</label>
            <div>
                <select>
                    <option value=\"\" selected disabled>Please select</option>
                    <option input name=\"form[baby]\" value=\"{{ form.baby.1 is defined ? form.baby.1 : '' }}\">1 baby</option>
                    <option input name=\"form[baby]\" value=\"{{ form.baby.2 is defined ? form.baby.2 : '' }}\">2 babies</option>
                    <option input name=\"form[baby]\" value=\"{{ form.baby.3 is defined ? form.baby.3 : '' }}\">3 babies</option>
                </select>
            </div>
        </div>
    </form>



{% endblock %}

", "home/available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
