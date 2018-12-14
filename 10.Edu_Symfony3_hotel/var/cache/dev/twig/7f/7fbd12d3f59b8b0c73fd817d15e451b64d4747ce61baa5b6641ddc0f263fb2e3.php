<?php

/* home/available_room_list.html.twig */
class __TwigTemplate_a256e67af0d2505ae56e7f3723d56c5d1d7fc321ea9fa9c537c8bbe4cf83149d extends Twig_Template
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
           <br class=\"medium-12 large-12 columns\">

               <h4 align=\"center\">PLEASE CHOOSE DATES AND NUMBER OF GUESTS</h4></br>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select class=\"\" name=\"form[room_type]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">Single</option>
                        <option value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">Double</option>
                        <option value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">Triple</option>
                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"\" name=\"form[adult]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 person</option>
                        <option value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 persons</option>
                        <option value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 persons</option>

                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select class=\"\" name=\"form[child]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 child</option>
                        <option value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 childs</option>
                        <option value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select class=\"\" name=\"form[baby]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 baby</option>
                        <option value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 babies</option>
                        <option value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>
</form>
</br>
<hr>


    <h4 align=\"center\">AVAILABLE ROOMS</h4>

    <table >
        <thead>
          <tr >
            <th width=\"200\">Room</th>
            <th width=\"200\">Room Type</th>
            <th width=\"200\">Price</th>
            <th width=\"200\">Booking</th>
          </tr>
        </thead>
        <tbody >
        <div class=\"row\">
          ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 96
            echo "            <tr >
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "name", array()), "html", null, true);
            echo "</td>
                <td> <h7>RoomType</h7></td>
                <td> <h7>Price</h7></td>
                <td>
                    <a class=\"hollow button warning\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pre_booking");
            echo "\">BOOKING</a>
                </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </div>
        </tbody>
    </table>



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
        return array (  224 => 105,  214 => 101,  207 => 97,  204 => 96,  200 => 95,  173 => 71,  169 => 70,  165 => 69,  151 => 58,  147 => 57,  143 => 56,  130 => 46,  126 => 45,  122 => 44,  110 => 35,  106 => 34,  102 => 33,  74 => 8,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block top_bar %}{% endblock %}


{% block body %}

    {{ dump() }}

<form action=\"\" method=\"post\">
        <div class=\"row\">
           <br class=\"medium-12 large-12 columns\">

               <h4 align=\"center\">PLEASE CHOOSE DATES AND NUMBER OF GUESTS</h4></br>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" value=\"\" type=\"text\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" value=\"\" type=\"text\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select class=\"\" name=\"form[room_type]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"{{ 1|number_format }}\">Single</option>
                        <option value=\"{{ 2|number_format }}\">Double</option>
                        <option value=\"{{ 3|number_format }}\">Triple</option>
                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"\" name=\"form[adult]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"{{ 1|number_format }}\">1 person</option>
                        <option value=\"{{ 2|number_format }}\">2 persons</option>
                        <option value=\"{{ 3|number_format }}\">3 persons</option>

                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select class=\"\" name=\"form[child]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"{{ 1|number_format }}\">1 child</option>
                        <option value=\"{{ 2|number_format }}\">2 childs</option>
                        <option value=\"{{ 3|number_format }}\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select class=\"\" name=\"form[baby]\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"{{ 1|number_format }}\">1 baby</option>
                        <option value=\"{{ 2|number_format }}\">2 babies</option>
                        <option value=\"{{ 3|number_format }}\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>
</form>
</br>
<hr>


    <h4 align=\"center\">AVAILABLE ROOMS</h4>

    <table >
        <thead>
          <tr >
            <th width=\"200\">Room</th>
            <th width=\"200\">Room Type</th>
            <th width=\"200\">Price</th>
            <th width=\"200\">Booking</th>
          </tr>
        </thead>
        <tbody >
        <div class=\"row\">
          {% for room in rooms %}
            <tr >
                <td>{{ room.name}}</td>
                <td> <h7>RoomType</h7></td>
                <td> <h7>Price</h7></td>
                <td>
                    <a class=\"hollow button warning\" href=\"{{ path(\"pre_booking\")  }}\">BOOKING</a>
                </td>
            </tr>
          {% endfor %}
        </div>
        </tbody>
    </table>



{% endblock %}

", "home/available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
