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

<form action=\"\" method=\"post\">
        <div class=\"row\">
           <div class=\"medium-12 large-12 columns\">
             <h4>NUMBER OF GUESTS AND ROOMS</h4>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select class=\"\" name=\"room_type\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 32
            echo "                            <option value=\"\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"form-control\">
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 42
            echo "                            <option value=\"\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "floor", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select class=\"form-control\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 52
            echo "                            <option value=\"\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "floor", array()), "html", null, true);
            echo "</option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </select>
                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select class=\"form-control\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 63
            echo "                            <option value=\"\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "floor", array()), "html", null, true);
            echo "</option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </select>
                </div>
            </div>

        </div>


    </form>



    <table class=\"stack\">
        <thead>
        <tr>
            <th width=\"200\">Room</th>
            <th width=\"200\">Availability</th>
            <th width=\"200\">Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 87
            echo "            <tr>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", array()), "html", null, true);
            echo "</td>

                <td>
                    <div class=\"callout success\">
                        <h7>Available</h7>
                    </div>
                </td>
                <td>
                    <a class=\"hollow button warning\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pre_booking");
            echo "\">BOOK NOW</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </tbody>
    </table>
    </div>
    </div>


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
        return array (  231 => 100,  221 => 96,  210 => 88,  207 => 87,  203 => 86,  181 => 66,  171 => 63,  167 => 62,  158 => 55,  148 => 52,  144 => 51,  135 => 44,  126 => 42,  122 => 41,  113 => 34,  104 => 32,  100 => 31,  74 => 8,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block top_bar %}{% endblock %}


{% block body %}

    {{ dump() }}

<form action=\"\" method=\"post\">
        <div class=\"row\">
           <div class=\"medium-12 large-12 columns\">
             <h4>NUMBER OF GUESTS AND ROOMS</h4>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select class=\"\" name=\"room_type\">
                        {% for room in rooms %}
                            <option value=\"\" >{{room.id}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"form-control\">
                        {% for room in rooms %}
                            <option value=\"\" >{{room.floor}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select class=\"form-control\">
                        {% for room in rooms %}
                            <option value=\"\" >{{room.floor}}</option>

                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select class=\"form-control\">
                        {% for room in rooms %}
                            <option value=\"\" >{{room.floor}}</option>

                        {% endfor %}
                    </select>
                </div>
            </div>

        </div>


    </form>



    <table class=\"stack\">
        <thead>
        <tr>
            <th width=\"200\">Room</th>
            <th width=\"200\">Availability</th>
            <th width=\"200\">Action</th>
        </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>
                <td>{{ room.name}}</td>

                <td>
                    <div class=\"callout success\">
                        <h7>Available</h7>
                    </div>
                </td>
                <td>
                    <a class=\"hollow button warning\" href=\"{{ path(\"pre_booking\")  }}\">BOOK NOW</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>


{% endblock %}

", "home/available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
