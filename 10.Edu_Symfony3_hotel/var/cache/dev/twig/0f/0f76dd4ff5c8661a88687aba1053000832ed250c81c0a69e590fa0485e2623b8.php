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

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/progresbar.css"), "html", null, true);
        echo "\">
        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li class=\"is-active\">Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

<form action=\"\" method=\"post\">
        <div class=\"row\">
           <br class=\"medium-12 large-12 columns\">

               <h4 align=\"center\">PLEASE CHOOSE DATES AND NUMBER OF GUESTS</h4></br>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" type=\"date\"  value=\"\" style=\"border-color: #00ace6\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" style=\"border-color: #00ace6\" value=\"\" type=\"date\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH OFFER\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    ";
        // line 42
        if (((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "room_type", array()) > 2) && (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "room_type", array()) < 3))) {
            // line 43
            echo "
                    <select class=\"\" name=\"form[room_type]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
            echo "\">Single</option>
                        <option value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
            echo "\">Double</option>
                        <option value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
            echo "\">Triple</option>
                    </select>
                    ";
        }
        // line 51
        echo "                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"\" name=\"form[adult]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 person</option>
                        <option value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 persons</option>
                        <option value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 persons</option>

                    </select>
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select class=\"\" name=\"form[child]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 child</option>
                        <option value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 childs</option>
                        <option value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select class=\"\" name=\"form[baby]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\">1 baby</option>
                        <option value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\">2 babies</option>
                        <option value=\"";
        // line 85
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
            <th width=\"200\">Description</th>
            <th width=\"200\">Type</th>
            <th width=\"200\">Price</th>
            <th width=\"200\">Your choice</th>
          </tr>
        </thead>
        <tbody >
        <div class=\"row\">
          ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 110
            echo "            <tr >
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "roomtype", array()) . " ROOM"), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "price", array()) . " EUR"), "html", null, true);
            echo "</td>
                <td><a class=\"button\"  href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_booking", array("id_room" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", array())))), "html", null, true);
            echo "\">CHOOSE</a></td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "              </div>
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
        return array (  250 => 117,  241 => 114,  237 => 113,  233 => 112,  229 => 111,  226 => 110,  222 => 109,  195 => 85,  191 => 84,  187 => 83,  173 => 72,  169 => 71,  165 => 70,  152 => 60,  148 => 59,  144 => 58,  135 => 51,  129 => 48,  125 => 47,  121 => 46,  116 => 43,  114 => 42,  80 => 11,  74 => 8,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
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
            <li class=\"is-active\">Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

<form action=\"\" method=\"post\">
        <div class=\"row\">
           <br class=\"medium-12 large-12 columns\">

               <h4 align=\"center\">PLEASE CHOOSE DATES AND NUMBER OF GUESTS</h4></br>


                <div class=\"medium-2  columns\">CHECK-IN:</div>

                <div class=\"medium-2  columns\"><input name=\"form[from]\" type=\"date\"  value=\"\" style=\"border-color: #00ace6\"  class=\"datepicker\" /></div>

                <div class=\"medium-2  columns\">CHECK-OUT:</div>

                <div class=\"medium-2  columns\"><input name=\"form[to]\" style=\"border-color: #00ace6\" value=\"\" type=\"date\" class=\"datepicker\" /></div>

              <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH OFFER\" /></div>

           </div>
            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    {% if form.room_type > 2 and form.room_type < 3 %}

                    <select class=\"\" name=\"form[room_type]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\">Choose</option>
                        <option value=\"{{ 1|number_format }}\">Single</option>
                        <option value=\"{{ 2|number_format }}\">Double</option>
                        <option value=\"{{ 3|number_format }}\">Triple</option>
                    </select>
                    {% endif %}
                </div>
            </div>
            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>
                    <select class=\"\" name=\"form[adult]\" style=\"border-color: #00ace6\">
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
                    <select class=\"\" name=\"form[child]\" style=\"border-color: #00ace6\">
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
                    <select class=\"\" name=\"form[baby]\" style=\"border-color: #00ace6\">
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
            <th width=\"200\">Description</th>
            <th width=\"200\">Type</th>
            <th width=\"200\">Price</th>
            <th width=\"200\">Your choice</th>
          </tr>
        </thead>
        <tbody >
        <div class=\"row\">
          {% for room in rooms %}
            <tr >
                <td>{{ room.description}}</td>
                <td>{{ room.roomtype ~ \" ROOM\"  }}</td>
                <td>{{ room.price ~ \" EUR\"}}</td>
                <td><a class=\"button\"  href=\"{{ path(\"front_booking\",{'id_room' : room.id|number_format })}}\">CHOOSE</a></td>
                  </tr>
                {% endfor %}
              </div>
              </tbody>
          </table>



      {% endblock %}

", "home/available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
