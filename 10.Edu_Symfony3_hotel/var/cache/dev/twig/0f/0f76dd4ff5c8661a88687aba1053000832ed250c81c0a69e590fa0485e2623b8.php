<?php

/* :home:available_room_list.html.twig */
class __TwigTemplate_8dfb63f5ce25e0f4c3d0cf69d8e38328ae72f7f6492d7604d55cba7dfb811466 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:available_room_list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:available_room_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:available_room_list.html.twig"));

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

<form method=\"post\">
    <div align=\"center\" class=\"medium-12  columns\">
        <h2>Check your arrival dates and reservation details</h2>
    </div>
    <hr>
        <div class=\"row\">
           <div class=\"medium-12 large-12 columns\">
                <div align=\"center\" class=\"medium-6  columns\" >
                    <label for=\"dt1\">CHECK-IN:</label>
                    <input id=\"dt1\"  name=\"form[from]\"  type=\"date\" onchange=\"myFunction1('dt1')\" style=\"border-color: #00ace6;\"  class=\"datepicker\" required/>
                    <label for=\"dt2\">CHECK-OUT:</label>
                    <input id=\"dt2\"  name=\"form[to]\" type=\"date\" onchange=\"myFunction1('dt2')\" style=\"border-color: #00ace6;\"  class=\"datepicker\"  required/>
                </div>
               <div align=\"center\" style=\"padding-top: 10%\">
                   <input class=\"button\" id=\"search_offer\"  onchange=\"myFunction1('search_offer')\" type=\"submit\" value=\"SEARCH OFFER\" disabled=\"disabled\"/>
                   <input class=\"button\" onClick=\"window.location.reload()\" type=\"reset\" value=\"REFRESH\" />
               </div>
           </div>



            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select id=\"room_type\"  onchange=\"myFunction1('room_type')\" name=\"form[room_type]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"room_type1\" onchange=\"myFunction1('room_type1')\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" >Single</option>
                        <option id=\"room_type2\" onchange=\"myFunction1('room_type2')\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" >Double</option>
                        <option id=\"room_type3\" onchange=\"myFunction1('room_type3')\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" >Triple</option>
                    </select>
                </div>
            </div>

            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>

                    <select id=\"adult\" onchange=\"myFunction1('adult')\" name=\"form[adult]\" style=\"border-color: #00ace6\"  required>
                    <option selected=\"selected\" >Choose</option>
                    <option id=\"adult1\" onchange=\"myFunction1('adult1')\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 person</option>
                    <option id=\"adult2\" onchange=\"myFunction1('adult2')\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 persons</option>
                    <option id=\"adult3\" onchange=\"myFunction1('adult3')\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 persons</option>
                    </select>

                </div>

            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select id=\"child\" onchange=\"myFunction1('child')\" name=\"form[child]\" style=\"border-color: #00ace6\" >
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"child1\" onchange=\"myFunction1('child1')\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 child</option>
                        <option id=\"child2\" onchange=\"myFunction1('child2')\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 childs</option>
                        <option id=\"child3\" onchange=\"myFunction1('adult3')\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select id=\"baby\" onchange=\"myFunction1('baby')\" name=\"form[baby]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"baby1\" onchange=\"myFunction1('baby1')\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 baby</option>
                        <option id=\"baby2\" onchange=\"myFunction1('baby2')\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 babies</option>
                        <option id=\"baby3\" onchange=\"myFunction1('baby3')\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>


</form>
    <hr>
    <h4 align=\"center\">AVAILABLE ROOMS</h4>
    <div>
        <table>
            <thead>
            <tr >
                <th width=\"200\">Description</th>
                <th width=\"200\">Type</th>
                <th width=\"200\">Price</th>
                <th width=\"200\">Your choice</th>
            </tr>
            </thead>
            <tbody >
            <div class=\"row\" id=\"offer_table\">
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 112
            echo "                    <tr >
                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 114
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "roomtype", array()) . " ROOM"), "html", null, true);
            echo "</td>
                        <td>";
            // line 115
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "price", array()) . " EUR"), "html", null, true);
            echo "</td>
                        <td><a class=\"button\"  href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_booking", array("id_room" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", array())))), "html", null, true);
            echo "\">CHOOSE</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </div>
            </tbody>
        </table>
    </div>



    <script>

            function myFunction1() {


                var room_type = document.getElementById(\"room_type\");//room_type 1 2 3
                var adult = document.getElementById(\"adult\"); //child 1 2 3
               // var search_offer = document.getElementById(\"search_offer\");
                //var child = document.getElementById(\"child\"); // baby for 1 2 3
               // var adult1 = document.getElementById(\"adult1\");
               // var adult2 = document.getElementById(\"adult2\");
                //var adult3 = document.getElementById(\"adult3\");
                //var offer_table = document.getElementById(\"offer_table\");
                var dt1 = document.getElementById(\"dt1\");
                var dt2 = document.getElementById(\"dt2\");

                // to trigger search_offer button just after dates , room_type and  adult selection
                if ( dt1.value !==\"\" && dt2.value !==\"\" && adult.value ===\"1\" || adult.value ===\"2\" || adult.value ===\"3\")
                {
                        document.getElementById(\"search_offer\").disabled=false;

                }



                if(room_type.value === \"1\" ){
                    // document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }
                else if(room_type.value === \"2\" ){
                    //document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"adult2\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }
                else if (room_type.value === \"3\" ){
                 //   document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"adult2\").disabled=false;
                    document.getElementById(\"adult3\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }

                if(adult.value === \"1\" ){
                   // document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                }
                else if(adult.value === \"2\" ){
                  //  document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                    document.getElementById(\"child2\").disabled=false;
                }
                else if(adult.value === \"3\" ){
                   // document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                    document.getElementById(\"child2\").disabled=false;
                    document.getElementById(\"child3\").disabled=false;
                }

                if(child.value === \"1\" ){
                   // document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                }
                else if(child.value === \"2\" ){
                  //  document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                    document.getElementById(\"baby2\").disabled=false;
                }
                else if(child.value === \"3\" ){
                 //   document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                    document.getElementById(\"baby2\").disabled=false;
                    document.getElementById(\"baby3\").disabled=false;
                }
            }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":home:available_room_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 119,  238 => 116,  234 => 115,  230 => 114,  226 => 113,  223 => 112,  219 => 111,  193 => 88,  189 => 87,  185 => 86,  171 => 75,  167 => 74,  163 => 73,  149 => 62,  145 => 61,  141 => 60,  127 => 49,  123 => 48,  119 => 47,  80 => 11,  74 => 8,  71 => 7,  62 => 6,  45 => 3,  15 => 1,);
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

<form method=\"post\">
    <div align=\"center\" class=\"medium-12  columns\">
        <h2>Check your arrival dates and reservation details</h2>
    </div>
    <hr>
        <div class=\"row\">
           <div class=\"medium-12 large-12 columns\">
                <div align=\"center\" class=\"medium-6  columns\" >
                    <label for=\"dt1\">CHECK-IN:</label>
                    <input id=\"dt1\"  name=\"form[from]\"  type=\"date\" onchange=\"myFunction1('dt1')\" style=\"border-color: #00ace6;\"  class=\"datepicker\" required/>
                    <label for=\"dt2\">CHECK-OUT:</label>
                    <input id=\"dt2\"  name=\"form[to]\" type=\"date\" onchange=\"myFunction1('dt2')\" style=\"border-color: #00ace6;\"  class=\"datepicker\"  required/>
                </div>
               <div align=\"center\" style=\"padding-top: 10%\">
                   <input class=\"button\" id=\"search_offer\"  onchange=\"myFunction1('search_offer')\" type=\"submit\" value=\"SEARCH OFFER\" disabled=\"disabled\"/>
                   <input class=\"button\" onClick=\"window.location.reload()\" type=\"reset\" value=\"REFRESH\" />
               </div>
           </div>



            <div class=\"medium-3  columns\">
                <label>ROOM TYPE</label>
                <div>
                    <select id=\"room_type\"  onchange=\"myFunction1('room_type')\" name=\"form[room_type]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"room_type1\" onchange=\"myFunction1('room_type1')\" value=\"{{ 1|number_format }}\" >Single</option>
                        <option id=\"room_type2\" onchange=\"myFunction1('room_type2')\" value=\"{{ 2|number_format }}\" >Double</option>
                        <option id=\"room_type3\" onchange=\"myFunction1('room_type3')\" value=\"{{ 3|number_format }}\" >Triple</option>
                    </select>
                </div>
            </div>

            <div class=\"medium-3  columns\">
                <label>Adult</label>
                <div>

                    <select id=\"adult\" onchange=\"myFunction1('adult')\" name=\"form[adult]\" style=\"border-color: #00ace6\"  required>
                    <option selected=\"selected\" >Choose</option>
                    <option id=\"adult1\" onchange=\"myFunction1('adult1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 person</option>
                    <option id=\"adult2\" onchange=\"myFunction1('adult2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 persons</option>
                    <option id=\"adult3\" onchange=\"myFunction1('adult3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 persons</option>
                    </select>

                </div>

            </div>
            <div class=\"medium-3  columns\">
                <label>Child</label>
                <div>
                    <select id=\"child\" onchange=\"myFunction1('child')\" name=\"form[child]\" style=\"border-color: #00ace6\" >
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"child1\" onchange=\"myFunction1('child1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 child</option>
                        <option id=\"child2\" onchange=\"myFunction1('child2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 childs</option>
                        <option id=\"child3\" onchange=\"myFunction1('adult3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label>Baby</label>
                <div>
                    <select id=\"baby\" onchange=\"myFunction1('baby')\" name=\"form[baby]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"baby1\" onchange=\"myFunction1('baby1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 baby</option>
                        <option id=\"baby2\" onchange=\"myFunction1('baby2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 babies</option>
                        <option id=\"baby3\" onchange=\"myFunction1('baby3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>


</form>
    <hr>
    <h4 align=\"center\">AVAILABLE ROOMS</h4>
    <div>
        <table>
            <thead>
            <tr >
                <th width=\"200\">Description</th>
                <th width=\"200\">Type</th>
                <th width=\"200\">Price</th>
                <th width=\"200\">Your choice</th>
            </tr>
            </thead>
            <tbody >
            <div class=\"row\" id=\"offer_table\">
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
    </div>



    <script>

            function myFunction1() {


                var room_type = document.getElementById(\"room_type\");//room_type 1 2 3
                var adult = document.getElementById(\"adult\"); //child 1 2 3
               // var search_offer = document.getElementById(\"search_offer\");
                //var child = document.getElementById(\"child\"); // baby for 1 2 3
               // var adult1 = document.getElementById(\"adult1\");
               // var adult2 = document.getElementById(\"adult2\");
                //var adult3 = document.getElementById(\"adult3\");
                //var offer_table = document.getElementById(\"offer_table\");
                var dt1 = document.getElementById(\"dt1\");
                var dt2 = document.getElementById(\"dt2\");

                // to trigger search_offer button just after dates , room_type and  adult selection
                if ( dt1.value !==\"\" && dt2.value !==\"\" && adult.value ===\"1\" || adult.value ===\"2\" || adult.value ===\"3\")
                {
                        document.getElementById(\"search_offer\").disabled=false;

                }



                if(room_type.value === \"1\" ){
                    // document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }
                else if(room_type.value === \"2\" ){
                    //document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"adult2\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }
                else if (room_type.value === \"3\" ){
                 //   document.getElementById(\"adult\").disabled=false;
                    document.getElementById(\"adult1\").disabled=false;
                    document.getElementById(\"adult2\").disabled=false;
                    document.getElementById(\"adult3\").disabled=false;
                    document.getElementById(\"room_type\").style=\"pointer-events: none\";
                }

                if(adult.value === \"1\" ){
                   // document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                }
                else if(adult.value === \"2\" ){
                  //  document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                    document.getElementById(\"child2\").disabled=false;
                }
                else if(adult.value === \"3\" ){
                   // document.getElementById(\"child\").disabled=false;
                    document.getElementById(\"child1\").disabled=false;
                    document.getElementById(\"child2\").disabled=false;
                    document.getElementById(\"child3\").disabled=false;
                }

                if(child.value === \"1\" ){
                   // document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                }
                else if(child.value === \"2\" ){
                  //  document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                    document.getElementById(\"baby2\").disabled=false;
                }
                else if(child.value === \"3\" ){
                 //   document.getElementById(\"baby\").disabled=false;
                    document.getElementById(\"baby1\").disabled=false;
                    document.getElementById(\"baby2\").disabled=false;
                    document.getElementById(\"baby3\").disabled=false;
                }
            }
    </script>


{% endblock %}

", ":home:available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
